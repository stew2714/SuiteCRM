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
          0 => 
          array (
            'name' => 'entry_id',
            'comment' => 'Visual unique identifier',
            'studio' => 
            array (
              'quickcreate' => false,
            ),
            'label' => 'LBL_ENTRY_ID',
          ),
          1 => 
          array (
            'name' => 'category_c',
            'comment' => '',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'agreement_c',
            'comment' => '',
            'label' => 'LBL_AGREEMENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'comment' => '',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_timesheet',
            'comment' => '',
            'label' => 'LBL_DATE_TIMESHEET',
          ),
          1 => '',
        ),
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'additional_notes_c',
            'comment' => '',
            'label' => 'LBL_ADDITIONAL_NOTES',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'hours_timesheet',
            'label' => 'LBL_HOURS_TIMESHEETS',
          ),
          1 => 
          array (
            'name' => 'additional_notes',
            'comment' => '',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        9 => 
        array (
          0 => 'date_modified',
          1 => 'date_entered',
        ),
      ),
    ),
  ),
);
?>
