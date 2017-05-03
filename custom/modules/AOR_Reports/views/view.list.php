
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

require_once('include/MVC/View/views/view.list.php');
require_once('modules/Accounts/AccountsListViewSmarty.php');

class customAOR_ReportsViewList extends ViewList
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

            $this->where = "(aor_reports.private_report_checkbox = '0') OR ";
            $this->where .= "(aor_reports.assigned_user_id = $current_user->id) OR ";
            $this->where .= "(aor_reports.private_report_checkbox = '1' AND aor_reports.private_to_user_or_group = 'private_user' AND aor_reports.private_user_list =  $current_user->id) OR ";
            $this->where .= "(aor_reports.private_group_list IN ($group_ids))";
        }

        parent::preDisplay();
    }
}