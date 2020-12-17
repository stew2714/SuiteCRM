<?php
// created: 2020-09-03 14:48:17
$viewdefs['Employees']['EditView'] = array (
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
        0 => 'first_name',
        1 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
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
        0 => 
        array (
          'name' => 'title',
          'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.title.name}" id="{$fields.title.name}" size="30" maxlength="50" value="{$fields.title.value}" title="" tabindex="t" >{else}{$fields.title.value}<input type="hidden" name="{$fields.title.name}" id="{$fields.title.name}" value="{$fields.title.value}">{/if}',
        ),
        1 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_OFFICE_PHONE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'department',
          'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.department.name}" id="{$fields.department.name}" size="30" maxlength="50" value="{$fields.department.value}" title="" tabindex="t" >{else}{$fields.department.value}<input type="hidden" name="{$fields.department.name}" id="{$fields.department.name}" value="{$fields.department.value}">{/if}',
        ),
        1 => 
        array (
          'name' => 'reports_to_name',
          'label' => 'LBL_REPORTS_TO_NAME',
          'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.reports_to_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name}" size="" value="{$fields.reports_to_name.value}" title="" autocomplete="off" >{$REPORTS_TO_JS}<input type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}"> <span class="id-ff multiple"><button type="button" name="btn_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick=\'open_popup("{$fields.reports_to_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}{/literal}, "single", true);\'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.reports_to_name.name}.value = \'\'; this.form.{$fields.reports_to_id.name}.value = \'\';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button></span>{else}{$fields.reports_to_name.value}<input type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}">{/if}',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'address_country',
          'label' => 'LBL_COUNTRY',
        ),
        1 => 
        array (
          'name' => 'employee_uid_c',
          'label' => 'LBL_EMPLOYEE_UID',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'email1',
          'label' => 'LBL_EMAIL',
        ),
        1 => 
        array (
          'name' => 'payroll_company_c',
          'label' => 'LBL_PAYROLL_COMPANY',
        ),
      ),
    ),
  ),
);