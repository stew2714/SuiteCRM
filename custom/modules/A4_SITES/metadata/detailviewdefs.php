<?php
$module_name = 'A4_SITES';
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
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
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
        'LBL_DETAILVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'customer_no_c',
            'label' => 'LBL_CUSTOMER_NO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent',
            'label' => 'LBL_PARENT',
          ),
          1 => 
          array (
            'name' => 'accounts_a4_sites_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ucid',
            'label' => 'LBL_UCID',
          ),
          1 => 
          array (
            'name' => 'aplatform_c',
            'studio' => 'visible',
            'label' => 'LBL_APLATFORM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'active_date',
            'label' => 'LBL_ACTIVE_DATE',
          ),
          1 => 
          array (
            'name' => 'term_date',
            'label' => 'LBL_TERM_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'definitive_id',
            'label' => 'LBL_DEFINITIVE_ID',
          ),
          1 => 
          array (
            'name' => 'himss_id',
            'label' => 'LBL_HIMSS_ID',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'b2b_c',
            'label' => 'LBL_B2B',
          ),
          1 => 
          array (
            'name' => 'cdia_c',
            'label' => 'LBL_CDIA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'cdic_c',
            'label' => 'LBL_CDIC',
          ),
          1 => 
          array (
            'name' => 'cdie_c',
            'label' => 'LBL_CDIE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'dwi_c',
            'label' => 'LBL_DWI',
          ),
          1 => 
          array (
            'name' => 'fd_c',
            'label' => 'LBL_FD',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'ff_c',
            'label' => 'LBL_FF',
          ),
          1 => 
          array (
            'name' => 'ffc_c',
            'label' => 'LBL_FFC',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'ffi_c',
            'label' => 'LBL_FFI',
          ),
          1 => 
          array (
            'name' => 'fm_c',
            'label' => 'LBL_FM',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'fvm_c',
            'label' => 'LBL_FVM',
          ),
          1 => 
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
        ),
        11 => 
        array (
          0 => 
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
            'name' => 'service_address',
            'label' => 'LBL_SERVICE_ADDRESS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'service_address_city',
            'label' => 'LBL_SERVICE_ADDRESS_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'service_address_state',
            'label' => 'LBL_SERVICE_ADDRESS_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'service_address_postalcode',
            'label' => 'LBL_SERVICE_ADDRESS_POSTALCODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'service_address_country',
            'label' => 'LBL_SERVICE_ADDRESS_COUNTRY',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ops_region',
            'label' => 'LBL_OPS_REGION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cc_region_dd_c',
            'studio' => 'visible',
            'label' => 'LBL_CC_REGION_DD',
          ),
          1 => 
          array (
            'name' => 'tier_dd_c',
            'studio' => 'visible',
            'label' => 'LBL_TIER_DD',
          ),
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'client_alert_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_ALERT',
          ),
        ),
      ),
    ),
  ),
);
?>
