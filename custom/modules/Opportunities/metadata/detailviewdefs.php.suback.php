<?php
// created: 2020-09-03 14:51:45
$viewdefs = array (
  'Opportunities' => 
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
          'LBL_EDITVIEW_PANEL2' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL1' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL4' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL14' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL6' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL15' => 
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
          'LBL_EDITVIEW_PANEL10' => 
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
            0 => 'name',
            1 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'new_short_id_c',
              'label' => 'LBL_NEW_SHORT_ID_C',
            ),
            1 => 
            array (
              'name' => 'specialist_name_c',
              'studio' => 'visible',
              'label' => 'LBL_SPECIALIST_NAME_C',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'accounts_opportunities_3_name',
            ),
            1 => 
            array (
              'name' => 'inside_sales_ae_name_c',
              'studio' => 'visible',
              'label' => 'LBL_INSIDE_SALES_AE_NAME_C',
            ),
          ),
          3 => 
          array (
            0 => 'date_closed',
            1 => 
            array (
              'name' => 'channel_rep_name_c',
              'studio' => 'visible',
              'label' => 'LBL_CHANNEL_REP_NAME_C',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'total_amount_c',
              'label' => 'LBL_TOTAL_AMOUNT_C',
            ),
            1 => '',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'product_c',
              'label' => 'LBL_PRODUCT_C',
            ),
            1 => 
            array (
              'name' => 'new_am_region_c',
              'label' => 'LBL_NEW_AM_REGION_C',
            ),
          ),
          6 => 
          array (
            0 => 'campaign_name',
            1 => 
            array (
              'name' => 'sales_leadership_c',
              'label' => 'LBL_SALES_LEADERSHIP_C',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'tip_source_c',
              'label' => 'LBL_TIP_SOURCE_C',
            ),
            1 => 
            array (
              'name' => 'recordtypeid_c',
              'label' => 'LBL_RECORDTYPEID_C',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'crm_c',
              'label' => 'LBL_CRM_C',
            ),
            1 => 'sales_stage',
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
              'name' => 'reseller_c',
              'label' => 'LBL_RESELLER_C',
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
              'name' => 'rfp_required_c',
              'label' => 'LBL_RFP_REQUIRED_C',
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
              'name' => 'rfp_due_date_c',
              'label' => 'LBL_RFP_DUE_DATE_C',
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
              'name' => 'must_win_c',
              'label' => 'LBL_MUST_WIN_C',
            ),
            1 => 
            array (
              'name' => 'vendor_of_choice_c',
              'label' => 'LBL_VENDOR_OF_CHOICE_C',
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
              'name' => 'latest_update_c',
              'label' => 'LBL_LATEST_UPDATE_C',
            ),
          ),
        ),
        'lbl_editview_panel4' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'co_implementation_training_pro_serv_c',
              'label' => 'LBL_CO_IMPLEMENTATION_TRAINING_PRO_SERV_C',
            ),
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
              'name' => 'CIA_Fee_c',
              'label' => 'LBL_CIA_FEE_C',
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
            0 => 
            array (
              'name' => 'co_annual_prod_subscription_fee_c',
              'label' => 'LBL_CO_ANNUAL_PROD_SUBSCRIPTION_FEE_C',
            ),
            1 => 
            array (
              'name' => 'Sales_Subscription_Term_Length_MM_c',
              'label' => 'LBL_SALES_SUBSCRIPTION_TERM_LENGTH_MM_C',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'Sales_Sub_Term_Until_Contract_Out_MM_c',
              'label' => 'LBL_SALES_SUB_TERM_UNTIL_CONTRACT_OUT_MM_C',
            ),
            1 => '',
          ),
        ),
        'lbl_editview_panel14' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'pricing_notes_c',
              'label' => 'LBL_PRICING_NOTES_C',
            ),
            1 => 
            array (
              'name' => 'mmodal_scout_c',
              'label' => 'LBL_MMODAL_SCOUT_C',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'number_of_licenses_c',
              'label' => 'LBL_NUMBER_OF_LICENSES_C',
            ),
            1 => 
            array (
              'name' => 'annual_volume_c',
              'label' => 'LBL_ANNUAL_VOLUME_C',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'fte_c',
              'label' => 'LBL_FTE_C',
            ),
            1 => 
            array (
              'name' => 'mq_uom_c',
              'label' => 'LBL_MQ_UOM_C',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'emr2_c',
              'label' => 'LBL_EMR2_C',
            ),
            1 => 
            array (
              'name' => 'mq_unit_price_c',
              'label' => 'LBL_MQ_UNIT_PRICE_C',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'encoder_c',
              'label' => 'LBL_ENCODER_C',
            ),
            1 => 
            array (
              'name' => 'btl_c',
              'label' => 'LBL_BTL_C',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'encoder_description_c',
              'label' => 'LBL_ENCODER_DESCRIPTION_C',
            ),
            1 => 
            array (
              'name' => 'global_use_probability_percent_c',
              'label' => 'LBL_GLOBAL_USE_PROBABILITY_PERCENT_C',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'number_of_ftes_c',
              'label' => 'LBL_NUMBER_OF_FTES_C',
            ),
            1 => 
            array (
              'name' => 'gpo_name_c',
              'studio' => 'visible',
              'label' => 'LBL_GPO_NAME_C',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'coding_start_date_c',
              'label' => 'LBL_CODING_START_DATE_C',
            ),
            1 => '',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'coding_end_date_c',
              'label' => 'LBL_CODING_END_DATE_C',
            ),
            1 => 
            array (
              'name' => 'notifi_c',
              'label' => 'LBL_NOTIFI_C',
            ),
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'coding_specialty_c',
              'label' => 'LBL_CODING_SPECIALTY_C',
            ),
            1 => 
            array (
              'name' => 'notifi_subscription_amount_c',
              'label' => 'LBL_NOTIFI_SUBSCRIPTION_AMOUNT_C',
            ),
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'Providers_Scribe_opps_c',
              'label' => 'LBL_PROVIDERS_SCRIBE_OPPS_C',
            ),
            1 => 
            array (
              'name' => 'modlink_c',
              'label' => 'LBL_MODLINK_C',
            ),
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'Avg_hrs_mo_per_Provider_Scribe_opps_c',
              'label' => 'LBL_AVG_HRS_MO_PER_PROVIDER_SCRIBE_OPPS_C',
            ),
            1 => 
            array (
              'name' => 'statdx_c',
              'label' => 'LBL_STATDX_C',
            ),
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'Impl_Proj_Start_Date_Scribe_opps_c',
              'label' => 'LBL_IMPL_PROJ_START_DATE_SCRIBE_OPPS_C',
            ),
            1 => 
            array (
              'name' => 'Impl_Proj_End_Date_Scribe_opps_c',
              'label' => 'LBL_IMPL_PROJ_END_DATE_SCRIBE_OPPS_C',
            ),
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'Scribes_Needed_Scribe_opps_c',
              'label' => 'LBL_SCRIBES_NEEDED_SCRIBE_OPPS_C',
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
              'name' => 'accounts_opportunities_2_name',
              'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_2_FROM_ACCOUNTS_TITLE',
            ),
            1 => 
            array (
              'name' => 'accounts_opportunities_1_name',
              'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
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
        'lbl_editview_panel15' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'previous_opportunity_stage_c',
              'label' => 'LBL_PREVIOUS_OPPORTUNITY_STAGE_C',
            ),
            1 => 
            array (
              'name' => 'previous_close_date_c',
              'label' => 'LBL_PREVIOUS_CLOSE_DATE_C',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'previous_opportunity_stage_date_c',
              'label' => 'LBL_PREVIOUS_OPPORTUNITY_STAGE_DATE_C',
            ),
            1 => 
            array (
              'name' => 'previous_close_date_changed_c',
              'label' => 'LBL_PREVIOUS_CLOSE_DATE_CHANGED_C',
            ),
          ),
        ),
        'lbl_editview_panel7' => 
        array (
          0 => 
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
          1 => 
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
          2 => 
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
        'lbl_editview_panel10' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'product_interest_c',
              'label' => 'LBL_PRODUCT_INTEREST_C',
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
              'name' => 'description',
              'nl2br' => true,
            ),
            1 => 
            array (
              'name' => 'lead_rating_c',
              'label' => 'LBL_LEAD_RATING_C',
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
              'name' => 'slx_opportunity_id_c',
              'label' => 'LBL_SLX_OPPORTUNITY_ID_C',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'modified_by_name',
              'label' => 'LBL_MODIFIED_NAME',
            ),
            1 => 
            array (
              'name' => 'slx_create_date_c',
              'label' => 'LBL_SLX_CREATE_DATE_C',
            ),
          ),
          2 => 
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
      ),
    ),
  ),
);