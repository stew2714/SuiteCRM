<?php
$module_name = 'A4_SITE_ROLES';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
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
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'a4_sites_a4_site_roles_1_name',
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
