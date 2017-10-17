<?php

global $sugar_version;

$admin_option_defs=array();

if(preg_match( "/^6.*/", $sugar_version) ) {
    $admin_option_defs['Administration']['logtrack_info']= array('helpInline','LBL_LOGTRACK_LICENSE_TITLE','LBL_LOGTRACK_LICENSE','./index.php?module=spec_logtrack&action=license');
} else {
    $admin_option_defs['Administration']['logtrack_info']= array('helpInline','LBL_LOGTRACK_LICENSE_TITLE','LBL_LOGTRACK_LICENSE','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=spec_logtrack&action=license", {trigger: true});');
}

$admin_group_header[]= array('LBL_LOGTRACK','',false,$admin_option_defs, '');
