<?php
$dictionary['Lead']['fields']['interested_in_c'] = array (
    'name' => 'interested_in_c',
    'vname' => 'LBL_INTERESTED_IN',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Type',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '100',
    'size' => '20',
    'options' => 'interested_in_options',
    'studio' => 'visible',
    'dependency' => false,
    'source' => 'custom_fields'
);

$dictionary['Lead']['fields']['solution_interest_c'] = array (
    'name' => 'solution_interest_c',
    'vname' => 'LBL_SOLUTION_INTEREST',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Type',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '100',
    'size' => '20',
    'options' => 'solution_interest_options',
    'studio' => 'visible',
    'dependency' => false,
    'source' => 'custom_fields'
);

$dictionary['Lead']['fields']['facility_c'] = array (
    'name' => 'facility_c',
    'vname' => 'LBL_FACILITY',
    'type' => 'varchar',
    'len' => '255',
    'source' => 'custom_fields'
);

$dictionary['Lead']['fields']['facility_type_c'] = array (
    'name' => 'facility_type_c',
    'vname' => 'LBL_FACILITY_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Type',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '100',
    'size' => '20',
    'options' => 'LBL_FACILITY_TYPE',
    'studio' => 'visible',
    'dependency' => false,
    'source' => 'custom_fields'
);

$dictionary['Lead']['fields']['company_c'] = array (
    'name' => 'company_c',
    'vname' => 'LBL_COMPANY',
    'type' => 'varchar',
    'len' => '255',
    'source' => 'custom_fields'
);

$dictionary['Lead']['fields']['interested_in_c']['options'] = 'interested_in_options';