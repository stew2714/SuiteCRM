<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(77, 'Set Requester', 'custom/modules/sa_Fluency_One/setRequester.php', 'RequesterManagement', 'SetRequester');