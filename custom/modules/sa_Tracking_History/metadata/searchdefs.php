<?php
$module_name = 'sa_Tracking_History';
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
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'link' => true,
        'sortable' => false,
        'ACLTag' => 'PARENT',
        'dynamic_module' => 'PARENT_TYPE',
        'id' => 'PARENT_ID',
        'related_fields' => 
        array (
          0 => 'parent_id',
          1 => 'parent_type',
        ),
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'field' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIELD',
        'width' => '10%',
        'default' => true,
        'name' => 'field',
      ),
      'previous_value' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PREVIOUS_VALUE',
        'width' => '10%',
        'default' => true,
        'name' => 'previous_value',
      ),
      'new_value' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NEW_VALUE',
        'width' => '10%',
        'default' => true,
        'name' => 'new_value',
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
