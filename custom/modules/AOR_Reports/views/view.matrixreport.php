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
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/MVC/View/SugarView.php');
require_once("custom/modules/AOR_Reports/matrixReportBuilder.php");

class AOR_ReportsViewMatrixReport extends SugarView
{

    public function display()
    {
        global $app_list_strings, $mod_strings;
        $matrix = new matrixReportBuilder();
        parent::display();
        $module = $_POST['reportModule'];
        $this->ss->assign('actionFieldText', $mod_strings['LBL_ACTION_FIELD_TEXT']);
        $this->ss->assign('moduleList', get_select_options_with_id($app_list_strings['aor_moduleList'], $module));

        if ($module) {
            $bean = BeanFactory::getBean($module);
            $fieldDefs = $matrix->getFieldDefs($bean->field_defs);
            $this->ss->assign('fieldlistx1', get_select_options_with_id($fieldDefs, $_POST['fieldx1']));
            $this->ss->assign('fieldlistx2', get_select_options_with_id($fieldDefs, $_POST['fieldx2']));
            $this->ss->assign('fieldlistx3', get_select_options_with_id($fieldDefs, $_POST['fieldx3']));

            $this->ss->assign('fieldlisty1', get_select_options_with_id($fieldDefs, $_POST['fieldy1']));
            $this->ss->assign('fieldlisty2', get_select_options_with_id($fieldDefs, $_POST['fieldy2']));
            $this->ss->assign('fieldlisty3', get_select_options_with_id($fieldDefs, $_POST['fieldx3']));

            $this->ss->assign('actionField', get_select_options_with_id($fieldDefs, $_POST['actionField']));

            //set up the fields.
            $fields_y = array(
                $_POST['fieldx1'],
                $_POST['fieldx2'],
                $_POST['fieldx3'],
            );

            $fields_x = array(
                $_POST['fieldy1'],
                $_POST['fieldy2'],
                $_POST['fieldy3'],
            );

            $field = $_POST['actionField'];

        }

        echo $this->ss->fetch('custom/modules/AOR_Reports/tpls/matrixReport.tpl');

        $matrix->buildReport($module, $fields_x, $fields_y, $field);
    }

}