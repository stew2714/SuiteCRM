<?php
$listViewDefs ['AOS_Contracts'] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
    'module' => 'Users',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
  ),
  'CONTRACT_ACCOUNT' => 
  array (
    'width' => '15%',
    'label' => 'LBL_CONTRACT_ACCOUNT',
    'default' => true,
    'module' => 'Accounts',
    'id' => 'CONTRACT_ACCOUNT_ID',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'contract_account_id',
    ),
  ),
  'TOTAL_CONTRACT_VALUE' => 
  array (
    'label' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'APTTUS_PRIMARY_CONTACT_C' => 
  array (
    'default' => true,
    'type' => 'varchar',
    'label' => 'LBL_APTTUS_PRIMARY_CONTACT_C',
    'width' => '10%',
  ),
  'FACILITY_CONTACT_E_MAIL_ADDRESS_BILLING_C' => 
  array (
    'default' => false,
    'type' => 'varchar',
    'label' => 'LBL_FACILITY_CONTACT_E_MAIL_ADDRESS_BILLING_C',
    'width' => '10%',
  ),
  'FACILITY_CONTACT_TITLE_C' => 
  array (
    'default' => false,
    'type' => 'varchar',
    'label' => 'LBL_FACILITY_CONTACT_TITLE_C',
    'width' => '10%',
  ),
);
?>
