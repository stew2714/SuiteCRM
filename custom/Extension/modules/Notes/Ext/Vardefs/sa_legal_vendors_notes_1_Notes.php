<?php
// created: 2017-06-06 14:09:59
$dictionary["Note"]["fields"]["sa_legal_vendors_notes_1"] = array (
  'name' => 'sa_legal_vendors_notes_1',
  'type' => 'link',
  'relationship' => 'sa_legal_vendors_notes_1',
  'source' => 'non-db',
  'module' => 'SA_Legal_Vendors',
  'bean_name' => 'SA_Legal_Vendors',
  'vname' => 'LBL_SA_LEGAL_VENDORS_NOTES_1_FROM_SA_LEGAL_VENDORS_TITLE',
  'id_name' => 'sa_legal_vendors_notes_1sa_legal_vendors_ida',
);
$dictionary["Note"]["fields"]["sa_legal_vendors_notes_1_name"] = array (
  'name' => 'sa_legal_vendors_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_LEGAL_VENDORS_NOTES_1_FROM_SA_LEGAL_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'sa_legal_vendors_notes_1sa_legal_vendors_ida',
  'link' => 'sa_legal_vendors_notes_1',
  'table' => 'sa_legal_vendors',
  'module' => 'SA_Legal_Vendors',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["sa_legal_vendors_notes_1sa_legal_vendors_ida"] = array (
  'name' => 'sa_legal_vendors_notes_1sa_legal_vendors_ida',
  'type' => 'link',
  'relationship' => 'sa_legal_vendors_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_LEGAL_VENDORS_NOTES_1_FROM_NOTES_TITLE',
);
