<?php
// created: 2017-04-13 09:17:31
$dictionary["sa_assignments_sa_quizzes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_assignments_sa_quizzes_1' => 
    array (
      'lhs_module' => 'SA_Assignments',
      'lhs_table' => 'sa_assignments',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_Quizzes',
      'rhs_table' => 'sa_quizzes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_assignments_sa_quizzes_1_c',
      'join_key_lhs' => 'sa_assignments_sa_quizzes_1sa_assignments_ida',
      'join_key_rhs' => 'sa_assignments_sa_quizzes_1sa_quizzes_idb',
    ),
  ),
  'table' => 'sa_assignments_sa_quizzes_1_c',
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
      'name' => 'sa_assignments_sa_quizzes_1sa_assignments_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_assignments_sa_quizzes_1sa_quizzes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_assignments_sa_quizzes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_assignments_sa_quizzes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_assignments_sa_quizzes_1sa_assignments_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_assignments_sa_quizzes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_assignments_sa_quizzes_1sa_quizzes_idb',
      ),
    ),
  ),
);