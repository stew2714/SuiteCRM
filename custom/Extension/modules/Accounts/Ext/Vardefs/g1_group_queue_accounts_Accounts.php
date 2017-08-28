<?php
// created: 2017-07-25 15:08:14
$dictionary["Account"]["fields"]["g1_group_queue_accounts"] = array (
  'name' => 'g1_group_queue_accounts',
  'type' => 'link',
  'relationship' => 'g1_group_queue_accounts',
  'source' => 'non-db',
  'module' => 'g1_Group_Queue',
  'bean_name' => false,
  'vname' => 'LBL_G1_GROUP_QUEUE_ACCOUNTS_FROM_G1_GROUP_QUEUE_TITLE',
  'id_name' => 'g1_group_queue_accountsg1_group_queue_ida',
);
$dictionary["Account"]["fields"]["g1_group_queue_accounts_name"] = array (
  'name' => 'g1_group_queue_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_G1_GROUP_QUEUE_ACCOUNTS_FROM_G1_GROUP_QUEUE_TITLE',
  'save' => true,
  'id_name' => 'g1_group_queue_accountsg1_group_queue_ida',
  'link' => 'g1_group_queue_accounts',
  'table' => 'g1_group_queue',
  'module' => 'g1_Group_Queue',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["g1_group_queue_accountsg1_group_queue_ida"] = array (
  'name' => 'g1_group_queue_accountsg1_group_queue_ida',
  'type' => 'link',
  'relationship' => 'g1_group_queue_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_G1_GROUP_QUEUE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
