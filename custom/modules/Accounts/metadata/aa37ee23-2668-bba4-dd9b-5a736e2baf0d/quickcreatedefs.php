<?php
$viewdefs ['Accounts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
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
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'website',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'revenue_c',
            'label' => 'Revenue',
          ),
          1 => 
          array (
            'name' => 'number_of_providers_c',
            'label' => 'Number Of Providers',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'employees',
            'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
            'label' => 'LBL_EMPLOYEES',
          ),
          1 => 
          array (
            'name' => 'years_in_business_c',
            'label' => 'Years In Business',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'number_of_dictators_c',
            'label' => 'Number Of Dictators',
          ),
          1 => 
          array (
            'name' => 'geographic_region_served_c',
            'label' => 'Geographic Region Served',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'number_of_mts_c',
            'label' => 'Number Of MTs',
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
            'name' => 'transcription_volumemonth_c',
            'label' => 'Transcription Volumemonth',
          ),
          1 => 
          array (
            'name' => 'transcription_uom_c',
            'label' => 'Transcription UOM',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'voice_capture_system_c',
            'label' => 'Voice Capture System',
          ),
          1 => 
          array (
            'name' => 'coding_system_c',
            'label' => 'Coding System',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'voice_capture_install_date_c',
            'label' => 'Voice Capture Install Date',
          ),
          1 => 
          array (
            'name' => 'coding_system_install_date_c',
            'label' => 'Coding System Install Date',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'transcription_system_c',
            'label' => 'Transcription System',
          ),
          1 => 
          array (
            'name' => 'other_system_c',
            'label' => 'Other System',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'transcription_install_date_c',
            'label' => 'Transcription Install Date',
          ),
          1 => 
          array (
            'name' => 'other_system_install_date_c',
            'label' => 'Other System Install Date',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'him_speech_rec_system_c',
            'label' => 'Him Speech Rec System',
          ),
          1 => 
          array (
            'name' => 'mobile_devices_c',
            'label' => 'Mobile Devices',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'him_speech_rec_install_date_c',
            'label' => 'HIM Speech Rec Install Date',
          ),
          1 => 
          array (
            'name' => 'mobile_devices_install_date_c',
            'label' => 'Mobile Devices Install Date',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'comment' => 'The street address used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'comment' => 'The country used for the billing address',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'ha_id_c',
            'label' => 'HA ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'billians_id_c',
            'label' => 'Billians ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'slx_account_id_c',
            'label' => 'SLX Account ID',
          ),
          1 => 
          array (
            'name' => 'medicare_id_c',
            'label' => 'Medicare ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ucid_c',
            'label' => 'UCID',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
