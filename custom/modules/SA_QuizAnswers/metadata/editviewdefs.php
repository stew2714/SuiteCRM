<?php
$module_name = 'SA_QuizAnswers';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sa_quizzes_sa_quizanswers_2_name',
          ),
          1 => 
          array (
            'name' => 'sa_quizsubmissions_sa_quizanswers_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sa_quizquestions_sa_quizanswers_1_name',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'question_answer',
            'label' => 'LBL_QUESTION_ANSWER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'correct_answer',
            'studio' => 'visible',
            'label' => 'LBL_CORRECT_ANSWER',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'correct_status',
            'studio' => 'visible',
            'label' => 'LBL_CORRECT_STATUS',
          ),
        ),
      ),
    ),
  ),
);
?>
