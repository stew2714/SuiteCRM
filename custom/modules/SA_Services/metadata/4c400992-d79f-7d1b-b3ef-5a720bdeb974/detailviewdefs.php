<?php
$module_name = 'SA_Services';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
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
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'tos_expiration_date_c',
            'label' => 'LBL_TOS_EXPIRATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_termination_prior_to_renewal_c',
            'label' => 'LBL_TOS_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tos_term_mm_c',
            'label' => 'LBL_TOS_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'tos_termination_prior_to_renewal_days_c',
            'label' => 'LBL_TOS_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tos_renewal_start_date_c',
            'label' => 'LBL_TOS_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'tos_renewal_terms_c',
            'label' => 'LBL_TOS_RENEWAL_TERMS_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'tos_renewal_term_mm_c',
            'label' => 'LBL_TOS_RENEWAL_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'tos_renewal_consent_c',
            'label' => 'LBL_TOS_RENEWAL_CONSENT_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'transcription_platform_c',
            'label' => 'LBL_TRANSCRIPTION_PLATFORM_C',
          ),
          1 => 
          array (
            'name' => 'tos_renewal_notification_period_dd_c',
            'label' => 'LBL_TOS_RENEWAL_NOTIFICATION_PERIOD_DD_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'other_transcription_platform_c',
            'label' => 'LBL_OTHER_TRANSCRIPTION_PLATFORM_C',
          ),
          1 => 
          array (
            'name' => 'tos_termination_for_convenience_c',
            'label' => 'LBL_TOS_TERMINATION_FOR_CONVENIENCE_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'tat_credits_c',
            'label' => 'LBL_TAT_CREDITS_C',
          ),
          1 => 
          array (
            'name' => 'tos_term_for_convenience_c',
            'label' => 'LBL_TOS_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'tat_credit_standard_c',
            'label' => 'LBL_TAT_CREDIT_STANDARD_C',
          ),
          1 => 
          array (
            'name' => 'tos_term_for_convenience_notice_dd_c',
            'label' => 'LBL_TOS_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'tat_credit_details_c',
            'label' => 'LBL_TAT_CREDIT_DETAILS_C',
          ),
          1 => 
          array (
            'name' => 'grace_period_c',
            'label' => 'LBL_GRACE_PERIOD_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'qa_program_c',
            'label' => 'LBL_QA_PROGRAM_C',
          ),
          1 => 
          array (
            'name' => 'global_permitted_c',
            'label' => 'LBL_GLOBAL_PERMITTED_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'qa_penalty_details_c',
            'label' => 'LBL_QA_PENALTY_DETAILS_C',
          ),
          1 => 
          array (
            'name' => 'global_permissions_c',
            'label' => 'LBL_GLOBAL_PERMISSIONS_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'stat_report_tat_c',
            'label' => 'LBL_STAT_REPORT_TAT_C',
          ),
          1 => 
          array (
            'name' => 'tos_commitment_c',
            'label' => 'LBL_TOS_COMMITMENT_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'tos_pricing_category_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_C',
          ),
          1 => 
          array (
            'name' => 'tos_billing_c',
            'label' => 'LBL_TOS_BILLING_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'tos_pricing_category_uom_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_UOM_C',
          ),
          1 => 
          array (
            'name' => 'estimated_billing_c',
            'label' => 'LBL_ESTIMATED_BILLING_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'tos_pricing_other_c',
            'label' => 'LBL_TOS_PRICING_OTHER_C',
          ),
          1 => 
          array (
            'name' => 'hire_client_mt_s_c',
            'label' => 'LBL_HIRE_CLIENT_MT_S_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'tos_pricing_increase_c',
            'label' => 'LBL_TOS_PRICING_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'union_mt_s_c',
            'label' => 'LBL_UNION_MT_S_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'tos_price_increase_during_initial_term_c',
            'label' => 'LBL_TOS_PRICE_INCREASE_DURING_INITIAL_TERM_C',
          ),
          1 => 
          array (
            'name' => 'number_of_mt_s_for_hire_c',
            'label' => 'LBL_NUMBER_OF_MT_S_FOR_HIRE_C',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'tos_price_book_rate_v2_c',
            'label' => 'LBL_TOS_PRICE_BOOK_RATE_V2_C',
          ),
          1 => 
          array (
            'name' => 'volume_guarantee_c',
            'label' => 'LBL_VOLUME_GUARANTEE_C',
          ),
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'tos_revenue_c',
            'label' => 'LBL_TOS_REVENUE_C',
          ),
          1 => 
          array (
            'name' => 'estimated_tos_existing_volume_c',
            'label' => 'LBL_ESTIMATED_TOS_EXISTING_VOLUME_C',
          ),
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'tos_general_notes_c',
            'label' => 'LBL_TOS_GENERAL_NOTES_C',
          ),
          1 => 
          array (
            'name' => 'estimated_tos_new_volume_c',
            'label' => 'LBL_ESTIMATED_TOS_NEW_VOLUME_C',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'fft_effective_date_c',
            'label' => 'LBL_FFT_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'fft_evergreen_c',
            'label' => 'LBL_FFT_EVERGREEN_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fft_expiration_date_c',
            'label' => 'LBL_FFT_EXPIRATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'fft_termination_prior_to_renewal_c',
            'label' => 'LBL_FFT_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fft_term_months_c',
            'label' => 'LBL_FFT_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'fft_termination_prior_to_renewal_days_c',
            'label' => 'LBL_FFT_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fft_renewal_start_date_c',
            'label' => 'LBL_FFT_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'fft_renewal_terms_c',
            'label' => 'LBL_FFT_RENEWAL_TERMS_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'fft_renewal_term_months_c',
            'label' => 'LBL_FFT_RENEWAL_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'fft_renewal_consent_c',
            'label' => 'LBL_FFT_RENEWAL_CONSENT_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'included_optional_system_components_c',
            'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
          ),
          1 => 
          array (
            'name' => 'fft_renewal_notification_period_dd_c',
            'label' => 'LBL_FFT_RENEWAL_NOTIFICATION_PERIOD_DD_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'extended_voice_retention_c',
            'label' => 'LBL_EXTENDED_VOICE_RETENTION_C',
          ),
          1 => 
          array (
            'name' => 'fft_termination_for_convenience_c',
            'label' => 'LBL_FFT_TERMINATION_FOR_CONVENIENCE_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'extended_adt_retention_c',
            'label' => 'LBL_EXTENDED_ADT_RETENTION_C',
          ),
          1 => 
          array (
            'name' => 'fft_term_for_convenience_c',
            'label' => 'LBL_FFT_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'extended_report_retention_c',
            'label' => 'LBL_EXTENDED_REPORT_RETENTION_C',
          ),
          1 => 
          array (
            'name' => 'fft_term_for_convenience_notice_dd_c',
            'label' => 'LBL_FFT_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'fft_shipping_c',
            'label' => 'LBL_FFT_SHIPPING_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_category_c',
            'label' => 'LBL_FFT_PRICING_CATEGORY_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'fft_sow_version_c',
            'label' => 'LBL_FFT_SOW_VERSION_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_category_uom_c',
            'label' => 'LBL_FFT_PRICING_CATEGORY_UOM_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'fft_sow_date_c',
            'label' => 'LBL_FFT_SOW_DATE_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_other_c',
            'label' => 'LBL_FFT_PRICING_OTHER_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'm_modal_travel_living_policy_c',
            'label' => 'LBL_M_MODAL_TRAVEL_LIVING_POLICY_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_increase_c',
            'label' => 'LBL_FFT_PRICING_INCREASE_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'travel_living_fees_c',
            'label' => 'LBL_TRAVEL_LIVING_FEES_C',
          ),
          1 => 
          array (
            'name' => 'fft_implementation_training_fees_c',
            'label' => 'LBL_FFT_IMPLEMENTATION_TRAINING_FEES_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'fft_volume_guarantee_c',
            'label' => 'LBL_FFT_VOLUME_GUARANTEE_C',
          ),
          1 => 
          array (
            'name' => 'fft_billing_c',
            'label' => 'LBL_FFT_BILLING_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'estimated_fft_existing_volume_c',
            'label' => 'LBL_ESTIMATED_FFT_EXISTING_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'fft_revenue_c',
            'label' => 'LBL_FFT_REVENUE_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'estimated_fft_new_volume_c',
            'label' => 'LBL_ESTIMATED_FFT_NEW_VOLUME_C',
          ),
          1 => '',
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'fft_general_notes_c',
            'label' => 'LBL_FFT_GENERAL_NOTES_C',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'coding_effective_date_c',
            'label' => 'LBL_CODING_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_evergreen_c',
            'label' => 'LBL_CODING_EVERGREEN_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'coding_expiration_date_c',
            'label' => 'LBL_CODING_EXPIRATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_termination_prior_to_renewal_c',
            'label' => 'LBL_CODING_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coding_term_months_c',
            'label' => 'LBL_CODING_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'coding_termination_prior_to_renewal_days_c',
            'label' => 'LBL_CODING_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'coding_renewal_start_date_c',
            'label' => 'LBL_CODING_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_renewal_terms_c',
            'label' => 'LBL_CODING_RENEWAL_TERMS_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'coding_renewal_term_months_c',
            'label' => 'LBL_CODING_RENEWAL_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'coding_global_permitted_c',
            'label' => 'LBL_CODING_GLOBAL_PERMITTED_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fluency_for_coding_platform_c',
            'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
          ),
          1 => 
          array (
            'name' => 'coding_global_permissions_c',
            'label' => 'LBL_CODING_GLOBAL_PERMISSIONS_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'cac_services_c',
            'label' => 'LBL_CAC_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'coding_renewal_consent_c',
            'label' => 'LBL_CODING_RENEWAL_CONSENT_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'coding_sow_version_c',
            'label' => 'LBL_CODING_SOW_VERSION_C',
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
            'name' => 'coding_sow_date_c',
            'label' => 'LBL_CODING_SOW_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_termination_for_convenience_c',
            'label' => 'LBL_CODING_TERMINATION_FOR_CONVENIENCE_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'coding_implementation_training_fees_c',
            'label' => 'LBL_CODING_IMPLEMENTATION_TRAINING_FEES_C',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'coding_commitment_c',
            'label' => 'LBL_CODING_COMMITMENT_C',
          ),
          1 => 
          array (
            'name' => 'coding_term_for_convenience_notice_dd_c',
            'label' => 'LBL_CODING_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'coding_price_book_rate_c',
            'label' => 'LBL_CODING_PRICE_BOOK_RATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_pricing_category_rate_c',
            'label' => 'LBL_CODING_PRICING_CATEGORY_RATE_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'coding_revenue_c',
            'label' => 'LBL_CODING_REVENUE_C',
          ),
          1 => 
          array (
            'name' => 'coding_pricing_c',
            'label' => 'LBL_CODING_PRICING_C',
          ),
        ),
        14 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'coding_pricing_increase_c',
            'label' => 'LBL_CODING_PRICING_INCREASE_C',
          ),
        ),
        15 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'coding_billing_c',
            'label' => 'LBL_CODING_BILLING_C',
          ),
        ),
        16 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'coding_estimated_billing_c',
            'label' => 'LBL_CODING_ESTIMATED_BILLING_C',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_doc_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_DOC_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_expiration_date_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_EXPIRATION_DATE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_effective_date_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_term_mm_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_TERM_MM_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_evergreen_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_EVERGREEN_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_auto_renew_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_AUTO_RENEW_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'vs_term_prior_to_renewal_dd_c',
            'label' => 'LBL_VS_TERM_PRIOR_TO_RENEWAL_DD_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_term_prior_to_renewal_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_TERM_PRIOR_TO_RENEWAL_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'virtual_sciribing_renewal_start_date_c',
            'label' => 'LBL_VIRTUAL_SCIRIBING_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_renewal_terms_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_RENEWAL_TERMS_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_term_for_convenience_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_TERM_FOR_CONVENIENCE_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_renewal_term_mm_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_RENEWAL_TERM_MM_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'vs_term_for_conv_notice_dd_c',
            'label' => 'LBL_VS_TERM_FOR_CONV_NOTICE_DD_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_global_permitted_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_GLOBAL_PERMITTED_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'type_of_scribing_c',
            'label' => 'LBL_TYPE_OF_SCRIBING_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_global_permissions_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_GLOBAL_PERMISSIONS_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_pricing_increase_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_PRICING_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_pricing_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_PRICING_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_billing_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_general_notes_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_GENERAL_NOTES_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_minimum_hours_language_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_MINIMUM_HOURS_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_commitment_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_COMMITMENT_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_price_book_rate_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_PRICE_BOOK_RATE_C',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_revenue_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_REVENUE_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
