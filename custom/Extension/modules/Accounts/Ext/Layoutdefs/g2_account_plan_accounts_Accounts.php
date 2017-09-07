<?php
 // created: 2017-09-07 13:04:44
$layout_defs["Accounts"]["subpanel_setup"]['g2_account_plan_accounts'] = array (
  'order' => 100,
  'module' => 'g2_Account_Plan',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_G2_ACCOUNT_PLAN_ACCOUNTS_FROM_G2_ACCOUNT_PLAN_TITLE',
  'get_subpanel_data' => 'g2_account_plan_accounts',
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
