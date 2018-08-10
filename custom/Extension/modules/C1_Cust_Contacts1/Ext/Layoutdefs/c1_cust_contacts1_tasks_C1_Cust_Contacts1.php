<?php
 // created: 2017-06-14 15:28:26
$layout_defs["C1_Cust_Contacts1"]["subpanel_setup"]['c1_cust_contacts1_tasks'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_C1_CUST_CONTACTS1_TASKS_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'c1_cust_contacts1_tasks',
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
