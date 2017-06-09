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
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'comment' => '',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'date_timesheet',
            'comment' => '',
            'label' => 'LBL_DATE_TIMESHEET',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'hours_timesheet',
            'label' => 'LBL_HOURS_TIMESHEETS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'additional_notes',
            'comment' => '',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 'date_modified',
        ),
        7 => 
        array (
          0 => 'date_entered',
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
?>
