<?php
$module_name = 'SA_Services';
$viewdefs [$module_name] = 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tos_term_mm_c',
            'label' => 'LBL_TOS_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'tos_pricing_category_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tos_auto_renew_c',
            'label' => 'LBL_TOS_AUTO_RENEW_C',
          ),
          1 => 
          array (
            'name' => 'tos_pricing_category_uom_c',
            'label' => 'LBL_TOS_PRICING_CATEGORY_UOM_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'transcription_platform_c',
            'label' => 'LBL_TRANSCRIPTION_PLATFORM_C',
          ),
          1 => 
          array (
            'name' => 'tos_pricing_other_c',
            'label' => 'LBL_TOS_PRICING_OTHER_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'global_permitted_c',
            'label' => 'LBL_GLOBAL_PERMITTED_C',
          ),
          1 => 
          array (
            'name' => 'tos_billing_c',
            'label' => 'LBL_TOS_BILLING_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tos_commitment_c',
            'label' => 'LBL_TOS_COMMITMENT_C',
          ),
          1 => 
          array (
            'name' => 'estimated_tos_existing_volume_c',
            'label' => 'LBL_ESTIMATED_TOS_EXISTING_VOLUME_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'tos_price_book_rate_v2_c',
            'label' => 'LBL_TOS_PRICE_BOOK_RATE_V2_C',
          ),
          1 => 
          array (
            'name' => 'estimated_tos_new_volume_c',
            'label' => 'LBL_ESTIMATED_TOS_NEW_VOLUME_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'hire_client_mt_s_c',
            'label' => 'LBL_HIRE_CLIENT_MT_S_C',
          ),
          1 => 
          array (
            'name' => 'tos_revenue_c',
            'label' => 'LBL_TOS_REVENUE_C',
          ),
        ),
        7 => 
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
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fft_term_months_c',
            'label' => 'LBL_FFT_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'fft_shipping_c',
            'label' => 'LBL_FFT_SHIPPING_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fft_auto_renew_c',
            'label' => 'LBL_FFT_AUTO_RENEW_C',
          ),
          1 => 
          array (
            'name' => 'fft_pricing_category_uom_c',
            'label' => 'LBL_FFT_PRICING_CATEGORY_UOM_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'included_optional_system_components_c',
            'label' => 'LBL_INCLUDED_OPTIONAL_SYSTEM_COMPONENTS_C',
          ),
          1 => 
          array (
            'name' => 'estimated_fft_existing_volume_c',
            'label' => 'LBL_ESTIMATED_FFT_EXISTING_VOLUME_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fft_revenue_c',
            'label' => 'LBL_FFT_REVENUE_C',
          ),
          1 => 
          array (
            'name' => 'estimated_fft_new_volume_c',
            'label' => 'LBL_ESTIMATED_FFT_NEW_VOLUME_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'coding_term_months_c',
            'label' => 'LBL_CODING_TERM_MONTHS_C',
          ),
          1 => 
          array (
            'name' => 'coding_auto_renew_c',
            'label' => 'LBL_CODING_AUTO_RENEW_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fluency_for_coding_platform_c',
            'label' => 'LBL_FLUENCY_FOR_CODING_PLATFORM_C',
          ),
          1 => 
          array (
            'name' => 'coding_revenue_c',
            'label' => 'LBL_CODING_REVENUE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'coding_commitment_c',
            'label' => 'LBL_CODING_COMMITMENT_C',
          ),
          1 => 
          array (
            'name' => 'coding_price_book_rate_c',
            'label' => 'LBL_CODING_PRICE_BOOK_RATE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coding_pricing_c',
            'label' => 'LBL_CODING_PRICING_C',
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
            'name' => 'virtual_scribing_term_mm_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_TERM_MM_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_global_permitted_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_GLOBAL_PERMITTED_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_auto_renew_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_AUTO_RENEW_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_pricing_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_PRICING_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'virtual_scribing_evergreen_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_EVERGREEN_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_revenue_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_REVENUE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type_of_scribing_c',
            'label' => 'LBL_TYPE_OF_SCRIBING_C',
          ),
          1 => 
          array (
            'name' => 'virtual_scribing_commitment_c',
            'label' => 'LBL_VIRTUAL_SCRIBING_COMMITMENT_C',
          ),
        ),
      ),
    ),
  ),
);
?>
