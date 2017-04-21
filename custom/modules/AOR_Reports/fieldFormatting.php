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
class fieldFormatting
{
    public static function getDateField($module, $aow_field, $view = 'EditView', $value, $field_option = true)
    {
        global $app_list_strings;

        $value = json_decode(html_entity_decode_utf8($value), true);

        if (!file_exists('modules/AOBH_BusinessHours/AOBH_BusinessHours.php')) {
            unset($app_list_strings['aow_date_type_list']['business_hours']);
        }

        $field = '';

        if ($view == 'EditView') {
            $field .= "<select type='text' onchange='UpdatePreview(\"preview\");' name='$aow_field" . '[0]' . "' id='$aow_field" . '[0]' . "' title='' tabindex='116'>" . getDateFields($module,
                    $view, $value[0], $field_option) . "</select>&nbsp;&nbsp;";
            $field .= "<select type='text' onchange='UpdatePreview(\"preview\");' name='$aow_field" . '[1]' . "' id='$aow_field" . '[1]' . "' onchange='date_field_change(\"$aow_field\")'  title='' tabindex='116'>" . get_select_options_with_id($app_list_strings['aow_date_operator'],
                    $value[1]) . "</select>&nbsp;";
            $display = 'none';
            if ($value[1] == 'plus' || $value[1] == 'minus') {
                $display = '';
            }
            $field .= "<input  type='text' onblur='UpdatePreview(\"preview\");' style='display:$display' name='$aow_field" . '[2]' . "' id='$aow_field" . '[2]' . "' title='' value='$value[2]' tabindex='116'>&nbsp;";
            $field .= "<select type='text' onchange='UpdatePreview(\"preview\");' style='display:$display' name='$aow_field" . '[3]' . "' id='$aow_field" . '[3]' . "' title='' tabindex='116'>" . get_select_options_with_id($app_list_strings['aow_date_type_list'],
                    $value[3]) . "</select>";
        } else {
            $field = getDateFields($module, $view, $value[0],
                    $field_option) . ' ' . $app_list_strings['aow_date_operator'][$value[1]];
            if ($value[1] == 'plus' || $value[1] == 'minus') {
                $field .= ' ' . $value[2] . ' ' . $app_list_strings['aow_date_type_list'][$value[3]];
            }
        }

        return $field;

    }

    public static function getModuleFields($module, $view='EditView',$value = '', $valid = array())
    {
        global $app_strings, $beanList;

        $fields = array(''=>$app_strings['LBL_NONE']);
        $unset = array();

        if ($module != '') {
            if(isset($beanList[$module]) && $beanList[$module]){
                $mod = new $beanList[$module]();
                foreach($mod->field_defs as $name => $arr){
                    if(ACLController::checkAccess($mod->module_dir, 'list', true)) {
                        if($arr['type'] != 'link' &&((!isset($arr['source']) || $arr['source'] != 'non-db') || ($arr['type'] == 'relate' && isset($arr['id_name']))) && (empty($valid) || in_array($arr['type'], $valid)) && $name != 'currency_name' && $name != 'currency_symbol'){
                            if(isset($arr['vname']) && $arr['vname'] != ''){
                                $fields[$name] = rtrim(translate($arr['vname'],$mod->module_dir), ':');
                            } else {
                                $fields[$name] = $name;
                            }
                            if($arr['type'] == 'relate' && isset($arr['id_name']) && $arr['id_name'] != ''){
                                $unset[] = $arr['id_name'];
                            }
                        }
                    }
                } //End loop.

                foreach($unset as $name){
                    if(isset($fields[$name])) unset( $fields[$name]);
                }

            }
        }
        if($view == 'JSON'){
            return json_encode($fields);
        }
        if($view == 'EditView'){
            return get_select_options_with_id($fields, $value);
        } else {
            return $fields[$value];
        }
    }
}