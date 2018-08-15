<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/Exchange.php';

use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;
use jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType;
use jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use jamesiarmes\PhpEws\Request\GetAttachmentType;
use jamesiarmes\PhpEws\Request\GetItemType;
use jamesiarmes\PhpEws\Type\ItemIdType;
use jamesiarmes\PhpEws\Type\ItemResponseShapeType;
use jamesiarmes\PhpEws\Type\RequestAttachmentIdType;

class GetAttachments extends SugarBean
{
    public function fetchAttachments(User $user, $messageID)
    {
        $exchange = new Exchange();
        $client = $exchange->setConnection($user);


        // Build the get item request.
        $request = new GetItemType();
        $request->ItemShape = new ItemResponseShapeType();
        $request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
        $request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

        // Add the message id to the request.
        $item = new ItemIdType();
        $item->Id = $messageID;
        $request->ItemIds->ItemId[] = $item;

        try {
            $response = $client->GetItem($request);
        } catch (Exception $fault) {
            $message = $fault->getMessage();
            $code = $fault->getCode();
            LoggerManager::getLogger()->fatal("Failed to fetch attachments with \"$code: $message\"\n");
        }

        $response_messages = $response->ResponseMessages->GetItemResponseMessage;

        foreach ($response_messages as $response_message) {
            if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
                $code = $response_message->ResponseCode;
                $message = $response_message->MessageText;
                LoggerManager::getLogger()->fatal("Failed to get message with \"$code: $message\"\n");
                continue;
            }

            $attachments = array();
            foreach ($response_message->Items->Message as $item) {
                if (empty($item->Attachments)) {
                    continue;
                }
                foreach ($item->Attachments->FileAttachment as $attachment) {
                    $attachments[] = $attachment->AttachmentId->Id;
                }
            }

            $request = new GetAttachmentType();
            $request->AttachmentIds = new NonEmptyArrayOfRequestAttachmentIdsType();

            foreach ($attachments as $attachment_id) {
                $id = new RequestAttachmentIdType();
                $id->Id = $attachment_id;
                $request->AttachmentIds->AttachmentId[] = $id;
            }

            try {
                $response = $client->GetAttachment($request);
            } catch (Exception $fault) {
                $message = $fault->getMessage();
                $code = $fault->getCode();
                LoggerManager::getLogger()->fatal("Failed to get attachments with \"$code: $message\"\n");
            }

            $attachment_response_messages = $response->ResponseMessages->GetAttachmentResponseMessage;

            foreach ($attachment_response_messages as $attachment_response_message) {
                if ($attachment_response_message->ResponseClass
                    != ResponseClassType::SUCCESS
                ) {
                    $code = $response_message->ResponseCode;
                    $message = $response_message->MessageText;
                    LoggerManager::getLogger()->fatal("Failed to get attachment with \"$code: $message\"\n");
                    continue;
                }
            }
        }
    }
}