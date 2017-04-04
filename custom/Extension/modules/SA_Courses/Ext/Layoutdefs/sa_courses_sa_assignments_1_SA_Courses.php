<?php
 // created: 2017-04-04 10:15:36
$layout_defs["SA_Courses"]["subpanel_setup"]['sa_courses_sa_assignments_1'] = array (
  'order' => 100,
  'module' => 'SA_Assignments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_COURSES_SA_ASSIGNMENTS_1_FROM_SA_ASSIGNMENTS_TITLE',
  'get_subpanel_data' => 'sa_courses_sa_assignments_1',
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
