<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(77, 'Duplicate Activities', 'custom/modules/AOS_Contracts/duplicate.php',
    'duplicate', 'activities');