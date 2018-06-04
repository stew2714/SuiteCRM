<?php
 // created: 2017-07-26 14:09:30
$layout_defs["AOS_Contracts"]["subpanel_setup"]['aos_contracts_amendments'] = array (
  'order' => 1,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_CONTRACTS_AMENDMENTS_TITLE',
  'get_subpanel_data' => 'function:getAmendments',
  'set_subpanel_data' => 'aos_contracts',
  'function_parameters' => array ('import_function_file' => 'custom/application/Ext/Utils/custom_utils.ext.php'),
);
