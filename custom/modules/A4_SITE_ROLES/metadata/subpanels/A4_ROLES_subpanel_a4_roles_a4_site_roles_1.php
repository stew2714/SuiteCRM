<?php
// created: 2016-06-28 13:43:58
$subpanel_layout['list_fields'] = array (
  'a4_roles_a4_site_roles_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_A4_ROLES_A4_SITE_ROLES_1_FROM_A4_ROLES_TITLE',
    'id' => 'A4_ROLES_A4_SITE_ROLES_1A4_ROLES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'A4_ROLES',
    'target_record_key' => 'a4_roles_a4_site_roles_1a4_roles_ida',
  ),
  'a4_sites_a4_site_roles_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE',
    'id' => 'A4_SITES_A4_SITE_ROLES_1A4_SITES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'A4_SITES',
    'target_record_key' => 'a4_sites_a4_site_roles_1a4_sites_ida',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
);