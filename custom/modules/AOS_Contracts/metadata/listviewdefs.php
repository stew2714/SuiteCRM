<?php
$listViewDefs ['AOS_Contracts'] = 
array (
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'APTTUS_REQUEST_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_REQUEST_DATE_C',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_CONTRACT_VALUE' => 
  array (
    'label' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'AGREEMENTS_NUMBER_AND_AMENDMENT_C' => 
  array (
    'type' => 'customreadonly',
    'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
    'width' => '10%',
    'default' => true,
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
  'APTTUS_STATUS_CATEGORY_C' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
    'width' => '10%',
    'default' => true,
  ),
  'APTTUS_STATUS_C' => 
  array (
    'type' => 'dynamicenum',
    'label' => 'LBL_APTTUS_STATUS_C',
    'width' => '10%',
    'default' => true,
  ),
  'APTTUS_CONTRACT_START_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_CONTRACT_START_DATE_C',
    'width' => '10%',
    'default' => true,
  ),
  'APTTUS_CONTRACT_END_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
    'width' => '10%',
    'default' => true,
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
  'SENT_TO_COMM_OPS_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_SENT_TO_COMM_OPS_C',
    'width' => '10%',
    'default' => true,
  ),
  'APTTUS_PRIMARY_CONTACT_C' => 
  array (
    'default' => false,
    'type' => 'varchar',
    'label' => 'LBL_APTTUS_PRIMARY_CONTACT_C',
    'width' => '10%',
  ),
  'G1_GROUP_QUEUE_AOS_CONTRACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_G1_GROUP_QUEUE_AOS_CONTRACTS_FROM_G1_GROUP_QUEUE_TITLE',
    'id' => 'G1_GROUP_QUEUE_AOS_CONTRACTSG1_GROUP_QUEUE_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPPORTUNITY',
    'id' => 'OPPORTUNITY_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'APTTUS_FF_AGREEMENT_NUMBER_C' => 
  array (
    'type' => 'text',
    'label' => 'LBL_APTTUS_FF_AGREEMENT_NUMBER_C',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'APTTUS_ACTIVATED_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
    'width' => '10%',
    'default' => false,
  ),
);
?>
