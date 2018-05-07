<?php
// created: 2018-05-07 17:44:07
$dictionary["m1_tech_deployments_accounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'm1_tech_deployments_accounts_1' => 
    array (
      'lhs_module' => 'm1_Tech_Deployments',
      'lhs_table' => 'm1_tech_deployments',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'm1_tech_deployments_accounts_1_c',
      'join_key_lhs' => 'm1_tech_deployments_accounts_1m1_tech_deployments_ida',
      'join_key_rhs' => 'm1_tech_deployments_accounts_1accounts_idb',
    ),
  ),
  'table' => 'm1_tech_deployments_accounts_1_c',
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
      'name' => 'm1_tech_deployments_accounts_1m1_tech_deployments_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'm1_tech_deployments_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'm1_tech_deployments_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'm1_tech_deployments_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'm1_tech_deployments_accounts_1m1_tech_deployments_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'm1_tech_deployments_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'm1_tech_deployments_accounts_1accounts_idb',
      ),
    ),
  ),
);