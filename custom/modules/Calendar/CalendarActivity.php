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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('modules/Calendar/CalendarDisplay.php');
require_once 'include/utils/activity_utils.php';

class CustomCalendarActivity extends CalendarActivity
{
    public $sugar_bean;
    public $start_time;
    public $end_time;

    /**
     * CalendarActivity constructor.
     * @param $args
     */
    public function __construct($args)
    {
        parent::__construct($args);
    }

    /**
     * Get array of activities
     * @param array $activities
     * @param string $user_id
     * @param boolean $show_tasks
     * @param SugarDateTime $view_start_time start date
     * @param SugarDateTime $view_end_time end date
     * @param string $view view; not used for now, left for compatibility
     * @param boolean $show_calls
     * @param boolean $show_completed use to allow filtering completed events
     * @return array
     */
    public static function get_activities(
        $activities,
        $user_id,
        $show_tasks,
        $view_start_time,
        $view_end_time,
        $view,
        $show_calls = true,
        $show_completed = true
    ) {

        global $current_user;
        global $beanList;

        $HideNotHeld = true;
        
        $act_list = array();
        $seen_ids = array();

        $completedCalls = '';
        $completedMeetings = '';
        $completedTasks = '';
        if (!$show_completed) {
            $completedCalls = " AND calls.status = 'Planned' ";
            $completedMeetings = " AND meetings.status = 'Planned' ";
            $completedTasks = " AND tasks.status != 'Completed' ";
        }

        if($HideNotHeld == true){
            $completedMeetings .= " AND meetings.status != 'Not Held'";
        }

        foreach ($activities as $key => $activity) {

            if (ACLController::checkAccess($key, 'list', true)) {
                /* END - SECURITY GROUPS */
                $class = $beanList[$key];
                $bean = new $class();

                if ($current_user->id === $user_id) {
                    $bean->disable_row_level_security = true;
                }

                $where = self::get_occurs_until_where_clause($bean->table_name,
                    isset($bean->rel_users_table) ? $bean->rel_users_table : null, $view_start_time, $view_end_time,
                    $activity['start'], $activity['end']);

                if ($key === 'Meetings') {
                    $where .= $completedMeetings;
                } elseif ($key === 'Calls') {
                    $where .= $completedCalls;
                    if (!$show_calls) {
                        continue;
                    }
                } elseif ($key === 'Tasks') {
                    $where .= $completedTasks;
                    if (!$show_tasks) {
                        continue;
                    }
                }

                $focus_list = build_related_list_by_user_id($bean, $user_id, $where);
                require_once 'modules/SecurityGroups/SecurityGroup.php';
                foreach ($focus_list as $focusBean) {
                    if (isset($seen_ids[$focusBean->id])) {
                        continue;
                    }

					/* BEGIN - SECURITY GROUPS */
					//Show as busy if current user is not in a group associated to the record
					require_once("modules/SecurityGroups/SecurityGroup.php");
					$in_group = SecurityGroup::groupHasAccess($key,$focusBean->id,'list');
					$show_as_busy = !(ACLController::checkAccess($key, 'list', $current_user->id == $user_id,'module', $in_group));
					$focusBean->show_as_busy = $show_as_busy;
					/* END - SECURITY GROUPS */

                    $seen_ids[$focusBean->id] = 1;
                    $act = new CalendarActivity($focusBean);

                    if (!empty($act)) {
                        $act_list[] = $act;
                    }
                }
            }
        }

        return $act_list;
    }
}
