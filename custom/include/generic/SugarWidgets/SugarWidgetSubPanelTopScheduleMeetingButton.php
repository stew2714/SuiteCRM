<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SugarWidgetSubPanelTopScheduleMeetingButton extends SugarWidgetSubPanelTopButton{
    var $module = 'Meetings';
    var $title = 'Schedule Meeting';
    var $access_key;
    var $form_value;
    var $additional_form_fields;
    var $acl;

    function __construct($module = '', $title = '', $access_key = '', $form_value = '')
    {
        parent::__construct($module, $title, $access_key, $form_value);
    }
}