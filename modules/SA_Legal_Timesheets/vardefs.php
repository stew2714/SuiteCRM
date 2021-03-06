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

$dictionary['SA_Legal_Timesheets'] = array(
    'table' => 'sa_legal_timesheets',
    'audited' => true,
    'inline_edit' => true,
    'custom_fields' => true,
    'duplicate_merge' => true,
    'indices' => array ('entry_id' => array('name' =>'entry_idk', 'type' =>'unique', 'fields'=>array('entry_id') ) ),

'fields' => array (
        'entry_id' => array (
            'name' => 'entry_id',
            'vname' => 'LBL_ENTRY_ID',
            'type' => 'int',
            'readonly' => true,
            'len' => 11,
            'required' => true,
            'auto_increment' => true,
            'unified_search' => true,
            'full_text_search' => array('boost' => 3),
            'comment' => 'Visual unique identifier',
            'duplicate_merge' => 'disabled',
            'disable_num_format' => true,
            'studio' => array('quickcreate' => false),
        ),
        'category_c' =>  array(
            'name' => 'category_c',
            'vname' => 'LBL_CATEGORY',
            'type' => 'enum',
            'options' => 'category_dom',
            'len' => 255,
            'source' => 'custom_fields',
            'comment' => '',
            ),
        'date_c' => array(
            'name' => 'date_c',
            'vname' => 'LBL_DATE',
            'dbType' => 'datetime',
            'type' => 'datetimecombo',
            'audited' => true,
            'required' => true,
            'comment' => '',
            'enable_range_search' => true,
            'source' => 'custom_fields',
            'options' => 'date_range_search_dom',
        ),
        'date2_c' => array(
            'name' => 'date2_c',
            'vname' => 'LBL_DATE2',
            'dbType' => 'datetime',
            'type' => 'datetimecombo',
            'audited' => true,
            'required' => true,
            'comment' => '',
            'enable_range_search' => true,
            'source' => 'custom_fields',
            'options' => 'date_range_search_dom',
        ),
        'lastactivitydate_c' => array(
            'name' => 'lastactivitydate_c',
            'vname' => 'LBL_LAST_ACTIVITY_DATE',
            'dbType' => 'datetime',
            'type' => 'datetimecombo',
            'audited' => true,
            'required' => true,
            'comment' => '',
            'enable_range_search' => true,
            'source' => 'custom_fields',
            'options' => 'date_range_search_dom',
        ),
        'hours_c' => array(
            'name' => 'hours_c',
            'vname' => 'LBL_HOURS',
            'required' => true,
            'type' => 'float',
            'massupdate' => 0,
            'comments' => '',
            'help' => 'Longitude',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'len' => '11',
            'size' => '20',
            'precision' => '2',
            'source' => 'custom_fields',
        ),
        'additional_notes_c' => array(
            'name' => 'additional_notes_c',
            'vname' => 'LBL_ADDITIONAL_NOTES',
            'type' => 'text',
            'comment' => '',
            'rows' => 6,
            'cols' => 80,
            'source' => 'custom_fields',
        ),
        'sf_id_c' => array(
            'name' => 'sf_id_c',
            'vname' => 'LBL_SF_ID',
            'type' => 'id',
            'comment' => '',
            'source' => 'custom_fields',
        ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);

$dictionary["Account"]['indices']['entry_id']=array('name' =>'entry_idk', 'type' =>'unique', 'fields'=>array('entry_id'));


if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('SA_Legal_Timesheets', 'SA_Legal_Timesheets', array('basic','assignable','security_groups'));