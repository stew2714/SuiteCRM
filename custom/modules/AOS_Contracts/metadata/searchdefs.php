<?php
$module_name = 'AOS_Contracts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
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
      'contract_account' => 
      array (
        'name' => 'contract_account',
        'default' => true,
        'width' => '10%',
      ),
      'opportunity' => 
      array (
        'name' => 'opportunity',
        'default' => true,
        'width' => '10%',
      ),
      'start_date' => 
      array (
        'name' => 'start_date',
        'default' => true,
        'width' => '10%',
      ),
      'end_date' => 
      array (
        'name' => 'end_date',
        'default' => true,
        'width' => '10%',
      ),
      'total_contract_value' => 
      array (
        'name' => 'total_contract_value',
        'default' => true,
        'width' => '10%',
      ),
      'apttus_status_category_c' => 
      array (
        'default' => true,
        'type' => 'enum',
        'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
        'width' => '10%',
        'name' => 'apttus_status_category_c',
      ),
      'apttus_status_c' => 
      array (
        'type' => 'dynamicenum',
        'label' => 'LBL_APTTUS_STATUS_C',
        'width' => '10%',
        'default' => true,
        'name' => 'apttus_status_c',
      ),
      'contract_type' => 
      array (
        'name' => 'contract_type',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO_NAME',
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
