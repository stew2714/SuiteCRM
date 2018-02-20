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
      'syncDetailEditViews' => true,
      'javascript' => '{$LOCK_FILES} {$BEAN_DATA}',
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
          1 => 
          array (
            'name' => 'contract_account',
            'label' => 'LBL_CONTRACT_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'legal_entity_c',
            'label' => 'LBL_LEGAL_ENTITY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_agreement_category_c',
            'label' => 'LBL_APTTUS_AGREEMENT_CATEGORY_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'apttus_agreement_number_c',
            'label' => 'LBL_APTTUS_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'type_of_request_c',
            'label' => 'LBL_TYPE_OF_REQUEST_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'client_agreement_number_c',
            'label' => 'LBL_CLIENT_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_category_c',
            'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'type_of_product_services_c',
            'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_c',
            'label' => 'LBL_APTTUS_STATUS_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'apttus_parent_agreement_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_PARENT_AGREEMENT_NAME_C',
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'amendment_number_c',
            'label' => 'LBL_AMENDMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'apttus_total_contract_value_c',
            'label' => 'LBL_APTTUS_TOTAL_CONTRACT_VALUE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_requestor_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_REQUESTOR_NAME_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'gpo_affiliation_c',
            'label' => 'LBL_GPO_AFFILIATION_C',
          ),
          1 => 
          array (
            'name' => 'ownership_group_c',
            'label' => 'LBL_OWNERSHIP_GROUP_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'idn_affiliation_c',
            'label' => 'LBL_IDN_AFFILIATION_C',
          ),
          1 => 
          array (
            'name' => 'awaiting_information_detail_c',
            'label' => 'LBL_AWAITING_INFORMATION_DETAIL_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'federal_agency_c',
            'label' => 'LBL_FEDERAL_AGENCY_C',
          ),
          1 => 
          array (
            'name' => 'cancellation_reason_c',
            'label' => 'LBL_CANCELLATION_REASON_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'apttus_description_c',
            'label' => 'LBL_APTTUS_DESCRIPTION_C',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_notice_issue_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_NOTICE_ISSUE_DATE_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'apttus_special_terms_c',
            'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_DATE_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'probability_c',
            'label' => 'LBL_PROBABILITY_C',
          ),
          1 => 
          array (
            'name' => 'general_terms_and_conditions_c',
            'label' => 'LBL_GENERAL_TERMS_AND_CONDITIONS_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 't_c_version_c',
            'label' => 'LBL_T_C_VERSION_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'requires_po_c',
            'label' => 'LBL_REQUIRES_PO_C',
          ),
          1 => 
          array (
            'name' => 'strategic_deal_c',
            'label' => 'LBL_STRATEGIC_DEAL_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'agreement_summary_c',
            'label' => 'LBL_AGREEMENT_SUMMARY_C',
          ),
          1 => 
          array (
            'name' => 'strategic_deal_description_c',
            'label' => 'LBL_STRATEGIC_DEAL_DESCRIPTION_C',
          ),
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
          1 => 
          array (
            'name' => 'additionalusers',
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
              'dashlet' => true,
            ),
            'label' => 'LBL_ADDITIONALUSERS',
          ),
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
          1 => 
          array (
            'name' => 'purchase_order_language_c',
            'label' => 'LBL_PURCHASE_ORDER_LANGUAGE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'apttus_contract_end_date_c',
            'label' => 'LBL_APTTUS_CONTRACT_END_DATE_C',
          ),
          1 => 
          array (
            'name' => 'interest_on_late_payments_c',
            'label' => 'LBL_INTEREST_ON_LATE_PAYMENTS_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apttus_amendment_effective_date_c',
            'label' => 'LBL_APTTUS_AMENDMENT_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'late_fees_c',
            'label' => 'LBL_LATE_FEES_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ownership_group_expiration_notice_c',
            'label' => 'LBL_OWNERSHIP_GROUP_EXPIRATION_NOTICE_C',
          ),
          1 => 
          array (
            'name' => 'suspend_services_c',
            'label' => 'LBL_SUSPEND_SERVICES_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'payment_terms_c',
            'label' => 'LBL_PAYMENT_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'suspend_services_notice_period_c',
            'label' => 'LBL_SUSPEND_SERVICES_NOTICE_PERIOD_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'payment_terms_start_from_c',
            'label' => 'LBL_PAYMENT_TERMS_START_FROM_C',
          ),
          1 => 
          array (
            'name' => 'termination_for_default_c',
            'label' => 'LBL_TERMINATION_FOR_DEFAULT_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'payment_type_c',
            'label' => 'LBL_PAYMENT_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'mutual_default_c',
            'label' => 'LBL_MUTUAL_DEFAULT_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'tax_exempt_c',
            'label' => 'LBL_TAX_EXEMPT_C',
          ),
          1 => 
          array (
            'name' => 'confidentiality_default_cure_period_c',
            'label' => 'LBL_CONFIDENTIALITY_DEFAULT_CURE_PERIOD_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'client_responsibl_for_collection_cost_c',
            'label' => 'LBL_CLIENT_RESPONSIBL_FOR_COLLECTION_COST_C',
          ),
          1 => 
          array (
            'name' => 'limitation_of_liability_c',
            'label' => 'LBL_LIMITATION_OF_LIABILITY_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'right_to_dispute_c',
            'label' => 'LBL_RIGHT_TO_DISPUTE_C',
          ),
          1 => 
          array (
            'name' => 'limited_liability_cap_c',
            'label' => 'LBL_LIMITED_LIABILITY_CAP_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'dispute_notice_period_c',
            'label' => 'LBL_DISPUTE_NOTICE_PERIOD_C',
          ),
          1 => 
          array (
            'name' => 'governing_law_state_c',
            'label' => 'LBL_GOVERNING_LAW_STATE_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'right_to_dispute_waiver_c',
            'label' => 'LBL_RIGHT_TO_DISPUTE_WAIVER_C',
          ),
          1 => 
          array (
            'name' => 'arbitration_c',
            'label' => 'LBL_ARBITRATION_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'confidentiality_language_c',
            'label' => 'LBL_CONFIDENTIALITY_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'favored_nation_language_c',
            'label' => 'LBL_FAVORED_NATION_LANGUAGE_C',
          ),
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
          1 => 
          array (
            'name' => 'passive_adaptation_type_c',
            'label' => 'LBL_PASSIVE_ADAPTATION_TYPE_C',
          ),
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
          1 => 
          array (
            'name' => 'assignment_permitted_c',
            'label' => 'LBL_ASSIGNMENT_PERMITTED_C',
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
          1 => 
          array (
            'name' => 'baa_attachment_number_c',
            'label' => 'LBL_BAA_ATTACHMENT_NUMBER_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'baa_template_source_c',
            'label' => 'LBL_BAA_TEMPLATE_SOURCE_C',
          ),
          1 => 
          array (
            'name' => 'baa_effective_date_c',
            'label' => 'LBL_BAA_EFFECTIVE_DATE_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'apts_request_date_c',
            'label' => 'LBL_APTS_REQUEST_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_executed_copy_mailed_out_date_c',
            'label' => 'LBL_APTTUS_EXECUTED_COPY_MAILED_OUT_DATE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'courior_tracking_number_c',
            'label' => 'LBL_COURIOR_TRACKING_NUMBER_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apttus_activated_date_c',
            'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
          ),
        ),
        3 => 
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
          1 => 
          array (
            'name' => 'apttus_non_standard_legal_language_c',
            'label' => 'LBL_APTTUS_NON_STANDARD_LEGAL_LANGUAGE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_date_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_initiation_type_c',
            'label' => 'LBL_APTTUS_INITIATION_TYPE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_title_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_TITLE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_source_c',
            'label' => 'LBL_APTTUS_SOURCE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_signed_by_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_signed_by_unlisted_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_UNLISTED_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_signed_date_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_signed_title_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_TITLE_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_submitted_to_comm_ops_c',
            'label' => 'LBL_DATE_SUBMITTED_TO_COMM_OPS_C',
          ),
          1 => 
          array (
            'name' => 'total_time_with_comm_ops_c',
            'label' => 'LBL_TOTAL_TIME_WITH_COMM_OPS_C',
          ),
        ),
      ),
    ),
  ),
);
?>
