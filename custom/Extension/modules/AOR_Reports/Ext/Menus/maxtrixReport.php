<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 11/05/17
 * Time: 14:16
 */


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_language, $mod_strings;

if(ACLController::checkAccess('AOR_MatrixReporting', 'edit', true)){
    $module_menu[]=array('index.php?module=AOR_MatrixReporting&action=EditView&return_module=AOR_MatrixReporting&return_action=DetailView', $mod_strings['LNK_NEW_MATRIX_RECORD'], 'Add', 'AOR_MatrixReporting');
}
if(ACLController::checkAccess('AOR_MatrixReporting', 'list', true)){
    $module_menu[]=array('index.php?module=AOR_MatrixReporting&action=index&return_module=AOR_MatrixReporting&return_action=DetailView', $mod_strings['LNK__MATRIX_LIST'],'List', 'AOR_MatrixReporting');
}
