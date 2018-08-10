<?php
// created: 2017-09-07 13:04:44
$dictionary["g2_account_plan_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'g2_account_plan_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'g2_Account_Plan',
      'rhs_table' => 'g2_account_plan',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'g2_account_plan_accounts_c',
      'join_key_lhs' => 'g2_account_plan_accountsaccounts_ida',
      'join_key_rhs' => 'g2_account_plan_accountsg2_account_plan_idb',
    ),
  ),
  'table' => 'g2_account_plan_accounts_c',
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
      'name' => 'g2_account_plan_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'g2_account_plan_accountsg2_account_plan_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'g2_account_plan_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'g2_account_plan_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'g2_account_plan_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'g2_account_plan_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'g2_account_plan_accountsg2_account_plan_idb',
      ),
    ),
  ),
);