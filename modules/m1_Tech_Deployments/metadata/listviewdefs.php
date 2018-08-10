<?php
$module_name = 'm1_Tech_Deployments';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RECOGNITION_TYPE' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RECOGNITION_TYPE',
    'width' => '10%',
  ),
  'VIRTUALIZATION_TOOLS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VIRTUALIZATION_TOOLS',
    'width' => '10%',
    'default' => true,
  ),
  'EMR_FD' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_EMR_FD',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMARY_EMR' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRIMARY_EMR',
    'width' => '10%',
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
    'default' => true,
  ),
  'FLEX' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FLEX',
    'width' => '10%',
  ),
  'CONNECTOR_VERSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONNECTOR_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'AMCC_CLOUD_VERSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AMCC_CLOUD_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'CURR_FD_VERSION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CURR_FD_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'SSO_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SSO_TYPE',
    'width' => '10%',
    'default' => false,
  ),
  'PREVIOUS_FD_VERSION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PREVIOUS_FD_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'OTHER_DEVICES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OTHER_DEVICES',
    'width' => '10%',
    'default' => false,
  ),
  'AUTO_UPDATE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_AUTO_UPDATE',
    'width' => '10%',
  ),
  'ACCOUNT_ENDPOINT_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_ENDPOINT_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'EMR_HOSTED_BY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMR_HOSTED_BY',
    'width' => '10%',
    'default' => false,
  ),
);
?>
