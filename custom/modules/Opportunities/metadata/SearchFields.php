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


$searchFields['Opportunities'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'account_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'accounts.name',
    ),
  ),
  'amount' => 
  array (
    'query_type' => 'default',
  ),
  'next_step' => 
  array (
    'query_type' => 'default',
  ),
  'probability' => 
  array (
    'query_type' => 'default',
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'opportunity_type' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'opportunity_type_dom',
    'template_var' => 'TYPE_OPTIONS',
  ),
  'sales_stage' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'sales_stage_dom',
    'template_var' => 'SALES_STAGE_OPTIONS',
    'options_add_blank' => true,
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'open_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'sales_stage',
    ),
    'operator' => 'not in',
    'closed_values' => 
    array (
      0 => 'Closed Won',
      1 => 'Closed Lost',
    ),
    'type' => 'bool',
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'checked_only' => true,
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Opportunities\'
			                        and favorites.assigned_user_id = \'{1}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'recordtypeid_c' => 
  array (
    'query_type' => 'default',
  ),
  'confidence_level_c' => 
  array (
    'query_type' => 'default',
  ),
  'sales_leadership_c' => 
  array (
    'query_type' => 'default',
  ),
  'bankruptcy_hold1_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_status_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_validation_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_implementation_training_pro_serv_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_speech_mics_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_annual_prod_subscription_fee_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_volume_c' => 
  array (
    'query_type' => 'default',
  ),
  'total_amount_c' => 
  array (
    'query_type' => 'default',
  ),
  'adoption_services_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_other_hardware_server_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_third_party_software_c' => 
  array (
    'query_type' => 'default',
  ),
  'license_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_license_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'est_platform_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_annual_tos_estimate_c' => 
  array (
    'query_type' => 'default',
  ),
  'eb_tos_adjustment_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_annual_gma_c' => 
  array (
    'query_type' => 'default',
  ),
  'co_hosting_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_licenses_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_ftes_c' => 
  array (
    'query_type' => 'default',
  ),
  'mq_unit_price_c' => 
  array (
    'query_type' => 'default',
  ),
  'notifi_subscription_amount_c' => 
  array (
    'query_type' => 'default',
  ),
  'winner_unit_price_c' => 
  array (
    'query_type' => 'default',
  ),
  'incumbent_unit_price_c' => 
  array (
    'query_type' => 'default',
  ),
  'count_c' => 
  array (
    'query_type' => 'default',
  ),
  'extended_term_adoption_services_value_c' => 
  array (
    'query_type' => 'default',
  ),
  'total_contract_value_c' => 
  array (
    'query_type' => 'default',
  ),
  'hwsw_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'implementation_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_mq_services_estimate_c' => 
  array (
    'query_type' => 'default',
  ),
  'other_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_maintenance_cost_c' => 
  array (
    'query_type' => 'default',
  ),
  'term_length_mm_c' => 
  array (
    'query_type' => 'default',
  ),
  'adoption_services_term_length_c' => 
  array (
    'query_type' => 'default',
  ),
  'license_term_length_mm_c' => 
  array (
    'query_type' => 'default',
  ),
  'sw_maintenance_term_length_mm_c' => 
  array (
    'query_type' => 'default',
  ),
);