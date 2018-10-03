<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'email' => 'contacts.email',
  'title' => 'contacts.title',
  'contact_association_c' => 'contacts_cstm.contact_association_c',
  'survey_c' => 'contacts_cstm.survey_c',
  'sales_c' => 'contacts_cstm.sales_c',
  'assigned_user_name' => 'contacts.assigned_user_name',
  'active_c' => 'contacts_cstm.active_c',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  3 => 'email',
  4 => 'title',
  6 => 'contact_association_c',
  7 => 'survey_c',
  8 => 'sales_c',
  9 => 'assigned_user_name',
  10 => 'active_c',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'title' => 
  array (
    'name' => 'title',
    'width' => '10%',
  ),
  'contact_association_c' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_ASSOCIATION',
    'width' => '10%',
    'name' => 'contact_association_c',
  ),
  'survey_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SURVEY',
    'width' => '10%',
    'name' => 'survey_c',
  ),
  'active_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
    'name' => 'active_c',
  ),
  'sales_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SALES',
    'width' => '10%',
    'name' => 'sales_c',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TITLE',
    'default' => true,
    'name' => 'title',
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
    'name' => 'email1',
  ),
  'CONTACT_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_TYPE',
    'width' => '10%',
    'name' => 'contact_type_c',
  ),
  'CONTACT_ASSOCIATION_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_ASSOCIATION',
    'width' => '10%',
    'name' => 'contact_association_c',
  ),
  'ACTIVE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
),
);
