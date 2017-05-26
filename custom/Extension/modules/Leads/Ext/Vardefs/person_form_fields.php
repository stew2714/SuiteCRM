<?php
$dictionary['Lead']['fields']['interested_in'] = array (
    'name' => 'interested_in',
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
);

$dictionary['Lead']['fields']['solution_interest'] = array (
    'name' => 'solution_interest',
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
);

$dictionary['Lead']['fields']['facility'] = array (
    'name' => 'facility',
    'vname' => 'LBL_FACILITY',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Lead']['fields']['facility_type'] = array (
    'name' => 'facility_type',
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
);

$dictionary['Lead']['fields']['company'] = array (
    'name' => 'company',
    'vname' => 'LBL_COMPANY',
    'type' => 'varchar',
    'len' => '255',
);