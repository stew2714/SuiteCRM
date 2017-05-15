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
    var $headers = array();

    public function buildReport($module, $field_x, $field_y, $field)
    {
        global $db, $app_list_strings;
        $bean = BeanFactory::getBean($module);
        $module = $bean->module_name;
        $selects = $this->buildSelects($bean, $field_x, $field_y, $field, $module);
        $string = implode("\n", $selects);

        $sql = $this->buildQuery($bean->table_name, $field_x, $field, $string);

        $results = $db->query($sql);

        foreach ($results as $row) {
            $data[] = $row;
        }

//        echo '<pre>';
//        print_r($sql  );
//        echo '</pre>';
        return $data;

    }

    public function buildQuery($module, $field_x, $field, $string)
    {
        $sql = '';
        $sql .= "SELECT ";
        if ($field_x[0]) {
            $sql .= "{$field_x[0]},";
            $labels[0] =  $field_x[0];
        }

        if ($field_x[1]) {
            $sql .= "{$field_x[1]},";
            $labels[1] =  $field_x[1];
        }

        if ($field_x[2]) {
            $sql .= "{$field_x[2]},";
            $labels[2] =  $field_x[2];
        }

        $this->headers =  $labels + $this->headers;


        $sql .= "      {$string}";
        $sql .= "      SUM({$field})  AS TOTAL ";
        $this->headers[] = "Total";
        $sql .= "FROM   {$module} ";
        $sql .= "WHERE  deleted = 0 ";

        if ($field_x[0]) {
            $sql .= "GROUP BY {$field_x[0]}";
        }
        if ($field_x[1]) {
            $sql .= " ,{$field_x[1]}";
        }
        if ($field_x[2]) {
            $sql .= " ,{$field_x[2]}";
        }

        return $sql;

    }

    public function buildSelects($bean, $field_x, $field_y, $field, $module)
    {
        global $app_list_strings;
        $selects = array();

        if ($bean->field_defs[$field_y[0]]['type'] == "enum") {
            foreach ($app_list_strings[$bean->field_defs[$field_y[0]]['options']] as $key => $option) {
                if ($bean->field_defs[$field_y[1]]['type'] == "enum") {
                    foreach ($app_list_strings[$bean->field_defs[$field_y[1]]['options']] as $key2 => $level2option) {
                        if ($bean->field_defs[$field_y[2]]['type'] == "enum") {
                            foreach ($app_list_strings[$bean->field_defs[$field_y[2]]['options']] as $key3 => $level3option) {
                                $selects[] = $this->buildCaseStatement(
                                    $field_y[0],
                                    $key,
                                    $field_y[1],
                                    $key2,
                                    $field_y[2],
                                    $key3
                                );
                            }
                        } elseif ($bean->field_defs[$field_y[2]]['type']) {
                            $results = $this->fetchLabelsFromDB($field_y[3], $bean->table_name);
                            $selects[] =
                                $this->buildCaseStatement($field_y[0], $key, $field_y[1], $key2, $field_y[2], '');
                            foreach ($results as $item) {
                                $selects[] =
                                    $this->buildCaseStatement(
                                        $field_y[0],
                                        $key,
                                        $field_y[1],
                                        $key2,
                                        $field_y[2],
                                        $item
                                    );

                            }
                        } else {
                            $selects[] = $this->buildCaseStatement($field_y[0], $key, $field_y[1], $key2);
                        }
                    }
                } else {
                    $selects[] = $this->buildCaseStatement($field_y[0], $key, $field_y[1], $key2);
                }
            }
        } else {
            $results = $this->fetchLabelsFromDB($field_y[0], $bean->table_name);
            $selects[] = $this->buildCaseStatement($field_y[0], '');
            foreach ($results as $item) {
                $selects[] = $this->buildCaseStatement($field_y[0], $item);

            }
        }

        return $selects;
    }

    public function fetchLabelsFromDB($field, $module)
    {
        global $db;
        $subSql = "SELECT distinct {$field} FROM " . $module . " WHERE deleted = 0";
        $results = $db->query($subSql);
        foreach ($results as $item) {
            $selects[] = $db->quote($item[$field]);
        }

        return $selects;
    }

    public function buildCaseStatement($field1, $key1, $field2 = null, $key2 = null, $field3 = null, $key3 = null)
    {
        $label = $this->swap($key1 . $key2 .  $key3);
        if($field3 != null){
            $this->headers[ $key1 ][$key2][$key3] = $key3;
        }elseif($field2 != null){
            $this->headers[ $key1 ][$key2] = $key2;
        }else{
            $this->headers[ $key1 ] = $label;
        }

        $select = "SUM(CASE WHEN 
                {$field1} ='{$key1}'  ";
        if ($field2 != null) {
            $select .= " AND {$field2} = '{$key2}' ";
        }
        if ($field3 != null) {
            $select .= " AND {$field3[0]} = '{$key3}'";
        }
        $select .= "THEN amount_usdollar  
                ELSE 0  END) AS '{$label}',";

        return $select;
    }

    public function checkType($bean, $field_y)
    {
        global $db, $app_list_strings;
        $module = $bean->table_name;
        $results = array();
        $possible_types = array(
            'enum',
            'multienum',
        );

        for ($x = 0; $x < count($field_y); $x++) {
            $results[$x] = array();
            $in_type = in_array($bean->field_defs[$field_y[$x]]['type'], $possible_types);
            $results[$x]['in_type'] = $in_type;

            if ($in_type) {
                if ($bean->field_defs[$field_y[$x]]['options'] !== 'null') {
                    $results[$x]['options'] =
                        $this->getKeys($app_list_strings[$bean->field_defs[$field_y[$x]]['options']]);
                }
            } else {
                $subSql = "SELECT distinct {$field_y[$x]} FROM " . $module . " WHERE deleted = 0";
                $options_result = $db->query($subSql);
                foreach ($options_result as $item) {
                    $results[$x]['options'] = $item;
                }
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
                'swap_key'     => $this->swap($key),
            );
        }

        return $result;
    }

    public function swap($string)
    {
        $string = str_replace(" ", "_", $string);
        $string = str_replace("/", "_", $string);
        $string = str_replace(".", "_", $string);
        $string = str_replace("-", "_", $string);
        if ($string == "") {
            $string = "none";
        }

        return $string;
    }

    public function getFieldDefs($fieldDefs)
    {
        $defs[] = "";
        foreach ($fieldDefs as $field) {
            $defs[$field['name']] = $field['name'];
        }

        return $defs;
    }
}