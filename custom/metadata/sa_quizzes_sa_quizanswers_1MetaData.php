<?php
// created: 2017-04-12 14:29:57
$dictionary["sa_quizzes_sa_quizanswers_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sa_quizzes_sa_quizanswers_1' => 
    array (
      'lhs_module' => 'SA_Quizzes',
      'lhs_table' => 'sa_quizzes',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_QuizAnswers',
      'rhs_table' => 'sa_quizanswers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_quizzes_sa_quizanswers_1_c',
      'join_key_lhs' => 'sa_quizzes_sa_quizanswers_1sa_quizzes_ida',
      'join_key_rhs' => 'sa_quizzes_sa_quizanswers_1sa_quizanswers_idb',
    ),
  ),
  'table' => 'sa_quizzes_sa_quizanswers_1_c',
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
      'name' => 'sa_quizzes_sa_quizanswers_1sa_quizzes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_1sa_quizanswers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_quizzes_sa_quizanswers_1sa_quizzes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_quizzes_sa_quizanswers_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_quizzes_sa_quizanswers_1sa_quizanswers_idb',
      ),
    ),
  ),
);