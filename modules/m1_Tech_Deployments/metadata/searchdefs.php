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
      'curr_fd_version' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CURR_FD_VERSION',
        'width' => '10%',
        'default' => true,
        'name' => 'curr_fd_version',
      ),
      'previous_fd_version' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PREVIOUS_FD_VERSION',
        'width' => '10%',
        'default' => true,
        'name' => 'previous_fd_version',
      ),
      'emr_fd' => 
      array (
        'type' => 'multienum',
        'studio' => 'visible',
        'label' => 'LBL_EMR_FD',
        'width' => '10%',
        'default' => true,
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
