<?php
 // created: 2017-04-12 14:29:57
$layout_defs["SA_Quizzes"]["subpanel_setup"]['sa_quizzes_sa_quizanswers_1'] = array (
  'order' => 100,
  'module' => 'SA_QuizAnswers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_QUIZZES_SA_QUIZANSWERS_1_FROM_SA_QUIZANSWERS_TITLE',
  'get_subpanel_data' => 'sa_quizzes_sa_quizanswers_1',
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
