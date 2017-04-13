<?php
$module_name = 'A4_SITES';
$viewdefs [$module_name] = 
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
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
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
            'label' => 'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aplatform_c',
            'studio' => 'visible',
            'label' => 'LBL_APLATFORM',
          ),
          1 => 
          array (
            'name' => 'ucid',
            'label' => 'LBL_UCID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'himss_id',
            'label' => 'LBL_HIMSS_ID',
          ),
          1 => 
          array (
            'name' => 'definitive_id',
            'label' => 'LBL_DEFINITIVE_ID',
          ),
        ),
        4 => 
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
          1 => 
          array (
            'name' => 'service_address_city',
            'label' => 'LBL_SERVICE_ADDRESS_CITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'service_address_state',
            'label' => 'LBL_SERVICE_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'service_address_postalcode',
            'label' => 'LBL_SERVICE_ADDRESS_POSTALCODE',
          ),
        ),
        2 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'ops_region',
            'label' => 'LBL_OPS_REGION',
          ),
        ),
      ),
    ),
  ),
);
?>
