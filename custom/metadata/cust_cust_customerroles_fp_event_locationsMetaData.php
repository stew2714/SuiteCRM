<?php
// created: 2016-03-04 16:31:32
$dictionary["cust_cust_customerroles_fp_event_locations"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cust_cust_customerroles_fp_event_locations' => 
    array (
      'lhs_module' => 'FP_Event_Locations',
      'lhs_table' => 'fp_event_locations',
      'lhs_key' => 'id',
      'rhs_module' => 'cust_cust_CustomerRoles',
      'rhs_table' => 'cust_cust_customerroles',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cust_cust_customerroles_fp_event_locations_c',
      'join_key_lhs' => 'cust_cust_customerroles_fp_event_locationsfp_event_locations_ida',
      'join_key_rhs' => 'cust_cust_da31erroles_idb',
    ),
  ),
  'table' => 'cust_cust_customerroles_fp_event_locations_c',
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
      'name' => 'cust_cust_customerroles_fp_event_locationsfp_event_locations_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cust_cust_da31erroles_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cust_cust_customerroles_fp_event_locationsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cust_cust_customerroles_fp_event_locations_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cust_cust_customerroles_fp_event_locationsfp_event_locations_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cust_cust_customerroles_fp_event_locations_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cust_cust_da31erroles_idb',
      ),
    ),
  ),
);