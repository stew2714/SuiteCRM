<?php
/**
 *
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

require_once('custom/include/AccountSync/eloquaRequest.php');

// @TODO: Clean Up Update/Save Common Fields Into An Easily Manageable State for adding future fields...

class eloquaSync
{
    var $activities = array(
        "EmailSend",
        "EmailOpen",
        "EmailClickthrough",
        "Subscribe",
        "Unsubscribe",
        "Bounceback",
        "FormSubmit",
        "PageView",
        "WebVisit"
    );
    var $client;

    public function __construct()
    {
        global $sugar_config;
        // Establish the connection to the API
        $this->clientBulk = new EloquaRequest(
            $sugar_config['eloqua_company'],
            $sugar_config['eloqua_username'],
            $sugar_config['eloqua_password'],
            'https://secure.p03.eloqua.com/API/BULK/2.0/'
        );
        $this->client = new EloquaRequest(
            $sugar_config['eloqua_company'],
            $sugar_config['eloqua_username'],
            $sugar_config['eloqua_password'],
            'https://secure.p03.eloqua.com/API/REST/2.0/'
        );

    }

    public function defineExport($activityType = "emailOpen")
    {
        global $timedate;
        $bean = BeanFactory::getBean("SA_eloqua_queue");
        $syncs = $bean->get_full_list("", "sa_eloqua_queue.status = 'Still to Process' AND sa_eloqua_queue.queue_type = '{$activityType}'");

        if (count($syncs) == 0) {
            echo "New Sync needs to be created. ";
            $bean->name = "New Sync";
            $bean->status = "Still to Process";
            $bean->queue_type = $activityType;
            $postUrl = "/activities/exports";
            $postData = array(
                'filter' => "'{{Activity.Type}}'='{$activityType}'",
                "name"   => "Bulk Activity Export - {$activityType}",
                "fields" => array(
                    "ActivityId"        => "{{Activity.Id}}",
                    "ActivityType"      => "{{Activity.Type}}",
                    "ActivityDate"      => "{{Activity.CreatedAt}}",
                    "ContactId"         => "{{Activity.Contact.Id}}",
//                    "EmailWebLink"      => "{{Activity.Field(EmailWebLink)}}",
                    "ExternalId"        => "{{Activity.ExternalId}}",
                    "ContactIdExt"      => "{{Activity.Contact.Field(ContactIDExt)}}"
                ),
            );

            if($activityType != "FormSubmit" && $activityType != "PageView" && $activityType != "WebVisit"){
                $postData['fields']['EmailAddress'] = "{{Activity.Field(EmailAddress)}}";
            }
            if($activityType != "WebVisit"){
                $postData['fields']['CampaignId'] = "{{Activity.Campaign.Id}}";
            }
            $data = $this->clientBulk->post($postUrl, $postData);
            $bean->description = $data->uri;
            $bean->save();
            $uri = $data->uri;
            echo "We have new call make. ";
        } else {
            echo "we have existing syncs outstanding.";
            foreach ($syncs as $item) {
                $bean = $item;
                break;
            }
            $uri = $bean->description;
        }

        $data = $this->createBulk($uri);
        if (isset($data->failures) && count($data->failures) > 0) {
            $GLOBALS['log']->fatal = "Failed Bulk Export " . print_r($data);
            $bean->status = "Failed";
            $bean->save();

            return false;
        }
        echo "we have made bulk on server. ";
        $data = $this->checkBulk($data->uri);

        if ($data != null) {
            $bean->status = "Processed";
            $bean->save();
            //we got the data so now delete the bulk to be 100% sure we dont make a mess of the server.
            $this->deleteBulk($uri);
        }else{
            $bean->last_checked = $timedate->now();
            $bean->save();
        }

        echo '<pre>';
        print_r($data);
        $this->save_data($data->items);
        echo '</pre>';
    }

    public function save_data($data)
    {
        foreach ($data as $record) {
            $bean = BeanFactory::getBean("SA_eloqua_activity");
            $bean->retrieve_by_string_fields(
                array(
                    "activity_id" => $record->ActivityId
                )
            );

            $bean->email_address = $record->EmailAddress;
            $bean->activity_type = $record->ActivityType;
            $bean->campaign_id = $record->CampaignId;
            $bean->activity_date = $record->ActivityDate;
            $bean->activity_id = $record->ActivityId;
            $bean->eloqua_contact_id = $record->ContactId;

            //now see if we can find the contact....
            $contact = BeanFactory::getBean("Leads")->retrieve_by_string_fields(
                array(
                    "eloqua_id_c" => $bean->eloqua_contact_id
                )
            );
            if (isset($contact->id) && !empty($contact->id)) {
                $bean->related_id = $contact->id;
            }

            $bean->save();
        }
    }

    public function deleteBulk($postUrl)
    {
        $data = $this->clientBulk->delete($postUrl);

        return $data;
    }

    public function createBulk($postDataUrl = "/activities/exports/1", $postUrl = "/syncs")
    {
        $postData = array(
            "syncedInstanceUri" => $postDataUrl
        );
        $data = $this->clientBulk->post($postUrl, $postData);

        return $data;
    }

    public function checkBulk($postUrl = "/syncs/11")
    {
        $check = $this->clientBulk->get($postUrl);

        if ($check->status == "success") {
            $postUrl = $check->uri . "/data";
            $data = $this->clientBulk->get($postUrl);

            return $data;
        }
        echo 'Data not ready Yet. ';
    }

    public function getCampaignList($createCampaigns = true)
    {

        $date = new DateTime();
        $date->sub(new DateInterval('PT2H'));
        $timestamp = $date->getTimestamp();

        $campaigns = $this->client->get('assets/campaigns?search=*&depth=complete&lastUpdatedAt=' . $timestamp);

        foreach ($campaigns->elements as $campaign) {
            if ($createCampaigns == true) {
                $bean = BeanFactory::getBean("SA_eloqua_campaigns");
                $bean->retrieve($campaign->id);

                if (empty($bean->id)) {
                    $bean->new_with_id = true;
                    $bean->id = $campaign->id;
                }
                $bean->name = $campaign->name;
                $bean->save();
            }
        }

        return $campaigns;
    }

}
