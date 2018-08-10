<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 ********************************************************************************/


require_once('modules/Calendar/Calendar.php');
require_once('custom/modules/Calendar/CalendarActivity.php');


class CustomCalendar extends Calendar{


		
	/**
	 * constructor
	 * @param string $view 
	 * @param array $time_arr
	 * @param array $views
	 */	
	function __construct($view = "agendaWeek", $time_arr = array()){
		parent::__construct($view,$time_arr );
	}

	public function add_activities($user,$type='sugar'){
		global $timedate;
		$start_date_time = $this->date_time;
		if($this->view == 'agendaWeek' || $this->view == 'sharedWeek'){
			$start_date_time = CalendarUtils::get_first_day_of_week($this->date_time);
			$end_date_time = $start_date_time->get("+7 days");
		}else if($this->view == 'month' || $this->view == "sharedMonth"){
			$start_date_time = $this->date_time->get_day_by_index_this_month(0);	
			$end_date_time = $start_date_time->get("+".$start_date_time->format('t')." days");
			$start_date_time = CalendarUtils::get_first_day_of_week($start_date_time);
			$end_date_time = CalendarUtils::get_first_day_of_week($end_date_time)->get("+7 days");
		}else{
			$end_date_time = $this->date_time->get("+1 day");
		}
		
		$start_date_time = $start_date_time->get("-5 days"); // 5 days step back to fetch multi-day activities that

		$acts_arr = array();
	    	if($type == 'vfb')
	    	{
				$acts_arr = CalendarActivity::get_freebusy_activities($user, $start_date_time, $end_date_time);
	    	}
	    	else
	    	{
				$acts_arr = CustomCalendarActivity::get_activities($this->activityList, $user->id, $this->show_tasks,
															  $start_date_time, $end_date_time, $this->view, $this->show_calls, $this->show_completed);
	    	}

	    	//$this->acts_arr[$user->id] = $acts_arr;
	    	$this->acts_arr[$user->id] = $acts_arr;
	}
}