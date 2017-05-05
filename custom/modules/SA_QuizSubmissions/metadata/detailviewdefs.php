<?php
$module_name = 'SA_QuizSubmissions';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 
          array (
            'name' => 'sa_quizzes_sa_quizsubmissions_1_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_questions',
            'label' => 'LBL_TOTAL_QUESTIONS',
          ),
        ),
        2 => 
        array (
          0 => 'name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_QUIZ_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'correct_answers',
            'label' => 'LBL_CORRECT_ANSWERS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'score',
            'label' => 'LBL_QUIZ_SUBMISSION_SCORE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'pass',
            'studio' => 'visible',
            'label' => 'LBL_PASS_FAIL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'quiz_end_time',
            'comment' => 'End time of the quiz',
            'label' => 'LBL_QUIZ_END_TIME',
          ),
          1 => 
          array (
            'name' => 'quiz_start_time',
            'comment' => 'Start time of the quiz',
            'label' => 'LBL_QUIZ_START_TIME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'quiz_duration',
            'label' => 'LBL_QUIZ_DURATION',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 'date_entered',
        ),
        10 => 
        array (
          0 => 'date_modified',
        ),
        11 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
