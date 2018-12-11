<?php
$popupMeta = array (
    'moduleMain' => 'FDV_FD_Versions',
    'varName' => 'FDV_FD_Versions',
    'orderBy' => 'fdv_fd_versions.name',
    'whereClauses' => array (
  'name' => 'fdv_fd_versions.name',
),
    'searchInputs' => array (
  0 => 'fdv_fd_versions_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
),
);
