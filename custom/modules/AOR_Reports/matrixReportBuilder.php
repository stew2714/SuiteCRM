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

    public function total( $total, $count, $actionType, $key){
        if($total == null || empty($total)){
            $total = 0;
        }
        $array = array("int", "currency", "float");
//        if(!in_array($this->bean->field_defs[$this->field]['type'], $array) || $key == "TOTAL"){
//            $actionType = "SUM";
//        }
        switch($actionType){
            case "AVG":
            case "SUM":
                return $total + $count;
                break;
            case "COUNT":
                return $total + $count;
                return $total;
                break;
            case "MIN":
                if(($count < $total && $total != 0 && $count != null) || $total == 0 ){
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
        //echo "<pre>{$sql}</pre>";
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
                    $this->totals[ $key ] = $this->total($this->totals[ $key ], $count, $this->actionType, $key);
                }else{
                    if($i != 0){
                        $label = "";
                    }else{
                        $label = "<b>Total</b>";
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

            foreach($this->totals as $key => $line){
                $counted = 0;
                foreach($data as $key2 => $row){
                    if($row[$key] != "0" && $row[ $key ] != null){
                        $counted++;
                    }
                }
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
        $array = array("TOTAL", "fieldx0", "fieldx1", "fieldx2");
        $removeList = array();
        foreach($data as $key => $row){
            foreach($row as $key2 => $item){
                if((!isset($removeList[$key2]) || $removeList[ $key2 ] === true) && $key != 0 && !in_array($key2,
                                                                                                           $array)){
                    if(($item == "0" || $item == null)){
                        $removeList[ $key2 ] = true; //I can remove it.
                    }else{
                        $removeList[ $key2 ] = false; //I cant remove it.
                    }
                }
            }
        }


        foreach($data as $key => $row){
            foreach($removeList as $key2 => $remove ){
                if($remove === true){

                    unset($data[$key][$key2]);
                    unset($this->totals[$key2]);
                    if($key2 == "none"){
                        $key2 = "";
                    }
//                    if(!isset($this->headers[$key2])){
//                        $key2 = str_replace("_", " ", $key2);
//                    }

                    if(isset($this->headers[$key2])){
                        unset($this->headers[$key2]);
                    }else{
                        foreach($this->headers as $chanceKey => $value){
                            $possibleKey = str_replace(".", " ", $chanceKey);
                            $possibleKey = str_replace("-", " ", $possibleKey);
                            $possibleKey = str_replace(" ", "_", $possibleKey);
                            if($possibleKey == $key2){
                                unset($this->headers[$chanceKey]);
                            }
                        }
                    }
                }
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
            $labels[0] =  '<b>' .  $this->getLabel($field_x[0])  . '</b>';
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
            $labels[1] =   '<b>' . $this->getLabel($field_x[1]) .  '</b>';
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
            $labels[2] =  '<b>' . $this->getLabel($field_x[2]) . '</b>';
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
        if($this->bean->field_defs[ $this->field ]['source'] == "custom_fields"){
            $tmp = $module . "_cstm";
        }else{
            $tmp = $module;
        }
        if($this->bean->field_defs[ $this->field ]['type'] == "currency"){
            $decimal = $locale->getPrecedentPreference('default_currency_significant_digits');
            $sql .= "      TRUNCATE( {$this->actionType}({$tmp}.{$field}), {$decimal})  AS TOTAL ";
        }else{
            $sql .= "      {$this->actionType}({$tmp}.{$field})  AS TOTAL ";
        }
        $this->headers[] = "<b>Total</b>";

        $results = $this->buildConditionWhere();

        $sql .= "FROM   {$module} ";
        $sql .= implode(" ", $this->join);
        $sql .= implode(" ", $results['join']);

        //$sql .= "WHERE  {$this->bean->table_name}.deleted = 0 ";
        $sql .= "WHERE  " . implode(" ", $results['where']);

        if ($field_x[0]) {
            $sql .= "GROUP BY IFNULL({$field_x[0]}, '')";
        }
        if ($field_x[1]) {
            $sql .= " ,{$field_x[1]}";
        }
        if ($field_x[2]) {
            $sql .= " ,{$field_x[2]}";
        }

        //echo "<pre>{$sql}</pre>";
        return $sql;

    }
    function buildConditionWhere($query = array())
    {
        $bean = BeanFactory::getBean("AOR_MatrixReporting", $_REQUEST['record']);
        global $beanList, $app_list_strings, $sugar_config;

        $aor_sql_operator_list['Equal_To'] = '=';
        $aor_sql_operator_list['Not_Equal_To'] = '!=';
        $aor_sql_operator_list['Greater_Than'] = '>';
        $aor_sql_operator_list['Less_Than'] = '<';
        $aor_sql_operator_list['Greater_Than_or_Equal_To'] = '>=';
        $aor_sql_operator_list['Less_Than_or_Equal_To'] = '<=';
        $aor_sql_operator_list['Contains'] = 'LIKE';
        $aor_sql_operator_list['Not_Contains'] = 'NOT LIKE';
        $aor_sql_operator_list['Starts_With'] = 'LIKE';
        $aor_sql_operator_list['Ends_With'] = 'LIKE';

        $closure = false;
        if (!empty($query['where'])) {
            $query['where'][] = '(';
            $closure = true;
        }

        if ($beanList[$bean->report_module]) {
            $module = new $beanList[$bean->report_module]();

            $sql = "SELECT id FROM aomr_conditions WHERE aor_report_id = '" . $bean->id . "' AND deleted = 0 ORDER BY condition_order ASC";
            $result = $bean->db->query($sql);

            $tiltLogicOp = true;

            while ($row = $bean->db->fetchByAssoc($result)) {
                $condition = new AOMR_Condition();
                $condition->retrieve($row['id']);

                $path = unserialize(base64_decode($condition->module_path));

                $condition_module = $module;
                $table_alias = $condition_module->table_name;
                $oldAlias = $table_alias;
                if (!empty($path[0]) && $path[0] != $module->module_dir) {
                    foreach ($path as $rel) {
                        if (empty($rel)) {
                            continue;
                        }
                        // Bug: Prevents relationships from loading.
                        $new_condition_module = new $beanList[getRelatedModule($condition_module->module_dir, $rel)];
                        //Check if the user has access to the related module
                        if (!(ACLController::checkAccess($new_condition_module->module_name, 'list', true))) {
                            return false;
                        }
                        $oldAlias = $table_alias;
                        $table_alias = $table_alias . ":" . $rel;
                        $query = $this->build_report_query_join($rel, $table_alias, $oldAlias, $condition_module,
                                                                'relationship', $query, $new_condition_module);
                        $condition_module = $new_condition_module;
                    }
                }
                if (isset($aor_sql_operator_list[$condition->operator])) {
                    $where_set = false;

                    $data = $condition_module->field_defs[$condition->field];

                    if ($data['type'] == 'relate' && isset($data['id_name'])) {
                        $condition->field = $data['id_name'];
                        $data_new = $condition_module->field_defs[$condition->field];
                        if (!empty($data_new['source']) && $data_new['source'] == 'non-db' && $data_new['type'] != 'link' && isset($data['link'])) {
                            $data_new['type'] = 'link';
                            $data_new['relationship'] = $data['link'];
                        }
                        $data = $data_new;
                    }

                    if ($data['type'] == 'link' && $data['source'] == 'non-db') {
                        $new_field_module = new $beanList[getRelatedModule($condition_module->module_dir,
                                                                           $data['relationship'])];
                        $table_alias = $data['relationship'];
                        $query = $this->build_report_query_join($data['relationship'], $table_alias, $oldAlias,
                                                                $condition_module, 'relationship', $query, $new_field_module);
                        $condition_module = $new_field_module;

                        // Debugging: security groups conditions - It's a hack to just get the query working
                        if ($condition_module->module_dir = 'SecurityGroups' && count($path) > 1) {
                            $table_alias = $oldAlias . ':' . $rel;
                        }
                        $condition->field = 'id';
                    }
                    if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                        $field = $this->db->quoteIdentifier($table_alias . '_cstm') . '.' . $condition->field;
                        $query = $this->build_report_query_join($table_alias . '_cstm', $table_alias . '_cstm',
                                                                $table_alias, $condition_module, 'custom', $query);
                    } else {
                        $field = $bean->db->quoteIdentifier($table_alias) . '.' . $condition->field;
                    }

                    if (!empty($this->user_parameters[$condition->id]) && $condition->parameter) {
                        $condParam = $this->user_parameters[$condition->id];
                        $condition->value = $condParam['value'];
                        $condition->operator = $condParam['operator'];
                        $condition->value_type = $condParam['type'];
                    }

                    switch ($condition->value_type) {
                        case 'Field':
                            $data = $condition_module->field_defs[$condition->value];

                            if ($data['type'] == 'relate' && isset($data['id_name'])) {
                                $condition->value = $data['id_name'];
                                $data_new = $condition_module->field_defs[$condition->value];
                                if ($data_new['source'] == 'non-db' && $data_new['type'] != 'link' && isset($data['link'])) {
                                    $data_new['type'] = 'link';
                                    $data_new['relationship'] = $data['link'];
                                }
                                $data = $data_new;
                            }

                            if ($data['type'] == 'link' && $data['source'] == 'non-db') {
                                $new_field_module = new $beanList[getRelatedModule($condition_module->module_dir,
                                                                                   $data['relationship'])];
                                $table_alias = $data['relationship'];
                                $query = $this->build_report_query_join($data['relationship'], $table_alias, $oldAlias,
                                                                        $condition_module, 'relationship', $query, $new_field_module);
                                $condition_module = $new_field_module;
                                $condition->field = 'id';
                            }
                            if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                                $value = $condition_module->table_name . '_cstm.' . $condition->value;
                                $query = $this->build_report_query_join($condition_module->table_name . '_cstm',
                                                                        $table_alias . '_cstm', $table_alias, $condition_module, 'custom', $query);
                            } else {
                                $value = ($table_alias ? $this->db->quoteIdentifier($table_alias) : $condition_module->table_name) . '.' . $condition->value;
                            }
                            break;

                        case 'Date':
                            $params = unserialize(base64_decode($condition->value));

                            // Fix for issue #1272 - AOR_Report module cannot update Date type parameter.
                            if ($params == false) {
                                $params = $condition->value;
                            }

                            if ($params[0] == 'now') {
                                if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
                                    $value = 'GetDate()';
                                } else {
                                    $value = 'NOW()';
                                }
                            } else {
                                if ($params[0] == 'today') {
                                    if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
                                        //$field =
                                        $value = 'CAST(GETDATE() AS DATE)';
                                    } else {
                                        $field = 'DATE(' . $field . ')';
                                        $value = 'Curdate()';
                                    }
                                } else {
                                    $data = $condition_module->field_defs[$params[0]];
                                    if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                                        $value = $condition_module->table_name . '_cstm.' . $params[0];
                                        $query = $this->build_report_query_join($condition_module->table_name . '_cstm',
                                                                                $table_alias . '_cstm', $table_alias, $condition_module, 'custom', $query);
                                    } else {
                                        $value = $condition_module->table_name . '.' . $params[0];
                                    }
                                }
                            }

                            if ($params[1] != 'now') {
                                switch ($params[3]) {
                                    case 'business_hours';
                                        //business hours not implemented for query, default to hours
                                        $params[3] = 'hours';
                                    default:
                                        if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
                                            $value = "DATEADD(" . $params[3] . ",  " . $app_list_strings['aor_date_operator'][$params[1]] . " $params[2], $value)";
                                        } else {
                                            $value = "DATE_ADD($value, INTERVAL " . $app_list_strings['aor_date_operator'][$params[1]] . " $params[2] " . $params[3] . ")";
                                        }
                                        break;
                                }
                            }
                            break;

                        case 'Multi':
                            $sep = ' AND ';
                            if ($condition->operator == 'Equal_To') {
                                $sep = ' OR ';
                            }
                            $multi_values = unencodeMultienum($condition->value);
                            if (!empty($multi_values)) {
                                $value = '(';
                                foreach ($multi_values as $multi_value) {
                                    if ($value != '(') {
                                        $value .= $sep;
                                    }
                                    $value .= $field . ' ' . $aor_sql_operator_list[$condition->operator] . " '" . $multi_value . "'";
                                }
                                $value .= ')';
                            }
                            $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND ')) . $value;
                            $where_set = true;
                            break;
                        case "Period":
                            if (array_key_exists($condition->value, $app_list_strings['date_time_period_list'])) {
                                $params = $condition->value;
                            } else {
                                $params = base64_decode($condition->value);
                            }
                            $value = '"' . getPeriodDate($params)->format('Y-m-d H:i:s') . '"';
                            break;
                        case "CurrentUserID":
                            global $current_user;
                            $value = '"' . $current_user->id . '"';
                            break;
                        case 'Value':
                        default:
                            $value = "'" . $bean->db->quote($condition->value) . "'";
                            break;
                    }

                    //handle like conditions
                    Switch ($condition->operator) {
                        case 'Contains':
                        case 'Not_Contains':
                            $value = "CONCAT('%', " . $value . " ,'%')";
                            break;
                        case 'Starts_With':
                            $value = "CONCAT(" . $value . " ,'%')";
                            break;
                        case 'Ends_With':
                            $value = "CONCAT('%', " . $value . ")";
                            break;
                    }

                    if ($condition->value_type == 'Value' && !$condition->value && $condition->operator == 'Equal_To') {
                        $value = "{$value} OR {$field} IS NULL";
                    }

                    if (!$where_set) {
                        if ($condition->value_type == "Period" && !empty($params)) {
                            if (array_key_exists($condition->value, $app_list_strings['date_time_period_list'])) {
                                $params = $condition->value;
                            } else {
                                $params = base64_decode($condition->value);
                            }
                            $date = getPeriodEndDate($params)->format('Y-m-d H:i:s');
                            $value = '"' . getPeriodDate($params)->format('Y-m-d H:i:s') . '"';

                            $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND '));
                            $tiltLogicOp = false;

                            switch ($aor_sql_operator_list[$condition->operator]) {
                                case "=":
                                    $query['where'][] = $field . ' BETWEEN ' . $value . ' AND ' . '"' . $date . '"';
                                    break;
                                case "!=":
                                    $query['where'][] = $field . ' NOT BETWEEN ' . $value . ' AND ' . '"' . $date . '"';
                                    break;
                                case ">":
                                case "<":
                                case ">=":
                                case "<=":
                                    $query['where'][] = $field . ' ' . $aor_sql_operator_list[$condition->operator] . ' ' . $value;
                                    break;
                            }
                        } else {
                            if (!$where_set) {
                                $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND ')) . $field . ' ' . $aor_sql_operator_list[$condition->operator] . ' ' . $value;
                            }
                        }
                    }
                    $tiltLogicOp = false;
                } else {
                    if ($condition->parenthesis) {
                        if ($condition->parenthesis == 'START') {
                            $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND ')) . '(';
                            $tiltLogicOp = true;
                        } else {
                            $query['where'][] = ')';
                            $tiltLogicOp = false;
                        }
                    } else {
                        $GLOBALS['log']->debug('illegal condition');
                    }
                }

            }

            if (isset($query['where']) && $query['where']) {
                array_unshift($query['where'], '(');
                $query['where'][] = ') AND ';
            }
            $query['where'][] = $module->table_name . ".deleted = 0 " . $this->build_report_access_query($module,
                                                                                                         $module->table_name);

        }

        if ($closure) {
            $query['where'][] = ')';
        }


        return $query;
    }

    function build_report_access_query(SugarBean $module, $alias)
    {

        $module->table_name = $alias;
        $where = '';
        if ($module->bean_implements('ACL') && ACLController::requireOwner($module->module_dir, 'list')) {
            global $current_user;
            $owner_where = $module->getOwnerWhere($current_user->id);
            $where = ' AND ' . $owner_where;

        }

        if (file_exists('modules/SecurityGroups/SecurityGroup.php')) {
            /* BEGIN - SECURITY GROUPS */
            if ($module->bean_implements('ACL') && ACLController::requireSecurityGroup($module->module_dir, 'list')) {
                require_once('modules/SecurityGroups/SecurityGroup.php');
                global $current_user;
                $owner_where = $module->getOwnerWhere($current_user->id);
                $group_where = SecurityGroup::getGroupWhere($alias, $module->module_dir, $current_user->id);
                if (!empty($owner_where)) {
                    $where .= " AND (" . $owner_where . " or " . $group_where . ") ";
                } else {
                    $where .= ' AND ' . $group_where;
                }
            }
            /* END - SECURITY GROUPS */
        }

        return $where;
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
                            $results2 = false;
                            if ($bean->field_defs[$field_y[2]]['type'] == "enum") {
                                foreach ($app_list_strings[$bean->field_defs[$field_y[2]]['options']] as $key2 =>
                                         $level2option) {
                                    $results2[] = $key2;
                                }
                            }else{
                                $results2 = $this->fetchLabelsFromDB($field_y[2], $bean->table_name);
                            }
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
            $this->headers[ $key1 ][$key2][$key3] =  '<b>' . $this->getLabel($field3 , $key3)  . '</b>';

        }elseif($field2 != null){
            $this->level2 = true;
            $this->headers[ $key1 ][$key2] =  '<b>' . $this->getLabel($field2 , $key2)  . '</b>';
        }else{
            $this->headers[ $key1 ] =  '<b>' . $this->getLabel($field1 , $key1) .  '</b>';
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
    function build_report_query_join(
        $name,
        $alias,
        $parentAlias,
        SugarBean $module,
        $type,
        $query = array(),
        SugarBean $rel_module = null
    ) {

        if (!isset($query['join'][$alias])) {

            switch ($type) {
                case 'custom':
                    $query['join'][$alias] = 'LEFT JOIN ' . $module->db->quoteIdentifier($module->get_custom_table_name()) . ' ' . $module->db->quoteIdentifier($name) . ' ON ' . $module->db->quoteIdentifier($parentAlias) . '.id = ' . $module->db->quoteIdentifier($name) . '.id_c ';
                    break;

                case 'relationship':
                    if ($module->load_relationship($name)) {
                        $params['join_type'] = 'LEFT JOIN';
                        if ($module->$name->relationship_type != 'one-to-many') {
                            if ($module->$name->getSide() == REL_LHS) {
                                $params['right_join_table_alias'] = $module->db->quoteIdentifier($alias);
                                $params['join_table_alias'] = $module->db->quoteIdentifier($alias);
                                $params['left_join_table_alias'] = $module->db->quoteIdentifier($parentAlias);
                            } else {
                                $params['right_join_table_alias'] = $module->db->quoteIdentifier($parentAlias);
                                $params['join_table_alias'] = $module->db->quoteIdentifier($alias);
                                $params['left_join_table_alias'] = $module->db->quoteIdentifier($alias);
                            }

                        } else {
                            $params['right_join_table_alias'] = $module->db->quoteIdentifier($parentAlias);
                            $params['join_table_alias'] = $module->db->quoteIdentifier($alias);
                            $params['left_join_table_alias'] = $module->db->quoteIdentifier($parentAlias);
                        }
                        $linkAlias = $parentAlias . "|" . $alias;
                        $params['join_table_link_alias'] = $module->db->quoteIdentifier($linkAlias);
                        $join = $module->$name->getJoin($params, true);
                        $query['join'][$alias] = $join['join'];
                        if($rel_module != null) {
                            $query['join'][$alias] .= $this->build_report_access_query($rel_module, $module->db->quoteIdentifier($alias));
                        }
                        $query['id_select'][$alias] = $join['select'] . " AS '" . $alias . "_id'";
                        $query['id_select_group'][$alias] = $join['select'];
                    }
                    break;
                default:
                    break;

            }

        }
        return $query;
    }
}