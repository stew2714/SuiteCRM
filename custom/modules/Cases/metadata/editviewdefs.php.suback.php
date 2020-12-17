<?php
// created: 2020-09-03 14:48:17
$viewdefs['Cases']['EditView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_CASE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'lbl_case_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'case_number',
          'type' => 'readonly',
        ),
        1 => 'priority',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'state',
          'comment' => 'The state of the case (i.e. open/closed)',
          'label' => 'LBL_STATE',
        ),
        1 => 'status',
      ),
      2 => 
      array (
        0 => 'type',
        1 => 'account_name',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
          ),
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'description',
        ),
        1 => 
        array (
          'name' => 'remedy_ticket_no_c',
          'label' => 'LBL_REMEDY_TICKET_NO',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'resolution',
          'nl2br' => true,
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'product_c',
          'label' => 'LBL_PRODUCT',
        ),
        1 => 
        array (
          'name' => 'jira_issue_id_c',
          'label' => 'LBL_JIRA_ISSUE_ID',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'case_update_form',
          'studio' => 'visible',
        ),
      ),
      8 => 
      array (
        0 => 'assigned_user_name',
        1 => 
        array (
          'name' => 'suggestion_box',
          'label' => 'LBL_SUGGESTION_BOX',
        ),
      ),
    ),
  ),
);