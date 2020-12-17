<?php
// created: 2020-09-03 14:48:17
$viewdefs['Employees']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'customCode' => '{if $DISPLAY_EDIT}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_EDIT_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_EDIT_BUTTON_TITLE}',
              'accessKey' => '{$APP.LBL_EDIT_BUTTON_KEY}',
              'class' => 'button',
              'onclick' => 'this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\';',
              'id' => 'edit_button',
              'name' => 'Edit',
            ),
            'template' => '{if $DISPLAY_EDIT}[CONTENT]{/if}',
          ),
        ),
        1 => 
        array (
          'customCode' => '{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'     ; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_DUPLICATE_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_DUPLICATE_BUTTON_TITLE}',
              'accessKey' => '{$APP.LBL_DUPLICATE_BUTTON_KEY}',
              'class' => 'button',
              'onclick' => 'this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\';',
              'name' => 'Duplicate',
              'id' => 'duplicate_button',
            ),
            'template' => '{if $DISPLAY_DUPLICATE}[CONTENT]{/if}',
          ),
        ),
        2 => 
        array (
          'customCode' => '{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="if( confirm(\'{$DELETE_WARNING}\') ) {ldelim} this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'index\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'delete\'; this.form.submit();{rdelim}" type="button" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}',
          'sugar_html' => 
          array (
            'type' => 'button',
            'value' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'accessKey' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'class' => 'button',
              'onclick' => 'if( confirm(\'{$DELETE_WARNING}\') ) {ldelim} this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'index\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'delete\'; this.form.submit();{rdelim}',
              'name' => 'Delete',
              'id' => 'delete_button',
            ),
            'template' => '{if $DISPLAY_DELETE}[CONTENT]{/if}',
          ),
        ),
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
    'useTabs' => true,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'first_name',
          'label' => 'LBL_FIRST_NAME',
        ),
        1 => 
        array (
          'name' => 'last_name',
          'label' => 'LBL_LAST_NAME',
        ),
      ),
      1 => 
      array (
        0 => 'employee_status',
        1 => 
        array (
          'name' => 'work_location_c',
          'label' => 'LBL_WORK_LOCATION',
        ),
      ),
      2 => 
      array (
        0 => 'title',
        1 => 'phone_work',
      ),
      3 => 
      array (
        0 => 'department',
        1 => 'reports_to_name',
      ),
      4 => 
      array (
        0 => 'address_country',
        1 => 
        array (
          'name' => 'employee_uid_c',
          'label' => 'LBL_EMPLOYEE_UID',
        ),
      ),
      5 => 
      array (
        0 => 'email1',
        1 => 
        array (
          'name' => 'payroll_company_c',
          'label' => 'LBL_PAYROLL_COMPANY',
        ),
      ),
    ),
  ),
);