<?php
$dashletData['A4_SITESDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Mark Moore',
  ),
);
$dashletData['A4_SITESDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'accounts_a4_sites_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_A4_SITES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_a4_sites_1_name',
  ),
  'parent' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARENT',
    'width' => '10%',
    'default' => true,
    'name' => 'parent',
  ),
  'ucid' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_UCID',
    'width' => '10%',
    'default' => true,
    'name' => 'ucid',
  ),
  'aplatform_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APLATFORM',
    'width' => '10%',
    'name' => 'aplatform_c',
  ),
  'customer_no_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUSTOMER_NO',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'definitive_id' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEFINITIVE_ID',
    'width' => '10%',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'himss_id' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HIMSS_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'himss_id',
  ),
  'tier_dd_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIER_DD',
    'width' => '10%',
  ),
  'fd_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FD',
    'width' => '10%',
  ),
  'searchfields' => 
  array (
    'date_entered' => 
    array (
      'default' => '',
    ),
    'date_modified' => 
    array (
      'default' => '',
    ),
    'assigned_user_id' => 
    array (
      'type' => 'assigned_user_name',
      'default' => 'Mark Moore',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'service_address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICE_ADDRESS',
    'width' => '10%',
    'default' => false,
  ),
  'term_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TERM_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'cc_region_dd_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CC_REGION_DD',
    'width' => '10%',
  ),
  'columns' => 
  array (
    'name' => 
    array (
      'width' => '40',
      'label' => 'LBL_LIST_NAME',
      'link' => true,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_ENTERED',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_MODIFIED',
    ),
    'created_by' => 
    array (
      'width' => '8',
      'label' => 'LBL_CREATED',
    ),
    'assigned_user_name' => 
    array (
      'width' => '8',
      'label' => 'LBL_LIST_ASSIGNED_USER',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'service_address_line2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICE_ADDRESS_LINE2',
    'width' => '10%',
    'default' => false,
  ),
);
