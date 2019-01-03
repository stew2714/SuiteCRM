<?php
// created: 2019-01-03 14:30:44
$dictionary["Document"]["fields"]["m1_tech_deployments_documents_1"] = array (
  'name' => 'm1_tech_deployments_documents_1',
  'type' => 'link',
  'relationship' => 'm1_tech_deployments_documents_1',
  'source' => 'non-db',
  'module' => 'm1_Tech_Deployments',
  'bean_name' => 'm1_Tech_Deployments',
  'vname' => 'LBL_M1_TECH_DEPLOYMENTS_DOCUMENTS_1_FROM_M1_TECH_DEPLOYMENTS_TITLE',
  'id_name' => 'm1_tech_deployments_documents_1m1_tech_deployments_ida',
);
$dictionary["Document"]["fields"]["m1_tech_deployments_documents_1_name"] = array (
  'name' => 'm1_tech_deployments_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_M1_TECH_DEPLOYMENTS_DOCUMENTS_1_FROM_M1_TECH_DEPLOYMENTS_TITLE',
  'save' => true,
  'id_name' => 'm1_tech_deployments_documents_1m1_tech_deployments_ida',
  'link' => 'm1_tech_deployments_documents_1',
  'table' => 'm1_tech_deployments',
  'module' => 'm1_Tech_Deployments',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["m1_tech_deployments_documents_1m1_tech_deployments_ida"] = array (
  'name' => 'm1_tech_deployments_documents_1m1_tech_deployments_ida',
  'type' => 'link',
  'relationship' => 'm1_tech_deployments_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_M1_TECH_DEPLOYMENTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
