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
    var $limit = 1000;

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
        global $timedate, $sugar_config;

        $syncCheck = isset($sugar_config['eloqua']['sync_every_x_hours']) && is_numeric($sugar_config['eloqua']['sync_every_x_hours']) ? $sugar_config['eloqua']['sync_every_x_hours'] : 168;

        $bean = BeanFactory::getBean("SA_eloqua_queue");

        $lastChecked =
            $bean->get_full_list(
                "",
                " sa_eloqua_queue.status = 'Processed' AND 
                        sa_eloqua_queue.last_checked > NOW() - INTERVAL {$syncCheck} HOUR AND 
                        sa_eloqua_queue.queue_type = '{$activityType}'"
            );


        $syncs =
            $bean->get_full_list(
                "",
                " sa_eloqua_queue.status = 'Still to Process' AND 
                        sa_eloqua_queue.queue_type = '{$activityType}'"
            );

        if(count($lastChecked) != 0 && $syncs == 0){
            //as we have already checked this in the last x hours return as we dont want to do it again.
            return false;
        }

        if (count($syncs) == 0) {
            echo "New Sync needs to be created. ";
            $bean->name = "New Sync";
            $bean->status = "Still to Process";
            $bean->queue_type = $activityType;
            $postUrl = "/activities/exports";
            $date = $timedate->getNow()->sub(new DateInterval("PT{$syncCheck}H") )->format("Y-m-d H:i:s");
            $postData = array(
                "filter" => "'{{Activity.Type}}'='{$activityType}' AND '{{Activity.CreatedAt}}' > '{$date}'",
                "areSystemTimestampsInUTC" => true,
                "name"   => "Bulk Activity Export - {$activityType}",
                "fields" => array(
                    "ActivityId" => "{{Activity.Id}}",
                    "ActivityType" => "{{Activity.Type}}",
                    "ActivityDate" => "{{Activity.CreatedAt}}",
                    "ContactId" => "{{Activity.Contact.Id}}",
                    "ExternalId" => "{{Activity.ExternalId}}",
                    "ContactIdExt" => "{{Activity.Contact.Field(ContactIDExt)}}"
                ),
            );

            if ($activityType != "FormSubmit" && $activityType != "PageView" && $activityType != "WebVisit") {
                $postData['fields']['EmailAddress'] = "{{Activity.Field(EmailAddress)}}";
            }
            if ($activityType != "WebVisit") {
                $postData['fields']['CampaignId'] = "{{Activity.Campaign.Id}}";
            }

            if($activityType == "EmailClickthrough"){
                $postData['fields']['EmailWebLink']      = "{{Activity.Field(EmailClickedThruLink)}}";
            }
            $data = $this->clientBulk->post($postUrl, $postData);
            $bean->description = $data->uri;
            $bean->save();
            $uri = $data->uri;

            if (isset($data->failures) && count($data->failures) > 0) {
                $GLOBALS['log']->fatal = "Failed Bulk Export " . print_r($data);
                $bean->status = "Failed";
                $bean->save();

                return false;
            }
            echo "We have new call make. ";
        } else {
            echo "we have existing syncs outstanding.";
            foreach ($syncs as $item) {
                $bean = $item;
                break;
            }
            $uri = $bean->description;
            $offset = $bean->offset;

        }

        $data = $this->createBulk($uri);
        if (isset($data->failures) && count($data->failures) > 0) {
            $GLOBALS['log']->fatal = "Failed Bulk Export " . print_r($data);
            $bean->status = "Failed";
            $bean->save();

            return false;
        }
        echo "we have made bulk on server. ";
        $data = $this->checkBulk($data->uri, $offset);

        if ($data != null) {

            print_r($data);
            //check and see if we have more pages.

            $result = $this->save_data($data->items);


            if ($result == true) {
                if($data->hasMore == true){
                    //we have more data to get from the next page.
                    $newBean = clone $bean;
                    $newBean->id = "";
                    $newBean->offset = $data->count;
                    $newBean->save();
                }else{
                    $this->deleteBulk($uri);
                }

                $bean->status = "Processed";
                $bean->save();
                //we got the data so now delete the bulk to be 100% sure we dont make a mess of the server.

                return true;
            }
        } else {
            $bean->last_checked = $timedate->now();
            $bean->save();
        }

        return false;
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
            $bean->activity_date = date('Y-m-d H:i:s', strtotime($record->ActivityDate));
            $bean->activity_id = $record->ActivityId;
            $bean->eloqua_contact_id = $record->ContactId;
            if(isset($record->EmailWebLink)){
                $bean->activity_link = $record->EmailWebLink;
            }

            if($record->ActivityType == "Unsubscribe"){
                $contact = $this->search_contact_by_email($record->EmailAddress);
            }

            if(isset($bean->eloqua_contact_id) && !empty($bean->eloqua_contact_id)) {
                //now see if we can find the Lead and if not found look for an account....
                $contact = BeanFactory::getBean("Contacts")->retrieve_by_string_fields(
                    array(
                        "eloqua_id_c" => $bean->eloqua_contact_id
                    )
                );

                if (empty($contact->id)) {
                    $contact = BeanFactory::getBean("Accounts")->retrieve_by_string_fields(
                        array(
                            "eloqua_id_c" => $bean->eloqua_contact_id
                        )
                    );
                }

                if (empty($contact->id)) {
                    $contact = BeanFactory::getBean("Leads")->retrieve_by_string_fields(
                        array(
                            "eloqua_id_c" => $bean->eloqua_contact_id
                        )
                    );
                }
            }

            if (isset($contact->id) && !empty($contact->id)) {
                $bean->related_type = $contact->module_name;
                $bean->related_id = $contact->id;
            }

            $bean->save();
        }

        return true;
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

    public function checkBulk($postUrl = "/syncs/11", $offset = 0)
    {
        $check = $this->clientBulk->get($postUrl);
        $offsetParam = "";
        if($offset > 0 ){
            $offsetParam = "&offset={$offset}";
        }
        if ($check->status == "success") {
            $postUrl = $check->uri . "/data?limit={$this->limit}" . $offsetParam  ;
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



    public function saveContact($bean, $args, $event){
        if($_REQUEST['action'] == "ConvertLead"){
            $_REQUEST['record'] = $bean->db->quote($_REQUEST['record']);
            $list =
                BeanFactory::getBean("SA_eloqua_activity")->get_full_list(
                    "",
                    "sa_eloqua_activity.related_id = '{$_REQUEST['record']}' "
                );
            if(count($list) > 0) {

                foreach($list as $tracker){
                    $tracker->id = "";
                    $tracker->related_id = $bean->id;
                    $tracker->related_type = $bean->module_name;
                    $tracker->save();
                }
            }
        }
    }

    public function saveAccount($bean, $args, $event){
        if($_REQUEST['action'] == "ConvertLead"){
            $_REQUEST['record'] = $bean->db->quote($_REQUEST['record']);
            $list =
                BeanFactory::getBean("SA_eloqua_activity")->get_full_list(
                    "",
                    "sa_eloqua_activity.related_id = '{$_REQUEST['record']}' "
                );
            if(count($list) > 0) {

                foreach($list as $tracker){
                    $tracker->id = "";
                    $tracker->related_id = $bean->id;
                    $tracker->related_type = $bean->module_name;
                    $tracker->save();
                }
            }
        }
    }

    private function search_contact_by_email($email_address = null){

        $contacts = array();
        $ea = new EmailAddress();

        $prospects = $ea->getRelatedId($email_address, 'Accounts');

        if($prospects){
            foreach($prospects as $contact){
                $person = BeanFactory::getBean("Accounts", $contact);
                break; //There should only one one contact with that email address in the system.
                //@todo grow on this to give options.
            }
        }

        $leads = $ea->getRelatedId($email_address, 'Leads');

        if($leads){
            foreach($leads as $contact){
                $person = BeanFactory::getBean("Leads", $contact);
                break; //There should only one one contact with that email address in the system.
                //@todo grow on this to give options.
            }
        }

        $contacts = $ea->getRelatedId($email_address, 'Contacts');

        if($contacts){
            foreach($contacts as $contact){
                $person = BeanFactory::getBean("Contacts", $contact);
                break; //There should only one one contact with that email address in the system.
                //@todo grow on this to give options.
            }
        }


        return $person;
    }

}
