<?php
// created: 2016-05-10 20:11:06
$dictionary["A4_SITES"]["fields"]["accounts_a4_sites_1"] = array (
  'name' => 'accounts_a4_sites_1',
  'type' => 'link',
  'relationship' => 'accounts_a4_sites_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_a4_sites_1accounts_ida',
);
$dictionary["A4_SITES"]["fields"]["accounts_a4_sites_1_name"] = array (
  'name' => 'accounts_a4_sites_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_a4_sites_1accounts_ida',
  'link' => 'accounts_a4_sites_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["A4_SITES"]["fields"]["accounts_a4_sites_1accounts_ida"] = array (
  'name' => 'accounts_a4_sites_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_a4_sites_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_A4_SITES_TITLE',
);
