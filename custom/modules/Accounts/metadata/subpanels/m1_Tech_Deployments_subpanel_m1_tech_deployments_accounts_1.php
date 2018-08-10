<?php
// created: 2018-06-25 17:07:00
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
  'ucid_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'UCID',
    'width' => '10%',
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
  'billing_address_city' => 
  array (
    'vname' => 'LBL_LIST_CITY',
    'width' => '20%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
    'width' => '4%',
    'default' => true,
  ),
);