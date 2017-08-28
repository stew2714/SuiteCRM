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
require_once("modules/AOW_WorkFlow/controller.php");

class customAOW_WorkFlowController extends AOW_WorkFlowController {

    protected function action_getModuleFields()
    {
        if (!empty($_REQUEST['aow_module']) && $_REQUEST['aow_module'] != '') {
            if(isset($_REQUEST['rel_field']) &&  $_REQUEST['rel_field'] != ''){
                $module = getRelatedModule($_REQUEST['aow_module'],$_REQUEST['rel_field']);
            } else {
                $module = $_REQUEST['aow_module'];
            }
            //echo getModuleFields($module,$_REQUEST['view'],$_REQUEST['aow_value']);
            $results =  getModuleFields($module,$_REQUEST['view'],$_REQUEST['aow_value']);
            $results = json_decode($results, TRUE);
            asort($results);
            $results = json_encode($results);
            echo $results;
        }
        die;

    }


}
