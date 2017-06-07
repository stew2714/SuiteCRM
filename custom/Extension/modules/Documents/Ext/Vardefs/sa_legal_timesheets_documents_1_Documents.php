<?php
// created: 2017-06-06 13:56:37
$dictionary["Document"]["fields"]["sa_legal_timesheets_documents_1"] = array (
  'name' => 'sa_legal_timesheets_documents_1',
  'type' => 'link',
  'relationship' => 'sa_legal_timesheets_documents_1',
  'source' => 'non-db',
  'module' => 'SA_Legal_Timesheets',
  'bean_name' => 'SA_Legal_Timesheets',
  'vname' => 'LBL_SA_LEGAL_TIMESHEETS_DOCUMENTS_1_FROM_SA_LEGAL_TIMESHEETS_TITLE',
  'id_name' => 'sa_legal_timesheets_documents_1sa_legal_timesheets_ida',
);
$dictionary["Document"]["fields"]["sa_legal_timesheets_documents_1_name"] = array (
  'name' => 'sa_legal_timesheets_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_LEGAL_TIMESHEETS_DOCUMENTS_1_FROM_SA_LEGAL_TIMESHEETS_TITLE',
  'save' => true,
  'id_name' => 'sa_legal_timesheets_documents_1sa_legal_timesheets_ida',
  'link' => 'sa_legal_timesheets_documents_1',
  'table' => 'sa_legal_timesheets',
  'module' => 'SA_Legal_Timesheets',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["sa_legal_timesheets_documents_1sa_legal_timesheets_ida"] = array (
  'name' => 'sa_legal_timesheets_documents_1sa_legal_timesheets_ida',
  'type' => 'link',
  'relationship' => 'sa_legal_timesheets_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_LEGAL_TIMESHEETS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
