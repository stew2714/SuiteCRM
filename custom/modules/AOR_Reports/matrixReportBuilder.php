<?php

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2016 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
class matrixReportBuilder
{
    public function buildReport($module, $field_x, $field_y, $field)
    {
        global $db, $app_list_strings;
        $bean = BeanFactory::getBean($module);
        $module = $bean->module_name;
        $selects = $this->buildSelects($bean, $field_x, $field_y, $field, $module);
        $string = implode("\n", $selects);

        $sql = "SELECT
              {$field_x[0]},
              {$field_x[1]},
              {$field_x[2]},
              {$string}
              SUM({$field})                                               AS TOTAL
       FROM   opportunities
       WHERE  deleted = 0
       GROUP BY   {$field_x[0]},{$field_x[1]},{$field_x[2]}";

        echo '<br><br><br><br><br><br><br><br><br><br><pre>';
        print_r($sql);
        echo '</pre>';
        die();
    }

    public function buildSelects($bean, $field_x, $field_y, $field, $module)
    {
        global $db, $app_list_strings;
        $selects = array();

        echo '<pre>';
        print_r($this->checkType($bean,$field_y));
        echo '</pre>';

        //@todo - separate nest below into function calls where applicable... possibly also variables not being hit at the last else block.

        if ($bean->field_defs[$fieldy[0]]['type'] == "enum") {
            foreach ($app_list_strings[$bean->field_defs[$field_y[0]]['options']] as $key => $option) {
                $labelKey = $this->swap($key);
                if ($bean->field_defs[$field_y[1]]['type'] == "enum") {
                    foreach ($app_list_strings[$bean->field_defs[$field_y[1]]['options']] as $key2 => $level2option) {
                        $label2Key = $this->swap($key2);
                        if ($bean->field_defs[$field_y[2]]['type'] == "enum") {
                            foreach ($app_list_strings[$bean->field_defs[$field_y[2]]['options']] as $key3 =>
                                     $level3option) {
                                $label3Key = $this->swap($key3);
                                $selects[] = " SUM(CASE WHEN {$field_y[0]} ='{$key}'  AND {$field_y[1]} = '{$key2}' AND {$field_y[2]} = {$key3} THEN amount_usdollar  ELSE 0  END) AS {$labelKey}_{$label2Key}_$label3Key,";
                            }
                        } elseif ($bean->field_defs[$field_y[2]]['type']) {
                            $subSql = "SELECT distinct {$field_y[3]} FROM " . $module . " WHERE deleted = 0";
                            $results = $db->query($subSql);
                            $selects[] = "SUM(CASE WHEN {$field_y[0]} ='{$key}' AND {$field_y[1]} = '{$key2}' AND {$field_y[2]} = '' THEN amount_usdollar  ELSE 0  END) AS {$labelKey}_{$label2Key}_none,";
                            foreach ($results as $item) {
                                $selects[] = "SUM(CASE WHEN {$field_y[0]} ='{$key}' AND {$field_y[1]} = '{$key2}' AND {$field_y[2]} = '{$item[$field_y[2]]}' THEN amount_usdollar  ELSE 0  END) AS {$labelKey}_{$label2Key}_{$item[$fieldy3]},";
                            }
                        } else {
                            $selects[] = "SUM(CASE WHEN {$field_y[0]} ='{$key}' AND {$field_y[1]} = '{$key2}' THEN amount_usdollar  ELSE 0  END) AS {$labelKey}_{$label2Key},";

                        }
                    }
                } else {
                    //@todo this has the same problem.
                    $selects[] = "SUM(CASE WHEN {$field_y[0]} ='{$key}' AND {$field_y[1]} = '{$key2}' THEN amount_usdollar  ELSE 0  END) AS {$labelKey}_{$label2Key},";
                }
            }
        } else {
            $selects[] = "SUM(CASE WHEN {$field_y[0]} ='{$key}' THEN amount_usdollar ELSE 0 END) AS {$labelKey},";
        }

        return $selects;
    }

    public function checkType($bean, $field_y)
    {
        global $db, $app_list_strings;
        $results = array();
        $possible_types = array(
            'enum',
            'multienum',
        );

        for ($x=0; $x<count($field_y); $x++) {
            $results[$x] = array();
            $in_type = in_array($bean->field_defs[$field_y[$x]]['type'],$possible_types);
            $results[$x]['in_type'] = $in_type;

            if ($in_type) {
                $results[$x]['options'] = $this->getKeys($app_list_strings[$bean->field_defs[$field_y[$x]]['options']]);
            }
        }

        return $results;
    }

    public function getKeys($options)
    {
        $result = array();

        foreach ($options as $key => $value) {
            $result[] = array(
                'original_key' => $key,
                'swap_key' => $this->swap($key),
            );
        }

        return $result;
    }

    public function swap($string)
    {
        $string = str_replace(" ", "_", $string);
        $string = str_replace("/", "_", $string);
        $string = str_replace(".", "_", $string);
        if ($string == "") {
            $string = "none";
        }

        return $string;
    }
}