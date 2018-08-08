<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/Exchange.php';
require_once('custom/modules/Ews/Create.php');

use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType;
use jamesiarmes\PhpEws\Enumeration\CalendarItemUpdateOperationType;
use jamesiarmes\PhpEws\Enumeration\ConflictResolutionType;
use jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use jamesiarmes\PhpEws\Enumeration\UnindexedFieldURIType;
use jamesiarmes\PhpEws\Request\UpdateItemType;
use jamesiarmes\PhpEws\Type\CalendarItemType;
use jamesiarmes\PhpEws\Type\ItemChangeType;
use jamesiarmes\PhpEws\Type\ItemIdType;
use jamesiarmes\PhpEws\Type\PathToUnindexedFieldType;
use jamesiarmes\PhpEws\Type\SetItemFieldType;

class Update extends SugarBean
{
    public $tracker_visibility = false;
    public $object_name = 'Exchange';
    public $field_defs = array();

    public function updateMeeting(SugarBean $bean, User $user, $meeting)
    {
        global $current_user;

        $exchange = new Exchange();
        $client = $exchange->setConnection($user);

        $keys = str_replace('ID: ', '', $bean->outlook_id);
        $keys = str_replace('Key: ', '', $keys);

        $keys = explode(' ', $keys);

        $id = $keys[0];
        $changeKey = $keys[1];

        // Build the request
        $request = new UpdateItemType();
        $request->ConflictResolution = ConflictResolutionType::ALWAYS_OVERWRITE;
        $request->SendMeetingInvitationsOrCancellations = CalendarItemUpdateOperationType::SEND_TO_ALL_AND_SAVE_COPY;

        // Build out item change request.
        $change = new ItemChangeType();
        $change->ItemId = new ItemIdType();
        $change->ItemId->Id = $id;
        $change->Updates = new NonEmptyArrayOfItemChangeDescriptionsType();

        $create = new Create;
        $create->addAttachments($bean, $request, $client);
        $guests = $create->getAttendees();

        // Set the updated subject
        $field = new SetItemFieldType();
        $field->FieldURI = new PathToUnindexedFieldType();
        $field->FieldURI->FieldURI = UnindexedFieldURIType::ITEM_SUBJECT;
        $field->CalendarItem = new CalendarItemType();
        $field->CalendarItem->Subject = $bean->name;
        $change->Updates->SetItemField[] = $field;

        // Set the updated location
        $field = new SetItemFieldType();
        $field->FieldURI = new PathToUnindexedFieldType();
        $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_LOCATION;
        $field->CalendarItem = new CalendarItemType();
        $field->CalendarItem->Location = $bean->location;
        $change->Updates->SetItemField[] = $field;

        // Add current user as default guest
        if (empty($guests)) {
            $guests[0] = [
                'email' => $current_user->email1,
                'name' => $current_user->name,
            ];
        }

        // Add new invitee
        if (!empty($guests)) {
            $field = new SetItemFieldType();
            $field->FieldURI = new PathToUnindexedFieldType();
            $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_REQUIRED_ATTENDEES;
            $field->CalendarItem = new CalendarItemType();

            $count = 0;
            foreach ($guests as $key => $guest) {
                $field->CalendarItem->RequiredAttendees->Attendee[$count]->Mailbox->EmailAddress = $guest['email'];
                $field->CalendarItem->RequiredAttendees->Attendee[$count]->Mailbox->RoutingType = 'SMTP';
                $count++;
            }

            $change->Updates->SetItemField[] = $field;
        }

        // Set the updated attachments
        if (!empty($request->Attachments)) {
            $field = new SetItemFieldType();
            $field->FieldURI = new PathToUnindexedFieldType();
            $field->FieldURI->FieldURI = UnindexedFieldURIType::ITEM_ATTACHMENTS;
            $field->CalendarItem = new CalendarItemType();
            $field->CalendarItem->Attachments = $request->Attachments;
            $change->Updates->SetItemField[] = $field;
        }

        $request->ItemChanges[] = $change;

        try {
            $response = $client->UpdateItem($request);
        } catch (Exception $fault) {
            $message = $fault->getMessage();
            $code = $fault->getCode();
            LoggerManager::getLogger()->warn("Failed to update event with \"$code: $message\"\n");
        }


        $response_messages = $response->ResponseMessages->UpdateItemResponseMessage;

        foreach ($response_messages as $response_message) {
            // Make sure the request succeeded.
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $code = $response_message->ResponseCode;
                $message = $response_message->MessageText;
                LoggerManager::getLogger()->warn("Failed to update event with \"$code: $message\"\n");
                continue;
            }
            foreach ($response_message->Items->CalendarItem as $item) {
                $id = $item->ItemId->Id;
                $changeKey = $item->ItemId->ChangeKey;

                $bean->outlook_id = 'ID: ' . $id . ' Key: ' . $changeKey;
                $bean->save();

                LoggerManager::getLogger()->info("Updated event $id\n");
            }
        }
    }
}