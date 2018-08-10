<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
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
        1 => 
        array (
          'file' => 'custom/modules/Accounts/js/Validation.js',
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
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'industry',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'facility_type_dd_c',
            'studio' => 'visible',
            'label' => 'LBL_FACILITY_TYPE_DD',
          ),
          1 => 'account_type',
        ),
        2 => 
        array (
          0 => 'parent_name',
          1 => 
          array (
            'name' => 'profit_non_profit_c',
            'label' => 'Profit Non Profit',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'gpo_affiliation_name_c',
            'studio' => 'visible',
            'label' => 'GPO',
          ),
          1 => 
          array (
            'name' => 'ownership',
            'label' => 'LBL_OWNERSHIP',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'mq_segmentation_c',
            'label' => 'M*M Segmentation',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'fed_department_c',
            'label' => 'Fed Department',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'Record Type',
          ),
          1 => 
          array (
            'name' => 'fed_agency_c',
            'label' => 'Fed Agency',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'health_system_type_c',
            'label' => 'LBL_HEALTH_SYSTEM_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'it_region_c',
            'label' => 'IT Region',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'organization_c',
            'label' => 'LBL_ORGANIZATION_C',
          ),
          1 => 
          array (
            'name' => 'organization_unique_id_c',
            'label' => 'LBL_ORGANIZATION_UNIQUE_ID_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'cms_medicare_number_c',
            'label' => 'LBL_CMS_MEDICARE_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'organization_primary_service_c',
            'label' => 'Organization Primary Service',
          ),
        ),
        10 => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'new_region_c',
            'label' => 'New Region',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'imaging_owner_name_c',
            'studio' => 'visible',
            'label' => 'Imaging Owner',
          ),
          1 => 
          array (
            'name' => 'zba_sss_c',
            'label' => 'ZBA SSS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'crm_c',
            'label' => 'CRM',
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
            'name' => 'staffed_beds_c',
            'label' => 'Staffed Beds',
          ),
          1 => 'employees',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'beds_c',
            'label' => 'Beds',
          ),
          1 => 
          array (
            'name' => 'total_employees_c',
            'label' => 'Total Employees',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'annual_admissions_c',
            'label' => 'Annual Admissions',
          ),
          1 => 
          array (
            'name' => 'number_of_dictators_c',
            'label' => 'Number Of Dictators',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'annual_adj_patient_days_c',
            'label' => 'Annual Adj Patient Days',
          ),
          1 => 
          array (
            'name' => 'number_of_mts_c',
            'label' => 'Number Of MTs',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'annual_outpatient_visits_c',
            'label' => 'Annual Outpatient Visits',
          ),
          1 => 
          array (
            'name' => 'practice_physicians_c',
            'label' => 'LBL_PRACTICE_PHYSICIANS_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'annual_healthcare_visits_c',
            'label' => 'Annual Healthcare Visits',
          ),
          1 => 
          array (
            'name' => 'hospital_physicians_total_most_recent_c',
            'label' => 'LBL_HOSPITAL_PHYSICIANS_TOTAL_MOST_RECENT_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'of_hospitals_in_health_system_c',
            'label' => '# of Hospitals in Health System',
          ),
          1 => 
          array (
            'name' => 'admissions_c',
            'label' => 'LBL_ADMISSIONS_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'emram_stage_validated_c',
            'label' => 'EMRAM Stage (Validated)',
          ),
          1 => 
          array (
            'name' => 'births_c',
            'label' => 'Births',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'net_patient_revenues_c',
            'label' => 'Net Patient Revenues',
          ),
          1 => 
          array (
            'name' => 'cardiology_studies_c',
            'label' => 'Cardiology Studies',
          ),
        ),
        9 => 
        array (
          0 => 'annual_revenue',
          1 => 
          array (
            'name' => 'operating_rooms_c',
            'label' => 'Operating Rooms',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'total_inpatient_revenues_c',
            'label' => 'Total Inpatient Revenues',
          ),
          1 => 
          array (
            'name' => 'radiology_studies_c',
            'label' => 'Radiology Studies',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'operating_expense_c',
            'label' => 'Operating Expense',
          ),
          1 => 
          array (
            'name' => 'outpatient_visits_c',
            'label' => 'LBL_OUTPATIENT_VISITS_C',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cdi_buyer_c',
            'label' => 'CDI Buyer',
          ),
          1 => 
          array (
            'name' => 'cdi_status_c',
            'label' => 'CDI Status',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cdi_buyer_title_c',
            'label' => 'CDI Buyer Title',
          ),
          1 => 
          array (
            'name' => 'cdi_comments_c',
            'label' => 'CDI Comments',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'current_cdi_vendor_c',
            'label' => 'Current CDI Vendor',
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
            'name' => 'mtso_1_c',
            'label' => 'MTSO 1 Old',
          ),
          1 => 
          array (
            'name' => 'mq_tos_revenue_c',
            'label' => 'M*M TOS Revenue',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mtso_1_percent_c',
            'label' => 'MTSO 1 Percent',
          ),
          1 => 
          array (
            'name' => 'tos_rad_opp_size_c',
            'label' => 'TOS Rad Opp Size',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mtso_2_c',
            'label' => 'MTSO 2 Old',
          ),
          1 => 
          array (
            'name' => 'tos_contract_expiration_date_c',
            'label' => 'TOS Contract Expiration Date',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mtso_2_percent_c',
            'label' => 'MTSO 2 Percent',
          ),
          1 => 
          array (
            'name' => 'renewal_expiration_date_c',
            'label' => 'Renewal Expiration Date',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mtso_3_c',
            'label' => 'MTSO 3 Old',
          ),
          1 => 
          array (
            'name' => 'evergreen_c',
            'label' => 'Evergreen',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mtso_3_percent_c',
            'label' => 'MTSO 3 Percent',
          ),
          1 => 
          array (
            'name' => 'tos_budget_start_date_c',
            'label' => 'TOS Budget Start Date',
          ),
        ),
        6 => 
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
      'lbl_editview_panel5' => 
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
            'name' => 'rad_speech_rec_system_c',
            'label' => 'Rad Speech Rec System',
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
            'name' => 'rad_speech_rec_install_date_c',
            'label' => 'Rad Speech Rec Install Date',
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
            'name' => 'ris_c',
            'label' => 'RIS',
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
            'name' => 'ris_install_date_c',
            'label' => 'RIS Install Date',
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
            'name' => 'pacs_c',
            'label' => 'PACS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'transcription_system_c',
            'label' => 'Transcription System',
          ),
          1 => 
          array (
            'name' => 'pacs_install_date_c',
            'label' => 'PACS Install Date',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'transcription_install_date_c',
            'label' => 'Transcription Install Date',
          ),
          1 => 
          array (
            'name' => 'coding_system_c',
            'label' => 'Coding System',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'him_speech_rec_system_c',
            'label' => 'Him Speech Rec System',
          ),
          1 => 
          array (
            'name' => 'coding_system_install_date_c',
            'label' => 'Coding System Install Date',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'him_speech_rec_install_date_c',
            'label' => 'HIM Speech Rec Install Date',
          ),
          1 => 
          array (
            'name' => 'other_system_c',
            'label' => 'Other System',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'mobile_devices_c',
            'label' => 'Mobile Devices',
          ),
          1 => 
          array (
            'name' => 'other_system_install_date_c',
            'label' => 'Other System Install Date',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'mobile_devices_install_date_c',
            'label' => 'Mobile Devices Install Date',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'related_facilitities_c',
            'label' => 'Related Facilities',
          ),
          1 => 
          array (
            'name' => 'nih_rating_c',
            'label' => 'NIH Rating',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'himss_id_c',
            'label' => 'LBL_HIMSS_ID',
          ),
          1 => 
          array (
            'name' => 'defintive_id_c',
            'label' => 'LBL_DEFINTIVE_ID',
          ),
        ),
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'ucid_c',
            'label' => 'UCID',
          ),
          1 => 
          array (
            'name' => 'ig_id_c',
            'label' => 'IG Id',
          ),
        ),
      ),
    ),
  ),
);
?>
