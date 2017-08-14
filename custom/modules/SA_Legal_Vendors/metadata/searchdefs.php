<?php
$module_name = 'SA_Legal_Vendors';
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
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'vendor_contract_id' => 
      array (
        'type' => 'int',
        'studio' => 
        array (
          'quickcreate' => false,
        ),
        'label' => 'LBL_VENDOR_CONTRACT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'vendor_contract_id',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'does_vendor_access_phi' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DOES_VENDOR_ACCESS_PHI',
        'width' => '10%',
        'default' => true,
        'name' => 'does_vendor_access_phi',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'business_unit' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_BUSINESS_UNIT',
        'width' => '10%',
        'default' => true,
        'name' => 'business_unit',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'users_sa_legal_vendors_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_USERS_TITLE',
        'id' => 'USERS_SA_LEGAL_VENDORS_1USERS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'users_sa_legal_vendors_1_name',
      ),
      'request_closed_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_REQUEST_CLOSED_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'request_closed_date',
      ),
      'initial_request_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_INITIAL_REQUEST_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'initial_request_date',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
