<?php
$popupMeta = array (
    'moduleMain' => 'SA_Legal_Vendors',
    'varName' => 'SA_Legal_Vendors',
    'orderBy' => 'sa_legal_vendors.name',
    'whereClauses' => array (
  'name' => 'sa_legal_vendors.name',
  'vendor_contract_id' => 'sa_legal_vendors.vendor_contract_id',
  'business_unit' => 'sa_legal_vendors.business_unit',
  'assigned_user_id' => 'sa_legal_vendors.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'vendor_contract_id',
  5 => 'business_unit',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'vendor_contract_id' => 
  array (
    'type' => 'int',
    'studio' => 
    array (
      'quickcreate' => false,
    ),
    'label' => 'LBL_VENDOR_CONTRACT_ID',
    'width' => '10%',
    'name' => 'vendor_contract_id',
  ),
  'business_unit' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_BUSINESS_UNIT',
    'width' => '10%',
    'name' => 'business_unit',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
