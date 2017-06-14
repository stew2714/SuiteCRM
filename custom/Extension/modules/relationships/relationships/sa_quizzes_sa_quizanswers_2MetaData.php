<?php
// created: 2017-04-18 09:34:58
$dictionary["sa_quizzes_sa_quizanswers_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_quizzes_sa_quizanswers_2' => 
    array (
      'lhs_module' => 'SA_Quizzes',
      'lhs_table' => 'sa_quizzes',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_QuizAnswers',
      'rhs_table' => 'sa_quizanswers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_quizzes_sa_quizanswers_2_c',
      'join_key_lhs' => 'sa_quizzes_sa_quizanswers_2sa_quizzes_ida',
      'join_key_rhs' => 'sa_quizzes_sa_quizanswers_2sa_quizanswers_idb',
    ),
  ),
  'table' => 'sa_quizzes_sa_quizanswers_2_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_2sa_quizzes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_2sa_quizanswers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_quizzes_sa_quizanswers_2sa_quizzes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_quizzes_sa_quizanswers_2sa_quizanswers_idb',
      ),
    ),
  ),
);