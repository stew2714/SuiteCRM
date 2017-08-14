<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_user, $sugar_config;
if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

global $db, $current_language, $mod_strings, $app_strings, $app_list_strings;

$admin_mod_strings = return_module_language($current_language, 'Administration');   

echo getClassicModuleTitle(
        "Administration",
        array(
            "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
           $admin_mod_strings['LBL_SECURITYGROUPS_HOOKUP_TITLE'],
           ),
        false
        );
        

//Get list of modules not related to SecuritySuite
require_once('modules/SecurityGroups/SecurityGroup.php');

//Step 1: get all relatable modules
require_once 'modules/ModuleBuilder/parsers/relationships/DeployedRelationships.php' ;
$relatableModules = DeployedRelationships::findRelatableModules () ;

ksort($relatableModules);
$all_modules = array_keys($relatableModules);


/**
$query = "select distinct category from acl_actions order by category";
$all_modules = Array();
$result = $db->query($query);
while(($row=$db->fetchByAssoc($result)) != null) {
    $all_modules[$row['category']] = $row['category'];
}
*/


//Step 2: get SS modules using getSecurityModules()

$security_modules = SecurityGroup::getSecurityModules();


//Step 3: filter list

$nonss_modules = array(''=>' - '.$app_strings['LBL_SELECT_BUTTON_LABEL'].' - ');
$no_available = true;
foreach($all_modules as $mod) {
    if(!array_key_exists($mod,$security_modules)
        //exceptions
        && $mod != 'SecurityGroups'
        && $mod != 'Activities'
    ) {
        $nonss_modules[$mod] = $mod;
        $no_available = false;
    }
}
/**
if($no_available == true) {
    $nonss_modules = array(''=>' - '.$app_strings['LBL_NO_RECORDS_FOUND'].' - ');
}
*/
$sugar_smarty   = new Sugar_Smarty();
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);

//$sugar_smarty->assign("nonss_modules", get_select_options_with_id($nonss_modules, ''));
$sugar_smarty->assign("nonss_modules", $nonss_modules);

$sugar_smarty->display('modules/SecurityGroups/hookup.tpl');

