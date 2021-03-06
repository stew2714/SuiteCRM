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
require_once 'include/MVC/View/views/view.detail.php';
require_once 'modules/AOW_WorkFlow/aow_utils.php';
require_once 'modules/AOR_Reports/aor_utils.php';
require_once 'custom/modules/AOR_Reports/AdvancedReporter.php';

class AOR_ReportsViewDetail extends ViewDetail
{

    private function getReportParameters()
    {
        if (!$this->bean->id) {
            return array();
        }
        $conditions = $this->bean->get_linked_beans('aor_conditions', 'AOR_Conditions', 'condition_order');
        $parameters = array();
        foreach ($conditions as $condition) {
            if (!$condition->parameter) {
                continue;
            }
            $condition->module_path = implode(":", unserialize(base64_decode($condition->module_path)));
            if ($condition->value_type == 'Date') {
                $condition->value = unserialize(base64_decode($condition->value));
            }
            $condition_item = $condition->toArray();
            $display = getDisplayForField($condition->module_path, $condition->field, $this->bean->report_module);
            $condition_item['module_path_display'] = $display['module'];
            $condition_item['field_label'] = $display['field'];
            if (!empty($this->bean->user_parameters[$condition->id])) {
                $param = $this->bean->user_parameters[$condition->id];
                $condition_item['operator'] = $param['operator'];
                $condition_item['value_type'] = $param['type'];
                $condition_item['value'] = $param['value'];
            }
            if (isset($parameters[$condition_item['condition_order']])) {
                $parameters[] = $condition_item;
            } else {
                $parameters[$condition_item['condition_order']] = $condition_item;
            }
        }
        return $parameters;
    }

    public function preDisplay()
    {
        global $app_list_strings;
        global $current_user;
        global $sugar_config;
        $security_group = new SecurityGroup();
        $groups = $security_group->getUserSecurityGroups($current_user->id);
        $group_ids = array();
        $redirect_flags = array();

        // Build the string for the query out of the associated security groups
        foreach ($groups as $key => $value) {
            $group_ids[] = $key;
        }

        // See what permissions fail
        if ($this->bean->private_report_checkbox == '1') {
            if (is_admin($current_user)) {
                $redirect_flags['admin'] = true;
            } else {
                $redirect_flags['admin'] = false;
            }

            if ($current_user->id !== $this->bean->assigned_user_id) {
                $redirect_flag['assigned_user'] = false;
            } else {
                $redirect_flags['assigned_user'] = true;
            }

            if (!in_array($this->bean->private_group_list, $group_ids)) {
                $redirect_flags['private_group'] = false;
            } else {
                $redirect_flags['private_group'] = true;
            }

            if ($current_user->id !== $this->bean->private_user_list) {
                $redirect_flags['private_user'] = false;
            } else {
                $redirect_flags['private_user'] = true;
            }
        }

        // Fetch the bean to return all User Groups (Security Groups)
        $group = BeanFactory::getBean("SecurityGroups");
        $groupsList = $group->get_full_list();
        $app_list_strings['report_private_groups'][''] = '';
        // Filter through the returned groups and sort them into a manageable array
        foreach ($groupsList as $group) {
            $app_list_strings['report_private_groups'][$group->id] = $group->name;
        }

        $ar = new AdvancedReporter($this->bean);
        $userList = $ar->getFullUserList();
        $app_list_strings['report_private_users'][''] = '';
        // Filter through the returned users and sort them into a manageable array
        foreach ($userList as $user) {
            $app_list_strings['report_private_users'][$user['id']] = $user['name'];
        }

        parent::preDisplay();
        $this->ss->assign('report_module', $this->bean->report_module);

        $this->bean->user_parameters = requestToUserParameters();

        $advancedReporter = new AdvancedReporter($this->bean);
        $reportHTML = $advancedReporter->buildMultiGroupReport(0, null, true);

        $chartsHTML = $this->bean->build_report_chart(null, AOR_Report::CHART_TYPE_RGRAPH);

        $chartsPerRow = $this->bean->graphs_per_row;

        $this->ss->assign('charts_content', $chartsHTML);

        $this->ss->assign('report_content', $reportHTML);

        echo "<input type='hidden' name='report_module' id='report_module' value='{$this->bean->report_module}'>";
        if (!is_file('cache/jsLanguage/AOR_Conditions/' . $GLOBALS['current_language'] . '.js')) {
            require_once('include/language/jsLanguage.php');
            jsLanguage::createModuleStringsCache('AOR_Conditions', $GLOBALS['current_language']);
        }
        echo '<script src="cache/jsLanguage/AOR_Conditions/' . $GLOBALS['current_language'] . '.js"></script>';

        $params = $this->getReportParameters();
        echo "<script>var reportParameters = " . json_encode($params) . ";</script>";

        $resizeGraphsPerRow = <<<EOD

       <script>
        function resizeGraphsPerRow()
        {
                var maxWidth = 900;
                var maxHeight = 500;
                var maxTextSize = 10;
                var divWidth = $("#detailpanel_report").width();

                var graphWidth = Math.floor(divWidth / $chartsPerRow);

                var graphs = document.getElementsByClassName('resizableCanvas');
                for(var i = 0; i < graphs.length; i++)
                {
                    if(graphWidth * 0.9 > maxWidth)
                    graphs[i].width  = maxWidth;
                else
                    graphs[i].width = graphWidth * 0.9;
                if(graphWidth * 0.9 > maxHeight)
                    graphs[i].height = maxHeight;
                else
                    graphs[i].height = graphWidth * 0.9;

                }
                if (typeof RGraph !== 'undefined') {
                    RGraph.redraw();
                }
        }
        </script>

EOD;


        echo $resizeGraphsPerRow;
        echo "<script> $(document).ready(function(){resizeGraphsPerRow();}); </script>";
        echo "<script> $(window).resize(function(){resizeGraphsPerRow();}); </script>";
        echo "<script type='javascript' src='custom/modules/AOR_Reports/detailView.js'></script>";

        $this->redirectFlags($redirect_flags);
    }

    // Redirection script
    function redirectFlags($flags)
    {
        if ($flags['admin'] === false) {
            if ($flags['assigned_user'] === false) {
                if ($this->bean->private_to_user_or_group == 'private_group' && $flags['private_group'] === false) {
                    SugarApplication::redirect("index.php?module=AOR_Reports&action=index");
                    exit();
                } elseif ($this->bean->private_to_user_or_group == 'private_user' && $flags['private_user'] === false) {
                    SugarApplication::redirect("index.php?module=AOR_Reports&action=index");
                    exit();
                } elseif (empty($this->bean->private_to_user_or_group)) {
                    SugarApplication::redirect("index.php?module=AOR_Reports&action=index");
                    exit();
                } else {
                    return true;
                }
            } else {
                return true;
            }
        } else {
            return true;
        }
    }



}
