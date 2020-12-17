<?php
// created: 2020-10-16 16:08:36
$searchdefs['Campaigns'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
      ),
      1 => 
      array (
        'name' => 'start_date',
        'type' => 'date',
        'displayParams' => 
        array (
          'showFormats' => true,
        ),
        'default' => true,
      ),
      2 => 
      array (
        'name' => 'end_date',
        'type' => 'date',
        'displayParams' => 
        array (
          'showFormats' => true,
        ),
        'default' => true,
      ),
      3 => 
      array (
        'name' => 'status',
        'default' => true,
      ),
      4 => 
      array (
        'name' => 'campaign_type',
        'default' => true,
      ),
      5 => 
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
      ),
    ),
  ),
);