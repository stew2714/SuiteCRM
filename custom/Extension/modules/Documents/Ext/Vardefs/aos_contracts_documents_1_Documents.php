<?php
// created: 2017-07-26 14:09:30
$dictionary["Document"]["fields"]["aos_contracts_documents_1"] = array (
  'name' => 'aos_contracts_documents_1',
  'type' => 'link',
  'relationship' => 'aos_contracts_documents_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_AOS_CONTRACTS_DOCUMENTS_1_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'aos_contracts_documents_1aos_contracts_ida',
);
$dictionary["Document"]["fields"]["aos_contracts_documents_1_name"] = array (
  'name' => 'aos_contracts_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_CONTRACTS_DOCUMENTS_1_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'aos_contracts_documents_1aos_contracts_ida',
  'link' => 'aos_contracts_documents_1',
  'table' => 'aos_contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["aos_contracts_documents_1aos_contracts_ida"] = array (
  'name' => 'aos_contracts_documents_1aos_contracts_ida',
  'type' => 'link',
  'relationship' => 'aos_contracts_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_CONTRACTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
