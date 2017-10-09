<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(77, 'Add Eloqua Contact', 'custom/include/AccountSync/eloquaSync.php', 'eloquaSync', 'saveContact');