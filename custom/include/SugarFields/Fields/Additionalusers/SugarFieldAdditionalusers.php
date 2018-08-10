<?php

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldAdditionalusers extends SugarFieldBase
{

	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
	{
	    global $app_strings;

		$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);

        return $this->fetch('custom/include/SugarFields/Fields/Additionalusers/DetailView.tpl');
    }

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
    {
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);

        return $this->fetch('custom/include/SugarFields/Fields/Additionalusers/EditView.tpl');
    }

	function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
	{
		$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
		return $this->fetch('custom/include/SugarFields/Fields/Additionalusers/SearchView.tpl');
	}

	public function save($bean, $params, $field, $properties, $prefix = '')
	{
		global $db, $module;

		require_once('modules/SecurityGroups/SecurityGroupAdditionalUser.php');

        if(empty($bean->id))
        {
        	$bean->new_with_id = true;
            $bean->id = create_guid();
        }

    	$param_start = $params['module'].'additionalUser';

        $sendNotifications = false;
		require_once('modules/SecurityGroups/SecurityGroup.php');
        $current_plan = SecurityGroup::get_current_plan();
        if (!empty($current_plan) && $current_plan == 'enterprise')
        {
	    	//set up notification stuff
	        $admin = new Administration();
	        $admin->retrieveSettings();

	        if ($admin->settings['notify_on'])
	        {
	            $GLOBALS['log']->info("Notifications: additional user assignment has changed, checking if user receives notifications");
	            $sendNotifications = true;
	        }
	        elseif(isset($_REQUEST['send_invites']) && $_REQUEST['send_invites'] == 1)
	        {
	            // cn: bug 5795 Send Invites failing for Contacts
	            $sendNotifications = true;
	        }
	        else
	        {
	            $GLOBALS['log']->info("Notifications: not sending e-mail, notify_on is set to OFF");
	        }
        }

    	//this may cause a second notification to send if a user is removed and then readded on a new line
    	//if that needs to be solved then track the original user ids on EditView.tpl and stash here to look up

		foreach ($params as $key => $val)
		{
			if (strpos($key,$param_start.'_record_') === 0)
			{
				$field_index = str_replace($param_start.'_record_','',$key);

				$add_bean = new SecurityGroupAdditionalUser();
				if(!empty($params[$param_start.'_record_'.$field_index]))
				{
					$add_bean->retrieve($params[$param_start.'_record_'.$field_index]);
				}

				if(!empty($params[$param_start.'_delete_'.$field_index]) || empty($params[$param_start.'_'.$field_index]))
				{
					if(!empty($add_bean->id))
					{
						$add_bean->mark_deleted($add_bean->id);
					}
					continue;
				}

				if(!empty($params[$param_start.'_hidden_'.$field_index]) && !empty($params[$param_start.'_'.$field_index]))
				{
                    $add_bean->module = $params['module'];
					$add_bean->module_dir = $params['module'];
					$add_bean->record_id = $bean->id;
					$add_bean->user_id = $params[$param_start.'_hidden_'.$field_index];
					$add_bean->save(false);

					//notify users
		            if($sendNotifications == true)
		            {
						$notify_user = new User();
						$notify_user->retrieve($add_bean->user_id);
						$bean->new_assigned_user_name = $notify_user->full_name;
		                $bean->send_assignment_notifications($notify_user, $admin);
		            }
				}
			}
		}
    }
}
