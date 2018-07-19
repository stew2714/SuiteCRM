<?php
$admin_options_defs = array();
$admin_options_defs['Administration']['UploadSettings'] = array(
    'Administration',
    'LBL_UPLOAD_SETTINGS',
    'LBL_UPLOAD_SETTINGS_DESCRIPTION',
    './index.php?module=Administration&action=UploadSettings'
);

$admin_group_header[]= array(
    'LBL_UPLOAD_SETTINGS_TITLE',
    '',
    false,
    $admin_options_defs,
);