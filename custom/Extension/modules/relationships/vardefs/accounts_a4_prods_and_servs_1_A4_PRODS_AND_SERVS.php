<?php
// created: 2016-05-10 20:11:47
$dictionary["A4_PRODS_AND_SERVS"]["fields"]["accounts_a4_prods_and_servs_1"] = array (
  'name' => 'accounts_a4_prods_and_servs_1',
  'type' => 'link',
  'relationship' => 'accounts_a4_prods_and_servs_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_A4_PRODS_AND_SERVS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_a4_prods_and_servs_1accounts_ida',
);
$dictionary["A4_PRODS_AND_SERVS"]["fields"]["accounts_a4_prods_and_servs_1_name"] = array (
  'name' => 'accounts_a4_prods_and_servs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_A4_PRODS_AND_SERVS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_a4_prods_and_servs_1accounts_ida',
  'link' => 'accounts_a4_prods_and_servs_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["A4_PRODS_AND_SERVS"]["fields"]["accounts_a4_prods_and_servs_1accounts_ida"] = array (
  'name' => 'accounts_a4_prods_and_servs_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_a4_prods_and_servs_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_A4_PRODS_AND_SERVS_1_FROM_A4_PRODS_AND_SERVS_TITLE',
);
