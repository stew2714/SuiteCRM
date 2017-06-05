<?php
$searchdefs ['Users'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'user_name' => 
      array (
        'type' => 'user_name',
        'studio' => 
        array (
          'no_duplicate' => true,
          'editview' => false,
          'detailview' => true,
          'quickcreate' => false,
          'basic_search' => false,
          'advanced_search' => false,
        ),
        'label' => 'LBL_USER_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'user_name',
      ),
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'reports_to_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_REPORTS_TO_NAME',
        'id' => 'REPORTS_TO_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
      ),
      'employee_status' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPLOYEE_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'employee_status',
      ),
      'title' => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_country' => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
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
