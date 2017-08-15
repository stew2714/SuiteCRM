<?php
// created: 2017-07-25 15:08:14
$dictionary["AOS_Contracts"]["fields"]["g1_group_queue_aos_contracts"] = array (
  'name' => 'g1_group_queue_aos_contracts',
  'type' => 'link',
  'relationship' => 'g1_group_queue_aos_contracts',
  'source' => 'non-db',
  'module' => 'g1_Group_Queue',
  'bean_name' => false,
  'vname' => 'LBL_G1_GROUP_QUEUE_AOS_CONTRACTS_FROM_G1_GROUP_QUEUE_TITLE',
  'id_name' => 'g1_group_queue_aos_contractsg1_group_queue_ida',
);
$dictionary["AOS_Contracts"]["fields"]["g1_group_queue_aos_contracts_name"] = array (
  'name' => 'g1_group_queue_aos_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_G1_GROUP_QUEUE_AOS_CONTRACTS_FROM_G1_GROUP_QUEUE_TITLE',
  'save' => true,
  'id_name' => 'g1_group_queue_aos_contractsg1_group_queue_ida',
  'link' => 'g1_group_queue_aos_contracts',
  'table' => 'g1_group_queue',
  'module' => 'g1_Group_Queue',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["g1_group_queue_aos_contractsg1_group_queue_ida"] = array (
  'name' => 'g1_group_queue_aos_contractsg1_group_queue_ida',
  'type' => 'link',
  'relationship' => 'g1_group_queue_aos_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_G1_GROUP_QUEUE_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
);
