<?php
$module_name = 'sa_Tracking_History';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
          1 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'field',
            'label' => 'LBL_FIELD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'new_value',
            'label' => 'LBL_NEW_VALUE',
          ),
          1 => 
          array (
            'name' => 'previous_value',
            'label' => 'LBL_PREVIOUS_VALUE',
          ),
        ),
      ),
    ),
  ),
);
?>
