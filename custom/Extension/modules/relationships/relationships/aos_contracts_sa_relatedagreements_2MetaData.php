<?php
// created: 2017-07-04 09:46:32
$dictionary["aos_contracts_sa_relatedagreements_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aos_contracts_sa_relatedagreements_2' => 
    array (
      'lhs_module' => 'AOS_Contracts',
      'lhs_table' => 'aos_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_RelatedAgreements',
      'rhs_table' => 'sa_relatedagreements',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aos_contracts_sa_relatedagreements_2_c',
      'join_key_lhs' => 'aos_contracts_sa_relatedagreements_2aos_contracts_ida',
      'join_key_rhs' => 'aos_contracts_sa_relatedagreements_2sa_relatedagreements_idb',
    ),
  ),
  'table' => 'aos_contracts_sa_relatedagreements_2_c',
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
      'name' => 'aos_contracts_sa_relatedagreements_2aos_contracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aos_contracts_sa_relatedagreements_2sa_relatedagreements_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aos_contracts_sa_relatedagreements_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aos_contracts_sa_relatedagreements_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aos_contracts_sa_relatedagreements_2aos_contracts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'aos_contracts_sa_relatedagreements_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aos_contracts_sa_relatedagreements_2sa_relatedagreements_idb',
      ),
    ),
  ),
);