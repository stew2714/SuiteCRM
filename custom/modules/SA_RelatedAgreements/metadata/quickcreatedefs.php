<?php
$module_name = 'SA_RelatedAgreements';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_relatedagreements_2_name',
            'label' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2_FROM_AOS_CONTRACTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_relatedagreements_1_name',
            'label' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_1_FROM_AOS_CONTRACTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
