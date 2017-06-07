<?php
$module_name = 'SA_Legal_Vendors';
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
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'business_unit',
            'comment' => '',
            'label' => 'LBL_BUSINESS_UNIT',
          ),
          1 => 
          array (
            'name' => 'does_vendor_access_phi',
            'comment' => '',
            'label' => 'LBL_DOES_VENDOR_ACCESS_PHI',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'initial_request_date',
            'comment' => '',
            'label' => 'LBL_INITIAL_REQUEST_DATE',
          ),
          1 => 
          array (
            'name' => 'request_closed_date',
            'comment' => '',
            'label' => 'LBL_REQUEST_CLOSED_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'users_sa_legal_vendors_1_name',
            'label' => 'LBL_USERS_SA_LEGAL_VENDORS_1_FROM_USERS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
