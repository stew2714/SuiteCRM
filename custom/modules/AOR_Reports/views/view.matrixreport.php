<?php
/**
 *
 *
 * @package
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
 * @author Salesagility Ltd <support@salesagility.com>
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/SugarView.php');
require_once("custom/modules/AOR_Reports/matrixReportBuilder.php");

class AOR_ReportsViewMatrixReport extends SugarView {

    public function display(){
        global $app_list_strings;
        $matrix = new matrixReportBuilder();
        parent::display();
        $module = "Opportunities";
        $this->ss->assign('moduleList',get_select_options_with_id($app_list_strings['aor_module_list'], ""));

        if($module){
            $bean = BeanFactory::getBean($module);
            $fieldDefs = $matrix->getFieldDefs($bean->field_defs);
            $this->ss->assign('fieldlist',get_select_options_with_id($fieldDefs, ""));
        }

        echo $this->ss->fetch('custom/modules/AOR_Reports/tpls/matrixReport.tpl');

                $module = "Opportunities";

                $fields_y = array(
                    "sales_stage",
                    "probability",
                    "lead_source",
                );

                $fields_x = array(
                    "probability",
                    "assigned_user_id",
                    "lead_source",
                );

                $field = "amount_usdollar";


                $matrix->buildReport($module, $fields_x, $fields_y, $field);
    }

}