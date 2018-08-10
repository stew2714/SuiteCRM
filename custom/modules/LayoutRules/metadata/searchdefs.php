<?php
$module_name = 'LayoutRules';
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
      'flow_module' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FLOW_MODULE',
        'width' => '10%',
        'name' => 'flow_module',
      ),
      'securitygroup' => 
      array (
        'type' => 'enum',
        'default' => true,
        'sortable' => false,
        'studio' => 
        array (
          'visible' => false,
          'listview' => false,
          'searchview' => true,
          'detailview' => false,
          'editview' => false,
          'formula' => false,
          'related' => false,
          'basic_search' => true,
          'advanced_search' => true,
          'popuplist' => false,
          'popupsearch' => true,
          'dashletsearch' => true,
          'dashlet' => false,
        ),
        'label' => 'LBL_SECURITYGROUP',
        'width' => '10%',
        'name' => 'securitygroup',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'group_to_assign' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GROUP_TO_ASSIGN',
        'width' => '10%',
        'name' => 'group_to_assign',
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
