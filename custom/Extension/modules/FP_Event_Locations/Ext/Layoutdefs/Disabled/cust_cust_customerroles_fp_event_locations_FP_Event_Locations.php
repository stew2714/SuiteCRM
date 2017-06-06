<?php
 // created: 2016-03-04 16:31:32
$layout_defs["FP_Event_Locations"]["subpanel_setup"]['cust_cust_customerroles_fp_event_locations'] = array (
  'order' => 100,
  'module' => 'cust_cust_CustomerRoles',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUST_CUST_CUSTOMERROLES_FP_EVENT_LOCATIONS_FROM_CUST_CUST_CUSTOMERROLES_TITLE',
  'get_subpanel_data' => 'cust_cust_customerroles_fp_event_locations',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
