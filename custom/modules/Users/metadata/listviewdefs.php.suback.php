<?php
// created: 2020-09-03 14:48:17
$listViewDefs['Users'] = array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'last_name',
      1 => 'first_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
  ),
  'USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_USER_NAME',
    'link' => true,
    'default' => true,
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'link' => true,
    'default' => true,
  ),
  'DEPARTMENT' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DEPARTMENT',
    'link' => true,
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '30%',
    'sortable' => false,
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'IS_ADMIN' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ADMIN',
    'link' => false,
    'default' => true,
  ),
  'SHOW_ON_EMPLOYEES' => 
  array (
    'type' => 'bool',
    'default' => false,
    'studio' => 
    array (
      'formula' => false,
    ),
    'label' => 'LBL_SHOW_ON_EMPLOYEES',
    'width' => '10%',
  ),
  'EMPLOYEE_STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'IS_GROUP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_GROUP',
    'link' => true,
    'default' => false,
  ),
);