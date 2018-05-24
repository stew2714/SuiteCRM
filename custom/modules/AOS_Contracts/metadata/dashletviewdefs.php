<?php
$dashletData['AOS_ContractsDashlet']['searchFields'] = array (
  'contract_account' => 
  array (
    'default' => '',
  ),
  'apttus_ff_agreement_number_c' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'apttus_parent_agreement_name_c' => 
  array (
    'default' => '',
  ),
  'opportunity' => 
  array (
    'default' => '',
  ),
  'contact' => 
  array (
    'default' => '',
  ),
  'apttus_status_category_c' => 
  array (
    'default' => '',
  ),
  'apttus_status_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['AOS_ContractsDashlet']['columns'] = array (
  'contract_account' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTRACT_ACCOUNT',
    'id' => 'CONTRACT_ACCOUNT_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'contract_account',
  ),
  'apttus_agreement_number_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APTTUS_AGREEMENT_NUMBER_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_agreement_number_c',
  ),
  'name' => 
  array (
    'type' => 'name',
    'width' => '25%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'apttus_status_category_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_status_category_c',
  ),
  'apttus_status_c' => 
  array (
    'type' => 'dynamicenum',
    'label' => 'LBL_APTTUS_STATUS_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_status_c',
  ),
  'apttus_activated_date_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
    'width' => '10%',
    'default' => true,
    'name' => 'apttus_activated_date_c',
  ),
  'start_date' => 
  array (
    'width' => '12%',
    'label' => 'LBL_START_DATE',
    'name' => 'start_date',
    'default' => false,
  ),
  'renewal_reminder_date' => 
  array (
    'width' => '15%',
    'label' => 'LBL_RENEWAL_REMINDER_DATE',
    'name' => 'renewal_reminder_date',
    'default' => false,
  ),
  'additionalusers' => 
  array (
    'type' => 'additionalusers',
    'sortable' => false,
    'studio' => 
    array (
      'visible' => false,
      'listview' => true,
      'searchview' => false,
      'detailview' => true,
      'editview' => true,
      'formula' => false,
      'related' => false,
      'basic_search' => false,
      'advanced_search' => false,
      'popuplist' => true,
      'popupsearch' => false,
      'dashletsearch' => false,
      'dashlet' => true,
    ),
    'label' => 'LBL_ADDITIONALUSERS',
    'width' => '10%',
    'default' => false,
    'name' => 'additionalusers',
  ),
  'securitygroup_display' => 
  array (
    'type' => 'function',
    'sortable' => false,
    'studio' => 
    array (
      'visible' => false,
      'listview' => true,
      'searchview' => false,
      'detailview' => true,
      'editview' => true,
      'formula' => false,
      'related' => false,
      'basic_search' => false,
      'advanced_search' => false,
      'popuplist' => true,
      'popupsearch' => false,
      'dashletsearch' => false,
      'dashlet' => false,
    ),
    'label' => 'LBL_SECURITYGROUP',
    'width' => '10%',
    'default' => false,
    'name' => 'securitygroup_display',
  ),
  'total_amt' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_AMT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'total_amt',
  ),
  'opportunity' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPPORTUNITY',
    'id' => 'OPPORTUNITY_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'opportunity',
  ),
  'contact' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'contact',
  ),
  'g1_group_queue_aos_contracts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_G1_GROUP_QUEUE_AOS_CONTRACTS_FROM_G1_GROUP_QUEUE_TITLE',
    'id' => 'G1_GROUP_QUEUE_AOS_CONTRACTSG1_GROUP_QUEUE_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'g1_group_queue_aos_contracts_name',
  ),
  'total_contract_value' => 
  array (
    'width' => '12%',
    'label' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'default' => false,
    'name' => 'total_contract_value',
  ),
  'sent_to_comm_ops_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_SENT_TO_COMM_OPS_C',
    'width' => '10%',
    'default' => false,
    'name' => 'sent_to_comm_ops_c',
  ),
  'end_date' => 
  array (
    'width' => '12%',
    'label' => 'LBL_END_DATE',
    'default' => false,
    'name' => 'end_date',
  ),
  'assigned_user_name' => 
  array (
    'width' => '12%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'sf_id_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SF_ID_C',
    'width' => '10%',
    'default' => false,
    'name' => 'sf_id_c',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'recordtypeid_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RECORDTYPEID_C',
    'width' => '10%',
    'default' => false,
    'name' => 'recordtypeid_c',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
);
