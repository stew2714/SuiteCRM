<?php
$viewdefs ['AOR_Reports'] = 
array (
  'EditView' => 
  array (
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
          1 => '',
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
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'graphs_per_row',
            'label' => 'LBL_GRAPHS_PER_ROW',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
