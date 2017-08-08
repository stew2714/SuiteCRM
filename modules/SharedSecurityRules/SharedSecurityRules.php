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
        $condition->save_lines($_POST, $this, 'shared_rules_conditions_');

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
        $moduleBean = clone $module;
        //$moduleBean->retrieve($module->id);
        if(empty($moduleBean->id) || $moduleBean->id == "[SELECT_ID_LIST]"){
            return true;
        }
        global $current_user;
        $bean = BeanFactory::getBean("SharedSecurityRules");
        $results = $bean->get_full_list("", "sharedsecurityrules.status = 'Active' && sharedsecurityrules.flow_module = '{$module->module_name}'");
        $result = true;
        foreach($results as $rule){
            $rel = "sharedsecurityrulesactions";
            $rule->load_relationship($rel);
            $actions = $rule->{$rel}->getBeans();
            foreach($actions as $action){
                if(unserialize(base64_decode($action->parameters)) != false){
                    $action->parameters = unserialize(base64_decode($action->parameters));
                }
                $result = true;
                foreach($action->parameters['email_target_type'] as $key =>  $targetType){
                    if($targetType == "Users" && $action->parameters['email'][ $key ]['0'] == "role"){
                        $role = BeanFactory::getBean("ACLRoles", $action->parameters['email'][ $key ]['2'] );
                        if($role->load_relationship("users")){
                            $userList = $role->users->getBeans();
                            if(key_exists($current_user->id, $userList)){
                                $result = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);
                            }else{
                                return true;
                            }
                        }
                    }elseif($targetType == "Users" && $action->parameters['email'][ $key ]['0'] == "security_group"){
                        $secGroups = BeanFactory::getBean("SecurityGroups", $action->parameters['email'][ $key ]['1'] );
                        if(!empty($action->parameters['email'][ $key ]['2'])){
                            $role = BeanFactory::getBean("ACLRoles", $action->parameters['email'][ $key ]['2'] );
                            if($role->load_relationship("users")){
                                $userList = $role->users->getBeans();
                                if(key_exists($current_user->id, $userList)){
                                    $result = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);
                                }else{
                                    return true;
                                }
                            }
                        }else {
                            if ($secGroups->load_relationship("users")) {
                                $userList = $secGroups->users->getBeans();
                                if (key_exists($current_user->id, $userList)) {
                                    $result = $this->checkConditions($rule, $moduleBean, $view, $action, $key, $result);
                                } else {
                                    return true;
                                }
                            }
                        }
                    }elseif( ($targetType == "Specify User" && $current_user->id ==  $action->parameters['email'][$key]) ||
                        ($targetType == "Users" && in_array("all", $action->parameters['email'][$key]) ) )
                    {
                        //we have found a possible record to check against.
                        $result = $this->checkConditions($rule, $moduleBean,$view,$action,$key, $result);
                    }
                }

            }
        }
        return $result;
    }

    /**
     * @param $rule
     * @param $moduleBean
     * @param $view
     * @param $action
     * @param $key
     * @param bool $result
     *
     * @return bool
     */
    private function checkConditions($rule, $moduleBean,$view,$action,$key,  $result = true){
        $rel = "sharedsecurityrulesconditions";
        $rule->load_relationship($rel);
        $conditions = $rule->{$rel}->getBeans();
        if(count($conditions) != 0) {
            foreach ($conditions as $condition) {
                if ($condition->value_type == "Field" &&
                    isset($moduleBean->{$condition->value}) &&
                    !empty($moduleBean->{$condition->value})) {
                    $condition->value = $moduleBean->{$condition->value};
                }
                if ($this->checkOperator(
                    $moduleBean->{$condition->field},
                    $condition->value,
                    $condition->operator
                )) {
                    if (!$this->findAccess($view, $action->parameters['accesslevel'][$key])) {
                        $result = false;
                    }
                } else {
                    return true;
                }
            }
        }elseif (!$this->findAccess($view, $action->parameters['accesslevel'][$key])) {
            $result = false;
        }
        return $result;
    }

    /**
     * @param $rowField
     * @param $field
     * @param $operator
     *
     * @return bool
     */
    private function checkOperator($rowField, $field, $operator){
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
             case "is_null":
                 if($rowField == null || $rowField == ""){
                    return true;
                 }
                 break;
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
}
