<?php

require_once('include/MVC/View/views/view.list.php');
require_once('modules/Accounts/AccountsListViewSmarty.php');

class sa_Fluency_OneViewList extends ViewList
{
    public function preDisplay()
    {
        global $current_user;

        // Build where conditions if the user is not an Administrator Account
        if (!is_admin($current_user)) {
            // Return the security group id's this user belongs to.
            $security_group = new SecurityGroup();
            $groups = $security_group->getUserSecurityGroups($current_user->id);
            $group_ids = "";
            $x = 0;

            // Build the string for the query out of the associated security groups
            foreach ($groups as $key => $value) {
                if (($x + 1) !== count($groups)) {
                    $group_ids .= "'" . $key . "',";
                } else {
                    $group_ids .= "'" . $key . "'";
                }

                $x++;
            }

            // Make an empty list to give to the IN statement so results are still returned.
            if (empty($group_ids)) {
                $group_ids = "''";
            }

            $this->where .= "(sa_fluency_one.assigned_user_id = '$current_user->id') OR ";
            $this->where .= "(sa_fluency_one.requested_user_id = '$current_user->id') OR ";
            $this->where .= "(sa_fluency_one.assigned_security_group_id IN ($group_ids))";
        }

        parent::preDisplay();
    }
}
