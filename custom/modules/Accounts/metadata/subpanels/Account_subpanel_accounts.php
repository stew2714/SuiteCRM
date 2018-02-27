<?php
// created: 2018-02-23 21:29:46
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'parent_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'parent_id',
  ),
  'ucid_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_UCID',
    'width' => '10%',
  ),
  'facility_type_dd_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FACILITY_TYPE_DD',
    'width' => '10%',
  ),
  'himss_id_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_HIMSS_ID',
    'width' => '10%',
  ),
  'defintive_id_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DEFINTIVE_ID',
    'width' => '10%',
  ),
  'ehr_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'EHR',
    'width' => '10%',
    'default' => true,
  ),
  'billing_address_city' => 
  array (
    'vname' => 'LBL_LIST_CITY',
    'width' => '20%',
    'default' => true,
  ),
  'billing_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BILLING_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
  ),
);