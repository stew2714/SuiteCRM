<?php
$module_name = 'SA_Legal_Timesheets';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
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
        2 => 
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
            'label' => 'LBL_NOTES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
