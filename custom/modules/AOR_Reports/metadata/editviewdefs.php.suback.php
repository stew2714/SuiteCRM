<?php
// created: 2020-09-03 14:48:17
$viewdefs['AOR_Reports']['EditView'] = array (
  'templateMeta' => 
  array (
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/AOR_Reports/AOR_Report.js',
      ),
      1 => 
      array (
        'file' => 'custom/modules/AOR_Reports/preview.js',
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
    'form' => 
    array (
      'headerTpl' => 'modules/AOR_Reports/tpls/EditViewHeader.tpl',
      'footerTpl' => 'custom/modules/AOR_Reports/tpls/EditViewFooter.tpl',
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
        2 => 
        array (
          'customCode' => '<input type="button" class="button" onClick="UpdatePreview(\'preview\');" value="{$MOD.LBL_RUN_PREVIEW}">',
        ),
      ),
    ),
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
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
        1 => 'assigned_user_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'report_module',
          'studio' => 'visible',
          'label' => 'LBL_REPORT_MODULE',
        ),
      ),
      2 => 
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
      3 => 
      array (
        0 => 
        array (
          'name' => 'graphs_per_row',
          'label' => 'LBL_GRAPHS_PER_ROW',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'private_report_checkbox',
          'label' => 'LBL_PRIVATE_REPORT_CHECKBOX',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'private_to_user_or_group',
          'studio' => 'visible',
          'label' => 'LBL_PRIVATE_USER_OR_GROUP',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'private_user_list',
          'studio' => 'visible',
          'label' => 'LBL_PRIVATE_USERS',
        ),
      ),
      7 => 
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