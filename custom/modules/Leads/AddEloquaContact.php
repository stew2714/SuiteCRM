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

class EloquaContact
{
    public function AddContact($bean, $event, $arg)
    {
        $client = new EloquaRequest('MModalIncSandbox', 'Kieran.Monaghan', 'SalesAgility01', 'https://secure.p03.eloqua.com/API/REST/1.0/');
        $contact = new Contact();

        if (empty($bean->eloqua_id)) {
            // Build the new contact to push into Eloqua from the CRM
            $contact->emailAddress = $bean->email1;
            $contact->firstName = $bean->first_name;
            $contact->lastName = $bean->last_name;
            $contact->title = $bean->title;
            $contact->accountName = $bean->account_name;
            $contact->businessPhone = $bean->phone_work;
            $contact->address1 = $bean->primary_address_street;
            $contact->city = $bean->primary_address_city;
            $contact->country = $bean->primary_address_country;
            $contact->salesPerson = $bean->assigned_user_name;
            $contact->leadStatus = $bean->status;
            $response = $client->post('data/contact', $contact);
            // The ID of the Contact that's been pushed into Eloqua
            $contactId = $response->id;
            $bean->eloqua_id = $contactId;
        } else {
            // Build the updated information to update the Eloqua Contact from the CRM
            $contact->id = $bean->eloqua_id;
            $contact->emailAddress = $bean->email1;
            $contact->firstName = $bean->first_name;
            $contact->lastName = $bean->last_name;
            $contact->title = $bean->title;
            $contact->accountName = $bean->account_name;
            $contact->businessPhone = $bean->phone_work;
            $contact->address1 = $bean->primary_address_street;
            $contact->city = $bean->primary_address_city;
            $contact->country = $bean->primary_address_country;
            $contact->salesPerson = $bean->assigned_user_name;
            $contact->leadStatus = $bean->status;
            $response = $client->put('data/contact/' . $bean->eloqua_id, $contact);
        }
    }
}