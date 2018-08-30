<?php
$searchdefs ['Accounts'] = 
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
        'width' => '10%',
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
      'facility_type_dd_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FACILITY_TYPE_DD',
        'width' => '10%',
        'name' => 'facility_type_dd_c',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      'sales_region_c' => 
      array (
        'type' => 'varchar',
        'label' => 'Sales Region',
        'width' => '10%',
        'default' => true,
        'name' => 'sales_region_c',
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
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
      'ucid_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_UCID',
        'width' => '10%',
        'name' => 'ucid_c',
      ),
      'zba_sss_c' => 
      array (
        'type' => 'varchar',
        'label' => 'ZBA SSS',
        'width' => '10%',
        'default' => true,
        'name' => 'zba_sss_c',
      ),
      'sales_territory_c' => 
      array (
        'type' => 'varchar',
        'label' => 'Sales Territory',
        'width' => '10%',
        'default' => true,
        'name' => 'sales_territory_c',
      ),
      'himss_id_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_HIMSS_ID',
        'width' => '10%',
        'name' => 'himss_id_c',
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
