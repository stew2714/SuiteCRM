<?php
// created: 2017-06-08 10:36:22
$dictionary["sa_Fluency_One"]["fields"]["accounts_sa_fluency_one_1"] = array (
  'name' => 'accounts_sa_fluency_one_1',
  'type' => 'link',
  'relationship' => 'accounts_sa_fluency_one_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_SA_FLUENCY_ONE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_sa_fluency_one_1accounts_ida',
);
$dictionary["sa_Fluency_One"]["fields"]["accounts_sa_fluency_one_1_name"] = array (
  'name' => 'accounts_sa_fluency_one_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SA_FLUENCY_ONE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_sa_fluency_one_1accounts_ida',
  'link' => 'accounts_sa_fluency_one_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sa_Fluency_One"]["fields"]["accounts_sa_fluency_one_1accounts_ida"] = array (
  'name' => 'accounts_sa_fluency_one_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sa_fluency_one_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SA_FLUENCY_ONE_1_FROM_SA_FLUENCY_ONE_TITLE',
);
