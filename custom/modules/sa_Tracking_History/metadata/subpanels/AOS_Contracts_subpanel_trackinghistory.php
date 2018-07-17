<?php
// created: 2018-07-16 21:06:27
$subpanel_layout['list_fields'] = array (
  'field' => 
  array (
    'vname' => 'LBL_FIELD',
    'width' => '20%',
    'default' => true,
  ),
  'previous_value' => 
  array (
    'vname' => 'LBL_PREVIOUS_VALUE',
    'width' => '20%',
    'default' => true,
  ),
  'new_value' => 
  array (
    'vname' => 'LBL_NEW_VALUE',
    'width' => '20%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
  ),
);