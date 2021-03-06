<?php
// created: 2020-09-03 14:48:17
$listViewDefs['Accounts'] = array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => true,
  ),
  'UCID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UCID',
    'width' => '10%',
  ),
  'FACILITY_TYPE_DD_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FACILITY_TYPE_DD',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => true,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'default' => true,
  ),
  'EHR_C' => 
  array (
    'type' => 'varchar',
    'label' => 'EHR',
    'width' => '10%',
    'default' => true,
  ),
  'HIMSS_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HIMSS_ID',
    'width' => '10%',
  ),
  'DEFINTIVE_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DEFINTIVE_ID',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'SF_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'SF ID',
    'width' => '10%',
    'default' => false,
  ),
  'HA_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'HA ID',
    'width' => '10%',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'default' => false,
  ),
  'SHORT_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHORT_ID_C',
    'width' => '10%',
    'default' => false,
  ),
  'ACCOUNT_TYPE_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Account Type',
    'width' => '10%',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'INDUSTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_INDUSTRY',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'DH_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'DH Id',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);