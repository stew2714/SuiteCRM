<?php
 // created: 2016-05-12 12:57:23
$layout_defs["A4_SITES"]["subpanel_setup"]['a4_sites_meetings_1'] = array (
  'order' => 100,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A4_SITES_MEETINGS_1_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'a4_sites_meetings_1',
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
