<?php
// created: 2017-06-06 14:10:13
$dictionary["sa_legal_vendors_activities_1_emails"] = array (
  'relationships' => 
  array (
    'sa_legal_vendors_activities_1_emails' => 
    array (
      'lhs_module' => 'SA_Legal_Vendors',
      'lhs_table' => 'sa_legal_vendors',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'SA_Legal_Vendors',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);