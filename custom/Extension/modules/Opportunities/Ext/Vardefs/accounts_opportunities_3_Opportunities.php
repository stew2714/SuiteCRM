<?php
// created: 2018-02-05 06:17:58
$dictionary["Opportunity"]["fields"]["accounts_opportunities_3"] = array (
  'name' => 'accounts_opportunities_3',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_3',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_opportunities_3accounts_ida',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_3_name"] = array (
  'name' => 'accounts_opportunities_3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_opportunities_3accounts_ida',
  'link' => 'accounts_opportunities_3',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_3accounts_ida"] = array (
  'name' => 'accounts_opportunities_3accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_OPPORTUNITIES_TITLE',
);
