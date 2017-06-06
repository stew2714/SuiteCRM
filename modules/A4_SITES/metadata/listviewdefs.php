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
  'ACTIVE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ACTIVE_DATE',
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
);
?>
