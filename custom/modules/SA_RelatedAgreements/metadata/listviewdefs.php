<?php
$module_name = 'SA_RelatedAgreements';
$listViewDefs [$module_name] = 
array (
  'AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2_FROM_AOS_CONTRACTS_TITLE',
    'id' => 'AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2AOS_CONTRACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'RELATIONSHIP_FROM_TYPE_C' => 
  array (
    'default' => true,
    'type' => 'enum',
    'label' => 'LBL_RELATIONSHIP_FROM_TYPE',
    'width' => '10%',
  ),
  'AOS_CONTRACTS_SA_RELATEDAGREEMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_1_FROM_AOS_CONTRACTS_TITLE',
    'id' => 'AOS_CONTRACTS_SA_RELATEDAGREEMENTS_1AOS_CONTRACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'RELATIONSHIP_TO_TYPE_C' => 
  array (
    'default' => true,
    'type' => 'enum',
    'label' => 'LBL_RELATIONSHIP_TO_TYPE',
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
