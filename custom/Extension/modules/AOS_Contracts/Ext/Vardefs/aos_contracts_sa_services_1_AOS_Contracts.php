<?php
// created: 2017-06-28 14:43:48
$dictionary["AOS_Contracts"]["fields"]["aos_contracts_sa_services_1"] = array (
  'name' => 'aos_contracts_sa_services_1',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_services_1',
  'source' => 'non-db',
  'module' => 'SA_Services',
  'bean_name' => 'SA_Services',
  'vname' => 'LBL_AOS_CONTRACTS_SA_SERVICES_1_FROM_SA_SEcontracRVICES_TITLE',
  'id_name' => 'aos_contracts_sa_services_1sa_services_idb',
);
$dictionary["AOS_Contracts"]["fields"]["aos_contracts_sa_services_1_name"] = array (
  'name' => 'aos_contracts_sa_services_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_CONTRACTS_SA_SERVICES_1_FROM_SA_SERVICES_TITLE',
  'save' => true,
  'id_name' => 'aos_contracts_sa_services_1sa_services_idb',
  'link' => 'aos_contracts_sa_services_1',
  'table' => 'sa_services',
  'module' => 'SA_Services',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["aos_contracts_sa_services_1sa_services_idb"] = array (
  'name' => 'aos_contracts_sa_services_1sa_services_idb',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_services_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AOS_CONTRACTS_SA_SERVICES_1_FROM_SA_SERVICES_TITLE',
);
