<?php
// created: 2017-09-07 13:04:44
$dictionary["g2_Account_Plan"]["fields"]["g2_account_plan_accounts"] = array (
  'name' => 'g2_account_plan_accounts',
  'type' => 'link',
  'relationship' => 'g2_account_plan_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_G2_ACCOUNT_PLAN_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'g2_account_plan_accountsaccounts_ida',
);
$dictionary["g2_Account_Plan"]["fields"]["g2_account_plan_accounts_name"] = array (
  'name' => 'g2_account_plan_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_G2_ACCOUNT_PLAN_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'g2_account_plan_accountsaccounts_ida',
  'link' => 'g2_account_plan_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["g2_Account_Plan"]["fields"]["g2_account_plan_accountsaccounts_ida"] = array (
  'name' => 'g2_account_plan_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'g2_account_plan_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_G2_ACCOUNT_PLAN_ACCOUNTS_FROM_G2_ACCOUNT_PLAN_TITLE',
);
