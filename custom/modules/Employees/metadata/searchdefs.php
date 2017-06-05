<?php
$searchdefs ['Employees'] = 
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
        'width' => '10%',
      ),
      'payroll_company_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PAYROLL_COMPANY',
        'width' => '10%',
        'name' => 'payroll_company_c',
      ),
    ),
    'advanced_search' => 
    array (
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
      'employee_status' => 
      array (
        'name' => 'employee_status',
        'default' => true,
        'width' => '10%',
      ),
      'title' => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10%',
      ),
      'work_location_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_WORK_LOCATION',
        'width' => '10%',
        'name' => 'work_location_c',
      ),
      'payroll_company_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PAYROLL_COMPANY',
        'width' => '10%',
        'name' => 'payroll_company_c',
      ),
      'employee_uid_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMPLOYEE_UID',
        'width' => '10%',
        'name' => 'employee_uid_c',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
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
