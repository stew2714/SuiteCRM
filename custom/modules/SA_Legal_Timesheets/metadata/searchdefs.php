<?php
$module_name = 'SA_Legal_Timesheets';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'additional_notes' => 
      array (
        'type' => 'text',
        'label' => 'LBL_NOTES',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'additional_notes',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'date_timesheet' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_DATE_TIMESHEET',
        'width' => '10%',
        'default' => true,
        'name' => 'date_timesheet',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'hours_timesheet' => 
      array (
        'type' => 'float',
        'label' => 'LBL_HOURS_TIMESHEETS',
        'width' => '10%',
        'default' => true,
        'name' => 'hours_timesheet',
      ),
      'entry_id' => 
      array (
        'type' => 'int',
        'studio' => 
        array (
          'quickcreate' => false,
        ),
        'label' => 'LBL_ENTRY_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'entry_id',
      ),
      'category' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'category',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
