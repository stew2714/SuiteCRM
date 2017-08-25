<?php
// created: 2017-08-25 12:37:08
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'billing_address_city' => 
  array (
    'vname' => 'LBL_LIST_CITY',
    'width' => '20%',
    'default' => true,
  ),
  'billing_address_country' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'width' => '7%',
    'default' => true,
  ),
  'phone_office' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => '20%',
    'default' => true,
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'width' => '4%',
    'default' => true,
  ),
  'close_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
    'width' => '4%',
    'default' => true,
  ),
);