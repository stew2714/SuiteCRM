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
            'name' => 'sa_quizzes_sa_quizquestions_1_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'question_number_c',
            'label' => 'LBL_QUESTION_NUMBER',
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
            'name' => 'possible_answer_a_c',
            'label' => 'LBL_POSSIBLE_ANSWER_A',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_b_c',
            'label' => 'LBL_POSSIBLE_ANSWER_B',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_c',
            'label' => 'LBL_POSSIBLE_ANSWER_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'possible_answer_d_c',
            'label' => 'LBL_POSSIBLE_ANSWER_D',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'correct_answer_c',
            'studio' => 'visible',
            'label' => 'LBL_CORRECT_ANSWER',
          ),
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
