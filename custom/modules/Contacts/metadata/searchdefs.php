<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'active_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIVE',
        'width' => '10%',
        'name' => 'active_c',
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
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contact_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_TYPE',
        'width' => '10%',
        'name' => 'contact_type_c',
      ),
      'survey_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SURVEY',
        'width' => '10%',
        'name' => 'survey_c',
      ),
      'operational_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_OPERATIONAL',
        'width' => '10%',
        'name' => 'operational_c',
      ),
      'marketing_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_MARKETING',
        'width' => '10%',
        'name' => 'marketing_c',
      ),
      'technical_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TECHNICAL',
        'width' => '10%',
        'name' => 'technical_c',
      ),
      'release_notification_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_RELEASE_NOTIFICATION',
        'width' => '10%',
        'name' => 'release_notification_c',
      ),
      'reference_program_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_REFERENCE_PROGRAM',
        'width' => '10%',
        'name' => 'reference_program_c',
      ),
      'accounting_invoices_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACCOUNTING_INVOICES',
        'width' => '10%',
        'name' => 'accounting_invoices_c',
      ),
      'sales_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SALES',
        'width' => '10%',
        'name' => 'sales_c',
      ),
      'contact_association_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_ASSOCIATION',
        'width' => '10%',
        'name' => 'contact_association_c',
      ),
      'active_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIVE',
        'width' => '10%',
        'name' => 'active_c',
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
