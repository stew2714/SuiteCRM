<?php

function getUserSecurityGroups(){

    static $userSecurityGroups = null;
    if(!$userSecurityGroups){

        $userSecurityGroups = array();
        $userSecurityGroups[''] = '';

        global $current_user;

        require_once('modules/SecurityGroups/SecurityGroup.php');
        
        if(is_admin($current_user)) {
            $user_groups = SecurityGroup::getAllSecurityGroups();
            foreach($user_groups as $id => $data) {
                $userSecurityGroups[$id] = $data['name'];
            }
        } else {
            $user_groups = SecurityGroup::getUserSecurityGroups($current_user->id);
            foreach($user_groups as $id => $data) {
                $userSecurityGroups[$id] = $data['name'];
            }
        }

    }
    
    return $userSecurityGroups;
}

function getRecordSecurityGroups($bean_id = null)
{
    $formatted_groups = '';

    if(empty($bean_id) || empty($GLOBALS['module']))
    {
        return $formatted_groups;
    }
    if(is_subclass_of($bean_id, 'SugarBean'))
    {
        return $formatted_groups; //detail/edit view calls this function twice. 1st passes SugarBean obj. 2nd passes just the id
    }
    if(is_array($bean_id))
    {
        $bean_id = $bean_id['ID'];
    }
    $bean = BeanFactory::getBean($GLOBALS['module'],$bean_id);

    require_once('modules/SecurityGroups/SecurityGroup.php');

    $groups = SecurityGroup::getRecordGroups($bean);

    if(!empty($groups))
    {
        //format into a list if multiple groups
        if(count($groups) == 1)
        {
            $group = array_shift($groups);
            $formatted_groups = $group->name;
        }
        else
        {
            $formatted_groups = '<ul style="margin-left: 4px; padding-left: 4px;">';
            foreach($groups as $group)
            {
                $formatted_groups .= '<li style="list-style-type: disc;">'.$group->name.'</li>';
            }
            $formatted_groups .= '</ul>';
        }
    }

    return $formatted_groups;
}

/* BEGIN - SECURITY GROUPS - additional-users */ 
function getAdditionalUsers($bean = null, $field = null, $value = null, $displayType = null, $tabindex = null)
{
    require_once('modules/SecurityGroups/SecurityGroupAdditionalUser.php');
    $additionalusers = SecurityGroupAdditionalUser::getAdditionalUsers($bean->module_dir,$bean->id);

    $ss = new Sugar_Smarty();
    $ss->left_delimiter = '{{';
    $ss->right_delimiter = '}}';
    $ss->assign('additionalusers', $additionalusers);
    $ss->assign('module', $bean->module_dir);
    $ss->assign('form_name', $displayType);

    if($displayType == 'DetailView' || $displayType == 'ListView' || $displayType == 'PopupView')
    {
        return $ss->fetch('custom/include/SugarFields/Fields/Additionalusers/DetailView.tpl');
    }
    else if($displayType == 'EditView')
    {
        return $ss->fetch('custom/include/SugarFields/Fields/Additionalusers/EditView.tpl');
    }
    else
    {
        //SearchView
        return '';
    }
}
/* END - SECURITY GROUPS - additional-users */  
