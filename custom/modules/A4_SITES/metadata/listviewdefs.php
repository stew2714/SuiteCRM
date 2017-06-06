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
  'HIMSS_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HIMSS_ID',
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
  'DEFINITIVE_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEFINITIVE_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
