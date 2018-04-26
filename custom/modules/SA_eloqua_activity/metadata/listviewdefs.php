<?php
$module_name = 'SA_eloqua_activity';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CAMPAIGN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CAMPAIGN_ID',
    'id' => 'CAMPAIGN_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVITY_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_ACTIVITY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL_ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVITY_TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_ACTIVITY_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVITY_LINK' => 
  array (
    'type' => 'url',
    'label' => 'LBL_ACTIVITY_LINK',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
