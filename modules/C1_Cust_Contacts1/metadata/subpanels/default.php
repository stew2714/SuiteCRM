<?php
$module_name='C1_Cust_Contacts1';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'People',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'full_name' => 
    array (
      'type' => 'fullname',
      'studio' => 
      array (
        'listview' => false,
      ),
      'vname' => 'LBL_NAME',
      'width' => '10%',
      'default' => true,
    ),
    'title' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TITLE',
      'width' => '10%',
      'default' => true,
    ),
    'email1' => 
    array (
      'name' => 'email1',
      'vname' => 'LBL_LIST_EMAIL',
      'widget_class' => 'SubPanelEmailLink',
      'width' => '35%',
      'sortable' => false,
      'default' => true,
    ),
    'contact_type' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_CONTACT_TYPE',
      'width' => '10%',
      'default' => true,
    ),
    'contact_association' => 
    array (
      'type' => 'multienum',
      'studio' => 'visible',
      'vname' => 'LBL_CONTACT_ASSOCIATION',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Contacts',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Contacts',
      'width' => '5%',
      'default' => true,
    ),
    'first_name' => 
    array (
      'name' => 'first_name',
      'usage' => 'query_only',
    ),
    'last_name' => 
    array (
      'name' => 'last_name',
      'usage' => 'query_only',
    ),
    'salutation' => 
    array (
      'name' => 'salutation',
      'usage' => 'query_only',
    ),
  ),
);