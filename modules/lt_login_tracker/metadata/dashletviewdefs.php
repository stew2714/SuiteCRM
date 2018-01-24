<?php
$dashletData['lt_login_trackerDashlet']['searchFields'] = array (
  'login_user' => 
  array (
    'default' => '',
  ),
  'login_date_time' => 
  array (
    'default' => '',
  ),
);
$dashletData['lt_login_trackerDashlet']['columns'] = array (
  'login_user' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_LOGIN_USER',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'login_user',
  ),
  'login_date_time' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LOGIN_DATE_TIME',
    'width' => '10%',
    'default' => true,
    'name' => 'login_date_time',
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
);
