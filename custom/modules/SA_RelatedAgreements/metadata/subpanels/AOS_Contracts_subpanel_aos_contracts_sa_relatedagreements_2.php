<?php
// created: 2018-07-16 21:05:45
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'relationship_from_type_c' => 
  array (
    'default' => true,
    'type' => 'enum',
    'vname' => 'LBL_RELATIONSHIP_FROM_TYPE',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'SA_RelatedAgreements',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'SA_RelatedAgreements',
    'width' => '5%',
    'default' => true,
  ),
);