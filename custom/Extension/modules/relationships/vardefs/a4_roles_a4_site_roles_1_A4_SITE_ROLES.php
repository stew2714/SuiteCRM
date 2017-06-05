<?php
// created: 2016-05-12 12:58:18
$dictionary["A4_SITE_ROLES"]["fields"]["a4_roles_a4_site_roles_1"] = array (
  'name' => 'a4_roles_a4_site_roles_1',
  'type' => 'link',
  'relationship' => 'a4_roles_a4_site_roles_1',
  'source' => 'non-db',
  'module' => 'A4_ROLES',
  'bean_name' => 'A4_ROLES',
  'vname' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
  'id_name' => 'a4_roles_a4_site_roles_1a4_roles_ida',
);
$dictionary["A4_SITE_ROLES"]["fields"]["a4_roles_a4_site_roles_1_name"] = array (
  'name' => 'a4_roles_a4_site_roles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
  'save' => true,
  'id_name' => 'a4_roles_a4_site_roles_1a4_roles_ida',
  'link' => 'a4_roles_a4_site_roles_1',
  'table' => 'a4_roles',
  'module' => 'A4_ROLES',
  'rname' => 'name',
);
$dictionary["A4_SITE_ROLES"]["fields"]["a4_roles_a4_site_roles_1a4_roles_ida"] = array (
  'name' => 'a4_roles_a4_site_roles_1a4_roles_ida',
  'type' => 'link',
  'relationship' => 'a4_roles_a4_site_roles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_SITE_ROLES_TITLE',
);
