<?php
// created: 2017-06-06 14:09:59
$dictionary["sa_legal_vendors_notes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'sa_legal_vendors_notes_1' => 
    array (
      'lhs_module' => 'SA_Legal_Vendors',
      'lhs_table' => 'sa_legal_vendors',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_legal_vendors_notes_1_c',
      'join_key_lhs' => 'sa_legal_vendors_notes_1sa_legal_vendors_ida',
      'join_key_rhs' => 'sa_legal_vendors_notes_1notes_idb',
    ),
  ),
  'table' => 'sa_legal_vendors_notes_1_c',
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
      'name' => 'sa_legal_vendors_notes_1sa_legal_vendors_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_legal_vendors_notes_1notes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_legal_vendors_notes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_legal_vendors_notes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_legal_vendors_notes_1sa_legal_vendors_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_legal_vendors_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_legal_vendors_notes_1notes_idb',
      ),
    ),
  ),
);