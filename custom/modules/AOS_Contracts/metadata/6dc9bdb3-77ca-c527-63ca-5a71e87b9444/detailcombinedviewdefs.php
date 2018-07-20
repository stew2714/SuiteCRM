<?php
$viewdefs = array (
  'AOS_Contracts' => 
  array (
    'DetailCombinedView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
	'buttons' => 
          array (
            0 => 
            array (
              'customCode' => '{if $ACTIVATED === false || $LEGAL_TEAM === true}<input title="Edit" accesskey="i" class="button primary" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.return_id.value=\'{$recordID}\'; _form.action.value=\'EditView\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="Edit">{/if}',
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
              'customCode' => '{if $SALES_TEAM === true || $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="submitRequest" value="{$MOD.LBL_BUTTON_SUBMIT_REQUEST}">{/if}',
            ),
            7 => 
            array (
              'customCode' => '{if $SALES_TEAM === true || $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="cancelRequest" value="{$MOD.LBL_BUTTON_CANCEL_REQUEST}">{/if}',
            ),
            8 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="acceptRequestLegal" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST_LEGAL}">{/if}',
            ),
            9 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="returnToRequester" value="{$MOD.LBL_BUTTON_RETURN_TO_REQUESTER}">{/if}',
            ),
            10 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="redlineReview" value="{$MOD.LBL_BUTTON_MMODAL_RED_LINE_REVIEW}">{/if}',
            ),
            11 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="sendForSignatures" onclick="showMassGenerateDocumentForm();" value="{$MOD.LBL_BUTTON_SEND_FOR_SIGNATURES}">{/if}',
            ),
            12 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="sendForReview" onclick="showPopup(\'emailpdf\');" value="{$MOD.LBL_BUTTON_SEND_FOR_REVIEW}">{/if}',
            ),
            13 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === true && $bean->aclAccess("edit") && $OLD_AMENDMENT === false}<input title="{$MOD.LBL_BUTTON_AMEND}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.isDuplicate.value=true; _form.isAmendment.value=true; _form.action.value=\'EditView\'; _form.return_id.value=\'{$recordID}\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Amend" value="{$MOD.LBL_BUTTON_AMEND}" id="amend_button">
                            {elseif $OLD_AMENDMENT === true}<input title="{$MOD.LBL_BUTTON_AMEND}" class="button" onclick="alert(\'{$MOD.LBL_OLD_AMENDMENT_WARNING}\')" type="button" name="Amend" value="{$MOD.LBL_BUTTON_AMEND}" id="amend_button">{/if} ',
            ),
            14 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === false}<input type="button" class="button" id="sendToCommOps" value="{$MOD.LBL_BUTTON_SEND_TO_COMM_OPS}">{/if}',
            ),
            15 => 
            array (
              'customCode' => '{if $COMMS_OP === true && $ACTIVATED === false}<input type="button" class="button" id="acceptRequestCommsOps" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST_COMMS}">{/if}',
            ),
            16 => 
            array (
              'customCode' => '{if $COMMS_OP === true && $ACTIVATED === false}<input type="button" class="button" id="sendLegal" value="{$MOD.LBL_BUTTON_SEND_TO_LEGAL_QUEUE}">{/if}',
            ),
            17 => 
            array (
              'customCode' => '{if $COMMS_OP === true && $ACTIVATED === false}<input type="button" class="button" id="activateRequest" value="{$MOD.LBL_BUTTON_ACTIVATE_REQUEST}">{/if}',
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
          'CON_LBL_EDITVIEW_PANEL2' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'CON_LBL_EDITVIEW_PANEL4' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL1' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL2' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL3' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'ACC_LBL_EDITVIEW_PANEL4' => 
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
          ),
          1 => 
          array (
            0 => 'name',
            1 => 'contract_account',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'agreements_number_and_amendment_c',
              'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
            ),
            1 => 'apttus_status_category_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'type_of_product_services_c',
              'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
            ),
            1 => 'apttus_status_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            1 => 'type_of_request_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'apttus_requestor_name_c',
              'studio' => 'visible',
              'label' => 'LBL_APTTUS_REQUESTOR_NAME_C',
            ),
            1 => 'region_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'apttus_request_date_c',
              'label' => 'LBL_APTTUS_REQUEST_DATE_C',
            ),
            1 => 'assigned_user_name',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'apttus_special_terms_c',
              'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
            ),
            1 => 'requires_po_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'total_contract_value',
              'label' => 'LBL_TOTAL_CONTRACT_VALUE',
            ),
            1 => 'apttus_termination_notice_issue_date_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'strategic_deal_c',
              'label' => 'LBL_STRATEGIC_DEAL_C',
            ),
            1 => 'awaiting_information_detail_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'strategic_deal_description_c',
              'label' => 'LBL_STRATEGIC_DEAL_DESCRIPTION_C',
            ),
            1 => 'cancellation_reason_c',
          ),
        ),
        'lbl_detailview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'created_by_name',
              'label' => 'LBL_CREATED',
            ),
            1 => 'modified_by_name',
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
            1 => 'additionalusers',
          ),
        ),
        'acc_lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_term_mm_c',
              'label' => 'LBL_TOS_TERM_MM_C',
            ),
            1 => 'acc_tos_pricing_category_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_auto_renew_c',
              'label' => 'LBL_TOS_AUTO_RENEW_C',
            ),
            1 => 'acc_tos_pricing_category_uom_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_transcription_platform_c',
              'label' => 'LBL_TRANSCRIPTION_PLATFORM_C',
            ),
            1 => 'acc_tos_pricing_other_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_global_permitted_c',
              'label' => 'LBL_GLOBAL_PERMITTED_C',
            ),
            1 => 'acc_tos_billing_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_commitment_c',
              'label' => 'LBL_TOS_COMMITMENT_C',
            ),
            1 => 'acc_estimated_tos_existing_volume_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_book_rate_v2_c',
              'label' => 'LBL_TOS_PRICE_BOOK_RATE_V2_C',
            ),
            1 => 'acc_estimated_tos_new_volume_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_hire_client_mt_s_c',
              'label' => 'LBL_HIRE_CLIENT_MT_S_C',
            ),
            1 => 'acc_tos_revenue_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_securitygroup_display',
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
            1 => 'acc_additionalusers',
          ),
        ),
        'acc_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_term_months_c',
              'label' => 'LBL_FFT_TERM_MONTHS_C',
            ),
            1 => 'acc_fft_shipping_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_auto_renew_c',
              'label' => 'LBL_FFT_AUTO_RENEW_C',
            ),
            1 => 'acc_fft_pricing_category_uom_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_included_optional_system_components_c',
              'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
            ),
            1 => 'acc_estimated_fft_existing_volume_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_revenue_c',
              'label' => 'LBL_FFT_REVENUE_C',
            ),
            1 => 'acc_estimated_fft_new_volume_c',
          ),
        ),
        'acc_lbl_editview_panel3' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_term_months_c',
              'label' => 'LBL_CODING_TERM_MONTHS_C',
            ),
            1 => 'acc_coding_auto_renew_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_fluency_for_coding_platform_c',
              'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
            ),
            1 => 'acc_coding_revenue_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_commitment_c',
              'label' => 'LBL_CODING_COMMITMENT_C',
            ),
            1 => 'acc_coding_price_book_rate_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_pricing_c',
              'label' => 'LBL_CODING_PRICING_C',
            ),
          ),
        ),
        'acc_lbl_editview_panel4' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_term_mm_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_TERM_MM_C',
            ),
            1 => 'acc_virtual_scribing_global_permitted_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_auto_renew_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_AUTO_RENEW_C',
            ),
            1 => 'acc_virtual_scribing_pricing_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_virtual_scribing_evergreen_c',
              'label' => 'LBL_VIRTUAL_SCRIBING_EVERGREEN_C',
            ),
            1 => 'acc_virtual_scribing_revenue_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_type_of_scribing_c',
              'label' => 'LBL_TYPE_OF_SCRIBING_C',
            ),
            1 => 'acc_virtual_scribing_commitment_c',
          ),
        ),
        'con_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'con_shipping_c',
              'label' => 'LBL_SHIPPING_C',
            ),
            1 => 'con_product_term_months_c',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_hardware_pricing_discount_c',
              'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_product_billing_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_software_pricing_discount_c',
              'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hardware_gma_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_implementation_and_training_discount_c',
              'label' => 'LBL_IMPLEMENTATION_AND_TRAINING_DISCOUNT_C',
            ),
            1 => 'con_software_maintenance_and_support_c',
          ),
          4 => 
          array (
            1 => 'con_product_gma_service_level_c',
          ),
        ),
      ),
    ),
  ),
);
?>
