<?php
$module_name = 'A4_SITES';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'parent' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARENT',
        'width' => '10%',
        'default' => true,
        'name' => 'parent',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ucid' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_UCID',
        'width' => '10%',
        'default' => true,
        'name' => 'ucid',
      ),
      'platform' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PLATFORM',
        'width' => '10%',
        'default' => true,
        'name' => 'platform',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
      'parent' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARENT',
        'width' => '10%',
        'default' => true,
        'name' => 'parent',
      ),
      'platform' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PLATFORM',
        'width' => '10%',
        'default' => true,
        'name' => 'platform',
      ),
      'ucid' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_UCID',
        'width' => '10%',
        'default' => true,
        'name' => 'ucid',
      ),
      'definitive_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DEFINITIVE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'definitive_id',
      ),
      'himss_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_HIMSS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'himss_id',
      ),
      'cc_region' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CC_REGION',
        'width' => '10%',
        'default' => true,
        'name' => 'cc_region',
      ),
      'tier' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TIER',
        'width' => '10%',
        'default' => true,
        'name' => 'tier',
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
