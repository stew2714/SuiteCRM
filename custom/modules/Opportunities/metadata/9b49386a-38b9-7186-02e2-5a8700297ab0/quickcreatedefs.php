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
        'LBL_EDITVIEW_PANEL18' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL20' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL21' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL19' => 
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
            'name' => 'rfp_required_c',
            'label' => 'LBL_RFP_REQUIRED_C',
          ),
          1 => 'probability',
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
            'name' => 'confidence_level_c',
            'label' => 'LBL_CONFIDENCE_LEVEL_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'preferred_follow_up_c',
            'label' => 'LBL_PREFERRED_FOLLOW_UP_C',
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
            'name' => 'crm_c',
            'label' => 'LBL_CRM_C',
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
      'lbl_editview_panel18' => 
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
      'lbl_editview_panel20' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'pricedown_risk_c',
            'label' => 'LBL_PRICEDOWN_RISK_C',
          ),
          1 => 
          array (
            'name' => 'projected_pricedown_c',
            'label' => 'LBL_PROJECTED_PRICEDOWN_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'change_in_mix_c',
            'label' => 'LBL_CHANGE_IN_MIX_C',
          ),
          1 => 
          array (
            'name' => 'projected_renewal_date_c',
            'label' => 'LBL_PROJECTED_RENEWAL_DATE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'before_dom_trans_lr_c',
            'label' => 'LBL_BEFORE_DOM_TRANS_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_dom_trans_lr_c',
            'label' => 'LBL_AFTER_DOM_TRANS_LR_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'before_dom_edit_lr_c',
            'label' => 'LBL_BEFORE_DOM_EDIT_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_dom_edit_lr_c',
            'label' => 'LBL_AFTER_DOM_EDIT_LR_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'before_global_trans_lr_c',
            'label' => 'LBL_BEFORE_GLOBAL_TRANS_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_global_trans_lr_c',
            'label' => 'LBL_AFTER_GLOBAL_TRANS_LR_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'before_global_edit_lr_c',
            'label' => 'LBL_BEFORE_GLOBAL_EDIT_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_global_edit_lr_c',
            'label' => 'LBL_AFTER_GLOBAL_EDIT_LR_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'before_blended_lr_c',
            'label' => 'LBL_BEFORE_BLENDED_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_blended_lr_c',
            'label' => 'LBL_AFTER_BLENDED_LR_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'before_asp_lr_c',
            'label' => 'LBL_BEFORE_ASP_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_asp_lr_c',
            'label' => 'LBL_AFTER_ASP_LR_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'before_asp_edit_lr_c',
            'label' => 'LBL_BEFORE_ASP_EDIT_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_asp_edit_lr_c',
            'label' => 'LBL_AFTER_ASP_EDIT_LR_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'before_rad_trans_lr_c',
            'label' => 'LBL_BEFORE_RAD_TRANS_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_rad_trans_lr_c',
            'label' => 'LBL_AFTER_RAD_TRANS_LR_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'before_rad_edit_lr_c',
            'label' => 'LBL_BEFORE_RAD_EDIT_LR_C',
          ),
          1 => 
          array (
            'name' => 'after_rad_edit_lr_c',
            'label' => 'LBL_AFTER_RAD_EDIT_LR_C',
          ),
        ),
      ),
      'lbl_editview_panel21' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'dom_trans_volume_c',
            'label' => 'LBL_DOM_TRANS_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_dom_trans_volume_c',
            'label' => 'LBL_AFTER_DOM_TRANS_VOLUME_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dom_edit_volume_c',
            'label' => 'LBL_DOM_EDIT_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_dom_edit_volume_c',
            'label' => 'LBL_AFTER_DOM_EDIT_VOLUME_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'global_trans_volume_c',
            'label' => 'LBL_GLOBAL_TRANS_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_global_trans_volume_c',
            'label' => 'LBL_AFTER_GLOBAL_TRANS_VOLUME_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'global_edit_volume_c',
            'label' => 'LBL_GLOBAL_EDIT_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_global_edit_volume_c',
            'label' => 'LBL_AFTER_GLOBAL_EDIT_VOLUME_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'blended_volume_c',
            'label' => 'LBL_BLENDED_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_blended_volume_c',
            'label' => 'LBL_AFTER_BLENDED_VOLUME_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'asp_volume_c',
            'label' => 'LBL_ASP_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_asp_volume_c',
            'label' => 'LBL_AFTER_ASP_VOLUME_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'before_asp_edit_volume_c',
            'label' => 'LBL_BEFORE_ASP_EDIT_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_asp_edit_volume_c',
            'label' => 'LBL_AFTER_ASP_EDIT_VOLUME_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'before_rad_trans_volume_c',
            'label' => 'LBL_BEFORE_RAD_TRANS_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_rad_trans_volume_c',
            'label' => 'LBL_AFTER_RAD_TRANS_VOLUME_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'before_rad_edit_volume_c',
            'label' => 'LBL_BEFORE_RAD_EDIT_VOLUME_C',
          ),
          1 => 
          array (
            'name' => 'after_rad_edit_volume_c',
            'label' => 'LBL_AFTER_RAD_EDIT_VOLUME_C',
          ),
        ),
      ),
      'lbl_editview_panel19' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'term_length_mm_c',
            'label' => 'LBL_TERM_LENGTH_MM_C',
          ),
          1 => 
          array (
            'name' => 'exclusivity_c',
            'label' => 'LBL_EXCLUSIVITY_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'global_use_probability_percent_c',
            'label' => 'LBL_GLOBAL_USE_PROBABILITY_PERCENT_C',
          ),
          1 => 
          array (
            'name' => 'volume_commitment_c',
            'label' => 'LBL_VOLUME_COMMITMENT_C',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'no_out_for_convenience_c',
            'label' => 'LBL_NO_OUT_FOR_CONVENIENCE_C',
          ),
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
