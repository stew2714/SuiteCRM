<?php
$viewdefs = array (
  'AOS_Contracts' => 
  array (
    'CreateView' => 
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
        'useTabs' => true,
        'syncDetailEditViews' => false,
        'tabDefs' => 
        array (
          'OPP_LBL_EDITVIEW_PANEL2' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'OPP_LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LEA_LBL_CONTACT_INFORMATION' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LEA_LBL_PANEL_ADVANCED' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LEA_LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'CON_LBL_CONTACT_INFORMATION' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'CON_LBL_PANEL_ADVANCED' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'DEFAULT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_LINE_ITEMS' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 'status',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'total_contract_value',
              'label' => 'LBL_TOTAL_CONTRACT_VALUE',
            ),
            1 => 'assigned_user_name',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
            ),
            1 => 'contract_account',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE',
            ),
            1 => 'contact',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'renewal_reminder_date',
              'label' => 'LBL_RENEWAL_REMINDER_DATE',
              'type' => 'datetimecombo',
            ),
            1 => 'opportunity',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'customer_signed_date',
              'label' => 'LBL_CUSTOMER_SIGNED_DATE',
            ),
            1 => 'contract_type',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'company_signed_date',
              'label' => 'LBL_COMPANY_SIGNED_DATE',
            ),
          ),
          7 => 
          array (
            0 => 'description',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'requested_user_id',
              'label' => 'LBL_REQUESTED_USER_ID',
            ),
          ),
        ),
        'lbl_line_items' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'currency_id',
              'studio' => 'visible',
              'label' => 'LBL_CURRENCY',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'line_items',
              'label' => 'LBL_LINE_ITEMS',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'total_amt',
              'label' => 'LBL_TOTAL_AMT',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'discount_amount',
              'label' => 'LBL_DISCOUNT_AMOUNT',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'subtotal_amount',
              'label' => 'LBL_SUBTOTAL_AMOUNT',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'shipping_amount',
              'label' => 'LBL_SHIPPING_AMOUNT',
              'displayParams' => 
              array (
                'field' => 
                array (
                  'onblur' => 'calculateTotal(\'lineItems\');',
                ),
              ),
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'shipping_tax_amt',
              'label' => 'LBL_SHIPPING_TAX_AMT',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'tax_amount',
              'label' => 'LBL_TAX_AMOUNT',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'total_amount',
              'label' => 'LBL_GRAND_TOTAL',
            ),
          ),
        ),
        'con_lbl_contact_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'con_first_name',
              'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            ),
            1 => 'con_last_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_phone_work',
              'comment' => 'Work phone number of the contact',
              'label' => 'LBL_OFFICE_PHONE',
            ),
            1 => 'con_phone_mobile',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'con_title',
              'comment' => 'The title of the contact',
              'label' => 'LBL_TITLE',
            ),
            1 => 'con_department',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'con_account_name',
              'displayParams' => 
              array (
                'key' => 'billing',
                'copy' => 'primary',
                'billingKey' => 'primary',
                'additionalFields' => 
                array (
                  'phone_office' => 'phone_work',
                ),
              ),
            ),
            1 => 'con_phone_fax',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'con_email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL_ADDRESS',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'con_primary_address_street',
              'hideLabel' => true,
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
                'rows' => 2,
                'cols' => 30,
                'maxlength' => 150,
              ),
            ),
            1 => 'con_alt_address_street',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'con_description',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'con_assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
            ),
          ),
        ),
        'con_LBL_PANEL_ADVANCED' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'con_lead_source',
              'comment' => 'How did the contact come about',
              'label' => 'LBL_LEAD_SOURCE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'con_report_to_name',
              'label' => 'LBL_REPORTS_TO',
            ),
            1 => 'con_campaign_name',
          ),
        ),
        'lea_LBL_CONTACT_INFORMATION' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'lea_first_name',
              'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            ),
          ),
          1 => 
          array (
            0 => 'lea_last_name',
            1 => 'lea_phone_work',
          ),
          2 => 
          array (
            0 => 'lea_title',
            1 => 'lea_phone_mobile',
          ),
          3 => 
          array (
            0 => 'lea_department',
            1 => 'lea_phone_fax',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'lea_account_name',
              'type' => 'varchar',
              'validateDependency' => false,
              'customCode' => '<input name="account_name" id="EditView_account_name" {if ($fields.converted.value == 1)}disabled="true"{/if} size="30" maxlength="255" type="text" value="{$fields.account_name.value}">',
            ),
            1 => 'lea_website',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'lea_primary_address_street',
              'hideLabel' => true,
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
                'rows' => 2,
                'cols' => 30,
                'maxlength' => 150,
              ),
            ),
            1 => 'lea_alt_address_street',
          ),
          6 => 
          array (
            0 => 'lea_email1',
          ),
          7 => 
          array (
            0 => 'lea_description',
          ),
        ),
        'lea_LBL_PANEL_ADVANCED' => 
        array (
          0 => 
          array (
            0 => 'lea_status',
            1 => 'lea_lead_source',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'lea_status_description',
            ),
            1 => 'lea_lead_source_description',
          ),
          2 => 
          array (
            0 => 'lea_opportunity_amount',
            1 => 'lea_refered_by',
          ),
          3 => 
          array (
            0 => 'lea_campaign_name',
          ),
        ),
        'lea_LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'lea_assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
        ),
        'opp_lbl_editview_panel2' => 
        array (
          0 => 
          array (
            0 => 'opp_sales_stage',
            1 => 'opp_lead_source',
          ),
          1 => 
          array (
            0 => 'opp_probability',
            1 => 'opp_campaign_name',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'opp_amount',
            ),
            1 => 'opp_opportunity_type',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'opp_name',
            ),
            1 => 'opp_account_name',
          ),
          4 => 
          array (
            0 => 'opp_next_step',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'opp_currency_id',
              'label' => 'LBL_CURRENCY',
            ),
            1 => 'opp_date_closed',
          ),
          6 => 
          array (
          ),
          7 => 
          array (
            0 => 'opp_description',
          ),
          8 => 
          array (
          ),
        ),
        'opp_LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 'opp_assigned_user_name',
          ),
        ),
      ),
    ),
  ),
);
?>
