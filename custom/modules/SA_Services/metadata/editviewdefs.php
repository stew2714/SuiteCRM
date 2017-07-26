<?php
$module_name = 'SA_Services';
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
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'coding_attachment_number_c',
            'label' => 'LBL_CODING_ATTACHMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'coding_auto_renew_c',
            'label' => 'LBL_CODING_AUTO_RENEW_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coding_billing_c',
            'label' => 'LBL_CODING_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'coding_commitment_c',
            'label' => 'LBL_CODING_COMMITMENT_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'coding_effective_date_c',
            'label' => 'LBL_CODING_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_estimated_billing_c',
            'label' => 'LBL_CODING_ESTIMATED_BILLING_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'coding_evergreen_c',
            'label' => 'LBL_CODING_EVERGREEN_C',
          ),
          1 => 
          array (
            'name' => 'coding_expiration_date_c',
            'label' => 'LBL_CODING_EXPIRATION_DATE_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'coding_implementation_training_fees_c',
            'label' => 'LBL_CODING_IMPLEMENTATION_TRAINING_FEES_C',
          ),
          1 => 
          array (
            'name' => 'coding_pricing_c',
            'label' => 'LBL_CODING_PRICING_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'coding_pricing_category_rate_c',
            'label' => 'LBL_CODING_PRICING_CATEGORY_RATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_pricing_increase_c',
            'label' => 'LBL_CODING_PRICING_INCREASE_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'coding_renewal_consent_c',
            'label' => 'LBL_CODING_RENEWAL_CONSENT_C',
          ),
          1 => 
          array (
            'name' => 'coding_renewal_notification_period_dd_c',
            'label' => 'LBL_CODING_RENEWAL_NOTIFICATION_PERIOD_DD_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'coding_renewal_start_date_c',
            'label' => 'LBL_CODING_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_renewal_term_months_c',
            'label' => 'LBL_CODING_RENEWAL_TERM_MONTHS_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'coding_renewal_terms_c',
            'label' => 'LBL_CODING_RENEWAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'coding_revenue_c',
            'label' => 'LBL_CODING_REVENUE_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'coding_sow_date_c',
            'label' => 'LBL_CODING_SOW_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_sow_version_c',
            'label' => 'LBL_CODING_SOW_VERSION_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'coding_term_for_convenience_notice_dd_c',
            'label' => 'LBL_CODING_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
          1 => 
          array (
            'name' => 'coding_term_months_c',
            'label' => 'LBL_CODING_TERM_MONTHS_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'coding_termination_for_convenience_c',
            'label' => 'LBL_CODING_TERMINATION_FOR_CONVENIENCE_C',
          ),
          1 => 
          array (
            'name' => 'coding_termination_prior_to_renewal_c',
            'label' => 'LBL_CODING_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'coding_termination_prior_to_renewal_days_c',
            'label' => 'LBL_CODING_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'codingt_renewal_notice_days_c',
            'label' => 'LBL_CODINGT_RENEWAL_NOTICE_DAYS_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'estimated_fft_existing_volume_c',
            'label' => 'LBL_ESTIMATED_FFT_EXISTING_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'estimated_fft_new_volume_c',
            'label' => 'LBL_ESTIMATED_FFT_NEW_VOLUME_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'estimated_tos_existing_volume_c',
            'label' => 'LBL_ESTIMATED_TOS_EXISTING_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'estimated_tos_new_volume_c',
            'label' => 'LBL_ESTIMATED_TOS_NEW_VOLUME_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'fft_attachment_number_c',
            'label' => 'LBL_FFT_ATTACHMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'fft_auto_renew_c',
            'label' => 'LBL_FFT_AUTO_RENEW_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'fft_billing_c',
            'label' => 'LBL_FFT_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'fft_effective_date_c',
            'label' => 'LBL_FFT_EFFECTIVE_DATE_C',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'fft_evergreen_c',
            'label' => 'LBL_FFT_EVERGREEN_C',
          ),
          1 => 
          array (
            'name' => 'fft_expiration_date_c',
            'label' => 'LBL_FFT_EXPIRATION_DATE_C',
          ),
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'fft_general_notes_c',
            'label' => 'LBL_FFT_GENERAL_NOTES_C',
          ),
          1 => 
          array (
            'name' => 'fft_implementation_training_fees_c',
            'label' => 'LBL_FFT_IMPLEMENTATION_TRAINING_FEES_C',
          ),
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'fft_pricing_category_c',
            'label' => 'LBL_FFT_PRICING_CATEGORY_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_category_rate_c',
            'label' => 'LBL_FFT_PRICING_CATEGORY_RATE_C',
          ),
        ),
        22 => 
        array (
          0 => 
          array (
            'name' => 'fft_pricing_category_uom_c',
            'label' => 'LBL_FFT_PRICING_CATEGORY_UOM_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_increase_c',
            'label' => 'LBL_FFT_PRICING_INCREASE_C',
          ),
        ),
        23 => 
        array (
          0 => 
          array (
            'name' => 'fft_renewal_consent_c',
            'label' => 'LBL_FFT_RENEWAL_CONSENT_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_other_c',
            'label' => 'LBL_FFT_PRICING_OTHER_C',
          ),
        ),
        24 => 
        array (
          0 => 
          array (
            'name' => 'fft_renewal_notice_days_c',
            'label' => 'LBL_FFT_RENEWAL_NOTICE_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'fft_renewal_notification_period_dd_c',
            'label' => 'LBL_FFT_RENEWAL_NOTIFICATION_PERIOD_DD_C',
          ),
        ),
        25 => 
        array (
          0 => 
          array (
            'name' => 'fft_renewal_term_months_c',
            'label' => 'LBL_FFT_RENEWAL_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'fft_renewal_start_date_c',
            'label' => 'LBL_FFT_RENEWAL_START_DATE_C',
          ),
        ),
        26 => 
        array (
          0 => 
          array (
            'name' => 'fft_revenue_c',
            'label' => 'LBL_FFT_REVENUE_C',
          ),
          1 => 
          array (
            'name' => 'fft_shipping_c',
            'label' => 'LBL_FFT_SHIPPING_C',
          ),
        ),
        27 => 
        array (
          0 => 
          array (
            'name' => 'fft_sow_date_c',
            'label' => 'LBL_FFT_SOW_DATE_C',
          ),
          1 => 
          array (
            'name' => 'fft_renewal_terms_c',
            'label' => 'LBL_FFT_RENEWAL_TERMS_C',
          ),
        ),
        28 => 
        array (
          0 => 
          array (
            'name' => 'fft_sow_version_c',
            'label' => 'LBL_FFT_SOW_VERSION_C',
          ),
          1 => 
          array (
            'name' => 'fft_term_for_convenience_c',
            'label' => 'LBL_FFT_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        29 => 
        array (
          0 => 
          array (
            'name' => 'fft_term_for_convenience_notice_dd_c',
            'label' => 'LBL_FFT_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
          1 => 
          array (
            'name' => 'fft_term_months_c',
            'label' => 'LBL_FFT_TERM_MONTHS_C',
          ),
        ),
        30 => 
        array (
          0 => 
          array (
            'name' => 'fft_termination_for_convenience_c',
            'label' => 'LBL_FFT_TERMINATION_FOR_CONVENIENCE_C',
          ),
          1 => 
          array (
            'name' => 'fft_termination_prior_to_renewal_c',
            'label' => 'LBL_FFT_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        31 => 
        array (
          0 => 
          array (
            'name' => 'fft_termination_prior_to_renewal_days_c',
            'label' => 'LBL_FFT_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'fft_volume_guarantee_c',
            'label' => 'LBL_FFT_VOLUME_GUARANTEE_C',
          ),
        ),
        32 => 
        array (
          0 => 
          array (
            'name' => 'implementation_and_training_discount_c',
            'label' => 'LBL_IMPLEMENTATION_AND_TRAINING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'number_of_mt_s_for_hire_c',
            'label' => 'LBL_NUMBER_OF_MT_S_FOR_HIRE_C',
          ),
        ),
        33 => 
        array (
          0 => 
          array (
            'name' => 'other_transcription_platform_c',
            'label' => 'LBL_OTHER_TRANSCRIPTION_PLATFORM_C',
          ),
          1 => 
          array (
            'name' => 'qa_penalty_details_c',
            'label' => 'LBL_QA_PENALTY_DETAILS_C',
          ),
        ),
        34 => 
        array (
          0 => 
          array (
            'name' => 'service_or_product_warranty_c',
            'label' => 'LBL_SERVICE_OR_PRODUCT_WARRANTY_C',
          ),
          1 => 
          array (
            'name' => 'tat_credit_details_c',
            'label' => 'LBL_TAT_CREDIT_DETAILS_C',
          ),
        ),
        35 => 
        array (
          0 => 
          array (
            'name' => 'tat_credit_standard_c',
            'label' => 'LBL_TAT_CREDIT_STANDARD_C',
          ),
          1 => 
          array (
            'name' => 'tat_credits_c',
            'label' => 'LBL_TAT_CREDITS_C',
          ),
        ),
        36 => 
        array (
          0 => 
          array (
            'name' => 'tos_attachment_number_c',
            'label' => 'LBL_TOS_ATTACHMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'tos_auto_renew_c',
            'label' => 'LBL_TOS_AUTO_RENEW_C',
          ),
        ),
        37 => 
        array (
          0 => 
          array (
            'name' => 'tos_billing_c',
            'label' => 'LBL_TOS_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'tos_commitment_c',
            'label' => 'LBL_TOS_COMMITMENT_C',
          ),
        ),
        38 => 
        array (
          0 => 
          array (
            'name' => 'tos_effective_date_c',
            'label' => 'LBL_TOS_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_evergreen_c',
            'label' => 'LBL_TOS_EVERGREEN_C',
          ),
        ),
        39 => 
        array (
          0 => 
          array (
            'name' => 'tos_expiration_date_c',
            'label' => 'LBL_TOS_EXPIRATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_general_notes_c',
            'label' => 'LBL_TOS_GENERAL_NOTES_C',
          ),
        ),
        40 => 
        array (
          0 => 
          array (
            'name' => 'tos_price_book_rate_c',
            'label' => 'LBL_TOS_PRICE_BOOK_RATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_price_book_rate_v2_c',
            'label' => 'LBL_TOS_PRICE_BOOK_RATE_V2_C',
          ),
        ),
        41 => 
        array (
          0 => 
          array (
            'name' => 'tos_price_increase_during_initial_term_c',
            'label' => 'LBL_TOS_PRICE_INCREASE_DURING_INITIAL_TERM_C',
          ),
          1 => 
          array (
            'name' => 'tos_pricing_category_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_C',
          ),
        ),
        42 => 
        array (
          0 => 
          array (
            'name' => 'tos_pricing_category_rate_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_RATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_pricing_category_uom_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_UOM_C',
          ),
        ),
        43 => 
        array (
          0 => 
          array (
            'name' => 'tos_pricing_increase_c',
            'label' => 'LBL_TOS_PRICING_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'tos_pricing_other_c',
            'label' => 'LBL_TOS_PRICING_OTHER_C',
          ),
        ),
        44 => 
        array (
          0 => 
          array (
            'name' => 'tos_renewal_consent_c',
            'label' => 'LBL_TOS_RENEWAL_CONSENT_C',
          ),
          1 => 
          array (
            'name' => 'tos_renewal_notification_period_dd_c',
            'label' => 'LBL_TOS_RENEWAL_NOTIFICATION_PERIOD_DD_C',
          ),
        ),
        45 => 
        array (
          0 => 
          array (
            'name' => 'tos_renewal_start_date_c',
            'label' => 'LBL_TOS_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_renewal_term_mm_c',
            'label' => 'LBL_TOS_RENEWAL_TERM_MM_C',
          ),
        ),
        46 => 
        array (
          0 => 
          array (
            'name' => 'tos_revenue_c',
            'label' => 'LBL_TOS_REVENUE_C',
          ),
          1 => 
          array (
            'name' => 'tos_term_for_convenience_c',
            'label' => 'LBL_TOS_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        47 => 
        array (
          0 => 
          array (
            'name' => 'tos_renewal_terms_c',
            'label' => 'LBL_TOS_RENEWAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'tos_term_for_convenience_notice_dd_c',
            'label' => 'LBL_TOS_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
        ),
        48 => 
        array (
          0 => 
          array (
            'name' => 'tos_term_mm_c',
            'label' => 'LBL_TOS_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'tos_termination_for_convenience_c',
            'label' => 'LBL_TOS_TERMINATION_FOR_CONVENIENCE_C',
          ),
        ),
        49 => 
        array (
          0 => 
          array (
            'name' => 'tos_termination_for_convenience_notice_c',
            'label' => 'LBL_TOS_TERMINATION_FOR_CONVENIENCE_NOTICE_C',
          ),
          1 => 
          array (
            'name' => 'tos_termination_prior_to_renewal_c',
            'label' => 'LBL_TOS_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        50 => 
        array (
          0 => 
          array (
            'name' => 'tos_termination_prior_to_renewal_days_c',
            'label' => 'LBL_TOS_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'transcription_platform_c',
            'label' => 'LBL_TRANSCRIPTION_PLATFORM_C',
          ),
        ),
        51 => 
        array (
          0 => 
          array (
            'name' => 'union_mt_s_c',
            'label' => 'LBL_UNION_MT_S_C',
          ),
          1 => 
          array (
            'name' => 'volume_guarantee_c',
            'label' => 'LBL_VOLUME_GUARANTEE_C',
          ),
        ),
      ),
    ),
  ),
);
?>
