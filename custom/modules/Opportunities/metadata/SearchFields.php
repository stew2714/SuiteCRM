<?php
// created: 2018-06-28 13:29:34
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
  'short_id_c' => 
  array (
    'query_type' => 'default',
  ),
  'date_closed' => 
  array (
    'query_type' => 'default',
  ),
  'new_am_region_c' => 
  array (
    'query_type' => 'default',
  ),
  'incumbent_name_c' => 
  array (
    'query_type' => 'default',
  ),
  'incumbentx_c' => 
  array (
    'query_type' => 'default',
  ),
  'implementation_timeframe_c' => 
  array (
    'query_type' => 'default',
  ),
  'implementation_timeframe_comments_c' => 
  array (
    'query_type' => 'default',
  ),
  'change_in_mix_c' => 
  array (
    'query_type' => 'default',
  ),
  'global_use_probability_percent_c' => 
  array (
    'query_type' => 'default',
  ),
  'forecasting_category_c' => 
  array (
    'query_type' => 'default',
  ),
  'partner_c' => 
  array (
    'query_type' => 'default',
  ),
  'projected_pricedown_c' => 
  array (
    'query_type' => 'default',
  ),
  'projected_renewal_date_c' => 
  array (
    'query_type' => 'default',
  ),
  'specialist_name_c' => 
  array (
    'query_type' => 'default',
  ),
);