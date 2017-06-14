<?php
// created: 2016-05-12 12:56:15
$dictionary["Note"]["fields"]["a4_sites_notes_1"] = array (
  'name' => 'a4_sites_notes_1',
  'type' => 'link',
  'relationship' => 'a4_sites_notes_1',
  'source' => 'non-db',
  'module' => 'A4_SITES',
  'bean_name' => 'A4_SITES',
  'vname' => 'LBL_A4_SITES_NOTES_1_FROM_A4_SITES_TITLE',
  'id_name' => 'a4_sites_notes_1a4_sites_ida',
);
$dictionary["Note"]["fields"]["a4_sites_notes_1_name"] = array (
  'name' => 'a4_sites_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A4_SITES_NOTES_1_FROM_A4_SITES_TITLE',
  'save' => true,
  'id_name' => 'a4_sites_notes_1a4_sites_ida',
  'link' => 'a4_sites_notes_1',
  'table' => 'a4_sites',
  'module' => 'A4_SITES',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["a4_sites_notes_1a4_sites_ida"] = array (
  'name' => 'a4_sites_notes_1a4_sites_ida',
  'type' => 'link',
  'relationship' => 'a4_sites_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A4_SITES_NOTES_1_FROM_NOTES_TITLE',
);