<?php
$module_name = 'spec_logtrack';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LOGIN_TIME' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LOGIN_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'LOGOUT_TIME' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LOGOUT_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'IP_ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IP_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
);
?>
