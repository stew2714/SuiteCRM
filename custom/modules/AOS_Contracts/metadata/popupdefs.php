<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Contracts',
    'varName' => 'AOS_Contracts',
    'orderBy' => 'aos_contracts.name',
    'whereClauses' => array (
  'name' => 'aos_contracts.name',
  'start_date' => 'aos_contracts.start_date',
  'end_date' => 'aos_contracts.end_date',
  'contract_account' => 'aos_contracts.contract_account',
  'assigned_user_name' => 'aos_contracts.assigned_user_name',
  'apttus_status_category_c' => 'aos_contracts_cstm.apttus_status_category_c',
  'apttus_status_c' => 'aos_contracts_cstm.apttus_status_c',
  'apttus_activated_date_c' => 'aos_contracts_cstm.apttus_activated_date_c',
  'apttus_agreement_number_c' => 'aos_contracts_cstm.apttus_agreement_number_c',
  'opportunity' => 'aos_contracts.opportunity',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'start_date',
  6 => 'end_date',
  7 => 'contract_account',
  9 => 'assigned_user_name',
  10 => 'apttus_status_category_c',
  11 => 'apttus_status_c',
  12 => 'apttus_activated_date_c',
  13 => 'apttus_agreement_number_c',
  14 => 'opportunity',
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
  'apttus_agreement_number_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APTTUS_AGREEMENT_NUMBER_C',
    'width' => '10%',
    'name' => 'apttus_agreement_number_c',
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
  'start_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'name' => 'start_date',
  ),
  'end_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'name' => 'end_date',
  ),
),
);
