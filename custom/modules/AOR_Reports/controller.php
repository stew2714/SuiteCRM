<?php

/**
 * Advanced OpenReports, SugarCRM Reporting.
 * @package Advanced OpenReports for SugarCRM
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

require_once("modules/AOR_Reports/controller.php");
require_once("custom/modules/AOR_Reports/AdvancedReporter.php");
require_once("custom/modules/AOR_Reports/fieldFormatting.php");


class customAOR_ReportsController extends AOR_ReportsController
{
    public function action_matrixreport(){
        $this->view = 'matrixreport';
    }

    public function action_getPreview()
    {
        parse_str($_REQUEST['formdata'], $requestData);
        $requestData = $this->parseLines($requestData);
        $bean = BeanFactory::getBean("AOR_Reports", $requestData['id']);
        $preview = new AdvancedReporter($bean, $requestData);
        echo $preview->buildMultiGroupReport("-2", true);
        die();
    }
    protected function action_export()
    {
        $this->bean->user_parameters = requestToUserParameters();
        $advancedReporter = new AdvancedReporter($this->bean);
        $advancedReporter->build_report_csv();
        die;
    }
    protected function action_changeReportPage()
    {
        $offset = !empty($_REQUEST['offset']) ? $_REQUEST['offset'] : 0;
        if (!empty($this->bean->id)) {
            $this->bean->user_parameters = requestToUserParameters();
            $advancedReporter = new AdvancedReporter($this->bean);
            $advancedReporter->view_as = $_REQUEST['view_as'];
            echo $advancedReporter->build_group_report($offset, true);
        }
        die();
    }

    private function parseLines(array $requestData)
    {
        foreach ($requestData as $key => $item) {
            if (substr($key, 0, 11) == "aor_fields_" && is_array($item)) {
                foreach ($item as $secondKey => $fieldList) {
                    $fieldView[$secondKey][$key] = $requestData[$key][$secondKey];
                }
            }

            if (substr($key, 0, 15) == "aor_conditions_" && is_array($item)) {
                foreach ($item as $secondKey => $fieldList) {
                    $conditionView[$secondKey][$key] = $requestData[$key][$secondKey];
                }
            }
        }

        foreach ($requestData as $key => $lines) {
            if ((substr($key, 0, 11) == "aor_fields_" || substr($key, 0, 15) == "aor_conditions_") &&
                is_array($lines)
            ) {
                unset($requestData[$key]);
            }
        }
        $requestData['fieldView'] = $fieldView;
        $requestData['conditionView'] = $conditionView;

        return $requestData;
    }



    /***
     * modified existing controlers to add javascript hook.
     *
     */

    protected function action_getModuleOperatorField()
    {

        global $app_list_strings, $beanFiles, $beanList;

        if (isset($_REQUEST['rel_field']) && $_REQUEST['rel_field'] != '') {
            $module = getRelatedModule($_REQUEST['aor_module'], $_REQUEST['rel_field']);
        } else {
            $module = $_REQUEST['aor_module'];
        }
        $fieldname = $_REQUEST['aor_fieldname'];
        $aor_field = $_REQUEST['aor_newfieldname'];

        if (isset($_REQUEST['view'])) {
            $view = $_REQUEST['view'];
        } else {
            $view = 'EditView';
        }

        if (isset($_REQUEST['aor_value'])) {
            $value = $_REQUEST['aor_value'];
        } else {
            $value = '';
        }


        require_once($beanFiles[$beanList[$module]]);
        $focus = new $beanList[$module];
        $vardef = $focus->getFieldDefinition($fieldname);

        switch ($vardef['type']) {
            case 'double':
            case 'decimal':
            case 'float':
            case 'currency':
                $valid_opp = array(
                    'Equal_To',
                    'Not_Equal_To',
                    'Greater_Than',
                    'Less_Than',
                    'Greater_Than_or_Equal_To',
                    'Less_Than_or_Equal_To'
                );
                break;
            case 'uint':
            case 'ulong':
            case 'long':
            case 'short':
            case 'tinyint':
            case 'int':
                $valid_opp = array(
                    'Equal_To',
                    'Not_Equal_To',
                    'Greater_Than',
                    'Less_Than',
                    'Greater_Than_or_Equal_To',
                    'Less_Than_or_Equal_To'
                );
                break;
            case 'date':
            case 'datetime':
            case 'datetimecombo':
                $valid_opp = array(
                    'Equal_To',
                    'Not_Equal_To',
                    'Greater_Than',
                    'Less_Than',
                    'Greater_Than_or_Equal_To',
                    'Less_Than_or_Equal_To'
                );
                break;
            case 'enum':
            case 'multienum':
                $valid_opp = array('Equal_To', 'Not_Equal_To');
                break;
            default:
                $valid_opp = array('Equal_To', 'Not_Equal_To', 'Contains', 'Starts_With', 'Ends_With',);
                break;
        }

        foreach ($app_list_strings['aor_operator_list'] as $key => $keyValue) {
            if (!in_array($key, $valid_opp)) {
                unset($app_list_strings['aor_operator_list'][$key]);
            }
        }

        $onchange = "";
        if($_REQUEST['m'] != "aomr"){
           $onchange = "UpdatePreview(\"preview\");";
        }

        $app_list_strings['aor_operator_list'];
        if ($view == 'EditView') {
            echo "<select type='text' style='width:178px;' name='{$aor_field}' id='{$aor_field}' title='' 
            onchange='{$onchange}' tabindex='116'>"
                . get_select_options_with_id($app_list_strings['aor_operator_list'], $value) . "</select>";
        } else {
            echo $app_list_strings['aor_operator_list'][$value];
        }
        die;

    }
    protected function action_getFieldTypeOptions()
    {

        global $app_list_strings, $beanFiles, $beanList;

        if (isset($_REQUEST['rel_field']) && $_REQUEST['rel_field'] != '') {
            $module = getRelatedModule($_REQUEST['aor_module'], $_REQUEST['rel_field']);
        } else {
            $module = $_REQUEST['aor_module'];
        }
        $fieldname = $_REQUEST['aor_fieldname'];
        $aor_field = $_REQUEST['aor_newfieldname'];

        if (isset($_REQUEST['view'])) {
            $view = $_REQUEST['view'];
        } else {
            $view = 'EditView';
        }

        if (isset($_REQUEST['aor_value'])) {
            $value = $_REQUEST['aor_value'];
        } else {
            $value = '';
        }


        require_once($beanFiles[$beanList[$module]]);
        $focus = new $beanList[$module];
        $vardef = $focus->getFieldDefinition($fieldname);

        switch ($vardef['type']) {
            case 'double':
            case 'decimal':
            case 'float':
            case 'currency':
                $valid_opp = array('Value', 'Field');
                break;
            case 'uint':
            case 'ulong':
            case 'long':
            case 'short':
            case 'tinyint':
            case 'int':
                $valid_opp = array('Value', 'Field');
                break;
            case 'date':
            case 'datetime':
            case 'datetimecombo':
                $valid_opp = array('Value', 'Field', 'Date', 'Period');
                break;
            case 'enum':
            case 'dynamicenum':
            case 'multienum':
                $valid_opp = array('Value', 'Field', 'Multi');
                break;
            default:
                // Added to compare fields like assinged to with the current user
                if ((isset($vardef['module']) && $vardef['module'] == "Users") || $vardef['name'] = 'id') {
                    $valid_opp = array('Value', 'Field', 'CurrentUserID');
                } else {
                    $valid_opp = array('Value', 'Field');
                }

                break;
        }

        foreach ($app_list_strings['aor_condition_type_list'] as $key => $keyValue) {
            if (!in_array($key, $valid_opp)) {
                unset($app_list_strings['aor_condition_type_list'][$key]);
            }
        }

        if ($view == 'EditView') {
            echo "<select type='text' style='width:178px;'  onchange='UpdatePreview(\"preview\");' name='$aor_field' id='$aor_field' title='' tabindex='116'>" . get_select_options_with_id($app_list_strings['aor_condition_type_list'],
                    $value) . "</select>";
        } else {
            echo $app_list_strings['aor_condition_type_list'][$value];
        }
        die;

    }

    protected function action_getModuleFieldType()
    {
        if (isset($_REQUEST['rel_field']) && $_REQUEST['rel_field'] != '') {
            $rel_module = getRelatedModule($_REQUEST['aor_module'], $_REQUEST['rel_field']);
        } else {
            $rel_module = $_REQUEST['aor_module'];
        }
        $module = $_REQUEST['aor_module'];

        $fieldname = $_REQUEST['aor_fieldname'];
        $aor_field = $_REQUEST['aor_newfieldname'];

        if (isset($_REQUEST['view'])) {
            $view = $_REQUEST['view'];
        } else {
            $view = 'EditView';
        }

        if (isset($_REQUEST['aor_value'])) {
            $value = $_REQUEST['aor_value'];
        } else {
            $value = '';
        }

        switch ($_REQUEST['aor_type']) {
            case 'Field':
                if (isset($_REQUEST['alt_module'])
                    && $_REQUEST['alt_module'] != ''
                ) {
                    $module = $_REQUEST['alt_module'];
                }
                if ($view == 'EditView') {
                    echo "<select type='text'  onchange='UpdatePreview(\"preview\");' style='width:178px;' name='$aor_field' id='$aor_field' title='' tabindex='116'>" . getModuleFields($module,
                            $view, $value) . "</select>";
                } else {
                    echo getModuleFields($module, $view, $value);
                }
                break;
            case 'Date':
                echo fieldFormatting::getDateField($module, $aor_field, $view, $value, false);
                break;
            case 'Multi':
                echo getModuleField($rel_module, $fieldname, $aor_field, $view, $value, 'multienum');
                break;
            case 'Period':
                if ($view == 'EditView') {
                    $current_field_index = explode("[", $aor_field);
                    $current_field_index = substr_replace($current_field_index[1], "", -1);
                    echo "<select type='text' style='width:178px;' onchange='periodOptions(this);' name='$aor_field' id='$aor_field' class='aor-dropdown-list' tabindex='116'>" . getDropdownList('date_time_period_list',
                            $_REQUEST['aor_value']) . "</select>";
                    $options_with_text_field = array(
                        'last_n_quarters',
                        'next_n_quarters',
                        'last_n_years',
                        'next_n_years',
                    );
                    $current_value = base64_decode($_REQUEST['aor_value']);

                    if (in_array($current_value,$options_with_text_field)) {
                        $show_text_field = "";
                    } else {
                        $show_text_field = "style='display: none'";
                    }

                    echo "<input type='text' onblur='periodOptionsValue(this)' value='" . $_REQUEST['offset'] . "' name='aor_conditions_condition_period_length[" . $current_field_index . "]' class='period-options-input' id='aor_conditions_condition_period_length" . $current_field_index . "' title='' tabindex='116'" . $show_text_field . ">";
                } else {
                    echo getDropdownList('date_time_period_list', $_REQUEST['aor_value']);
                }

                break;
            case 'CurrentUserID':
                break;
            case 'Value':
            default:
                echo getModuleField($rel_module, $fieldname, $aor_field, $view, $value);
                break;
        }
        die;

    }

    public function action_save($check_notify = false)
    {

        // TODO: process of saveing the fields and conditions is too long so we will have to make some optimization on save_lines functions
        set_time_limit(3600);
        parent::action_save($check_notify);
        $parent = $this->bean;
        $_POST['record'] = $this->bean->id;
        require_once('modules/AOR_Fields/AOR_Field.php');
        $field = new AOR_Field();
        $field->save_lines($_POST, $parent, 'aor_fields_');

        // Save Conditions
        $this->save_conditions();

        require_once('modules/AOR_Charts/AOR_Chart.php');
        $chart = new AOR_Chart();
        $chart->save_lines($_POST, $parent, 'aor_chart_');
    }

    public function save_conditions()
    {
        $post_data = $_POST;
        $parent = $_POST['record'];
        $parent = BeanFactory::getBean('AOR_Reports',$parent);
        // $conditions = BeanFactory::getBean('AOR_Conditions',$parent);
        $key = 'aor_conditions_';

        require_once('modules/AOW_WorkFlow/aow_utils.php');

        $j = 0;
        foreach ($post_data[$key . 'field'] as $i => $field) {
            $condition = new AOR_Condition();
            if ($post_data[$key . 'deleted'][$i] == 1) {
                $condition->mark_deleted($post_data[$key . 'id'][$i]);
            } else {
                foreach ($condition->field_defs as $field_def) {
                    $field_name = $field_def['name'];
                    if (isset($post_data[$key . $field_name][$i])) {
                        if (is_array($post_data[$key . $field_name][$i])) {

                            switch ($condition->value_type) {
                                case 'Date':
                                    $post_data[$key . $field_name][$i] = base64_encode(serialize($post_data[$key . $field_name][$i]));
                                    break;
                                default:
                                    $post_data[$key . $field_name][$i] = encodeMultienumValue($post_data[$key . $field_name][$i]);
                            }
                        } else if ($field_name == 'value' && $post_data[$key . 'value_type'][$i] === 'Value') {
                            $post_data[$key . $field_name][$i] = fixUpFormatting($_REQUEST['report_module'], $condition->field, $post_data[$key . $field_name][$i]);
                        } else if ($field_name == 'parameter') {
                            $post_data[$key . $field_name][$i] = isset($post_data[$key . $field_name][$i]);
                        } else if ($field_name == 'module_path') {
                            $post_data[$key . $field_name][$i] = base64_encode(serialize(explode(":", $post_data[$key . $field_name][$i])));
                        }
                        if ($field_name == 'parenthesis' && $post_data[$key . $field_name][$i] == 'END') {
                            if (!isset($lastParenthesisStartConditionId)) {
                                throw new Exception('a closure parenthesis has no starter pair');
                            }
                            $condition->parenthesis = $lastParenthesisStartConditionId;
                        } else {
                            $condition->$field_name = $post_data[$key . $field_name][$i];
                        }
                    } else if ($field_name == 'parameter') {
                        $condition->$field_name = 0;
                    }

                }
                // Period must be saved as a string instead of a base64 encoded datetime.
                // Overwriting value
                if ((!isset($condition->parenthesis) || !$condition->parenthesis) && isset($condition->value_type) && $condition->value_type == 'Period') {
                    $condition->value = base64_encode($_POST['aor_conditions_value'][$i]);
                }
                if (trim($condition->field) != '' || $condition->parenthesis) {
                    if (isset($_POST['aor_conditions_order'][$i])) {
                        $condition->condition_order = (int)$_POST['aor_conditions_order'][$i];
                    } else {
                        $condition->condition_order = ++$j;
                    }
                    $condition->aor_report_id = $parent->id;
                    $conditionId = $condition->save();
                    $conditionId = $condition->id;
                    if ($condition->parenthesis == 'START') {
                        $lastParenthesisStartConditionId = $conditionId;
                    }
                }
            }
        }
    }
}
