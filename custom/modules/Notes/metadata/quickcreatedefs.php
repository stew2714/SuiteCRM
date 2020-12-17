<?php
// created: 2020-10-16 16:08:37
$viewdefs['Notes']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
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
    'javascript' => '{sugar_getscript file="include/javascript/dashlets.js"}
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_NOTE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_note_information' => 
    array (
      0 => 
      array (
        0 => 'parent_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_SUBJECT',
          'displayParams' => 
          array (
            'size' => 50,
            'required' => true,
          ),
        ),
      ),
      2 => 
      array (
        0 => 'filename',
      ),
      3 => 
      array (
        0 => 'contact_name',
        1 => 
        array (
          'name' => 'description',
          'label' => 'LBL_NOTE_STATUS',
          'displayParams' => 
          array (
            'rows' => 6,
            'cols' => 75,
          ),
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
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
);