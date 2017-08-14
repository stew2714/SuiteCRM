<?php
 // created: 2017-06-06 14:11:38
$layout_defs["Users"]["subpanel_setup"]['users_sa_legal_vendors_1'] = array (
  'order' => 100,
  'module' => 'SA_Legal_Vendors',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_SA_LEGAL_VENDORS_TITLE',
  'get_subpanel_data' => 'users_sa_legal_vendors_1',
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
