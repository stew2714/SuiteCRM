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
class AOR_MatrixReportingViewDetail extends ViewDetail {

    public function preDisplay()
    {
        parent::preDisplay();

        if ($this->bean->id) {
            $matrix = new matrixReportBuilder();
            //set up the fields.
            $fields_y = array(
                $this->bean->fieldx1,
                $this->bean->fieldx2,
                $this->bean->fieldx3,
            );

            $fields_x = array(
                $this->bean->fieldy1,
                $this->bean->fieldy2,
                $this->bean->fieldy3,
            );

            $field = $this->bean->actionfield;
            $actionType = $this->bean->actiontypefield;
            if(!empty($field) && !empty($this->bean->fieldx1) && !empty($this->bean->fieldy1) ){
                $results = $matrix->buildReport($this->bean->report_module, $fields_x, $fields_y, $field,
                                                $actionType);
            }
        }

        if($matrix->level3 == true || $matrix->level2 == true ){
            $tmp = array_values($matrix->headers);
            $total = '0';
            foreach($tmp as $header){
                if(is_array($header)){
                    $number = count($header);
                    foreach($header as $base){
                        if(is_array($base)){
                            $caseNumber = count($base);
                            continue;
                        }
                    }
                    if($caseNumber){
                        $total = $caseNumber * $number;
                    }else{
                        $total = $number;
                    }
                    continue;
                }

            }
            $this->ss->assign('level1Break', $total);
        }
        $currency = "";
        if($matrix->bean->field_defs[ $matrix->field ]['type'] == "currency" && $matrix->actionType != "COUNT"){
            global $locale, $current_user;

            $currency = $locale->getCurrencySymbol( $current_user );
        }

        $this->ss->assign('header', $matrix->headers);
        $this->ss->assign('currency', $currency);
        $this->ss->assign('data', $results);
        $this->ss->assign('counts', $matrix->totals);

        $this->ss->assign('level2', $matrix->level2);
        $this->ss->assign('level3', $matrix->level3);



    }

}
