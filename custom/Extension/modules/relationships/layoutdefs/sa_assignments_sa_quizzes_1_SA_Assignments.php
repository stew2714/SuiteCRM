<?php
 // created: 2017-04-13 09:17:31
$layout_defs["SA_Assignments"]["subpanel_setup"]['sa_assignments_sa_quizzes_1'] = array (
  'order' => 100,
  'module' => 'SA_Quizzes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_ASSIGNMENTS_SA_QUIZZES_1_FROM_SA_QUIZZES_TITLE',
  'get_subpanel_data' => 'sa_assignments_sa_quizzes_1',
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
