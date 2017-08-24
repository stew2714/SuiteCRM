<?php
$module_name = 'sa_Fluency_One';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
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
            'name' => 'account_232534532_c',
            'label' => 'LBL_ACCOUNT_232534532_C',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'client_locations_c',
            'label' => 'LBL_CLIENT_LOCATIONS_C',
          ),
          1 => 
          array (
            'name' => 'ae_region_c',
            'label' => 'LBL_AE_REGION_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'idn_c',
            'label' => 'LBL_IDN_C',
          ),
          1 => 
          array (
            'name' => 'request_submit_date_c',
            'label' => 'LBL_REQUEST_SUBMIT_DATE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'current_m_modal_client_c',
            'label' => 'LBL_CURRENT_M_MODAL_CLIENT_C',
          ),
          1 => 
          array (
            'name' => 'segment_c',
            'label' => 'LBL_SEGMENT_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'make_centralized_decisions_c',
            'label' => 'LBL_MAKE_CENTRALIZED_DECISIONS_C',
          ),
          1 => 
          array (
            'name' => 'eb_tos_opp_c',
            'label' => 'LBL_EB_TOS_OPP_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'eb_proposal_delivered_to_customer_date_c',
            'label' => 'LBL_EB_PROPOSAL_DELIVERED_TO_CUSTOMER_DATE_C',
          ),
          1 => 
          array (
            'name' => 'eb_tos_renewal_opp_c',
            'label' => 'LBL_EB_TOS_RENEWAL_OPP_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reason_for_not_a_good_fit_c',
            'label' => 'LBL_REASON_FOR_NOT_A_GOOD_FIT_C',
          ),
          1 => 
          array (
            'name' => 'eb_elf_opp_c',
            'label' => 'LBL_EB_ELF_OPP_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'reason_customer_declined_c',
            'label' => 'LBL_REASON_CUSTOMER_DECLINED_C',
          ),
          1 => 
          array (
            'name' => 'f1_cdi_opp_c',
            'label' => 'LBL_F1_CDI_OPP_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'f1radtosopp_c',
            'label' => 'LBL_F1RADTOSOPP_C',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'f1_ffi_opp_c',
            'label' => 'LBL_F1_FFI_OPP_C',
          ),
          1 => '',
        ),
        10 => 
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
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'key_contact_titles_c',
            'label' => 'LBL_KEY_CONTACT_TITLES_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'client_s_buying_timeframe_c',
            'label' => 'LBL_CLIENT_S_BUYING_TIMEFRAME_C',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'client_s_current_available_budget_c',
            'label' => 'LBL_CLIENT_S_CURRENT_AVAILABLE_BUDGET_C',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'current_ehr_c',
            'label' => 'LBL_CURRENT_EHR_C',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'status_of_ehr_rollout_c',
            'label' => 'LBL_STATUS_OF_EHR_ROLLOUT_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'client_currently_uses_dragon_c',
            'label' => 'LBL_CLIENT_CURRENTLY_USES_DRAGON_C',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'if_yes_please_explain_c',
            'label' => 'LBL_IF_YES_PLEASE_EXPLAIN_C',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'desired_pricing_model_c',
            'label' => 'LBL_DESIRED_PRICING_MODEL_C',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'desired_term_lengton_c',
            'label' => 'LBL_DESIRED_TERM_LENGTON_C',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'number_of_credentialed_users_c',
            'label' => 'LBL_NUMBER_OF_CREDENTIALED_USERS_C',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'volume_uom_c',
            'label' => 'LBL_VOLUME_UOM_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'volume_with_m_modal_c',
            'label' => 'LBL_VOLUME_WITH_M_MODAL_C',
          ),
          1 => 
          array (
            'name' => 'm_modal_total_tos_amount_c',
            'label' => 'LBL_M_MODAL_TOTAL_TOS_AMOUNT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'volume_insourced_c',
            'label' => 'LBL_VOLUME_INSOURCED_C',
          ),
          1 => 
          array (
            'name' => 'insource_total_amount_c',
            'label' => 'LBL_INSOURCE_TOTAL_AMOUNT_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'outsource_mtso_1_c',
            'label' => 'LBL_OUTSOURCE_MTSO_1_C',
          ),
          1 => 
          array (
            'name' => 'mtso_1_volume_c',
            'label' => 'LBL_MTSO_1_VOLUME_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'outsource_mtso_2_c',
            'label' => 'LBL_OUTSOURCE_MTSO_2_C',
          ),
          1 => 
          array (
            'name' => 'mtso_tos_amount_c',
            'label' => 'LBL_MTSO_TOS_AMOUNT_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'outsource_mtso_3_c',
            'label' => 'LBL_OUTSOURCE_MTSO_3_C',
          ),
          1 => 
          array (
            'name' => 'mtso_2_volume_c',
            'label' => 'LBL_MTSO_2_VOLUME_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'current_dom_trans_rate_c',
            'label' => 'LBL_CURRENT_DOM_TRANS_RATE_C',
          ),
          1 => 
          array (
            'name' => 'mtso_2_tos_amount_c',
            'label' => 'LBL_MTSO_2_TOS_AMOUNT_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'current_global_trans_rate_c',
            'label' => 'LBL_CURRENT_GLOBAL_TRANS_RATE_C',
          ),
          1 => 
          array (
            'name' => 'mtso_3_volume_c',
            'label' => 'LBL_MTSO_3_VOLUME_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'current_blended_rate_c',
            'label' => 'LBL_CURRENT_BLENDED_RATE_C',
          ),
          1 => 
          array (
            'name' => 'mtso_3_tos_amount_c',
            'label' => 'LBL_MTSO_3_TOS_AMOUNT_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'estimated_global_mix_c',
            'label' => 'LBL_ESTIMATED_GLOBAL_MIX_C',
          ),
          1 => 
          array (
            'name' => 'current_dom_edit_rate_c',
            'label' => 'LBL_CURRENT_DOM_EDIT_RATE_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'estimate_asr_mix_c',
            'label' => 'LBL_ESTIMATE_ASR_MIX_C',
          ),
          1 => 
          array (
            'name' => 'current_global_edit_rate_c',
            'label' => 'LBL_CURRENT_GLOBAL_EDIT_RATE_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'unusual_tos_tats_c',
            'label' => 'LBL_UNUSUAL_TOS_TATS_C',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'current_platform_c',
            'label' => 'LBL_CURRENT_PLATFORM_C',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'current_fes_c',
            'label' => 'LBL_CURRENT_FES_C',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'gpo_affiliation_c',
            'label' => 'LBL_GPO_AFFILIATION_C',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'current_m_modal_installed_products_c',
            'label' => 'LBL_CURRENT_M_MODAL_INSTALLED_PRODUCTS_C',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'beds_c',
            'label' => 'LBL_BEDS_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'inpatient_days_c',
            'label' => 'LBL_INPATIENT_DAYS_C',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'annual_outpatient_days_c',
            'label' => 'LBL_ANNUAL_OUTPATIENT_DAYS_C',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'number_of_doctors_c',
            'label' => 'LBL_NUMBER_OF_DOCTORS_C',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'number_of_hospitals_c',
            'label' => 'LBL_NUMBER_OF_HOSPITALS_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'number_of_clinics_c',
            'label' => 'LBL_NUMBER_OF_CLINICS_C',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'capd_interest_level_c',
            'label' => 'LBL_CAPD_INTEREST_LEVEL_C',
          ),
          1 => 
          array (
            'name' => 'document_insight_interest_level_c',
            'label' => 'LBL_DOCUMENT_INSIGHT_INTEREST_LEVEL_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'capd_key_drivers_c',
            'label' => 'LBL_CAPD_KEY_DRIVERS_C',
          ),
          1 => 
          array (
            'name' => 'document_insight_key_drivers_c',
            'label' => 'LBL_DOCUMENT_INSIGHT_KEY_DRIVERS_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'proposed_domestic_line_rate_c',
            'label' => 'LBL_PROPOSED_DOMESTIC_LINE_RATE_C',
          ),
          1 => 
          array (
            'name' => 'proposed_elf_price_c',
            'label' => 'LBL_PROPOSED_ELF_PRICE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'proposed_global_line_rate_c',
            'label' => 'LBL_PROPOSED_GLOBAL_LINE_RATE_C',
          ),
          1 => 
          array (
            'name' => 'proposed_elf_discount_c',
            'label' => 'LBL_PROPOSED_ELF_DISCOUNT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'includes_pricedown_c',
            'label' => 'LBL_INCLUDES_PRICEDOWN_C',
          ),
          1 => 
          array (
            'name' => 'pricedown_notes_c',
            'label' => 'LBL_PRICEDOWN_NOTES_C',
          ),
        ),
      ),
    ),
  ),
);
?>
