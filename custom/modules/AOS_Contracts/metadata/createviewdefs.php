<?php
$viewdefs = array (
  'AOS_Contracts' => 
  array (
    'CreateView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
          'buttons' => 
          array (
            'SAVE' => 
            array (
              'customCode' => '<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"                     accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}"                     class="button" 					 onclick="var _form = document.getElementById(\'CreateView\'); _form.action.value=\'Save\'; if(check_form(\'CreateView\'))SUGAR.ajaxUI.submitForm(_form);return false;";                     type="submit"                     name="button"                     value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
            ),
            'CANCEL' => 'CANCEL',
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
        'useTabs' => true,
        'syncDetailEditViews' => false,
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'ACC_DEFAULT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'CON_DEFAULT' => 
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
            1 => 'status',
          ),
          1 => 
          array (
            1 => 'contact',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'activate_c',
              'label' => 'LBL_ACTIVATE_C',
            ),
            1 => 'agreement_chevron_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'aos_contracts_sa_services_1_name',
              'label' => 'LBL_AOS_CONTRACTS_SA_SERVICES_1_FROM_SA_SERVICES_TITLE',
            ),
            1 => 'agreement_summary_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'aos_contracts_sa_products_1_name',
              'label' => 'LBL_AOS_CONTRACTS_SA_PRODUCTS_1_FROM_SA_PRODUCTS_TITLE',
            ),
            1 => 'amendment_number_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'apts_request_date_c',
              'label' => 'LBL_APTS_REQUEST_DATE_C',
            ),
            1 => 'apttus_account_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'apttus_account_search_field_c',
              'label' => 'LBL_APTTUS_ACCOUNT_SEARCH_FIELD_C',
            ),
            1 => 'apttus_activated_by_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'apttus_activated_date_c',
              'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
            ),
            1 => 'apttus_agreement_category_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'apttus_agreement_number_c',
              'label' => 'LBL_APTTUS_AGREEMENT_NUMBER_C',
            ),
            1 => 'apttus_allowableoutputformats_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'apttus_amendment_effective_date_c',
              'label' => 'LBL_APTTUS_AMENDMENT_EFFECTIVE_DATE_C',
            ),
            1 => 'apttus_auto_renew_consent_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'apttus_auto_renew_term_months_c',
              'label' => 'LBL_APTTUS_AUTO_RENEW_TERM_MONTHS_C',
            ),
            1 => 'apttus_auto_renewal_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'apttus_auto_renewal_terms_c',
              'label' => 'LBL_APTTUS_AUTO_RENEWAL_TERMS_C',
            ),
            1 => 'apttus_business_hours_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'apttus_company_signed_by_c',
              'label' => 'LBL_APTTUS_COMPANY_SIGNED_BY_C',
            ),
            1 => 'apttus_company_signed_date_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'apttus_company_signed_title_c',
              'label' => 'LBL_APTTUS_COMPANY_SIGNED_TITLE_C',
            ),
            1 => 'apttus_contract_duration_days_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'apttus_contract_end_date_c',
              'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
            ),
            1 => 'apttus_contract_number_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'apttus_contract_start_date_c',
              'label' => 'LBL_APTTUS_CONTRACT_START_DATE_C',
            ),
            1 => 'apttus_contracted_days_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'apttus_description_c',
              'label' => 'LBL_APTTUS_DESCRIPTION_C',
            ),
            1 => 'apttus_executed_copy_mailed_out_date_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_agreement_number_c',
              'label' => 'LBL_APTTUS_FF_AGREEMENT_NUMBER_C',
            ),
            1 => 'apttus_ff_amend_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_cancel_request_c',
              'label' => 'LBL_APTTUS_FF_CANCEL_REQUEST_C',
            ),
            1 => 'apttus_ff_execute_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_expire_c',
              'label' => 'LBL_APTTUS_FF_EXPIRE_C',
            ),
            1 => 'apttus_ff_generate_protected_agreement_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_generate_supporting_document_c',
              'label' => 'LBL_APTTUS_FF_GENERATE_SUPPORTING_DOCUMENT_C',
            ),
            1 => 'apttus_ff_generate_unprotected_agreement_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_regenerate_agreement_c',
              'label' => 'LBL_APTTUS_FF_REGENERATE_AGREEMENT_C',
            ),
            1 => 'apttus_ff_renew_c',
          ),
          22 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_return_to_requestor_c',
              'label' => 'LBL_APTTUS_FF_RETURN_TO_REQUESTOR_C',
            ),
            1 => 'apttus_ff_send_to_other_party_for_review_c',
          ),
          23 => 
          array (
            0 => 
            array (
              'name' => 'total_contract_value',
              'label' => 'LBL_TOTAL_CONTRACT_VALUE',
            ),
            1 => 'assigned_user_name',
          ),
          24 => 
          array (
            0 => 
            array (
              'name' => 'cia_renewal_start_date_c',
              'label' => 'LBL_CIA_RENEWAL_START_DATE_C',
            ),
            1 => 'cia_renewal_term_months_c',
          ),
          25 => 
          array (
            0 => 
            array (
              'name' => 'cia_term_months_c',
              'label' => 'LBL_CIA_TERM_MONTHS_C',
            ),
            1 => 'cia_termination_prior_to_renewal_c',
          ),
          26 => 
          array (
            0 => 
            array (
              'name' => 'cia_termination_prior_to_renewal_days_c',
              'label' => 'LBL_CIA_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'client_agreement_number_c',
          ),
          27 => 
          array (
            0 => 
            array (
              'name' => 'client_responsibl_for_collection_cost_c',
              'label' => 'LBL_CLIENT_RESPONSIBL_FOR_COLLECTION_COST_C',
            ),
            1 => 'comm_ops_age_c',
          ),
          28 => 
          array (
            0 => 
            array (
              'name' => 'confidence_level_c',
              'label' => 'LBL_CONFIDENCE_LEVEL_C',
            ),
            1 => 'confidentiality_default_cure_period_c',
          ),
          29 => 
          array (
            0 => 
            array (
              'name' => 'confidentiality_language_c',
              'label' => 'LBL_CONFIDENTIALITY_LANGUAGE_C',
            ),
            1 => 'courior_tracking_number_c',
          ),
          30 => 
          array (
            0 => 
            array (
              'name' => 'date_submitted_to_comm_ops_c',
              'label' => 'LBL_DATE_SUBMITTED_TO_COMM_OPS_C',
            ),
            1 => 'decimalellectual_property_general_informatio_c',
          ),
          31 => 
          array (
            0 => 
            array (
              'name' => 'decimalerest_on_late_payments_c',
              'label' => 'LBL_DECIMALEREST_ON_LATE_PAYMENTS_C',
            ),
            1 => 'dispute_notice_period_c',
          ),
          32 => 
          array (
            0 => 
            array (
              'name' => 'dq_cap_cia_pricing_discount_c',
              'label' => 'LBL_DQ_CAP_CIA_PRICING_DISCOUNT_C',
            ),
            1 => 'dq_cap_gma_pricing_discount_c',
          ),
          33 => 
          array (
            0 => 
            array (
              'name' => 'dq_cap_professional_services_discount_c',
              'label' => 'LBL_DQ_CAP_PROFESSIONAL_SERVICES_DISCOUNT_C',
            ),
            1 => 'dq_cap_software_pricing_disc_c',
          ),
          34 => 
          array (
            0 => 
            array (
              'name' => 'dq_cap_support_term_for_conv_notice_dd_c',
              'label' => 'LBL_DQ_CAP_SUPPORT_TERM_FOR_CONV_NOTICE_DD_C',
            ),
            1 => 'dq_coding_commitment_c',
          ),
          35 => 
          array (
            0 => 
            array (
              'name' => 'dq_cap_total_c',
              'label' => 'LBL_DQ_CAP_TOTAL_C',
            ),
            1 => 'dq_coding_global_permitted_c',
          ),
          36 => 
          array (
            0 => 
            array (
              'name' => 'dq_coding_price_book_rate_c',
              'label' => 'LBL_DQ_CODING_PRICE_BOOK_RATE_C',
            ),
            1 => 'dq_coding_price_increase_c',
          ),
          37 => 
          array (
            0 => 
            array (
              'name' => 'dq_coding_term_for_conv_notice_dd_c',
              'label' => 'LBL_DQ_CODING_TERM_FOR_CONV_NOTICE_DD_C',
            ),
            1 => 'dq_coding_term_for_convenience_c',
          ),
          38 => 
          array (
            0 => 
            array (
              'name' => 'dq_coding_term_months_c',
              'label' => 'LBL_DQ_CODING_TERM_MONTHS_C',
            ),
            1 => 'dq_coding_total_c',
          ),
          39 => 
          array (
            0 => 
            array (
              'name' => 'dq_f1_global_permitted_c',
              'label' => 'LBL_DQ_F1_GLOBAL_PERMITTED_C',
            ),
            1 => 'dq_f1_prod_pricing_incr_c',
          ),
          40 => 
          array (
            0 => 
            array (
              'name' => 'dq_f1_software_pricing_discount_c',
              'label' => 'LBL_DQ_F1_SOFTWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'dq_f1_standard_prod_billing_terms_c',
          ),
          41 => 
          array (
            0 => 
            array (
              'name' => 'dq_f1_support_term_for_conv_c',
              'label' => 'LBL_DQ_F1_SUPPORT_TERM_FOR_CONV_C',
            ),
            1 => 'dq_f1_tos_commitment_c',
          ),
          42 => 
          array (
            0 => 
            array (
              'name' => 'dq_f1_tos_term_for_conv_c',
              'label' => 'LBL_DQ_F1_TOS_TERM_FOR_CONV_C',
            ),
            1 => 'dq_f1_tos_term_for_conv_notice_dd_c',
          ),
          43 => 
          array (
            0 => 
            array (
              'name' => 'dq_f1_tos_term_mm_c',
              'label' => 'LBL_DQ_F1_TOS_TERM_MM_C',
            ),
            1 => 'dq_f1_total_c',
          ),
          44 => 
          array (
            0 => 
            array (
              'name' => 'dq_general_terms_and_conditions_c',
              'label' => 'LBL_DQ_GENERAL_TERMS_AND_CONDITIONS_C',
            ),
            1 => 'dq_global_permitted_c',
          ),
          45 => 
          array (
            0 => 
            array (
              'name' => 'dq_payment_total_c',
              'label' => 'LBL_DQ_PAYMENT_TOTAL_C',
            ),
            1 => 'dq_payment_type_c',
          ),
          46 => 
          array (
            0 => 
            array (
              'name' => 'dq_paymentterms_c',
              'label' => 'LBL_DQ_PAYMENTTERMS_C',
            ),
            1 => 'dq_product_gma_term_months_c',
          ),
          47 => 
          array (
            0 => 
            array (
              'name' => 'dq_standard_prod_billing_terms_c',
              'label' => 'LBL_DQ_STANDARD_PROD_BILLING_TERMS_C',
            ),
            1 => 'dq_strategicdeal_c',
          ),
          48 => 
          array (
            0 => 
            array (
              'name' => 'dq_subs_cia_pricing_discount_c',
              'label' => 'LBL_DQ_SUBS_CIA_PRICING_DISCOUNT_C',
            ),
            1 => 'dq_subs_prod_pricing_incr_c',
          ),
          49 => 
          array (
            0 => 
            array (
              'name' => 'dq_subs_prod_subs_auto_renewal_c',
              'label' => 'LBL_DQ_SUBS_PROD_SUBS_AUTO_RENEWAL_C',
            ),
            1 => 'dq_subs_prod_term_for_conv_notice_dd_c',
          ),
          50 => 
          array (
            0 => 
            array (
              'name' => 'dq_subs_prod_term_months_c',
              'label' => 'LBL_DQ_SUBS_PROD_TERM_MONTHS_C',
            ),
            1 => 'dq_subs_professional_services_discount_c',
          ),
          51 => 
          array (
            0 => 
            array (
              'name' => 'dq_subs_software_pricing_discount_c',
              'label' => 'LBL_DQ_SUBS_SOFTWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'dq_subs_standard_prod_billing_terms_c',
          ),
          52 => 
          array (
            0 => 
            array (
              'name' => 'dq_tos_term_mm_c',
              'label' => 'LBL_DQ_TOS_TERM_MM_C',
            ),
            1 => 'dq_subs_support_term_for_conv_c',
          ),
          53 => 
          array (
            0 => 
            array (
              'name' => 'dq_subs_total_c',
              'label' => 'LBL_DQ_SUBS_TOTAL_C',
            ),
            1 => 'dq_support_term_for_convenience_c',
          ),
          54 => 
          array (
            0 => 
            array (
              'name' => 'dq_tos_commitment_c',
              'label' => 'LBL_DQ_TOS_COMMITMENT_C',
            ),
            1 => 'dq_tos_price_book_rate_c',
          ),
          55 => 
          array (
            0 => 
            array (
              'name' => 'dq_tos_price_incr_during_initial_term_c',
              'label' => 'LBL_DQ_TOS_PRICE_INCR_DURING_INITIAL_TERM_C',
            ),
            1 => 'dq_tos_price_increase_c',
          ),
          56 => 
          array (
            0 => 
            array (
              'name' => 'dq_tos_term_for_convenience_c',
              'label' => 'LBL_DQ_TOS_TERM_FOR_CONVENIENCE_C',
            ),
            1 => 'dq_tos_term_for_convenience_notice_dd_c',
          ),
          57 => 
          array (
            0 => 
            array (
              'name' => 'dq_tos_total_c',
              'label' => 'LBL_DQ_TOS_TOTAL_C',
            ),
            1 => 'dq_total_c',
          ),
          58 => 
          array (
            0 => 
            array (
              'name' => 'dq_volume_guarantee_c',
              'label' => 'LBL_DQ_VOLUME_GUARANTEE_C',
            ),
            1 => 'enhanced_data_use_rights_language_c',
          ),
          59 => 
          array (
            0 => 
            array (
              'name' => 'estimated_billing_c',
              'label' => 'LBL_ESTIMATED_BILLING_C',
            ),
            1 => 'extended_adt_retention_c',
          ),
          60 => 
          array (
            0 => 
            array (
              'name' => 'extended_report_retention_c',
              'label' => 'LBL_EXTENDED_REPORT_RETENTION_C',
            ),
            1 => 'extended_voice_retention_c',
          ),
          61 => 
          array (
            0 => 
            array (
              'name' => 'facility_address_c',
              'label' => 'LBL_FACILITY_ADDRESS_C',
            ),
            1 => 'facility_billing_address_c',
          ),
          62 => 
          array (
            0 => 
            array (
              'name' => 'facility_billing_name_c',
              'label' => 'LBL_FACILITY_BILLING_NAME_C',
            ),
            1 => 'facility_city_state_and_zip_code_billin_c',
          ),
          63 => 
          array (
            0 => 
            array (
              'name' => 'facility_city_state_and_zip_code_c',
              'label' => 'LBL_FACILITY_CITY_STATE_AND_ZIP_CODE_C',
            ),
            1 => 'facility_city_state_zip_code_billing_c',
          ),
          64 => 
          array (
            0 => 
            array (
              'name' => 'facility_contact_e_mail_address_billing_c',
              'label' => 'LBL_FACILITY_CONTACT_E_MAIL_ADDRESS_BILLING_C',
            ),
            1 => 'facility_contact_e_mail_address_c',
          ),
          65 => 
          array (
            0 => 
            array (
              'name' => 'facility_contact_e_mail_billing_c',
              'label' => 'LBL_FACILITY_CONTACT_E_MAIL_BILLING_C',
            ),
            1 => 'facility_contact_name_billing_c',
          ),
          66 => 
          array (
            0 => 
            array (
              'name' => 'renewal_reminder_date',
              'label' => 'LBL_RENEWAL_REMINDER_DATE',
              'type' => 'datetimecombo',
            ),
            1 => 'opportunity',
          ),
          67 => 
          array (
            0 => 
            array (
              'name' => 'customer_signed_date',
              'label' => 'LBL_CUSTOMER_SIGNED_DATE',
            ),
            1 => 'contract_type',
          ),
          68 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_send_to_other_party_for_signatures_c',
              'label' => 'LBL_APTTUS_FF_SEND_TO_OTHER_PARTY_FOR_SIGNATURES_C',
            ),
            1 => 'apttus_ff_send_to_third_party_c',
          ),
          69 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_submit_for_changes_c',
              'label' => 'LBL_APTTUS_FF_SUBMIT_FOR_CHANGES_C',
            ),
            1 => 'apttus_ff_submit_request_c',
          ),
          70 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_terminate_c',
              'label' => 'LBL_APTTUS_FF_TERMINATE_C',
            ),
            1 => 'apttus_ff_view_draft_contract_c',
          ),
          71 => 
          array (
            0 => 
            array (
              'name' => 'apttus_ff_view_final_contract_c',
              'label' => 'LBL_APTTUS_FF_VIEW_FINAL_CONTRACT_C',
            ),
            1 => 'apttus_import_offline_document_c',
          ),
          72 => 
          array (
            0 => 
            array (
              'name' => 'apttus_initiatetermination_c',
              'label' => 'LBL_APTTUS_INITIATETERMINATION_C',
            ),
            1 => 'apttus_initiation_type_c',
          ),
          73 => 
          array (
            0 => 
            array (
              'name' => 'apttus_internal_renewal_notification_days_c',
              'label' => 'LBL_APTTUS_INTERNAL_RENEWAL_NOTIFICATION_DAYS_C',
            ),
            1 => 'apttus_internal_renewal_start_date_c',
          ),
          74 => 
          array (
            0 => 
            array (
              'name' => 'apttus_is_system_update_c',
              'label' => 'LBL_APTTUS_IS_SYSTEM_UPDATE_C',
            ),
            1 => 'apttus_isinternalreview_c',
          ),
          75 => 
          array (
            0 => 
            array (
              'name' => 'apttus_islocked_c',
              'label' => 'LBL_APTTUS_ISLOCKED_C',
            ),
            1 => 'apttus_latestdocid_c',
          ),
          76 => 
          array (
            0 => 
            array (
              'name' => 'apttus_non_standard_legal_language_c',
              'label' => 'LBL_APTTUS_NON_STANDARD_LEGAL_LANGUAGE_C',
            ),
            1 => 'apttus_other_party_returned_date_c',
          ),
          77 => 
          array (
            0 => 
            array (
              'name' => 'apttus_other_party_sent_date_c',
              'label' => 'LBL_APTTUS_OTHER_PARTY_SENT_DATE_C',
            ),
            1 => 'apttus_other_party_signed_by_c',
          ),
          78 => 
          array (
            0 => 
            array (
              'name' => 'apttus_other_party_signed_by_unlisted_c',
              'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_UNLISTED_C',
            ),
            1 => 'apttus_other_party_signed_date_c',
          ),
          79 => 
          array (
            0 => 
            array (
              'name' => 'apttus_other_party_signed_title_c',
              'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_TITLE_C',
            ),
            1 => 'apttus_outstanding_days_c',
          ),
          80 => 
          array (
            0 => 
            array (
              'name' => 'apttus_owner_expiration_notice_c',
              'label' => 'LBL_APTTUS_OWNER_EXPIRATION_NOTICE_C',
            ),
            1 => 'apttus_parent_agreement_c',
          ),
          81 => 
          array (
            0 => 
            array (
              'name' => 'apttus_perpetual_c',
              'label' => 'LBL_APTTUS_PERPETUAL_C',
            ),
            1 => 'apttus_primary_contact_c',
          ),
          82 => 
          array (
            0 => 
            array (
              'name' => 'apttus_related_opportunity_c',
              'label' => 'LBL_APTTUS_RELATED_OPPORTUNITY_C',
            ),
            1 => 'apttus_remaining_contracted_days_c',
          ),
          83 => 
          array (
            0 => 
            array (
              'name' => 'apttus_renewal_notice_date_c',
              'label' => 'LBL_APTTUS_RENEWAL_NOTICE_DATE_C',
            ),
            1 => 'apttus_renewal_notice_days_c',
          ),
          84 => 
          array (
            0 => 
            array (
              'name' => 'apttus_request_date_c',
              'label' => 'LBL_APTTUS_REQUEST_DATE_C',
            ),
            1 => 'apttus_requestor_c',
          ),
          85 => 
          array (
            0 => 
            array (
              'name' => 'apttus_retentiondate_c',
              'label' => 'LBL_APTTUS_RETENTIONDATE_C',
            ),
            1 => 'apttus_retentionpolicyid_c',
          ),
          86 => 
          array (
            0 => 
            array (
              'name' => 'apttus_risk_rating_c',
              'label' => 'LBL_APTTUS_RISK_RATING_C',
            ),
            1 => 'apttus_source_c',
          ),
          87 => 
          array (
            0 => 
            array (
              'name' => 'apttus_special_terms_c',
              'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
            ),
            1 => 'apttus_status_c',
          ),
          88 => 
          array (
            0 => 
            array (
              'name' => 'apttus_status_category_c',
              'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
            ),
            1 => 'apttus_submit_request_mode_c',
          ),
          89 => 
          array (
            0 => 
            array (
              'name' => 'apttus_subtype_c',
              'label' => 'LBL_APTTUS_SUBTYPE_C',
            ),
            1 => 'apttus_term_months_c',
          ),
          90 => 
          array (
            0 => 
            array (
              'name' => 'apttus_termination_date_c',
              'label' => 'LBL_APTTUS_TERMINATION_DATE_C',
            ),
            1 => 'apttus_termination_notice_days_c',
          ),
          91 => 
          array (
            0 => 
            array (
              'name' => 'apttus_termination_notice_issue_date_c',
              'label' => 'LBL_APTTUS_TERMINATION_NOTICE_ISSUE_DATE_C',
            ),
            1 => 'apttus_terminationcomments_c',
          ),
          92 => 
          array (
            0 => 
            array (
              'name' => 'apttus_total_contract_value_c',
              'label' => 'LBL_APTTUS_TOTAL_CONTRACT_VALUE_C',
            ),
            1 => 'apttus_version_c',
          ),
          93 => 
          array (
            0 => 
            array (
              'name' => 'apttus_version_number_c',
              'label' => 'LBL_APTTUS_VERSION_NUMBER_C',
            ),
            1 => 'apttus_workflow_trigger_created_from_clone_c',
          ),
          94 => 
          array (
            0 => 
            array (
              'name' => 'apttus_workflow_trigger_viewed_final_c',
              'label' => 'LBL_APTTUS_WORKFLOW_TRIGGER_VIEWED_FINAL_C',
            ),
            1 => 'arbitration_c',
          ),
          95 => 
          array (
            0 => 
            array (
              'name' => 'assignment_permitted_c',
              'label' => 'LBL_ASSIGNMENT_PERMITTED_C',
            ),
            1 => 'attachment_to_master_c',
          ),
          96 => 
          array (
            0 => 
            array (
              'name' => 'awaiting_information_detail_c',
              'label' => 'LBL_AWAITING_INFORMATION_DETAIL_C',
            ),
            1 => 'baa_attachment_number_c',
          ),
          97 => 
          array (
            0 => 
            array (
              'name' => 'baa_template_source_c',
              'label' => 'LBL_BAA_TEMPLATE_SOURCE_C',
            ),
            1 => 'cancellation_reason_c',
          ),
          98 => 
          array (
            0 => 
            array (
              'name' => 'chevron_c',
              'label' => 'LBL_CHEVRON_C',
            ),
            1 => 'cia_annual_increase_c',
          ),
          99 => 
          array (
            0 => 
            array (
              'name' => 'cia_auto_renew_c',
              'label' => 'LBL_CIA_AUTO_RENEW_C',
            ),
            1 => 'cia_effective_date_c',
          ),
          100 => 
          array (
            0 => 
            array (
              'name' => 'cia_expiration_date_c',
              'label' => 'LBL_CIA_EXPIRATION_DATE_C',
            ),
            1 => 'cia_pricing_discount_c',
          ),
          101 => 
          array (
            0 => 
            array (
              'name' => 'facility_contact_name_c',
              'label' => 'LBL_FACILITY_CONTACT_NAME_C',
            ),
            1 => 'facility_contact_phone_number_billing_c',
          ),
          102 => 
          array (
            0 => 
            array (
              'name' => 'facility_contact_phone_number_c',
              'label' => 'LBL_FACILITY_CONTACT_PHONE_NUMBER_C',
            ),
            1 => 'facility_contact_title_billing_c',
          ),
          103 => 
          array (
            0 => 
            array (
              'name' => 'facility_contact_title_c',
              'label' => 'LBL_FACILITY_CONTACT_TITLE_C',
            ),
            1 => 'facility_name_c',
          ),
          104 => 
          array (
            0 => 
            array (
              'name' => 'favored_nation_language_c',
              'label' => 'LBL_FAVORED_NATION_LANGUAGE_C',
            ),
            1 => 'federal_agency_c',
          ),
          105 => 
          array (
            0 => 
            array (
              'name' => 'forecasting_category_c',
              'label' => 'LBL_FORECASTING_CATEGORY_C',
            ),
            1 => 'general_terms_and_conditions_c',
          ),
          106 => 
          array (
            0 => 
            array (
              'name' => 'global_permissions_c',
              'label' => 'LBL_GLOBAL_PERMISSIONS_C',
            ),
            1 => 'global_permitted_c',
          ),
          107 => 
          array (
            0 => 
            array (
              'name' => 'gma_annual_increase_c',
              'label' => 'LBL_GMA_ANNUAL_INCREASE_C',
            ),
            1 => 'gma_attachment_effective_date_c',
          ),
          108 => 
          array (
            0 => 
            array (
              'name' => 'gma_attachment_number_c',
              'label' => 'LBL_GMA_ATTACHMENT_NUMBER_C',
            ),
            1 => 'gma_expiration_date_c',
          ),
          109 => 
          array (
            0 => 
            array (
              'name' => 'gma_pricing_discount_c',
              'label' => 'LBL_GMA_PRICING_DISCOUNT_C',
            ),
            1 => 'gma_renewal_term_months_c',
          ),
          110 => 
          array (
            0 => 
            array (
              'name' => 'gma_termination_prior_to_renewal_c',
              'label' => 'LBL_GMA_TERMINATION_PRIOR_TO_RENEWAL_C',
            ),
            1 => 'gma_service_level_c',
          ),
          111 => 
          array (
            0 => 
            array (
              'name' => 'gma_termination_prior_to_renewal_days_c',
              'label' => 'LBL_GMA_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'governing_law_state_c',
          ),
          112 => 
          array (
            0 => 
            array (
              'name' => 'gp_quotes_received_c',
              'label' => 'LBL_GP_QUOTES_RECEIVED_C',
            ),
            1 => 'gpo_affiliation_c',
          ),
          113 => 
          array (
            0 => 
            array (
              'name' => 'gpo_affiliation_verified_c',
              'label' => 'LBL_GPO_AFFILIATION_VERIFIED_C',
            ),
            1 => 'gpo_idn_c',
          ),
          114 => 
          array (
            0 => 
            array (
              'name' => 'grace_period_c',
              'label' => 'LBL_GRACE_PERIOD_C',
            ),
            1 => 'hire_client_mt_s_c',
          ),
          115 => 
          array (
            0 => 
            array (
              'name' => 'included_optional_system_components_c',
              'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
            ),
            1 => 'idn_affiliation_c',
          ),
          116 => 
          array (
            0 => 
            array (
              'name' => 'lastactivitydate_c',
              'label' => 'LBL_LASTACTIVITYDATE_C',
            ),
            1 => 'late_fees_c',
          ),
          117 => 
          array (
            0 => 
            array (
              'name' => 'legacy_agreement_number_c',
              'label' => 'LBL_LEGACY_AGREEMENT_NUMBER_C',
            ),
            1 => 'legal_entity_c',
          ),
          118 => 
          array (
            0 => 
            array (
              'name' => 'legal_notices_c',
              'label' => 'LBL_LEGAL_NOTICES_C',
            ),
            1 => 'limitation_of_liability_c',
          ),
          119 => 
          array (
            0 => 
            array (
              'name' => 'limited_liability_cap_c',
              'label' => 'LBL_LIMITED_LIABILITY_CAP_C',
            ),
            1 => 'm_modal_travel_living_policy_c',
          ),
          120 => 
          array (
            0 => 
            array (
              'name' => 'maintenance_and_support_product_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_PRODUCT_C',
            ),
            1 => 'master_general_notes_c',
          ),
          121 => 
          array (
            0 => 
            array (
              'name' => 'material_default_cure_period_c',
              'label' => 'LBL_MATERIAL_DEFAULT_CURE_PERIOD_C',
            ),
            1 => 'mutual_default_c',
          ),
          122 => 
          array (
            0 => 
            array (
              'name' => 'ownership_group_expiration_notice_c',
              'label' => 'LBL_OWNERSHIP_GROUP_EXPIRATION_NOTICE_C',
            ),
            1 => 'passive_adaptation_c',
          ),
          123 => 
          array (
            0 => 
            array (
              'name' => 'passive_adaptation_type_c',
              'label' => 'LBL_PASSIVE_ADAPTATION_TYPE_C',
            ),
            1 => 'payment_terms_c',
          ),
          124 => 
          array (
            0 => 
            array (
              'name' => 'ownership_group_c',
              'label' => 'LBL_OWNERSHIP_GROUP_C',
            ),
            1 => 'payment_terms_start_from_c',
          ),
          125 => 
          array (
            0 => 
            array (
              'name' => 'payment_type_c',
              'label' => 'LBL_PAYMENT_TYPE_C',
            ),
            1 => 'primary_contact_address_c',
          ),
          126 => 
          array (
            0 => 
            array (
              'name' => 'primary_contact_phone_number_c',
              'label' => 'LBL_PRIMARY_CONTACT_PHONE_NUMBER_C',
            ),
            1 => 'probability_c',
          ),
          127 => 
          array (
            0 => 
            array (
              'name' => 'progress_bar_c',
              'label' => 'LBL_PROGRESS_BAR_C',
            ),
            1 => 'purchase_order_language_c',
          ),
          128 => 
          array (
            0 => 
            array (
              'name' => 'qa_penalty_standard_c',
              'label' => 'LBL_QA_PENALTY_STANDARD_C',
            ),
            1 => 'qa_program_c',
          ),
          129 => 
          array (
            0 => 
            array (
              'name' => 'recordtypeid_c',
              'label' => 'LBL_RECORDTYPEID_C',
            ),
            1 => 'reference_code',
          ),
          130 => 
          array (
            0 => 
            array (
              'name' => 'region_c',
              'label' => 'LBL_REGION_C',
            ),
            1 => 'request_date_c',
          ),
          131 => 
          array (
            0 => 
            array (
              'name' => 'request_to_comm_ops_days_c',
              'label' => 'LBL_REQUEST_TO_COMM_OPS_DAYS_C',
            ),
            1 => 'requires_po_c',
          ),
          132 => 
          array (
            0 => 
            array (
              'name' => 'right_to_dispute_c',
              'label' => 'LBL_RIGHT_TO_DISPUTE_C',
            ),
            1 => 'right_to_dispute_waiver_c',
          ),
          133 => 
          array (
            0 => 
            array (
              'name' => 'sf_id_c',
              'label' => 'LBL_SF_ID_C',
            ),
            1 => 'sent_to_comm_ops_c',
          ),
          134 => 
          array (
            0 => 
            array (
              'name' => 'software_pricing_discount_picklist_c',
              'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_PICKLIST_C',
            ),
            1 => 'stage_c',
          ),
          135 => 
          array (
            0 => 
            array (
              'name' => 'stat_report_tat_c',
              'label' => 'LBL_STAT_REPORT_TAT_C',
            ),
            1 => 'status_category_text_c',
          ),
          136 => 
          array (
            0 => 
            array (
              'name' => 'strategic_deal_c',
              'label' => 'LBL_STRATEGIC_DEAL_C',
            ),
            1 => 'strategic_deal_description_c',
          ),
          137 => 
          array (
            0 => 
            array (
              'name' => 'submit_to_comm_ops_c',
              'label' => 'LBL_SUBMIT_TO_COMM_OPS_C',
            ),
            1 => 'submitted_to_opr_days_c',
          ),
          138 => 
          array (
            0 => 
            array (
              'name' => 'suspend_services_c',
              'label' => 'LBL_SUSPEND_SERVICES_C',
            ),
            1 => 'suspend_services_notice_period_c',
          ),
          139 => 
          array (
            0 => 
            array (
              'name' => 't_c_version_c',
              'label' => 'LBL_T_C_VERSION_C',
            ),
            1 => 'tax_exempt_c',
          ),
          140 => 
          array (
            0 => 
            array (
              'name' => 'termination_for_default_c',
              'label' => 'LBL_TERMINATION_FOR_DEFAULT_C',
            ),
            1 => 'time_in_pipeline_c',
          ),
          141 => 
          array (
            0 => 
            array (
              'name' => 'total_time_with_comm_ops_c',
              'label' => 'LBL_TOTAL_TIME_WITH_COMM_OPS_C',
            ),
            1 => 'travel_living_fees_c',
          ),
          142 => 
          array (
            0 => 
            array (
              'name' => 'ts_author_contract_c',
              'label' => 'LBL_TS_AUTHOR_CONTRACT_C',
            ),
            1 => 'ts_client_inital_review_c',
          ),
          143 => 
          array (
            0 => 
            array (
              'name' => 'ts_client_redline_review_c',
              'label' => 'LBL_TS_CLIENT_REDLINE_REVIEW_C',
            ),
            1 => 'ts_mmodal_redline_review_c',
          ),
          144 => 
          array (
            0 => 
            array (
              'name' => 'ts_partially_executed_received_c',
              'label' => 'LBL_TS_PARTIALLY_EXECUTED_RECEIVED_C',
            ),
            1 => 'ts_request_accepted_c',
          ),
          145 => 
          array (
            0 => 
            array (
              'name' => 'ts_submitted_to_comm_ops_c',
              'label' => 'LBL_TS_SUBMITTED_TO_COMM_OPS_C',
            ),
            1 => 'type_of_product_services_c',
          ),
          146 => 
          array (
            0 => 
            array (
              'name' => 'type_of_request_c',
              'label' => 'LBL_TYPE_OF_REQUEST_C',
            ),
            1 => 'ucid_c',
          ),
          147 => 
          array (
            0 => 
            array (
              'name' => 'use_of_data_continuous_improvement_c',
              'label' => 'LBL_USE_OF_DATA_CONTINUOUS_IMPROVEMENT_C',
            ),
          ),
          148 => 
          array (
          ),
          149 => 
          array (
            0 => 'description',
          ),
        ),
        'con_default' => 
        array (
          0 => 
          array (
            0 => 'con_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_cac_services_c',
              'label' => 'LBL_CAC_SERVICES_C',
            ),
            1 => 'con_coding_general_notes_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_coding_global_permissions_c',
              'label' => 'LBL_CODING_GLOBAL_PERMISSIONS_C',
            ),
            1 => 'con_coding_global_permitted_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_coding_price_book_rate_c',
              'label' => 'LBL_CODING_PRICE_BOOK_RATE_C',
            ),
            1 => 'con_coding_term_for_convenience_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'con_ff_fix_send_to_other_party_for_review_c',
              'label' => 'LBL_FF_FIX_SEND_TO_OTHER_PARTY_FOR_REVIEW_C',
            ),
            1 => 'con_ff_fix_send_to_other_party_signatures_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'con_fluency_for_coding_platform_c',
              'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
            ),
            1 => 'con_hardware_gma_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'con_hardware_pricing_discount_c',
              'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hosting_auto_renew_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_effective_date_c',
              'label' => 'LBL_HOSTING_EFFECTIVE_DATE_C',
            ),
            1 => 'con_hosting_expiration_date_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_renewal_start_date_c',
              'label' => 'LBL_HOSTING_RENEWAL_START_DATE_C',
            ),
            1 => 'con_hosting_renewal_term_months_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_term_months_c',
              'label' => 'LBL_HOSTING_TERM_MONTHS_C',
            ),
            1 => 'con_hosting_term_notice_period_dd_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_termination_prior_to_renewal_day_c',
              'label' => 'LBL_HOSTING_TERMINATION_PRIOR_TO_RENEWAL_DAY_C',
            ),
            1 => 'con_maintenance_and_support_attachment_effec_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_attachment_expir_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EXPIR_C',
            ),
            1 => 'con_maintenance_and_support_attachment_numbe_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_auto_renew_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_AUTO_RENEW_C',
            ),
            1 => 'con_maintenance_and_support_renewal_term_mon_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_sow_date_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_SOW_DATE_C',
            ),
            1 => 'con_maintenance_and_support_sow_version_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_term_years_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERM_YEARS_C',
            ),
            1 => 'con_maintenance_and_support_termination_prio_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_year_1_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_1_C',
            ),
            1 => 'con_maintenance_and_support_year_2_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_year_3_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_3_C',
            ),
            1 => 'con_maintenance_general_notes_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'con_name_of_product_c',
              'label' => 'LBL_NAME_OF_PRODUCT_C',
            ),
            1 => 'con_product_attachment_effective_date_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'con_product_attachment_expiration_date_c',
              'label' => 'LBL_PRODUCT_ATTACHMENT_EXPIRATION_DATE_C',
            ),
            1 => 'con_product_attachment_number_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'con_product_billing_c',
              'label' => 'LBL_PRODUCT_BILLING_C',
            ),
            1 => 'con_product_billing_terms_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'con_product_cia_c',
              'label' => 'LBL_PRODUCT_CIA_C',
            ),
            1 => 'con_product_general_notes_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_annual_increase_c',
              'label' => 'LBL_PRODUCT_GMA_ANNUAL_INCREASE_C',
            ),
            1 => 'con_product_gma_auto_renew_c',
          ),
          22 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_effective_date_c',
              'label' => 'LBL_PRODUCT_GMA_EFFECTIVE_DATE_C',
            ),
            1 => 'con_product_gma_expiration_date_c',
          ),
          23 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_renewal_start_date_c',
              'label' => 'LBL_PRODUCT_GMA_RENEWAL_START_DATE_C',
            ),
            1 => 'con_product_gma_renewal_term_c',
          ),
          24 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_renewal_term_months_c',
              'label' => 'LBL_PRODUCT_GMA_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'con_product_gma_service_level_c',
          ),
          25 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_term_months_c',
              'label' => 'LBL_PRODUCT_GMA_TERM_MONTHS_C',
            ),
            1 => 'con_product_gma_termination_period_dd_c',
          ),
          26 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_termination_prior_to_ren_pic_c',
              'label' => 'LBL_PRODUCT_GMA_TERMINATION_PRIOR_TO_REN_PIC_C',
            ),
            1 => 'con_product_maintenance_and_support_auto_ren_c',
          ),
          27 => 
          array (
            0 => 
            array (
              'name' => 'con_product_hosted_c',
              'label' => 'LBL_PRODUCT_HOSTED_C',
            ),
            1 => 'con_product_maintenance_and_support_effectiv_c',
          ),
          28 => 
          array (
            0 => 
            array (
              'name' => 'con_product_maintenance_and_support_expirati_c',
              'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_EXPIRATI_C',
            ),
            1 => 'con_product_maintenance_and_support_service_c',
          ),
          29 => 
          array (
            0 => 
            array (
              'name' => 'con_product_maintenance_and_support_term_mo_c',
              'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_TERM_MO_C',
            ),
            1 => 'con_product_perpetual_c',
          ),
          30 => 
          array (
            0 => 
            array (
              'name' => 'con_product_price_increase_c',
              'label' => 'LBL_PRODUCT_PRICE_INCREASE_C',
            ),
            1 => 'con_product_sow_date_c',
          ),
          31 => 
          array (
            0 => 
            array (
              'name' => 'con_product_sow_version_c',
              'label' => 'LBL_PRODUCT_SOW_VERSION_C',
            ),
            1 => 'con_product_subscription_auto_renewal_c',
          ),
          32 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_for_convenien_c',
              'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIEN_C',
            ),
            1 => 'con_product_term_for_convenience_c',
          ),
          33 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_months_c',
              'label' => 'LBL_PRODUCT_TERM_MONTHS_C',
            ),
            1 => 'con_software_maintenance_and_support_c',
          ),
          34 => 
          array (
            0 => 
            array (
              'name' => 'con_software_pricing_discount_c',
              'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
            ),
          ),
          35 => 
          array (
            0 => 'con_description',
          ),
        ),
        'acc_default' => 
        array (
          0 => 
          array (
            0 => 'acc_name',
          ),
          1 => 
          array (
            0 => 'acc_description',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_attachment_number_c',
              'label' => 'LBL_CODING_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_coding_auto_renew_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_billing_c',
              'label' => 'LBL_CODING_BILLING_C',
            ),
            1 => 'acc_coding_commitment_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_effective_date_c',
              'label' => 'LBL_CODING_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_coding_estimated_billing_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_evergreen_c',
              'label' => 'LBL_CODING_EVERGREEN_C',
            ),
            1 => 'acc_coding_expiration_date_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_implementation_training_fees_c',
              'label' => 'LBL_CODING_IMPLEMENTATION_TRAINING_FEES_C',
            ),
            1 => 'acc_coding_pricing_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_pricing_category_rate_c',
              'label' => 'LBL_CODING_PRICING_CATEGORY_RATE_C',
            ),
            1 => 'acc_coding_pricing_increase_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_consent_c',
              'label' => 'LBL_CODING_RENEWAL_CONSENT_C',
            ),
            1 => 'acc_coding_renewal_notification_period_dd_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_start_date_c',
              'label' => 'LBL_CODING_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_coding_renewal_term_months_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_terms_c',
              'label' => 'LBL_CODING_RENEWAL_TERMS_C',
            ),
            1 => 'acc_coding_revenue_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_sow_date_c',
              'label' => 'LBL_CODING_SOW_DATE_C',
            ),
            1 => 'acc_coding_sow_version_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_term_for_convenience_notice_dd_c',
              'label' => 'LBL_CODING_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
            ),
            1 => 'acc_coding_term_months_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_termination_for_convenience_c',
              'label' => 'LBL_CODING_TERMINATION_FOR_CONVENIENCE_C',
            ),
            1 => 'acc_coding_termination_prior_to_renewal_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_termination_prior_to_renewal_days_c',
              'label' => 'LBL_CODING_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'acc_codingt_renewal_notice_days_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'acc_estimated_fft_existing_volume_c',
              'label' => 'LBL_ESTIMATED_FFT_EXISTING_VOLUME_C',
            ),
            1 => 'acc_estimated_fft_new_volume_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'acc_estimated_tos_existing_volume_c',
              'label' => 'LBL_ESTIMATED_TOS_EXISTING_VOLUME_C',
            ),
            1 => 'acc_estimated_tos_new_volume_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_attachment_number_c',
              'label' => 'LBL_FFT_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_fft_auto_renew_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_billing_c',
              'label' => 'LBL_FFT_BILLING_C',
            ),
            1 => 'acc_fft_effective_date_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_evergreen_c',
              'label' => 'LBL_FFT_EVERGREEN_C',
            ),
            1 => 'acc_fft_expiration_date_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_general_notes_c',
              'label' => 'LBL_FFT_GENERAL_NOTES_C',
            ),
            1 => 'acc_fft_implementation_training_fees_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_pricing_category_c',
              'label' => 'LBL_FFT_PRICING_CATEGORY_C',
            ),
            1 => 'acc_fft_pricing_category_rate_c',
          ),
          22 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_pricing_category_uom_c',
              'label' => 'LBL_FFT_PRICING_CATEGORY_UOM_C',
            ),
            1 => 'acc_fft_pricing_increase_c',
          ),
          23 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_consent_c',
              'label' => 'LBL_FFT_RENEWAL_CONSENT_C',
            ),
            1 => 'acc_fft_pricing_other_c',
          ),
          24 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_notice_days_c',
              'label' => 'LBL_FFT_RENEWAL_NOTICE_DAYS_C',
            ),
            1 => 'acc_fft_renewal_notification_period_dd_c',
          ),
          25 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_term_months_c',
              'label' => 'LBL_FFT_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'acc_fft_renewal_start_date_c',
          ),
          26 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_revenue_c',
              'label' => 'LBL_FFT_REVENUE_C',
            ),
            1 => 'acc_fft_shipping_c',
          ),
          27 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_sow_date_c',
              'label' => 'LBL_FFT_SOW_DATE_C',
            ),
            1 => 'acc_fft_renewal_terms_c',
          ),
          28 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_sow_version_c',
              'label' => 'LBL_FFT_SOW_VERSION_C',
            ),
            1 => 'acc_fft_term_for_convenience_c',
          ),
          29 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_term_for_convenience_notice_dd_c',
              'label' => 'LBL_FFT_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
            ),
            1 => 'acc_fft_term_months_c',
          ),
          30 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_termination_for_convenience_c',
              'label' => 'LBL_FFT_TERMINATION_FOR_CONVENIENCE_C',
            ),
            1 => 'acc_fft_termination_prior_to_renewal_c',
          ),
          31 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_termination_prior_to_renewal_days_c',
              'label' => 'LBL_FFT_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'acc_fft_volume_guarantee_c',
          ),
          32 => 
          array (
            0 => 
            array (
              'name' => 'acc_implementation_and_training_discount_c',
              'label' => 'LBL_IMPLEMENTATION_AND_TRAINING_DISCOUNT_C',
            ),
            1 => 'acc_number_of_mt_s_for_hire_c',
          ),
          33 => 
          array (
            0 => 
            array (
              'name' => 'acc_other_transcription_platform_c',
              'label' => 'LBL_OTHER_TRANSCRIPTION_PLATFORM_C',
            ),
            1 => 'acc_qa_penalty_details_c',
          ),
          34 => 
          array (
            0 => 
            array (
              'name' => 'acc_service_or_product_warranty_c',
              'label' => 'LBL_SERVICE_OR_PRODUCT_WARRANTY_C',
            ),
            1 => 'acc_tat_credit_details_c',
          ),
          35 => 
          array (
            0 => 
            array (
              'name' => 'acc_tat_credit_standard_c',
              'label' => 'LBL_TAT_CREDIT_STANDARD_C',
            ),
            1 => 'acc_tat_credits_c',
          ),
          36 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_attachment_number_c',
              'label' => 'LBL_TOS_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_tos_auto_renew_c',
          ),
          37 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_billing_c',
              'label' => 'LBL_TOS_BILLING_C',
            ),
            1 => 'acc_tos_commitment_c',
          ),
          38 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_effective_date_c',
              'label' => 'LBL_TOS_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_tos_evergreen_c',
          ),
          39 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_expiration_date_c',
              'label' => 'LBL_TOS_EXPIRATION_DATE_C',
            ),
            1 => 'acc_tos_general_notes_c',
          ),
          40 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_book_rate_c',
              'label' => 'LBL_TOS_PRICE_BOOK_RATE_C',
            ),
            1 => 'acc_tos_price_book_rate_v2_c',
          ),
          41 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_increase_during_initial_term_c',
              'label' => 'LBL_TOS_PRICE_INCREASE_DURING_INITIAL_TERM_C',
            ),
            1 => 'acc_tos_pricing_category_c',
          ),
          42 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_category_rate_c',
              'label' => 'LBL_TOS_PRICING_CATEGORY_RATE_C',
            ),
            1 => 'acc_tos_pricing_category_uom_c',
          ),
          43 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_increase_c',
              'label' => 'LBL_TOS_PRICING_INCREASE_C',
            ),
            1 => 'acc_tos_pricing_other_c',
          ),
          44 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_consent_c',
              'label' => 'LBL_TOS_RENEWAL_CONSENT_C',
            ),
            1 => 'acc_tos_renewal_notification_period_dd_c',
          ),
          45 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_start_date_c',
              'label' => 'LBL_TOS_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_tos_renewal_term_mm_c',
          ),
          46 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_revenue_c',
              'label' => 'LBL_TOS_REVENUE_C',
            ),
            1 => 'acc_tos_term_for_convenience_c',
          ),
          47 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_terms_c',
              'label' => 'LBL_TOS_RENEWAL_TERMS_C',
            ),
            1 => 'acc_tos_term_for_convenience_notice_dd_c',
          ),
          48 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_term_mm_c',
              'label' => 'LBL_TOS_TERM_MM_C',
            ),
            1 => 'acc_tos_termination_for_convenience_c',
          ),
          49 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_termination_for_convenience_notice_c',
              'label' => 'LBL_TOS_TERMINATION_FOR_CONVENIENCE_NOTICE_C',
            ),
            1 => 'acc_tos_termination_prior_to_renewal_c',
          ),
          50 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_termination_prior_to_renewal_days_c',
              'label' => 'LBL_TOS_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'acc_transcription_platform_c',
          ),
          51 => 
          array (
            0 => 
            array (
              'name' => 'acc_union_mt_s_c',
              'label' => 'LBL_UNION_MT_S_C',
            ),
            1 => 'acc_volume_guarantee_c',
          ),
        ),
      ),
    ),
  ),
);
?>
