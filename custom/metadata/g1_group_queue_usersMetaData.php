<?php
// created: 2017-07-25 15:08:14
$dictionary["g1_group_queue_users"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'g1_group_queue_users' => 
    array (
      'lhs_module' => 'g1_Group_Queue',
      'lhs_table' => 'g1_group_queue',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'g1_group_queue_users_c',
      'join_key_lhs' => 'g1_group_queue_usersg1_group_queue_ida',
      'join_key_rhs' => 'g1_group_queue_usersusers_idb',
    ),
  ),
  'table' => 'g1_group_queue_users_c',
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
      'name' => 'g1_group_queue_usersg1_group_queue_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'g1_group_queue_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'g1_group_queue_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'g1_group_queue_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'g1_group_queue_usersg1_group_queue_ida',
        1 => 'g1_group_queue_usersusers_idb',
      ),
    ),
  ),
);