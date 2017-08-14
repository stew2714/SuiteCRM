<?php
// created: 2017-06-06 14:11:38
$dictionary["SA_Legal_Vendors"]["fields"]["users_sa_legal_vendors_1"] = array (
  'name' => 'users_sa_legal_vendors_1',
  'type' => 'link',
  'relationship' => 'users_sa_legal_vendors_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_USERS_TITLE',
  'id_name' => 'users_sa_legal_vendors_1users_ida',
);
$dictionary["SA_Legal_Vendors"]["fields"]["users_sa_legal_vendors_1_name"] = array (
  'name' => 'users_sa_legal_vendors_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_sa_legal_vendors_1users_ida',
  'link' => 'users_sa_legal_vendors_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["SA_Legal_Vendors"]["fields"]["users_sa_legal_vendors_1users_ida"] = array (
  'name' => 'users_sa_legal_vendors_1users_ida',
  'type' => 'link',
  'relationship' => 'users_sa_legal_vendors_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_SA_LEGAL_VENDORS_TITLE',
);
