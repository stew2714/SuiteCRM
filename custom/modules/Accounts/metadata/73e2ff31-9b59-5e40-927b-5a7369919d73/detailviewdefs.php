<?php
$viewdefs ['Accounts'] = 
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
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
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
        'LBL_DETAILVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL11' => 
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
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
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
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'recordtypeid_c',
            'label' => 'Record Type',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'facility_type_dd_c',
            'studio' => 'visible',
            'label' => 'LBL_FACILITY_TYPE_DD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
          1 => 
          array (
            'name' => 'account_type_c',
            'label' => 'Account Type',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'health_system_type_c',
            'label' => 'LBL_HEALTH_SYSTEM_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'profit_non_profit_c',
            'label' => 'Profit Non Profit',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'idn_affiliated_c',
            'label' => 'IDN Affiliated',
          ),
          1 => 
          array (
            'name' => 'ownership',
            'label' => 'LBL_OWNERSHIP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'gpo_affiliation_name_c',
            'studio' => 'visible',
            'label' => 'GPO',
          ),
          1 => 
          array (
            'name' => 'zba_sss_c',
            'label' => 'ZBA SSS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'mq_segmentation_c',
            'label' => 'M*M Segmentation',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'fed_department_c',
            'label' => 'Fed Department',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'comment' => 'URL of website for the company',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'fed_agency_c',
            'label' => 'Fed Agency',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'imaging_group_c',
            'label' => 'LBL_IMAGING_GROUP',
          ),
          1 => 
          array (
            'name' => 'it_region_c',
            'label' => 'IT Region',
          ),
        ),
      ),
      'lbl_detailview_panel8' => 
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
            'name' => 'sales_region_c',
            'label' => 'Sales Region',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'imaging_owner_name_c',
            'label' => 'Imaging Owner',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'of_hospitals_in_health_system_c',
            'label' => '# of Hospitals in Health System',
          ),
          1 => 
          array (
            'name' => 'beds_c',
            'label' => 'Beds',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number_of_hospitals_c',
            'label' => 'Number Of Hospitals',
          ),
          1 => 
          array (
            'name' => 'staffed_beds_c',
            'label' => 'Staffed Beds',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'emram_stage_validated_c',
            'label' => 'EMRAM Stage (Validated)',
          ),
          1 => 
          array (
            'name' => 'fiscal_end_date_month_c',
            'label' => 'Fiscal End Date Month',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'hospital_physicians_total_most_recent_c',
            'label' => 'LBL_HOSPITAL_PHYSICIANS_TOTAL_MOST_RECENT_C',
          ),
          1 => 
          array (
            'name' => 'organization_primary_service_c',
            'label' => 'Organization Primary Service',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'employees',
            'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
            'label' => 'LBL_EMPLOYEES',
          ),
          1 => 
          array (
            'name' => 'annual_admissions_c',
            'label' => 'Annual Admissions',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_employees_c',
            'label' => 'Total Employees',
          ),
          1 => 
          array (
            'name' => 'annual_adj_patient_days_c',
            'label' => 'Annual Adj Patient Days',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'net_patient_revenues_c',
            'label' => 'Net Patient Revenues',
          ),
          1 => 
          array (
            'name' => 'annual_outpatient_visits_c',
            'label' => 'Annual Outpatient Visits',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'total_inpatient_revenues_c',
            'label' => 'Total Inpatient Revenues',
          ),
          1 => 
          array (
            'name' => 'imaging_exam_volume_c',
            'label' => 'Imaging Exam Volume',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'births_c',
            'label' => 'Births',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'operating_expense_c',
            'label' => 'Operating Expense',
          ),
          1 => 
          array (
            'name' => 'cardiology_studies_c',
            'label' => 'Cardiology Studies',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'operating_rooms_c',
            'label' => 'Operating Rooms',
          ),
          1 => 
          array (
            'name' => 'radiology_studies_c',
            'label' => 'Radiology Studies',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mtso_1_name_c',
            'label' => 'MTSO 1',
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
            'name' => 'tos_opportunity_size_c',
            'label' => 'TOS Opportunity Size',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mtso_2_name_c',
            'label' => 'MTSO 2',
          ),
          1 => 
          array (
            'name' => 'tos_rad_opp_size_c',
            'label' => 'TOS Rad Opp Size',
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
            'name' => 'tos_contract_expiration_date_c',
            'label' => 'TOS Contract Expiration Date',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mtso_3_name_c',
            'label' => 'MTSO 3',
          ),
          1 => 
          array (
            'name' => 'renewal_expiration_date_c',
            'label' => 'Renewal Expiration Date',
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
            'name' => 'evergreen_c',
            'label' => 'Evergreen',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'tos_budget_start_date_c',
            'label' => 'TOS Budget Start Date',
          ),
          1 => 
          array (
            'name' => 'identified_pricedown_target_c',
            'label' => 'Identified Pricedown Target',
          ),
        ),
        7 => 
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
      'lbl_detailview_panel11' => 
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
          1 => 
          array (
            'name' => 'cdi_target_c',
            'label' => 'CDI Target',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cdi_target_w_fd_c',
            'label' => 'CDI Target W Fd',
          ),
          1 => 
          array (
            'name' => 'cdi_tos_check_c',
            'label' => 'CDI TOS Check',
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
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
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
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'slx_account_id_c',
            'label' => 'SLX Account ID',
          ),
          1 => 
          array (
            'name' => 'billians_id_c',
            'label' => 'Billians ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ucid_c',
            'label' => 'LBL_UCID',
          ),
          1 => 
          array (
            'name' => 'medicare_id_c',
            'label' => 'Medicare ID',
          ),
        ),
        4 => 
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
