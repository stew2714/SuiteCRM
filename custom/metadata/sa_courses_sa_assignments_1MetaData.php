<?php
// created: 2017-04-04 10:15:36
$dictionary["sa_courses_sa_assignments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_courses_sa_assignments_1' => 
    array (
      'lhs_module' => 'SA_Courses',
      'lhs_table' => 'sa_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_Assignments',
      'rhs_table' => 'sa_assignments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_courses_sa_assignments_1_c',
      'join_key_lhs' => 'sa_courses_sa_assignments_1sa_courses_ida',
      'join_key_rhs' => 'sa_courses_sa_assignments_1sa_assignments_idb',
    ),
  ),
  'table' => 'sa_courses_sa_assignments_1_c',
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
      'name' => 'sa_courses_sa_assignments_1sa_courses_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_courses_sa_assignments_1sa_assignments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_courses_sa_assignments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_courses_sa_assignments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_courses_sa_assignments_1sa_courses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_courses_sa_assignments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_courses_sa_assignments_1sa_assignments_idb',
      ),
    ),
  ),
);