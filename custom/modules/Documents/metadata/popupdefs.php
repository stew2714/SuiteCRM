<?php
$popupMeta = array (
    'moduleMain' => 'Documents',
    'varName' => 'DOCUMENTS',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'documents.name',
  'assigned_user_name' => 'documents.assigned_user_name',
  'filename' => 'documents.filename',
  'created_by_name' => 'documents.created_by_name',
  'contract_name' => 'documents.contract_name',
  'contract_status' => 'documents.contract_status',
  'aos_contracts_documents_1_name' => 'documents.aos_contracts_documents_1_name',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'assigned_user_name',
  2 => 'filename',
  3 => 'created_by_name',
  4 => 'contract_name',
  5 => 'contract_status',
  6 => 'aos_contracts_documents_1_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
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
  'filename' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILENAME',
    'width' => '10%',
    'name' => 'filename',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
  'contract_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTRACT_NAME',
    'width' => '10%',
    'name' => 'contract_name',
  ),
  'contract_status' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTRACT_STATUS',
    'width' => '10%',
    'name' => 'contract_status',
  ),
  'aos_contracts_documents_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_CONTRACTS_DOCUMENTS_1_FROM_AOS_CONTRACTS_TITLE',
    'id' => 'AOS_CONTRACTS_DOCUMENTS_1AOS_CONTRACTS_IDA',
    'width' => '10%',
    'name' => 'aos_contracts_documents_1_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_ACTIVE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SF_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SF_SUBCATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'AOS_CONTRACTS_DOCUMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_CONTRACTS_DOCUMENTS_1_FROM_AOS_CONTRACTS_TITLE',
    'id' => 'AOS_CONTRACTS_DOCUMENTS_1AOS_CONTRACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FILENAME' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILENAME',
    'width' => '10%',
    'default' => true,
  ),
),
);
