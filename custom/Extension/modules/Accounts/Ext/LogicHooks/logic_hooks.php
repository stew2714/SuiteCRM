<?php
if (isset($hook_array['before_save'])) {
    $hook_array['before_save'] = Array();
}

$hook_array['before_save'][] = Array(77, 'Add Eloqua Account', 'custom/modules/Accounts/AddEloquaAccount.php', 'EloquaAccount', 'AddAccount');