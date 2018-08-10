<?php
// created: 2017-07-25 15:08:14
$dictionary["Lead"]["fields"]["g1_group_queue_leads"] = array (
  'name' => 'g1_group_queue_leads',
  'type' => 'link',
  'relationship' => 'g1_group_queue_leads',
  'source' => 'non-db',
  'module' => 'g1_Group_Queue',
  'bean_name' => false,
  'vname' => 'LBL_G1_GROUP_QUEUE_LEADS_FROM_G1_GROUP_QUEUE_TITLE',
  'id_name' => 'g1_group_queue_leadsg1_group_queue_ida',
);
$dictionary["Lead"]["fields"]["g1_group_queue_leads_name"] = array (
  'name' => 'g1_group_queue_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_G1_GROUP_QUEUE_LEADS_FROM_G1_GROUP_QUEUE_TITLE',
  'save' => true,
  'id_name' => 'g1_group_queue_leadsg1_group_queue_ida',
  'link' => 'g1_group_queue_leads',
  'table' => 'g1_group_queue',
  'module' => 'g1_Group_Queue',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["g1_group_queue_leadsg1_group_queue_ida"] = array (
  'name' => 'g1_group_queue_leadsg1_group_queue_ida',
  'type' => 'link',
  'relationship' => 'g1_group_queue_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_G1_GROUP_QUEUE_LEADS_FROM_LEADS_TITLE',
);
