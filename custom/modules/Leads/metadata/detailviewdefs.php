<?php
$viewdefs ['Leads'] = 
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
          3 => 
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 'FIND_DUPLICATES',
          5 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
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
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 'title',
          1 => 
          array (
            'name' => 'lead_rating_c',
            'label' => 'LBL_LEAD_RATING_C',
          ),
        ),
        3 => 
        array (
          0 => 'department',
          1 => 'phone_fax',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'company',
            'label' => 'LBL_COMPANY',
          ),
          1 => 'phone_work',
        ),
        5 => 
        array (
          0 => 'website',
          1 => 
          array (
            'name' => 'do_not_call',
            'comment' => 'An indicator of whether contact can be called',
            'label' => 'LBL_DO_NOT_CALL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'primary_campaign_c',
            'label' => 'LBL_PRIMARY_CAMPAIGN_C',
          ),
          1 => 'email1',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'directions_c',
            'label' => 'LBL_DIRECTIONS_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'swipe_date_c',
            'label' => 'LBL_SWIPE_DATE_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'preferred_follow_up_c',
            'label' => 'LBL_PREFERRED_FOLLOW_UP_C',
          ),
          1 => 
          array (
            'name' => 'sem_ls_c',
            'label' => 'LBL_SEM_LS_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'bucket_c',
            'label' => 'LBL_BUCKET_C',
          ),
          1 => 
          array (
            'name' => 'eloqua_lead_rating_c',
            'label' => 'LBL_ELOQUA_LEAD_RATING_C',
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
            'name' => 'vip_account_c',
            'label' => 'LBL_VIP_ACCOUNT_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'gpo_c',
            'label' => 'LBL_GPO_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'zba_ss_c',
            'label' => 'LBL_ZBA_SS_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'facility_type',
            'studio' => 'visible',
            'label' => 'LBL_FACILITY_TYPE',
          ),
        ),
        15 => 
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
        16 => 
        array (
          0 => 
          array (
            'name' => 'g1_group_queue_leads_name',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'addwords_c',
            'label' => 'LBL_ADDWORDS',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'number_of_doctors_c',
            'label' => 'LBL_NUMBER_OF_DOCTORS_C',
          ),
          1 => 
          array (
            'name' => 'timeframe_for_purchase_c',
            'label' => 'LBL_TIMEFRAME_FOR_PURCHASE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number_of_employees_c',
            'label' => 'LBL_NUMBER_OF_EMPLOYEES',
          ),
          1 => 
          array (
            'name' => 'target_decision_date_c',
            'label' => 'LBL_TARGET_DECISION_DATE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'current_ehr_c',
            'label' => 'LBL_CURRENT_EHR_C',
          ),
          1 => 
          array (
            'name' => 'product_interest_c',
            'label' => 'LBL_PRODUCT_INTEREST_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currently_using_speech_rec_c',
            'label' => 'LBL_CURRENTLY_USING_SPEECH_REC_C',
          ),
          1 => 
          array (
            'name' => 'annual_revenue_c',
            'label' => 'LBL_ANNUAL_REVENUE_C',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_requested_c',
            'label' => 'LBL_DATE_REQUESTED_C',
          ),
          1 => 
          array (
            'name' => 'time_requested_c',
            'label' => 'LBL_TIME_REQUESTED_C',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'partnership_strategy_c',
            'label' => 'LBL_PARTNERSHIP_STRATEGY_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primary_business_focus_c',
            'label' => 'LBL_PRIMARY_BUSINESS_FOCUS_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'number_of_healthcare_customers_c',
            'label' => 'LBL_NUMBER_OF_HEALTHCARE_CUSTOMERS_C',
          ),
          1 => 
          array (
            'name' => 'geographic_region_served_c',
            'label' => 'LBL_GEOGRAPHIC_REGION_SERVED_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'years_in_business_c',
            'label' => 'LBL_YEARS_IN_BUSINESS_C',
          ),
          1 => 
          array (
            'name' => 'current_client_opps_c',
            'label' => 'LBL_CURRENT_CLIENT_OPPS_C',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
