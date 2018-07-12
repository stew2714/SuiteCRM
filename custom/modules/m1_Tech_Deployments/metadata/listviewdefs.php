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
  'ACCOUNTS_M1_TECH_DEPLOYMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_M1_TECH_DEPLOYMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_M1_TECH_DEPLOYMENTS_1ACCOUNTS_IDA',
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
  'FLEX' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_FLEX',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'CONNECTOR_VERSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONNECTOR_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_MIC' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRIMARY_MIC',
    'width' => '10%',
    'default' => false,
  ),
  'SECONDARY_MIC' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SECONDARY_MIC',
    'width' => '10%',
    'default' => false,
  ),
  'FD_AUTHOR_OID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FD_AUTHOR_OID',
    'width' => '10%',
    'default' => false,
  ),
  'EMR_OTHER_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EMR_OTHER',
    'width' => '10%',
  ),
  'OS_VERSION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_OS_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'CDS_BASE_ENDPOINT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CDS_BASE_ENDPOINT',
    'width' => '10%',
    'default' => false,
  ),
  'WEB_PROXY' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_WEB_PROXY',
    'width' => '10%',
  ),
  'FD_OTHER_CLIENT_DD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FD_OTHER_CLIENT_DD',
    'width' => '10%',
    'default' => false,
  ),
  'FD_CLIENT_SECONDARY_DD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FD_CLIENT_SECONDARY_DD',
    'width' => '10%',
    'default' => false,
  ),
  'FD_CLIENT_PRIMARY_DD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FD_CLIENT_PRIMARY_DD',
    'width' => '10%',
    'default' => false,
  ),
  'CAPD' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CAPD',
    'width' => '10%',
  ),
  'EMR_1_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_1',
    'id' => 'M1_EMR_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'EMR_2_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_2',
    'id' => 'M1_EMR_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'EMR_3_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_3',
    'id' => 'M1_EMR_ID2_C',
    'link' => true,
    'width' => '10%',
  ),
  'EMR_4_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_4',
    'id' => 'M1_EMR_ID3_C',
    'link' => true,
    'width' => '10%',
  ),
  'EMR_5_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_EMR_5',
    'id' => 'M1_EMR_ID4_C',
    'link' => true,
    'width' => '10%',
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
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
);
?>
