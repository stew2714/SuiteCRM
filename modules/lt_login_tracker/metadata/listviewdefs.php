<?php
$module_name = 'lt_login_tracker';
$listViewDefs [$module_name] = 
array (
  'LOGIN_USER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_LOGIN_USER',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'LOGIN_DATE_TIME' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LOGIN_DATE_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
