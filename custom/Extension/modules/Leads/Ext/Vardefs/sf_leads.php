<?php
$dictionary['Lead']['fields']['lead_source_most_recent_c'] = array (
    'name' => 'lead_source_most_recent_c',
    'vname' => 'LBL_LEAD_SOURCE_MOST_RECENT_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['crm_c'] = array (
    'name' => 'crm_c',
    'vname' => 'LBL_CRM_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['target_decision_date_c'] = array (
    'name' => 'target_decision_date_c',
    'vname' => 'LBL_TARGET_DECISION_DATE_C',
    'type' => 'date',
);

$dictionary['Lead']['fields']['product_interest_c'] = array (
    'name' => 'product_interest_c',
    'vname' => 'LBL_PRODUCT_INTEREST_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['lead_rating_c'] = array (
    'name' => 'lead_rating_c',
    'vname' => 'LBL_LEAD_RATING_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['latitude_c'] = array (
    'name' => 'latitude_c',
    'vname' => 'LBL_LATITUDE_C',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Lead']['fields']['longitude_c'] = array (
    'name' => 'longitude_c',
    'vname' => 'LBL_LONGITUDE_C',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Lead']['fields']['geostatus_c'] = array (
    'name' => 'geostatus_c',
    'vname' => 'LBL_GEOSTATUS_C',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Lead']['fields']['primary_campaign_c'] = array (
    'name' => 'primary_campaign_c',
    'vname' => 'LBL_PRIMARY_CAMPAIGN_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['primary_business_focus_c'] = array (
    'name' => 'primary_business_focus_c',
    'vname' => 'LBL_PRIMARY_BUSINESS_FOCUS_C',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'primary_business_focus_options',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['Lead']['fields']['number_of_healthcare_customers_c'] = array (
    'name' => 'number_of_healthcare_customers_c',
    'vname' => 'LBL_NUMBER_OF_HEALTHCARE_CUSTOMERS_C',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'number_of_healthcare_customers_options',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['Lead']['fields']['annual_revenue_c'] = array (
    'name' => 'annual_revenue_c',
    'vname' => 'LBL_ANNUAL_REVENUE_C',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'annual_revenue_options',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['Lead']['fields']['years_in_business_c'] = array (
    'name' => 'years_in_business_c',
    'vname' => 'LBL_YEARS_IN_BUSINESS_C',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'years_in_business_options',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['Lead']['fields']['geographic_region_served_c'] = array (
    'name' => 'geographic_region_served_c',
    'vname' => 'LBL_GEOGRAPHIC_REGION_SERVED_C',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'geographic_region_served_options',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['Lead']['fields']['partnership_strategy_c'] = array (
    'name' => 'partnership_strategy_c',
    'vname' => 'LBL_PARTNERSHIP_STRATEGY_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['current_client_opps_c'] = array (
    'name' => 'current_client_opps_c',
    'vname' => 'LBL_CURRENT_CLIENT_OPPS_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['ctct21__opted_out_by_ctct_c'] = array (
    'name' => 'ctct21__opted_out_by_ctct_c',
    'vname' => 'LBL_CTCT21__OPTED_OUT_BY_CTCT_C',
    'type' => 'bool',
);

$dictionary['Lead']['fields']['date_requested_c'] = array (
    'name' => 'date_requested_c',
    'vname' => 'LBL_DATE_REQUESTED_C',
    'type' => 'date',
);

$dictionary['Lead']['fields']['time_requested_c'] = array (
    'name' => 'time_requested_c',
    'vname' => 'LBL_TIME_REQUESTED_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['current_ehr_c'] = array (
    'name' => 'current_ehr_c',
    'vname' => 'LBL_CURRENT_EHR_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['currently_using_speech_rec_c'] = array (
    'name' => 'currently_using_speech_rec_c',
    'vname' => 'LBL_CURRENTLY_USING_SPEECH_REC_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['lead_group_c'] = array (
    'name' => 'lead_group_c',
    'vname' => 'LBL_LEAD_GROUP_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['number_of_doctors_c'] = array (
    'name' => 'number_of_doctors_c',
    'vname' => 'LBL_NUMBER_OF_DOCTORS_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['directions_c'] = array (
    'name' => 'directions_c',
    'vname' => 'LBL_DIRECTIONS_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['channel_c'] = array (
    'name' => 'channel_c',
    'vname' => 'LBL_CHANNEL_C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['preferred_follow_up_c'] = array (
    'name' => 'preferred_follow_up_c',
    'vname' => 'LBL_PREFERRED_FOLLOW_UP_C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['ehr_vendor_c'] = array (
    'name' => 'ehr_vendor_c',
    'vname' => 'LBL_EHR_VENDOR_C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['bucket_c'] = array (
    'name' => 'bucket_c',
    'vname' => 'LBL_BUCKET_C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['swipe_date_c'] = array (
    'name' => 'swipe_date_c',
    'vname' => 'LBL_SWIPE_DATE_C',
    'type' => 'date',
);

$dictionary['Lead']['fields']['leads_to_delete_c'] = array (
    'name' => 'leads_to_delete_c',
    'vname' => 'LBL_LEADS_TO_DELETE_C',
    'type' => 'bool',
);

$dictionary['Lead']['fields']['SEM_LS_C'] = array (
    'name' => 'sem_ls_c',
    'vname' => 'LBL_SEM_LS_C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['GPO_C'] = array (
    'name' => 'gpo_c',
    'vname' => 'LBL_GPO_C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['vip_account_c'] = array (
    'name' => 'vip_account_c',
    'vname' => 'LBL_VIP_ACCOUNT_C',
    'type' => 'bool',
);

$dictionary['Lead']['fields']['zba_ss_c'] = array (
    'name' => 'zba_ss_c',
    'vname' => 'LBL_ZBA_SS_C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);