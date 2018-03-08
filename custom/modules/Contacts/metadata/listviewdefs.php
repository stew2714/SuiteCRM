<?php
$listViewDefs ['Contacts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TITLE',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '15%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
  ),
  'CONTACT_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_TYPE',
    'width' => '10%',
  ),
  'CONTACT_ASSOCIATION_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTACT_ASSOCIATION',
    'width' => '10%',
  ),
  'SALES_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_SALES',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DEPARTMENT' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DEPARTMENT',
    'default' => false,
  ),
  'ADDITIONALUSERS' => 
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
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'MARKETING_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_MARKETING',
    'width' => '10%',
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DO_NOT_CALL',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'OPERATIONAL_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_OPERATIONAL',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'SECURITYGROUP_DISPLAY' => 
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
  ),
  'REFERENCE_PROGRAM_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REFERENCE_PROGRAM',
    'width' => '10%',
  ),
  'ASSISTANT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ASSISTANT',
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
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'REPORT_TO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_REPORTS_TO',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'default' => false,
  ),
  'ASSISTANT_PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_ASSISTANT_PHONE',
    'width' => '10%',
    'default' => false,
  ),
  'SURVEY_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SURVEY',
    'width' => '10%',
  ),
  'EMAIL_AND_NAME1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'RELEASE_NOTIFICATION_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_RELEASE_NOTIFICATION',
    'width' => '10%',
  ),
  'LEAD_SOURCE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => false,
  ),
  'TECHNICAL_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_TECHNICAL',
    'width' => '10%',
  ),
  'REFERENCE_END_DATE_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_REFERENCE_END_DATE',
    'width' => '10%',
  ),
  'PHONE_OTHER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'REFERENCE_START_DATE_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_REFERENCE_START_DATE',
    'width' => '10%',
  ),
  'REFERENCE_ASSOCIATION_C' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_REFERENCE_ASSOCIATION',
    'width' => '10%',
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_FAX_PHONE',
    'default' => false,
  ),
  'SF_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Sf Id',
    'width' => '10%',
    'default' => false,
  ),
  'STANDARD_TITLE_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Standard Title',
    'width' => '10%',
    'default' => false,
  ),
  'EMAIL2' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL2_LINK}{$EMAIL2}</a>',
    'default' => false,
  ),
  'SOURCE_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Source',
    'width' => '10%',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
    'default' => false,
  ),
  'ELOQUA_LEAD_RATING_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Eloqua Lead Rating',
    'width' => '10%',
    'default' => false,
  ),
  'LEAD_SOURCE_MOST_RECENT_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Lead Source Most Recent',
    'width' => '10%',
    'default' => false,
  ),
  'SYNC_TO_ELOQUA_C' => 
  array (
    'type' => 'bool',
    'label' => 'Sync To Eloqua',
    'width' => '10%',
    'default' => false,
  ),
  'ACCOUNTING_INVOICES_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ACCOUNTING_INVOICES',
    'width' => '10%',
  ),
  'ASST_EMAIL_C' => 
  array (
    'type' => 'varchar',
    'label' => 'Asst Email',
    'width' => '10%',
    'default' => false,
  ),
  'VIP_ACCOUNT_C' => 
  array (
    'type' => 'bool',
    'label' => 'VIP Account',
    'width' => '10%',
    'default' => false,
  ),
  'REFERENCED_EMR_C' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_REFERENCED_EMR',
    'width' => '10%',
  ),
  'BUSINESS_CEO_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_BUSINESS_CEO',
    'width' => '10%',
  ),
  'PRIMARY_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'default' => false,
  ),
  'PRIMARY_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'ALT_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'ALT_ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_STREET',
    'default' => false,
  ),
  'ALT_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_CITY',
    'default' => false,
  ),
  'ALT_ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_STATE',
    'default' => false,
  ),
  'ALT_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ALT_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'SYNC_CONTACT' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_SYNC_CONTACT',
    'width' => '10%',
    'default' => false,
    'sortable' => false,
  ),
);
?>
