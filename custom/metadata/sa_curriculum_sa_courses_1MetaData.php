<?php
// created: 2017-04-04 10:13:21
$dictionary["sa_curriculum_sa_courses_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_curriculum_sa_courses_1' => 
    array (
      'lhs_module' => 'SA_Curriculum',
      'lhs_table' => 'sa_curriculum',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_Courses',
      'rhs_table' => 'sa_courses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_curriculum_sa_courses_1_c',
      'join_key_lhs' => 'sa_curriculum_sa_courses_1sa_curriculum_ida',
      'join_key_rhs' => 'sa_curriculum_sa_courses_1sa_courses_idb',
    ),
  ),
  'table' => 'sa_curriculum_sa_courses_1_c',
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
      'name' => 'sa_curriculum_sa_courses_1sa_curriculum_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_curriculum_sa_courses_1sa_courses_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_curriculum_sa_courses_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_curriculum_sa_courses_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_curriculum_sa_courses_1sa_curriculum_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_curriculum_sa_courses_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_curriculum_sa_courses_1sa_courses_idb',
      ),
    ),
  ),
);