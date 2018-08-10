<?php
$viewdefs ['Opportunities'] = 
array (
  'QuickCreate' => 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
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
        'LBL_EDITVIEW_PANEL11' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL10' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'short_id_c',
            'label' => 'LBL_SHORT_ID_C',
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
            'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_ACCOUNTS_TITLE',
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
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT_C',
          ),
          1 => 
          array (
            'name' => 'new_am_region_c',
            'label' => 'LBL_NEW_AM_REGION_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
          1 => 
          array (
            'name' => 'sales_leadership_c',
            'label' => 'LBL_SALES_LEADERSHIP_C',
          ),
        ),
        6 => 
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
        7 => 
        array (
          0 => 
          array (
            'name' => 'partner_c',
            'label' => 'LBL_PARTNER_C',
          ),
          1 => 'sales_stage',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'reseller_c',
            'label' => 'LBL_RESELLER_C',
          ),
          1 => 'probability',
        ),
        9 => 
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
        10 => 
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
        11 => 
        array (
          0 => 
          array (
            'name' => 'preferred_follow_up_c',
            'label' => 'LBL_PREFERRED_FOLLOW_UP_C',
          ),
          1 => 
          array (
            'name' => 'forecast_c',
            'label' => 'LBL_FORECAST_C',
          ),
        ),
        12 => 
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
        13 => 
        array (
          0 => 
          array (
            'name' => 'CIA_Fee_c',
            'label' => 'LBL_CIA_FEE_C',
          ),
          1 => 
          array (
            'name' => 'must_win_c',
            'label' => 'LBL_MUST_WIN_C',
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
            'name' => 'adoption_services_c',
            'label' => 'LBL_ADOPTION_SERVICES_C',
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
            'name' => 'hwsw_cost_c',
            'label' => 'LBL_HWSW_COST_C',
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
            'name' => 'emr2_c',
            'label' => 'LBL_EMR2_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'annual_maintenance_cost_c',
            'label' => 'LBL_ANNUAL_MAINTENANCE_COST_C',
          ),
          1 => 
          array (
            'name' => 'encoder_c',
            'label' => 'LBL_ENCODER_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'eb_tos_adjustment_c',
            'label' => 'LBL_EB_TOS_ADJUSTMENT_C',
          ),
          1 => 
          array (
            'name' => 'encoder_description_c',
            'label' => 'LBL_ENCODER_DESCRIPTION_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pricing_notes_c',
            'label' => 'LBL_PRICING_NOTES_C',
          ),
          1 => 
          array (
            'name' => 'number_of_ftes_c',
            'label' => 'LBL_NUMBER_OF_FTES_C',
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
            'name' => 'coding_start_date_c',
            'label' => 'LBL_CODING_START_DATE_C',
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
            'name' => 'coding_end_date_c',
            'label' => 'LBL_CODING_END_DATE_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'gpo_name_c',
            'studio' => 'visible',
            'label' => 'LBL_GPO_NAME_C',
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
            'name' => 'rfp_preparer_c',
            'label' => 'LBL_RFP_PREPARER_C',
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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
);
?>
