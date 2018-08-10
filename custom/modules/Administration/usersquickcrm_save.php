<?php
/*********************************************************************************
 * This file is part of QuickCRM Mobile Full.
 * QuickCRM Mobile Full is a mobile client for SugarCRM
 * 
 * Author : NS-Team (http://www.ns-team.fr)
 * All rights (c) 2011-2016 by NS-Team
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
if(!isset($_REQUEST['authorized']))
	sugar_die("No users selected");

global $sugar_config, $mod_strings, $db;

require_once('custom/modules/Administration/QuickCRM_utils.php');
require_once('modules/Administration/Administration.php');
$administration = new Administration();
$administration->retrieveSettings('QuickCRM');
require_once 'modules/Configurator/Configurator.php';

$configurator = new Configurator();
$configurator->loadConfig(); // it will load existing configuration in config variable of object
$users_list=str_replace('u_',"",$_REQUEST['authorized']);
$nn=isset($sugar_config['quickcrm_max'])?$sugar_config['quickcrm_max']:5;

$status=true;


	$keyverified=false;
	if (isset($administration->settings['QuickCRM_keyverified'])){
		$dt=$administration->settings['QuickCRM_keyverified'];
		if ($dt!=='') $keyverified=true;
	}
	$status=$keyverified;
	if (trim($_REQUEST['trial_code']) !=''){//- && !$keyverified){
		$administration->saveSetting('QuickCRM', 'key', trim($_REQUEST['trial_code']));
		
		if (!isset($sugar_config['quickcrm_nocheck'])) {
			$res = QCRMMaxUsers($_REQUEST['trial_code']);
			$content = '';
			if ($res != -1) {
				$configurator->config['quickcrm_max'] = $res;
				$content = $res;
			}
		}
		else {  // SPECIFIC CONFIGURATION FOR SERVERS WHERE FIREWALL IS CONFIGURED TO DISABLE EXTERNAL ACCESS
				// YET, LICENSE KEY HAS TO BE CORRECT EVEN IF NOT VERIFIED AS IT WILL BE CHECKED IN THE APPS
			$content = 'nocheck';
		}
		$administration->saveSetting('QuickCRM', 'keyverified', $content);
		$status=($content!='');
	}

$fieldDefs = array(
                'id' => array (
                  'name' => 'id',
                  'vname' => 'LBL_ID',
                  'type' => 'id',
                  'required' => true,
                  'reportable' => true,
                ),
                'deleted' => array (
                    'name' => 'deleted',
                    'vname' => 'LBL_DELETED',
                    'type' => 'bool',
                    'default' => '0',
                    'reportable' => false,
                    'comment' => 'Record deletion indicator',
                ),
                'user_id' => array (
                    'name' => 'user_id',
                    'rname' => 'user_name',
                    'module' => 'Users',
                    'id_name' => 'user_id',
                    'vname' => 'LBL_USER_ID',
                    'type' => 'relate',
                    'isnull' => 'false',
                    'dbType' => 'id',
                    'reportable' => true,
                    'massupdate' => false,
                ),
);

$authorized=explode(",", $_REQUEST['authorized']);
$i=0;
$str="qusers=".(isset($sugar_config['quickcrm_max'])?$sugar_config['quickcrm_max']:0).";\nmobile_usr=[";

// drop existing users	
$table_store = (($sugar_config['sugar_version']>='6.5') && isset($sugar_config['quickcrm_server_version']) && $sugar_config['quickcrm_server_version'] >= '4.5');
		
if ($table_store) {
	$sql = "DELETE FROM qcrm_users";
	$db->query($sql);
}
else {
	$configurator->config['quickcrm_users'] = $users_list;
}

foreach($authorized as $usr){
	$licensed_user=substr ($usr ,2);
    $data = array(
        'id' => create_guid(),
        'user_id' => $licensed_user,
        'deleted' => 0,
    );
	if ($table_store) $db->insertParams('qcrm_users', $fieldDefs, $data);
	$str .= ($i>0 ? "," :"") ."'".$licensed_user ."'";
	$i++;
}
$str.='];';

$administration->saveSetting('QuickCRM', ($sugar_config['quickcrm_trial'] != false?'trial':'').'users', base64_encode($str));
$configurator->saveConfig();	

$saveDir = create_cache_directory('mobile_js/');
if($fh = @fopen($saveDir . 'QuickCRMusers.js', "w")){
    fputs($fh, $str);
    fclose($fh);
}


require_once('custom/modules/Administration/genProfromSugar.php');
$mobile = new mobile_jsLanguage();
$mobile->createSugarConfig(false);
header("Location: index.php?module=Administration&action=usersquickcrm&keyok=".($status?"1":"0"));

?>