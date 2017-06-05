<?php
// created: 2017-06-05 10:23:52
$dictionary["Account"]["fields"]["sa_fluency_one_accounts"] = array (
  'name' => 'sa_fluency_one_accounts',
  'type' => 'link',
  'relationship' => 'sa_fluency_one_accounts',
  'source' => 'non-db',
  'module' => 'sa_Fluency_One',
  'bean_name' => false,
  'vname' => 'LBL_SA_FLUENCY_ONE_ACCOUNTS_FROM_SA_FLUENCY_ONE_TITLE',
  'id_name' => 'sa_fluency_one_accountssa_fluency_one_ida',
);
$dictionary["Account"]["fields"]["sa_fluency_one_accounts_name"] = array (
  'name' => 'sa_fluency_one_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_FLUENCY_ONE_ACCOUNTS_FROM_SA_FLUENCY_ONE_TITLE',
  'save' => true,
  'id_name' => 'sa_fluency_one_accountssa_fluency_one_ida',
  'link' => 'sa_fluency_one_accounts',
  'table' => 'sa_fluency_one',
  'module' => 'sa_Fluency_One',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["sa_fluency_one_accountssa_fluency_one_ida"] = array (
  'name' => 'sa_fluency_one_accountssa_fluency_one_ida',
  'type' => 'link',
  'relationship' => 'sa_fluency_one_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_FLUENCY_ONE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
