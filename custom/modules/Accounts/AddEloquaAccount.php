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
include_once('custom/include/AccountSync/models/data/account.php');
include_once('custom/include/AccountSync/models/data/fieldValues.php');

/*
 * @Todo: Fix Company Category Field - it breaks the update and creation progress at the moment... not sure why.
 * @Todo: Find out a cleaner way of establishing the new object for fieldValues per custom field (API 2.0)
 */
class EloquaAccount
{
    public function AddAccount($bean, $event, $arg)
    {
        global $sugar_config;

        $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'], 'https://secure.p03.eloqua.com/API/REST/2.0/');
        $account = new EloquaDataAccount();

        // Fields Associated to both Updating and Creating Leads
        $account->name = $bean->name;
        $account->businessPhone = $bean->phone_office;
        $account->description = $bean->description;

        // Return the new lines in the CRM into Line's 1-3
        $street_address = $this->cleanAddressLine($bean->billing_address_street);
        $account->address1 = $street_address[0];
        $account->address2 = $street_address[1];
        $account->address3 = $street_address[2];

        $account->city = $bean->billing_address_city;
        $account->country = $bean->billing_address_country;
        $account->province = $bean->billing_address_state;
        $account->postalCode = $bean->billing_address_postalcode;

        // Custom Fields Start Here
        $fieldValues = array();

        $fieldValues[0] = new fieldValues;
        $fieldValues[0]->type = "FieldValue";
        $fieldValues[0]->id = "100181"; // Number of Employees
        $fieldValues[0]->value = $bean->employees;

        $fieldValues[1] = new fieldValues;
        $fieldValues[1]->type = "FieldValue";
        $fieldValues[1]->id = "100182"; // Website
        $fieldValues[1]->value = $bean->website;

        $fieldValues[2] = new fieldValues;
        $fieldValues[2]->type = "FieldValue";
        $fieldValues[2]->id = "100170"; // FAX Number
        $fieldValues[2]->value = $bean->phone_fax;

        $fieldValues[3] = new fieldValues;
        $fieldValues[3]->type = "FieldValue";
        $fieldValues[3]->id = "100183"; // Account Rating
        $fieldValues[3]->value = $bean->rating_c;

        // Currently Broken??? Breaks when trying to write info into it.
        //$fieldValues[4] = new fieldValues;
        //$fieldValues[4]->type = "FieldValue";
        //$fieldValues[4]->id = "100097"; // Company Category
        //$fieldValues[4]->value = $bean->industry;

        $account->fieldValues = $fieldValues;

        if (empty($bean->eloqua_id_c) || $bean->eloqua_id_c == "0") {
            // Send the new contact information to the Eloqua Instance
            $response = $client->post('data/account', $account);

            // The ID of the Contact that's been pushed into Eloqua (saved into the CRM for reference later)
            $accountId = $response->id;
            $bean->eloqua_id_c = $accountId;
        } else {
            // The ID of the Eloqua record you're updating
            $account->id = $bean->eloqua_id_c;

            // Send the updated information to the Eloqua Instance
            $response = $client->put('data/account/' . $bean->eloqua_id_c, $account);
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