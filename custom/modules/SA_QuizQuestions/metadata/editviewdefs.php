<?php
$module_name = 'SA_QuizQuestions';
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
          0 => 
          array (
            'name' => 'question_number',
            'label' => 'LBL_QUESTION_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_a',
            'label' => 'LBL_POSSIBLE_ANSWER_A',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_b',
            'label' => 'LBL_POSSIBLE_ANSWER_B',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_c',
            'label' => 'LBL_POSSIBLE_ANSWER_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_d',
            'label' => 'LBL_POSSIBLE_ANSWER_D',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'correct_answer',
            'studio' => 'visible',
            'label' => 'LBL_CORRECT_ANSWER',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'sa_quizzes_sa_quizquestions_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
