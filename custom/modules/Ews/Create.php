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

use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;
use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttachmentsType;
use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType;
use jamesiarmes\PhpEws\Enumeration\BodyTypeType;
use jamesiarmes\PhpEws\Enumeration\CalendarItemCreateOrDeleteOperationType;
use jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use jamesiarmes\PhpEws\Enumeration\RoutingType;
use jamesiarmes\PhpEws\Request\CreateAttachmentType;
use jamesiarmes\PhpEws\Request\CreateItemType;
use jamesiarmes\PhpEws\Type\AttendeeType;
use jamesiarmes\PhpEws\Type\BodyType;
use jamesiarmes\PhpEws\Type\CalendarItemType;
use jamesiarmes\PhpEws\Type\EmailAddressType;
use jamesiarmes\PhpEws\Type\FileAttachmentType;
use jamesiarmes\PhpEws\Type\ItemIdType;

class Create extends SugarBean
{
    public $tracker_visibility = false;
    public $object_name = 'Exchange';
    public $field_defs = array();

    public function createMeeting(SugarBean $bean, User $user)
    {
        global $db;

        $exchange = new Exchange();

        $guests = $this->getAttendees();
        $client = $exchange->setConnection($user);
        $request = $this->buildRequest();
        $event = $this->buildEvent($bean);
        $this->setBody($event, $bean);
        $this->addAttendees($guests, $event);
        $this->addAttachments($bean, $event, $client);

        // Add the event to the request
        $request->Items->CalendarItem[] = $event;

        try {
            $response = $client->CreateItem($request);
        } catch (Exception $fault) {
            $message = $fault->getMessage();
            $code = $fault->getCode();
            LoggerManager::getLogger()->fatal("Failed to create event with \"$code: $message\"\n");
        }

        $response_messages = $response->ResponseMessages->CreateItemResponseMessage;
        foreach ($response_messages as $response_message) {
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $code = $response_message->ResponseCode;
                $message = $response_message->MessageText;
                LoggerManager::getLogger()->fatal("Event failed to create with \"$code: $message\"\n");
                continue;
            }

            foreach ($response_message->Items->CalendarItem as $item) {
                $id = $item->ItemId->Id;
                $changeKey = $item->ItemId->ChangeKey;

                $bean->outlook_id = 'ID: ' . $id . ' Key: ' . $changeKey;
                $bean->save();

                LoggerManager::getLogger()->fatal("Created event $id\n");
            }
        }
    }

    public function addAttachments($bean, $request, $client)
    {
        $rel = "attachment_notes";

        if ($bean->load_relationship($rel)) {
            $results = $bean->{$rel}->getBeans();
            if (count($results) > 0) {
                foreach ($results as $relatedBean) {
                    $filePath = "upload/{$relatedBean->id}";

                    $attachment = new FileAttachmentType();
                    $file = new SplFileObject($filePath);
                    $finfo = finfo_open();

                    $handle = fopen($filePath, "rb");
                    $contents = fread($handle, filesize($filePath));
                    $attachment->Content = $contents;
                    $attachment->Name = $relatedBean->name;
                    $attachment->ContentType = finfo_file($finfo, $filePath);
                    $request->Attachments->FileAttachment[] = $attachment;
                    fclose($handle);
                }
                return $request;
            }
        }
    }

    public function getAttendees()
    {
        global $current_user;

        $contactList = [];
        $userList = [];
        $leadList = [];
        $contactGuests = [];
        $userGuests = [];
        $leadGuests = [];
        $guests = [];

        if (!empty($_POST['contact_invitees'])) {
            $contactInvitees = explode(',', trim($_POST['contact_invitees'], ','));
        } else {
            $contactInvitees = array();
        }

        if (!empty($_POST['user_invitees'])) {
            $userInvitees = explode(',', trim($_POST['user_invitees'], ','));
        } else {
            $userInvitees = array();
        }

        if (!empty($_POST['lead_invitees'])) {
            $leadInvitees = explode(',', trim($_POST['lead_invitees'], ','));
        } else {
            $leadInvitees = array();
        }

        foreach ($contactInvitees as $contactCounter => $contact) {
            $contacts = new Contact;
            $contactList[] = $contacts->retrieve($contact);
            $contactGuests[] = [
                $contactList[$contactCounter]->name,
                $contactList[$contactCounter]->email1,
            ];
        }

        foreach ($userInvitees as $user) {
            $users = new User;
            if ($user !== $current_user->id && $user !== ' ') {
                $userList[] = $users->retrieve($user);
            }
        }

        foreach ($userList as $userCount => $userGuest) {
            $userGuests[] = [
                $userList[$userCount]->name,
                $userList[$userCount]->email1,
            ];
        }

        foreach ($leadInvitees as $leadCount => $lead) {
            $leads = new Lead;
            $leadList[] = $leads->retrieve($lead);
            $leadGuests[] = [
                $leadList[$leadCount]->name,
                $leadList[$leadCount]->email1,
            ];
        }

        $attendees = array_merge($contactGuests, $userGuests, $leadGuests);

        foreach ($attendees as $attendee) {
            $guests[] = [
                'name' => $attendee[0],
                'email' => $attendee[1]
            ];
        }

        return $guests;
    }

    protected function buildRequest()
    {
        $request = new CreateItemType();
        $request->SendMeetingInvitations = CalendarItemCreateOrDeleteOperationType::SEND_ONLY_TO_ALL;
        $request->Items = new NonEmptyArrayOfAllItemsType();

        return $request;
    }

    protected function buildEvent(SugarBean $bean)
    {
        if (!empty($bean->date_start)) {
            $start = new DateTime($bean->date_start);
        } else {
            $start = date("Y-m-d H:i:s");
        }

        if (!empty($bean->date_end)) {
            $end = new DateTime($bean->date_end);
        } else {
            $end = date("Y-m-d H:i:s", strtotime('1 hour'));
        }

        $event = new CalendarItemType();
        $event->RequiredAttendees = new NonEmptyArrayOfAttendeesType();
        $event->Start = $start->format('c');
        $event->End = $end->format('c');
        $event->Subject = $bean->name;
        $event->Description = $bean->description;

        return $event;
    }

    protected function setBody($event, $bean)
    {
        global $current_user;

        // Set the event body.
        $event->Body = new BodyType();
        $event->Body->_ = $current_user->full_name . ' has invited you to a Meeting <br><br> Subject: ' . $event->Subject . '<br><br> Description: ' . $event->Description . '<br><br> Start Date: ' . $event->Start . '<br><br> End Date: ' . $event->End;
        $event->Body->BodyType = BodyTypeType::HTML;

        $event->Location = new CalendarItemType();
        $event->Location = $bean->location;
    }

    public function addAttendees($guests, $event)
    {
        foreach ($guests as $guest) {
            $attendee = new AttendeeType();
            $attendee->Mailbox = new EmailAddressType();
            $attendee->Mailbox->EmailAddress = $guest['email'];
            $attendee->Mailbox->Name = $guest['name'];
            $attendee->Mailbox->RoutingType = RoutingType::SMTP;
            $event->RequiredAttendees->Attendee[] = $attendee;
        }

        return $event;
    }
}