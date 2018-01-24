<?php
/*********************************************************************************
 * This file is part of QuickCRM Mobile Full.
 * QuickCRM Mobile Full is a mobile client for Sugar/SuiteCRM
 * 
 * Author : NS-Team (http://www.ns-team.fr)
 * All rights (c) 2011-2017 by NS-Team
 *
 * This Version of the QuickCRM Mobile Full is licensed software and may only be used in 
 * alignment with the License Agreement received with this Software.
 * This Software is copyrighted and may not be further distributed without
 * written consent of NS-Team
 * 
 * You can contact NS-Team at NS-Team - 55 Chemin de Mervilla - 31320 Auzeville - France
 * or via email at infos@ns-team.fr
 * 
 ********************************************************************************/
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $mod_strings;
global $app_strings;
global $app_list_strings;
global $current_language;
global $beanFiles, $beanList;
global $moduleList;
global $sugar_config;
ini_set("display_errors", 0);

require_once('custom/modules/Administration/QuickCRM_utils.php');
$qutils=new QUtils();
$qutils->LoadMobileConfig(true); // refresh first open only

$module = $_REQUEST['conf_module'];

$MBmod_strings=return_module_language($current_language, 'ModuleBuilder');
$ss = new Sugar_Smarty();
$ss->assign('module', $module);
$ss->assign('MOD', $mod_strings);
$ss->assign('APP_STRINGS', $app_strings);
$ss->assign('AVAILABLE', $MBmod_strings['LBL_AVAILABLE']);
$ss->assign('HIDDEN', $MBmod_strings['LBL_HIDDEN']);
$ss->assign('TITLE', $app_list_strings["moduleList"][$module]);

// display or not message for roles/SG choice
if (in_array ('SecurityGroups',$moduleList)){
/*
	$ExistProfiles = false;
	if (!isset($qutils->mobile['profiles'])) $qutils->mobile['profiles'] = array();
	foreach ($qutils->mobile['profiles'] as $profile){
		if (isset($profile['detail']) && count($profile['detail']) > 0){
			$ExistProfiles = true;
			break;
		}
		if (isset($profile['fields']) && count($profile['fields']) > 0){
			$ExistProfiles = true;
			break;
		}
		if (isset($profile['list']) && count($profile['list']) > 0){
			$ExistProfiles = true;
			break;
		}
		if (isset($profile['subpanels']) && count($profile['subpanels']) > 0){
			$ExistProfiles = true;
			break;
		}
	}
	if (!$ExistProfiles){
		$ss->assign('HEADER_WARNING', $mod_strings["LBL_MULTIVIEW_DEFAULT"]);
	}
*/
}

//get roles or security groups that do not have a layout for this module yet
$group_module = $qutils->mobile['profilemode'];
$ss->assign ( 'group_mode', $app_list_strings["moduleList"][$group_module]) ;

if ($sugar_config['sugar_version']<'6.3'){
		require_once($beanFiles[$beanList[$group_module]]);
		$group_bean = new $beanList[$group_module];
	}
else {
	$group_bean = BeanFactory::getBean($group_module);
}
$copy_groups = array('_default'=> $mod_strings['LBL_QDEFAULT']); 
$available_groups = array(); 
$groups = $group_bean->get_full_list("name");
if(!empty($groups)) {
    foreach($groups as $group) {
		$already_exists = false;
        if (isset($qutils->mobile['profiles']) && isset($qutils->mobile['profiles'][$group->id])){
			$profile = $qutils->mobile['profiles'][$group->id];
			if (isset($profile['fields'][$module]) || isset($profile['list'][$module]) || isset($profile['search'][$module]))
				$already_exists = true;
        }
        if(!$already_exists) {
            $available_groups[$group->id] = $group->name;
        }
        else {
            $copy_groups[$group->id] = $group->name;
        }
    }
}

if (count($available_groups) == 0) die();

$ss->assign ( 'available_groups', $available_groups) ;
$ss->assign ( 'copy_from', $copy_groups) ;

$ss->display('custom/modules/Administration/tpls/QCRMModule.tpl');

?>