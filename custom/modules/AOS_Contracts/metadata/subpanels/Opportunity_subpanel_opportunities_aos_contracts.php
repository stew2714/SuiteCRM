<?php
// created: 2018-06-21 18:54:31
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'contract_account' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_CONTRACT_ACCOUNT',
    'width' => '15%',
    'default' => true,
  ),
  'total_contract_value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '5%',
    'default' => true,
  ),
  'apttus_request_date_c' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_APTTUS_REQUEST_DATE_C',
    'width' => '10%',
    'default' => true,
  ),
  'apttus_status_category_c' => 
  array (
    'default' => true,
    'type' => 'enum',
    'vname' => 'LBL_APTTUS_STATUS_CATEGORY_C',
    'width' => '10%',
  ),
  'apttus_status_c' => 
  array (
    'type' => 'dynamicenum',
    'vname' => 'LBL_APTTUS_STATUS_C',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AOS_Contracts',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AOS_Contracts',
    'width' => '5%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);