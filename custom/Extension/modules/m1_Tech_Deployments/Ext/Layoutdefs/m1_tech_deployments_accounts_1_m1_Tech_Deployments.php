<?php
 // created: 2018-05-07 21:26:46
$layout_defs["m1_Tech_Deployments"]["subpanel_setup"]['m1_tech_deployments_accounts_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_M1_TECH_DEPLOYMENTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'm1_tech_deployments_accounts_1',
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
