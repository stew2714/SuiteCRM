<?php
 // created: 2016-05-12 12:56:15
$layout_defs["A4_SITES"]["subpanel_setup"]['a4_sites_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A4_SITES_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'a4_sites_notes_1',
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