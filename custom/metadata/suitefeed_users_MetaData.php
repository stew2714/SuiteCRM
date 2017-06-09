<?php
// created: 2017-03-08 09:28:34
$dictionary["suitefeed_users"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'suitefeed_users' =>
    array (
      'lhs_module' => 'SuiteFeed',
      'lhs_table' => 'suitefeed',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'suitefeed_users',
      'join_key_lhs' => 'suitefeed_users_suitefeed_ida',
      'join_key_rhs' => 'suitefeed_users_users_idb',
    ),
  ),
  'table' => 'suitefeed_users',
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
      'name' => 'suitefeed_users_suitefeed_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'suitefeed_users_users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'suitefeed_users_spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'suitefeed_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'suitefeed_users_suitefeed_ida',
        1 => 'suitefeed_users_users_idb',
      ),
    ),
  ),
);