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
    var $actionType = "";
    var $level3 = "";
    var $join = array();
    var $field = "";
    var $mainField = "";
    var $bean = array();

    public function total( $total, $count, $actionType){
        if($total == null || empty($total)){
            $total = 0;
        }
        switch($actionType){
            case "AVG":
            case "SUM":
                return $total + $count;
                break;
            case "COUNT":
                if($count > 0){
                    return $total + 1;
                }
                return $total;
                break;
            case "MIN":
                if(($count < $total && $total != 0) || $total == 0 ){
                    return $count;
                }
                return $total;
                break;
            case "MAX":
                if(($count > $total && $total != 0) || $total == 0 ){
                    return $count;
                }
                return $total;
                break;
            default:
                return $total;
                break;
        }

    }
    public function buildReport($module, $field_x, $field_y, $field, $actionType)
    {
        global $db, $app_list_strings;
        $this->bean = BeanFactory::getBean($module);
        $this->mainField = $this->fieldTypeCheck($field);
        $this->field = $field;
        $this->actionType = $actionType;

        if(is_array($this->mainField)){
            if(!in_array($field,$field_x) && !in_array($field, $field_y)){
                if($this->mainField['cstm'] == true){
                    $this->join[ 'cstm' ] = $this->mainField['join'];
                }else{
                    $this->join[ $this->mainField['field']  ] = $this->mainField['join'];
                }
            }
            $this->mainField = $this->mainField['field'];
            $field = $this->mainField;

        }
        $bean = $this->bean;
        $module = $bean->module_name;
        $selects = $this->buildSelects($bean, $field_x, $field_y, $field, $module);
        $string = implode("\n", $selects);

        $sql = $this->buildQuery($bean->table_name, $field_x, $field, $string);
        echo "<pre>{$sql}</pre>";
        $results = $db->query($sql);

        foreach ($results as $row) {


            $i = 0;
            foreach($row as $key =>  $count){

                if(in_array("currency_name", $field_x)){
                    $number = substr($key, -1);
                    if($field_x[ $number ] == "currency_name"){
                        $currency  = new Currency();
                        $row[ $key ] =  $currency->getDefaultCurrencyName() . " ({$currency->getDefaultISO4217()})";
                    }
                }

                if(is_numeric($count) || empty($count)){
                    $this->totals[ $key ] = $this->total($this->totals[ $key ], $count, $this->actionType);
                }else{
                    if($i != 0){
                        $label = "";
                    }else{
                        $label = "Total";
                        $i = 1;
                    }
                    $this->totals[ $key ] = $label;
                }





                if(is_numeric($count) && $bean->field_defs[ $this->field ]['type'] == "currency" &&
                   $this->actionType != "COUNT" && !in_array($key, array("fieldx1", "fieldx2", "fieldx3"))){
                    $row[ $key ] = currency_format_number($count);
                }
            }

            $data[] = $row;
        }

        if($this->actionType == "AVG"){
            $counted = count($data);
            foreach($this->totals as $key => $line){
                if(is_numeric($count) && $line != "0" ) {
                    $this->totals[ $key ] = $line / $counted;
                }
            }
        }

        foreach($this->totals as $key => $unformated){
            if( is_numeric($unformated) &&  $this->bean->field_defs[ $this->field ]['type'] == "currency" &&
                $this->actionType != "COUNT"){
                $this->totals[$key] = currency_format_number($unformated);
            }

            if(isset($this->totals["fieldx1"]) ) {
                $this->totals[ "fieldx1" ] = "";
            }
            if(isset($this->totals["fieldx2"]) ) {
                $this->totals["fieldx2"] = "";
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
            if($this->bean->field_defs[ $field ]['source'] == "custom_fields"){
                $field = array("field" => $this->bean->table_name . "_cstm." . $field,
                                "join" => "LEFT JOIN {$this->bean->table_name}_cstm ON {$this->bean->table_name}_cstm.id_c = {$this->bean->table_name}.id ",
                                "cstm" => true
                );
            }else{
                $field = $this->bean->table_name . "." . $field;
            }
        }

        return $field;
    }
    public function buildQuery($module, $field_x, $field, $string )
    {
        global $locale;
        $sql = '';
        $sql .= "SELECT ";
        if ($field_x[0]) {
            $labels[0] =  $this->getLabel($field_x[0]);
            $field_x[0] = $this->fieldTypeCheck($field_x[0]);
            if(is_array($field_x[0])){
                if($field_x[0]['cstm'] == true){
                    $this->join[ 'cstm' ] = $field_x[0]['join'];

                }else{
                    $this->join[ $field_x[0]['field'] ] = $field_x[0]['join'];
                }
                $field_x[0] = $field_x[0]['field'];
            }
            $sql .= "{$field_x[0]} AS fieldx0,";
        }

        if ($field_x[1]) {
            $labels[1] =  $this->getLabel($field_x[1]);
            $field_x[1] = $this->fieldTypeCheck($field_x[1]);
            if(is_array($field_x[1])){
                if($field_x[1]['cstm'] == true) {
                    $this->join[ 'cstm' ] = $field_x[1]['join'];
                }else{
                    $this->join[ $field_x[1]['field'] ] = $field_x[1]['join'];
                }
                $field_x[1] = $field_x[1]['field'];
            }
            $sql .= "{$field_x[1]} AS fieldx1,";

        }

        if ($field_x[2]) {
            $labels[2] =  $this->getLabel($field_x[2]);
            $field_x[2] = $this->fieldTypeCheck($field_x[2]);
            if(is_array($field_x[2])){
                if($field_x[2]['cstm'] == true) {
                    $this->join[ 'cstm' ] = $field_x[2]['join'];
                }else{
                    $this->join[$field_x[2]['field']] = $field_x[2]['join'];
                }
                $field_x[2] = $field_x[2]['field'];
            }
            $sql .= "{$field_x[2]} AS fieldx2,";
        }

        $this->headers =  $labels + $this->headers;


        $sql .= "      {$string}";
        if($this->bean->field_defs[ $this->field ]['type'] == "currency"){
            $decimal = $locale->getPrecedentPreference('default_currency_significant_digits');
            $sql .= "      TRUNCATE( {$this->actionType}({$field}), {$decimal})  AS TOTAL ";
        }else{
            $sql .= "      {$this->actionType}({$field})  AS TOTAL ";
        }
        $this->headers[] = "Total";
        $sql .= "FROM   {$module} ";
        $sql .= implode(" ", $this->join);
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

                            $results = $this->fetchLabelsFromDB($field_y[2], $bean->table_name);
                            if($results == false) {
                                $selects[] = $this->buildCaseStatement($field_y[0], $key, $field_y[1], $key2);
                            }else {
                                //$selects[] = $this->buildCaseStatement($field_y[0], '',  $field_y[1], '');
                                foreach ($results as $item) {
                                    $selects[] = $this->buildCaseStatement(
                                        $field_y[0],
                                        $key,
                                        $field_y[1],
                                        $key2,
                                        $field_y[2],
                                        $item
                                    );

                                }
                            }

                        }
                    }
                } else {

                    $results = $this->fetchLabelsFromDB($field_y[1], $bean->table_name);
                    if($results == false){
                        $selects[] = $this->buildCaseStatement($field_y[0], $key, $field_y[1], $key2);
                    }else {
                        //$selects[] = $this->buildCaseStatement($field_y[0], '',  $field_y[1], '');
                        foreach ($results as $item) {
                            $results2 = $this->fetchLabelsFromDB($field_y[2], $bean->table_name);
                            if ($results2 == false) {
                                $selects[] = $this->buildCaseStatement($field_y[0], $key, $field_y[1], $item);
                            } else {
                                foreach ($results2 as $item3) {
                                    $selects[] = $this->buildCaseStatement(
                                        $field_y[0],
                                        $key,
                                        $field_y[1],
                                        $item,
                                        $field_y[2],
                                        $item3
                                    );

                                }
                            }
                        }
                    }
                }
            }
        } else {
            $results = $this->fetchLabelsFromDB($field_y[0], $bean->table_name);
            $selects[] = $this->buildCaseStatement($field_y[0], '');
            foreach ($results as $item) {
                $results2 = false;
                if ($bean->field_defs[$field_y[1]]['type'] == "enum") {
                    foreach ($app_list_strings[$bean->field_defs[$field_y[1]]['options']] as $key2 => $level3option) {
                        $results2[] = $key2;
                    }
                }else{
                    $results2 = $this->fetchLabelsFromDB($field_y[1], $bean->table_name);
                }
                if ($results2 == false) {
                    $selects[] = $this->buildCaseStatement($field_y[0], $item);
                } else {
                    $results3 = false;
                    foreach ($results2 as $item1) {
                        if ($bean->field_defs[$field_y[2]]['type'] == "enum") {
                            foreach ($app_list_strings[$bean->field_defs[$field_y[2]]['options']] as $key3 => $level3option) {
                                $results3[] = $key3;
                            }
                        }else{
                            $results3 = $this->fetchLabelsFromDB($field_y[2], $bean->table_name);
                        }
                        if ($results3 == false) {
                            $selects[] = $this->buildCaseStatement($field_y[0], $item, $field_y[1], $item1);
                        } else {
                            foreach ($results3 as $item2) {
                                $selects[] = $this->buildCaseStatement(
                                    $field_y[0],
                                    $item,
                                    $field_y[1],
                                    $item1,
                                    $field_y[2],
                                    $item2
                                );

                            }
                        }

                    }
                }
            }
        }

        return $selects;
    }

    public function fetchLabelsFromDB($field, $module)
    {
        global $db;
        $field = $this->fieldTypeCheck($field);
        if(is_array($field)){
            $join = $field['join'];
            $field = $field['field'];
        }
        $subSql = "SELECT distinct {$field} as result_field FROM " . $module . " {$join} WHERE {$module}.deleted = 0";
        $results = $db->query($subSql);
        foreach ($results as $item) {
            $selects[] = $db->quote($item['result_field']);
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
            if(!is_array($this->headers[ $key1 ][$key2])){
                $this->headers[ $key1 ][$key2] = array();
            }
            $this->headers[ $key1 ][$key2][$key3] = $this->getLabel($field3 , $key3);

        }elseif($field2 != null){
            $this->level2 = true;
            $this->headers[ $key1 ][$key2] = $this->getLabel($field2 , $key2);
        }else{
            $this->headers[ $key1 ] = $this->getLabel($field1 , $key1);
        }
        $select = "";

        $field1 = $this->fieldTypeCheck($field1);
        if(is_array($field1)){
            if($field1['cstm'] == true){
                $this->join[ 'cstm' ] = $field1['join'];
            }else{
                $this->join[ $field1['field'] ] = $field1['join'];
            }
            $field1 = $field1['field'];
        }


        if($this->bean->field_defs[ $this->field ]['type'] == "currency" && $this->actionType != "COUNT"){
            $select = "ROUND( ";
        }
        //if($this->bean->field_defs[ $this->field ]['type'] == "currency") {
            $type = $this->actionType;
        //}
        $select .= $type . "(CASE WHEN 
                {$field1} ='{$key1}'  ";
        if($key1 == ""){
            $select .= "OR {$field1} is null ";
        }
        if ($field2 != null) {
            $field2 = $this->fieldTypeCheck($field2);
            if(is_array($field2)){
                if($field2['cstm'] == true){
                    $this->join[ 'cstm' ] = $field2['join'];
                }else{
                    $this->join[ $field2['field'] ] = $field2['join'];
                }
                $field2 = $field2['field'];
            }

            $select .= " AND {$field2} = '{$key2}' ";
            if($key2 == ""){
                $select .= "OR {$field2} is null ";
            }
        }
        if ($field3 != null) {

            $field3 = $this->fieldTypeCheck($field3);
            if(is_array($field3)){
                if($field3['cstm'] == true){
                    $this->join[ 'cstm' ] = $field3['join'];
                }else{
                    $this->join[ $field3['field'] ] = $field3['join'];
                }
                $field3 = $field3['field'];
            }

            $select .= " AND {$field3} = '{$key3}'";
            if($key3 == ""){
                $select .= "OR {$field3} is null ";
            }
        }
        $select .= " THEN {$this->mainField}  
                ELSE null  END)";

        if($this->bean->field_defs[ $this->field ]['type'] == "currency" && $this->actionType != "COUNT"){
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
        if($module == null){
            return array();
        }
        $defs[''] = "";
        foreach ($fieldDefs as $field) {
            $label = translate($field['vname'], $module);
            if(in_array($field['type'], $this->exemptFields) || in_array($field['dbType'], $this->exemptFields)){
                continue;
            }
            if( empty($label) ){
                $label = $field['name'];
            }
            if(($module == "Leads" || $module == "Contacts") && ($field['name'] == "full_name" || $field['name'] == "name" ) ){
               continue;
            }
            $defs[$field['name']] = $label;
        }

        return $defs;
    }
}