<?php
// Eloqua Record ID
$dictionary['Lead']['fields']['eloqua_id_c'] = array(
    'name' => 'eloqua_id_c',
    'vname' => 'LBL_ELOQUA_ID',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
    'source' => 'custom_fields',
);

// Annual Revenue Field
$dictionary['Lead']['fields']['annual_revenue_c'] = array(
    'name' => 'annual_revenue_c',
    'vname' => 'LBL_ANNUAL_REVENUE',
    'type' => 'int',
    'len' => 99,
    'default' => 0,
    'reportable' => false,
    'source' => 'custom_fields',
);

// Number of Employees
$dictionary['Lead']['fields']['number_of_employees_c'] = array(
    'name' => 'number_of_employees_c',
    'vname' => 'LBL_NUMBER_OF_EMPLOYEES',
    'type' => 'int',
    'default' => 0,
    'reportable' => false,
    'source' => 'custom_fields',
);

// Industry Select, Options are from Eloqua Instance
$dictionary['Lead']['fields']['industry_c'] = array(
    'name' => 'industry_c',
    'vname' => 'LBL_INDUSTRY',
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
    'options' => 'eloqua_industry_options',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['rating_c'] = array (
    'name' => 'rating_c',
    'vname' => 'LBL_ELOQUA_LEAD_RATING',
    'type' => 'varchar',
    'len' => '40',
    'source' => 'custom_fields',
);

$dictionary['Lead']['fields']['primary_address_country']['type']='enum';
$dictionary['Lead']['fields']['primary_address_country']['options']='eloqua_country_list';
$dictionary['Lead']['fields']['alt_address_country']['type']='enum';
$dictionary['Lead']['fields']['alt_address_country']['options']='eloqua_country_list';