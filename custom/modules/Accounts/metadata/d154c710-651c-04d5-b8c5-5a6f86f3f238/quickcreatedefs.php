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
        'LBL_EDITVIEW_PANEL8' => 
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
            'name' => 'industry',
            'comment' => 'The company belongs in this industry',
            'label' => 'LBL_INDUSTRY',
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
            'name' => 'account_type',
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
            'name' => 'recordtypeid_c',
            'label' => 'Record Type',
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
            'name' => 'zba_sss_c',
            'label' => 'ZBA SSS',
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
            'name' => 'mq_segmentation_c',
            'label' => 'M*M Segmentation',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'cms_medicare_number_c',
            'label' => 'LBL_CMS_MEDICARE_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'fed_department_c',
            'label' => 'Fed Department',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'organization_unique_id_c',
            'label' => 'LBL_ORGANIZATION_UNIQUE_ID_C',
          ),
          1 => 
          array (
            'name' => 'fed_agency_c',
            'label' => 'Fed Agency',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'organization_c',
            'label' => 'LBL_ORGANIZATION_C',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'organization_primary_service_c',
            'label' => 'Organization Primary Service',
          ),
          1 => 
          array (
            'name' => 'fiscal_end_date_month_c',
            'label' => 'Fiscal End Date Month',
          ),
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
            'studio' => 'visible',
            'label' => 'Imaging Owner',
          ),
          1 => 
          array (
            'name' => 'sales_territory_c',
            'label' => 'Sales Territory',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'account_management_region_c',
            'label' => 'Account Management Region',
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
            'name' => 'annual_healthcare_visits_c',
            'label' => 'Annual Healthcare Visits',
          ),
          1 => 
          array (
            'name' => 'emram_stage_validated_c',
            'label' => 'EMRAM Stage (Validated)',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'of_hospitals_in_health_system_c',
            'label' => '# of Hospitals in Health System',
          ),
          1 => 
          array (
            'name' => 'op_visits_c',
            'label' => 'OP Visits',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'practice_physicians_c',
            'label' => 'LBL_PRACTICE_PHYSICIANS_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'operating_expense_c',
            'label' => 'Operating Expense',
          ),
          1 => 
          array (
            'name' => 'admissions_c',
            'label' => 'LBL_ADMISSIONS_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'net_patient_revenues_c',
            'label' => 'Net Patient Revenues',
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
            'name' => 'total_inpatient_revenues_c',
            'label' => 'Total Inpatient Revenues',
          ),
          1 => 
          array (
            'name' => 'annual_outpatient_visits_c',
            'label' => 'Annual Outpatient Visits',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'employees',
            'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
            'label' => 'LBL_EMPLOYEES',
          ),
          1 => 
          array (
            'name' => 'annual_adj_patient_days_c',
            'label' => 'Annual Adj Patient Days',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'number_of_dictators_c',
            'label' => 'Number Of Dictators',
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
            'name' => 'hospital_physicians_total_most_recent_c',
            'label' => 'LBL_HOSPITAL_PHYSICIANS_TOTAL_MOST_RECENT_C',
          ),
          1 => 
          array (
            'name' => 'cardiology_studies_c',
            'label' => 'Cardiology Studies',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'total_employees_c',
            'label' => 'Total Employees',
          ),
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
            'name' => 'number_of_mts_c',
            'label' => 'Number Of MTs',
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
            'name' => 'staffed_beds_c',
            'label' => 'Staffed Beds',
          ),
          1 => 
          array (
            'name' => 'beds_c',
            'label' => 'Beds',
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
            'name' => 'tos_budget_start_date_c',
            'label' => 'TOS Budget Start Date',
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
            'name' => 'transcription_volumemonth_c',
            'label' => 'Transcription Volumemonth',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'transcription_uom_c',
            'label' => 'Transcription UOM',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'top_10_prospecting_c',
            'label' => 'Top 10 Prospecting',
          ),
          1 => 
          array (
            'name' => 'top_10_prospecting_start_date_c',
            'label' => 'Top 10 Prospecting Start Date',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'top_10_prospecting_status_c',
            'label' => 'Top 10 Prospecting Status',
          ),
          1 => 
          array (
            'name' => 'top_10_prospecting_reason_c',
            'label' => 'Top 10 Prospecting Reason',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'radiology_top_10_c',
            'label' => 'Radiology Top 10',
          ),
          1 => 
          array (
            'name' => 'radiology_top_10_start_date_c',
            'label' => 'Radiology Top 10 Start Date',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'radiology_top_10_status_c',
            'label' => 'Radiology Top 10 Status',
          ),
          1 => 
          array (
            'name' => 'radiology_top_10_reason_c',
            'label' => 'Radiology Top 10 Reason',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'kam_c',
            'label' => 'KAM',
          ),
          1 => 
          array (
            'name' => 'levers_dials_date_c',
            'label' => 'Levers Dials Date',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'isr_prospecting_c',
            'label' => 'ISR Prospecting',
          ),
          1 => 
          array (
            'name' => 'isr_rad_prospecting_c',
            'label' => 'ISR Rad Prospecting',
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
          1 => 
          array (
            'name' => 'related_facilitities_c',
            'label' => 'Related Facilities',
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
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'slx_account_id_c',
            'label' => 'SLX Account ID',
          ),
          1 => 
          array (
            'name' => 'himss_id_c',
            'label' => 'LBL_HIMSS_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'defintive_id_c',
            'label' => 'LBL_DEFINTIVE_ID',
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
            'name' => 'ucid_c',
            'label' => 'UCID',
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
