<?php
// created: 2017-08-01 11:23:42
$dictionary["Opportunity"]["fields"]["accounts_opportunities_2"] = array (
  'name' => 'accounts_opportunities_2',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_2',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_2_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_opportunities_2accounts_ida',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_2_name"] = array (
  'name' => 'accounts_opportunities_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_2_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_opportunities_2accounts_ida',
  'link' => 'accounts_opportunities_2',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_2accounts_ida"] = array (
  'name' => 'accounts_opportunities_2accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_2_FROM_OPPORTUNITIES_TITLE',
);
