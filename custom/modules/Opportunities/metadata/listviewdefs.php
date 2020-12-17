<?php
// created: 2020-10-16 16:08:37
$listViewDefs['Opportunities'] = array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNTS_OPPORTUNITIES_3_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_OPPORTUNITIES_3ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'NEW_SHORT_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEW_SHORT_ID_C',
    'width' => '10%',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'FORECASTING_CATEGORY_C' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_FORECASTING_CATEGORY_C',
    'width' => '10%',
    'default' => false,
  ),
  'TOTAL_AMOUNT_C' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TOTAL_AMOUNT_C',
    'width' => '10%',
    'default' => false,
  ),
  'TOTAL_CONTRACT_VALUE_C' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TOTAL_CONTRACT_VALUE_C',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);