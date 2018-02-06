<?php
$module_name = 'sa_Fluency_One';
$listViewDefs [$module_name] = 
array (
  'ACCOUNT_232534532_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_232534532_C',
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
  'STATUS_C' => 
  array (
    'type' => 'text',
    'label' => 'LBL_STATUS_C',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'SEGMENT_C' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SEGMENT_C',
    'width' => '10%',
    'default' => true,
  ),
  'REQUEST_SUBMIT_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_REQUEST_SUBMIT_DATE_C',
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
  'EB_PROPOSAL_DELIVERED_TO_CUSTOMER_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_EB_PROPOSAL_DELIVERED_TO_CUSTOMER_DATE_C',
    'width' => '10%',
    'default' => true,
  ),
);
?>