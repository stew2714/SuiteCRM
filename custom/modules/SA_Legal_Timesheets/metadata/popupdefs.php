<?php
$popupMeta = array (
    'moduleMain' => 'SA_Legal_Timesheets',
    'varName' => 'SA_Legal_Timesheets',
    'orderBy' => 'sa_legal_timesheets.name',
    'whereClauses' => array (
  'name' => 'sa_legal_timesheets.name',
  'entry_id' => 'sa_legal_timesheets.entry_id',
  'category' => 'sa_legal_timesheets.category',
  'assigned_user_id' => 'sa_legal_timesheets.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'entry_id',
  5 => 'category',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'entry_id' => 
  array (
    'type' => 'int',
    'studio' => 
    array (
      'quickcreate' => false,
    ),
    'label' => 'LBL_ENTRY_ID',
    'width' => '10%',
    'name' => 'entry_id',
  ),
  'category' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
    'name' => 'category',
  ),
  'name' => 
  array (
    'name' => 'name',
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
    'width' => '10%',
  ),
),
);
