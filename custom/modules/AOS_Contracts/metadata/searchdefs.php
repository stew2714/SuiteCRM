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
        'width' => '10%',
      ),
      'agreements_number_and_amendment_c' => 
      array (
        'type' => 'customreadonly',
        'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
        'width' => '10%',
        'default' => true,
        'name' => 'agreements_number_and_amendment_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
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
      'apttus_requestor_name_c' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_APTTUS_REQUESTOR_NAME_C',
        'id' => 'ONEAPTTUS_REQUESTOR_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'apttus_requestor_name_c',
      ),
      'agreements_number_and_amendment_c' => 
      array (
        'type' => 'customreadonly',
        'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
        'width' => '10%',
        'default' => true,
        'name' => 'agreements_number_and_amendment_c',
      ),
      'start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'start_date',
      ),
      'end_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_END_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'end_date',
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
