<?php
// created: 2016-03-04 16:31:32
$dictionary["cust_cust_customerroles_users"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cust_cust_customerroles_users' => 
    array (
      'lhs_module' => 'cust_cust_CustomerRoles',
      'lhs_table' => 'cust_cust_customerroles',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cust_cust_customerroles_users_c',
      'join_key_lhs' => 'cust_cust_customerroles_userscust_cust_customerroles_ida',
      'join_key_rhs' => 'cust_cust_customerroles_usersusers_idb',
    ),
  ),
  'table' => 'cust_cust_customerroles_users_c',
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
      'name' => 'cust_cust_customerroles_userscust_cust_customerroles_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cust_cust_customerroles_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cust_cust_customerroles_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cust_cust_customerroles_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cust_cust_customerroles_userscust_cust_customerroles_ida',
        1 => 'cust_cust_customerroles_usersusers_idb',
      ),
    ),
  ),
);