<?php
// created: 2018-10-02 14:10:46
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
    'type' => 'customreadonly',
    'vname' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
    'width' => '10%',
    'default' => true,
  ),
  'contract_account' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_CONTRACT_ACCOUNT',
    'width' => '20%',
    'default' => true,
  ),
  'apttus_status_category_c' => 
  array (
    'type' => 'enum',
    'default' => true,
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
  'total_contract_value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '15%',
    'default' => true,
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