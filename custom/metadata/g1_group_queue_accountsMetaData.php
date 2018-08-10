<?php
// created: 2017-07-25 15:08:14
$dictionary["g1_group_queue_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'g1_group_queue_accounts' => 
    array (
      'lhs_module' => 'g1_Group_Queue',
      'lhs_table' => 'g1_group_queue',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'g1_group_queue_accounts_c',
      'join_key_lhs' => 'g1_group_queue_accountsg1_group_queue_ida',
      'join_key_rhs' => 'g1_group_queue_accountsaccounts_idb',
    ),
  ),
  'table' => 'g1_group_queue_accounts_c',
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
      'name' => 'g1_group_queue_accountsg1_group_queue_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'g1_group_queue_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'g1_group_queue_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'g1_group_queue_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'g1_group_queue_accountsg1_group_queue_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'g1_group_queue_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'g1_group_queue_accountsaccounts_idb',
      ),
    ),
  ),
);