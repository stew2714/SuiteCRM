<?php
$dashletData['SA_Legal_VendorsDashlet']['searchFields'] = array (
  'vendor_contract_id' => 
  array (
    'default' => '',
  ),
  'business_unit' => 
  array (
    'default' => '',
  ),
  'initial_request_date' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['SA_Legal_VendorsDashlet']['columns'] = array (
  'vendor_contract_id' => 
  array (
    'type' => 'int',
    'studio' => 
    array (
      'quickcreate' => false,
    ),
    'label' => 'LBL_VENDOR_CONTRACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'business_unit' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_BUSINESS_UNIT',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'does_vendor_access_phi' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOES_VENDOR_ACCESS_PHI',
    'width' => '10%',
    'default' => false,
  ),
  'users_sa_legal_vendors_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_USERS_TITLE',
    'id' => 'USERS_SA_LEGAL_VENDORS_1USERS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'initial_request_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INITIAL_REQUEST_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'searchfields' => 
  array (
    'date_entered' => 
    array (
      'default' => '',
    ),
    'date_modified' => 
    array (
      'default' => '',
    ),
    'assigned_user_id' => 
    array (
      'type' => 'assigned_user_name',
      'default' => 'Administrator',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'request_closed_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_REQUEST_CLOSED_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
