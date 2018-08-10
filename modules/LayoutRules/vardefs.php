<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['LayoutRules'] = array(
    'table' => 'layoutrules',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'flow_module' =>
            array(
                'required' => true,
                'name' => 'flow_module',
                'vname' => 'LBL_FLOW_MODULE',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => '',
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'lr_moduleList',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'layout_to_show' =>
            array(
                'required' => true,
                'name' => 'layout_to_show',
                'vname' => 'LBL_LAYOUT_TO_SHOW',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => '',
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'layout_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'group_to_assign' =>
            array(
                'required' => true,
                'name' => 'group_to_assign',
                'vname' => 'LBL_GROUP_TO_ASSIGN',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => '',
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'group_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'status' =>
            array(
                'required' => false,
                'name' => 'status',
                'vname' => 'LBL_STATUS',
                'type' => 'enum',
                'massupdate' => 1,
                'default' => 'Active',
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'aow_status_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'condition_lines' =>
            array(
                'required' => false,
                'name' => 'condition_lines',
                'vname' => 'LBL_CONDITION_LINES',
                'type' => 'function',
                'source' => 'non-db',
                'massupdate' => 0,
                'importable' => 'false',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'inline_edit' => false,
                'function' =>
                    array(
                        'name' => 'display_condition_lines',
                        'returns' => 'html',
                        'include' => 'modules/LayoutConditions/conditionLines.php'
                    ),
            ),
        'layout_conditions' =>
            array(
                'name' => 'layout_conditions',
                'type' => 'link',
                'relationship' => 'layout_rules_layout_conditions',
                'module' => 'LayoutConditions',
                'bean_name' => 'LayoutConditions',
                'source' => 'non-db',
            ),
),
    'relationships' => array (
        'layout_rules_layout_conditions' =>
            array(
                'lhs_module' => 'LayoutRules',
                'lhs_table' => 'layoutrules',
                'lhs_key' => 'id',
                'rhs_module' => 'LayoutConditions',
                'rhs_table' => 'layoutconditions',
                'rhs_key' => 'layout_rule_id',
                'relationship_type' => 'one-to-many',
            ),
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('LayoutRules', 'LayoutRules', array('basic','assignable'));