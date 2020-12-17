<?php
// created: 2020-10-16 16:08:37
$searchdefs['Users'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
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
      1 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_REPORTS_TO_NAME',
        'id' => 'REPORTS_TO_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPLOYEE_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'employee_status',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DEPARTMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'department',
      ),
      6 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PAYROLL_COMPANY',
        'width' => '10%',
        'name' => 'payroll_company_c',
      ),
      7 => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      11 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      12 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      13 => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
);