<?php
// created: 2017-06-14 15:28:26
$dictionary["c1_cust_contacts1_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'c1_cust_contacts1_leads' => 
    array (
      'lhs_module' => 'C1_Cust_Contacts1',
      'lhs_table' => 'c1_cust_contacts1',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c1_cust_contacts1_leads_c',
      'join_key_lhs' => 'c1_cust_contacts1_leadsc1_cust_contacts1_ida',
      'join_key_rhs' => 'c1_cust_contacts1_leadsleads_idb',
    ),
  ),
  'table' => 'c1_cust_contacts1_leads_c',
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
      'name' => 'c1_cust_contacts1_leadsc1_cust_contacts1_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c1_cust_contacts1_leadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c1_cust_contacts1_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c1_cust_contacts1_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c1_cust_contacts1_leadsc1_cust_contacts1_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'c1_cust_contacts1_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c1_cust_contacts1_leadsleads_idb',
      ),
    ),
  ),
);