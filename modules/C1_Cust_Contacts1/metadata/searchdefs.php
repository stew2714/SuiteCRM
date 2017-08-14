<?php
$module_name = 'C1_Cust_Contacts1';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'default' => true,
        'width' => '10%',
      ),
      'contact_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_type',
      ),
      'survey' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SURVEY',
        'width' => '10%',
        'name' => 'survey',
      ),
      'operational' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_OPERATIONAL',
        'width' => '10%',
        'name' => 'operational',
      ),
      'technical' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TECHNICAL',
        'width' => '10%',
        'name' => 'technical',
      ),
      'release_notification' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_RELEASE_NOTIFICATION',
        'width' => '10%',
        'name' => 'release_notification',
      ),
      'reference_program' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_REFERENCE_PROGRAM',
        'width' => '10%',
        'name' => 'reference_program',
      ),
      'accounting_invoices' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACCOUNTING_INVOICES',
        'width' => '10%',
        'name' => 'accounting_invoices',
      ),
      'sales' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SALES',
        'width' => '10%',
        'name' => 'sales',
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
