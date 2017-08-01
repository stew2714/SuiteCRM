<?php
$module_name = 'AOS_Contracts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
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
      'useTabs' => true,
      'syncDetailEditViews' => false,
      'javascript' => '{$LOCK_FILES} {$BEAN_DATA}',
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
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'contact',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'activate_c',
            'label' => 'LBL_ACTIVATE_C',
          ),
          1 => 
          array (
            'name' => 'agreement_chevron_c',
            'label' => 'LBL_AGREEMENT_CHEVRON_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_services_1_name',
            'label' => 'LBL_AOS_CONTRACTS_SA_SERVICES_1_FROM_SA_SERVICES_TITLE',
          ),
          1 => 
          array (
            'name' => 'agreement_summary_c',
            'label' => 'LBL_AGREEMENT_SUMMARY_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_products_1_name',
            'label' => 'LBL_AOS_CONTRACTS_SA_PRODUCTS_1_FROM_SA_PRODUCTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'amendment_number_c',
            'label' => 'LBL_AMENDMENT_NUMBER_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'apts_request_date_c',
            'label' => 'LBL_APTS_REQUEST_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_account_c',
            'label' => 'LBL_APTTUS_ACCOUNT_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'apttus_account_search_field_c',
            'label' => 'LBL_APTTUS_ACCOUNT_SEARCH_FIELD_C',
          ),
          1 => 
          array (
            'name' => 'apttus_activated_by_c',
            'label' => 'LBL_APTTUS_ACTIVATED_BY_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'apttus_activated_date_c',
            'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_agreement_category_c',
            'label' => 'LBL_APTTUS_AGREEMENT_CATEGORY_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'apttus_agreement_number_c',
            'label' => 'LBL_APTTUS_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_allowableoutputformats_c',
            'label' => 'LBL_APTTUS_ALLOWABLEOUTPUTFORMATS_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'apttus_amendment_effective_date_c',
            'label' => 'LBL_APTTUS_AMENDMENT_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_auto_renew_consent_c',
            'label' => 'LBL_APTTUS_AUTO_RENEW_CONSENT_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'apttus_auto_renew_term_months_c',
            'label' => 'LBL_APTTUS_AUTO_RENEW_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'apttus_auto_renewal_c',
            'label' => 'LBL_APTTUS_AUTO_RENEWAL_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'apttus_auto_renewal_terms_c',
            'label' => 'LBL_APTTUS_AUTO_RENEWAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'apttus_business_hours_c',
            'label' => 'LBL_APTTUS_BUSINESS_HOURS_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_by_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_BY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_company_signed_date_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_DATE_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_title_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_TITLE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_contract_duration_days_c',
            'label' => 'LBL_APTTUS_CONTRACT_DURATION_DAYS_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'apttus_contract_end_date_c',
            'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_contract_number_c',
            'label' => 'LBL_APTTUS_CONTRACT_NUMBER_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'apttus_contract_start_date_c',
            'label' => 'LBL_APTTUS_CONTRACT_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_contracted_days_c',
            'label' => 'LBL_APTTUS_CONTRACTED_DAYS_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'apttus_description_c',
            'label' => 'LBL_APTTUS_DESCRIPTION_C',
          ),
          1 => 
          array (
            'name' => 'apttus_executed_copy_mailed_out_date_c',
            'label' => 'LBL_APTTUS_EXECUTED_COPY_MAILED_OUT_DATE_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_agreement_number_c',
            'label' => 'LBL_APTTUS_FF_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_amend_c',
            'label' => 'LBL_APTTUS_FF_AMEND_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_cancel_request_c',
            'label' => 'LBL_APTTUS_FF_CANCEL_REQUEST_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_execute_c',
            'label' => 'LBL_APTTUS_FF_EXECUTE_C',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_expire_c',
            'label' => 'LBL_APTTUS_FF_EXPIRE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_generate_protected_agreement_c',
            'label' => 'LBL_APTTUS_FF_GENERATE_PROTECTED_AGREEMENT_C',
          ),
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_generate_supporting_document_c',
            'label' => 'LBL_APTTUS_FF_GENERATE_SUPPORTING_DOCUMENT_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_generate_unprotected_agreement_c',
            'label' => 'LBL_APTTUS_FF_GENERATE_UNPROTECTED_AGREEMENT_C',
          ),
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_regenerate_agreement_c',
            'label' => 'LBL_APTTUS_FF_REGENERATE_AGREEMENT_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_renew_c',
            'label' => 'LBL_APTTUS_FF_RENEW_C',
          ),
        ),
        22 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_return_to_requestor_c',
            'label' => 'LBL_APTTUS_FF_RETURN_TO_REQUESTOR_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_send_to_other_party_for_review_c',
            'label' => 'LBL_APTTUS_FF_SEND_TO_OTHER_PARTY_FOR_REVIEW_C',
          ),
        ),
        23 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        24 => 
        array (
          0 => 
          array (
            'name' => 'cia_renewal_start_date_c',
            'label' => 'LBL_CIA_RENEWAL_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'cia_renewal_term_months_c',
            'label' => 'LBL_CIA_RENEWAL_TERM_MONTHS_C',
          ),
        ),
        25 => 
        array (
          0 => 
          array (
            'name' => 'cia_term_months_c',
            'label' => 'LBL_CIA_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'cia_termination_prior_to_renewal_c',
            'label' => 'LBL_CIA_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
        ),
        26 => 
        array (
          0 => 
          array (
            'name' => 'cia_termination_prior_to_renewal_days_c',
            'label' => 'LBL_CIA_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'client_agreement_number_c',
            'label' => 'LBL_CLIENT_AGREEMENT_NUMBER_C',
          ),
        ),
        27 => 
        array (
          0 => 
          array (
            'name' => 'client_responsibl_for_collection_cost_c',
            'label' => 'LBL_CLIENT_RESPONSIBL_FOR_COLLECTION_COST_C',
          ),
          1 => 
          array (
            'name' => 'comm_ops_age_c',
            'label' => 'LBL_COMM_OPS_AGE_C',
          ),
        ),
        28 => 
        array (
          0 => 
          array (
            'name' => 'confidence_level_c',
            'label' => 'LBL_CONFIDENCE_LEVEL_C',
          ),
          1 => 
          array (
            'name' => 'confidentiality_default_cure_period_c',
            'label' => 'LBL_CONFIDENTIALITY_DEFAULT_CURE_PERIOD_C',
          ),
        ),
        29 => 
        array (
          0 => 
          array (
            'name' => 'confidentiality_language_c',
            'label' => 'LBL_CONFIDENTIALITY_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'courior_tracking_number_c',
            'label' => 'LBL_COURIOR_TRACKING_NUMBER_C',
          ),
        ),
        30 => 
        array (
          0 => 
          array (
            'name' => 'date_submitted_to_comm_ops_c',
            'label' => 'LBL_DATE_SUBMITTED_TO_COMM_OPS_C',
          ),
          1 => 
          array (
            'name' => 'decimalellectual_property_general_informatio_c',
            'label' => 'LBL_DECIMALELLECTUAL_PROPERTY_GENERAL_INFORMATIO_C',
          ),
        ),
        31 => 
        array (
          0 => 
          array (
            'name' => 'decimalerest_on_late_payments_c',
            'label' => 'LBL_DECIMALEREST_ON_LATE_PAYMENTS_C',
          ),
          1 => 
          array (
            'name' => 'dispute_notice_period_c',
            'label' => 'LBL_DISPUTE_NOTICE_PERIOD_C',
          ),
        ),
        32 => 
        array (
          0 => 
          array (
            'name' => 'dq_cap_cia_pricing_discount_c',
            'label' => 'LBL_DQ_CAP_CIA_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'dq_cap_gma_pricing_discount_c',
            'label' => 'LBL_DQ_CAP_GMA_PRICING_DISCOUNT_C',
          ),
        ),
        33 => 
        array (
          0 => 
          array (
            'name' => 'dq_cap_professional_services_discount_c',
            'label' => 'LBL_DQ_CAP_PROFESSIONAL_SERVICES_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'dq_cap_software_pricing_disc_c',
            'label' => 'LBL_DQ_CAP_SOFTWARE_PRICING_DISC_C',
          ),
        ),
        34 => 
        array (
          0 => 
          array (
            'name' => 'dq_cap_support_term_for_conv_notice_dd_c',
            'label' => 'LBL_DQ_CAP_SUPPORT_TERM_FOR_CONV_NOTICE_DD_C',
          ),
          1 => 
          array (
            'name' => 'dq_coding_commitment_c',
            'label' => 'LBL_DQ_CODING_COMMITMENT_C',
          ),
        ),
        35 => 
        array (
          0 => 
          array (
            'name' => 'dq_cap_total_c',
            'label' => 'LBL_DQ_CAP_TOTAL_C',
          ),
          1 => 
          array (
            'name' => 'dq_coding_global_permitted_c',
            'label' => 'LBL_DQ_CODING_GLOBAL_PERMITTED_C',
          ),
        ),
        36 => 
        array (
          0 => 
          array (
            'name' => 'dq_coding_price_book_rate_c',
            'label' => 'LBL_DQ_CODING_PRICE_BOOK_RATE_C',
          ),
          1 => 
          array (
            'name' => 'dq_coding_price_increase_c',
            'label' => 'LBL_DQ_CODING_PRICE_INCREASE_C',
          ),
        ),
        37 => 
        array (
          0 => 
          array (
            'name' => 'dq_coding_term_for_conv_notice_dd_c',
            'label' => 'LBL_DQ_CODING_TERM_FOR_CONV_NOTICE_DD_C',
          ),
          1 => 
          array (
            'name' => 'dq_coding_term_for_convenience_c',
            'label' => 'LBL_DQ_CODING_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        38 => 
        array (
          0 => 
          array (
            'name' => 'dq_coding_term_months_c',
            'label' => 'LBL_DQ_CODING_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'dq_coding_total_c',
            'label' => 'LBL_DQ_CODING_TOTAL_C',
          ),
        ),
        39 => 
        array (
          0 => 
          array (
            'name' => 'dq_f1_global_permitted_c',
            'label' => 'LBL_DQ_F1_GLOBAL_PERMITTED_C',
          ),
          1 => 
          array (
            'name' => 'dq_f1_prod_pricing_incr_c',
            'label' => 'LBL_DQ_F1_PROD_PRICING_INCR_C',
          ),
        ),
        40 => 
        array (
          0 => 
          array (
            'name' => 'dq_f1_software_pricing_discount_c',
            'label' => 'LBL_DQ_F1_SOFTWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'dq_f1_standard_prod_billing_terms_c',
            'label' => 'LBL_DQ_F1_STANDARD_PROD_BILLING_TERMS_C',
          ),
        ),
        41 => 
        array (
          0 => 
          array (
            'name' => 'dq_f1_support_term_for_conv_c',
            'label' => 'LBL_DQ_F1_SUPPORT_TERM_FOR_CONV_C',
          ),
          1 => 
          array (
            'name' => 'dq_f1_tos_commitment_c',
            'label' => 'LBL_DQ_F1_TOS_COMMITMENT_C',
          ),
        ),
        42 => 
        array (
          0 => 
          array (
            'name' => 'dq_f1_tos_term_for_conv_c',
            'label' => 'LBL_DQ_F1_TOS_TERM_FOR_CONV_C',
          ),
          1 => 
          array (
            'name' => 'dq_f1_tos_term_for_conv_notice_dd_c',
            'label' => 'LBL_DQ_F1_TOS_TERM_FOR_CONV_NOTICE_DD_C',
          ),
        ),
        43 => 
        array (
          0 => 
          array (
            'name' => 'dq_f1_tos_term_mm_c',
            'label' => 'LBL_DQ_F1_TOS_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'dq_f1_total_c',
            'label' => 'LBL_DQ_F1_TOTAL_C',
          ),
        ),
        44 => 
        array (
          0 => 
          array (
            'name' => 'dq_general_terms_and_conditions_c',
            'label' => 'LBL_DQ_GENERAL_TERMS_AND_CONDITIONS_C',
          ),
          1 => 
          array (
            'name' => 'dq_global_permitted_c',
            'label' => 'LBL_DQ_GLOBAL_PERMITTED_C',
          ),
        ),
        45 => 
        array (
          0 => 
          array (
            'name' => 'dq_payment_total_c',
            'label' => 'LBL_DQ_PAYMENT_TOTAL_C',
          ),
          1 => 
          array (
            'name' => 'dq_payment_type_c',
            'label' => 'LBL_DQ_PAYMENT_TYPE_C',
          ),
        ),
        46 => 
        array (
          0 => 
          array (
            'name' => 'dq_paymentterms_c',
            'label' => 'LBL_DQ_PAYMENTTERMS_C',
          ),
          1 => 
          array (
            'name' => 'dq_product_gma_term_months_c',
            'label' => 'LBL_DQ_PRODUCT_GMA_TERM_MONTHS_C',
          ),
        ),
        47 => 
        array (
          0 => 
          array (
            'name' => 'dq_standard_prod_billing_terms_c',
            'label' => 'LBL_DQ_STANDARD_PROD_BILLING_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'dq_strategicdeal_c',
            'label' => 'LBL_DQ_STRATEGICDEAL_C',
          ),
        ),
        48 => 
        array (
          0 => 
          array (
            'name' => 'dq_subs_cia_pricing_discount_c',
            'label' => 'LBL_DQ_SUBS_CIA_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'dq_subs_prod_pricing_incr_c',
            'label' => 'LBL_DQ_SUBS_PROD_PRICING_INCR_C',
          ),
        ),
        49 => 
        array (
          0 => 
          array (
            'name' => 'dq_subs_prod_subs_auto_renewal_c',
            'label' => 'LBL_DQ_SUBS_PROD_SUBS_AUTO_RENEWAL_C',
          ),
          1 => 
          array (
            'name' => 'dq_subs_prod_term_for_conv_notice_dd_c',
            'label' => 'LBL_DQ_SUBS_PROD_TERM_FOR_CONV_NOTICE_DD_C',
          ),
        ),
        50 => 
        array (
          0 => 
          array (
            'name' => 'dq_subs_prod_term_months_c',
            'label' => 'LBL_DQ_SUBS_PROD_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'dq_subs_professional_services_discount_c',
            'label' => 'LBL_DQ_SUBS_PROFESSIONAL_SERVICES_DISCOUNT_C',
          ),
        ),
        51 => 
        array (
          0 => 
          array (
            'name' => 'dq_subs_software_pricing_discount_c',
            'label' => 'LBL_DQ_SUBS_SOFTWARE_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'dq_subs_standard_prod_billing_terms_c',
            'label' => 'LBL_DQ_SUBS_STANDARD_PROD_BILLING_TERMS_C',
          ),
        ),
        52 => 
        array (
          0 => 
          array (
            'name' => 'dq_tos_term_mm_c',
            'label' => 'LBL_DQ_TOS_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'dq_subs_support_term_for_conv_c',
            'label' => 'LBL_DQ_SUBS_SUPPORT_TERM_FOR_CONV_C',
          ),
        ),
        53 => 
        array (
          0 => 
          array (
            'name' => 'dq_subs_total_c',
            'label' => 'LBL_DQ_SUBS_TOTAL_C',
          ),
          1 => 
          array (
            'name' => 'dq_support_term_for_convenience_c',
            'label' => 'LBL_DQ_SUPPORT_TERM_FOR_CONVENIENCE_C',
          ),
        ),
        54 => 
        array (
          0 => 
          array (
            'name' => 'dq_tos_commitment_c',
            'label' => 'LBL_DQ_TOS_COMMITMENT_C',
          ),
          1 => 
          array (
            'name' => 'dq_tos_price_book_rate_c',
            'label' => 'LBL_DQ_TOS_PRICE_BOOK_RATE_C',
          ),
        ),
        55 => 
        array (
          0 => 
          array (
            'name' => 'dq_tos_price_incr_during_initial_term_c',
            'label' => 'LBL_DQ_TOS_PRICE_INCR_DURING_INITIAL_TERM_C',
          ),
          1 => 
          array (
            'name' => 'dq_tos_price_increase_c',
            'label' => 'LBL_DQ_TOS_PRICE_INCREASE_C',
          ),
        ),
        56 => 
        array (
          0 => 
          array (
            'name' => 'dq_tos_term_for_convenience_c',
            'label' => 'LBL_DQ_TOS_TERM_FOR_CONVENIENCE_C',
          ),
          1 => 
          array (
            'name' => 'dq_tos_term_for_convenience_notice_dd_c',
            'label' => 'LBL_DQ_TOS_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
          ),
        ),
        57 => 
        array (
          0 => 
          array (
            'name' => 'dq_tos_total_c',
            'label' => 'LBL_DQ_TOS_TOTAL_C',
          ),
          1 => 
          array (
            'name' => 'dq_total_c',
            'label' => 'LBL_DQ_TOTAL_C',
          ),
        ),
        58 => 
        array (
          0 => 
          array (
            'name' => 'dq_volume_guarantee_c',
            'label' => 'LBL_DQ_VOLUME_GUARANTEE_C',
          ),
          1 => 
          array (
            'name' => 'enhanced_data_use_rights_language_c',
            'label' => 'LBL_ENHANCED_DATA_USE_RIGHTS_LANGUAGE_C',
          ),
        ),
        59 => 
        array (
          0 => 
          array (
            'name' => 'estimated_billing_c',
            'label' => 'LBL_ESTIMATED_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'extended_adt_retention_c',
            'label' => 'LBL_EXTENDED_ADT_RETENTION_C',
          ),
        ),
        60 => 
        array (
          0 => 
          array (
            'name' => 'extended_report_retention_c',
            'label' => 'LBL_EXTENDED_REPORT_RETENTION_C',
          ),
          1 => 
          array (
            'name' => 'extended_voice_retention_c',
            'label' => 'LBL_EXTENDED_VOICE_RETENTION_C',
          ),
        ),
        61 => 
        array (
          0 => 
          array (
            'name' => 'facility_address_c',
            'label' => 'LBL_FACILITY_ADDRESS_C',
          ),
          1 => 
          array (
            'name' => 'facility_billing_address_c',
            'label' => 'LBL_FACILITY_BILLING_ADDRESS_C',
          ),
        ),
        62 => 
        array (
          0 => 
          array (
            'name' => 'facility_billing_name_c',
            'label' => 'LBL_FACILITY_BILLING_NAME_C',
          ),
          1 => 
          array (
            'name' => 'facility_city_state_and_zip_code_billin_c',
            'label' => 'LBL_FACILITY_CITY_STATE_AND_ZIP_CODE_BILLIN_C',
          ),
        ),
        63 => 
        array (
          0 => 
          array (
            'name' => 'facility_city_state_and_zip_code_c',
            'label' => 'LBL_FACILITY_CITY_STATE_AND_ZIP_CODE_C',
          ),
          1 => 
          array (
            'name' => 'facility_city_state_zip_code_billing_c',
            'label' => 'LBL_FACILITY_CITY_STATE_ZIP_CODE_BILLING_C',
          ),
        ),
        64 => 
        array (
          0 => 
          array (
            'name' => 'facility_contact_e_mail_address_billing_c',
            'label' => 'LBL_FACILITY_CONTACT_E_MAIL_ADDRESS_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'facility_contact_e_mail_address_c',
            'label' => 'LBL_FACILITY_CONTACT_E_MAIL_ADDRESS_C',
          ),
        ),
        65 => 
        array (
          0 => 
          array (
            'name' => 'facility_contact_e_mail_billing_c',
            'label' => 'LBL_FACILITY_CONTACT_E_MAIL_BILLING_C',
          ),
          1 => 
          array (
            'name' => 'facility_contact_name_billing_c',
            'label' => 'LBL_FACILITY_CONTACT_NAME_BILLING_C',
          ),
        ),
        66 => 
        array (
          0 => 
          array (
            'name' => 'renewal_reminder_date',
            'label' => 'LBL_RENEWAL_REMINDER_DATE',
            'type' => 'datetimecombo',
          ),
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        67 => 
        array (
          0 => 
          array (
            'name' => 'customer_signed_date',
            'label' => 'LBL_CUSTOMER_SIGNED_DATE',
          ),
          1 => 
          array (
            'name' => 'contract_type',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT_TYPE',
          ),
        ),
        68 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_send_to_other_party_for_signatures_c',
            'label' => 'LBL_APTTUS_FF_SEND_TO_OTHER_PARTY_FOR_SIGNATURES_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_send_to_third_party_c',
            'label' => 'LBL_APTTUS_FF_SEND_TO_THIRD_PARTY_C',
          ),
        ),
        69 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_submit_for_changes_c',
            'label' => 'LBL_APTTUS_FF_SUBMIT_FOR_CHANGES_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_submit_request_c',
            'label' => 'LBL_APTTUS_FF_SUBMIT_REQUEST_C',
          ),
        ),
        70 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_terminate_c',
            'label' => 'LBL_APTTUS_FF_TERMINATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_ff_view_draft_contract_c',
            'label' => 'LBL_APTTUS_FF_VIEW_DRAFT_CONTRACT_C',
          ),
        ),
        71 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_view_final_contract_c',
            'label' => 'LBL_APTTUS_FF_VIEW_FINAL_CONTRACT_C',
          ),
          1 => 
          array (
            'name' => 'apttus_import_offline_document_c',
            'label' => 'LBL_APTTUS_IMPORT_OFFLINE_DOCUMENT_C',
          ),
        ),
        72 => 
        array (
          0 => 
          array (
            'name' => 'apttus_initiatetermination_c',
            'label' => 'LBL_APTTUS_INITIATETERMINATION_C',
          ),
          1 => 
          array (
            'name' => 'apttus_initiation_type_c',
            'label' => 'LBL_APTTUS_INITIATION_TYPE_C',
          ),
        ),
        73 => 
        array (
          0 => 
          array (
            'name' => 'apttus_internal_renewal_notification_days_c',
            'label' => 'LBL_APTTUS_INTERNAL_RENEWAL_NOTIFICATION_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'apttus_internal_renewal_start_date_c',
            'label' => 'LBL_APTTUS_INTERNAL_RENEWAL_START_DATE_C',
          ),
        ),
        74 => 
        array (
          0 => 
          array (
            'name' => 'apttus_is_system_update_c',
            'label' => 'LBL_APTTUS_IS_SYSTEM_UPDATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_isinternalreview_c',
            'label' => 'LBL_APTTUS_ISINTERNALREVIEW_C',
          ),
        ),
        75 => 
        array (
          0 => 
          array (
            'name' => 'apttus_islocked_c',
            'label' => 'LBL_APTTUS_ISLOCKED_C',
          ),
          1 => 
          array (
            'name' => 'apttus_latestdocid_c',
            'label' => 'LBL_APTTUS_LATESTDOCID_C',
          ),
        ),
        76 => 
        array (
          0 => 
          array (
            'name' => 'apttus_non_standard_legal_language_c',
            'label' => 'LBL_APTTUS_NON_STANDARD_LEGAL_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_returned_date_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_RETURNED_DATE_C',
          ),
        ),
        77 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_sent_date_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SENT_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_signed_by_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_C',
          ),
        ),
        78 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_signed_by_unlisted_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_UNLISTED_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_signed_date_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_DATE_C',
          ),
        ),
        79 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_signed_title_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_TITLE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_outstanding_days_c',
            'label' => 'LBL_APTTUS_OUTSTANDING_DAYS_C',
          ),
        ),
        80 => 
        array (
          0 => 
          array (
            'name' => 'apttus_owner_expiration_notice_c',
            'label' => 'LBL_APTTUS_OWNER_EXPIRATION_NOTICE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_parent_agreement_c',
            'label' => 'LBL_APTTUS_PARENT_AGREEMENT_C',
          ),
        ),
        81 => 
        array (
          0 => 
          array (
            'name' => 'apttus_perpetual_c',
            'label' => 'LBL_APTTUS_PERPETUAL_C',
          ),
          1 => 
          array (
            'name' => 'apttus_primary_contact_c',
            'label' => 'LBL_APTTUS_PRIMARY_CONTACT_C',
          ),
        ),
        82 => 
        array (
          0 => 
          array (
            'name' => 'apttus_related_opportunity_c',
            'label' => 'LBL_APTTUS_RELATED_OPPORTUNITY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_remaining_contracted_days_c',
            'label' => 'LBL_APTTUS_REMAINING_CONTRACTED_DAYS_C',
          ),
        ),
        83 => 
        array (
          0 => 
          array (
            'name' => 'apttus_renewal_notice_date_c',
            'label' => 'LBL_APTTUS_RENEWAL_NOTICE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_renewal_notice_days_c',
            'label' => 'LBL_APTTUS_RENEWAL_NOTICE_DAYS_C',
          ),
        ),
        84 => 
        array (
          0 => 
          array (
            'name' => 'apttus_request_date_c',
            'label' => 'LBL_APTTUS_REQUEST_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_requestor_c',
            'label' => 'LBL_APTTUS_REQUESTOR_C',
          ),
        ),
        85 => 
        array (
          0 => 
          array (
            'name' => 'apttus_retentiondate_c',
            'label' => 'LBL_APTTUS_RETENTIONDATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_retentionpolicyid_c',
            'label' => 'LBL_APTTUS_RETENTIONPOLICYID_C',
          ),
        ),
        86 => 
        array (
          0 => 
          array (
            'name' => 'apttus_risk_rating_c',
            'label' => 'LBL_APTTUS_RISK_RATING_C',
          ),
          1 => 
          array (
            'name' => 'apttus_source_c',
            'label' => 'LBL_APTTUS_SOURCE_C',
          ),
        ),
        87 => 
        array (
          0 => 
          array (
            'name' => 'apttus_special_terms_c',
            'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_c',
            'label' => 'LBL_APTTUS_STATUS_C',
          ),
        ),
        88 => 
        array (
          0 => 
          array (
            'name' => 'apttus_status_category_c',
            'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_submit_request_mode_c',
            'label' => 'LBL_APTTUS_SUBMIT_REQUEST_MODE_C',
          ),
        ),
        89 => 
        array (
          0 => 
          array (
            'name' => 'apttus_subtype_c',
            'label' => 'LBL_APTTUS_SUBTYPE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_term_months_c',
            'label' => 'LBL_APTTUS_TERM_MONTHS_C',
          ),
        ),
        90 => 
        array (
          0 => 
          array (
            'name' => 'apttus_termination_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_notice_days_c',
            'label' => 'LBL_APTTUS_TERMINATION_NOTICE_DAYS_C',
          ),
        ),
        91 => 
        array (
          0 => 
          array (
            'name' => 'apttus_termination_notice_issue_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_NOTICE_ISSUE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_terminationcomments_c',
            'label' => 'LBL_APTTUS_TERMINATIONCOMMENTS_C',
          ),
        ),
        92 => 
        array (
          0 => 
          array (
            'name' => 'apttus_total_contract_value_c',
            'label' => 'LBL_APTTUS_TOTAL_CONTRACT_VALUE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_version_c',
            'label' => 'LBL_APTTUS_VERSION_C',
          ),
        ),
        93 => 
        array (
          0 => 
          array (
            'name' => 'apttus_version_number_c',
            'label' => 'LBL_APTTUS_VERSION_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_workflow_trigger_created_from_clone_c',
            'label' => 'LBL_APTTUS_WORKFLOW_TRIGGER_CREATED_FROM_CLONE_C',
          ),
        ),
        94 => 
        array (
          0 => 
          array (
            'name' => 'apttus_workflow_trigger_viewed_final_c',
            'label' => 'LBL_APTTUS_WORKFLOW_TRIGGER_VIEWED_FINAL_C',
          ),
          1 => 
          array (
            'name' => 'arbitration_c',
            'label' => 'LBL_ARBITRATION_C',
          ),
        ),
        95 => 
        array (
          0 => 
          array (
            'name' => 'assignment_permitted_c',
            'label' => 'LBL_ASSIGNMENT_PERMITTED_C',
          ),
          1 => 
          array (
            'name' => 'attachment_to_master_c',
            'label' => 'LBL_ATTACHMENT_TO_MASTER_C',
          ),
        ),
        96 => 
        array (
          0 => 
          array (
            'name' => 'awaiting_information_detail_c',
            'label' => 'LBL_AWAITING_INFORMATION_DETAIL_C',
          ),
          1 => 
          array (
            'name' => 'baa_attachment_number_c',
            'label' => 'LBL_BAA_ATTACHMENT_NUMBER_C',
          ),
        ),
        97 => 
        array (
          0 => 
          array (
            'name' => 'baa_template_source_c',
            'label' => 'LBL_BAA_TEMPLATE_SOURCE_C',
          ),
          1 => 
          array (
            'name' => 'cancellation_reason_c',
            'label' => 'LBL_CANCELLATION_REASON_C',
          ),
        ),
        98 => 
        array (
          0 => 
          array (
            'name' => 'chevron_c',
            'label' => 'LBL_CHEVRON_C',
          ),
          1 => 
          array (
            'name' => 'cia_annual_increase_c',
            'label' => 'LBL_CIA_ANNUAL_INCREASE_C',
          ),
        ),
        99 => 
        array (
          0 => 
          array (
            'name' => 'cia_auto_renew_c',
            'label' => 'LBL_CIA_AUTO_RENEW_C',
          ),
          1 => 
          array (
            'name' => 'cia_effective_date_c',
            'label' => 'LBL_CIA_EFFECTIVE_DATE_C',
          ),
        ),
        100 => 
        array (
          0 => 
          array (
            'name' => 'cia_expiration_date_c',
            'label' => 'LBL_CIA_EXPIRATION_DATE_C',
          ),
          1 => 
          array (
            'name' => 'cia_pricing_discount_c',
            'label' => 'LBL_CIA_PRICING_DISCOUNT_C',
          ),
        ),
        101 => 
        array (
          0 => 
          array (
            'name' => 'facility_contact_name_c',
            'label' => 'LBL_FACILITY_CONTACT_NAME_C',
          ),
          1 => 
          array (
            'name' => 'facility_contact_phone_number_billing_c',
            'label' => 'LBL_FACILITY_CONTACT_PHONE_NUMBER_BILLING_C',
          ),
        ),
        102 => 
        array (
          0 => 
          array (
            'name' => 'facility_contact_phone_number_c',
            'label' => 'LBL_FACILITY_CONTACT_PHONE_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'facility_contact_title_billing_c',
            'label' => 'LBL_FACILITY_CONTACT_TITLE_BILLING_C',
          ),
        ),
        103 => 
        array (
          0 => 
          array (
            'name' => 'facility_contact_title_c',
            'label' => 'LBL_FACILITY_CONTACT_TITLE_C',
          ),
          1 => 
          array (
            'name' => 'facility_name_c',
            'label' => 'LBL_FACILITY_NAME_C',
          ),
        ),
        104 => 
        array (
          0 => 
          array (
            'name' => 'favored_nation_language_c',
            'label' => 'LBL_FAVORED_NATION_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'federal_agency_c',
            'label' => 'LBL_FEDERAL_AGENCY_C',
          ),
        ),
        105 => 
        array (
          0 => 
          array (
            'name' => 'forecasting_category_c',
            'label' => 'LBL_FORECASTING_CATEGORY_C',
          ),
          1 => 
          array (
            'name' => 'general_terms_and_conditions_c',
            'label' => 'LBL_GENERAL_TERMS_AND_CONDITIONS_C',
          ),
        ),
        106 => 
        array (
          0 => 
          array (
            'name' => 'global_permissions_c',
            'label' => 'LBL_GLOBAL_PERMISSIONS_C',
          ),
          1 => 
          array (
            'name' => 'global_permitted_c',
            'label' => 'LBL_GLOBAL_PERMITTED_C',
          ),
        ),
        107 => 
        array (
          0 => 
          array (
            'name' => 'gma_annual_increase_c',
            'label' => 'LBL_GMA_ANNUAL_INCREASE_C',
          ),
          1 => 
          array (
            'name' => 'gma_attachment_effective_date_c',
            'label' => 'LBL_GMA_ATTACHMENT_EFFECTIVE_DATE_C',
          ),
        ),
        108 => 
        array (
          0 => 
          array (
            'name' => 'gma_attachment_number_c',
            'label' => 'LBL_GMA_ATTACHMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'gma_expiration_date_c',
            'label' => 'LBL_GMA_EXPIRATION_DATE_C',
          ),
        ),
        109 => 
        array (
          0 => 
          array (
            'name' => 'gma_pricing_discount_c',
            'label' => 'LBL_GMA_PRICING_DISCOUNT_C',
          ),
          1 => 
          array (
            'name' => 'gma_renewal_term_months_c',
            'label' => 'LBL_GMA_RENEWAL_TERM_MONTHS_C',
          ),
        ),
        110 => 
        array (
          0 => 
          array (
            'name' => 'gma_termination_prior_to_renewal_c',
            'label' => 'LBL_GMA_TERMINATION_PRIOR_TO_RENEWAL_C',
          ),
          1 => 
          array (
            'name' => 'gma_service_level_c',
            'label' => 'LBL_GMA_SERVICE_LEVEL_C',
          ),
        ),
        111 => 
        array (
          0 => 
          array (
            'name' => 'gma_termination_prior_to_renewal_days_c',
            'label' => 'LBL_GMA_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'governing_law_state_c',
            'label' => 'LBL_GOVERNING_LAW_STATE_C',
          ),
        ),
        112 => 
        array (
          0 => 
          array (
            'name' => 'gp_quotes_received_c',
            'label' => 'LBL_GP_QUOTES_RECEIVED_C',
          ),
          1 => 
          array (
            'name' => 'gpo_affiliation_c',
            'label' => 'LBL_GPO_AFFILIATION_C',
          ),
        ),
        113 => 
        array (
          0 => 
          array (
            'name' => 'gpo_affiliation_verified_c',
            'label' => 'LBL_GPO_AFFILIATION_VERIFIED_C',
          ),
          1 => 
          array (
            'name' => 'gpo_idn_c',
            'label' => 'LBL_GPO_IDN_C',
          ),
        ),
        114 => 
        array (
          0 => 
          array (
            'name' => 'grace_period_c',
            'label' => 'LBL_GRACE_PERIOD_C',
          ),
          1 => 
          array (
            'name' => 'hire_client_mt_s_c',
            'label' => 'LBL_HIRE_CLIENT_MT_S_C',
          ),
        ),
        115 => 
        array (
          0 => 
          array (
            'name' => 'included_optional_system_components_c',
            'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
          ),
          1 => 
          array (
            'name' => 'idn_affiliation_c',
            'label' => 'LBL_IDN_AFFILIATION_C',
          ),
        ),
        116 => 
        array (
          0 => 
          array (
            'name' => 'lastactivitydate_c',
            'label' => 'LBL_LASTACTIVITYDATE_C',
          ),
          1 => 
          array (
            'name' => 'late_fees_c',
            'label' => 'LBL_LATE_FEES_C',
          ),
        ),
        117 => 
        array (
          0 => 
          array (
            'name' => 'legacy_agreement_number_c',
            'label' => 'LBL_LEGACY_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'legal_entity_c',
            'label' => 'LBL_LEGAL_ENTITY_C',
          ),
        ),
        118 => 
        array (
          0 => 
          array (
            'name' => 'legal_notices_c',
            'label' => 'LBL_LEGAL_NOTICES_C',
          ),
          1 => 
          array (
            'name' => 'limitation_of_liability_c',
            'label' => 'LBL_LIMITATION_OF_LIABILITY_C',
          ),
        ),
        119 => 
        array (
          0 => 
          array (
            'name' => 'limited_liability_cap_c',
            'label' => 'LBL_LIMITED_LIABILITY_CAP_C',
          ),
          1 => 
          array (
            'name' => 'm_modal_travel_living_policy_c',
            'label' => 'LBL_M_MODAL_TRAVEL_LIVING_POLICY_C',
          ),
        ),
        120 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_and_support_product_c',
            'label' => 'LBL_MAINTENANCE_AND_SUPPORT_PRODUCT_C',
          ),
          1 => 
          array (
            'name' => 'master_general_notes_c',
            'label' => 'LBL_MASTER_GENERAL_NOTES_C',
          ),
        ),
        121 => 
        array (
          0 => 
          array (
            'name' => 'material_default_cure_period_c',
            'label' => 'LBL_MATERIAL_DEFAULT_CURE_PERIOD_C',
          ),
          1 => 
          array (
            'name' => 'mutual_default_c',
            'label' => 'LBL_MUTUAL_DEFAULT_C',
          ),
        ),
        122 => 
        array (
          0 => 
          array (
            'name' => 'ownership_group_expiration_notice_c',
            'label' => 'LBL_OWNERSHIP_GROUP_EXPIRATION_NOTICE_C',
          ),
          1 => 
          array (
            'name' => 'passive_adaptation_c',
            'label' => 'LBL_PASSIVE_ADAPTATION_C',
          ),
        ),
        123 => 
        array (
          0 => 
          array (
            'name' => 'passive_adaptation_type_c',
            'label' => 'LBL_PASSIVE_ADAPTATION_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'payment_terms_c',
            'label' => 'LBL_PAYMENT_TERMS_C',
          ),
        ),
        124 => 
        array (
          0 => 
          array (
            'name' => 'ownership_group_c',
            'label' => 'LBL_OWNERSHIP_GROUP_C',
          ),
          1 => 
          array (
            'name' => 'payment_terms_start_from_c',
            'label' => 'LBL_PAYMENT_TERMS_START_FROM_C',
          ),
        ),
        125 => 
        array (
          0 => 
          array (
            'name' => 'payment_type_c',
            'label' => 'LBL_PAYMENT_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'primary_contact_address_c',
            'label' => 'LBL_PRIMARY_CONTACT_ADDRESS_C',
          ),
        ),
        126 => 
        array (
          0 => 
          array (
            'name' => 'primary_contact_phone_number_c',
            'label' => 'LBL_PRIMARY_CONTACT_PHONE_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'probability_c',
            'label' => 'LBL_PROBABILITY_C',
          ),
        ),
        127 => 
        array (
          0 => 
          array (
            'name' => 'progress_bar_c',
            'label' => 'LBL_PROGRESS_BAR_C',
          ),
          1 => 
          array (
            'name' => 'purchase_order_language_c',
            'label' => 'LBL_PURCHASE_ORDER_LANGUAGE_C',
          ),
        ),
        128 => 
        array (
          0 => 
          array (
            'name' => 'qa_penalty_standard_c',
            'label' => 'LBL_QA_PENALTY_STANDARD_C',
          ),
          1 => 
          array (
            'name' => 'qa_program_c',
            'label' => 'LBL_QA_PROGRAM_C',
          ),
        ),
        129 => 
        array (
          0 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'LBL_RECORDTYPEID_C',
          ),
          1 => 
          array (
            'name' => 'reference_code',
            'label' => 'LBL_REFERENCE_CODE ',
          ),
        ),
        130 => 
        array (
          0 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION_C',
          ),
          1 => 
          array (
            'name' => 'request_date_c',
            'label' => 'LBL_REQUEST_DATE_C',
          ),
        ),
        131 => 
        array (
          0 => 
          array (
            'name' => 'request_to_comm_ops_days_c',
            'label' => 'LBL_REQUEST_TO_COMM_OPS_DAYS_C',
          ),
          1 => 
          array (
            'name' => 'requires_po_c',
            'label' => 'LBL_REQUIRES_PO_C',
          ),
        ),
        132 => 
        array (
          0 => 
          array (
            'name' => 'right_to_dispute_c',
            'label' => 'LBL_RIGHT_TO_DISPUTE_C',
          ),
          1 => 
          array (
            'name' => 'right_to_dispute_waiver_c',
            'label' => 'LBL_RIGHT_TO_DISPUTE_WAIVER_C',
          ),
        ),
        133 => 
        array (
          0 => 
          array (
            'name' => 'sf_id_c',
            'label' => 'LBL_SF_ID_C',
          ),
          1 => 
          array (
            'name' => 'sent_to_comm_ops_c',
            'label' => 'LBL_SENT_TO_COMM_OPS_C',
          ),
        ),
        134 => 
        array (
          0 => 
          array (
            'name' => 'software_pricing_discount_picklist_c',
            'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_PICKLIST_C',
          ),
          1 => 
          array (
            'name' => 'stage_c',
            'label' => 'LBL_STAGE_C',
          ),
        ),
        135 => 
        array (
          0 => 
          array (
            'name' => 'stat_report_tat_c',
            'label' => 'LBL_STAT_REPORT_TAT_C',
          ),
          1 => 
          array (
            'name' => 'status_category_text_c',
            'label' => 'LBL_STATUS_CATEGORY_TEXT_C',
          ),
        ),
        136 => 
        array (
          0 => 
          array (
            'name' => 'strategic_deal_c',
            'label' => 'LBL_STRATEGIC_DEAL_C',
          ),
          1 => 
          array (
            'name' => 'strategic_deal_description_c',
            'label' => 'LBL_STRATEGIC_DEAL_DESCRIPTION_C',
          ),
        ),
        137 => 
        array (
          0 => 
          array (
            'name' => 'submit_to_comm_ops_c',
            'label' => 'LBL_SUBMIT_TO_COMM_OPS_C',
          ),
          1 => 
          array (
            'name' => 'submitted_to_opr_days_c',
            'label' => 'LBL_SUBMITTED_TO_OPR_DAYS_C',
          ),
        ),
        138 => 
        array (
          0 => 
          array (
            'name' => 'suspend_services_c',
            'label' => 'LBL_SUSPEND_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'suspend_services_notice_period_c',
            'label' => 'LBL_SUSPEND_SERVICES_NOTICE_PERIOD_C',
          ),
        ),
        139 => 
        array (
          0 => 
          array (
            'name' => 't_c_version_c',
            'label' => 'LBL_T_C_VERSION_C',
          ),
          1 => 
          array (
            'name' => 'tax_exempt_c',
            'label' => 'LBL_TAX_EXEMPT_C',
          ),
        ),
        140 => 
        array (
          0 => 
          array (
            'name' => 'termination_for_default_c',
            'label' => 'LBL_TERMINATION_FOR_DEFAULT_C',
          ),
          1 => 
          array (
            'name' => 'time_in_pipeline_c',
            'label' => 'LBL_TIME_IN_PIPELINE_C',
          ),
        ),
        141 => 
        array (
          0 => 
          array (
            'name' => 'total_time_with_comm_ops_c',
            'label' => 'LBL_TOTAL_TIME_WITH_COMM_OPS_C',
          ),
          1 => 
          array (
            'name' => 'travel_living_fees_c',
            'label' => 'LBL_TRAVEL_LIVING_FEES_C',
          ),
        ),
        142 => 
        array (
          0 => 
          array (
            'name' => 'ts_author_contract_c',
            'label' => 'LBL_TS_AUTHOR_CONTRACT_C',
          ),
          1 => 
          array (
            'name' => 'ts_client_inital_review_c',
            'label' => 'LBL_TS_CLIENT_INITAL_REVIEW_C',
          ),
        ),
        143 => 
        array (
          0 => 
          array (
            'name' => 'ts_client_redline_review_c',
            'label' => 'LBL_TS_CLIENT_REDLINE_REVIEW_C',
          ),
          1 => 
          array (
            'name' => 'ts_mmodal_redline_review_c',
            'label' => 'LBL_TS_MMODAL_REDLINE_REVIEW_C',
          ),
        ),
        144 => 
        array (
          0 => 
          array (
            'name' => 'ts_partially_executed_received_c',
            'label' => 'LBL_TS_PARTIALLY_EXECUTED_RECEIVED_C',
          ),
          1 => 
          array (
            'name' => 'ts_request_accepted_c',
            'label' => 'LBL_TS_REQUEST_ACCEPTED_C',
          ),
        ),
        145 => 
        array (
          0 => 
          array (
            'name' => 'ts_submitted_to_comm_ops_c',
            'label' => 'LBL_TS_SUBMITTED_TO_COMM_OPS_C',
          ),
          1 => 
          array (
            'name' => 'type_of_product_services_c',
            'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
          ),
        ),
        146 => 
        array (
          0 => 
          array (
            'name' => 'type_of_request_c',
            'label' => 'LBL_TYPE_OF_REQUEST_C',
          ),
          1 => 
          array (
            'name' => 'ucid_c',
            'label' => 'LBL_UCID_C',
          ),
        ),
        147 => 
        array (
          0 => 
          array (
            'name' => 'use_of_data_continuous_improvement_c',
            'label' => 'LBL_USE_OF_DATA_CONTINUOUS_IMPROVEMENT_C',
          ),
          1 => '',
        ),
        148 => 
        array (
          0 => '',
          1 => '',
        ),
        149 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
