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
        'LBL_EDITVIEW_PANEL4' => 
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
          1 => 
          array (
            'name' => 'product_billing_c',
            'label' => 'LBL_PRODUCT_BILLING_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'product_term_for_convenien_c',
            'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIEN_C',
          ),
          1 => 
          array (
            'name' => 'product_billing_terms_c',
            'label' => 'LBL_PRODUCT_BILLING_TERMS_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'product_term_for_convenience_c',
            'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIENCE_C',
          ),
          1 => 
          array (
            'name' => 'product_price_increase_c',
            'label' => 'LBL_PRODUCT_PRICE_INCREASE_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'product_perpetual_c',
            'label' => 'LBL_PRODUCT_PERPETUAL_C',
          ),
          1 => 
          array (
            'name' => 'product_cia_c',
            'label' => 'LBL_PRODUCT_CIA_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'product_sow_version_c',
            'label' => 'LBL_PRODUCT_SOW_VERSION_C',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'product_sow_date_c',
            'label' => 'LBL_PRODUCT_SOW_DATE_C',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_effective_date_c',
            'label' => 'LBL_PRODUCT_GMA_EFFECTIVE_DATE_C',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_expiration_date_c',
            'label' => 'LBL_PRODUCT_GMA_EXPIRATION_DATE_C',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_term_months_c',
            'label' => 'LBL_PRODUCT_GMA_TERM_MONTHS_C',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_auto_renew_c',
            'label' => 'LBL_PRODUCT_GMA_AUTO_RENEW_C',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_renewal_term_months_c',
            'label' => 'LBL_PRODUCT_GMA_RENEWAL_TERM_MONTHS_C',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_termination_prior_to_ren_pic_c',
            'label' => 'LBL_PRODUCT_GMA_TERMINATION_PRIOR_TO_REN_PIC_C',
          ),
          1 => '',
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_renewal_start_date_c',
            'label' => 'LBL_PRODUCT_GMA_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'product_hosted_c',
            'label' => 'LBL_PRODUCT_HOSTED_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_service_level_c',
            'label' => 'LBL_PRODUCT_GMA_SERVICE_LEVEL_C',
          ),
          1 => 
          array (
            'name' => 'hosting_effective_date_c',
            'label' => 'LBL_HOSTING_EFFECTIVE_DATE_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_annual_increase_c',
            'label' => 'LBL_PRODUCT_GMA_ANNUAL_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'hosting_expiration_date_c',
            'label' => 'LBL_HOSTING_EXPIRATION_DATE_C',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'software_pricing_discount_c',
            'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'hosting_term_months_c',
            'label' => 'LBL_HOSTING_TERM_MONTHS_C',
          ),
        ),
        20 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'hosting_auto_renew_c',
            'label' => 'LBL_HOSTING_AUTO_RENEW_C',
          ),
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'hardware_pricing_discount_c',
            'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'hosting_renewal_term_months_c',
            'label' => 'LBL_HOSTING_RENEWAL_TERM_MONTHS_C',
          ),
        ),
        22 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'hosting_renewal_start_date_c',
            'label' => 'LBL_HOSTING_RENEWAL_START_DATE_C',
          ),
        ),
        23 => 
        array (
          0 => 
          array (
            'name' => 'product_general_notes_c',
            'label' => 'LBL_PRODUCT_GENERAL_NOTES_C',
          ),
          1 => 
          array (
            'name' => 'hosting_term_notice_period_dd_c',
            'label' => 'LBL_HOSTING_TERM_NOTICE_PERIOD_DD_C',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_attachment_numbe_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_NUMBE_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_attachment_effec_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EFFEC_C',
          ),
          1 => 
          array (
            'name' => 'software_maintenance_and_support_c',
            'label' => 'LBL_SOFTWARE_MAINTENANCE_AND_SUPPORT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_attachment_expir_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EXPIR_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_sow_version_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_SOW_VERSION_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_term_years_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERM_YEARS_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_sow_date_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_SOW_DATE_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_auto_renew_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_AUTO_RENEW_C',
          ),
          1 => 
          array (
            'name' => 'product_maintenance_and_support_service_c',
            'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_SERVICE_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_renewal_term_mon_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_RENEWAL_TERM_MON_C',
          ),
          1 => 
          array (
            'name' => 'hardware_gma_c',
            'label' => 'LBL_HARDWARE_GMA_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_termination_prio_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERMINATION_PRIO_C',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'maintenance_and_support_year_1_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_1_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_general_notes_c',
            'label' => 'LBL_MAINTENANCE_GENERAL_NOTES_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
