<?php
// created: 2020-10-16 16:08:36
$viewdefs['AOR_Scheduled_Reports']['DetailView'] = array (
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
        1 => 'last_run',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'email_recipients',
          'label' => 'LBL_EMAIL_RECIPIENTS',
        ),
      ),
      5 => 
      array (
        0 => 'description',
      ),
    ),
  ),
);