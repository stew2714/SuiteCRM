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
        'LBL_EDITVIEW_PANEL4' => 
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
      ),
      'syncDetailEditViews' => false,
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
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_opportunities_3_name',
            'label' => 'LBL_ACCOUNTS_OPPORTUNITIES_3_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'LBL_RECORDTYPEID_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
          1 => 'sales_stage',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT_C',
          ),
          1 => 'probability',
        ),
        4 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'forecasting_category_c',
            'label' => 'LBL_FORECASTING_CATEGORY_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'source_c',
            'label' => 'LBL_SOURCE_C',
          ),
          1 => 
          array (
            'name' => 'probability_of_close_c',
            'label' => 'LBL_PROBABILITY_OF_CLOSE_C',
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
            'name' => 'demo_date_c',
            'label' => 'LBL_DEMO_DATE_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'number_of_ftes_c',
            'label' => 'LBL_NUMBER_OF_FTES_C',
          ),
          1 => 
          array (
            'name' => 'new_am_region_c',
            'label' => 'LBL_NEW_AM_REGION_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'new_ae1_name_c',
            'studio' => 'visible',
            'label' => 'LBL_NEW_AE1_NAME_C',
          ),
          1 => 
          array (
            'name' => 'new_ae2_name_c',
            'studio' => 'visible',
            'label' => 'LBL_NEW_AE2_NAME_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'notifi_c',
            'label' => 'LBL_NOTIFI_C',
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
            'name' => 'coding_start_date_c',
            'label' => 'LBL_CODING_START_DATE_C',
          ),
          1 => 
          array (
            'name' => 'coding_end_date_c',
            'label' => 'LBL_CODING_END_DATE_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'coding_specialty_c',
            'label' => 'LBL_CODING_SPECIALTY_C',
          ),
          1 => 
          array (
            'name' => 'modlink_c',
            'label' => 'LBL_MODLINK_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'extended_term_adoption_services_value_c',
            'label' => 'LBL_EXTENDED_TERM_ADOPTION_SERVICES_VALUE_C',
          ),
          1 => 
          array (
            'name' => 'gp_contract_order_c',
            'label' => 'LBL_GP_CONTRACT_ORDER_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'non_standard_commissions_release_c',
            'label' => 'LBL_NON_STANDARD_COMMISSIONS_RELEASE_C',
          ),
          1 => 
          array (
            'name' => 'commissions_notes_c',
            'label' => 'LBL_COMMISSIONS_NOTES_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'statdx_c',
            'label' => 'LBL_STATDX_C',
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
            'name' => 'implementation_cost_c',
            'label' => 'LBL_IMPLEMENTATION_COST_C',
          ),
          1 => 
          array (
            'name' => 'price_quoted_c',
            'label' => 'LBL_PRICE_QUOTED_C',
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
            'name' => 'discounts_offered_c',
            'label' => 'LBL_DISCOUNTS_OFFERED_C',
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
            'name' => 'interface_required_c',
            'label' => 'LBL_INTERFACE_REQUIRED_C',
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
            'name' => 'interface_vendor_c',
            'label' => 'LBL_INTERFACE_VENDOR_C',
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
            'name' => 'type_of_interface_c',
            'label' => 'LBL_TYPE_OF_INTERFACE_C',
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
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'register_date_c',
            'label' => 'LBL_REGISTER_DATE_C',
          ),
          1 => 
          array (
            'name' => 'mq_project_id_c',
            'label' => 'LBL_MQ_PROJECT_ID_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contract_date_c',
            'label' => 'LBL_CONTRACT_DATE_C',
          ),
          1 => 
          array (
            'name' => 'co_validation_c',
            'label' => 'LBL_CO_VALIDATION_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'go_live_date_c',
            'label' => 'LBL_GO_LIVE_DATE_C',
          ),
          1 => '',
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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'is_source_c',
            'label' => 'LBL_IS_SOURCE_C',
          ),
        ),
        1 => 
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
