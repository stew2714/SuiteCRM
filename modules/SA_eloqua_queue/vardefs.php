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

$dictionary['SA_eloqua_queue'] = array(
    'table' => 'sa_eloqua_queue',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'status' => array(
            'name' => 'status',
            'vname' => 'LBL_STATE',
            'type' => 'enum',
            'options' => 'case_state_dom',
            'len' => 100,
            'audited' => true,
            'merge_filter' => 'disabled',
        ),
        'eloqua_id' => array(
            'name' => 'eloqua_id',
            'vname' => 'LBL_STATE',
            'type' => 'id',
            'len' => 100,
            'audited' => true,
            'merge_filter' => 'disabled',
        ),
        'offset' => array(
            'name' => 'offset',
            'vname' => 'LBL_STATE',
            'type' => 'int',
            'len' => 100,
            'default' => 0,
            'audited' => true,
            'merge_filter' => 'disabled',
        ),
        'last_checked' => array(
            'name' => 'last_checked',
            'vname' => 'LBL_STATE',
            'type' => 'datetimecombo',
            'db-type' => 'datetime',
            'len' => 100,
            'audited' => true,
            'merge_filter' => 'disabled',
        ),
        'queue_type' => array(
            'name' => 'queue_type',
            'vname' => 'LBL_STATE',
            'type' => 'enum',
            'options' => 'case_state_dom',
            'len' => 100,
            'audited' => true,
            'merge_filter' => 'disabled',
        ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('SA_eloqua_queue', 'SA_eloqua_queue', array('basic','assignable'));