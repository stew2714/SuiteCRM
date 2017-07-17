<?php
$module_name = 'SA_RelatedAgreements';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'relationship_from_type_c',
            'label' => 'LBL_RELATIONSHIP_FROM_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_relatedagreements_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'relationship_to_type_c',
            'label' => 'LBL_RELATIONSHIP_TO_TYPE',
          ),
        ),
      ),
    ),
  ),
);
?>
