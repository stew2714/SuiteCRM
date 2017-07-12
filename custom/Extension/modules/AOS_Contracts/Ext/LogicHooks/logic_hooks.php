<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(77, 'Set Requester', 'custom/modules/AOS_Contracts/setRequester.php', 'RequesterManagement', 'SetRequester');
$hook_array['before_save'][] = Array(78, 'Agreement Closed', 'custom/modules/AOS_Contracts/agreementStatusManager.php', 'AgreementStatusManager', 'StatusClosed');