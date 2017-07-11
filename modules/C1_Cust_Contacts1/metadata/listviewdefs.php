<?php
$module_name = 'C1_Cust_Contacts1';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'orderBy' => 'last_name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'CONTACT_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACT_ASSOCIATION' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_ASSOCIATION',
    'width' => '10%',
    'default' => true,
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DO_NOT_CALL',
    'default' => false,
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => false,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => false,
  ),
  'SALUTATION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SALUTATION',
    'width' => '10%',
    'default' => false,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_OTHER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WORK_PHONE',
    'default' => false,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_FAX_PHONE',
    'default' => false,
  ),
  'FULL_NAME' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
    'width' => '10%',
    'default' => false,
  ),
  'DEPARTMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'width' => '10%',
    'default' => false,
  ),
  'OPERATIONAL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_OPERATIONAL',
    'width' => '10%',
  ),
  'PRIMARY_ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => false,
  ),
  'REFERENCE_PROGRAM' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REFERENCE_PROGRAM',
    'width' => '10%',
  ),
  'BUSINESS_CEO' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_BUSINESS_CEO',
    'width' => '10%',
  ),
  'LEAD_SOURCE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => false,
  ),
  'ACCOUNTING_INVOICES' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ACCOUNTING_INVOICES',
    'width' => '10%',
  ),
  'TECHNICAL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_TECHNICAL',
    'width' => '10%',
  ),
  'SALES' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SALES',
    'width' => '10%',
  ),
  'RELEASE_NOTIFICATION' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_RELEASE_NOTIFICATION',
    'width' => '10%',
  ),
  'MARKETING' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_MARKETING',
    'width' => '10%',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '15%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'SURVEY' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SURVEY',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
