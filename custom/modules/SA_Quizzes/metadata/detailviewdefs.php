<?php
$module_name = 'SA_Quizzes';
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
          4 => array (
            'customCode' => '<input type="button" class="button" onClick="startQuiz(\'{$id}\');" value="{$MOD.LBL_START_QUIZ}">',
          ),
        ),
        'footerTpl' => 'modules/SA_Quizzes/tpls/startQuiz.tpl',
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
      'includes' =>
        array (
            0 =>
                array (
                    'file' => 'modules/SA_Quizzes/js/startQuiz.js',
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'sa_assignments_sa_quizzes_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pass_score_c',
            'label' => 'LBL_PASS_SCORE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
