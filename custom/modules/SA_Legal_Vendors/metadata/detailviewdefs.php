<?php
$module_name = 'SA_Legal_Vendors';
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'vendor_contract_id',
            'comment' => 'Visual unique identifier',
            'studio' => 
            array (
              'quickcreate' => false,
            ),
            'label' => 'LBL_VENDOR_CONTRACT_ID',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description_document_type_c',
            'comment' => '',
            'label' => 'LBL_DESCRIPTION_DOCUMENT_TYPE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'business_unit_c',
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
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'age_c',
            'comment' => '',
            'label' => 'LBL_AGE',
          ),
          1 => 
          array (
            'name' => 'does_vendor_access_phi_c',
            'comment' => '',
            'label' => 'LBL_DOES_VENDOR_ACCESS_PHI',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'request_closed_date_c',
            'comment' => '',
            'label' => 'LBL_REQUEST_CLOSED_DATE',
          ),
          1 => 
          array (
            'name' => 'vendor_name_c',
            'comment' => '',
            'label' => 'LBL_VENDOR_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'lastactivitydate_c',
            'comment' => '',
            'label' => 'LBL_LAST_ACTIVITY_DATE',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'requestor_c',
            'comment' => '',
            'label' => 'LBL_REQUESTOR',
          ),
          1 => 
          array (
            'name' => 'time_to_complete_c',
            'comment' => '',
            'label' => 'LBL_TIME_TO_COMPLETE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'notes_c',
            'comment' => '',
            'label' => 'LBL_NOTES',
          ),
          1 => 
          array (
            'name' => 'initital_request_date_c',
            'comment' => '',
            'label' => 'LBL_INITITAL_REQUEST_DATE',
          ),
        ),
        10 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'users_sa_legal_vendors_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
