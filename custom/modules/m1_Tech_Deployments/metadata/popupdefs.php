<?php
$popupMeta = array (
    'moduleMain' => 'm1_Tech_Deployments',
    'varName' => 'm1_Tech_Deployments',
    'orderBy' => 'm1_tech_deployments.name',
    'whereClauses' => array (
  'name' => 'm1_tech_deployments.name',
  'virtualization_tools' => 'm1_tech_deployments.virtualization_tools',
  'recognition_type' => 'm1_tech_deployments.recognition_type',
  'curr_fd_version' => 'm1_tech_deployments.curr_fd_version',
  'previous_fd_version' => 'm1_tech_deployments.previous_fd_version',
  'accounts_m1_tech_deployments_1_name' => 'm1_tech_deployments.accounts_m1_tech_deployments_1_name',
  'emr_fd' => 'm1_tech_deployments.emr_fd',
  'assigned_user_id' => 'm1_tech_deployments.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'virtualization_tools',
  5 => 'recognition_type',
  6 => 'curr_fd_version',
  7 => 'previous_fd_version',
  8 => 'accounts_m1_tech_deployments_1_name',
  9 => 'emr_fd',
  10 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'virtualization_tools' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_VIRTUALIZATION_TOOLS',
    'width' => '10%',
    'name' => 'virtualization_tools',
  ),
  'recognition_type' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_RECOGNITION_TYPE',
    'width' => '10%',
    'name' => 'recognition_type',
  ),
  'curr_fd_version' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CURR_FD_VERSION',
    'width' => '10%',
    'name' => 'curr_fd_version',
  ),
  'previous_fd_version' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PREVIOUS_FD_VERSION',
    'width' => '10%',
    'name' => 'previous_fd_version',
  ),
  'accounts_m1_tech_deployments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_M1_TECH_DEPLOYMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_M1_TECH_DEPLOYMENTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'accounts_m1_tech_deployments_1_name',
  ),
  'emr_fd' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_EMR_FD',
    'width' => '10%',
    'name' => 'emr_fd',
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
