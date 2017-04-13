<?php
$popupMeta = array (
    'moduleMain' => 'A4_SITE_ROLES',
    'varName' => 'A4_SITE_ROLES',
    'orderBy' => 'a4_site_roles.name',
    'whereClauses' => array (
  'name' => 'a4_site_roles.name',
),
    'searchInputs' => array (
  0 => 'a4_site_roles_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'A4_ROLES_A4_SITE_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
    'id' => 'A4_ROLES_A4_SITE_ROLES_1A4_ROLES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'a4_roles_a4_site_roles_1_name',
  ),
  'A4_SITES_A4_SITE_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
    'id' => 'A4_SITES_A4_SITE_ROLES_1A4_SITES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'a4_sites_a4_site_roles_1_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'ACTIVE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
    'name' => 'active_c',
  ),
),
);
