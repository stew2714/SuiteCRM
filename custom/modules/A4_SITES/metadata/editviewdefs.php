<?php
$module_name = 'A4_SITES';
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
            'name' => 'term_date',
            'label' => 'LBL_TERM_DATE',
          ),
        ),
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'ucid',
            'label' => 'LBL_UCID',
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
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
          1 => 
          array (
            'name' => 'service_address_state',
            'label' => 'LBL_SERVICE_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'service_address_postalcode',
            'label' => 'LBL_SERVICE_ADDRESS_POSTALCODE',
          ),
          1 => 
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
      'lbl_editview_panel3' => 
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
