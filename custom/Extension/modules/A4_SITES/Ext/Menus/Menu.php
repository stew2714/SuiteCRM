<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */


global $mod_strings, $app_strings, $sugar_config;

$module_menu = array();
 
if(ACLController::checkAccess('A4_SITES', 'create', true))$module_menu[]=Array("index.php?module=A4_SITES&action=EditView&return_module=A4_SITES&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"Create", 'A4_SITES');
if(ACLController::checkAccess('A4_SITES', 'list', true))$module_menu[]=Array("index.php?module=A4_SITES&action=index&return_module=A4_SITES&return_action=DetailView", $mod_strings['LNK_LIST'],"List", 'A4_SITES');
if(ACLController::checkAccess('A4_SITES', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=A4_SITES&return_module=A4_SITES&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'A4_SITES');
