<?php
// created: 2017-07-26 09:14:15
$dictionary["aos_contracts_activities_1_meetings"] = array (
  'relationships' => 
  array (
    'aos_contracts_activities_1_meetings' => 
    array (
      'lhs_module' => 'AOS_Contracts',
      'lhs_table' => 'aos_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'AOS_Contracts',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);