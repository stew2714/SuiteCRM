<?php
// created: 2018-02-05 06:17:58
$dictionary["accounts_opportunities_3"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_opportunities_3' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_opportunities_3_c',
      'join_key_lhs' => 'accounts_opportunities_3accounts_ida',
      'join_key_rhs' => 'accounts_opportunities_3opportunities_idb',
    ),
  ),
  'table' => 'accounts_opportunities_3_c',
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
      'name' => 'accounts_opportunities_3accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_opportunities_3opportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_opportunities_3spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_opportunities_3_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_opportunities_3accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_opportunities_3_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_opportunities_3opportunities_idb',
      ),
    ),
  ),
);