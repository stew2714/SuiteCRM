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


class LayoutRules extends Basic
{
    public $new_schema = true;
    public $module_dir = 'LayoutRules';
    public $object_name = 'LayoutRules';
    public $table_name = 'layoutrules';
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
    public $securitygroup;
    public $securitygroup_display;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $additionalusers;

    public function __construct($init=true){
        global $app_list_strings;
        parent::__construct();
        if($init) {
            $this->load_flow_beans();
            $this->loadGroups();
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

        $app_list_strings['lr_moduleList'] = $app_list_strings['moduleList'];

        if(!empty($app_list_strings['lr_moduleList'])){
            foreach($app_list_strings['lr_moduleList'] as $mkey => $mvalue){
                if(!isset($beanList[$mkey]) || str_begin($mkey, 'AOW_')){
                    unset($app_list_strings['lr_moduleList'][$mkey]);
                }
            }
        }

        $app_list_strings['lr_moduleList'] = array_merge((array)array(''=>''), (array)$app_list_strings['lr_moduleList']);

        asort($app_list_strings['lr_moduleList']);
    }



    function loadGroups(){
        global $beanList, $app_list_strings;

        $app_list_strings['group_list'] = array("all" => "All");

        $bean = BeanFactory::getBean("SecurityGroups");
        $ssList = $bean->get_full_list();
        foreach($ssList as $group){
            $app_list_strings['group_list'][ $group->id ] = $group->name;
        }
        asort($app_list_strings['group_list']);
    }

    function save($check_notify = FALSE){
        if (empty($this->id)){
            unset($_POST['layout_rules_id']);
        }

        parent::save($check_notify);

        require_once('modules/LayoutConditions/LayoutConditions.php');
        $condition = new LayoutConditions();
        $condition->save_lines($_POST, $this, 'aow_conditions_');
    }
    function fetchLayout($bean, $metadata, $action){
        global $current_user;
        $sgroups = BeanFactory::getBean("SecurityGroups");
        $groups = $sgroups->getUserSecurityGroups($current_user->id);

        $metadataArray['file'] = $metadata;
        $metadataArray['id'] = '';
        $layouts =
            BeanFactory::getBean("LayoutRules")->get_full_list(
                "",
                "layoutrules.status = 'Active' AND layoutrules.flow_module = '{$bean->module_name}'"
            );
        if(count($layouts) > 0){
            foreach($layouts as $layout){
                if( (key_exists($layout->group_to_assign, $groups) || $layout->group_to_assign == "all") &&
                    $this->checkConditions($layout, $bean) == true){
                    if($layout->layout_to_show == "default"){
                        $metadataArray['file'] = "custom/modules/{$bean->module_dir}/metadata/{$action}.php";
                    }else{
                        $metadataArray['file'] = "custom/modules/{$bean->module_dir}/metadata/{$layout->layout_to_show}/{$action}.php";
                    }
                    $metadataArray['id'] = $layout->layout_to_show;
                }
            }

        }

        return $metadataArray;
    }
    function checkConditions($layout, $bean){
        global $current_user;


        $rel = "layout_conditions";
        $result = false;
        if($layout->load_relationship($rel)) {
            $layoutConditions = $layout->{$rel}->getBeans();
            if(count($layoutConditions) > 0) {
                foreach ($layoutConditions as $condition) {
                    switch ($condition->operator) {
                        case "Equal_To":
                            if ($condition->value_type == "Field") {
                                $condition->value = $bean->{$condition->value};
                            }
                            if ($condition->value == $bean->{$condition->field}) {
                                $result = true;
                            } else {
                                return false;
                            }
                            break;
                    }
                }
            }else{
                return true;
            }
        }
        return $result;
    }
	
}