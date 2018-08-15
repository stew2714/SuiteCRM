<?php
$dashletData['m1_Tech_DeploymentsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'recognition_type' => 
  array (
    'default' => '',
  ),
  'virtualization_tools' => 
  array (
    'default' => '',
  ),
  'accounts_m1_tech_deployments_1_name' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['m1_Tech_DeploymentsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'emr_1_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_EMR_1',
    'id' => 'M1_EMR_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'emr_1_c',
  ),
  'curr_fd_version' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CURR_FD_VERSION',
    'width' => '10%',
    'default' => true,
    'name' => 'curr_fd_version',
  ),
  'sso_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SSO_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'sso_type',
  ),
  'accounts_m1_tech_deployments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_M1_TECH_DEPLOYMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_M1_TECH_DEPLOYMENTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'previous_fd_version' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PREVIOUS_FD_VERSION',
    'width' => '10%',
    'default' => false,
    'name' => 'previous_fd_version',
  ),
  'emr_2_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_2',
    'id' => 'M1_EMR_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'emr_2_c',
  ),
  'emr_3_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_3',
    'id' => 'M1_EMR_ID2_C',
    'link' => true,
    'width' => '10%',
    'name' => 'emr_3_c',
  ),
  'auto_update' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_AUTO_UPDATE',
    'width' => '10%',
    'name' => 'auto_update',
  ),
  'amcc_cloud_version' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AMCC_CLOUD_VERSION',
    'width' => '10%',
    'default' => false,
    'name' => 'amcc_cloud_version',
  ),
  'flex' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FLEX',
    'width' => '10%',
    'name' => 'flex',
  ),
  'emr_4_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_4',
    'id' => 'M1_EMR_ID3_C',
    'link' => true,
    'width' => '10%',
    'name' => 'emr_4_c',
  ),
  'emr_5_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_5',
    'id' => 'M1_EMR_ID4_C',
    'link' => true,
    'width' => '10%',
    'name' => 'emr_5_c',
  ),
  'capd' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CAPD',
    'width' => '10%',
    'name' => 'capd',
  ),
  'emr_other_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EMR_OTHER',
    'width' => '10%',
    'name' => 'emr_other_c',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
