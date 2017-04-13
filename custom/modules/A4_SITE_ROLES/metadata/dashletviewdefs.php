<?php
$dashletData['A4_SITE_ROLESDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Mark Moore',
  ),
);
$dashletData['A4_SITE_ROLESDashlet']['columns'] = array (
  'a4_sites_a4_site_roles_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
    'id' => 'A4_SITES_A4_SITE_ROLES_1A4_SITES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'a4_sites_a4_site_roles_1_name',
  ),
  'a4_roles_a4_site_roles_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
    'id' => 'A4_ROLES_A4_SITE_ROLES_1A4_ROLES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'a4_roles_a4_site_roles_1_name',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
