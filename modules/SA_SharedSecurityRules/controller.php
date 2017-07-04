<?php
/**
 * Advanced OpenWorkflow, Automating SugarCRM.
 * @package Advanced OpenWorkflow for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
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


require_once("modules/AOW_WorkFlow/aow_utils.php");

class SA_SharedSecurityRulesController extends SugarController {

    protected function action_getAction(){
        global $beanList, $beanFiles;

        $action_name = 'action'.$_REQUEST['aow_action'];
        $line = $_REQUEST['line'];

        if($_REQUEST['aow_module'] == '' || !isset($beanList[$_REQUEST['aow_module']])){
            echo '';
            die;
        }

        if(file_exists('custom/modules/SA_SharedSecurityRulesActions/actions/'.$action_name.'.php')){

            require_once('custom/modules/SA_SharedSecurityRulesActions/actions/'.$action_name.'.php');

        } else if(file_exists('modules/SA_SharedSecurityRulesActions/actions/'.$action_name.'.php')){

            require_once('modules/SA_SharedSecurityRulesActions/actions/'.$action_name.'.php');

        } else {
            echo '';
            die;
        }

        $custom_action_name = "custom" . $action_name;
        if(class_exists($custom_action_name)){
            $action_name = $custom_action_name;
        }

        $id = '';
        $params = array();
        if(isset($_REQUEST['id'])){
            require_once('modules/AOW_Actions/AOW_Action.php');
            $aow_action = new SA_SharedSecurityRulesActions();
            $aow_action->retrieve($_REQUEST['id']);
            $id = $aow_action->id;
            $params = unserialize(base64_decode($aow_action->parameters));
        }

        $action = new $action_name($id);

        require_once($beanFiles[$beanList[$_REQUEST['aow_module']]]);
        $bean = new $beanList[$_REQUEST['aow_module']];
        echo $action->edit_display($line,$bean,$params);
        die;
    }
}
