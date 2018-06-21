<?php
$viewdefs = array (
  'AOS_Contracts' => 
  array (
    'CreateView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
          'buttons' => 
          array (
            'SAVE' => 
            array (
              'customCode' => '<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"                     accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}"                     class="button" 					 onclick="var _form = document.getElementById(\'CreateView\'); _form.action.value=\'Save\'; if(check_form(\'CreateView\'))SUGAR.ajaxUI.submitForm(_form);return false;";                     type="submit"                     name="button"                     id="SAVE"                         value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
            ),
            'CANCEL' => 'CANCEL',
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
        'syncDetailEditViews' => false,
        'javascript' => '{$LOCK_FILES} {$BEAN_DATA}',
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
            1 => 'opportunity',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'type_of_product_services_c',
              'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
            ),
            1 => 'type_of_request_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            1 => 'region_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'requires_po_c',
              'label' => 'LBL_REQUIRES_PO_C',
            ),
            1 => 'apttus_special_terms_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'total_contract_value',
              'label' => 'LBL_TOTAL_CONTRACT_VALUE',
            ),
            1 => 'apttus_requestor_name_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'strategic_deal_c',
              'label' => 'LBL_STRATEGIC_DEAL_C',
            ),
            1 => 'strategic_deal_description_c',
          ),
          8 => 
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
