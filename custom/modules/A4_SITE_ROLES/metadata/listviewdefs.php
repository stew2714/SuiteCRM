<?php
$module_name = 'A4_SITE_ROLES';
$listViewDefs [$module_name] = 
array (
  'A4_ROLES_A4_SITE_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
    'id' => 'A4_ROLES_A4_SITE_ROLES_1A4_ROLES_IDA',
    'width' => '30%',
    'default' => true,
  ),
  'A4_SITES_A4_SITE_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
    'id' => 'A4_SITES_A4_SITE_ROLES_1A4_SITES_IDA',
    'width' => '30%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ACTIVE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
);
?>
