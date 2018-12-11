<?php
$module_name = 'm1_Tech_Deployments';
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
      'virtualization_tools' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_VIRTUALIZATION_TOOLS',
        'width' => '10%',
        'default' => true,
        'name' => 'virtualization_tools',
      ),
      'recognition_type' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RECOGNITION_TYPE',
        'width' => '10%',
        'name' => 'recognition_type',
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
      'emr_2_c' => 
      array (
        'type' => 'relate',
        'default' => true,
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
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EMR_3',
        'id' => 'M1_EMR_ID2_C',
        'link' => true,
        'width' => '10%',
        'name' => 'emr_3_c',
      ),
      'emr_4_c' => 
      array (
        'type' => 'relate',
        'default' => true,
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
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EMR_5',
        'id' => 'M1_EMR_ID4_C',
        'link' => true,
        'width' => '10%',
        'name' => 'emr_5_c',
      ),
      'emr_other_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMR_OTHER',
        'width' => '10%',
        'name' => 'emr_other_c',
      ),
      'current_fd_version_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CURRENT_FD_VERSION',
        'id' => 'FDV_FD_VERSIONS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'current_fd_version_c',
      ),
      'prev_fd_version_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PREV_FD_VERSION',
        'id' => 'FDV_FD_VERSIONS_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'prev_fd_version_c',
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
