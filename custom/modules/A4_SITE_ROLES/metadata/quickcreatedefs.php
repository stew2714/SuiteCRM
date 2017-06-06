<?php
$module_name = 'A4_SITE_ROLES';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'a4_roles_a4_site_roles_1_name',
            'label' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'a4_sites_a4_site_roles_1_name',
            'label' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
          ),
          1 => 
          array (
            'name' => 'active_c',
            'label' => 'LBL_ACTIVE',
          ),
        ),
      ),
    ),
  ),
);
?>
