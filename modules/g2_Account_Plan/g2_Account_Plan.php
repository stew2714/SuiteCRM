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


class g2_Account_Plan extends Basic
{
    public $new_schema = true;
    public $module_dir = 'g2_Account_Plan';
    public $object_name = 'g2_Account_Plan';
    public $table_name = 'g2_account_plan';
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
    public $lastactivitydate_c;
    public $sf_id_c;
    public $action_plan_update_date_c;
    public $are_they_a_good_fit_mmodal_c;
    public $bed_count_c;
    public $bundle_target_c;
    public $cdi_strategy_c;
    public $cawyt_c;
    public $competition_c;
    public $current_action_plan_c;
    public $fes_adoption_c;
    public $financial_objective_c;
    public $financial_outlook_c;
    public $mtso_1_cost_c;
    public $mtso_2_est_cost_c;
    public $mtso_3_est_cost_c;
    public $mgr_notes_update_date_c;
    public $manager_notes_c;
    public $organizational_win_result_c;
    public $product_targets_c;
    public $red_flags_c;
    public $sales_objective_c;
    public $state_c;
    public $strategy_update_date_c;
    public $strengths_c;
    public $tos_saturation_c;
    public $talking_points_c;
    public $total_est_tos_cost_c;
    public $zba_sss_c;
    public $est_annual_mm_tos_rev_c;
    public $total_tos_opp_size_c;
    public $user_id_c;
    public $cdi_sponsor_c;
    public $user_id1_c;
    public $fes_sponsor_c;
    public $account_id_c;
    public $primary_mtso_c;
    public $account_id1_c;
    public $mtso_2_c;
    public $account_id2_c;
    public $mtso_3_c;
    public $nuance_disposition_c;
    public $ehr_adoption_c;
    public $fes_c;
    public $fes_satisfaction_c;
    public $ehr_status_c;
    public $committed_to_naunce_c;
    public $nuance_enterprise_license_c;
    public $nuance_term_or_perpetual_c;
    public $adequacy_of_current_position_c;
    public $preferred_buying_model_c;
    public $ehr_c;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
}