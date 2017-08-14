<?php



$admin_option_defs = array();
$admin_option_defs['Administration']['suitefeed_settings'] = array(
    'icon_SugarFeed',
    'LBL_SUITEFEED_SETTINGS',
    'LBL_SUITEFEED_SETTINGS_DESC',
    './index.php?module=SuiteFeed&action=AdminSettings'
);
if (isset($admin_group_header['sagility'])) {
    $admin_option_defs['Administration'] =
        array_merge(
            (array)$admin_option_defs['Administration'],
            (array)$admin_group_header['sagility'][3]['Administration']
        );
}

$admin_group_header['sagility'] = array(
    'LBL_SALESAGILITY_ADMIN',
    '',
    false,
    $admin_option_defs,
    ''
);

