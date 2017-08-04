<?php
// created: 2017-08-01 09:28:00
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1"] = array (
  'name' => 'accounts_opportunities_1',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_opportunities_1accounts_ida',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1_name"] = array (
  'name' => 'accounts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_opportunities_1accounts_ida',
  'link' => 'accounts_opportunities_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1accounts_ida"] = array (
  'name' => 'accounts_opportunities_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);
