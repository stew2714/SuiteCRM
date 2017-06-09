<?php
// created: 2017-03-08 09:26:28
$dictionary["suitefeed_am_projecttemplates_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'suitefeed_am_projecttemplates_1' => 
    array (
      'lhs_module' => 'SuiteFeed',
      'lhs_table' => 'suitefeed',
      'lhs_key' => 'id',
      'rhs_module' => 'AM_ProjectTemplates',
      'rhs_table' => 'am_projecttemplates',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'suitefeed_am_projecttemplates_1_c',
      'join_key_lhs' => 'suitefeed_am_projecttemplates_1suitefeed_ida',
      'join_key_rhs' => 'suitefeed_am_projecttemplates_1am_projecttemplates_idb',
    ),
  ),
  'table' => 'suitefeed_am_projecttemplates_1_c',
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
      'name' => 'suitefeed_am_projecttemplates_1suitefeed_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'suitefeed_am_projecttemplates_1am_projecttemplates_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'suitefeed_am_projecttemplates_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'suitefeed_am_projecttemplates_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'suitefeed_am_projecttemplates_1suitefeed_ida',
        1 => 'suitefeed_am_projecttemplates_1am_projecttemplates_idb',
      ),
    ),
  ),
);