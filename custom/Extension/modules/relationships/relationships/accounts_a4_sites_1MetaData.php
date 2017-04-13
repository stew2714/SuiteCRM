<?php
// created: 2016-05-10 20:11:06
$dictionary["accounts_a4_sites_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_a4_sites_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'A4_SITES',
      'rhs_table' => 'a4_sites',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_a4_sites_1_c',
      'join_key_lhs' => 'accounts_a4_sites_1accounts_ida',
      'join_key_rhs' => 'accounts_a4_sites_1a4_sites_idb',
    ),
  ),
  'table' => 'accounts_a4_sites_1_c',
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
      'name' => 'accounts_a4_sites_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_a4_sites_1a4_sites_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_a4_sites_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_a4_sites_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_a4_sites_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_a4_sites_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_a4_sites_1a4_sites_idb',
      ),
    ),
  ),
);