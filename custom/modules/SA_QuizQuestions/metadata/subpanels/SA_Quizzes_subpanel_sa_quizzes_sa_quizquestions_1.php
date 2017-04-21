<?php
// created: 2017-04-21 10:40:06
$subpanel_layout['list_fields'] = array (
  'question_number' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QUESTION_NUMBER',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'SA_QuizQuestions',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'SA_QuizQuestions',
    'width' => '5%',
    'default' => true,
  ),
);