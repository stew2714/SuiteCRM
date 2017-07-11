<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once('custom/include/AccountSync/eloquaRequest.php');
include_once('custom/include/AccountSync/models/data/contact.php');
include_once('custom/include/AccountSync/models/data/fieldValues.php');

class EloquaContact
{
    public function AddContact($bean, $event, $arg)
    {
        global $sugar_config;

        $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'], 'https://secure.p03.eloqua.com/API/REST/2.0/');
        $contact = new EloquaContactModel();

        // Fields Associated to both Updating and Creating Leads
        $contact->emailAddress = $bean->email1;
        $contact->firstName = $bean->first_name;
        $contact->lastName = $bean->last_name;
        $contact->title = $bean->title;
        $contact->accountName = $bean->account_name;
        $contact->businessPhone = $bean->phone_work;

        // Return the new lines in the CRM into Line's 1-3
        $street_address = $this->cleanAddressLine($bean->primary_address_street);
        $contact->address1 = $street_address[0];
        $contact->address2 = $street_address[1];
        $contact->address3 = $street_address[2];

        $contact->city = $bean->primary_address_city;
        $contact->country = $bean->primary_address_country;
        $contact->salesPerson = $bean->assigned_user_name;
        $contact->province = $bean->primary_address_state;
        $contact->postalCode = $bean->primary_address_postalcode;

        // Custom Fields Start Here
        $fieldValues = array();

        $fieldValues[0] = new fieldValues;
        $fieldValues[0]->type = "FieldValue";
        $fieldValues[0]->id = "100048"; // Lead Status
        $fieldValues[0]->value = $bean->status;

        $fieldValues[1] = new fieldValues;
        $fieldValues[1]->type = "FieldValue";
        $fieldValues[1]->id = "100043"; // Email Opt Out
        $fieldValues[1]->value = $bean->email_opt_out;

        $fieldValues[2] = new fieldValues;
        $fieldValues[2]->type = "FieldValue";
        $fieldValues[2]->id = "100017"; // Salutation
        $fieldValues[2]->value = $bean->salutation;

        $fieldValues[3] = new fieldValues;
        $fieldValues[3]->type = "FieldValue";
        $fieldValues[3]->id = "100047"; // Annual Revenue
        $fieldValues[3]->value = $bean->annual_revenue_c;

        $fieldValues[4] = new fieldValues;
        $fieldValues[4]->type = "FieldValue";
        $fieldValues[4]->id = "100184"; // Number of Employees
        $fieldValues[4]->value = $bean->number_of_employees_c;

        $fieldValues[5] = new fieldValues;
        $fieldValues[5]->type = "FieldValue";
        $fieldValues[5]->id = "100046"; // Industry
        $fieldValues[5]->value = $bean->industry_c;

        $fieldValues[6] = new fieldValues;
        $fieldValues[6]->type = "FieldValue";
        $fieldValues[6]->id = "100081"; // Lead Rating Combined
        $fieldValues[6]->value = $bean->eloqua_lead_rating_c;

        $fieldValues[7] = new fieldValues;
        $fieldValues[7]->type = "FieldValue";
        $fieldValues[7]->id = "100197"; // Website
        $fieldValues[7]->value = $bean->website;

        $fieldValues[8] = new fieldValues;
        $fieldValues[8]->type = "FieldValue";
        $fieldValues[8]->id = "100195"; // Description
        $fieldValues[8]->value = $bean->description;

        $fieldValues[9] = new fieldValues;
        $fieldValues[9]->type = "FieldValue";
        $fieldValues[9]->id = "100196"; // Rating
        $fieldValues[9]->value = $bean->rating_c;

        $contact->fieldValues = $fieldValues;

        if (empty($bean->eloqua_id_c)) {
            // Send the new contact information to the Eloqua Instance
            $response = $client->post('data/contact', $contact);

            // The ID of the Contact that's been pushed into Eloqua (saved into the CRM for reference later)
            $contactId = $response->id;
            $bean->eloqua_id_c = $contactId;
        } else {
            // The ID of the Eloqua record you're updating
            $contact->id = $bean->eloqua_id_c;

            // Send the updated information to the Eloqua Instance
            $response = $client->put('data/contact/' . $bean->eloqua_id_c, $contact);
        }
    }

    public function cleanAddressLine($address)
    {
        // Possible function for cleaning out the Text Area into Eloqua Fields.
        $address = explode(PHP_EOL, $address);

        for ($i = 0; $i < count($address); $i++) {
            $address[$i] = str_replace("\r", "", $address[$i]);
        }

        return $address;
    }
}