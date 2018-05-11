<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['create'] = array(
    'edit',
    'LBL_CREATE_SETTINGS',
    'LBL_CREATE_SETTINGS_DESCRIPTION',
    './index.php?module=Administration&action=CreateAdmin'
);

$admin_group_header['create'] = array(
    'LBL_CREATE_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);
