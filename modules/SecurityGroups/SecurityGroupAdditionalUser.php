<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('data/SugarBean.php');

class SecurityGroupAdditionalUser extends SugarBean {
    var $table_name = "securitygroups_additionalusers";
    var $object_name = "SecurityGroupAdditionalUser";
    var $column_fields = Array(
        'id'
        ,'user_id'
        ,'record_id'
        ,'module'
        ,'date_modified'
        ,'modified_user_id'
        ,'created_by'
        ,'deleted'
        );

    var $new_schema = true;

    var $field_defs = array (
        'id'=>array('name' =>'id', 'type' =>'char', 'len'=>'36', 'default'=>'')
        , 'user_id'=>array('name' =>'user_id', 'type' =>'char', 'len'=>'36',)
        , 'record_id'=>array('name' =>'record_id', 'type' =>'char', 'len'=>'36', )
        , 'module'=>array('name' =>'module', 'type' =>'varchar', 'len'=>'255')
        , 'date_modified'=>array ('name' => 'date_modified','type' => 'datetime')
        , 'modified_user_id'=>array('name' =>'modified_user_id', 'type' =>'char', 'len'=>'36', )
        , 'created_by'=>array('name' =>'created_by', 'type' =>'char', 'len'=>'36', )
        , 'deleted'=>array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>true)
    );
    function SecurityGroupAdditionalUser()
    {
        $this->db = DBManagerFactory::getInstance();
        $this->dbManager = DBManagerFactory::getInstance();

        $this->disable_row_level_security =true;
    }

    //returns array of users for a given record
    public static function getAdditionalUsers($module,$record)
    {
        $additional_users = array();

        if(empty($module) || empty($record))
        {
            return $additional_users;
        }
        global $db;
        $query = "select securitygroups_additionalusers.id, securitygroups_additionalusers.user_id, users.first_name, users.last_name "
                ."from securitygroups_additionalusers "
                ."inner join users on securitygroups_additionalusers.user_id = users.id and users.deleted = 0 "
                ."where securitygroups_additionalusers.record_id = '".$db->quote($record)."' "
                ." and securitygroups_additionalusers.module = '".$db->quote($module)."' "
                ." and securitygroups_additionalusers.deleted = 0 ";
        $result = $db->query($query);
        while(($row=$db->fetchByAssoc($result)) != null) {
            $additional_users[] = array(
                'id' => $row['id'],
                'user_id' => $row['user_id'],
                'name' => $row['first_name'].' '.$row['last_name'],
            );
        }

        return $additional_users;
    }

    public static function getAdditionalUsersObjects($module,$record,$additional_users=array())
    {
        if(empty($module) || empty($record))
        {
            return $additional_users;
        }
        global $db;
        $query = "select distinct securitygroups_additionalusers.user_id "
                ."from securitygroups_additionalusers "
                ."inner join users on securitygroups_additionalusers.user_id = users.id and users.deleted = 0 "
                ."where securitygroups_additionalusers.record_id = '".$db->quote($record)."' "
                ." and securitygroups_additionalusers.module = '".$db->quote($module)."' "
                ." and securitygroups_additionalusers.deleted = 0 ";
        $result = $db->query($query);
        while(($row=$db->fetchByAssoc($result)) != null) {
            $additional_users[] = array(
                'id' => $row['id'],
                'user_id' => $row['user_id'],
                'name' => $row['first_name'].' '.$row['last_name'],
            );
            $user = BeanFactory::getBean('Users',$row['user_id']);
            if(!empty($user->id))
            {
                $additional_users[] = $user;
            }
        }

        return $additional_users;
    }

    public static function isAdditionalOwner($bean,$user_id)
    {
        if(empty($bean) || empty($user_id))
        {
            return false;
        }

        require_once('modules/SecurityGroups/SecurityGroup.php');
        $current_plan = SecurityGroup::get_current_plan();
        if (empty($current_plan) || $current_plan != 'enterprise')
        {
            return false;
        }

        global $db;
        $query = "select id "
                ."from securitygroups_additionalusers "
                ."where user_id ='".$db->quote($user_id)."' "
                ." and record_id = '".$db->quote($bean->id)."' "
                ." and module = '".$db->quote($bean->module_dir)."' "
                ." and deleted = 0 ";
        $result = $db->query($query);
        if(($row=$db->fetchByAssoc($result)) != null) {
            return true;
        }
        return false;
    }

    public static function getAdditionalOwnerWhere($bean,$user_id,$where,$table_name)
    {
        if(empty($bean) || empty($user_id) || empty($table_name))
        {
            return $where;
        }

        require_once('modules/SecurityGroups/SecurityGroup.php');
        $current_plan = SecurityGroup::get_current_plan();
        if (empty($current_plan) || $current_plan != 'enterprise')
        {
            return $where;
        }

        global $db;
        return "(".$where." or "
                ." exists(select id from securitygroups_additionalusers where user_id ='".$db->quote($user_id)."' "
                ." and record_id = ".$table_name.".id "
                ." and module = '".$db->quote($bean->module_dir)."' "
                ." and deleted = 0)) ";

    }

    public static function getMyItems($bean,$where)
    {
        if(empty($bean) || empty($where))
        {
            return $where;
        }

        require_once('modules/SecurityGroups/SecurityGroup.php');
        $current_plan = SecurityGroup::get_current_plan();
        if (empty($current_plan) || $current_plan != 'enterprise')
        {
            return $where;
        }

        global $db, $current_user;
        return "(".$where." or "
                ." exists(select id from securitygroups_additionalusers where user_id ='".$db->quote($current_user->id)."' "
                ." and record_id = ".$bean->table_name.".id "
                ." and module = '".$db->quote($bean->module_dir)."' "
                ." and deleted = 0)) ";
    }

}
