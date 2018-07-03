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
            'name' => 'recordtypeid_c',
            'label' => 'LBL_RECORDTYPEID_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'tip_source_c',
            'label' => 'LBL_TIP_SOURCE_C',
          ),
          1 => 'sales_stage',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'partner_c',
            'label' => 'LBL_PARTNER_C',
          ),
          1 => 'probability',
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
            'name' => 'confidence_level_c',
            'label' => 'LBL_CONFIDENCE_LEVEL_C',
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
            'name' => 'encoder_c',
            'label' => 'LBL_ENCODER_C',
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
            'name' => 'encoder_description_c',
            'label' => 'LBL_ENCODER_DESCRIPTION_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'crm_c',
            'label' => 'LBL_CRM_C',
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
            'name' => 'modlink_c',
            'label' => 'LBL_MODLINK_C',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'notifi_subscription_amount_c',
            'label' => 'LBL_NOTIFI_SUBSCRIPTION_AMOUNT_C',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'notifi_c',
            'label' => 'LBL_NOTIFI_C',
          ),
          1 => '',
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'statdx_c',
            'label' => 'LBL_STATDX_C',
          ),
          1 => '',
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'extended_term_adoption_services_value_c',
            'label' => 'LBL_EXTENDED_TERM_ADOPTION_SERVICES_VALUE_C',
          ),
          1 => '',
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'non_standard_commissions_release_c',
            'label' => 'LBL_NON_STANDARD_COMMISSIONS_RELEASE_C',
          ),
          1 => '',
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'gp_contract_order_c',
            'label' => 'LBL_GP_CONTRACT_ORDER_C',
          ),
          1 => '',
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'commissions_notes_c',
            'label' => 'LBL_COMMISSIONS_NOTES_C',
          ),
          1 => '',
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value_c',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE_C',
          ),
          1 => '',
        ),
        22 => 
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
            'name' => 'latest_update_date_c',
            'label' => 'LBL_LATEST_UPDATE_DATE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'latest_update_c',
            'label' => 'LBL_LATEST_UPDATE_C',
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
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
            'name' => 'last_modified_by_owner_c',
            'label' => 'LBL_LAST_MODIFIED_BY_OWNER_C',
          ),
          1 => 
          array (
            'name' => 'slx_create_date_c',
            'label' => 'LBL_SLX_CREATE_DATE_C',
          ),
        ),
      ),
    ),
  ),
);
?>
