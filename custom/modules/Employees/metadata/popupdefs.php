<?php
$popupMeta = array (
    'moduleMain' => 'Employees',
    'varName' => 'Employee',
    'orderBy' => 'employees.first_name, employees.last_name',
    'whereClauses' => array (
  'first_name' => 'employees.first_name',
  'last_name' => 'employees.last_name',
  'employee_status' => 'employees.employee_status',
  'title' => 'employees.title',
  'department' => 'employees.department',
  'work_location_c' => 'employees_cstm.work_location_c',
  'payroll_company_c' => 'employees_cstm.payroll_company_c',
  'employee_uid_c' => 'employees_cstm.employee_uid_c',
  'email' => 'employees.email',
  'address_country' => 'employees.address_country',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'employee_status',
  3 => 'title',
  4 => 'department',
  5 => 'work_location_c',
  6 => 'payroll_company_c',
  7 => 'employee_uid_c',
  8 => 'email',
  9 => 'address_country',
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
  'employee_status' => 
  array (
    'name' => 'employee_status',
    'width' => '10%',
  ),
  'title' => 
  array (
    'name' => 'title',
    'width' => '10%',
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'name' => 'department',
  ),
  'work_location_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WORK_LOCATION',
    'width' => '10%',
    'name' => 'work_location_c',
  ),
  'payroll_company_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYROLL_COMPANY',
    'width' => '10%',
    'name' => 'payroll_company_c',
  ),
  'employee_uid_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_UID',
    'width' => '10%',
    'name' => 'employee_uid_c',
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
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
