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
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL9' => 
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
          1 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'facility_type_dd_c',
            'studio' => 'visible',
            'label' => 'LBL_FACILITY_TYPE_DD',
          ),
          1 => 
          array (
            'name' => 'account_type_c',
            'label' => 'Account Type',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primary_gpo_c',
            'label' => 'Primary GPO',
          ),
          1 => 
          array (
            'name' => 'ownership',
            'label' => 'LBL_OWNERSHIP',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
          ),
          1 => 
          array (
            'name' => 'specialty_c',
            'label' => 'Specialty',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
          ),
          1 => 
          array (
            'name' => 'account_disposition_c',
            'label' => 'Account Disposition',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'website',
          ),
          1 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'Record Type',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'latitude_c',
            'label' => 'Latitude',
          ),
          1 => 
          array (
            'name' => 'geostatus_c',
            'label' => 'Geostatus',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => 
          array (
            'name' => 'sales_region_c',
            'label' => 'Sales Region',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_management_region_c',
            'label' => 'Account Management Region',
          ),
          1 => 
          array (
            'name' => 'sales_territory_c',
            'label' => 'Sales Territory',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'number_of_dictators_c',
            'label' => 'Number Of Dictators',
          ),
          1 => 
          array (
            'name' => 'of_procedures_day_c',
            'label' => 'Of Procedures Day',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number_of_locations_c',
            'label' => 'Number Of Locations',
          ),
          1 => 
          array (
            'name' => 'transcription_volumemonth_c',
            'label' => 'Transcription Volumemonth',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'site_size_c',
            'label' => 'Site Size',
          ),
          1 => 
          array (
            'name' => 'transcription_uom_c',
            'label' => 'Transcription UOM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehr_c',
            'label' => 'EHR',
          ),
          1 => 
          array (
            'name' => 'practice_management_system_c',
            'label' => 'Practice Management System',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ehr_percent_c',
            'label' => 'EHR Percent',
          ),
          1 => 
          array (
            'name' => 'transcription_system_c',
            'label' => 'Transcription System',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ehr_install_date_c',
            'label' => 'EHR Install Date',
          ),
          1 => 
          array (
            'name' => 'transcription_install_date_c',
            'label' => 'Transcription Install Date',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'voice_capture_system_c',
            'label' => 'Voice Capture System',
          ),
          1 => 
          array (
            'name' => 'him_speech_rec_system_c',
            'label' => 'Him Speech Rec System',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'voice_capture_install_date_c',
            'label' => 'Voice Capture Install Date',
          ),
          1 => 
          array (
            'name' => 'him_speech_rec_install_date_c',
            'label' => 'HIM Speech Rec Install Date',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'related_facilitities_c',
            'label' => 'Related Facilities',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sk_a_id_c',
            'label' => 'SK&A ID',
          ),
          1 => 
          array (
            'name' => 'sage_id_c',
            'label' => 'Sage ID',
          ),
        ),
        1 => 
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
    ),
  ),
);
?>
