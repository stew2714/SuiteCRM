<?php
 // created: 2017-04-04 10:13:21
$layout_defs["SA_Curriculum"]["subpanel_setup"]['sa_curriculum_sa_courses_1'] = array (
  'order' => 100,
  'module' => 'SA_Courses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_CURRICULUM_SA_COURSES_1_FROM_SA_COURSES_TITLE',
  'get_subpanel_data' => 'sa_curriculum_sa_courses_1',
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
