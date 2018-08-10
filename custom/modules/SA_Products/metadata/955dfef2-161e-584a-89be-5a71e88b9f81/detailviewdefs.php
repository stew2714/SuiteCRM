<?php
$module_name = 'SA_Products';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'shipping_c',
            'label' => 'LBL_SHIPPING_C',
          ),
          1 => 
          array (
            'name' => 'product_term_months_c',
            'label' => 'LBL_PRODUCT_TERM_MONTHS_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hardware_pricing_discount_c',
            'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'product_billing_c',
            'label' => 'LBL_PRODUCT_BILLING_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'software_pricing_discount_c',
            'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'hardware_gma_c',
            'label' => 'LBL_HARDWARE_GMA_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'implementation_and_training_discount_c',
            'label' => 'LBL_IMPLEMENTATION_AND_TRAINING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'software_maintenance_and_support_c',
            'label' => 'LBL_SOFTWARE_MAINTENANCE_AND_SUPPORT_C',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'product_gma_service_level_c',
            'label' => 'LBL_PRODUCT_GMA_SERVICE_LEVEL_C',
          ),
        ),
      ),
    ),
  ),
);
?>
