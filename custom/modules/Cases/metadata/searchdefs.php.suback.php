<?php
$searchdefs ['Cases'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'remedy_ticket_no_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REMEDY_TICKET_NO',
        'width' => '10%',
        'name' => 'remedy_ticket_no_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'remedy_ticket_no_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REMEDY_TICKET_NO',
        'width' => '10%',
        'name' => 'remedy_ticket_no_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'product_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRODUCT',
        'width' => '10%',
        'name' => 'product_c',
      ),
      'jira_issue_id_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_JIRA_ISSUE_ID',
        'width' => '10%',
        'name' => 'jira_issue_id_c',
      ),
      'assigned_user_id' => 
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
?>
