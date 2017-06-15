<?php
// Eloqua Record ID
$dictionary['Lead']['fields']['eloqua_id'] = array(
    'name' => 'eloqua_id',
    'vname' => 'LBL_ELOQUA_ID',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

// Annual Revenue Field
$dictionary['Lead']['fields']['annual_revenue'] = array(
    'name' => 'annual_revenue',
    'vname' => 'LBL_ANNUAL_REVENUE',
    'type' => 'int',
    'len' => 99,
    'default' => 0,
    'reportable' => false,
);

// Number of Employees
$dictionary['Lead']['fields']['number_of_employees'] = array(
    'name' => 'number_of_employees',
    'vname' => 'LBL_NUMBER_OF_EMPLOYEES',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

// Industry Select, Options are from Eloqua Instance
$dictionary['Lead']['fields']['industry'] = array(
    'name' => 'industry',
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
);

$dictionary['Lead']['fields']['rating'] = array (
    'name' => 'rating',
    'vname' => 'LBL_ELOQUA_LEAD_RATING',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['primary_address_country']['type']='enum';
$dictionary['Lead']['fields']['primary_address_country']['options']='eloqua_country_list';
$dictionary['Lead']['fields']['alt_address_country']['type']='enum';
$dictionary['Lead']['fields']['alt_address_country']['options']='eloqua_country_list';