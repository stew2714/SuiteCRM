<?php
$module_name = 'AOS_Contracts';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '{if $ACTIVATED === false}<input title="Edit" accesskey="i" class="button primary" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.return_id.value=\'{$recordID}\'; _form.action.value=\'EditView\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="Edit">{/if}',
          ),
          1 => 
          array (
            'customCode' => '<input title="Duplicate" accesskey="u" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.isDuplicate.value=true; _form.action.value=\'EditView\'; _form.return_id.value=\'{$recordID}\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="Duplicate" id="duplicate_button">',
          ),
          2 => 
          array (
            'customCode' => '<input title="Delete" accesskey="d" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'ListView\'; _form.action.value=\'Delete\'; if(confirm(\'Are you sure you want to delete this record?\')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="Delete" id="delete_button">',
          ),
          3 => 
          array (
            'customCode' => '<input title="Find Duplicates" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.return_id.value=\'{$recordID}\'; _form.action.value=\'Step1\'; _form.module.value=\'MergeRecords\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="Find Duplicates" id="merge_duplicate_button">',
          ),
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
          ),
          6 => 
          array (
            'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="submitRequest" value="{$MOD.LBL_BUTTON_SUBMIT_REQUEST}">{/if}',
          ),
          7 => 
          array (
            'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="cancelRequest" value="{$MOD.LBL_BUTTON_CANCEL_REQUEST}">{/if}',
          ),
          8 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST_LEGAL}">{/if}',
          ),
          9 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="returnToRequester" value="{$MOD.LBL_BUTTON_RETURN_TO_REQUESTER}">{/if}',
          ),
          10 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="redlineReview" value="{$MOD.LBL_BUTTON_MMODAL_RED_LINE_REVIEW}">{/if}',
          ),
          11 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="sendForSignatures" value="{$MOD.LBL_BUTTON_SEND_FOR_SIGNATURES}">{/if}',
          ),
          12 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="sendForReview" value="{$MOD.LBL_BUTTON_SEND_FOR_REVIEW}">{/if}',
          ),
          13 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === true && $bean->aclAccess("edit") && $OLD_AMENDMENT === false}<input title="{$MOD.LBL_BUTTON_AMEND}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.isDuplicate.value=true; _form.isAmendment.value=true; _form.action.value=\'EditView\'; _form.return_id.value=\'{$recordID}\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Amend" value="{$MOD.LBL_BUTTON_AMEND}" id="amend_button">
                               {elseif $OLD_AMENDMENT === true}<input title="{$MOD.LBL_BUTTON_AMEND}" class="button" onclick="alert(\'{$MOD.LBL_OLD_AMENDMENT_WARNING}\')" type="button" name="Amend" value="{$MOD.LBL_BUTTON_AMEND}" id="amend_button">{/if} ',
          ),
          14 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="sendToCommOps" value="{$MOD.LBL_BUTTON_SEND_TO_COMM_OPS}">{/if}',
          ),
          15 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="acceptRequestCommsOps" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST_COMMS}">{/if}',
          ),
          16 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="sendLegal" value="{$MOD.LBL_BUTTON_SEND_TO_LEGAL_QUEUE}">{/if}',
          ),
          17 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="activateRequest" value="{$MOD.LBL_BUTTON_ACTIVATE_REQUEST}">{/if}',
          ),
        ),
        'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
        'javascript' => '{$REQUIREDFIELDS}',
      ),
      'maxColumns' => '2',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/AOS_Contracts/js/DetailView.js',
        ),
      ),
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
      'syncDetailEditViews' => true,
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
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'LBL_RECORDTYPEID_C',
          ),
          1 => 
          array (
            'name' => 'contract_account',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'legal_entity_c',
            'label' => 'LBL_LEGAL_ENTITY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_agreement_category_c',
            'label' => 'LBL_APTTUS_AGREEMENT_CATEGORY_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'agreements_number_and_amendment_c',
            'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
          ),
          1 => 
          array (
            'name' => 'type_of_request_c',
            'label' => 'LBL_TYPE_OF_REQUEST_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'legacy_agreement_number_c',
            'label' => 'LBL_LEGACY_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_category_c',
            'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'client_agreement_number_c',
            'label' => 'LBL_CLIENT_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_c',
            'label' => 'LBL_APTTUS_STATUS_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'type_of_product_services_c',
            'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'apttus_parent_agreement_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_PARENT_AGREEMENT_NAME_C',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'amendment_number_c',
            'label' => 'LBL_AMENDMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'ownership_group_c',
            'label' => 'LBL_OWNERSHIP_GROUP_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE',
          ),
          1 => 
          array (
            'name' => 'awaiting_information_detail_c',
            'label' => 'LBL_AWAITING_INFORMATION_DETAIL_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'gpo_affiliation_c',
            'label' => 'LBL_GPO_AFFILIATION_C',
          ),
          1 => 
          array (
            'name' => 'cancellation_reason_c',
            'label' => 'LBL_CANCELLATION_REASON_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'idn_affiliation_c',
            'label' => 'LBL_IDN_AFFILIATION_C',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_notice_issue_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_NOTICE_ISSUE_DATE_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'federal_agency_c',
            'label' => 'LBL_FEDERAL_AGENCY_C',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_DATE_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'general_terms_and_conditions_c',
            'label' => 'LBL_GENERAL_TERMS_AND_CONDITIONS_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'apttus_special_terms_c',
            'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 't_c_version_c',
            'label' => 'LBL_T_C_VERSION_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'probability_c',
            'label' => 'LBL_PROBABILITY_C',
          ),
          1 => 
          array (
            'name' => 'strategic_deal_c',
            'label' => 'LBL_STRATEGIC_DEAL_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'requires_po_c',
            'label' => 'LBL_REQUIRES_PO_C',
          ),
          1 => 
          array (
            'name' => 'strategic_deal_description_c',
            'label' => 'LBL_STRATEGIC_DEAL_DESCRIPTION_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'agreement_summary_c',
            'label' => 'LBL_AGREEMENT_SUMMARY_C',
          ),
          1 => '',
        ),
        18 => 
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
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'apttus_contract_duration_days_c',
            'label' => 'LBL_APTTUS_CONTRACT_DURATION_DAYS_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'end_date',
            'label' => 'LBL_END_DATE',
          ),
          1 => 
          array (
            'name' => 'apttus_contracted_days_c',
            'label' => 'LBL_APTTUS_CONTRACTED_DAYS_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apttus_amendment_effective_date_c',
            'label' => 'LBL_APTTUS_AMENDMENT_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_remaining_contracted_days_c',
            'label' => 'LBL_APTTUS_REMAINING_CONTRACTED_DAYS_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ownership_group_expiration_notice_c',
            'label' => 'LBL_OWNERSHIP_GROUP_EXPIRATION_NOTICE_C',
          ),
          1 => 
          array (
            'name' => 'purchase_order_language_c',
            'label' => 'LBL_PURCHASE_ORDER_LANGUAGE_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'payment_terms_c',
            'label' => 'LBL_PAYMENT_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'interest_on_late_payments_c',
            'label' => 'LBL_INTEREST_ON_LATE_PAYMENTS_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'payment_terms_start_from_c',
            'label' => 'LBL_PAYMENT_TERMS_START_FROM_C',
          ),
          1 => 
          array (
            'name' => 'late_fees_c',
            'label' => 'LBL_LATE_FEES_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'payment_type_c',
            'label' => 'LBL_PAYMENT_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'suspend_services_c',
            'label' => 'LBL_SUSPEND_SERVICES_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'tax_exempt_c',
            'label' => 'LBL_TAX_EXEMPT_C',
          ),
          1 => 
          array (
            'name' => 'suspend_services_notice_period_c',
            'label' => 'LBL_SUSPEND_SERVICES_NOTICE_PERIOD_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'client_responsibl_for_collection_cost_c',
            'label' => 'LBL_CLIENT_RESPONSIBL_FOR_COLLECTION_COST_C',
          ),
          1 => 
          array (
            'name' => 'termination_for_default_c',
            'label' => 'LBL_TERMINATION_FOR_DEFAULT_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'right_to_dispute_c',
            'label' => 'LBL_RIGHT_TO_DISPUTE_C',
          ),
          1 => 
          array (
            'name' => 'mutual_default_c',
            'label' => 'LBL_MUTUAL_DEFAULT_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'dispute_notice_period_c',
            'label' => 'LBL_DISPUTE_NOTICE_PERIOD_C',
          ),
          1 => 
          array (
            'name' => 'material_default_cure_period_c',
            'label' => 'LBL_MATERIAL_DEFAULT_CURE_PERIOD_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'right_to_dispute_waiver_c',
            'label' => 'LBL_RIGHT_TO_DISPUTE_WAIVER_C',
          ),
          1 => 
          array (
            'name' => 'confidentiality_default_cure_period_c',
            'label' => 'LBL_CONFIDENTIALITY_DEFAULT_CURE_PERIOD_C',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'confidentiality_language_c',
            'label' => 'LBL_CONFIDENTIALITY_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'limitation_of_liability_c',
            'label' => 'LBL_LIMITATION_OF_LIABILITY_C',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'intellectual_property_general_informatio_c',
            'label' => 'LBL_INTELLECTUAL_PROPERTY_GENERAL_INFORMATIO_C',
          ),
          1 => 
          array (
            'name' => 'limited_liability_cap_c',
            'label' => 'LBL_LIMITED_LIABILITY_CAP_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'passive_adaptation_c',
            'label' => 'LBL_PASSIVE_ADAPTATION_C',
          ),
          1 => 
          array (
            'name' => 'governing_law_state_c',
            'label' => 'LBL_GOVERNING_LAW_STATE_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'enhanced_data_use_rights_language_c',
            'label' => 'LBL_ENHANCED_DATA_USE_RIGHTS_LANGUAGE_C',
          ),
          1 => 
          array (
            'name' => 'arbitration_c',
            'label' => 'LBL_ARBITRATION_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'legal_notices_c',
            'label' => 'LBL_LEGAL_NOTICES_C',
          ),
          1 => 
          array (
            'name' => 'favored_nation_language_c',
            'label' => 'LBL_FAVORED_NATION_LANGUAGE_C',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'passive_adaptation_type_c',
            'label' => 'LBL_PASSIVE_ADAPTATION_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'service_or_product_warranty_c',
            'label' => 'LBL_SERVICE_OR_PRODUCT_WARRANTY_C',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'master_general_notes_c',
            'label' => 'LBL_MASTER_GENERAL_NOTES_C',
          ),
          1 => 
          array (
            'name' => 'assignment_permitted_c',
            'label' => 'LBL_ASSIGNMENT_PERMITTED_C',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'attachment_to_master_c',
            'label' => 'LBL_ATTACHMENT_TO_MASTER_C',
          ),
          1 => 
          array (
            'name' => 'baa_attachment_number_c',
            'label' => 'LBL_BAA_ATTACHMENT_NUMBER_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'baa_template_source_c',
            'label' => 'LBL_BAA_TEMPLATE_SOURCE_C',
          ),
          1 => 
          array (
            'name' => 'baa_effective_date_c',
            'label' => 'LBL_BAA_EFFECTIVE_DATE_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'request_date_c',
            'label' => 'LBL_REQUEST_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_executed_copy_mailed_out_date_c',
            'label' => 'LBL_APTTUS_EXECUTED_COPY_MAILED_OUT_DATE_C',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'courior_tracking_number_c',
            'label' => 'LBL_COURIOR_TRACKING_NUMBER_C',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'apttus_activated_date_c',
            'label' => 'LBL_APTTUS_ACTIVATED_DATE_C',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'apttus_activated_by_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_ACTIVATED_BY_NAME_C',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_by_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_BY_NAME_C',
          ),
          1 => 
          array (
            'name' => 'apttus_non_standard_legal_language_c',
            'label' => 'LBL_APTTUS_NON_STANDARD_LEGAL_LANGUAGE_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_date_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_initiation_type_c',
            'label' => 'LBL_APTTUS_INITIATION_TYPE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apttus_company_signed_title_c',
            'label' => 'LBL_APTTUS_COMPANY_SIGNED_TITLE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_source_c',
            'label' => 'LBL_APTTUS_SOURCE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_signed_by_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_NAME_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_signed_by_unlisted_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_BY_UNLISTED_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'apttus_other_party_signed_date_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_other_party_signed_title_c',
            'label' => 'LBL_APTTUS_OTHER_PARTY_SIGNED_TITLE_C',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'comm_ops_age_c',
            'label' => 'LBL_COMM_OPS_AGE_C',
          ),
          1 => 
          array (
            'name' => 'date_submitted_to_comm_ops_c',
            'label' => 'LBL_DATE_SUBMITTED_TO_COMM_OPS_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'total_time_with_comm_ops_c',
            'label' => 'LBL_TOTAL_TIME_WITH_COMM_OPS_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
