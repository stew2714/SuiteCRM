<?php
// created: 2017-06-14 15:28:26
$dictionary["AOS_Contracts"]["fields"]["c1_cust_contacts1_aos_contracts"] = array (
  'name' => 'c1_cust_contacts1_aos_contracts',
  'type' => 'link',
  'relationship' => 'c1_cust_contacts1_aos_contracts',
  'source' => 'non-db',
  'module' => 'C1_Cust_Contacts1',
  'bean_name' => 'C1_Cust_Contacts1',
  'vname' => 'LBL_C1_CUST_CONTACTS1_AOS_CONTRACTS_FROM_C1_CUST_CONTACTS1_TITLE',
  'id_name' => 'c1_cust_contacts1_aos_contractsc1_cust_contacts1_ida',
);
$dictionary["AOS_Contracts"]["fields"]["c1_cust_contacts1_aos_contracts_name"] = array (
  'name' => 'c1_cust_contacts1_aos_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_C1_CUST_CONTACTS1_AOS_CONTRACTS_FROM_C1_CUST_CONTACTS1_TITLE',
  'save' => true,
  'id_name' => 'c1_cust_contacts1_aos_contractsc1_cust_contacts1_ida',
  'link' => 'c1_cust_contacts1_aos_contracts',
  'table' => 'c1_cust_contacts1',
  'module' => 'C1_Cust_Contacts1',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["AOS_Contracts"]["fields"]["c1_cust_contacts1_aos_contractsc1_cust_contacts1_ida"] = array (
  'name' => 'c1_cust_contacts1_aos_contractsc1_cust_contacts1_ida',
  'type' => 'link',
  'relationship' => 'c1_cust_contacts1_aos_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_C1_CUST_CONTACTS1_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
);
