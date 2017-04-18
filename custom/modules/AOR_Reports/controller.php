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
require_once("custom/modules/AOR_Reports/ReportPreview.php");

class customAOR_ReportsController extends AOR_ReportsController
{

    public function action_getPreview()
    {
        parse_str($_REQUEST['formdata'], $requestData);
        $requestData = $this->parseLines($requestData);
        $bean = BeanFactory::getBean("AOR_Reports", $requestData['id']);
        $preview = new reportPreview($bean, $requestData);
        echo $preview->buildMultiGroupReport("-2", true);
        die();
    }

    protected function action_changeReportPage()
    {
        $offset = !empty($_REQUEST['offset']) ? $_REQUEST['offset'] : 0;
        if (!empty($this->bean->id)) {
            $this->bean->user_parameters = requestToUserParameters();
            echo $this->bean->build_group_report($offset, true);
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
}


//
//if( substr($key, 0, 11) == "aor_fields_"){
//    $lineItems[] = array()
//            }

//        if(isset($requestData['record']) && !empty($requestData['record'])) {
//            $bean = BeanFactory::getBean("AOR_Reports", $requestData['record']);
//            $bean->save_from_post = true;
//            $_POST = $requestData;
//            $bean->save();
//            $report = $bean->buildMultiGroupReport(0, true);
//            echo $report;
//        }