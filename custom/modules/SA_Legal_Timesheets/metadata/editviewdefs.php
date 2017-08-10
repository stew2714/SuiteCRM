<?php
$module_name = 'SA_Legal_Timesheets';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          1 => 
          array (
            'name' => 'category_c',
            'comment' => '',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_sa_legal_timesheets_1_name',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_c',
            'comment' => '',
            'label' => 'LBL_DATE',
          ),
          1 => 
          array (
            'name' => 'lastactivitydate_c',
            'comment' => '',
            'label' => 'LBL_LAST_ACTIVITY_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'hours_c',
            'label' => 'LBL_HOURS',
          ),
          1 => 
          array (
            'name' => 'date2_c',
            'comment' => '',
            'label' => 'LBL_DATE2',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'additional_notes_c',
            'comment' => '',
            'label' => 'LBL_ADDITIONAL_NOTES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'additional_notes',
            'comment' => '',
          ),
        ),
        6 => 
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
