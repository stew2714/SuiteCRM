<?php
// created: 2020-09-03 14:48:17
$searchdefs['Accounts'] = array (
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
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
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
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FACILITY_TYPE_DD',
        'width' => '10%',
        'name' => 'facility_type_dd_c',
      ),
      2 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'label' => 'Sales Region',
        'width' => '10%',
        'default' => true,
        'name' => 'sales_region_c',
      ),
      6 => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      7 => 
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
      8 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_UCID',
        'width' => '10%',
        'name' => 'ucid_c',
      ),
      9 => 
      array (
        'type' => 'varchar',
        'label' => 'ZBA SSS',
        'width' => '10%',
        'default' => true,
        'name' => 'zba_sss_c',
      ),
      10 => 
      array (
        'type' => 'varchar',
        'label' => 'Sales Territory',
        'width' => '10%',
        'default' => true,
        'name' => 'sales_territory_c',
      ),
      11 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_HIMSS_ID',
        'width' => '10%',
        'name' => 'himss_id_c',
      ),
      12 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DEFINTIVE_ID',
        'width' => '10%',
        'name' => 'defintive_id_c',
      ),
    ),
  ),
);