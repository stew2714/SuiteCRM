<?php
 // created: 2017-06-06 13:56:37
$layout_defs["SA_Legal_Timesheets"]["subpanel_setup"]['sa_legal_timesheets_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_LEGAL_TIMESHEETS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'sa_legal_timesheets_documents_1',
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
