<?php
// created: 2018-06-27 12:37:25
$dictionary["m1_Tech_Deployments"]["fields"]["accounts_m1_tech_deployments_1"] = array (
  'name' => 'accounts_m1_tech_deployments_1',
  'type' => 'link',
  'relationship' => 'accounts_m1_tech_deployments_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_M1_TECH_DEPLOYMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_m1_tech_deployments_1accounts_ida',
);
$dictionary["m1_Tech_Deployments"]["fields"]["accounts_m1_tech_deployments_1_name"] = array (
  'name' => 'accounts_m1_tech_deployments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_M1_TECH_DEPLOYMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_m1_tech_deployments_1accounts_ida',
  'link' => 'accounts_m1_tech_deployments_1',
  'table' => 'accounts',
  'required' => 'true',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["m1_Tech_Deployments"]["fields"]["accounts_m1_tech_deployments_1accounts_ida"] = array (
  'name' => 'accounts_m1_tech_deployments_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_m1_tech_deployments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_M1_TECH_DEPLOYMENTS_1_FROM_M1_TECH_DEPLOYMENTS_TITLE',
);
