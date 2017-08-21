<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT} {$LOCK_FILES} {$BEAN_DATA}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL13' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL10' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL11' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL12' => 
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
            'name' => 'recordtypeid_c',
            'label' => 'LBL_RECORDTYPEID',
          ),
          1 => 'sales_stage',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'short_id_c',
            'label' => 'LBL_SHORT_ID_C',
          ),
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
        3 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'inside_sales_ae_c',
            'label' => 'LBL_INSIDE_SALES_AE_C',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'channel_rep_c',
            'label' => 'LBL_CHANNEL_REP_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_c',
            'label' => 'LBL_TOTAL_AMOUNT_C',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'sales_leadership_c',
            'label' => 'LBL_SALES_LEADERSHIP_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'tip_source_c',
            'label' => 'LBL_TIP_SOURCE_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'partner_c',
            'label' => 'LBL_PARTNER_C',
          ),
          1 => 'probability',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'rfp_required_c',
            'label' => 'LBL_RFP_REQUIRED_C',
          ),
          1 => 
          array (
            'name' => 'confidence_level_c',
            'label' => 'LBL_CONFIDENCE_LEVEL_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'rfp_due_date_c',
            'label' => 'LBL_RFP_DUE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'forecasting_category_c',
            'label' => 'LBL_FORECASTING_CATEGORY_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'preferred_follow_up_c',
            'label' => 'LBL_PREFERRED_FOLLOW_UP_C',
          ),
          1 => 
          array (
            'name' => 'bankruptcy_hold1_c',
            'label' => 'LBL_BANKRUPTCY_HOLD1_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'crm_c',
            'label' => 'LBL_CRM_C',
          ),
          1 => 
          array (
            'name' => 'vendor_of_choice_c',
            'label' => 'LBL_VENDOR_OF_CHOICE_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'count_c',
            'label' => 'LBL_COUNT_C',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'new_partner_c',
            'label' => 'LBL_NEW_PARTNER_C',
          ),
          1 => '',
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'modlink_c',
            'label' => 'LBL_MODLINK_C',
          ),
          1 => '',
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'notifi_subscription_amount_c',
            'label' => 'LBL_NOTIFI_SUBSCRIPTION_AMOUNT_C',
          ),
          1 => '',
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'notifi_c',
            'label' => 'LBL_NOTIFI_C',
          ),
          1 => '',
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'statdx_c',
            'label' => 'LBL_STATDX_C',
          ),
          1 => '',
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'cdi_campaign_target_c',
            'label' => 'LBL_CDI_CAMPAIGN_TARGET_C',
          ),
          1 => '',
        ),
        21 => 
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
      'lbl_editview_panel13' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emr2_c',
            'label' => 'LBL_EMR2_C',
          ),
          1 => 
          array (
            'name' => 'new_am_region_c',
            'label' => 'LBL_NEW_AM_REGION_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'term_length_mm_c',
            'label' => 'LBL_TERM_LENGTH_MM_C',
          ),
          1 => 
          array (
            'name' => 'specialist_c',
            'label' => 'LBL_SPECIALIST_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'btl_c',
            'label' => 'LBL_BTL_C',
          ),
          1 => 
          array (
            'name' => 'co_implementation_training_pro_serv_c',
            'label' => 'LBL_CO_IMPLEMENTATION_TRAINING_PRO_SERV_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_opportunities_1_name',
            'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'license_type_c',
            'label' => 'LBL_LICENSE_TYPE_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'license_term_length_mm_c',
            'label' => 'LBL_LICENSE_TERM_LENGTH_MM_C',
          ),
          1 => 
          array (
            'name' => 'sw_maintenance_term_length_mm_c',
            'label' => 'LBL_SW_MAINTENANCE_TERM_LENGTH_MM_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'co_annual_prod_subscription_fee_c',
            'label' => 'LBL_CO_ANNUAL_PROD_SUBSCRIPTION_FEE_C',
          ),
          1 => 
          array (
            'name' => 'previous_close_date_c',
            'label' => 'LBL_PREVIOUS_CLOSE_DATE_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'renewal_value_c',
            'label' => 'LBL_RENEWAL_VALUE_C',
          ),
          1 => 
          array (
            'name' => 'new_cost_component_sum_c',
            'label' => 'LBL_NEW_COST_COMPONENT_SUM_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'forecast_month_c',
            'label' => 'LBL_FORECAST_MONTH_C',
          ),
          1 => 
          array (
            'name' => 'forecast_month_num_c',
            'label' => 'LBL_FORECAST_MONTH_NUM_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'forecastcategory_c',
            'label' => 'LBL_FORECASTCATEGORY_C',
          ),
          1 => 
          array (
            'name' => 'forecastcategoryname_c',
            'label' => 'LBL_FORECASTCATEGORYNAME_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'forecasted_c',
            'label' => 'LBL_FORECASTED_C',
          ),
          1 => 
          array (
            'name' => 'forecast_c',
            'label' => 'LBL_FORECAST_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'previous_close_date_changed_c',
            'label' => 'LBL_PREVIOUS_CLOSE_DATE_CHANGED_C',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'proposal_or_above_c',
            'label' => 'LBL_PROPOSAL_OR_ABOVE_C',
          ),
          1 => 
          array (
            'name' => 'proposal_sent_date_c',
            'label' => 'LBL_PROPOSAL_SENT_DATE_C',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'latest_update_date_c',
            'label' => 'LBL_LATEST_UPDATE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'latest_update_c',
            'label' => 'LBL_LATEST_UPDATE_C',
          ),
          1 => 
          array (
            'name' => 'fte_c',
            'label' => 'LBL_FTE_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'est_platform_cost_c',
            'label' => 'LBL_EST_PLATFORM_COST_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'adoption_services_c',
            'label' => 'LBL_ADOPTION_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'co_annual_tos_estimate_c',
            'label' => 'LBL_CO_ANNUAL_TOS_ESTIMATE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'co_other_hardware_server_c',
            'label' => 'LBL_CO_OTHER_HARDWARE_SERVER_C',
          ),
          1 => 
          array (
            'name' => 'eb_tos_adjustment_c',
            'label' => 'LBL_EB_TOS_ADJUSTMENT_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'co_speech_mics_c',
            'label' => 'LBL_CO_SPEECH_MICS_C',
          ),
          1 => 
          array (
            'name' => 'co_cloud_intelligence_c',
            'label' => 'LBL_CO_CLOUD_INTELLIGENCE_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'co_third_party_software_c',
            'label' => 'LBL_CO_THIRD_PARTY_SOFTWARE_C',
          ),
          1 => 
          array (
            'name' => 'co_hosting_c',
            'label' => 'LBL_CO_HOSTING_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'co_license_cost_c',
            'label' => 'LBL_CO_LICENSE_COST_C',
          ),
          1 => 
          array (
            'name' => 'co_annual_gma_c',
            'label' => 'LBL_CO_ANNUAL_GMA_C',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'implementation_cost_c',
            'label' => 'LBL_IMPLEMENTATION_COST_C',
          ),
          1 => 
          array (
            'name' => 'annual_volume_c',
            'label' => 'LBL_ANNUAL_VOLUME_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hwsw_cost_c',
            'label' => 'LBL_HWSW_COST_C',
          ),
          1 => 
          array (
            'name' => 'mq_uom_c',
            'label' => 'LBL_MQ_UOM_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'license_cost_c',
            'label' => 'LBL_LICENSE_COST_C',
          ),
          1 => 
          array (
            'name' => 'mq_unit_price_c',
            'label' => 'LBL_MQ_UNIT_PRICE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'annual_mq_services_estimate_c',
            'label' => 'LBL_ANNUAL_MQ_SERVICES_ESTIMATE_C',
          ),
          1 => 
          array (
            'name' => 'number_of_licenses_c',
            'label' => 'LBL_NUMBER_OF_LICENSES_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'other_cost_c',
            'label' => 'LBL_OTHER_COST_C',
          ),
          1 => 
          array (
            'name' => 'bundle_c',
            'label' => 'LBL_BUNDLE_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'annual_maintenance_cost_c',
            'label' => 'LBL_ANNUAL_MAINTENANCE_COST_C',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'pricing_notes_c',
            'label' => 'LBL_PRICING_NOTES_C',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ilp_c',
            'label' => 'LBL_ILP_C',
          ),
          1 => 
          array (
            'name' => 'encoder_c',
            'label' => 'LBL_ENCODER_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'global_use_probability_percent_c',
            'label' => 'LBL_GLOBAL_USE_PROBABILITY_PERCENT_C',
          ),
          1 => 
          array (
            'name' => 'encoder_description_c',
            'label' => 'LBL_ENCODER_DESCRIPTION_C',
          ),
        ),
        9 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'number_of_ftes_c',
            'label' => 'LBL_NUMBER_OF_FTES_C',
          ),
        ),
        10 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'coding_start_date_c',
            'label' => 'LBL_CODING_START_DATE_C',
          ),
        ),
        11 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'coding_end_date_c',
            'label' => 'LBL_CODING_END_DATE_C',
          ),
        ),
        12 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'coding_specialty_c',
            'label' => 'LBL_CODING_SPECIALTY_C',
          ),
        ),
        13 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'gpo_c',
            'label' => 'LBL_GPO_C',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'new_ae1_c',
            'label' => 'LBL_NEW_AE1_C',
          ),
          1 => 
          array (
            'name' => 'new_ae1_credit_c',
            'label' => 'LBL_NEW_AE1_CREDIT_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'new_ae2_c',
            'label' => 'LBL_NEW_AE2_C',
          ),
          1 => 
          array (
            'name' => 'new_ae2_credit_c',
            'label' => 'LBL_NEW_AE2_CREDIT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'se1_c',
            'label' => 'LBL_SE1_C',
          ),
          1 => 
          array (
            'name' => 'se1_perc_c',
            'label' => 'LBL_SE1_PERC_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'se2_c',
            'label' => 'LBL_SE2_C',
          ),
          1 => 
          array (
            'name' => 'se2_perc_c',
            'label' => 'LBL_SE2_PERC_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'rvp_override1_c',
            'label' => 'LBL_RVP_OVERRIDE1_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'rvp_override2_c',
            'label' => 'LBL_RVP_OVERRIDE2_C',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'svp_override1_c',
            'label' => 'LBL_SVP_OVERRIDE1_C',
          ),
          1 => 
          array (
            'name' => 'svp_1_c',
            'label' => 'LBL_SVP_1_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'svp_override2_c',
            'label' => 'LBL_SVP_OVERRIDE2_C',
          ),
          1 => 
          array (
            'name' => 'svp_2_c',
            'label' => 'LBL_SVP_2_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'imaging_spiff_user_c',
            'label' => 'LBL_IMAGING_SPIFF_USER_C',
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
            'name' => 'incumbentx_c',
            'label' => 'LBL_INCUMBENTX_C',
          ),
          1 => 
          array (
            'name' => 'winner_c',
            'label' => 'LBL_WINNER_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'incumbent_unit_price_c',
            'label' => 'LBL_INCUMBENT_UNIT_PRICE_C',
          ),
          1 => 
          array (
            'name' => 'winner_unit_price_c',
            'label' => 'LBL_WINNER_UNIT_PRICE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'incumbent_uom_c',
            'label' => 'LBL_INCUMBENT_UOM_C',
          ),
          1 => 
          array (
            'name' => 'winner_uom_c',
            'label' => 'LBL_WINNER_UOM_C',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'go_live_date_c',
            'label' => 'LBL_GO_LIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'contract_document_c',
            'label' => 'LBL_CONTRACT_DOCUMENT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'implementation_timeframe_c',
            'label' => 'LBL_IMPLEMENTATION_TIMEFRAME_C',
          ),
          1 => 
          array (
            'name' => 'contract_term_c',
            'label' => 'LBL_CONTRACT_TERM_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'implemention_comments_c',
            'label' => 'LBL_IMPLEMENTION_COMMENTS_C',
          ),
          1 => 
          array (
            'name' => 'mq_project_id_c',
            'label' => 'LBL_MQ_PROJECT_ID_C',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_reason_for_winloss_c',
            'label' => 'LBL_PRIMARY_REASON_FOR_WINLOSS_C',
          ),
          1 => 
          array (
            'name' => 'lessons_learned_c',
            'label' => 'LBL_LESSONS_LEARNED_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'winloss_description_c',
            'label' => 'LBL_WINLOSS_DESCRIPTION_C',
          ),
          1 => 
          array (
            'name' => 'changes_next_time_c',
            'label' => 'LBL_CHANGES_NEXT_TIME_C',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'co_status_c',
            'label' => 'LBL_CO_STATUS_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'adoption_services_term_length_c',
            'label' => 'LBL_ADOPTION_SERVICES_TERM_LENGTH_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'validation_date_c',
            'label' => 'LBL_VALIDATION_DATE_C',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'extended_term_adoption_services_value_c',
            'label' => 'LBL_EXTENDED_TERM_ADOPTION_SERVICES_VALUE_C',
          ),
          1 => 
          array (
            'name' => 'no_out_for_convenience_c',
            'label' => 'LBL_NO_OUT_FOR_CONVENIENCE_C',
          ),
        ),
      ),
      'lbl_editview_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_source_c',
            'label' => 'LBL_IS_SOURCE_C',
          ),
          1 => 
          array (
            'name' => 'purchasing_timeframe_c',
            'label' => 'LBL_PURCHASING_TIMEFRAME_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nih_rating_c',
            'label' => 'LBL_NIH_RATING_C',
          ),
          1 => 
          array (
            'name' => 'lead_rating_c',
            'label' => 'LBL_LEAD_RATING_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pipeline_date_c',
            'label' => 'LBL_PIPELINE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'target_decision_date_c',
            'label' => 'LBL_TARGET_DECISION_DATE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'marketing_report_status_c',
            'label' => 'LBL_MARKETING_REPORT_STATUS_C',
          ),
          1 => 
          array (
            'name' => 'product_interest_c',
            'label' => 'LBL_PRODUCT_INTEREST_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'rfp_preparer_c',
            'label' => 'LBL_RFP_PREPARER_C',
          ),
          1 => 
          array (
            'name' => 'prospect_date_c',
            'label' => 'LBL_PROSPECT_DATE_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'previous_opportunity_stage_c',
            'label' => 'LBL_PREVIOUS_OPPORTUNITY_STAGE_C',
          ),
          1 => 
          array (
            'name' => 'previous_opportunity_stage_date_c',
            'label' => 'LBL_PREVIOUS_OPPORTUNITY_STAGE_DATE_C',
          ),
        ),
      ),
      'lbl_editview_panel11' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'baseline_c',
            'label' => 'LBL_BASELINE_C',
          ),
          1 => 
          array (
            'name' => 'approved_go_live_date_c',
            'label' => 'LBL_APPROVED_GO_LIVE_DATE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ig_number_c',
            'label' => 'LBL_IG_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'completion_of_implementation_c',
            'label' => 'LBL_COMPLETION_OF_IMPLEMENTATION_C',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'first_commission_date_c',
            'label' => 'LBL_FIRST_COMMISSION_DATE_C',
          ),
        ),
      ),
      'lbl_editview_panel12' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
