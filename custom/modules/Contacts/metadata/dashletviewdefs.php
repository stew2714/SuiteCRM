<?php
$dashletData['ContactsDashlet']['searchFields'] = array (
  'first_name' => 
  array (
    'default' => '',
  ),
  'last_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'title' => 
  array (
    'default' => '',
  ),
  'email1' => 
  array (
    'default' => '',
  ),
  'sales_c' => 
  array (
    'default' => '',
  ),
  'active_c' => 
  array (
    'default' => '',
  ),
  'contact_type_c' => 
  array (
    'default' => '',
  ),
  'contact_association_c' => 
  array (
    'default' => '',
  ),
  'reference_program_c' => 
  array (
    'default' => '',
  ),
  'survey_c' => 
  array (
    'default' => '',
  ),
  'primary_address_country' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['ContactsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'title' => 
  array (
    'width' => '20s%',
    'label' => 'LBL_TITLE',
    'default' => true,
    'name' => 'title',
  ),
  'email1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'name' => 'email1',
    'default' => true,
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
  'active_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
    'name' => 'active_c',
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
  'phone_home' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'name' => 'phone_home',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'additionalusers' => 
  array (
    'type' => 'additionalusers',
    'sortable' => false,
    'studio' => 
    array (
      'visible' => false,
      'listview' => true,
      'searchview' => false,
      'detailview' => true,
      'editview' => true,
      'formula' => false,
      'related' => false,
      'basic_search' => false,
      'advanced_search' => false,
      'popuplist' => true,
      'popupsearch' => false,
      'dashletsearch' => false,
      'dashlet' => true,
    ),
    'label' => 'LBL_ADDITIONALUSERS',
    'width' => '10%',
    'default' => false,
    'name' => 'additionalusers',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'phone_work' => 
  array (
    'width' => '15%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => false,
    'name' => 'phone_work',
  ),
  'securitygroup_display' => 
  array (
    'type' => 'function',
    'sortable' => false,
    'studio' => 
    array (
      'visible' => false,
      'listview' => true,
      'searchview' => false,
      'detailview' => true,
      'editview' => true,
      'formula' => false,
      'related' => false,
      'basic_search' => false,
      'advanced_search' => false,
      'popuplist' => true,
      'popupsearch' => false,
      'dashletsearch' => false,
      'dashlet' => false,
    ),
    'label' => 'LBL_SECURITYGROUP',
    'width' => '10%',
    'default' => false,
    'name' => 'securitygroup_display',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'assigned_user_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => false,
    'name' => 'assigned_user_name',
  ),
  'phone_mobile' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'name' => 'phone_mobile',
    'default' => false,
  ),
  'phone_other' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'name' => 'phone_other',
    'default' => false,
  ),
  'survey_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SURVEY',
    'width' => '10%',
    'name' => 'survey_c',
  ),
  'reference_program_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REFERENCE_PROGRAM',
    'width' => '10%',
    'name' => 'reference_program_c',
  ),
  'sales_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SALES',
    'width' => '10%',
    'name' => 'sales_c',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
