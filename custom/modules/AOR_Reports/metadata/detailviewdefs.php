<?php
// created: 2020-09-03 14:48:17
$viewdefs['AOR_Reports']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 
        array (
          'customCode' => '<input type="button" class="button" id="download_csv_button_old" value="{$MOD.LBL_EXPORT}">',
        ),
        4 => 
        array (
          'customCode' => '<input type="button" class="button" id="download_pdf_button_old" value="{$MOD.LBL_DOWNLOAD_PDF}">',
        ),
        5 => 
        array (
          'customCode' => '<input type="button" class="button" onClick="openProspectPopup();" value="{$MOD.LBL_ADD_TO_PROSPECT_LIST}">',
        ),
      ),
      'footerTpl' => 'modules/AOR_Reports/tpls/report.tpl',
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
        'file' => 'modules/AOR_Reports/AOR_Report.js',
      ),
    ),
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'collapsed',
      ),
    ),
    'useTabs' => false,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'name',
        1 => 'assigned_user_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          'label' => 'LBL_DATE_ENTERED',
        ),
        1 => 
        array (
          'name' => 'date_modified',
          'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          'label' => 'LBL_DATE_MODIFIED',
        ),
      ),
      2 => 
      array (
        0 => 'description',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'snapshot_date',
          'studio' => 
          array (
            'required' => true,
            'no_duplicate' => true,
          ),
          'label' => 'LBL_SNAPSHOT_DATE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'report_module',
          'studio' => 'visible',
          'label' => 'LBL_REPORT_MODULE',
        ),
        1 => '',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'private_report_checkbox',
          'label' => 'LBL_PRIVATE_REPORT_CHECKBOX',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'private_to_user_or_group',
          'studio' => 'visible',
          'label' => 'LBL_PRIVATE_USER_OR_GROUP',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'private_user_list',
          'studio' => 'visible',
          'label' => 'LBL_PRIVATE_USERS',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'private_group_list',
          'studio' => 'visible',
          'label' => 'LBL_PRIVATE_GROUPS',
        ),
      ),
    ),
  ),
);