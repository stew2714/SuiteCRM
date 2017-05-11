<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 11/05/17
 * Time: 14:16
 */


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_language, $mod_strings;
$module_menu[] = Array("index.php?module=AOR_Reports&action=matrixReport", $mod_strings['LBL_MATRIX_REPORT'],"AOR_Reports");
