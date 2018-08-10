<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_user, $sugar_config;
if (!is_admin($current_user)) {
	sugar_die("Unauthorized access to administration.");
}

global $app_list_strings;

$relate_module = $_REQUEST['relate'];


require_once('modules/SecurityGroups/SecurityGroup.php');

//check to see if already related
$security_modules = SecurityGroup::getSecurityModules();
if(array_key_exists($relate_module,$security_modules)) {
	header('HTTP/1.1 500 Internal Server Error'); 
	die(json_encode(array('message' => 'Module has already been related')));
}

$relate_module_label = $app_list_strings['moduleList'][$relate_module];
if(empty($relate_module_label)) {
	$relate_module_label = $relate_module; //just in case
}
$GLOBALS['log']->debug("HookupProcess...".$relate_module.'|'.$relate_module_label);
    

//add relationship

//similate form post
$_REQUEST['lhs_module'] = $relate_module;
$_REQUEST['relationship_type'] = 'many-to-many';
$_REQUEST['rhs_module'] = 'SecurityGroups';
$_REQUEST['lhs_label'] = $relate_module_label;
$_REQUEST['rhs_label'] = 'Security Groups';
$_REQUEST['lhs_subpanel'] = 'default';
$_REQUEST['rhs_subpanel'] = 'default';

//from modules/ModuleBuilder/controller.php
require_once 'modules/ModuleBuilder/parsers/relationships/DeployedRelationships.php' ;

$relationships = new DeployedRelationships ( $relate_module ) ;

//$relation = $relationships->addFromPost () ; //want to use a custom definition

$definition = array ( 
	'lhs_module' => $relate_module,
	'relationship_type' => MB_MANYTOMANY,
	'rhs_module' => 'SecurityGroups',
	'lhs_label' => $relate_module_label,
	'rhs_label' => 'Security Groups',
	'lhs_subpanel' => 'default',
	'rhs_subpanel' => 'default',
);

require_once 'modules/SecurityGroups/relationships/SecurityGroupRelationship.php' ;
$relation = new SecurityGroupRelationship ( $definition ) ;
$relationships->add($relation);
$relationships->save () ;
$relationships->build () ;

/** suitecrm is bombing here for some reason, but the relationship does save correctly. 
$security_modules = SecurityGroup::getSecurityModules();
if(!array_key_exists($relate_module,$security_modules)) {
	header('HTTP/1.1 500 Internal Server Error'); 
	echo json_encode(array('message' => 'Unexpected error: Module could not be related. Please view your logs.'));
	die();
}
*/
