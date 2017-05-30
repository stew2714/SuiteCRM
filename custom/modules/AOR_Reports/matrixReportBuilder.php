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
    var $exemptFields = array('id', 'link');
    var $headers = array();
    var $totals = array();
    var $level2 = "";
    var $level3 = "";
    var $mainField = "";
    var $bean = array();

    public function buildReport($module, $field_x, $field_y, $field)
    {
        global $db, $app_list_strings;
        $this->bean = BeanFactory::getBean($module);
        $this->mainField = $this->fieldTypeCheck($field);
        if(is_array($this->mainField)){
            if(!in_array($field,$field_x) && !in_array($field, $field_y)){
                $join = $this->mainField['join'];
            }
            $this->mainField = $this->mainField['field'];
            $field = $this->mainField;
        }
        $bean = $this->bean;
        $module = $bean->module_name;
        $selects = $this->buildSelects($bean, $field_x, $field_y, $field, $module);
        $string = implode("\n", $selects);

        $sql = $this->buildQuery($bean->table_name, $field_x, $field, $string, $join);
        //echo "<pre>{$sql}</pre>";
        $results = $db->query($sql);

        foreach ($results as $row) {
            $data[] = $row;

            $i = 0;
            foreach($row as $key =>  $count){
                if(is_numeric($count)){
                    $this->totals[ $key ] += $count;
                }else{
                    if($i != 0){
                        $label = "";
                    }else{
                        $label = "Total";
                        $i = 1;
                    }
                    $this->totals[ $key ] = $label;
                }

            }
        }

        foreach($this->totals as $key => $unformated){
            if(is_numeric($unformated) && $this->bean->field_defs[ $this->mainField ]['type'] == "currency"){
                $this->totals[$key] = currency_format_number($unformated);
            }
        }
        return $data;

    }
    public function fieldTypeCheck($field){
        global $current_user;
        if($this->bean->field_defs[ $field]['type'] == "datetime" ||
           $this->bean->field_defs[ $field]['type'] == "date" ||
           $this->bean->field_defs[ $field]['type'] == "datetimecombo"
        ) {
            $allFormats = $current_user->getUserDateTimePreferences();
            $format = preg_replace("/[a-zA-Z]/",'%$0',$allFormats['date'] . ' H:i:s');
            $field = " DATE_FORMAT({$this->bean->table_name}.{$field}, '{$format}')";
        }elseif($this->bean->field_defs[ $field]['type'] == "relate"){
            $related = $this->bean->field_defs[ $this->bean->field_defs[ $field][ 'link' ] ] ;
            $fieldDef = $this->bean->field_defs[$field] ;
            $relatedBean = BeanFactory::getBean($related['module']);

            if(isset($fieldDef['join_name']) && !empty($fieldDef['join_name'])) {
                $relatedField = array_search($this->bean->table_name, $relatedBean->relationship_fields);
                $field = array(
                    "field" => $fieldDef['join_name'] . '.' . $fieldDef['rname'],
                    "join"  => " 
                LEFT JOIN {$related['relationship']} ON {$related['relationship']}
                .{$relatedField} = {$this->bean->table_name}.id
                LEFT JOIN {$fieldDef['join_name']} ON {$fieldDef['join_name']}.id = {$related['relationship']}.{$fieldDef['id_name']} "
                );
            }else{
                if(empty($related['id_name'])){
                    $related['id_name'] = $fieldDef['id_name'];
                }
                $field = array(
                    "field" => $fieldDef['table'] . '.' . $fieldDef['rname'],
                    "join"  => "  
                           LEFT JOIN {$fieldDef['table']} ON {$this->bean->table_name}.{$related['id_name']} = {$fieldDef['table']}.id "
                );
            }
        }else{
            $field = $this->bean->table_name . "." . $field;
        }

        return $field;
    }
    public function buildQuery($module, $field_x, $field, $string, $join = "" )
    {
        $sql = '';
        $sql .= "SELECT ";
        if ($field_x[0]) {
            $labels[0] =  $this->getLabel($field_x[0]);
            $field_x[0] = $this->fieldTypeCheck($field_x[0]);
            if(is_array($field_x[0])){
                $join .= $field_x[0]['join'];
                $field_x[0] = $field_x[0]['field'];
            }
            $sql .= "{$field_x[0]},";

        }

        if ($field_x[1]) {
            $labels[1] =  $this->getLabel($field_x[1]);
            $field_x[1] = $this->fieldTypeCheck($field_x[1]);
            if(is_array($field_x[1])){
                $join .= $field_x[1]['join'];
                $field_x[1] = $field_x[1]['field'];
            }
            $sql .= "{$field_x[1]},";

        }

        if ($field_x[2]) {
            $labels[2] =  $this->getLabel($field_x[2]);
            $field_x[2] = $this->fieldTypeCheck($field_x[1]);
            if(is_array($field_x[2])){
                $join .= $field_x[2]['join'];
                $field_x[2] = $field_x[2]['field'];
            }
            $sql .= "{$field_x[2]},";
        }

        $this->headers =  $labels + $this->headers;


        $sql .= "      {$string}";
        if($this->bean->field_defs[ $field ]['type'] == "currency"){
            $sql .= "      SUM({$field})  AS TOTAL ";
        }else{
            $sql .= "      COUNT({$field})  AS TOTAL ";
        }
        $this->headers[] = "Total";
        $sql .= "FROM   {$module} ";
        $sql .= $join;
        $sql .= "WHERE  {$this->bean->table_name}.deleted = 0 ";

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
    public function getLabel($field, $value = null){
        global $app_list_strings;
        if(!is_null($value) ){
            $label = $app_list_strings[ $this->bean->field_defs[$field]['options'] ][ $value ] ;
            if(empty($label)){
                if(!empty($value)){
                    $label = $value;
                }else{
                    $label = "None";
                }
            }
        }else{
            $label = translate($this->bean->field_defs[ $field ]['vname'], $this->bean->module_name);
        }
        return $label;
    }
    public function buildCaseStatement($field1, $key1, $field2 = null, $key2 = null, $field3 = null, $key3 = null)
    {
        global $locale;
        $label = $this->swap($key1 . $key2 .  $key3);

        if($field3 != null){
            $this->level3 = true;
            $this->level2 = true;
            $this->headers[ $key1 ][$key2][$key3] = $this->getLabel($field3 , $key3);
        }elseif($field2 != null){
            $this->level2 = true;
            $this->headers[ $key1 ][$key2] = $this->getLabel($field2 , $key2);
        }else{
            $this->headers[ $key1 ] = $this->getLabel($field1 , $key1);
        }
        $select = "";
        if($this->bean->field_defs[ $this->mainField ]['type'] == "currency"){
            $select = "ROUND( ";
        }
        $type = "COUNT";
        if($this->bean->field_defs[ $this->mainField ]['type'] == "currency") {
            $type = "SUM";
        }
        $select .= $type . "(CASE WHEN 
                {$field1} ='{$key1}'  ";
        if ($field2 != null) {
            $select .= " AND {$field2} = '{$key2}' ";
        }
        if ($field3 != null) {
            $select .= " AND {$field3} = '{$key3}'";
        }
        $select .= " THEN {$this->mainField}  
                ELSE null  END)";

        if($this->bean->field_defs[ $this->mainField ]['type'] == "currency"){
            $decimal = $locale->getPrecedentPreference('default_currency_significant_digits');
            $select .= ", {$decimal} ) ";
        }

        $select .= " AS '{$label}',";

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

    public function getFieldDefs($fieldDefs, $module)
    {

        $defs[] = "";
        foreach ($fieldDefs as $field) {
            $label = translate($field['vname'], $module);
            if(in_array($field['type'], $this->exemptFields) || in_array($field['dbType'], $this->exemptFields)){
                continue;
            }
            if( empty($label) ){
                $label = $field['name'];
            }
            $defs[$field['name']] = $label;
        }

        return $defs;
    }
}