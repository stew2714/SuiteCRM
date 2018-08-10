<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Contracts',
    'varName' => 'AOS_Contracts',
    'orderBy' => 'aos_contracts.name',
    'whereClauses' => array (
  'name' => 'aos_contracts.name',
  'contract_account' => 'aos_contracts.contract_account',
  'assigned_user_name' => 'aos_contracts.assigned_user_name',
  'apttus_status_category_c' => 'aos_contracts_cstm.apttus_status_category_c',
  'apttus_status_c' => 'aos_contracts_cstm.apttus_status_c',
  'apttus_activated_date_c' => 'aos_contracts_cstm.apttus_activated_date_c',
  'opportunity' => 'aos_contracts.opportunity',
  'agreements_number_and_amendment_c' => 'aos_contracts_cstm.agreements_number_and_amendment_c',
  'apttus_contract_start_date_c' => 'aos_contracts_cstm.apttus_contract_start_date_c',
  'apttus_contract_end_date_c' => 'aos_contracts_cstm.apttus_contract_end_date_c',
),
    'searchInputs' => array (
  1 => 'name',
  7 => 'contract_account',
  9 => 'assigned_user_name',
  10 => 'apttus_status_category_c',
  11 => 'apttus_status_c',
  12 => 'apttus_activated_date_c',
  14 => 'opportunity',
  15 => 'agreements_number_and_amendment_c',
  16 => 'apttus_contract_start_date_c',
  17 => 'apttus_contract_end_date_c',
),
    'searchdefs' => array (
  'contract_account' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTRACT_ACCOUNT',
    'id' => 'CONTRACT_ACCOUNT_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'contract_account',
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'agreements_number_and_amendment_c' => 
  array (
    'type' => 'customreadonly',
    'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
    'width' => '10%',
    'name' => 'agreements_number_and_amendment_c',
  ),
  'opportunity' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPPORTUNITY',
    'id' => 'OPPORTUNITY_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'opportunity',
  ),
  'apttus_status_category_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
    'width' => '10%',
    'name' => 'apttus_status_category_c',
  ),
  'apttus_status_c' => 
  array (
    'type' => 'dynamicenum',
    'label' => 'LBL_APTTUS_STATUS_C',
    'width' => '10%',
    'name' => 'apttus_status_c',
  ),
  'apttus_activated_date_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
    'width' => '10%',
    'name' => 'apttus_activated_date_c',
  ),
  'apttus_contract_start_date_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_CONTRACT_START_DATE_C',
    'width' => '10%',
    'name' => 'apttus_contract_start_date_c',
  ),
  'apttus_contract_end_date_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
    'width' => '10%',
    'name' => 'apttus_contract_end_date_c',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'AGREEMENTS_NUMBER_AND_AMENDMENT_C' => 
  array (
    'type' => 'customreadonly',
    'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
    'width' => '10%',
    'default' => true,
    'name' => 'agreements_number_and_amendment_c',
  ),
  'TOTAL_CONTRACT_VALUE' => 
  array (
    'label' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'total_contract_value',
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
    'name' => 'contract_account',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
    'module' => 'Users',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
    'name' => 'assigned_user_name',
  ),
  'APTTUS_STATUS_CATEGORY_C' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_status_category_c',
  ),
  'APTTUS_STATUS_C' => 
  array (
    'type' => 'dynamicenum',
    'label' => 'LBL_APTTUS_STATUS_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_status_c',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
  'APTTUS_CONTRACT_START_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_CONTRACT_START_DATE_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_contract_start_date_c',
  ),
  'APTTUS_CONTRACT_END_DATE_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_contract_end_date_c',
  ),
  'SENT_TO_COMM_OPS_C' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_SENT_TO_COMM_OPS_C',
    'width' => '10%',
    'default' => true,
    'name' => 'sent_to_comm_ops_c',
  ),
),
);
