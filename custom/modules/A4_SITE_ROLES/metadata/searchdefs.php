<?php
$module_name = 'A4_SITE_ROLES';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'a4_sites_a4_site_roles_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'A4_SITES_A4_SITE_ROLES_1A4_SITES_IDA',
        'name' => 'a4_sites_a4_site_roles_1_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
      ),
      'a4_roles_a4_site_roles_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'A4_ROLES_A4_SITE_ROLES_1A4_ROLES_IDA',
        'name' => 'a4_roles_a4_site_roles_1_name',
      ),
      'active_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIVE',
        'width' => '10%',
        'name' => 'active_c',
      ),
    ),
    'advanced_search' => 
    array (
      'a4_roles_a4_site_roles_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
        'id' => 'A4_ROLES_A4_SITE_ROLES_1A4_ROLES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'a4_roles_a4_site_roles_1_name',
      ),
      'a4_sites_a4_site_roles_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
        'id' => 'A4_SITES_A4_SITE_ROLES_1A4_SITES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'a4_sites_a4_site_roles_1_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
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
      'active_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIVE',
        'width' => '10%',
        'name' => 'active_c',
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
