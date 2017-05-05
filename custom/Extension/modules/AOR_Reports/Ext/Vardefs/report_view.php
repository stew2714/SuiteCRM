<?php
/**
 * Created by PhpStorm.
 * User: kieran
 * Date: 01/05/17
 * Time: 11:31
 */

$dictionary['AOR_Report']['fields']['private_to_user_or_group']=  array(
    'required' => false,
    'name' => 'private_to_user_or_group',
    'vname' => 'LBL_PRIVATE_USER_OR_GROUP',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'private_user_or_group',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['AOR_Report']['fields']['private_user_list']=  array(
    'name' => 'private_user_list',
    'vname' => 'LBL_PRIVATE_USERS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'report_private_users',
    'studio' => 'visible',
    'dependency' => false,
    'inline_edit' => false,
);

$dictionary['AOR_Report']['fields']['private_group_list']=  array(
    'name' => 'private_group_list',
    'vname' => 'LBL_PRIVATE_GROUPS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'report_private_groups',
    'studio' => 'visible',
    'inline_edit' => false,
    'dependency' => false,
);

$dictionary['AOR_Report']['fields']['private_report_checkbox']= array (
    'name' => 'private_report_checkbox',
    'vname' => 'LBL_PRIVATE_REPORT_CHECKBOX',
    'type' => 'bool',
    'link' => true,
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => false,
    'reportable' => true,
    'size' => '20',
);