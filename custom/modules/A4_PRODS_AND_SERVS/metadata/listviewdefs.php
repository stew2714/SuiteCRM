<?php
$module_name = 'A4_PRODS_AND_SERVS';
$listViewDefs [$module_name] = 
array (
  'PS_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PS_TYPE',
    'width' => '10%',
  ),
  'ACCOUNTS_A4_PRODS_AND_SERVS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_A4_PRODS_AND_SERVS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_A4_PRODS_AND_SERVS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
