<?php
$popupMeta = array (
    'moduleMain' => 'User',
    'varName' => 'USER',
    'orderBy' => 'user_name',
    'whereClauses' => array (
  'first_name' => 'users.first_name',
  'last_name' => 'users.last_name',
  'user_name' => 'users.user_name',
  'reports_to_name' => 'users.reports_to_name',
  'employee_status' => 'users.employee_status',
  'title' => 'users.title',
  'phone' => 'users.phone',
  'address_street' => 'users.address_street',
  'email' => 'users.email',
  'address_city' => 'users.address_city',
  'address_state' => 'users.address_state',
  'address_country' => 'users.address_country',
  'department' => 'users.department',
  'payroll_company_c' => 'users_cstm.payroll_company_c',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'user_name',
  4 => 'reports_to_name',
  5 => 'employee_status',
  7 => 'title',
  9 => 'phone',
  10 => 'address_street',
  11 => 'email',
  12 => 'address_city',
  13 => 'address_state',
  15 => 'address_country',
  16 => 'department',
  17 => 'payroll_company_c',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'user_name' => 
  array (
    'name' => 'user_name',
    'width' => '10%',
  ),
  'reports_to_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_REPORTS_TO_NAME',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'name' => 'reports_to_name',
  ),
  'employee_status' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_STATUS',
    'width' => '10%',
    'name' => 'employee_status',
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'name' => 'department',
  ),
  'payroll_company_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYROLL_COMPANY',
    'width' => '10%',
    'name' => 'payroll_company_c',
  ),
  'title' => 
  array (
    'name' => 'title',
    'width' => '10%',
  ),
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_city' => 
  array (
    'name' => 'address_city',
    'label' => 'LBL_CITY',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'name' => 'address_state',
    'label' => 'LBL_STATE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_country' => 
  array (
    'name' => 'address_country',
    'label' => 'LBL_COUNTRY',
    'type' => 'name',
    'width' => '10%',
  ),
),
);
