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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
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
        'LBL_EDITVIEW_PANEL14' => 
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
        'LBL_EDITVIEW_PANEL13' => 
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
            'name' => 'a3_classification_c',
            'label' => 'LBL_A3_CLASSIFICATION_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION_C',
          ),
        ),
        3 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'LBL_RECORDTYPEID_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_c',
            'label' => 'LBL_TOTAL_AMOUNT_C',
          ),
          1 => 'sales_stage',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT_C',
          ),
          1 => 'probability',
        ),
        6 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'confidence_level_c',
            'label' => 'LBL_CONFIDENCE_LEVEL_C',
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
            'name' => 'rating_c',
            'label' => 'LBL_RATING_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'rfp_required_c',
            'label' => 'LBL_RFP_REQUIRED_C',
          ),
          1 => 
          array (
            'name' => 'forecast_c',
            'label' => 'LBL_FORECAST_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'rfp_due_date_c',
            'label' => 'LBL_RFP_DUE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'vendor_of_choice_c',
            'label' => 'LBL_VENDOR_OF_CHOICE_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'new_ae1_name_c',
            'studio' => 'visible',
            'label' => 'LBL_NEW_AE1_NAME_C',
          ),
          1 => 
          array (
            'name' => 'must_win_c',
            'label' => 'LBL_MUST_WIN_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'new_ae2_name_c',
            'studio' => 'visible',
            'label' => 'LBL_NEW_AE2_NAME_C',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'count_c',
            'label' => 'LBL_COUNT_C',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'number_of_ftes_c',
            'label' => 'LBL_NUMBER_OF_FTES_C',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'coding_start_date_c',
            'label' => 'LBL_CODING_START_DATE_C',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'coding_end_date_c',
            'label' => 'LBL_CODING_END_DATE_C',
          ),
          1 => '',
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'coding_specialty_c',
            'label' => 'LBL_CODING_SPECIALTY_C',
          ),
          1 => '',
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'modlink_c',
            'label' => 'LBL_MODLINK_C',
          ),
          1 => 
          array (
            'name' => 'extended_term_adoption_services_value_c',
            'label' => 'LBL_EXTENDED_TERM_ADOPTION_SERVICES_VALUE_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'notifi_subscription_amount_c',
            'label' => 'LBL_NOTIFI_SUBSCRIPTION_AMOUNT_C',
          ),
          1 => 
          array (
            'name' => 'non_standard_commissions_release_c',
            'label' => 'LBL_NON_STANDARD_COMMISSIONS_RELEASE_C',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'notifi_c',
            'label' => 'LBL_NOTIFI_C',
          ),
          1 => 
          array (
            'name' => 'gp_contract_order_c',
            'label' => 'LBL_GP_CONTRACT_ORDER_C',
          ),
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'statdx_c',
            'label' => 'LBL_STATDX_C',
          ),
          1 => 
          array (
            'name' => 'commissions_notes_c',
            'label' => 'LBL_COMMISSIONS_NOTES_C',
          ),
        ),
        21 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'total_contract_value_c',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE_C',
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
          1 => '',
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
            'name' => 'business_type_c',
            'label' => 'LBL_BUSINESS_TYPE_C',
          ),
        ),
        2 => 
        array (
          0 => 
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
        3 => 
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
            'name' => 'g1_group_queue_opportunities_name',
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
            'name' => 'number_of_licenses_c',
            'label' => 'LBL_NUMBER_OF_LICENSES_C',
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
            'name' => 'gpo_name_c',
            'studio' => 'visible',
            'label' => 'LBL_GPO_NAME_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'license_cost_c',
            'label' => 'LBL_LICENSE_COST_C',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'annual_mq_services_estimate_c',
            'label' => 'LBL_ANNUAL_MQ_SERVICES_ESTIMATE_C',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'other_cost_c',
            'label' => 'LBL_OTHER_COST_C',
          ),
          1 => '',
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
      'lbl_editview_panel14' => 
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
      'lbl_editview_panel13' => 
      array (
        0 => 
        array (
          0 => 'description',
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
