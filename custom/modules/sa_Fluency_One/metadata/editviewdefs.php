<?php
$module_name = 'sa_Fluency_One';
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
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_sa_fluency_one_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'requested_user_id',
            'label' => 'LBL_REQUESTED_USER_ID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_security_group_id',
            'label' => 'LBL_ASSIGNED_SECURITY_GROUP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_requested_c',
            'label' => 'LBL_DATE_REQUESTED_C',
          ),
        ),
      ),
    ),
  ),
);
?>
