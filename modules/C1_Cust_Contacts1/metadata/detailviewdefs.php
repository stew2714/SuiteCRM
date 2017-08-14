<?php
$module_name = 'C1_Cust_Contacts1';
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
      'syncDetailEditViews' => true,
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
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
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
          0 => 'primary_address_street',
          1 => 'alt_address_street',
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
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
