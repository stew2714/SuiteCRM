<?php
// created: 2017-07-25 15:08:14
$dictionary["Opportunity"]["fields"]["g1_group_queue_opportunities"] = array (
  'name' => 'g1_group_queue_opportunities',
  'type' => 'link',
  'relationship' => 'g1_group_queue_opportunities',
  'source' => 'non-db',
  'module' => 'g1_Group_Queue',
  'bean_name' => false,
  'vname' => 'LBL_G1_GROUP_QUEUE_OPPORTUNITIES_FROM_G1_GROUP_QUEUE_TITLE',
  'id_name' => 'g1_group_queue_opportunitiesg1_group_queue_ida',
);
$dictionary["Opportunity"]["fields"]["g1_group_queue_opportunities_name"] = array (
  'name' => 'g1_group_queue_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_G1_GROUP_QUEUE_OPPORTUNITIES_FROM_G1_GROUP_QUEUE_TITLE',
  'save' => true,
  'id_name' => 'g1_group_queue_opportunitiesg1_group_queue_ida',
  'link' => 'g1_group_queue_opportunities',
  'table' => 'g1_group_queue',
  'module' => 'g1_Group_Queue',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["g1_group_queue_opportunitiesg1_group_queue_ida"] = array (
  'name' => 'g1_group_queue_opportunitiesg1_group_queue_ida',
  'type' => 'link',
  'relationship' => 'g1_group_queue_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_G1_GROUP_QUEUE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
