<?php
// created: 2020-09-03 14:48:17
$searchdefs['Employees'] = array (
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
        'width' => '10%',
      ),
      1 => 
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
      0 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'employee_status',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_WORK_LOCATION',
        'width' => '10%',
        'name' => 'work_location_c',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PAYROLL_COMPANY',
        'width' => '10%',
        'name' => 'payroll_company_c',
      ),
      6 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMPLOYEE_UID',
        'width' => '10%',
        'name' => 'employee_uid_c',
      ),
      7 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
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