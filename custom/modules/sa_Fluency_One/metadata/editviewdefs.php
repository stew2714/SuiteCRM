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
            'name' => 'requester_user_id',
            'label' => 'LBL_SA_FLUENCY_ONE_REQUESTER_USER_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'request_submit_date_c',
            'label' => 'LBL_REQUEST_SUBMIT_DATE_C',
          ),
          1 => 
          array (
            'name' => 'accounts_sa_fluency_one_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
