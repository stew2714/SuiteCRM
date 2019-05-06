<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(
    77,
    'Save Contact ID',
    'custom/modules/Notes/save_contact_id.php',
    'save_contact_id',
    'saveContact'
);