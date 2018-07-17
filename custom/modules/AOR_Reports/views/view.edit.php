<?php
/**
 *
 *
 * @package
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

require_once('modules/AOR_Reports/views/view.edit.php');
require_once('custom/modules/AOR_Reports/AdvancedReporter.php');

class customAOR_ReportsViewEdit extends AOR_ReportsViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }

    function display()
    {
        global $app_list_strings;
        global $current_user;
        $security_group = new SecurityGroup();
        $groups = $security_group->getUserSecurityGroups($current_user->id);
        $group_ids = array();
        $redirect_flags = array();

        // Build the string for the query out of the associated security groups
        foreach ($groups as $key => $value) {
            $group_ids[] = $key;
        }

        // See what permissions fail
        if ($this->bean->private_report_checkbox == '1') {
            if (is_admin($current_user)) {
                $redirect_flags['admin'] = true;
            } else {
                $redirect_flags['admin'] = false;
            }

            if ($current_user->id !== $this->bean->assigned_user_id) {
                $redirect_flag['assigned_user'] = false;
            } else {
                $redirect_flags['assigned_user'] = true;
            }

            if (!in_array($this->bean->private_group_list,$group_ids)) {
                $redirect_flags['private_group'] = false;
            } else {
                $redirect_flags['private_group'] = true;
            }

            if ($current_user->id !== $this->bean->private_user_list) {
                $redirect_flags['private_user'] = false;
            } else {
                $redirect_flags['private_user'] = true;
            }
        }

        $this->redirectFlags($redirect_flags);

        // Fetch the bean to return all Users
        $user = BeanFactory::getBean("Users");
        $userList = $user->get_full_list();
        $users = array();

        // Fetch the bean to return all User Groups (Security Groups)
        $group = BeanFactory::getBean("SecurityGroups");
        $groupsList = $group->get_full_list();
        $groups = array();

        $app_list_strings['report_private_users'][''] = '';
        $app_list_strings['report_private_groups'][''] = '';

        // Filter through the returned users and sort them into a manageable array
        foreach ($userList as $user) {
            $app_list_strings['report_private_users'][$user->id] = $user->name;
        }

        // Filter through the returned groups and sort them into a manageable array
        foreach ($groupsList as $group) {
            $app_list_strings['report_private_groups'][$group->id] = $group->name;
        }

        parent::display();

        if(!empty($this->bean->id) ){
            $preview = new AdvancedReporter($this->bean);
            $reportHTML = '<div id="preview">' . $preview->buildMultiGroupReport('-2',null, true) . '</div>';
        }else{
            $reportHTML = '<div id="preview"></div>';
        }
        echo $reportHTML;
    }

    // Redirection script
    function redirectFlags($flags) {
        if ($flags['admin'] === false) {
            if ($flags['assigned_user'] === false) {
                if ($this->bean->private_to_user_or_group == 'private_group' && $flags['private_group'] === false) {
                    header('Location: index.php?module=AOR_Reports&action=index');
                    exit();
                } elseif ($this->bean->private_to_user_or_group == 'private_user' && $flags['private_user'] === false) {
                    header('Location: index.php?module=AOR_Reports&action=index');
                    exit();
                } elseif (empty($this->bean->private_to_user_or_group)) {
                    header('Location: index.php?module=AOR_Reports&action=index');
                    exit();
                } else {
                    return true;
                }
            } else {
                return true;
            }
        } else {
            return true;
        }
    }
}