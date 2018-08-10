<?php
$module_name = 'sa_Tracking_History';
$listViewDefs [$module_name] = 
array (
  'PARENT_TYPE' => 
  array (
    'type' => 'parent_type',
    'studio' => 
    array (
      'searchview' => false,
    ),
    'label' => 'LBL_PARENT_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'FIELD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIELD',
    'width' => '10%',
    'default' => true,
  ),
  'SF_PARENT_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SF_PARENT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SF_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SF_ID',
    'width' => '10%',
    'default' => true,
  ),
  'PREVIOUS_VALUE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PREVIOUS_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'NEW_VALUE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEW_VALUE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'ADDITIONALUSERS' => 
  array (
    'type' => 'additionalusers',
    'sortable' => false,
    'studio' => 
    array (
      'visible' => false,
      'listview' => true,
      'searchview' => false,
      'detailview' => true,
      'editview' => true,
      'formula' => false,
      'related' => false,
      'basic_search' => false,
      'advanced_search' => false,
      'popuplist' => true,
      'popupsearch' => false,
      'dashletsearch' => false,
      'dashlet' => true,
    ),
    'label' => 'LBL_ADDITIONALUSERS',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'SECURITYGROUP_DISPLAY' => 
  array (
    'type' => 'function',
    'sortable' => false,
    'studio' => 
    array (
      'visible' => false,
      'listview' => true,
      'searchview' => false,
      'detailview' => true,
      'editview' => true,
      'formula' => false,
      'related' => false,
      'basic_search' => false,
      'advanced_search' => false,
      'popuplist' => true,
      'popupsearch' => false,
      'dashletsearch' => false,
      'dashlet' => false,
    ),
    'label' => 'LBL_SECURITYGROUP',
    'width' => '10%',
    'default' => false,
  ),
);
?>
