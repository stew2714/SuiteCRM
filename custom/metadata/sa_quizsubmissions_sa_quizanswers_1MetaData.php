<?php
// created: 2017-04-18 11:12:05
$dictionary["sa_quizsubmissions_sa_quizanswers_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_quizsubmissions_sa_quizanswers_1' => 
    array (
      'lhs_module' => 'SA_QuizSubmissions',
      'lhs_table' => 'sa_quizsubmissions',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_QuizAnswers',
      'rhs_table' => 'sa_quizanswers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_quizsubmissions_sa_quizanswers_1_c',
      'join_key_lhs' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida',
      'join_key_rhs' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizanswers_idb',
    ),
  ),
  'table' => 'sa_quizsubmissions_sa_quizanswers_1_c',
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
      'name' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizanswers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_quizsubmissions_sa_quizanswers_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_quizsubmissions_sa_quizanswers_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_quizsubmissions_sa_quizanswers_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_quizsubmissions_sa_quizanswers_1sa_quizanswers_idb',
      ),
    ),
  ),
);