<?php
$module_name = 'g2_Account_Plan';
$viewdefs [$module_name] = 
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
      'useTabs' => false,
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
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL10' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL11' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL12' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'g2_account_plan_accounts_name',
            'label' => 'LBL_G2_ACCOUNT_PLAN_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'zba_sss_c',
            'label' => 'LBL_ZBA_SSS_C',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'state_c',
            'label' => 'LBL_STATE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ehr_c',
            'label' => 'LBL_EHR_C',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sales_objective_c',
            'label' => 'LBL_SALES_OBJECTIVE_C',
          ),
          1 => 
          array (
            'name' => 'cawyt_c',
            'label' => 'LBL_CAWYT_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferred_buying_model_c',
            'label' => 'LBL_PREFERRED_BUYING_MODEL_C',
          ),
          1 => 
          array (
            'name' => 'financial_objective_c',
            'label' => 'LBL_FINANCIAL_OBJECTIVE_C',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_targets_c',
            'label' => 'LBL_PRODUCT_TARGETS_C',
          ),
          1 => 
          array (
            'name' => 'bundle_target_c',
            'label' => 'LBL_BUNDLE_TARGET_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'adequacy_of_current_position_c',
            'label' => 'LBL_ADEQUACY_OF_CURRENT_POSITION_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'strengths_c',
            'label' => 'LBL_STRENGTHS_C',
          ),
          1 => 
          array (
            'name' => 'red_flags_c',
            'label' => 'LBL_RED_FLAGS_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'current_action_plan_c',
            'label' => 'LBL_CURRENT_ACTION_PLAN_C',
          ),
          1 => 
          array (
            'name' => 'action_plan_update_date_c',
            'label' => 'LBL_ACTION_PLAN_UPDATE_DATE_C',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'are_they_a_good_fit_mmodal_c',
            'label' => 'LBL_ARE_THEY_A_GOOD_FIT_MMODAL_C',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'competition_c',
            'label' => 'LBL_COMPETITION_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nuance_disposition_c',
            'label' => 'LBL_NUANCE_DISPOSITION_C',
          ),
          1 => 
          array (
            'name' => 'committed_to_nuance_c',
            'label' => 'LBL_COMMITTED_TO_NUANCE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nuance_enterprise_license_c',
            'label' => 'LBL_NUANCE_ENTERPRISE_LICENSE_C',
          ),
          1 => 
          array (
            'name' => 'nuance_term_or_perpetual_c',
            'label' => 'LBL_NUANCE_TERM_OR_PERPETUAL_C',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'organizational_win_result_c',
            'label' => 'LBL_ORGANIZATIONAL_WIN_RESULT_C',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bed_count_c',
            'label' => 'LBL_BED_COUNT_C',
          ),
          1 => 
          array (
            'name' => 'tos_saturation_c',
            'label' => 'LBL_TOS_SATURATION_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'financial_outlook_c',
            'label' => 'LBL_FINANCIAL_OUTLOOK_C',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehr_status_c',
            'label' => 'LBL_EHR_STATUS_C',
          ),
          1 => 
          array (
            'name' => 'ehr_adoption_c',
            'label' => 'LBL_EHR_ADOPTION_C',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_tos_opp_size_c',
            'label' => 'LBL_TOTAL_TOS_OPP_SIZE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'est_annual_mm_tos_rev_c',
            'label' => 'LBL_EST_ANNUAL_MM_TOS_REV_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primary_mtso_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_MTSO_C',
          ),
          1 => 
          array (
            'name' => 'mtso_1_cost_c',
            'label' => 'LBL_MTSO_1_COST_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mtso_2_c',
            'studio' => 'visible',
            'label' => 'LBL_MTSO_2_C',
          ),
          1 => 
          array (
            'name' => 'mtso_2_est_cost_c',
            'label' => 'LBL_MTSO_2_EST_COST_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mtso_3_c',
            'studio' => 'visible',
            'label' => 'LBL_MTSO_3_C',
          ),
          1 => 
          array (
            'name' => 'mtso_3_est_cost_c',
            'label' => 'LBL_MTSO_3_EST_COST_C',
          ),
        ),
      ),
      'lbl_editview_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fes_c',
            'label' => 'LBL_FES_C',
          ),
          1 => 
          array (
            'name' => 'fes_adoption_c',
            'label' => 'LBL_FES_ADOPTION_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fes_satisfaction_c',
            'label' => 'LBL_FES_SATISFACTION_C',
          ),
          1 => 
          array (
            'name' => 'fes_sponsor_c',
            'studio' => 'visible',
            'label' => 'LBL_FES_SPONSOR_C',
          ),
        ),
      ),
      'lbl_editview_panel11' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cdi_strategy_c',
            'label' => 'LBL_CDI_STRATEGY_C',
          ),
          1 => 
          array (
            'name' => 'cdi_sponsor_c',
            'studio' => 'visible',
            'label' => 'LBL_CDI_SPONSOR_C',
          ),
        ),
      ),
      'lbl_editview_panel12' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'manager_notes_c',
            'label' => 'LBL_MANAGER_NOTES_C',
          ),
          1 => 
          array (
            'name' => 'mgr_notes_update_date_c',
            'label' => 'LBL_MGR_NOTES_UPDATE_DATE_C',
          ),
        ),
      ),
    ),
  ),
);
?>
