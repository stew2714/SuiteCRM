<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(
    77,
    'save Account check activity',
    'custom/include/AccountSync/eloquaSync.php',
    'eloquaSync',
    'saveAccount'
);