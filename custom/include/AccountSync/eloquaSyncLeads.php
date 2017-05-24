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
        $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'], 'https://secure.p03.eloqua.com/API/REST/1.0/');

        // Get the UNIX TIMESTAMP for today.
        $date = new DateTime();
        $date->sub(new DateInterval('PT2H'));
        $timestamp = $date->getTimestamp();

        // Build URL Fetch Params and Return the Contacts
        $contacts = $client->get('data/contacts?search=*&lastUpdatedAt=' . $timestamp . '&depth=' . $depth . '&page=' . $page . '&count=' . $number_of_records);

        // Add all returned contacts
        $contacts_to_add = $this->checkContactsExist($contacts);

        // Total Number of Contacts to Be Added
        $total_number_of_contacts = $contacts->total;

        // Fetch the rest of the contacts if there are more to be added
        if ($total_number_of_contacts > $number_of_records) {
            $this->getRemainingContacts($total_number_of_contacts, $number_of_records);
        }
    }

    public function getRemainingContacts($total_number_of_contacts, $number_of_records, $timestamp, $depth)
    {
        global $sugar_config;

        // Figure out the times the function has to be ran
        $times_to_loop = $total_number_of_contacts / $number_of_records;
        $rounded_times_to_loop = ceil($times_to_loop) - 1;

        // Establish the API connection
        $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'], 'https://secure.p03.eloqua.com/API/REST/1.0/');

        for ($i = 2; $i < $rounded_times_to_loop; $i++) {
            // Build URL Fetch Params and Return the Contacts
            $contacts = $client->get('data/contacts?search=*&lastUpdatedAt=' . $timestamp . '&depth=' . $depth . '&page=' . $i . '&count=' . $number_of_records);

            // Add all returned contacts
            $this->checkContactsExist($contacts);
        }
    }

    public function checkContactsExist($contacts)
    {
        // Container Arrays for existing Eloqua Contact IDs and Results of Adding Contacts
        $existing_eloqua_contacts = array();

        $results = array();

        // Fetch Existing Eloqua Contacts
        $bean = BeanFactory::getBean('Leads');
        $clause = "leads.eloqua_id != 0";
        $current_leads = $bean->get_full_list('', $clause);

        // Loop through existing Eloqua Contacts in the CRM and put them in an Array for Comparison
        foreach ($current_leads as $lead) {
            $existing_eloqua_contacts[] = $lead->eloqua_id;
        }

        // Loop through the fetched Eloqua Contacts from the API and see if they exist in the system
        foreach ($contacts->elements as $contact) {
            if (!in_array($contact->id, $existing_eloqua_contacts)) {
                $results[] = $this->addContactToCRM($contact);
            } elseif (in_array($contact->id, $existing_eloqua_contacts)) {
                $results[] = $this->updateContactInCRM($contact);
            }
        }

        return $results;
    }

    public function addContactToCRM($contact)
    {
        // Build information for the new Lead entry
        $lead = BeanFactory::newBean('Leads');
        $lead->salutation = $contact->title;
        $lead->eloqua_id = $contact->id;
        $lead->first_name = $contact->firstName;
        $lead->last_name = $contact->lastName;
        $lead->email_address = $contact->emailAddress;
        $lead->account_name = $contact->accountName;
        $lead->title = $contact->title;

        // Address could be in multiple fields in Eloqua
        $address = array();
        $address[] = $contact->address1;
        $address[] = $contact->address2;
        $address[] = $contact->address3;
        $lead->primary_address_street = $this->eloquaAddressToCRM($address);

        $lead->primary_address_city = $contact->city;
        $lead->primary_address_state = $contact->province;
        $lead->phone_work = $contact->businessPhone;
        $lead->primary_address_country = $contact->country;
        $lead->eloqua_country = $contact->countrty;
        $lead->primary_address_postalcode = $contact->postalCode;

        $custom_fields_container = array();

        // Custom Eloqua Fields Loop-Through
        foreach ($contact->fieldValues as $custom_field) {
            if (isset($custom_field->value) && !empty($custom_field->value)) {
                $custom_fields_container[$custom_field->id] = $custom_field->value;
            }
        }

        // Get the field the Eloqua Custom Field belongs to in the CRM
        foreach ($custom_fields_container as $key => $value) {
            $field_name = $this->translateIdToReference($key);

            if ($field_name !== false) {
                $lead->$field_name = $value;
            }
        }

        // Save the new Lead to Database
        $lead->save();

        return $lead;
    }

    public function updateContactInCRM($contact)
    {
        // Fetch Existing Eloqua Contacts
        $bean = BeanFactory::getBean('Leads');
        $clause = "leads.eloqua_id = " . $contact->id;
        $leads = $bean->get_full_list('', $clause);

        foreach ($leads as $current_lead) {
            $current_lead->salutation = $contact->title;
            $current_lead->eloqua_id = $contact->id;
            $current_lead->first_name = $contact->firstName;
            $current_lead->last_name = $contact->lastName;
            $current_lead->email_address = $contact->emailAddress;
            $current_lead->account_name = $contact->accountName;
            $current_lead->title = $contact->title;

            // Address could be in multiple fields in Eloqua
            $address = array();
            $address[] = $contact->address1;
            $address[] = $contact->address2;
            $address[] = $contact->address3;
            $current_lead->primary_address_street = $this->eloquaAddressToCRM($address);

            $current_lead->primary_address_city = $contact->city;
            $current_lead->primary_address_state = $contact->province;
            $current_lead->phone_work = $contact->businessPhone;
            $current_lead->primary_address_country = $contact->country;
            $current_lead->eloqua_country = $contact->countrty;
            $current_lead->primary_address_postalcode = $contact->postalCode;

            $custom_fields_container = array();

            // Custom Eloqua Fields Loop-Through
            foreach ($contact->fieldValues as $custom_field) {
                if (isset($custom_field->value) && !empty($custom_field->value)) {
                    $custom_fields_container[$custom_field->id] = $custom_field->value;
                }
            }

            // Get the field the Eloqua Custom Field belongs to in the CRM
            foreach ($custom_fields_container as $key => $value) {
                $field_name = $this->translateIdToReference($key);

                if ($field_name !== false) {
                    $current_lead->$field_name = $value;
                }
            }

            // Save the new Lead to Database
            $current_lead->save();
        }

        return true;
    }

    public function translateIdToReference($id)
    {
        // Current Custom Fields to their ID
        // Lead Status & Rating commented out according to document
        $possibilities = array(
            'email_opt_out' => '100043',        // Email Opt Out
            'salutation' => '100017',           // Salutation
            'annual_revenue__c' => '100047',       // Annual Revenue
            'number_of_employees' => '100184',  // Number of Employees
            'industry' => '100046',             // Industry
            //'status' => '100048',               // Lead Status
            //'rating' => '100081',               // Lead Rating Combined
        );

        // Get the Key where there is a match in the array to the ID supplied to the function
        $key = array_search($id, $possibilities);

        // Either return the key (field name) or return false.
        if ($key !== false) {
            $field_name = $key;
            return $field_name;
        } else {
            return false;
        }
    }

    public function eloquaAddressToCRM($address)
    {
        // Container String
        $crm_address = "";

        // Line Break per line of the address unless final line
        // Logic for first and anything other than last line kept separate for future changes
        for ($i = 0; $i < count($address); $i++) {
            if ($i == 0) {
                $crm_address .= $address[$i] . "\r\n";
            } elseif ($i > 0 && $i < (count($address) - 1)) {
                $crm_address .= $address[$i] . "\r\n";
            } elseif ($i == (count($address) - 1)) {
                $crm_address .= $address[$i];
            }
        }

        return $crm_address;
    }
}
