<?php
$viewdefs ['Contacts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          5 => '{if !empty($smarty.request.contact_id)}<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">{/if}',
          6 => '{if !empty($smarty.request.contact_name)}<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">{/if}',
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
        'LBL_CONTACT_INFORMATION' => 
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'active_c',
            'label' => 'LBL_ACTIVE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => 
          array (
            'name' => 'phone_work',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'title',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'standard_title_c',
            'label' => 'Standard Title',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'department',
            'comment' => 'The department of the contact',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 
          array (
            'name' => 'email1',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'source_c',
            'label' => 'Source',
          ),
          1 => 
          array (
            'name' => 'contact_type_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_TYPE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'comment' => 'Street address for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'comment' => 'Street address for alternate address',
            'label' => 'LBL_ALT_ADDRESS_STREET',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fft_admin_c',
            'label' => 'LBL_FFT_ADMIN',
          ),
          1 => 
          array (
            'name' => 'sales_c',
            'label' => 'LBL_SALES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fd_admin_c',
            'label' => 'LBL_FD_ADMIN',
          ),
          1 => 
          array (
            'name' => 'marketing_c',
            'label' => 'LBL_MARKETING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'operational_c',
            'label' => 'LBL_OPERATIONAL',
          ),
          1 => 
          array (
            'name' => 'release_notification_c',
            'label' => 'LBL_RELEASE_NOTIFICATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'technical_c',
            'label' => 'LBL_TECHNICAL',
          ),
          1 => 
          array (
            'name' => 'accounting_invoices_c',
            'label' => 'LBL_ACCOUNTING_INVOICES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'survey_c',
            'label' => 'LBL_SURVEY',
          ),
          1 => 
          array (
            'name' => 'business_ceo_c',
            'label' => 'LBL_BUSINESS_CEO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contact_association_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_ASSOCIATION',
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
            'name' => 'reference_program_c',
            'label' => 'LBL_REFERENCE_PROGRAM',
          ),
          1 => 
          array (
            'name' => 'reference_type_c',
            'studio' => 'visible',
            'label' => 'LBL_REFERENCE_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reference_start_date_c',
            'label' => 'LBL_REFERENCE_START_DATE',
          ),
          1 => 
          array (
            'name' => 'reference_end_date_c',
            'label' => 'LBL_REFERENCE_END_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reference_association_c',
            'label' => 'LBL_REFERENCE_ASSOCIATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'emr_1_c',
            'studio' => 'visible',
            'label' => 'LBL_EMR_1',
          ),
          1 => 
          array (
            'name' => 'emr_1_modules_c',
            'studio' => 'visible',
            'label' => 'LBL_EMR_1_MODULES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'emr_1_description_c',
            'label' => 'LBL_EMR_1_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'emr_2_c',
            'studio' => 'visible',
            'label' => 'LBL_EMR_2',
          ),
          1 => 
          array (
            'name' => 'emr_2_modules_c',
            'studio' => 'visible',
            'label' => 'LBL_EMR_2_MODULES',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'emr_2_description_c',
            'label' => 'LBL_EMR_2_DESCRIPTION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'emr_other_c',
            'label' => 'LBL_EMR_OTHER',
          ),
          1 => 
          array (
            'name' => 'other_emr_modules_c',
            'label' => 'LBL_OTHER_EMR_MODULES',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'emr_other_description_c',
            'label' => 'LBL_EMR_OTHER_DESCRIPTION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assistant',
            'comment' => 'Name of the assistant of the contact',
            'label' => 'LBL_ASSISTANT',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'label' => 'Status',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'asst_email_c',
            'label' => 'Asst Email',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assistant_phone',
            'comment' => 'Phone number of the assistant of the contact',
            'label' => 'LBL_ASSISTANT_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'do_not_call',
          ),
          1 => 
          array (
            'name' => 'eloqua_lead_rating_c',
            'label' => 'Eloqua Lead Rating',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sync_to_eloqua_c',
            'label' => 'Sync To Eloqua',
          ),
          1 => 
          array (
            'name' => 'vip_account_c',
            'label' => 'VIP Account',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
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
