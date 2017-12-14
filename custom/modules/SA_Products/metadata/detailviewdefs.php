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
            'name' => 'product_attachment_number_c',
            'label' => 'LBL_PRODUCT_ATTACHMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'name_of_product_c',
            'label' => 'LBL_NAME_OF_PRODUCT_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'product_attachment_effective_date_c',
            'label' => 'LBL_PRODUCT_ATTACHMENT_EFFECTIVE_DATE_C',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'product_attachment_expiration_date_c',
            'label' => 'LBL_PRODUCT_ATTACHMENT_EXPIRATION_DATE_C',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'product_term_months_c',
            'label' => 'LBL_PRODUCT_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'shipping_c',
            'label' => 'LBL_SHIPPING_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'product_subscription_auto_renewal_c',
            'label' => 'LBL_PRODUCT_SUBSCRIPTION_AUTO_RENEWAL_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'product_term_for_convenien_c',
            'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIEN_C',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'product_term_for_convenience_c',
            'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIENCE_C',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'product_hosted_c',
            'label' => 'LBL_PRODUCT_HOSTED_C',
          ),
          1 => 
          array (
            'name' => 'product_billing_c',
            'label' => 'LBL_PRODUCT_BILLING_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'hardware_pricing_discount_c',
            'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'hardware_gma_c',
            'label' => 'LBL_HARDWARE_GMA_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'software_pricing_discount_c',
            'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
          ),
          1 => '',
        ),
        11 => 
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
