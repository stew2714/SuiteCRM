<?php
 // created: 2017-06-06 14:09:59
$layout_defs["SA_Legal_Vendors"]["subpanel_setup"]['sa_legal_vendors_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_LEGAL_VENDORS_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'sa_legal_vendors_notes_1',
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
