<?php
$viewdefs = array (
  'AOS_Contracts' => 
  array (
    'DetailCombinedView' => 
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
            4 => 
            array (
              'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
            ),
            5 => 
            array (
              'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
            ),
            6 => 
            array (
              'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="sendToLegal" value="Send to Legal Queue">{/if}',
            ),
            7 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="Accept Request">{/if}',
            ),
            8 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="returnToRequester" value="Return to Requester">{/if}',
            ),
            9 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="redlineReview" value="M*Modal Redline Review">{/if}',
            ),
            10 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="informCommOps" value="Send for Signatures">{/if}',
            ),
            11 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="submitToCommOps" value="Submit to Comm Ops">{/if}',
            ),
            12 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="Accept Request">{/if}',
            ),
            13 => 
            array (
              'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="acceptRequestCommsOps" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST}">{/if}',
            ),
            14 => 
            array (
              'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="activateRequest" value="{$MOD.LBL_BUTTON_ACTIVATE_REQUST}">{/if}',
            ),
          ),
          'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
          'javascript' => '{$REQUIREDFIELDS}',
        ),
        'maxColumns' => '2',
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'custom/modules/AOS_Contracts/js/DetailView.js',
          ),
        ),
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
        'syncDetailEditViews' => true,
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => true,
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
          'CON_LBL_EDITVIEW_PANEL2' => 
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
              'name' => 'legacy_agreement_number_c',
              'label' => 'LBL_LEGACY_AGREEMENT_NUMBER_C',
            ),
            1 => 'type_of_request_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'client_agreement_number_c',
              'label' => 'LBL_CLIENT_AGREEMENT_NUMBER_C',
            ),
            1 => 'apttus_status_category_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'type_of_product_services_c',
              'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
            ),
            1 => 'apttus_status_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'apttus_parent_agreement_name_c',
              'studio' => 'visible',
              'label' => 'LBL_APTTUS_PARENT_AGREEMENT_NAME_C',
            ),
            1 => 'region_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'amendment_number_c',
              'label' => 'LBL_AMENDMENT_NUMBER_C',
            ),
            1 => 'assigned_user_name',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'apttus_total_contract_value_c',
              'label' => 'LBL_APTTUS_TOTAL_CONTRACT_VALUE_C',
            ),
            1 => 'apttus_requestor_name_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'gpo_affiliation_c',
              'label' => 'LBL_GPO_AFFILIATION_C',
            ),
            1 => 'ownership_group_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'idn_affiliation_c',
              'label' => 'LBL_IDN_AFFILIATION_C',
            ),
            1 => 'awaiting_information_detail_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'federal_agency_c',
              'label' => 'LBL_FEDERAL_AGENCY_C',
            ),
            1 => 'cancellation_reason_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'apttus_description_c',
              'label' => 'LBL_APTTUS_DESCRIPTION_C',
            ),
            1 => 'apttus_termination_notice_issue_date_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'apttus_special_terms_c',
              'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
            ),
            1 => 'apttus_termination_date_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'probability_c',
              'label' => 'LBL_PROBABILITY_C',
            ),
            1 => 'general_terms_and_conditions_c',
          ),
          15 => 
          array (
            1 => 't_c_version_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'requires_po_c',
              'label' => 'LBL_REQUIRES_PO_C',
            ),
            1 => 'strategic_deal_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'agreement_summary_c',
              'label' => 'LBL_AGREEMENT_SUMMARY_C',
            ),
            1 => 'strategic_deal_description_c',
          ),
          18 => 
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
        'lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'apttus_contract_start_date_c',
              'label' => 'LBL_APTTUS_CONTRACT_START_DATE_C',
            ),
            1 => 'purchase_order_language_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'apttus_contract_end_date_c',
              'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
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
            1 => 'confidentiality_default_cure_period_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'client_responsibl_for_collection_cost_c',
              'label' => 'LBL_CLIENT_RESPONSIBL_FOR_COLLECTION_COST_C',
            ),
            1 => 'limitation_of_liability_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'right_to_dispute_c',
              'label' => 'LBL_RIGHT_TO_DISPUTE_C',
            ),
            1 => 'limited_liability_cap_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'dispute_notice_period_c',
              'label' => 'LBL_DISPUTE_NOTICE_PERIOD_C',
            ),
            1 => 'governing_law_state_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'right_to_dispute_waiver_c',
              'label' => 'LBL_RIGHT_TO_DISPUTE_WAIVER_C',
            ),
            1 => 'arbitration_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'confidentiality_language_c',
              'label' => 'LBL_CONFIDENTIALITY_LANGUAGE_C',
            ),
            1 => 'favored_nation_language_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'intellectual_property_general_informatio_c',
              'label' => 'LBL_INTELLECTUAL_PROPERTY_GENERAL_INFORMATIO_C',
            ),
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
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'legal_notices_c',
              'label' => 'LBL_LEGAL_NOTICES_C',
            ),
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'master_general_notes_c',
              'label' => 'LBL_MASTER_GENERAL_NOTES_C',
            ),
            1 => 'assignment_permitted_c',
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
        'acc_lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_term_mm_c',
              'label' => 'LBL_TOS_TERM_MM_C',
            ),
            1 => 'acc_tos_pricing_category_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_auto_renew_c',
              'label' => 'LBL_TOS_AUTO_RENEW_C',
            ),
            1 => 'acc_tos_pricing_category_uom_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_transcription_platform_c',
              'label' => 'LBL_TRANSCRIPTION_PLATFORM_C',
            ),
            1 => 'acc_tos_pricing_other_c',
          ),
          3 => 
          array (
            1 => 'acc_tos_billing_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_commitment_c',
              'label' => 'LBL_TOS_COMMITMENT_C',
            ),
            1 => 'acc_estimated_tos_existing_volume_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_book_rate_c',
              'label' => 'LBL_TOS_PRICE_BOOK_RATE_C',
            ),
            1 => 'acc_estimated_tos_new_volume_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_qa_program_c',
              'label' => 'LBL_QA_PROGRAM_C',
            ),
            1 => 'acc_tos_revenue_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_hire_client_mt_s_c',
              'label' => 'LBL_HIRE_CLIENT_MT_S_C',
            ),
          ),
        ),
        'acc_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_term_months_c',
              'label' => 'LBL_FFT_TERM_MONTHS_C',
            ),
            1 => 'acc_fft_shipping_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_auto_renew_c',
              'label' => 'LBL_FFT_AUTO_RENEW_C',
            ),
            1 => 'acc_fft_pricing_category_uom_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_included_optional_system_components_c',
              'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
            ),
            1 => 'acc_estimated_fft_existing_volume_c',
          ),
          3 => 
          array (
            1 => 'acc_estimated_fft_new_volume_c',
          ),
          4 => 
          array (
            1 => 'acc_fft_revenue_c',
          ),
        ),
        'acc_lbl_editview_panel3' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_term_months_c',
              'label' => 'LBL_CODING_TERM_MONTHS_C',
            ),
            1 => 'acc_coding_auto_renew_c',
          ),
          1 => 
          array (
            1 => 'acc_coding_revenue_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_commitment_c',
              'label' => 'LBL_CODING_COMMITMENT_C',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_fluency_for_coding_platform_c',
              'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_pricing_c',
              'label' => 'LBL_CODING_PRICING_C',
            ),
          ),
        ),
        'acc_lbl_editview_panel4' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_term_mm_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_TERM_MM_C',
            ),
            1 => 'acc_virtual_scribing_global_permitted_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_auto_renew_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_AUTO_RENEW_C',
            ),
            1 => 'acc_virtual_scribing_pricing_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_evergreen_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_EVERGREEN_C',
            ),
            1 => 'acc_virtual_scribing_revenue_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_type_of_scribing_c',
              'label' => 'LBL_TYPE_OF_SCRIBING_C',
            ),
          ),
        ),
        'con_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'con_shipping_c',
              'label' => 'LBL_SHIPPING_C',
            ),
            1 => 'con_product_term_months_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_product_hosted_c',
              'label' => 'LBL_PRODUCT_HOSTED_C',
            ),
            1 => 'con_product_billing_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_hardware_pricing_discount_c',
              'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hardware_gma_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_software_pricing_discount_c',
              'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
            ),
          ),
          4 => 
          array (
            1 => 'con_product_gma_service_level_c',
          ),
        ),
      ),
    ),
  ),
);
?>
