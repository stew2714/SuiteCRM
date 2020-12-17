<?php
// created: 2020-09-03 14:48:17
$viewdefs['Users']['EditView'] = array (
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
    'form' => 
    array (
      'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
      'footerTpl' => 'custom/modules/Users/tpls/EditViewFooter.tpl',
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => false,
  ),
  'panels' => 
  array (
    'LBL_USER_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'user_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'first_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'last_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'UserType',
          'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
        ),
      ),
    ),
    'LBL_EMPLOYEE_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'employee_status',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$EMPLOYEE_STATUS_READONLY}{/if}',
        ),
        1 => 'show_on_employees',
      ),
      1 => 
      array (
        0 => 'phone_work',
        1 => 
        array (
          'name' => 'employee_uid_c',
          'label' => 'LBL_EMPLOYEE_UID',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'title',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$TITLE_READONLY}{/if}',
        ),
        1 => 'phone_mobile',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'department',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$DEPT_READONLY}{/if}',
        ),
        1 => 
        array (
          'name' => 'payroll_company_c',
          'label' => 'LBL_PAYROLL_COMPANY',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'reports_to_name',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$REPORTS_TO_READONLY}{/if}',
        ),
      ),
      5 => 
      array (
        0 => 'phone_home',
        1 => 'phone_other',
      ),
      6 => 
      array (
        0 => 'messenger_type',
        1 => 'messenger_id',
      ),
      7 => 
      array (
        0 => 'address_street',
        1 => 'address_city',
      ),
      8 => 
      array (
        0 => 'address_state',
        1 => 'address_postalcode',
      ),
      9 => 
      array (
        0 => 'address_country',
      ),
      10 => 
      array (
        0 => 'description',
      ),
      11 => 
      array (
        0 => 
        array (
          'name' => 'work_location_c',
          'label' => 'LBL_WORK_LOCATION',
        ),
        1 => 'photo',
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'email_address_c',
          'label' => 'LBL_EMAIL_ADDRESS',
        ),
        1 => 
        array (
          'name' => 'email_password_c',
          'label' => 'LBL_EMAIL_PASSWORD',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'exchange_version_c',
          'studio' => 'visible',
          'label' => 'LBL_EXCHANGE_VERSION',
        ),
        1 => 
        array (
          'name' => 'exchange_host_c',
          'label' => 'LBL_EXCHANGE_HOST',
        ),
      ),
    ),
  ),
);