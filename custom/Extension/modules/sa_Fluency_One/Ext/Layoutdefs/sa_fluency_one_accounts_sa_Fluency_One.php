<?php
 // created: 2017-06-05 10:23:52
$layout_defs["sa_Fluency_One"]["subpanel_setup"]['sa_fluency_one_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_FLUENCY_ONE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'sa_fluency_one_accounts',
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
