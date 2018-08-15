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
include_once __DIR__ . '/../../../include/utils.php';

use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;
use jamesiarmes\PhpEws\Enumeration\MessageDispositionType;
use jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use jamesiarmes\PhpEws\Request\CreateItemType;
use jamesiarmes\PhpEws\Type\CancelCalendarItemType;
use jamesiarmes\PhpEws\Type\ItemIdType;

class Cancel extends SugarBean
{
    public function cancelMeeting(User $user, $event_id, $change_key)
    {
        $exchange = new Exchange();
        $client = $exchange->setConnection($user);
        $create  = new Create();

        $attendees = $create->getAttendees();
        $request = new CreateItemType();

        if (empty($attendees)){
            $request->MessageDisposition = MessageDispositionType::SAVE_ONLY;
        } else {
            $request->MessageDisposition = MessageDispositionType::SEND_AND_SAVE_COPY;
        }

        $request->Items = new NonEmptyArrayOfAllItemsType();
        $cancellation = new CancelCalendarItemType();
        $cancellation->ReferenceItemId = new ItemIdType();
        $cancellation->ReferenceItemId->Id = $event_id;
        $cancellation->ReferenceItemId->ChangeKey = $change_key;
        $request->Items->CancelCalendarItem[] = $cancellation;


        try {
            $response = $client->CreateItem($request);
        } catch (Exception $fault) {
            $message = $fault->getMessage();
            $code = $fault->getCode();
            LoggerManager::getLogger()->fatal("Failed to cancel event with \"$code: $message\"\n");
        }

        $response_messages = $response->ResponseMessages->CreateItemResponseMessage;
        foreach ($response_messages as $response_message) {
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $code = $response_message->ResponseCode;
                $message = $response_message->MessageText;
                LoggerManager::getLogger()->fatal("Cancellation failed to create with \"$code: $message\"\n");
                continue;
            }
        }
    }
}