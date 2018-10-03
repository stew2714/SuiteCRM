<?php
$module_name = 'A4_SITES';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_A4_SITES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_A4_SITES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PARENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARENT',
    'width' => '10%',
    'default' => true,
  ),
  'UCID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_UCID',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTOMER_NO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUSTOMER_NO',
    'width' => '10%',
  ),
  'APLATFORM_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APLATFORM',
    'width' => '10%',
  ),
  'HIMSS_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HIMSS_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DEFINITIVE_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEFINITIVE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TERM_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TERM_DATE',
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
  'CC_REGION_DD_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CC_REGION_DD',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'OPS_REGION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OPS_REGION',
    'width' => '10%',
    'default' => false,
  ),
  'TIER_DD_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIER_DD',
    'width' => '10%',
  ),
  'FFI_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FFI',
    'width' => '10%',
  ),
  'FD_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FD',
    'width' => '10%',
  ),
  'FVM_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FVM',
    'width' => '10%',
  ),
  'FFC_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FFC',
    'width' => '10%',
  ),
  'DWI_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DWI',
    'width' => '10%',
  ),
  'CLIENT_ALERT_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CLIENT_ALERT',
    'sortable' => false,
    'width' => '10%',
  ),
  'CDIA_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CDIA',
    'width' => '10%',
  ),
  'CDIC_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CDIC',
    'width' => '10%',
  ),
  'CDIE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CDIE',
    'width' => '10%',
  ),
  'SERVICE_ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICE_ADDRESS',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'SERVICE_ADDRESS_LINE2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICE_ADDRESS_LINE2',
    'width' => '10%',
    'default' => false,
  ),
  'ADDITIONALUSERS' => 
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
  ),
  'SECURITYGROUP_DISPLAY' => 
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
  ),
  'B2B_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_B2B',
    'width' => '10%',
  ),
);
?>
