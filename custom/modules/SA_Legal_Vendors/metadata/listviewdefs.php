<?php
$module_name = 'SA_Legal_Vendors';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'BUSINESS_UNIT' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_BUSINESS_UNIT',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DOES_VENDOR_ACCESS_PHI' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOES_VENDOR_ACCESS_PHI',
    'width' => '10%',
    'default' => false,
  ),
  'VENDOR_CONTRACT_ID' => 
  array (
    'type' => 'int',
    'studio' => 
    array (
      'quickcreate' => false,
    ),
    'label' => 'LBL_VENDOR_CONTRACT_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'REQUEST_CLOSED_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_REQUEST_CLOSED_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'USERS_SA_LEGAL_VENDORS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_USERS_TITLE',
    'id' => 'USERS_SA_LEGAL_VENDORS_1USERS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'INITIAL_REQUEST_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INITIAL_REQUEST_DATE',
    'width' => '10%',
    'default' => false,
  ),
);
?>
