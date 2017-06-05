<?php
// created: 2017-06-05 10:23:52
$dictionary["sa_fluency_one_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sa_fluency_one_accounts' => 
    array (
      'lhs_module' => 'sa_Fluency_One',
      'lhs_table' => 'sa_fluency_one',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_fluency_one_accounts_c',
      'join_key_lhs' => 'sa_fluency_one_accountssa_fluency_one_ida',
      'join_key_rhs' => 'sa_fluency_one_accountsaccounts_idb',
    ),
  ),
  'table' => 'sa_fluency_one_accounts_c',
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
      'name' => 'sa_fluency_one_accountssa_fluency_one_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_fluency_one_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_fluency_one_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_fluency_one_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_fluency_one_accountssa_fluency_one_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_fluency_one_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_fluency_one_accountsaccounts_idb',
      ),
    ),
  ),
);