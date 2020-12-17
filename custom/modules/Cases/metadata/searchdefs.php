<?php
// created: 2020-10-16 16:08:36
$searchdefs['Cases'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REMEDY_TICKET_NO',
        'width' => '10%',
        'name' => 'remedy_ticket_no_c',
      ),
      1 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REMEDY_TICKET_NO',
        'width' => '10%',
        'name' => 'remedy_ticket_no_c',
      ),
      1 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRODUCT',
        'width' => '10%',
        'name' => 'product_c',
      ),
      6 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_JIRA_ISSUE_ID',
        'width' => '10%',
        'name' => 'jira_issue_id_c',
      ),
      7 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);