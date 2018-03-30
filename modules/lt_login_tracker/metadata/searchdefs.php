<?php
$module_name = 'lt_login_tracker';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'user_id_c' => 
      array (
        'name' => 'user_id_c',
        'label' => 'LBL_LOGIN_USER',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'login_date_time' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_LOGIN_DATE_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'login_date_time',
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
      'login_date_time' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_LOGIN_DATE_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'login_date_time',
      ),
      'user_id_c' => 
      array (
        'name' => 'user_id_c',
        'label' => 'LBL_LOGIN_USER',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
