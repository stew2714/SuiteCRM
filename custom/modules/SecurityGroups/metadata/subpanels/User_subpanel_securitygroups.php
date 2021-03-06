<?php
// created: 2018-02-14 16:18:56
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'securitygroup_noninheritable' => 
  array (
    'name' => 'securitygroup_noninheritable',
    'vname' => 'LBL_LIST_NONINHERITABLE',
    'width' => '10%',
    'sortable' => false,
    'widget_type' => 'checkbox',
    'default' => true,
  ),
  'securitygroup_primary_group' => 
  array (
    'name' => 'securitygroup_primary_group',
    'vname' => 'LBL_PRIMARY_GROUP',
    'width' => '10%',
    'sortable' => false,
    'widget_type' => 'checkbox',
    'default' => true,
  ),
  'description' => 
  array (
    'vname' => 'LBL_DESCRIPTION',
    'width' => '45%',
    'sortable' => false,
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditSecurityGroupUserButton',
    'securitygroup_noninherit_id' => 'securitygroup_noninherit_id',
    'module' => 'SecurityGroups',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'SecurityGroups',
    'width' => '5%',
    'refresh_page' => true,
    'default' => true,
  ),
  'securitygroup_noninher_fields' => 
  array (
    'usage' => 'query_only',
  ),
  'securitygroup_noninherit_id' => 
  array (
    'usage' => 'query_only',
  ),
);