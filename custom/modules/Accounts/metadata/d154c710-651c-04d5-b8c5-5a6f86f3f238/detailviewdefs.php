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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => true,
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
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
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
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
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
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
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
            'comment' => 'URL of website for the company',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'mq_segmentation_c',
            'label' => 'M*M Segmentation',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'fed_department_c',
            'label' => 'Fed Department',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'fed_agency_c',
            'label' => 'Fed Agency',
          ),
        ),
        8 => 
        array (
          0 => '',
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'himss_id_c',
            'label' => 'LBL_HIMSS_ID',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'organization_primary_service_c',
            'label' => 'Organization Primary Service',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'fiscal_end_date_month_c',
            'label' => 'Fiscal End Date Month',
          ),
          1 => '',
        ),
        12 => 
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
      'lbl_editview_panel2' => 
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
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'operating_expense_c',
            'label' => 'Operating Expense',
          ),
          1 => '',
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
            'name' => 'number_of_physicians_c',
            'label' => 'Number Of Physicians',
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
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'beds_c',
            'label' => 'Beds',
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
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
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
            'name' => 'related_facilitities_c',
            'label' => 'Related Facilities',
          ),
        ),
        4 => 
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
            'label' => 'LBL_UCID',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
