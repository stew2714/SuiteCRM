<?php
 // created: 2016-05-10 20:11:47
$layout_defs["Accounts"]["subpanel_setup"]['accounts_a4_prods_and_servs_1'] = array (
  'order' => 100,
  'module' => 'A4_PRODS_AND_SERVS',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_A4_PRODS_AND_SERVS_1_FROM_A4_PRODS_AND_SERVS_TITLE',
  'get_subpanel_data' => 'accounts_a4_prods_and_servs_1',
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
