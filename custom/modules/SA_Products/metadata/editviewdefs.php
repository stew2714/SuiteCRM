<?php
$module_name = 'SA_Products';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
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
            'name' => 'cac_services_c',
            'label' => 'LBL_CAC_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'coding_general_notes_c',
            'label' => 'LBL_CODING_GENERAL_NOTES_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'coding_global_permissions_c',
            'label' => 'LBL_CODING_GLOBAL_PERMISSIONS_C',
          ),
          1 => 
          array (
            'name' => 'coding_global_permitted_c',
            'label' => 'LBL_CODING_GLOBAL_PERMITTED_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coding_price_book_rate_c',
            'label' => 'LBL_CODING_PRICE_BOOK_RATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_term_for_convenience_c',
            'label' => 'LBL_CODING_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ff_fix_send_to_other_party_for_review_c',
            'label' => 'LBL_FF_FIX_SEND_TO_OTHER_PARTY_FOR_REVIEW_C',
          ),
          1 => 
          array (
            'name' => 'ff_fix_send_to_other_party_signatures_c',
            'label' => 'LBL_FF_FIX_SEND_TO_OTHER_PARTY_SIGNATURES_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'fluency_for_coding_platform_c',
            'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
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
            'name' => 'hardware_pricing_discount_c',
            'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'hosting_auto_renew_c',
            'label' => 'LBL_HOSTING_AUTO_RENEW_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'hosting_effective_date_c',
            'label' => 'LBL_HOSTING_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'hosting_expiration_date_c',
            'label' => 'LBL_HOSTING_EXPIRATION_DATE_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'hosting_renewal_start_date_c',
            'label' => 'LBL_HOSTING_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'hosting_renewal_term_months_c',
            'label' => 'LBL_HOSTING_RENEWAL_TERM_MONTHS_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'hosting_term_months_c',
            'label' => 'LBL_HOSTING_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'hosting_term_notice_period_dd_c',
            'label' => 'LBL_HOSTING_TERM_NOTICE_PERIOD_DD_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'hosting_termination_prior_to_renewal_day_c',
            'label' => 'LBL_HOSTING_TERMINATION_PRIOR_TO_RENEWAL_DAY_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_attachment_effec_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EFFEC_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_attachment_expir_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EXPIR_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_attachment_numbe_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_NUMBE_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_auto_renew_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_AUTO_RENEW_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_renewal_term_mon_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_RENEWAL_TERM_MON_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_sow_date_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_SOW_DATE_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_sow_version_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_SOW_VERSION_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_term_years_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERM_YEARS_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_termination_prio_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERMINATION_PRIO_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_year_1_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_1_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_and_support_year_2_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_2_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_year_3_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_3_C',
          ),
          1 => 
          array (
            'name' => 'maintenance_general_notes_c',
            'label' => 'LBL_MAINTENANCE_GENERAL_NOTES_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'name_of_product_c',
            'label' => 'LBL_NAME_OF_PRODUCT_C',
          ),
          1 => 
          array (
            'name' => 'product_attachment_effective_date_c',
            'label' => 'LBL_PRODUCT_ATTACHMENT_EFFECTIVE_DATE_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'product_attachment_expiration_date_c',
            'label' => 'LBL_PRODUCT_ATTACHMENT_EXPIRATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'product_attachment_number_c',
            'label' => 'LBL_PRODUCT_ATTACHMENT_NUMBER_C',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'product_billing_c',
            'label' => 'LBL_PRODUCT_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'product_billing_terms_c',
            'label' => 'LBL_PRODUCT_BILLING_TERMS_C',
          ),
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'product_cia_c',
            'label' => 'LBL_PRODUCT_CIA_C',
          ),
          1 => 
          array (
            'name' => 'product_general_notes_c',
            'label' => 'LBL_PRODUCT_GENERAL_NOTES_C',
          ),
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_annual_increase_c',
            'label' => 'LBL_PRODUCT_GMA_ANNUAL_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'product_gma_auto_renew_c',
            'label' => 'LBL_PRODUCT_GMA_AUTO_RENEW_C',
          ),
        ),
        22 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_effective_date_c',
            'label' => 'LBL_PRODUCT_GMA_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'product_gma_expiration_date_c',
            'label' => 'LBL_PRODUCT_GMA_EXPIRATION_DATE_C',
          ),
        ),
        23 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_renewal_start_date_c',
            'label' => 'LBL_PRODUCT_GMA_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'product_gma_renewal_term_c',
            'label' => 'LBL_PRODUCT_GMA_RENEWAL_TERM_C',
          ),
        ),
        24 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_renewal_term_months_c',
            'label' => 'LBL_PRODUCT_GMA_RENEWAL_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'product_gma_service_level_c',
            'label' => 'LBL_PRODUCT_GMA_SERVICE_LEVEL_C',
          ),
        ),
        25 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_term_months_c',
            'label' => 'LBL_PRODUCT_GMA_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'product_gma_termination_period_dd_c',
            'label' => 'LBL_PRODUCT_GMA_TERMINATION_PERIOD_DD_C',
          ),
        ),
        26 => 
        array (
          0 => 
          array (
            'name' => 'product_gma_termination_prior_to_ren_pic_c',
            'label' => 'LBL_PRODUCT_GMA_TERMINATION_PRIOR_TO_REN_PIC_C',
          ),
          1 => 
          array (
            'name' => 'product_maintenance_and_support_auto_ren_c',
            'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_AUTO_REN_C',
          ),
        ),
        27 => 
        array (
          0 => 
          array (
            'name' => 'product_hosted_c',
            'label' => 'LBL_PRODUCT_HOSTED_C',
          ),
          1 => 
          array (
            'name' => 'product_maintenance_and_support_effectiv_c',
            'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_EFFECTIV_C',
          ),
        ),
        28 => 
        array (
          0 => 
          array (
            'name' => 'product_maintenance_and_support_expirati_c',
            'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_EXPIRATI_C',
          ),
          1 => 
          array (
            'name' => 'product_maintenance_and_support_service_c',
            'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_SERVICE_C',
          ),
        ),
        29 => 
        array (
          0 => 
          array (
            'name' => 'product_maintenance_and_support_term_mo_c',
            'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_TERM_MO_C',
          ),
          1 => 
          array (
            'name' => 'product_perpetual_c',
            'label' => 'LBL_PRODUCT_PERPETUAL_C',
          ),
        ),
        30 => 
        array (
          0 => 
          array (
            'name' => 'product_price_increase_c',
            'label' => 'LBL_PRODUCT_PRICE_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'product_sow_date_c',
            'label' => 'LBL_PRODUCT_SOW_DATE_C',
          ),
        ),
        31 => 
        array (
          0 => 
          array (
            'name' => 'product_sow_version_c',
            'label' => 'LBL_PRODUCT_SOW_VERSION_C',
          ),
          1 => 
          array (
            'name' => 'product_subscription_auto_renewal_c',
            'label' => 'LBL_PRODUCT_SUBSCRIPTION_AUTO_RENEWAL_C',
          ),
        ),
        32 => 
        array (
          0 => 
          array (
            'name' => 'product_term_for_convenien_c',
            'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIEN_C',
          ),
          1 => 
          array (
            'name' => 'product_term_for_convenience_c',
            'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        33 => 
        array (
          0 => 
          array (
            'name' => 'product_term_months_c',
            'label' => 'LBL_PRODUCT_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'software_maintenance_and_support_c',
            'label' => 'LBL_SOFTWARE_MAINTENANCE_AND_SUPPORT_C',
          ),
        ),
        34 => 
        array (
          0 => 
          array (
            'name' => 'software_pricing_discount_c',
            'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
          ),
          1 => '',
        ),
        35 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
