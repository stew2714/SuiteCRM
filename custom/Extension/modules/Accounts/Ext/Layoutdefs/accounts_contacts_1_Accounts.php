<?php
 // created: 2017-08-25 12:35:24
$layout_defs["Accounts"]["subpanel_setup"]['accounts_contacts_1'] = array (
  'order' => 4,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'accounts_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
