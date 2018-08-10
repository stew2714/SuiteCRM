<?php
 // created: 2017-07-25 15:08:14
$layout_defs["g1_Group_Queue"]["subpanel_setup"]['g1_group_queue_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_G1_GROUP_QUEUE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'g1_group_queue_accounts',
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
