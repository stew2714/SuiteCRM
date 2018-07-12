<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'accounts_opportunities_3_name' => 'opportunities.accounts_opportunities_3_name',
  'sales_stage' => 'opportunities.sales_stage',
  'assigned_user_id' => 'opportunities.assigned_user_id',
  'short_id_c' => 'opportunities_cstm.short_id_c',
),
    'searchInputs' => array (
  0 => 'name',
  2 => 'accounts_opportunities_3_name',
  4 => 'sales_stage',
  5 => 'assigned_user_id',
  6 => 'short_id_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'accounts_opportunities_3_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_OPPORTUNITIES_3ACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'accounts_opportunities_3_name',
  ),
  'short_id_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHORT_ID_C',
    'width' => '10%',
    'name' => 'short_id_c',
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
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
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'default' => true,
    'label' => 'LBL_TYPE',
    'name' => 'opportunity_type',
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
    'name' => 'sales_stage',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
