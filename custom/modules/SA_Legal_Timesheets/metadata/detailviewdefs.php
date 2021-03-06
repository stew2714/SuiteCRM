<?php
$module_name = 'SA_Legal_Timesheets';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          1 => 
          array (
            'name' => 'category_c',
            'comment' => '',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'agreement_c',
            'comment' => '',
            'label' => 'LBL_AGREEMENT',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_c',
            'comment' => '',
            'label' => 'LBL_DATE',
          ),
          1 => 
          array (
            'name' => 'lastactivitydate_c',
            'comment' => '',
            'label' => 'LBL_LAST_ACTIVITY_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'hours_c',
            'label' => 'LBL_HOURS',
          ),
          1 => 
          array (
            'name' => 'date2_c',
            'comment' => '',
            'label' => 'LBL_DATE2',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'additional_notes_c',
            'comment' => '',
            'label' => 'LBL_ADDITIONAL_NOTES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_legal_timesheets_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
