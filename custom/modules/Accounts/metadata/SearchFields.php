<?php
// created: 2018-08-24 12:52:35
$searchFields['Accounts'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'account_type' => 
  array (
    'query_type' => 'default',
    'options' => 'account_type_dom',
    'template_var' => 'ACCOUNT_TYPE_OPTIONS',
  ),
  'industry' => 
  array (
    'query_type' => 'default',
    'options' => 'industry_dom',
    'template_var' => 'INDUSTRY_OPTIONS',
  ),
  'annual_revenue' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_street',
      1 => 'shipping_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_city',
      1 => 'shipping_address_city',
    ),
    'vname' => 'LBL_CITY',
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_state',
      1 => 'shipping_address_state',
    ),
    'vname' => 'LBL_STATE',
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_postalcode',
      1 => 'shipping_address_postalcode',
    ),
    'vname' => 'LBL_POSTAL_CODE',
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_country',
      1 => 'shipping_address_country',
    ),
    'vname' => 'LBL_COUNTRY',
  ),
  'rating' => 
  array (
    'query_type' => 'default',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_office',
    ),
    'vname' => 'LBL_ANY_PHONE',
  ),
  'email' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_ANY_EMAIL',
  ),
  'website' => 
  array (
    'query_type' => 'default',
  ),
  'ownership' => 
  array (
    'query_type' => 'default',
  ),
  'employees' => 
  array (
    'query_type' => 'default',
  ),
  'sic_code' => 
  array (
    'query_type' => 'default',
  ),
  'ticker_symbol' => 
  array (
    'query_type' => 'default',
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
  'billing_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'sf_id_c' => 
  array (
    'query_type' => 'default',
  ),
  'recordtypeid_c' => 
  array (
    'query_type' => 'default',
  ),
  'cms_medicare_number_c' => 
  array (
    'query_type' => 'default',
  ),
  'billing_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'ehr_c' => 
  array (
    'query_type' => 'default',
  ),
  'staffed_beds_c' => 
  array (
    'query_type' => 'default',
  ),
  'beds_c' => 
  array (
    'query_type' => 'default',
  ),
  'imaging_exam_volume_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_dictators_c' => 
  array (
    'query_type' => 'default',
  ),
  'emram_stage_validated_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_mts_c' => 
  array (
    'query_type' => 'default',
  ),
  'transcription_volumemonth_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_admissions_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_adj_patient_days_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_outpatient_visits_c' => 
  array (
    'query_type' => 'default',
  ),
  'annual_healthcare_visits_c' => 
  array (
    'query_type' => 'default',
  ),
  'of_procedures_day_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_locations_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_providers_c' => 
  array (
    'query_type' => 'default',
  ),
  'ip_days_c' => 
  array (
    'query_type' => 'default',
  ),
  'total_employees_c' => 
  array (
    'query_type' => 'default',
  ),
  'radiology_studies_c' => 
  array (
    'query_type' => 'default',
  ),
  'cardiology_studies_c' => 
  array (
    'query_type' => 'default',
  ),
  'operating_rooms_c' => 
  array (
    'query_type' => 'default',
  ),
  'births_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_physicians_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_home_health_fac_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_ambulatory_loc_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_sub_acute_loc_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_hospitals_c' => 
  array (
    'query_type' => 'default',
  ),
  'er_visits_c' => 
  array (
    'query_type' => 'default',
  ),
  'number_of_facilities_c' => 
  array (
    'query_type' => 'default',
  ),
  'tos_opportunity_size_c' => 
  array (
    'query_type' => 'default',
  ),
  'site_size_c' => 
  array (
    'query_type' => 'default',
  ),
  'tos_rad_opp_size_c' => 
  array (
    'query_type' => 'default',
  ),
  'of_hospitals_in_health_system_c' => 
  array (
    'query_type' => 'default',
  ),
);