<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'billing_address_city' => 'accounts.billing_address_city',
  'billing_address_state' => 'accounts.billing_address_state',
  'billing_address_country' => 'accounts.billing_address_country',
  'parent_name' => 'accounts.parent_name',
  'ucid_c' => 'accounts_cstm.ucid_c',
  'facility_type_dd_c' => 'accounts_cstm.facility_type_dd_c',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'billing_address_city',
  5 => 'billing_address_state',
  6 => 'billing_address_country',
  10 => 'parent_name',
  11 => 'ucid_c',
  12 => 'facility_type_dd_c',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'facility_type_dd_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FACILITY_TYPE_DD',
    'width' => '10%',
    'name' => 'facility_type_dd_c',
  ),
  'parent_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'name' => 'parent_name',
  ),
  'ucid_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_UCID',
    'width' => '10%',
    'name' => 'ucid_c',
  ),
  'billing_address_city' => 
  array (
    'name' => 'billing_address_city',
    'width' => '10%',
  ),
  'billing_address_state' => 
  array (
    'name' => 'billing_address_state',
    'width' => '10%',
  ),
  'billing_address_country' => 
  array (
    'name' => 'billing_address_country',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'FACILITY_TYPE_DD_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FACILITY_TYPE_DD',
    'width' => '10%',
  ),
  'UCID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UCID',
    'width' => '10%',
    'name' => 'ucid_c',
  ),
  'HIMSS_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HIMSS_ID',
    'width' => '10%',
    'name' => 'himss_id_c',
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'billing_address_city',
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_STATE',
    'default' => true,
    'name' => 'billing_address_state',
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_COUNTRY',
    'default' => true,
    'name' => 'billing_address_country',
  ),
),
);
