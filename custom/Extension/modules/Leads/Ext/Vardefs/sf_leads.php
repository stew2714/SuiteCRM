<?php
$dictionary['Lead']['fields']['lead_source_most_recent__c'] = array (
    'name' => 'lead_source_most_recent__c',
    'vname' => 'LBL_LEAD_SOURCE_MOST_RECENT__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['crm_c'] = array (
    'name' => 'crm_c',
    'vname' => 'LBL_CRM__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['target_decision_date_c'] = array (
    'name' => 'target_decision_date__c',
    'vname' => 'LBL_TARGET_DECISION_DATE__C',
    'type' => 'date',
);

$dictionary['Lead']['fields']['product_interest__c'] = array (
    'name' => 'product_interest__c',
    'vname' => 'LBL_PRODUCT_INTEREST__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['lead_rating__c'] = array (
    'name' => 'lead_rating__c',
    'vname' => 'LBL_LEAD_RATING__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['latitude__c'] = array (
    'name' => 'latitude__c',
    'vname' => 'LBL_LATITUDE__C',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Lead']['fields']['longitude__c'] = array (
    'name' => 'longitude__c',
    'vname' => 'LBL_LONGITUDE__C',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Lead']['fields']['geostatus__c'] = array (
    'name' => 'geostatus__c',
    'vname' => 'LBL_GEOSTATUS__C',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Lead']['fields']['primary_campaign__c'] = array (
    'name' => 'primary_campaign__c',
    'vname' => 'LBL_PRIMARY_CAMPAIGN__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['primary_business_focus__c'] = array (
    'name' => 'primary_business_focus__c',
    'vname' => 'LBL_PRIMARY_BUSINESS_FOCUS__C',
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

$dictionary['Lead']['fields']['number_of_healthcare_customers__c'] = array (
    'name' => 'number_of_healthcare_customers__c',
    'vname' => 'LBL_NUMBER_OF_HEALTHCARE_CUSTOMERS__C',
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

$dictionary['Lead']['fields']['annual_revenue__c'] = array (
    'name' => 'annual_revenue__c',
    'vname' => 'LBL_ANNUAL_REVENUE__C',
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

$dictionary['Lead']['fields']['years_in_business__c'] = array (
    'name' => 'years_in_business__c',
    'vname' => 'LBL_YEARS_IN_BUSINESS__C',
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

$dictionary['Lead']['fields']['geographic_region_served__c'] = array (
    'name' => 'geographic_region_served__c',
    'vname' => 'LBL_GEOGRAPHIC_REGION_SERVED__C',
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

$dictionary['Lead']['fields']['partnership_strategy__c'] = array (
    'name' => 'partnership_strategy__c',
    'vname' => 'LBL_PARTNERSHIP_STRATEGY__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['current_client_opps__c'] = array (
    'name' => 'current_client_opps__c',
    'vname' => 'LBL_CURRENT_CLIENT_OPPS__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['ctct21__opted_out_by_ctct__c'] = array (
    'name' => 'ctct21__opted_out_by_ctct__c',
    'vname' => 'LBL_CTCT21__OPTED_OUT_BY_CTCT__C',
    'type' => 'bool',
);

$dictionary['Lead']['fields']['date_requested__c'] = array (
    'name' => 'date_requested__c',
    'vname' => 'LBL_DATE_REQUESTED__C',
    'type' => 'date',
);

$dictionary['Lead']['fields']['time_requested__c'] = array (
    'name' => 'time_requested__c',
    'vname' => 'LBL_TIME_REQUESTED__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['current_ehr__c'] = array (
    'name' => 'current_ehr__c',
    'vname' => 'LBL_CURRENT_EHR__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['currently_using_speech_rec__c'] = array (
    'name' => 'currently_using_speech_rec__c',
    'vname' => 'LBL_CURRENTLY_USING_SPEECH_REC__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['lead_group__c'] = array (
    'name' => 'lead_group__c',
    'vname' => 'LBL_LEAD_GROUP__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['number_of_doctors__c'] = array (
    'name' => 'number_of_doctors__c',
    'vname' => 'LBL_NUMBER_OF_DOCTORS__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['directions__c'] = array (
    'name' => 'directions__c',
    'vname' => 'LBL_DIRECTIONS__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['channel__c'] = array (
    'name' => 'channel__c',
    'vname' => 'LBL_CHANNEL__C',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['preferred_follow_up__c'] = array (
    'name' => 'preferred_follow_up__c',
    'vname' => 'LBL_PREFERRED_FOLLOW_UP__C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['ehr_vendor__c'] = array (
    'name' => 'ehr_vendor__c',
    'vname' => 'LBL_EHR_VENDOR__C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['bucket__c'] = array (
    'name' => 'bucket__c',
    'vname' => 'LBL_BUCKET__C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['swipe_date__c'] = array (
    'name' => 'swipe_date__c',
    'vname' => 'LBL_SWIPE_DATE__C',
    'type' => 'date',
);

$dictionary['Lead']['fields']['leads_to_delete__c'] = array (
    'name' => 'leads_to_delete__c',
    'vname' => 'LBL_LEADS_TO_DELETE__C',
    'type' => 'bool',
);

$dictionary['Lead']['fields']['SEM_LS__C'] = array (
    'name' => 'sem_ls__c',
    'vname' => 'LBL_SEM_LS__C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['GPO__C'] = array (
    'name' => 'gpo__c',
    'vname' => 'LBL_GPO__C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);

$dictionary['Lead']['fields']['vip_account__c'] = array (
    'name' => 'vip_account__c',
    'vname' => 'LBL_VIP_ACCOUNT__C',
    'type' => 'bool',
);

$dictionary['Lead']['fields']['zba_ss__c'] = array (
    'name' => 'zba_ss__c',
    'vname' => 'LBL_ZBA_SS__C',
    'type' => 'varchar',
    'len' => '255',
    'len' => '255',
);