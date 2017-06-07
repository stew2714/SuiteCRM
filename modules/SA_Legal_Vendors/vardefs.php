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

$dictionary['SA_Legal_Vendors'] = array(
    'table' => 'sa_legal_vendors',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'indices' => array ('vendor_contract_id' => array('name' =>'vendor_contract_idk', 'type' =>'unique',
                                                      'fields'=>array('vendor_contract_id') ) ),
    'fields' => array (
        'vendor_contract_id' => array (
            'name' => 'vendor_contract_id',
            'vname' => 'LBL_VENDOR_CONTRACT_ID',
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
        'business_unit' => array(
            'name' => 'business_unit',
            'vname' => 'LBL_BUSINESS_UNIT',
            'type' => 'enum',
            'options' => 'business_unit_dom',
            'len' => 255,
            'comment' => '',
        ),
        'does_vendor_access_phi' => array(
            'name' => 'does_vendor_access_phi',
            'vname' => 'LBL_DOES_VENDOR_ACCESS_PHI',
            'type' => 'enum',
            'options' => 'phi_dom',
            'len' => 255,
            'comment' => '',
        ),
        'initial_request_date' => array(
            'name' => 'initial_request_date',
            'vname' => 'LBL_INITIAL_REQUEST_DATE',
            'dbType' => 'datetime',
            'type' => 'datetimecombo',
            'audited' => true,
            'required' => true,
            'comment' => '',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'request_closed_date' => array(
            'name' => 'request_closed_date',
            'vname' => 'LBL_REQUEST_CLOSED_DATE',
            'dbType' => 'datetime',
            'type' => 'datetimecombo',
            'audited' => true,
            'required' => true,
            'comment' => '',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
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
VardefManager::createVardef('SA_Legal_Vendors', 'SA_Legal_Vendors', array('basic','assignable','security_groups'));