<?php
// created: 2017-06-28 14:25:23
$dictionary["AOS_Contracts"]["fields"]["aos_contracts_sa_products_1"] = array (
  'name' => 'aos_contracts_sa_products_1',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_products_1',
  'source' => 'non-db',
  'module' => 'SA_Products',
  'bean_name' => 'SA_Products',
  'vname' => 'LBL_AOS_CONTRACTS_SA_PRODUCTS_1_FROM_SA_PRODUCTS_TITLE',
  'id_name' => 'aos_contracts_sa_products_1sa_products_idb',
);
$dictionary["AOS_Contracts"]["fields"]["aos_contracts_sa_products_1_name"] = array (
  'name' => 'aos_contracts_sa_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_CONTRACTS_SA_PRODUCTS_1_FROM_SA_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_contracts_sa_products_1sa_products_idb',
  'link' => 'aos_contracts_sa_products_1',
  'table' => 'sa_products',
  'module' => 'SA_Products',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["aos_contracts_sa_products_1sa_products_idb"] = array (
  'name' => 'aos_contracts_sa_products_1sa_products_idb',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AOS_CONTRACTS_SA_PRODUCTS_1_FROM_SA_PRODUCTS_TITLE',
);
