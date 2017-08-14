<?php
$popupMeta = array (
    'moduleMain' => 'C1_Cust_Contacts1',
    'varName' => 'C1_Cust_Contacts1',
    'orderBy' => 'c1_cust_contacts1.first_name, c1_cust_contacts1.last_name',
    'whereClauses' => array (
  'full_name' => 'c1_cust_contacts1.full_name',
  'title' => 'c1_cust_contacts1.title',
  'contact_type' => 'c1_cust_contacts1.contact_type',
  'contact_association' => 'c1_cust_contacts1.contact_association',
  'survey' => 'c1_cust_contacts1.survey',
),
    'searchInputs' => array (
  2 => 'full_name',
  3 => 'title',
  4 => 'contact_type',
  5 => 'contact_association',
  6 => 'survey',
),
    'searchdefs' => array (
  'full_name' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'full_name',
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
  ),
  'contact_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_TYPE',
    'width' => '10%',
    'name' => 'contact_type',
  ),
  'contact_association' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_ASSOCIATION',
    'width' => '10%',
    'name' => 'contact_association',
  ),
  'survey' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SURVEY',
    'width' => '10%',
    'name' => 'survey',
  ),
),
    'listviewdefs' => array (
  'FULL_NAME' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
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
),
);
