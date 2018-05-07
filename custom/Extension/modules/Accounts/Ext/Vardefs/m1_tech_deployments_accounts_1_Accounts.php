<?php
// created: 2018-05-07 17:44:08
$dictionary["Account"]["fields"]["m1_tech_deployments_accounts_1"] = array (
  'name' => 'm1_tech_deployments_accounts_1',
  'type' => 'link',
  'relationship' => 'm1_tech_deployments_accounts_1',
  'source' => 'non-db',
  'module' => 'm1_Tech_Deployments',
  'bean_name' => 'm1_Tech_Deployments',
  'vname' => 'LBL_M1_TECH_DEPLOYMENTS_ACCOUNTS_1_FROM_M1_TECH_DEPLOYMENTS_TITLE',
  'id_name' => 'm1_tech_deployments_accounts_1m1_tech_deployments_ida',
);
$dictionary["Account"]["fields"]["m1_tech_deployments_accounts_1_name"] = array (
  'name' => 'm1_tech_deployments_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_M1_TECH_DEPLOYMENTS_ACCOUNTS_1_FROM_M1_TECH_DEPLOYMENTS_TITLE',
  'save' => true,
  'id_name' => 'm1_tech_deployments_accounts_1m1_tech_deployments_ida',
  'link' => 'm1_tech_deployments_accounts_1',
  'table' => 'm1_tech_deployments',
  'module' => 'm1_Tech_Deployments',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["m1_tech_deployments_accounts_1m1_tech_deployments_ida"] = array (
  'name' => 'm1_tech_deployments_accounts_1m1_tech_deployments_ida',
  'type' => 'link',
  'relationship' => 'm1_tech_deployments_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_M1_TECH_DEPLOYMENTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
