<?php
// created: 2019-01-03 14:30:44
$dictionary["m1_tech_deployments_documents_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'm1_tech_deployments_documents_1' => 
    array (
      'lhs_module' => 'm1_Tech_Deployments',
      'lhs_table' => 'm1_tech_deployments',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'm1_tech_deployments_documents_1_c',
      'join_key_lhs' => 'm1_tech_deployments_documents_1m1_tech_deployments_ida',
      'join_key_rhs' => 'm1_tech_deployments_documents_1documents_idb',
    ),
  ),
  'table' => 'm1_tech_deployments_documents_1_c',
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
      'name' => 'm1_tech_deployments_documents_1m1_tech_deployments_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'm1_tech_deployments_documents_1documents_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'm1_tech_deployments_documents_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'm1_tech_deployments_documents_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'm1_tech_deployments_documents_1m1_tech_deployments_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'm1_tech_deployments_documents_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'm1_tech_deployments_documents_1documents_idb',
      ),
    ),
  ),
);