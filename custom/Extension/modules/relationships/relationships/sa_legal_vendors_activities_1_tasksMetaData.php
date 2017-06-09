<?php
// created: 2017-06-06 14:10:13
$dictionary["sa_legal_vendors_activities_1_tasks"] = array (
  'relationships' => 
  array (
    'sa_legal_vendors_activities_1_tasks' => 
    array (
      'lhs_module' => 'SA_Legal_Vendors',
      'lhs_table' => 'sa_legal_vendors',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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