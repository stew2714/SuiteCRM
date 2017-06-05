<?php
$module_name = 'A4_PRODS_AND_SERVS';
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
          0 => 
          array (
            'name' => 'ps_type',
            'studio' => 'visible',
            'label' => 'LBL_PS_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_a4_prods_and_servs_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
