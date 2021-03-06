<?php
$module_name = 'A4_SITES';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
      'customer_no_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CUSTOMER_NO',
        'width' => '10%',
        'name' => 'customer_no_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'accounts_a4_sites_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_A4_SITES_1ACCOUNTS_IDA',
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
      'customer_no_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CUSTOMER_NO',
        'width' => '10%',
        'name' => 'customer_no_c',
      ),
      'himss_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_HIMSS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'himss_id',
      ),
      'definitive_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DEFINITIVE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'definitive_id',
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
      'cc_region_dd_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CC_REGION_DD',
        'width' => '10%',
        'name' => 'cc_region_dd_c',
      ),
      'b2b_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_B2B',
        'width' => '10%',
        'name' => 'b2b_c',
      ),
      'cdia_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CDIA',
        'width' => '10%',
        'name' => 'cdia_c',
      ),
      'cdic_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CDIC',
        'width' => '10%',
        'name' => 'cdic_c',
      ),
      'cdie_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CDIE',
        'width' => '10%',
        'name' => 'cdie_c',
      ),
      'fd_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FD',
        'width' => '10%',
        'name' => 'fd_c',
      ),
      'ffc_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FFC',
        'width' => '10%',
        'name' => 'ffc_c',
      ),
      'ffi_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FFI',
        'width' => '10%',
        'name' => 'ffi_c',
      ),
      'fvm_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FVM',
        'width' => '10%',
        'name' => 'fvm_c',
      ),
      'vs_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_VS',
        'width' => '10%',
        'name' => 'vs_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
