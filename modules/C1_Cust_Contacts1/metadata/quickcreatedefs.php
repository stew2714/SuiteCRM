<?php
$module_name = 'C1_Cust_Contacts1';
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
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
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
            'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
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
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
        3 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'contact_type',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_TYPE',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sales',
            'label' => 'LBL_SALES',
          ),
          1 => 
          array (
            'name' => 'survey',
            'label' => 'LBL_SURVEY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'operational',
            'label' => 'LBL_OPERATIONAL',
          ),
          1 => 
          array (
            'name' => 'technical',
            'label' => 'LBL_TECHNICAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'release_notification',
            'label' => 'LBL_RELEASE_NOTIFICATION',
          ),
          1 => 
          array (
            'name' => 'accounting_invoices',
            'label' => 'LBL_ACCOUNTING_INVOICES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'marketing',
            'label' => 'LBL_MARKETING',
          ),
          1 => 
          array (
            'name' => 'business_ceo',
            'label' => 'LBL_BUSINESS_CEO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reference_program',
            'label' => 'LBL_REFERENCE_PROGRAM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reference_start_date',
            'label' => 'LBL_REFERENCE_START_DATE',
          ),
          1 => 
          array (
            'name' => 'reference_end_date',
            'label' => 'LBL_REFERENCE_END_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reference_association',
            'studio' => 'visible',
            'label' => 'LBL_REFERENCE_ASSOCIATION',
          ),
          1 => 
          array (
            'name' => 'referenced_emr',
            'studio' => 'visible',
            'label' => 'LBL_REFERENCED_EMR',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contact_association',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_ASSOCIATION',
          ),
        ),
      ),
    ),
  ),
);
?>
