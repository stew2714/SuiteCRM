<?php
// created: 2017-04-06 07:28:05
$dictionary["suitefeed_securitygroups"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => false,
  'relationships' => 
  array (
    'suitefeed_securitygroups' =>
    array (
      'lhs_module' => 'SuiteFeed',
      'lhs_table' => 'suitefeed',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'suitefeed_securitygroups',
      'join_key_lhs' => 'suitefeed_securitygroups_suitefeed_ida',
      'join_key_rhs' => 'suitefeed_securitygroups_securitygroups_idb',
    ),
  ),
  'table' => 'suitefeed_securitygroups',
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
      'name' => 'suitefeed_securitygroups_suitefeed_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'suitefeed_securitygroups_securitygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'suitefeed_securitygroups_spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'suitefeed_securitygroups__alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'suitefeed_securitygroups_suitefeed_ida',
        1 => 'suitefeed_securitygroups_securitygroups_idb',
      ),
    ),
  ),
);