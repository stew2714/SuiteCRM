<?php
// created: 2017-04-04 11:35:14
$dictionary["sa_quizzes_sa_quizquestions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_quizzes_sa_quizquestions_1' => 
    array (
      'lhs_module' => 'SA_Quizzes',
      'lhs_table' => 'sa_quizzes',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_QuizQuestions',
      'rhs_table' => 'sa_quizquestions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_quizzes_sa_quizquestions_1_c',
      'join_key_lhs' => 'sa_quizzes_sa_quizquestions_1sa_quizzes_ida',
      'join_key_rhs' => 'sa_quizzes_sa_quizquestions_1sa_quizquestions_idb',
    ),
  ),
  'table' => 'sa_quizzes_sa_quizquestions_1_c',
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
      'name' => 'sa_quizzes_sa_quizquestions_1sa_quizzes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_quizzes_sa_quizquestions_1sa_quizquestions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_quizzes_sa_quizquestions_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_quizzes_sa_quizquestions_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_quizzes_sa_quizquestions_1sa_quizzes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_quizzes_sa_quizquestions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_quizzes_sa_quizquestions_1sa_quizquestions_idb',
      ),
    ),
  ),
);