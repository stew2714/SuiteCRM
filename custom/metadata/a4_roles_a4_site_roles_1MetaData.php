<?php
// created: 2016-05-12 12:58:18
$dictionary["a4_roles_a4_site_roles_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'a4_roles_a4_site_roles_1' => 
    array (
      'lhs_module' => 'A4_ROLES',
      'lhs_table' => 'a4_roles',
      'lhs_key' => 'id',
      'rhs_module' => 'A4_SITE_ROLES',
      'rhs_table' => 'a4_site_roles',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a4_roles_a4_site_roles_1_c',
      'join_key_lhs' => 'a4_roles_a4_site_roles_1a4_roles_ida',
      'join_key_rhs' => 'a4_roles_a4_site_roles_1a4_site_roles_idb',
    ),
  ),
  'table' => 'a4_roles_a4_site_roles_1_c',
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
      'name' => 'a4_roles_a4_site_roles_1a4_roles_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'a4_roles_a4_site_roles_1a4_site_roles_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a4_roles_a4_site_roles_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a4_roles_a4_site_roles_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a4_roles_a4_site_roles_1a4_roles_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a4_roles_a4_site_roles_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a4_roles_a4_site_roles_1a4_site_roles_idb',
      ),
    ),
  ),
);