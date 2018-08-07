<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

include_once __DIR__ . '/../../../include/utils.php';

class UsersLogicHookImplementation
{
	function afterSave($bean, $event, $arguments){
		$this->addToDefaultUserRole($bean, $event, $arguments);
	}
	
	function afterLogin($bean, $event, $arguments){
		$this->loginTracking($bean, $event, $arguments);
	}
	
	function loginTracking($bean, $event, $arguments){
		global $timedate;
		$login_date_time = $timedate->getInstance()->nowDb();
		
		$login_tracker = new lt_login_tracker();
		$login_tracker->name = "Login Tracker";
		$login_tracker->user_id_c = $bean->id;
		$login_tracker->login_date_time = $login_date_time;
		$login_tracker->assigned_user_id = "1";
		$login_tracker->save();
	}
	
	public function addToDefaultUserRole($bean, $event, $arguments) 
    {
        // Only execute on new User record creation
        if (empty($bean->fetched_row['id']) && $bean->is_admin == 0){
            // Fetch the default role
			$role_name = "Disable Login Tracker";
            $role = new ACLRole();
			$role->retrieve_by_string_fields(array('name' => $role_name));
            
            // Check if the user is already a member of the default role
            $in_role = $bean->check_role_membership($role->name);
            if (!$in_role) {
                // Add user to role, if he/she is not already a member
                $role->set_relationship(
                    'acl_roles_users', 
                    array('role_id' => $role->id, 'user_id' => $bean->id), 
                    false
                );
            }
        }
    }

    public function beforeSave($bean, $event, $arguments)
    {
        if (isset($_REQUEST['module']) && $_REQUEST['modules'] == "Users" && isset($_REQUEST['action']) && $_REQUEST['action'] == "EditView") {
            if (isset($bean->email_password_c) && $bean->email_password_c != "") {
                $bean->email_password_c = $bean->encrpyt_before_save($bean->email_password_c);

                LoggerManager::getLogger()->info("Encryped: $bean->email_password_c\n");
            }
        }
    }

    public function afterRetrieval($bean, $event, $arguments)
    {
        if (isset($_REQUEST['module']) && $_REQUEST['modules'] == "Users" && isset($_REQUEST['action']) && $_REQUEST['action'] == "EditView") {
            if (isset($bean->email_password_c) && $bean->email_password_c != "") {
                $bean->email_password_c = $bean->decrypt_after_retrieve($bean->email_password_c);
            }
        }
    }
}

?>