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

class eloquaSyncLeads
{
    public function getContacts()
    {
        global $sugar_config;

        // Variables for returning results in the query to the API
        $number_of_records = 100;
        $page = 1;
        $depth = 'complete';

        // Establish the connection to the API
        $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'],'https://secure.p03.eloqua.com/API/REST/1.0/');

        // Get the UNIX TIMESTAMP for today.
        $date = new DateTime();
        $date->sub(new DateInterval('PT2H'));
        $timestamp = $date->getTimestamp();

        // Build URL Fetch Params and Return the Contacts
        $contacts = $client->get('data/contacts?search=*&lastUpdatedAt=' . '1495065600' . '&depth=' . $depth . '&page=' . $page . '&count=' . $number_of_records);

        // Add all returned contacts
        $existing_contacts = $this->checkContactsExist($contacts);

        echo '<pre>';
        print_r($existing_contacts);
        echo '</pre>';

        // Total Number of Contacts to Be Added
        $total_number_of_contacts = $contacts->total;

        // Fetch the rest of the contacts if there are more to be added
        if ($total_number_of_contacts > $number_of_records) {
            $this->getRemainingContacts($total_number_of_contacts, $number_of_records);
        }
    }

    public function checkContactsExist($contacts)
    {
        // Container Arrays for existing Eloqua Contact IDs and Results of Adding Contacts
        $existing_eloqua_contact_ids = array();
        $results = array();

        // Fetch Existing Eloqua Contacts
        $bean = BeanFactory::getBean('Leads');
        $clause = "leads.eloqua_id != 0";
        $current_leads = $bean->get_full_list('',$clause);

        // Loop through existing Eloqua Contacts in the CRM and put them in an Array for Comparison
        foreach ($current_leads as $lead) {
            $existing_eloqua_contact_ids[] = $lead->eloqua_id;
        }

        // Loop through the fetched Eloqua Contacts from the API and see if they exist in the system
        foreach ($contacts->elements as $contact) {
            if (!in_array($contact->id,$existing_eloqua_contact_ids)) {
                $results[] = $this->addContactToCRM($contact);
            }
        }

        return $results;
    }

    public function addContactToCRM($contact)
    {
        $lead = new Lead();
        $lead->salutation = $contact->title;
        $lead->eloqua_id = $contact->id;
        return $lead;
    }

    public function getRemainingContacts($total_number_of_contacts, $number_of_records, $timestamp, $depth)
    {
        global $sugar_config;

        // Figure out the times the function has to be ran
        $times_to_loop = $total_number_of_contacts / $number_of_records;
        $rounded_times_to_loop = ceil($times_to_loop) - 1;

        // Establish the API connection
        $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'],'https://secure.p03.eloqua.com/API/REST/1.0/');

        for ($i = 2; $i<$rounded_times_to_loop; $i++) {
            // Build URL Fetch Params and Return the Contacts
            $contacts = $client->get('data/contacts?search=*&lastUpdatedAt=' . $timestamp . '&depth=' . $depth . '&page=' . $i . '&count=' . $number_of_records);

            // Add all returned contacts
            $this->checkContactsExist($contacts);
        }
    }
}
