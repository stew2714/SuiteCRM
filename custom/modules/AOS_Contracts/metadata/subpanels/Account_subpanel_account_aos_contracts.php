<?php
// created: 2018-06-25 11:45:54
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'agreements_number_and_amendment_c' => 
  array (
    'vname' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
    'type' => 'varchar',
    'width' => '25%',
    'default' => true,
  ),
  'contract_account' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_CONTRACT_ACCOUNT',
    'width' => '20%',
    'default' => true,
  ),
  'total_contract_value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '15%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_STATUS',
    'width' => '15%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '15%',
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