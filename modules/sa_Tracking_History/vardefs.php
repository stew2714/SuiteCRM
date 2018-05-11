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

$dictionary['sa_Tracking_History'] = array(
    'table'              => 'sa_tracking_history',
    'audited'            => true,
    'custom_fields' => true,
    'inline_edit'        => true,
    'duplicate_merge'    => true,
    'custom_fields' => true,
    'fields'             => array(
        'field'     => array(
            'required'                  => false,
            'name'                      => 'field',
            'vname'                     => 'LBL_FIELD',
            'type'                      => 'varchar',
            'massupdate'                => 0,
            'no_default'                => false,
            'comments'                  => '',
            'help'                      => '',
            'importable'                => 'true',
            'duplicate_merge'           => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited'                   => false,
            'inline_edit'               => true,
            'reportable'                => true,
            'unified_search'            => false,
            'merge_filter'              => 'disabled',
            'len'                       => '255',
            'size'                      => '20',
        ),
        'parent_id' => array(
            'name'       => 'parent_id',
            'vname'      => 'LBL_PARENT_ID',
            'type'       => 'id',
            'group'      => 'parent_name',
            'reportable' => false,
            'comment'    => 'ID of item indicated by parent_type',
            'studio'     => array('searchview' => false),
        ),
        'sf_id_c' => array(
            'name'       => 'sf_id_c',
            'vname'      => 'LBL_SF_ID',
            'type'       => 'varchar',
            'comment'    => '',
            'source'     => 'custom_fields',
        ),
        'sf_parent_id_c' => array(
            'name'       => 'sf_parent_id_c',
            'vname'      => 'LBL_SF_PARENT_ID',
            'type'       => 'varchar',
            'comment'    => '',
            'source'     => 'custom_fields',
        ),

        'parent_type' => array(
            'name'    => 'parent_type',
            'vname'   => 'LBL_PARENT_TYPE',
            'type'    => 'parent_type',
            'dbType'  => 'varchar',
            'group'   => 'parent_name',
            'options' => 'parent_type_display',
            'len'     => 100,
            'comment' => 'Module meeting is associated with',
            'studio'  => array('searchview' => false),
        ),
        'parent_name' => array(
            'name'        => 'parent_name',
            'parent_type' => 'record_type_display',
            'type_name'   => 'parent_type',
            'id_name'     => 'parent_id',
            'vname'       => 'LBL_LIST_RELATED_TO',
            'type'        => 'parent',
            'group'       => 'parent_name',
            'source'      => 'non-db',
            'options'     => 'parent_type_display',
        ),

        'previous_value' => array(
            'required'                  => false,
            'name'                      => 'previous_value',
            'vname'                     => 'LBL_PREVIOUS_VALUE',
            'type'                      => 'varchar',
            'massupdate'                => 0,
            'no_default'                => false,
            'comments'                  => '',
            'help'                      => '',
            'importable'                => 'true',
            'duplicate_merge'           => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited'                   => false,
            'inline_edit'               => true,
            'reportable'                => true,
            'unified_search'            => false,
            'merge_filter'              => 'disabled',
            'len'                       => '255',
            'size'                      => '20',
        ),
        'new_value'      => array(
            'required'                  => false,
            'name'                      => 'new_value',
            'vname'                     => 'LBL_NEW_VALUE',
            'type'                      => 'varchar',
            'massupdate'                => 0,
            'no_default'                => false,
            'comments'                  => '',
            'help'                      => '',
            'importable'                => 'true',
            'duplicate_merge'           => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited'                   => false,
            'inline_edit'               => true,
            'reportable'                => true,
            'unified_search'            => false,
            'merge_filter'              => 'disabled',
            'len'                       => '255',
            'size'                      => '20',
        ),

    ),
    'relationships'      => array(

        'fieldtrackinghistory_accounts'      => array(
            'lhs_module'        => 'sa_Tracking_History',
            'lhs_table'         => 'sa_tracking_history',
            'lhs_key'           => 'parent_id',
            'rhs_module'        => 'Accounts',
            'rhs_table'         => 'accounts',
            'rhs_key'           => 'id',
            'relationship_type' => 'one-to-many',
        ),
        'fieldtrackinghistory_leads'         => array(
            'lhs_module'        => 'sa_Tracking_History',
            'lhs_table'         => 'sa_tracking_history',
            'lhs_key'           => 'parent_id',
            'rhs_module'        => 'Leads',
            'rhs_table'         => 'leads',
            'rhs_key'           => 'id',
            'relationship_type' => 'one-to-many',
        ),
        'fieldtrackinghistory_contacts'      => array(
            'lhs_module'        => 'sa_Tracking_History',
            'lhs_table'         => 'sa_tracking_history',
            'lhs_key'           => 'parent_id',
            'rhs_module'        => 'Contacts',
            'rhs_table'         => 'contacts',
            'rhs_key'           => 'id',
            'relationship_type' => 'one-to-many',
        ),
        'fieldtrackinghistory_opportunities' => array(
            'lhs_module'        => 'sa_Tracking_History',
            'lhs_table'         => 'sa_tracking_history',
            'lhs_key'           => 'parent_id',
            'rhs_module'        => 'Opportunities',
            'rhs_table'         => 'opportunities',
            'rhs_key'           => 'id',
            'relationship_type' => 'one-to-many',
        ),
        'fieldtrackinghistory_agreements' => array(
            'lhs_module'        => 'sa_Tracking_History',
            'lhs_table'         => 'sa_tracking_history',
            'lhs_key'           => 'parent_id',
            'rhs_module'        => 'AOS_Contracts',
            'rhs_table'         => 'aos_contracts',
            'rhs_key'           => 'id',
            'relationship_type' => 'one-to-many',
        ),
    ),
    'optimistic_locking' => true,
    'unified_search'     => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef(
    'sa_Tracking_History',
    'sa_Tracking_History',
    array('basic', 'assignable', 'security_groups')
);