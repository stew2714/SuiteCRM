<?php
// created: 2017-04-04 10:17:23
$dictionary["Document"]["fields"]["sa_assignments_documents_1"] = array (
  'name' => 'sa_assignments_documents_1',
  'type' => 'link',
  'relationship' => 'sa_assignments_documents_1',
  'source' => 'non-db',
  'module' => 'SA_Assignments',
  'bean_name' => 'SA_Assignments',
  'vname' => 'LBL_SA_ASSIGNMENTS_DOCUMENTS_1_FROM_SA_ASSIGNMENTS_TITLE',
  'id_name' => 'sa_assignments_documents_1sa_assignments_ida',
);
$dictionary["Document"]["fields"]["sa_assignments_documents_1_name"] = array (
  'name' => 'sa_assignments_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_ASSIGNMENTS_DOCUMENTS_1_FROM_SA_ASSIGNMENTS_TITLE',
  'save' => true,
  'id_name' => 'sa_assignments_documents_1sa_assignments_ida',
  'link' => 'sa_assignments_documents_1',
  'table' => 'sa_assignments',
  'module' => 'SA_Assignments',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["sa_assignments_documents_1sa_assignments_ida"] = array (
  'name' => 'sa_assignments_documents_1sa_assignments_ida',
  'type' => 'link',
  'relationship' => 'sa_assignments_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_ASSIGNMENTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
