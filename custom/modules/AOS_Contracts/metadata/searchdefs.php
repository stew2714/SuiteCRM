<?php
// created: 2020-10-16 16:08:36
$searchdefs['AOS_Contracts'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'customreadonly',
        'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
        'width' => '10%',
        'default' => true,
        'name' => 'agreements_number_and_amendment_c',
      ),
      2 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
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
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'contract_account',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'opportunity',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
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
      4 => 
      array (
        'type' => 'customreadonly',
        'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
        'width' => '10%',
        'default' => true,
        'name' => 'agreements_number_and_amendment_c',
      ),
      5 => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'start_date',
      ),
      6 => 
      array (
        'type' => 'date',
        'label' => 'LBL_END_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'end_date',
      ),
      7 => 
      array (
        'name' => 'total_contract_value',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
        'width' => '10%',
        'name' => 'apttus_status_category_c',
      ),
      9 => 
      array (
        'type' => 'dynamicenum',
        'label' => 'LBL_APTTUS_STATUS_C',
        'width' => '10%',
        'default' => true,
        'name' => 'apttus_status_c',
      ),
      10 => 
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
);