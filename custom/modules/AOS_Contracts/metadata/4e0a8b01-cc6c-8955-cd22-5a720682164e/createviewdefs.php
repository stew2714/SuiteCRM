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
              'customCode' => '<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"                     accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}"                     class="button" 					 onclick="var _form = document.getElementById(\'CreateView\'); _form.action.value=\'Save\'; if(check_form(\'CreateView\'))SUGAR.ajaxUI.submitForm(_form);return false;";                     type="submit"                     name="button"                     id="SAVE"                         value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
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
        'useTabs' => false,
        'syncDetailEditViews' => false,
        'javascript' => '{$LOCK_FILES} {$BEAN_DATA}',
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
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
          'CON_LBL_EDITVIEW_PANEL2' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'CON_LBL_EDITVIEW_PANEL4' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL1' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL2' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL3' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL4' => 
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
            0 => 
            array (
              'name' => 'recordtypeid_c',
              'label' => 'LBL_RECORDTYPEID_C',
            ),
            1 => 'contract_account',
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'opportunity',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'legal_entity_c',
              'label' => 'LBL_LEGAL_ENTITY_C',
            ),
            1 => 'apttus_agreement_category_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'agreements_number_and_amendment_c',
              'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
            ),
            1 => 'type_of_request_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'legacy_agreement_number_c',
              'label' => 'LBL_LEGACY_AGREEMENT_NUMBER_C',
            ),
            1 => 'apttus_status_category_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'client_agreement_number_c',
              'label' => 'LBL_CLIENT_AGREEMENT_NUMBER_C',
            ),
            1 => 'apttus_status_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'type_of_product_services_c',
              'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
            ),
            1 => 'region_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'apttus_parent_agreement_name_c',
              'studio' => 'visible',
              'label' => 'LBL_APTTUS_PARENT_AGREEMENT_NAME_C',
            ),
            1 => 'assigned_user_name',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'amendment_number_c',
              'label' => 'LBL_AMENDMENT_NUMBER_C',
            ),
            1 => 'apttus_requestor_name_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'total_contract_value',
              'label' => 'LBL_TOTAL_CONTRACT_VALUE',
            ),
            1 => 'ownership_group_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            1 => 'awaiting_information_detail_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'idn_affiliation_c',
              'label' => 'LBL_IDN_AFFILIATION_C',
            ),
            1 => 'cancellation_reason_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'federal_agency_c',
              'label' => 'LBL_FEDERAL_AGENCY_C',
            ),
            1 => 'apttus_termination_notice_issue_date_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'gpo_affiliation_c',
              'label' => 'LBL_GPO_AFFILIATION_C',
            ),
            1 => 'apttus_termination_date_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'general_terms_and_conditions_c',
              'label' => 'LBL_GENERAL_TERMS_AND_CONDITIONS_C',
            ),
            1 => 't_c_version_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'apttus_special_terms_c',
              'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
            ),
            1 => 'strategic_deal_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'requires_po_c',
              'label' => 'LBL_REQUIRES_PO_C',
            ),
            1 => 'strategic_deal_description_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'agreement_summary_c',
              'label' => 'LBL_AGREEMENT_SUMMARY_C',
            ),
          ),
        ),
        'lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
            ),
            1 => 'purchase_order_language_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE',
            ),
            1 => 'interest_on_late_payments_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'apttus_amendment_effective_date_c',
              'label' => 'LBL_APTTUS_AMENDMENT_EFFECTIVE_DATE_C',
            ),
            1 => 'late_fees_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'ownership_group_expiration_notice_c',
              'label' => 'LBL_OWNERSHIP_GROUP_EXPIRATION_NOTICE_C',
            ),
            1 => 'suspend_services_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'payment_terms_c',
              'label' => 'LBL_PAYMENT_TERMS_C',
            ),
            1 => 'suspend_services_notice_period_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'payment_terms_start_from_c',
              'label' => 'LBL_PAYMENT_TERMS_START_FROM_C',
            ),
            1 => 'termination_for_default_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'payment_type_c',
              'label' => 'LBL_PAYMENT_TYPE_C',
            ),
            1 => 'mutual_default_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'tax_exempt_c',
              'label' => 'LBL_TAX_EXEMPT_C',
            ),
            1 => 'material_default_cure_period_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'client_responsibl_for_collection_cost_c',
              'label' => 'LBL_CLIENT_RESPONSIBL_FOR_COLLECTION_COST_C',
            ),
            1 => 'confidentiality_default_cure_period_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'right_to_dispute_c',
              'label' => 'LBL_RIGHT_TO_DISPUTE_C',
            ),
            1 => 'limitation_of_liability_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'dispute_notice_period_c',
              'label' => 'LBL_DISPUTE_NOTICE_PERIOD_C',
            ),
            1 => 'limited_liability_cap_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'right_to_dispute_waiver_c',
              'label' => 'LBL_RIGHT_TO_DISPUTE_WAIVER_C',
            ),
            1 => 'governing_law_state_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'confidentiality_language_c',
              'label' => 'LBL_CONFIDENTIALITY_LANGUAGE_C',
            ),
            1 => 'arbitration_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'intellectual_property_general_informatio_c',
              'label' => 'LBL_INTELLECTUAL_PROPERTY_GENERAL_INFORMATIO_C',
            ),
            1 => 'favored_nation_language_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'passive_adaptation_c',
              'label' => 'LBL_PASSIVE_ADAPTATION_C',
            ),
            1 => 'passive_adaptation_type_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'enhanced_data_use_rights_language_c',
              'label' => 'LBL_ENHANCED_DATA_USE_RIGHTS_LANGUAGE_C',
            ),
            1 => 'service_or_product_warranty_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'legal_notices_c',
              'label' => 'LBL_LEGAL_NOTICES_C',
            ),
            1 => 'assignment_permitted_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'master_general_notes_c',
              'label' => 'LBL_MASTER_GENERAL_NOTES_C',
            ),
          ),
        ),
        'lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'attachment_to_master_c',
              'label' => 'LBL_ATTACHMENT_TO_MASTER_C',
            ),
            1 => 'baa_attachment_number_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'baa_template_source_c',
              'label' => 'LBL_BAA_TEMPLATE_SOURCE_C',
            ),
            1 => 'baa_effective_date_c',
          ),
        ),
        'lbl_editview_panel3' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'apttus_request_date_c',
              'label' => 'LBL_APTTUS_REQUEST_DATE_C',
            ),
            1 => 'apttus_executed_copy_mailed_out_date_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'apttus_activated_date_c',
              'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
            ),
            1 => 'courior_tracking_number_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'apttus_activated_by_name_c',
              'studio' => 'visible',
              'label' => 'LBL_APTTUS_ACTIVATED_BY_NAME_C',
            ),
          ),
        ),
        'lbl_editview_panel4' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'apttus_company_signed_by_name_c',
              'studio' => 'visible',
              'label' => 'LBL_APTTUS_COMPANY_SIGNED_BY_NAME_C',
            ),
            1 => 'apttus_non_standard_legal_language_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'apttus_company_signed_date_c',
              'label' => 'LBL_APTTUS_COMPANY_SIGNED_DATE_C',
            ),
            1 => 'apttus_initiation_type_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'apttus_company_signed_title_c',
              'label' => 'LBL_APTTUS_COMPANY_SIGNED_TITLE_C',
            ),
            1 => 'apttus_source_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'apttus_other_party_signed_by_name_c',
              'studio' => 'visible',
              'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_NAME_C',
            ),
            1 => 'apttus_other_party_signed_title_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'apttus_other_party_signed_date_c',
              'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_DATE_C',
            ),
            1 => 'apttus_other_party_signed_by_unlisted_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'securitygroup_display',
              'comment' => 'Used for adding to the list, detail, and edit views',
              'studio' => 
              array (
                'visible' => false,
                'listview' => true,
                'searchview' => false,
                'detailview' => true,
                'editview' => true,
                'formula' => false,
                'related' => false,
                'basic_search' => false,
                'advanced_search' => false,
                'popuplist' => true,
                'popupsearch' => false,
                'dashletsearch' => false,
                'dashlet' => false,
              ),
              'label' => 'LBL_SECURITYGROUP',
            ),
            1 => 'additionalusers',
          ),
        ),
        'acc_lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_attachment_number_c',
              'label' => 'LBL_TOS_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_tos_auto_renew_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_effective_date_c',
              'label' => 'LBL_TOS_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_tos_evergreen_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_expiration_date_c',
              'label' => 'LBL_TOS_EXPIRATION_DATE_C',
            ),
            1 => 'acc_tos_termination_prior_to_renewal_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_term_mm_c',
              'label' => 'LBL_TOS_TERM_MM_C',
            ),
            1 => 'acc_tos_termination_prior_to_renewal_days_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_start_date_c',
              'label' => 'LBL_TOS_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_tos_renewal_terms_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_term_mm_c',
              'label' => 'LBL_TOS_RENEWAL_TERM_MM_C',
            ),
            1 => 'acc_tos_renewal_consent_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_transcription_platform_c',
              'label' => 'LBL_TRANSCRIPTION_PLATFORM_C',
            ),
            1 => 'acc_tos_renewal_notification_period_dd_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_other_transcription_platform_c',
              'label' => 'LBL_OTHER_TRANSCRIPTION_PLATFORM_C',
            ),
            1 => 'acc_tos_termination_for_convenience_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'acc_tat_credits_c',
              'label' => 'LBL_TAT_CREDITS_C',
            ),
            1 => 'acc_tos_term_for_convenience_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'acc_tat_credit_standard_c',
              'label' => 'LBL_TAT_CREDIT_STANDARD_C',
            ),
            1 => 'acc_tos_term_for_convenience_notice_dd_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'acc_tat_credit_details_c',
              'label' => 'LBL_TAT_CREDIT_DETAILS_C',
            ),
            1 => 'acc_grace_period_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'acc_qa_program_c',
              'label' => 'LBL_QA_PROGRAM_C',
            ),
            1 => 'acc_global_permitted_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'acc_qa_penalty_details_c',
              'label' => 'LBL_QA_PENALTY_DETAILS_C',
            ),
            1 => 'acc_global_permissions_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'acc_stat_report_tat_c',
              'label' => 'LBL_STAT_REPORT_TAT_C',
            ),
            1 => 'acc_tos_commitment_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_category_c',
              'label' => 'LBL_TOS_PRICING_CATEGORY_C',
            ),
            1 => 'acc_tos_billing_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_category_uom_c',
              'label' => 'LBL_TOS_PRICING_CATEGORY_UOM_C',
            ),
            1 => 'acc_estimated_billing_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_other_c',
              'label' => 'LBL_TOS_PRICING_OTHER_C',
            ),
            1 => 'acc_hire_client_mt_s_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_increase_c',
              'label' => 'LBL_TOS_PRICING_INCREASE_C',
            ),
            1 => 'acc_union_mt_s_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_increase_during_initial_term_c',
              'label' => 'LBL_TOS_PRICE_INCREASE_DURING_INITIAL_TERM_C',
            ),
            1 => 'acc_number_of_mt_s_for_hire_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_book_rate_v2_c',
              'label' => 'LBL_TOS_PRICE_BOOK_RATE_V2_C',
            ),
            1 => 'acc_volume_guarantee_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_revenue_c',
              'label' => 'LBL_TOS_REVENUE_C',
            ),
            1 => 'acc_estimated_tos_existing_volume_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_general_notes_c',
              'label' => 'LBL_TOS_GENERAL_NOTES_C',
            ),
            1 => 'acc_estimated_tos_new_volume_c',
          ),
        ),
        'acc_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_attachment_number_c',
              'label' => 'LBL_FFT_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_fft_auto_renew_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_effective_date_c',
              'label' => 'LBL_FFT_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_fft_evergreen_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_expiration_date_c',
              'label' => 'LBL_FFT_EXPIRATION_DATE_C',
            ),
            1 => 'acc_fft_termination_prior_to_renewal_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_term_months_c',
              'label' => 'LBL_FFT_TERM_MONTHS_C',
            ),
            1 => 'acc_fft_termination_prior_to_renewal_days_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_start_date_c',
              'label' => 'LBL_FFT_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_fft_renewal_terms_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_term_months_c',
              'label' => 'LBL_FFT_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'acc_fft_renewal_consent_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_included_optional_system_components_c',
              'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
            ),
            1 => 'acc_fft_renewal_notification_period_dd_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_extended_voice_retention_c',
              'label' => 'LBL_EXTENDED_VOICE_RETENTION_C',
            ),
            1 => 'acc_fft_termination_for_convenience_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'acc_extended_adt_retention_c',
              'label' => 'LBL_EXTENDED_ADT_RETENTION_C',
            ),
            1 => 'acc_fft_term_for_convenience_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'acc_extended_report_retention_c',
              'label' => 'LBL_EXTENDED_REPORT_RETENTION_C',
            ),
            1 => 'acc_fft_term_for_convenience_notice_dd_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_shipping_c',
              'label' => 'LBL_FFT_SHIPPING_C',
            ),
            1 => 'acc_fft_pricing_category_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_sow_version_c',
              'label' => 'LBL_FFT_SOW_VERSION_C',
            ),
            1 => 'acc_fft_pricing_category_uom_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_sow_date_c',
              'label' => 'LBL_FFT_SOW_DATE_C',
            ),
            1 => 'acc_fft_pricing_other_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'acc_m_modal_travel_living_policy_c',
              'label' => 'LBL_M_MODAL_TRAVEL_LIVING_POLICY_C',
            ),
            1 => 'acc_fft_pricing_increase_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'acc_travel_living_fees_c',
              'label' => 'LBL_TRAVEL_LIVING_FEES_C',
            ),
            1 => 'acc_fft_implementation_training_fees_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_volume_guarantee_c',
              'label' => 'LBL_FFT_VOLUME_GUARANTEE_C',
            ),
            1 => 'acc_fft_billing_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'acc_estimated_fft_existing_volume_c',
              'label' => 'LBL_ESTIMATED_FFT_EXISTING_VOLUME_C',
            ),
            1 => 'acc_fft_revenue_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'acc_estimated_fft_new_volume_c',
              'label' => 'LBL_ESTIMATED_FFT_NEW_VOLUME_C',
            ),
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_general_notes_c',
              'label' => 'LBL_FFT_GENERAL_NOTES_C',
            ),
          ),
        ),
        'acc_lbl_editview_panel3' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_attachment_number_c',
              'label' => 'LBL_CODING_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_coding_auto_renew_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_effective_date_c',
              'label' => 'LBL_CODING_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_coding_evergreen_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_expiration_date_c',
              'label' => 'LBL_CODING_EXPIRATION_DATE_C',
            ),
            1 => 'acc_coding_termination_prior_to_renewal_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_term_months_c',
              'label' => 'LBL_CODING_TERM_MONTHS_C',
            ),
            1 => 'acc_coding_termination_prior_to_renewal_days_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_start_date_c',
              'label' => 'LBL_CODING_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_coding_renewal_terms_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_term_months_c',
              'label' => 'LBL_CODING_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'acc_coding_global_permitted_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_fluency_for_coding_platform_c',
              'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
            ),
            1 => 'acc_coding_global_permissions_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_cac_services_c',
              'label' => 'LBL_CAC_SERVICES_C',
            ),
            1 => 'acc_coding_renewal_consent_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_sow_version_c',
              'label' => 'LBL_CODING_SOW_VERSION_C',
            ),
            1 => 'acc_coding_renewal_notification_period_dd_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_sow_date_c',
              'label' => 'LBL_CODING_SOW_DATE_C',
            ),
            1 => 'acc_coding_termination_for_convenience_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_implementation_training_fees_c',
              'label' => 'LBL_CODING_IMPLEMENTATION_TRAINING_FEES_C',
            ),
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_commitment_c',
              'label' => 'LBL_CODING_COMMITMENT_C',
            ),
            1 => 'acc_coding_term_for_convenience_notice_dd_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_price_book_rate_c',
              'label' => 'LBL_CODING_PRICE_BOOK_RATE_C',
            ),
            1 => 'acc_coding_pricing_category_rate_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_revenue_c',
              'label' => 'LBL_CODING_REVENUE_C',
            ),
            1 => 'acc_coding_pricing_c',
          ),
          14 => 
          array (
            1 => 'acc_coding_pricing_increase_c',
          ),
          15 => 
          array (
            1 => 'acc_coding_billing_c',
          ),
          16 => 
          array (
            1 => 'acc_coding_estimated_billing_c',
          ),
        ),
        'acc_lbl_editview_panel4' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_doc_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_DOC_C',
            ),
            1 => 'acc_virtual_scribing_expiration_date_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_effective_date_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_virtual_scribing_term_mm_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_evergreen_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_EVERGREEN_C',
            ),
            1 => 'acc_virtual_scribing_auto_renew_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_vs_term_prior_to_renewal_dd_c',
              'label' => 'LBL_VS_TERM_PRIOR_TO_RENEWAL_DD_C',
            ),
            1 => 'acc_virtual_scribing_term_prior_to_renewal_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_sciribing_renewal_start_date_c',
              'label' => 'LBL_VIRTUAL_SCIRIBING_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_virtual_scribing_renewal_terms_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_term_for_convenience_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_TERM_FOR_CONVENIENCE_C',
            ),
            1 => 'acc_virtual_scribing_renewal_term_mm_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_vs_term_for_conv_notice_dd_c',
              'label' => 'LBL_VS_TERM_FOR_CONV_NOTICE_DD_C',
            ),
            1 => 'acc_virtual_scribing_global_permitted_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_type_of_scribing_c',
              'label' => 'LBL_TYPE_OF_SCRIBING_C',
            ),
            1 => 'acc_virtual_scribing_global_permissions_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_pricing_increase_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_PRICING_INCREASE_C',
            ),
            1 => 'acc_virtual_scribing_pricing_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_billing_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_BILLING_C',
            ),
            1 => 'acc_virtual_scribing_general_notes_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_minimum_hours_language_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_MINIMUM_HOURS_LANGUAGE_C',
            ),
            1 => 'acc_virtual_scribing_commitment_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_price_book_rate_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_PRICE_BOOK_RATE_C',
            ),
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_revenue_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_REVENUE_C',
            ),
          ),
        ),
        'con_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'con_product_attachment_number_c',
              'label' => 'LBL_PRODUCT_ATTACHMENT_NUMBER_C',
            ),
            1 => 'con_name_of_product_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_product_attachment_effective_date_c',
              'label' => 'LBL_PRODUCT_ATTACHMENT_EFFECTIVE_DATE_C',
            ),
            1 => 'con_gp_quotes_received_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_product_attachment_expiration_date_c',
              'label' => 'LBL_PRODUCT_ATTACHMENT_EXPIRATION_DATE_C',
            ),
            1 => 'con_gpo_affiliation_verified_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_months_c',
              'label' => 'LBL_PRODUCT_TERM_MONTHS_C',
            ),
            1 => 'con_shipping_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'con_product_subscription_auto_renewal_c',
              'label' => 'LBL_PRODUCT_SUBSCRIPTION_AUTO_RENEWAL_C',
            ),
            1 => 'con_product_billing_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_for_convenien_c',
              'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIEN_C',
            ),
            1 => 'con_product_billing_terms_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_for_convenience_c',
              'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIENCE_C',
            ),
            1 => 'con_product_price_increase_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'con_product_perpetual_c',
              'label' => 'LBL_PRODUCT_PERPETUAL_C',
            ),
            1 => 'con_product_cia_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'con_product_sow_version_c',
              'label' => 'LBL_PRODUCT_SOW_VERSION_C',
            ),
            1 => 'con_cia_effective_date_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'con_product_sow_date_c',
              'label' => 'LBL_PRODUCT_SOW_DATE_C',
            ),
            1 => 'con_cia_expiration_date_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_effective_date_c',
              'label' => 'LBL_PRODUCT_GMA_EFFECTIVE_DATE_C',
            ),
            1 => 'con_cia_term_months_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_expiration_date_c',
              'label' => 'LBL_PRODUCT_GMA_EXPIRATION_DATE_C',
            ),
            1 => 'con_cia_auto_renew_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_term_months_c',
              'label' => 'LBL_PRODUCT_GMA_TERM_MONTHS_C',
            ),
            1 => 'con_cia_renewal_term_months_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_auto_renew_c',
              'label' => 'LBL_PRODUCT_GMA_AUTO_RENEW_C',
            ),
            1 => 'con_cia_termination_prior_to_renewal_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_renewal_term_months_c',
              'label' => 'LBL_PRODUCT_GMA_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'con_cia_renewal_start_date_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_termination_prior_to_ren_pic_c',
              'label' => 'LBL_PRODUCT_GMA_TERMINATION_PRIOR_TO_REN_PIC_C',
            ),
            1 => 'con_cia_annual_increase_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_renewal_start_date_c',
              'label' => 'LBL_PRODUCT_GMA_RENEWAL_START_DATE_C',
            ),
            1 => 'con_product_hosted_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_service_level_c',
              'label' => 'LBL_PRODUCT_GMA_SERVICE_LEVEL_C',
            ),
            1 => 'con_hosting_effective_date_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_annual_increase_c',
              'label' => 'LBL_PRODUCT_GMA_ANNUAL_INCREASE_C',
            ),
            1 => 'con_hosting_expiration_date_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'con_software_pricing_discount_c',
              'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hosting_term_months_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'con_gma_pricing_discount_c',
              'label' => 'LBL_GMA_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hosting_auto_renew_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'con_hardware_pricing_discount_c',
              'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hosting_renewal_term_months_c',
          ),
          22 => 
          array (
            0 => 
            array (
              'name' => 'con_implementation_and_training_discount_c',
              'label' => 'LBL_IMPLEMENTATION_AND_TRAINING_DISCOUNT_C',
            ),
            1 => 'con_hosting_renewal_start_date_c',
          ),
          23 => 
          array (
            0 => 
            array (
              'name' => 'con_product_general_notes_c',
              'label' => 'LBL_PRODUCT_GENERAL_NOTES_C',
            ),
            1 => 'con_hosting_term_notice_period_dd_c',
          ),
        ),
        'con_lbl_editview_panel4' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_attachment_numbe_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_NUMBE_C',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_attachment_effec_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EFFEC_C',
            ),
            1 => 'con_software_maintenance_and_support_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_attachment_expir_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EXPIR_C',
            ),
            1 => 'con_maintenance_and_support_sow_version_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_term_years_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERM_YEARS_C',
            ),
            1 => 'con_maintenance_and_support_sow_date_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_auto_renew_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_AUTO_RENEW_C',
            ),
            1 => 'con_product_maintenance_and_support_service_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_renewal_term_mon_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_RENEWAL_TERM_MON_C',
            ),
            1 => 'con_hardware_gma_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_termination_prio_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERMINATION_PRIO_C',
            ),
            1 => 'con_gma_annual_increase_c',
          ),
          7 => 
          array (
            1 => 'con_maintenance_general_notes_c',
          ),
          8 => 
          array (
          ),
        ),
      ),
    ),
  ),
);
?>
