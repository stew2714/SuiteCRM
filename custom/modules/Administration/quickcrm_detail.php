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
global $sugar_config;
ini_set("display_errors", 0);

require_once('custom/modules/Administration/QuickCRM_utils.php');
$qutils=new QUtils();
$qutils->LoadMobileConfig(true); // refresh first open only
$qutils->LoadServerConfig(true); // refresh first open only

$module = $_REQUEST['conf_module'];
$profile = $_REQUEST['profile'];
$profile_name = '';
if ($qutils->mobile['profilemode'] != 'none'){
	$profile_name = ' (' . str_replace ('&quot;','',$_REQUEST['profile_name']) . ')';
}

$MBmod_strings=return_module_language($current_language, 'ModuleBuilder');
$ss = new Sugar_Smarty();
$ss->assign('module', $module);
$ss->assign('profile', $profile);
$ss->assign('MOD', $mod_strings);
$ss->assign('APP_STRINGS', $app_strings);
$ss->assign('AVAILABLE', $MBmod_strings['LBL_AVAILABLE']);
$ss->assign('HIDDEN', $MBmod_strings['LBL_HIDDEN']);
$ss->assign('TITLE', $app_list_strings["moduleList"][$module] . ' - ' . $MBmod_strings['LBL_DETAILVIEW'] . ' ' . $profile_name);

if ($profile == '_default') $profile_data = $qutils->mobile;
else $profile_data = $qutils->mobile['profiles'][$profile];

if (!isset($profile_data['detail']) ||!isset($profile_data['detail'][$module]) || $profile_data['detail'][$module] == False){
	$ss->assign('HIDEFIELDS', "style='display:none;'");

	// label doe not exist on old Sugar versions
	$sync_label = (isset($MBmod_strings['LBL_SYNC_TO_DETAILVIEW_NOTICE'])?$MBmod_strings['LBL_SYNC_TO_DETAILVIEW_NOTICE']:'Detail view is synced with Edit View');

	$ss->assign('IS_SYNCED', $sync_label);
	$displayed=array();
	$synced =true;
}
else {
	$displayed = $profile_data['detail'][$module];
	$synced=false;
}

$available_fields=array();
$hidden_fields=array();

if (!$synced){
	foreach ($displayed as $field){
		$label = $qutils->getFieldLabel ($module,$field);
		$available_fields[]=array('field'=>$field,'label'=>$label);
	}

	$preset_fields = $qutils->QgetPresetModuleFields();
	if (isset($preset_fields[$module])) $preset_fields = $preset_fields[$module];
	else $preset_fields = array();

	foreach ($qutils->server_config['fields'][$module] as $field => $data ){
		if (!in_array($field,$displayed) && !in_array($field,$preset_fields)){
			$hidden_fields[]=array('field'=>$field,'label'=>$data['label']);
		}
	}
}
$ss->assign('tabAvailable', $available_fields);
$ss->assign('tabHidden', $hidden_fields);

$show_fields = false;
if (isset($sugar_config['quickcrm_show_fieldname'])){
	$show_fields = $sugar_config['quickcrm_show_fieldname'];
}
$ss->assign('showfields', $show_fields);

$ss->display('custom/modules/Administration/tpls/QCRMDetail.tpl');

?>