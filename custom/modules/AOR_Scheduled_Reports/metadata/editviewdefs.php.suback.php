<?php
// created: 2020-09-03 14:48:17
$viewdefs['AOR_Scheduled_Reports']['EditView'] = array (
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
      'LBL_SCHEDULED_REPORTS_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'lbl_scheduled_reports_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'report_email_template_c',
          'studio' => 'visible',
          'label' => 'LBL_REPORT_EMAIL_TEMPLATE_C',
        ),
        1 => 
        array (
          'name' => 'report_format_c',
          'label' => 'LBL_REPORT_FORMAT_C',
        ),
      ),
      1 => 
      array (
        0 => 'name',
        1 => 'status',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'aor_report_name',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'schedule',
          'label' => 'LBL_SCHEDULE',
        ),
        1 => 
        array (
          'name' => 'last_run',
          'displayParams' => 
          array (
            'readOnly' => true,
          ),
        ),
      ),
      4 => 
      array (
        0 => 'email_recipients',
      ),
      5 => 
      array (
        0 => 'description',
      ),
    ),
  ),
);