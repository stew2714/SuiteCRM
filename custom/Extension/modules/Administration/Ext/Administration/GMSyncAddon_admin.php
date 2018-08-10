<?php

global $sugar_version;

$admin_option_defs=array();

if(preg_match( "/^6.*/", $sugar_version) ) {
    $admin_option_defs['Administration']['gmsyncaddon_info']= array('helpInline','LBL_GMSYNCADDON_LICENSE_TITLE','LBL_GMSYNCADDON_LICENSE','./index.php?module=GMSyncAddon&action=license');
} else {
    $admin_option_defs['Administration']['gmsyncaddon_info']= array('helpInline','LBL_GMSYNCADDON_LICENSE_TITLE','LBL_GMSYNCADDON_LICENSE','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=GMSyncAddon&action=license", {trigger: true});');
}

$admin_group_header[]= array('LBL_GMSYNCADDON','',false,$admin_option_defs, '');
