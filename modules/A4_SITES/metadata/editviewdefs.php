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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parent',
            'label' => 'LBL_PARENT',
          ),
          1 => 
          array (
            'name' => 'ucid',
            'label' => 'LBL_UCID',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => '',
        ),
        2 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'platform',
            'label' => 'LBL_PLATFORM',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'service_address_line2',
            'label' => 'LBL_SERVICE_ADDRESS_LINE2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'service_address_city',
            'label' => 'LBL_SERVICE_ADDRESS_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'service_address_state',
            'label' => 'LBL_SERVICE_ADDRESS_STATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'service_address_postalcode',
            'label' => 'LBL_SERVICE_ADDRESS_POSTALCODE',
          ),
        ),
        5 => 
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
            'name' => 'cc_region',
            'label' => 'LBL_CC_REGION',
          ),
          1 => 
          array (
            'name' => 'tier',
            'label' => 'LBL_TIER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ops_region',
            'label' => 'LBL_OPS_REGION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
