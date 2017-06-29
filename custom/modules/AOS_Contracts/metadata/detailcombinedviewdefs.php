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
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
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
              'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="sendToLegal" value="Send to Legal Queue">{/if}',
            ),
            7 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="Accept Request">{/if}',
            ),
            8 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="returnToRequester" value="Return to Requester">{/if}',
            ),
            9 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="redlineReview" value="M*Modal Redline Review">{/if}',
            ),
            10 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="informCommOps" value="Send for Signatures">{/if}',
            ),
            11 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="submitToCommOps" value="Submit to Comm Ops">{/if}',
            ),
            12 => 
            array (
              'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="Accept Request">{/if}',
            ),
          ),
          'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
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
        'useTabs' => true,
        'syncDetailEditViews' => true,
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_LINE_ITEMS' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'ACC_DEFAULT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'CON_DEFAULT' => 
          array (
            'newTab' => true,
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
            0 => 'name',
            1 => 'status',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'total_contract_value',
              'label' => 'LBL_TOTAL_CONTRACT_VALUE',
            ),
            1 => 'assigned_user_name',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
            ),
            1 => 'contract_account',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE',
            ),
            1 => 'contact',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'renewal_reminder_date',
              'label' => 'LBL_RENEWAL_REMINDER_DATE',
            ),
            1 => 'opportunity',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'customer_signed_date',
              'label' => 'LBL_CUSTOMER_SIGNED_DATE',
            ),
            1 => 'contract_type',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'company_signed_date',
              'label' => 'LBL_COMPANY_SIGNED_DATE',
            ),
          ),
          7 => 
          array (
            0 => 'description',
            1 => 'aos_contracts_sa_products_1_name',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'aos_contracts_sa_services_1_name',
            ),
          ),
        ),
        'lbl_line_items' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'currency_id',
              'studio' => 'visible',
              'label' => 'LBL_CURRENCY',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'line_items',
              'label' => 'LBL_LINE_ITEMS',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'total_amt',
              'label' => 'LBL_TOTAL_AMT',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'discount_amount',
              'label' => 'LBL_DISCOUNT_AMOUNT',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'subtotal_amount',
              'label' => 'LBL_SUBTOTAL_AMOUNT',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'shipping_amount',
              'label' => 'LBL_SHIPPING_AMOUNT',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'shipping_tax_amt',
              'label' => 'LBL_SHIPPING_TAX_AMT',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'tax_amount',
              'label' => 'LBL_TAX_AMOUNT',
            ),
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'total_amount',
              'label' => 'LBL_GRAND_TOTAL',
            ),
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
            1 => 'date_modified',
          ),
        ),
        'con_default' => 
        array (
          0 => 
          array (
            0 => 'con_name',
            1 => 'con_assigned_user_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_cac_services_c',
              'label' => 'LBL_CAC_SERVICES_C',
            ),
            1 => 'con_coding_general_notes_c',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_coding_global_permissions_c',
              'label' => 'LBL_CODING_GLOBAL_PERMISSIONS_C',
            ),
            1 => 'con_coding_global_permitted_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_coding_price_book_rate_c',
              'label' => 'LBL_CODING_PRICE_BOOK_RATE_C',
            ),
            1 => 'con_coding_term_for_convenience_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'con_ff_fix_send_to_other_party_for_review_c',
              'label' => 'LBL_FF_FIX_SEND_TO_OTHER_PARTY_FOR_REVIEW_C',
            ),
            1 => 'con_ff_fix_send_to_other_party_signatures_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'con_fluency_for_coding_platform_c',
              'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
            ),
            1 => 'con_hardware_gma_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'con_hardware_pricing_discount_c',
              'label' => 'LBL_HARDWARE_PRICING_DISCOUNT_C',
            ),
            1 => 'con_hosting_auto_renew_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_effective_date_c',
              'label' => 'LBL_HOSTING_EFFECTIVE_DATE_C',
            ),
            1 => 'con_hosting_expiration_date_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_renewal_start_date_c',
              'label' => 'LBL_HOSTING_RENEWAL_START_DATE_C',
            ),
            1 => 'con_hosting_renewal_term_months_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_term_months_c',
              'label' => 'LBL_HOSTING_TERM_MONTHS_C',
            ),
            1 => 'con_hosting_term_notice_period_dd_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'con_hosting_termination_prior_to_renewal_day_c',
              'label' => 'LBL_HOSTING_TERMINATION_PRIOR_TO_RENEWAL_DAY_C',
            ),
            1 => 'con_maintenance_and_support_attachment_effec_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_attachment_expir_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_ATTACHMENT_EXPIR_C',
            ),
            1 => 'con_maintenance_and_support_attachment_numbe_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_auto_renew_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_AUTO_RENEW_C',
            ),
            1 => 'con_maintenance_and_support_renewal_term_mon_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_sow_date_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_SOW_DATE_C',
            ),
            1 => 'con_maintenance_and_support_sow_version_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_term_years_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_TERM_YEARS_C',
            ),
            1 => 'con_maintenance_and_support_termination_prio_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_year_1_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_1_C',
            ),
            1 => 'con_maintenance_and_support_year_2_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'con_maintenance_and_support_year_3_c',
              'label' => 'LBL_MAINTENANCE_AND_SUPPORT_YEAR_3_C',
            ),
            1 => 'con_maintenance_general_notes_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'con_name_of_product_c',
              'label' => 'LBL_NAME_OF_PRODUCT_C',
            ),
            1 => 'con_product_attachment_effective_date_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'con_product_attachment_expiration_date_c',
              'label' => 'LBL_PRODUCT_ATTACHMENT_EXPIRATION_DATE_C',
            ),
            1 => 'con_product_attachment_number_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'con_product_billing_c',
              'label' => 'LBL_PRODUCT_BILLING_C',
            ),
            1 => 'con_product_billing_terms_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'con_product_cia_c',
              'label' => 'LBL_PRODUCT_CIA_C',
            ),
            1 => 'con_product_general_notes_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_annual_increase_c',
              'label' => 'LBL_PRODUCT_GMA_ANNUAL_INCREASE_C',
            ),
            1 => 'con_product_gma_auto_renew_c',
          ),
          22 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_effective_date_c',
              'label' => 'LBL_PRODUCT_GMA_EFFECTIVE_DATE_C',
            ),
            1 => 'con_product_gma_expiration_date_c',
          ),
          23 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_renewal_start_date_c',
              'label' => 'LBL_PRODUCT_GMA_RENEWAL_START_DATE_C',
            ),
            1 => 'con_product_gma_renewal_term_c',
          ),
          24 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_renewal_term_months_c',
              'label' => 'LBL_PRODUCT_GMA_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'con_product_gma_service_level_c',
          ),
          25 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_term_months_c',
              'label' => 'LBL_PRODUCT_GMA_TERM_MONTHS_C',
            ),
            1 => 'con_product_gma_termination_period_dd_c',
          ),
          26 => 
          array (
            0 => 
            array (
              'name' => 'con_product_gma_termination_prior_to_ren_pic_c',
              'label' => 'LBL_PRODUCT_GMA_TERMINATION_PRIOR_TO_REN_PIC_C',
            ),
            1 => 'con_product_maintenance_and_support_auto_ren_c',
          ),
          27 => 
          array (
            0 => 
            array (
              'name' => 'con_product_hosted_c',
              'label' => 'LBL_PRODUCT_HOSTED_C',
            ),
            1 => 'con_product_maintenance_and_support_effectiv_c',
          ),
          28 => 
          array (
            0 => 
            array (
              'name' => 'con_product_maintenance_and_support_expirati_c',
              'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_EXPIRATI_C',
            ),
            1 => 'con_product_maintenance_and_support_service_c',
          ),
          29 => 
          array (
            0 => 
            array (
              'name' => 'con_product_maintenance_and_support_term_mo_c',
              'label' => 'LBL_PRODUCT_MAINTENANCE_AND_SUPPORT_TERM_MO_C',
            ),
            1 => 'con_product_perpetual_c',
          ),
          30 => 
          array (
            0 => 
            array (
              'name' => 'con_product_price_increase_c',
              'label' => 'LBL_PRODUCT_PRICE_INCREASE_C',
            ),
            1 => 'con_product_sow_date_c',
          ),
          31 => 
          array (
            0 => 
            array (
              'name' => 'con_product_sow_version_c',
              'label' => 'LBL_PRODUCT_SOW_VERSION_C',
            ),
            1 => 'con_product_subscription_auto_renewal_c',
          ),
          32 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_for_convenien_c',
              'label' => 'LBL_PRODUCT_TERM_FOR_CONVENIEN_C',
            ),
            1 => 'con_product_term_for_convenience_c',
          ),
          33 => 
          array (
            0 => 
            array (
              'name' => 'con_product_term_months_c',
              'label' => 'LBL_PRODUCT_TERM_MONTHS_C',
            ),
            1 => 'con_software_maintenance_and_support_c',
          ),
          34 => 
          array (
            0 => 
            array (
              'name' => 'con_software_pricing_discount_c',
              'label' => 'LBL_SOFTWARE_PRICING_DISCOUNT_C',
            ),
          ),
          35 => 
          array (
            0 => 'con_description',
            1 => 'con_aos_contracts_sa_products_1_name',
          ),
        ),
        'acc_default' => 
        array (
          0 => 
          array (
            0 => 'acc_name',
            1 => 'acc_assigned_user_name',
          ),
          1 => 
          array (
            0 => 'acc_description',
            1 => 'acc_aos_contracts_sa_services_1_name',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_attachment_number_c',
              'label' => 'LBL_CODING_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_coding_auto_renew_c',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_billing_c',
              'label' => 'LBL_CODING_BILLING_C',
            ),
            1 => 'acc_coding_commitment_c',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_effective_date_c',
              'label' => 'LBL_CODING_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_coding_estimated_billing_c',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_evergreen_c',
              'label' => 'LBL_CODING_EVERGREEN_C',
            ),
            1 => 'acc_coding_expiration_date_c',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_implementation_training_fees_c',
              'label' => 'LBL_CODING_IMPLEMENTATION_TRAINING_FEES_C',
            ),
            1 => 'acc_coding_pricing_c',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_pricing_category_rate_c',
              'label' => 'LBL_CODING_PRICING_CATEGORY_RATE_C',
            ),
            1 => 'acc_coding_pricing_increase_c',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_consent_c',
              'label' => 'LBL_CODING_RENEWAL_CONSENT_C',
            ),
            1 => 'acc_coding_renewal_notification_period_dd_c',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_start_date_c',
              'label' => 'LBL_CODING_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_coding_renewal_term_months_c',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_renewal_terms_c',
              'label' => 'LBL_CODING_RENEWAL_TERMS_C',
            ),
            1 => 'acc_coding_revenue_c',
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_sow_date_c',
              'label' => 'LBL_CODING_SOW_DATE_C',
            ),
            1 => 'acc_coding_sow_version_c',
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_term_for_convenience_notice_dd_c',
              'label' => 'LBL_CODING_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
            ),
            1 => 'acc_coding_term_months_c',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_termination_for_convenience_c',
              'label' => 'LBL_CODING_TERMINATION_FOR_CONVENIENCE_C',
            ),
            1 => 'acc_coding_termination_prior_to_renewal_c',
          ),
          14 => 
          array (
            0 => 
            array (
              'name' => 'acc_coding_termination_prior_to_renewal_days_c',
              'label' => 'LBL_CODING_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'acc_codingt_renewal_notice_days_c',
          ),
          15 => 
          array (
            0 => 
            array (
              'name' => 'acc_estimated_fft_existing_volume_c',
              'label' => 'LBL_ESTIMATED_FFT_EXISTING_VOLUME_C',
            ),
            1 => 'acc_estimated_fft_new_volume_c',
          ),
          16 => 
          array (
            0 => 
            array (
              'name' => 'acc_estimated_tos_existing_volume_c',
              'label' => 'LBL_ESTIMATED_TOS_EXISTING_VOLUME_C',
            ),
            1 => 'acc_estimated_tos_new_volume_c',
          ),
          17 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_attachment_number_c',
              'label' => 'LBL_FFT_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_fft_auto_renew_c',
          ),
          18 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_billing_c',
              'label' => 'LBL_FFT_BILLING_C',
            ),
            1 => 'acc_fft_effective_date_c',
          ),
          19 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_evergreen_c',
              'label' => 'LBL_FFT_EVERGREEN_C',
            ),
            1 => 'acc_fft_expiration_date_c',
          ),
          20 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_general_notes_c',
              'label' => 'LBL_FFT_GENERAL_NOTES_C',
            ),
            1 => 'acc_fft_implementation_training_fees_c',
          ),
          21 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_pricing_category_c',
              'label' => 'LBL_FFT_PRICING_CATEGORY_C',
            ),
            1 => 'acc_fft_pricing_category_rate_c',
          ),
          22 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_pricing_category_uom_c',
              'label' => 'LBL_FFT_PRICING_CATEGORY_UOM_C',
            ),
            1 => 'acc_fft_pricing_increase_c',
          ),
          23 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_consent_c',
              'label' => 'LBL_FFT_RENEWAL_CONSENT_C',
            ),
            1 => 'acc_fft_pricing_other_c',
          ),
          24 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_notice_days_c',
              'label' => 'LBL_FFT_RENEWAL_NOTICE_DAYS_C',
            ),
            1 => 'acc_fft_renewal_notification_period_dd_c',
          ),
          25 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_renewal_term_months_c',
              'label' => 'LBL_FFT_RENEWAL_TERM_MONTHS_C',
            ),
            1 => 'acc_fft_renewal_start_date_c',
          ),
          26 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_revenue_c',
              'label' => 'LBL_FFT_REVENUE_C',
            ),
            1 => 'acc_fft_shipping_c',
          ),
          27 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_sow_date_c',
              'label' => 'LBL_FFT_SOW_DATE_C',
            ),
            1 => 'acc_fft_renewal_terms_c',
          ),
          28 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_sow_version_c',
              'label' => 'LBL_FFT_SOW_VERSION_C',
            ),
            1 => 'acc_fft_term_for_convenience_c',
          ),
          29 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_term_for_convenience_notice_dd_c',
              'label' => 'LBL_FFT_TERM_FOR_CONVENIENCE_NOTICE_DD_C',
            ),
            1 => 'acc_fft_term_months_c',
          ),
          30 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_termination_for_convenience_c',
              'label' => 'LBL_FFT_TERMINATION_FOR_CONVENIENCE_C',
            ),
            1 => 'acc_fft_termination_prior_to_renewal_c',
          ),
          31 => 
          array (
            0 => 
            array (
              'name' => 'acc_fft_termination_prior_to_renewal_days_c',
              'label' => 'LBL_FFT_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'acc_fft_volume_guarantee_c',
          ),
          32 => 
          array (
            0 => 
            array (
              'name' => 'acc_implementation_and_training_discount_c',
              'label' => 'LBL_IMPLEMENTATION_AND_TRAINING_DISCOUNT_C',
            ),
            1 => 'acc_number_of_mt_s_for_hire_c',
          ),
          33 => 
          array (
            0 => 
            array (
              'name' => 'acc_other_transcription_platform_c',
              'label' => 'LBL_OTHER_TRANSCRIPTION_PLATFORM_C',
            ),
            1 => 'acc_qa_penalty_details_c',
          ),
          34 => 
          array (
            0 => 
            array (
              'name' => 'acc_service_or_product_warranty_c',
              'label' => 'LBL_SERVICE_OR_PRODUCT_WARRANTY_C',
            ),
            1 => 'acc_tat_credit_details_c',
          ),
          35 => 
          array (
            0 => 
            array (
              'name' => 'acc_tat_credit_standard_c',
              'label' => 'LBL_TAT_CREDIT_STANDARD_C',
            ),
            1 => 'acc_tat_credits_c',
          ),
          36 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_attachment_number_c',
              'label' => 'LBL_TOS_ATTACHMENT_NUMBER_C',
            ),
            1 => 'acc_tos_auto_renew_c',
          ),
          37 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_billing_c',
              'label' => 'LBL_TOS_BILLING_C',
            ),
            1 => 'acc_tos_commitment_c',
          ),
          38 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_effective_date_c',
              'label' => 'LBL_TOS_EFFECTIVE_DATE_C',
            ),
            1 => 'acc_tos_evergreen_c',
          ),
          39 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_expiration_date_c',
              'label' => 'LBL_TOS_EXPIRATION_DATE_C',
            ),
            1 => 'acc_tos_general_notes_c',
          ),
          40 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_book_rate_c',
              'label' => 'LBL_TOS_PRICE_BOOK_RATE_C',
            ),
            1 => 'acc_tos_price_book_rate_v2_c',
          ),
          41 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_price_increase_during_initial_term_c',
              'label' => 'LBL_TOS_PRICE_INCREASE_DURING_INITIAL_TERM_C',
            ),
            1 => 'acc_tos_pricing_category_c',
          ),
          42 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_category_rate_c',
              'label' => 'LBL_TOS_PRICING_CATEGORY_RATE_C',
            ),
            1 => 'acc_tos_pricing_category_uom_c',
          ),
          43 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_pricing_increase_c',
              'label' => 'LBL_TOS_PRICING_INCREASE_C',
            ),
            1 => 'acc_tos_pricing_other_c',
          ),
          44 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_consent_c',
              'label' => 'LBL_TOS_RENEWAL_CONSENT_C',
            ),
            1 => 'acc_tos_renewal_notification_period_dd_c',
          ),
          45 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_start_date_c',
              'label' => 'LBL_TOS_RENEWAL_START_DATE_C',
            ),
            1 => 'acc_tos_renewal_term_mm_c',
          ),
          46 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_revenue_c',
              'label' => 'LBL_TOS_REVENUE_C',
            ),
            1 => 'acc_tos_term_for_convenience_c',
          ),
          47 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_renewal_terms_c',
              'label' => 'LBL_TOS_RENEWAL_TERMS_C',
            ),
            1 => 'acc_tos_term_for_convenience_notice_dd_c',
          ),
          48 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_term_mm_c',
              'label' => 'LBL_TOS_TERM_MM_C',
            ),
            1 => 'acc_tos_termination_for_convenience_c',
          ),
          49 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_termination_for_convenience_notice_c',
              'label' => 'LBL_TOS_TERMINATION_FOR_CONVENIENCE_NOTICE_C',
            ),
            1 => 'acc_tos_termination_prior_to_renewal_c',
          ),
          50 => 
          array (
            0 => 
            array (
              'name' => 'acc_tos_termination_prior_to_renewal_days_c',
              'label' => 'LBL_TOS_TERMINATION_PRIOR_TO_RENEWAL_DAYS_C',
            ),
            1 => 'acc_transcription_platform_c',
          ),
          51 => 
          array (
            0 => 
            array (
              'name' => 'acc_union_mt_s_c',
              'label' => 'LBL_UNION_MT_S_C',
            ),
            1 => 'acc_volume_guarantee_c',
          ),
        ),
      ),
    ),
  ),
);
?>
