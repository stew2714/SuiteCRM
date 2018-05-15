<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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


class SharedSecurityRules extends Basic
{
    public $new_schema = true;
    public $module_dir = 'SharedSecurityRules';
    public $object_name = 'SharedSecurityRules';
    public $table_name = 'sharedsecurityrules';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public function __construct($init=true){
        parent::__construct();
        if($init){
            $this->load_flow_beans();
        }
    }
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
    function load_flow_beans(){
        global $beanList, $app_list_strings;

        $app_list_strings['sa_moduleList'] = $app_list_strings['moduleList'];

        if(!empty($app_list_strings['sa_moduleList'])){
            foreach($app_list_strings['sa_moduleList'] as $mkey => $mvalue){
                if(!isset($beanList[$mkey]) || str_begin($mkey, 'AOW_')){
                    unset($app_list_strings['sa_moduleList'][$mkey]);
                }
            }
        }

        $app_list_strings['sa_moduleList'] = array_merge((array)array(''=>''), (array)$app_list_strings['sa_moduleList']);

        asort($app_list_strings['sa_moduleList']);
    }

    function save($check_notify = FALSE){
        if (empty($this->id)){
            unset($_POST['aow_conditions_id']);
            unset($_POST['aow_actions_id']);
        }

        parent::save($check_notify);

        require_once('modules/SharedSecurityRulesConditions/SharedSecurityRulesConditions.php');
        $condition = new SharedSecurityRulesConditions();
        $condition->save_lines($_POST, $this, 'aor_conditions_');

        require_once('modules/SharedSecurityRulesActions/SharedSecurityRulesActions.php');
        $action = new SharedSecurityRulesActions();
        $action->save_lines($_POST, $this, 'shared_rules_actions_');
    }


    /**
     * @param $module
     * @param $view
     *
     * @return bool
     */
    function checkRules(&$module,$view ){

        //        $moduleBean = clone $module;
        $GLOBALS['log']->fatal('SharedSecurityRules: In checkRules for module: ' . $module->name . ' and view: ' . $view);

        $class = get_class($module);
        $moduleBean = new $class();
        if (!empty($module->fetched_row) && !empty($module->fetched_row['id']) && !empty($module->fetched_row['assigned_user_id']) && !empty($module->fetched_row['created_by'])) {
            $moduleBean->populateFromRow($module->fetched_row);
        }

        $result = null;
        if(empty($moduleBean->id) || $moduleBean->id == "[SELECT_ID_LIST]"){
            return $result;
        }
        global $current_user;
        $sql_query = "SELECT * FROM sharedsecurityrules WHERE sharedsecurityrules.status = 'Complete' && sharedsecurityrules.flow_module = '{$module->module_name}' && sharedsecurityrules.deleted = '0'";

        /* CREATING SQL QUERY VERSION */
        $query_results = $module->db->query($sql_query);
        while($rule = $module->db->fetchByAssoc($query_results)) {
            $sql_query = "SELECT * FROM sharedsecurityrulesactions WHERE sharedsecurityrulesactions.sa_shared_security_rules_id = '{$rule['id']}' && sharedsecurityrulesactions.deleted = '0'";
            $actions_results = $module->db->query($sql_query);
            while($action = $module->db->fetchByAssoc($actions_results)){
                if(unserialize(base64_decode($action['parameters'])) != false){
                    $action['parameters'] = unserialize(base64_decode($action['parameters']));
                }
                foreach($action['parameters']['email_target_type'] as $key =>  $targetType){
                    if($targetType == "Users" && $action['parameters']['email'][ $key ]['0'] == "role"){
                        $users_roles_query = "SELECT acl_roles_users.user_id FROM acl_roles_users WHERE acl_roles_users.role_id = '{$action['parameters']['email'][ $key ]['2']}' && acl_roles_users.user_id = '{$current_user->id}' && acl_roles_users.deleted = '0'";
                        $users_roles_results = $module->db->query($users_roles_query);
                        $user_id = mysqli_fetch_row($users_roles_results);
                        if($user_id[0] == $current_user->id) {
                            $conditionResult = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);

                            if($conditionResult)
                            {
                                if (!$this->findAccess($view, $action['parameters']['accesslevel'][$key])) {
                                    $result = false;
                                }
                            }
                        }
                    }elseif($targetType == "Users" && $action['parameters']['email'][ $key ]['0'] == "security_group"){
                        $sec_group_query = "SELECT securitygroups_users.user_id FROM securitygroups_users WHERE securitygroups_users.securitygroup_id = '{$action['parameters']['email'][ $key ]['1']}' && securitygroups_users.user_id = '{$current_user->id}' && securitygroups_users.deleted = '0'";
                        $sec_group_results = $module->db->query($sec_group_query);
                        $secgroup = mysqli_fetch_row($sec_group_results);
                        if(!empty($action['parameters']['email'][ $key ]['2'])){
                            $users_roles_query = "SELECT acl_roles_users.user_id FROM acl_roles_users WHERE acl_roles_users.role_id = '{$action['parameters']['email'][ $key ]['2']}' && acl_roles_users.user_id = '{$current_user->id}' && acl_roles_users.deleted = '0'";
                            $users_roles_results = $module->db->query($users_roles_query);
                            $user_id = mysqli_fetch_row($users_roles_results);
                            if($user_id[0] == $current_user->id) {
                                $conditionResult = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);

                                if($conditionResult)
                                {
                                    if (!$this->findAccess($view, $action['parameters']['accesslevel'][$key])) {
                                        $result = false;
                                    }
                                }
                            }
                        }else {
                            if($secgroup[0] == $current_user->id) {
                                $conditionResult = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);

                                if($conditionResult)
                                {
                                    if (!$this->findAccess($view, $action['parameters']['accesslevel'][$key])) {
                                        $result = false;
                                    }
                                }
                            }
                        }
                    }elseif( ($targetType == "Specify User" && $current_user->id ==  $action['parameters']['email'][$key]) ||
                             ($targetType == "Users" && in_array("all", $action['parameters']['email'][$key]) ) )
                    {
                        //we have found a possible record to check against.
                        $conditionResult = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);

                        if($conditionResult)
                        {
                            if (!$this->findAccess($view, $action['parameters']['accesslevel'][$key])) {
                                $result = false;
                            }
                        }

                    }
                }
            }

        }

        $converted_res = '';
        if(isset($result))
        {
            if($result == false)
            {
                $converted_res = 'false';
            }
            elseif($result == true)
            {
                $converted_res = 'true';
            }
        }


        $GLOBALS['log']->fatal('SharedSecurityRules: Exiting CheckRules with result: ' . $converted_res . ' for view: ' . $view . ' and action: ' . $action['parameters']['accesslevel'][$key]);
        return $result;
    }


    private function getParenthesisConditions($originalCondition,$allConditionsResults)
    {
        $GLOBALS['log']->fatal('SharedSecurityRules: Entering getParenthesisConditions()');
        // Just get the conditions we need to check for this
        $allParenthesisConditions = array();

        foreach($allConditionsResults as $condition)
        {
            if($condition['condition_order'] > $originalCondition['condition_order'] && $condition['parenthesis']  != $originalCondition['id'])
            {
                array_push($allParenthesisConditions, $condition);
            }

            if($condition['condition_order'] > $originalCondition['condition_order'] && $condition['parenthesis'] == $originalCondition['id'])
            {
                array_push($allParenthesisConditions, $condition);
                return $allParenthesisConditions;
            }

        }

        $GLOBALS['log']->fatal('SharedSecurityRules: Exiting getParenthesisConditions() with all parenthesis conditions');
        return $allParenthesisConditions;
    }

    /**
     * @param $originalCondition
     * @param $allConditions
     *
     * @return bool
     */
    private function checkParenthesisConditions($allParenthesisConditions, $moduleBean, $rule, $view,$action,$key)
    {

        $GLOBALS['log']->fatal('SharedSecurityRules: Entering checkParenthesisConditions()');

        $conditionsToCheck = array();


        for($j=0; $j<count($allParenthesisConditions); $j++)
        {
            // Check parenthesis is equal to start, if so then start this whole process again
            if($allParenthesisConditions[$j]['parenthesis'] == "START")
            {
                $parenthesisConditionArray = $this->getParenthesisConditions($allParenthesisConditions[$j], $allParenthesisConditions);
                $this->checkParenthesisConditions($parenthesisConditionArray,$moduleBean, $rule, $view,$action,$key);
            }

            // Check parenthesis is blank, if it is then process as normal...
            if($allParenthesisConditions[$j]['parenthesis'] == "")
            {
                // Add to array to be processed once checked
                array_push($conditionsToCheck, $allParenthesisConditions[$j]);

            }
            // Check parenthesis is the condition id (indicates the end of the parenthesis and a success)
         //   if($allParenthesisConditions[$j]['parenthesis'] == $originalCondition['id'])
         //   {
         //       return true;
         //   }

        }

        if(sizeof($conditionsToCheck) > 0)
        {
            // Get results of searching all conditions within the perms (true = condition met)
            $tempResult = $this->getConditionResult($conditionsToCheck, $moduleBean, $rule, $view,$action,$key);
            if(!$tempResult)// && $allParenthesisConditions[$j]['logic_op'] === "AND")
            {
                $GLOBALS['log']->fatal('SharedSecurityRules: Exiting checkParenthesisConditions returning false.');
                return false;
            }
            else {
                $GLOBALS['log']->fatal('SharedSecurityRules: Exiting checkParenthesisConditions returning true.');
                return true;
            }
        }

        $GLOBALS['log']->fatal('SharedSecurityRules: Exiting checkParenthesisConditions with no conditions to check.');
    }

    private function getConditionResult($allConditions,$moduleBean, $rule, $view,$action,$key, $result = false)
    {
        $GLOBALS['log']->fatal('SharedSecurityRules: Entering getConditionResult()');

        //   foreach($allConditions as $condition) {
        for($x = 0; $x < sizeof($allConditions); $x++)
        {
            // Is it the starting parenthesis?
            if ($allConditions[$x]['parenthesis'] == "START") {

                $GLOBALS['log']->fatal('SharedSecurityRules: Parenthesis condition found.');

                $parenthesisConditionArray = $this->getParenthesisConditions($allConditions[$x], $allConditions);
                $overallResult = $this->checkParenthesisConditions($parenthesisConditionArray, $moduleBean, $rule, $view,$action,$key);

                // Retrieve the number of parenthesis conditions so we know how many conditions to skip for next run through
                $x = $x + sizeof($parenthesisConditionArray);

                //Check next logical operator
                $nextOrder = $allConditions[$x]['condition_order'] + 1;
                $nextQuery = "select logic_op from sharedsecurityrulesconditions where sa_shared_sec_rules_id = '{$allConditions[$x]['sa_shared_sec_rules_id']}' and condition_order = $nextOrder and deleted=0";
                $nextResult = $this->db->query($nextQuery, true, "Error retrieving next condition");
                $nextRow = $this->db->fetchByAssoc($nextResult);
                $nextConditionLogicOperator = $nextRow['logic_op'];

                // If the condition is a match then continue if it is an AND and finish if its an OR
                if($overallResult)
                {
                    if($nextConditionLogicOperator === "AND")
                    {
                        $GLOBALS['log']->fatal('SharedSecurityRules: In getConditionResult() within parenthesis setting result to true');
                        $result = true;
                    }
                    else
                    {
                        $GLOBALS['log']->fatal('SharedSecurityRules: In getConditionResult() within parenthesis returning true');
                        return true;
                    }
                }
                else {
                    if($nextConditionLogicOperator === "AND")
                    {
                        $GLOBALS['log']->fatal('SharedSecurityRules: In getConditionResult() within parenthesis returning false');
                        return false;
                    }
                    else
                    {
                        $GLOBALS['log']->fatal('SharedSecurityRules: In getConditionResult() within parenthesis setting result to false');
                        $result = false;
                    }
                }


                continue;
            }

            // Check if there is another condition and get the operator
            $GLOBALS['log']->fatal('SharedSecurityRules: All parenthesis looked at now working out next order number to be processed');
            $nextOrder = $allConditions[$x]['condition_order'] + 1;
            $nextQuery = "select logic_op from sharedsecurityrulesconditions where sa_shared_sec_rules_id = '{$allConditions[$x]['sa_shared_sec_rules_id']}' and condition_order = $nextOrder and deleted=0";
            $nextResult = $this->db->query($nextQuery, true, "Error retrieving next condition");
            $nextRow = $this->db->fetchByAssoc($nextResult);
            $nextConditionLogicOperator = $nextRow['logic_op'];

            if (unserialize(base64_decode($allConditions[$x]['module_path'])) != false) {
                $allConditions[$x]['module_path'] = unserialize(base64_decode($allConditions[$x]['module_path']));
            }
            /*this needs to be uncommented out and checked */

            if ($allConditions[$x]['module_path'][0] != $rule['flow_module']) {
                foreach ($allConditions[$x]['module_path'] as $rel) {
                    if (empty($rel)) {
                        continue;
                    }
                    $moduleBean->load_relationship($rel);
                    $related = $moduleBean->$rel->getBeans();
                }
            }


            if ($related !== false && $related !== null && $related !== "") {
                foreach ($related as $record) {
                    if ($moduleBean->field_defs[$allConditions[$x]['field']]['type'] == "relate") {
                        $allConditions[$x]['field'] = $moduleBean->field_defs[$allConditions[$x]['field']]['id_name'];
                    }
                    if ($allConditions[$x]['value_type'] == "currentUser") {
                        global $current_user;
                        $allConditions[$x]['value_type'] = "Field";
                        $allConditions[$x]['value'] = $current_user->id;

                    }

                    if($allConditions[$x]['field'] == 'assigned_user_name')
                    {
                        $allConditions[$x]['field'] = 'assigned_user_id';
                    }
                    if ($this->checkOperator(
                        $record->{$allConditions[$x]['field']},
                        $allConditions[$x]['value'],
                        $allConditions[$x]['operator']
                    )) {

                        $result = true;

                    }



                    else {
                        if (count($related) <= 1) {
                            $result = false;
                        }
                    }
                }
            }

            else {
                if ($allConditions[$x]['value_type'] == "currentUser") {
                    global $current_user;
                    $allConditions[$x]['value_type'] = "Field";
                    $allConditions[$x]['value'] = $current_user->id;
                }
                //check and see if it is pointed at a field rather than a value.
                if ($allConditions[$x]['value_type'] == "Field" &&
                    isset($moduleBean->{$allConditions[$x]['value']}) &&
                    !empty($moduleBean->{$allConditions[$x]['value']})) {
                    $allConditions[$x]['value'] = $moduleBean->{$allConditions[$x]['value']};
                }

                if($allConditions[$x]['field'] == 'assigned_user_name')
                {
                    $allConditions[$x]['field'] = 'assigned_user_id';
                }

                $conditionResult = $this->checkOperator($moduleBean->{$allConditions[$x]['field']}, $allConditions[$x]['value'], $allConditions[$x]['operator']);

                if ($conditionResult)
                {

                    if($nextConditionLogicOperator === "AND")
                    {
                        $result = true;
                    }
                    else{
                        return true;
                    }

                }
                else {
                    if($rule['run'] == "Once True"){
                        if ($this->checkHistory($moduleBean,$allConditions[$x]['field'], $allConditions[$x]['value']) ) {
                               // if (!$this->findAccess($view, $action['parameters']['accesslevel'][$key])) {
                                      $result = true;
                              //  }
                              //  else{
                              //      $result = true;
                              //  }
                        }
                        else
                        {
                            $result = false;
                        }
                    }
                    else{
                        if( $nextConditionLogicOperator === "AND" ){

                            $result = false;
                            return $result;
                        }
                        $result = false;
                    }
                }


            }
        }

        $converted_res = '';
        if(isset($result))
        {
            if($result == false)
            {
                $converted_res = 'false';
            }
            elseif($result == true)
            {
                $converted_res = 'true';
            }
        }
        $GLOBALS['log']->fatal('SharedSecurityRules: Exiting getConditionResult() with result: ' . $converted_res);
        return $result;
    }

    private function checkConditions($rule, $moduleBean,$view,$action,$key, $result){

        $GLOBALS['log']->fatal('SharedSecurityRules: Entered checkConditions() for rule name: ' . $rule['name']);

        $sql_query = "SELECT * FROM sharedsecurityrulesconditions WHERE sharedsecurityrulesconditions.sa_shared_sec_rules_id = '{$rule['id']}' && sharedsecurityrulesconditions.deleted = '0' ORDER BY sharedsecurityrulesconditions.condition_order ASC ";
        $conditions_results = $moduleBean->db->query($sql_query);

        $allConditions = array();

        // Loop through all conditions and add to array
        while ($condition = $moduleBean->db->fetchByAssoc($conditions_results))
        {
            array_push($allConditions, $condition);
        }


        $result = $this->getConditionResult($allConditions, $moduleBean, $rule,$view,$action,$key, $conditions_results);

        $converted_res = '';
        if(isset($result))
        {
            if($result == false)
            {
                $converted_res = 'false';
            }
            elseif($result == true)
            {
                $converted_res = 'true';
            }
        }
        $GLOBALS['log']->fatal('SharedSecurityRules: Exiting checkConditions() with result: ' . $converted_res . '  ');
        return $result;
    }

    function buildRuleWhere($module)
    {

        global $current_user, $db;
        $where = "";
        $parenthesis = null;
        $sql = "SELECT * FROM sharedsecurityrules WHERE sharedsecurityrules.status = 'Complete' && sharedsecurityrules.flow_module = '{$module->module_dir}'";
        $results = $db->query($sql);
        while (($rule = $module->db->fetchByAssoc($results)) != null) {
            $sql_query = "SELECT * FROM sharedsecurityrulesactions WHERE sharedsecurityrulesactions.sa_shared_security_rules_id = '{$rule['id']}' && sharedsecurityrulesactions.deleted = '0'";
            $actions_results = $module->db->query($sql_query);
            $actionIsUser = false;
            while (($action = $module->db->fetchByAssoc($actions_results)) != null) {
                if (unserialize(base64_decode($action['parameters'])) != false) {
                    $action['parameters'] = unserialize(base64_decode($action['parameters']));
                }
                foreach($action['parameters']['accesslevel'] as $key => $accessLevel){
                        if($accessLevel == 'none') {$targetType = $action['parameters']['email_target_type'][$key];

                        if($targetType == "Users" && $action['parameters']['email'][ $key ]['0'] == "role"){
                            $users_roles_query = "SELECT acl_roles_users.user_id FROM acl_roles_users WHERE acl_roles_users.role_id = '{$action['parameters']['email'][ $key ]['2']}' && acl_roles_users.user_id = '{$current_user->id}' && acl_roles_users.deleted = '0'";
                            $users_roles_results = $module->db->query($users_roles_query);
                            $user_id = mysqli_fetch_row($users_roles_results);
                            if($user_id[0] == $current_user->id) {
                                $actionIsUser =  true;
                            }
                        }elseif($targetType == "Users" && $action['parameters']['email'][ $key ]['0'] == "security_group"){
                            $sec_group_query = "SELECT securitygroups_users.user_id FROM securitygroups_users WHERE securitygroups_users.securitygroup_id = '{$action['parameters']['email'][ $key ]['1']}' && securitygroups_users.user_id = '{$current_user->id}' && securitygroups_users.deleted = '0'";
                            $sec_group_results = $module->db->query($sec_group_query);
                            $secgroup = mysqli_fetch_row($sec_group_results);
                            if(!empty($action['parameters']['email'][ $key ]['2'])){
                                $users_roles_query = "SELECT acl_roles_users.user_id FROM acl_roles_users WHERE acl_roles_users.role_id = '{$action['parameters']['email'][ $key ]['2']}' && acl_roles_users.user_id = '{$current_user->id}' && acl_roles_users.deleted = '0'";
                                $users_roles_results = $module->db->query($users_roles_query);
                                $user_id = mysqli_fetch_row($users_roles_results);
                                if($user_id[0] == $current_user->id) {
                                    $actionIsUser = true;
                                }
                            }else {
                                if($secgroup[0] == $current_user->id) {
                                    $actionIsUser = true;
                                }
                            }
                        }elseif( ($targetType == "Specify User" && $current_user->id ==  $action['parameters']['email'][$key]) ||
                            ($targetType == "Users" && in_array("all", $action['parameters']['email'][$key]) ) ){

                            $actionIsUser = true;
                        }}
                }
            }
            if ($actionIsUser == true) {
                $sql_query = "SELECT * FROM sharedsecurityrulesconditions WHERE sharedsecurityrulesconditions.sa_shared_sec_rules_id = '{$rule['id']}' && sharedsecurityrulesconditions.deleted = '0' ORDER BY sharedsecurityrulesconditions.condition_order ASC ";
                $conditions_results = $module->db->query($sql_query);
                $related = false;
                if ($conditions_results->num_rows != 0) {
                    while ($condition = $module->db->fetchByAssoc($conditions_results)) {
                        if($accessLevel == 'none') {if(unserialize(base64_decode($condition['module_path'])) != false) {
                            $condition['module_path'] = unserialize(base64_decode($condition['module_path']));
                        }

                        if ($condition['module_path'][0] != $rule['flow_module']) {
                            foreach ($condition['module_path'] as $rel) {
                                if (empty($rel)) {
                                    continue;
                                }
                                $module->load_relationship($rel);
                                $related = $module->$rel->getBeans();
                            }
                        }

                        if($related == false) {
                            if ($condition['value_type'] == "Field" &&
                                isset($module->{$condition['value']}) &&
                                !empty($module->{$condition['value']})) {
                                    $condition['value'] = $module->{$condition['value']};
                                }
                            $value = $condition['value'];
                            if($accessLevel == 'none') {
                                $operatorValue = SharedSecurityRules::changeOperator($condition['operator'], $value, true);
                            } else {
                                $operatorValue = SharedSecurityRules::changeOperator($condition['operator'], $value, false);
                            }
                            if($module->field_defs[$condition['field']]['source'] == "custom_fields") {
                                $table = $module->table_name."_cstm";
                            } else {
                                $table = $module->table_name;
                            }
                            $conditionQuery = " " . $table . "." . $condition['field'] . " " . $operatorValue . " ";
                                if ($condition['parenthesis'] == "START") {
                                    if (is_null($parenthesis)) {
                                        $parenthesis = " ( ";
                                        if(empty($where)) {
                                            $where = $parenthesis;
                                        } else {
                                            $where .= $condition['logic_op'] . " " . $parenthesis;
                                        }
                                    } else {
                                        if(empty($where)) {
                                            $where = $parenthesis;
                                        } else {
                                            $where .= $parenthesis;
                                        }
                                    }
                                } elseif ($condition['parenthesis'] != "START" && !empty($condition['parenthesis'])) {
                                    $parenthesis = " ) ";
                                    if(empty($where)) {
                                        $where = $parenthesis;
                                    } else {
                                        $where .= $parenthesis;
                                    }
                                } else {
                                    if(!empty($parenthesis)) {
                                        if ($parenthesis == " ( ") {
                                            $where .= $conditionQuery;
                                            $parenthesis = null;
                                        }
                                    } elseif (empty($where)) {
                                        $where = $conditionQuery;
                                    } else {
                                        $where .= $condition['logic_op'] . " " . $conditionQuery;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $where;
    }
    
    public function checkHistory($module, $field, $value){
        global $db;
        if($module->field_defs[ $field ]['audited'] == true ){
            $value = $db->quote($value);
            $field = $db->quote($field);

            $sql = "SELECT * FROM {$module->table_name}_audit WHERE field_name = '{$field}' AND parent_id = '{$module->id}' AND (before_value_string = '{$value}'
                    OR after_value_string = '{$value}' )";
            $results = $db->getOne($sql);


            if($results !== false){
                return true;
            }
        }
        return false;

    }
    /**
     * @param $rowField
     * @param $field
     * @param $operator
     *
     * @return bool
     */
    private function checkOperator($rowField, $field, $operator){
        $GLOBALS['log']->fatal('SharedSecurityRules: In checkOperator() with row: ' . $rowField . ' field: ' . $field . ' operator: ' . $operator);
        switch ($operator) {
            case "Equal_To":
                if ($rowField == $field) {
                    return true;
                }
                break;
            case "Not_Equal_To":
                if ($rowField !== $field) {
                    return true;
                }
                break;
            case "Starts_With":
                if (substr($rowField, 0, strlen($field)) === $field) {
                    return true;
                }
                break;
            case "Ends_With":
                if (substr($rowField, -strlen($field)) === $field) {
                    return true;
                }
                break;
            case "Contains":
                if (strpos($rowField, $field) !== false) {
                    return true;
                }
                break;

            case "Greater_Than":
                if ($rowField > $field) {
                    return true;
                }
                break;

            case "Less_Than":
                if ($rowField < $field) {
                    return true;
                }
                break;

            case "Greater_Than_or_Equal_To":
                if ($rowField >= $field) {
                    return true;
                }
                break;

            case "Less_Than_or_Equal_To":
                if ($rowField <= $field) {
                    return true;
                }
                break;

            case "is_null":
                if($rowField == null || $rowField == ""){
                    return true;
                }
                break;
        }

        return false;
    }

    public function changeOperator($operator, $value, $reverse){
        switch ($operator) {
            case "Equal_To":
                if($reverse){
                    return " != '".$value."' ";
                }
                return " = '".$value."' ";
            case "Not_Equal_To":
                if($reverse){
                    return " = '".$value."' ";
                }
                return " != '".$value."' ";
            case "Starts_With":
                if($reverse){
                    return " NOT LIKE '".$value."%'";
                }
                return " LIKE '".$value."%'";
            case "Ends_With":
                if($reverse){
                    return " NOT LIKE '%".$value."'";
                }
                return " LIKE '%".$value."'";
            case "Contains":
                if($reverse){
                    return " NOT LIKE '%".$value."%' ";
                }
                return " LIKE '%".$value."%'";
            case "is_null":
                if($reverse){
                    return " IS NOT NULL ";
                }
                return " IS NULL ";
        }
        
        return false;
    }
    
    /**
     * @param $view
     * @param $item
     *
     * @return bool
     */
    private function findAccess($view, $item ){
        if (stripos($item,$view) !== false){
            return true;
        }
        return false;
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

        asort($defs);
        return $defs;
    }
}
