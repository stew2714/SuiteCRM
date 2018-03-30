<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 ********************************************************************************/

$dictionary['lt_login_tracker'] = array(
	'table'=>'lt_login_tracker',
	'audited'=>true,
    'inline_edit'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'login_date_time' => 
  array (
    'required' => true,
    'name' => 'login_date_time',
    'vname' => 'LBL_LOGIN_DATE_TIME',
    'type' => 'datetimecombo',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => true,
    'dbType' => 'datetime',
	'options' => 'date_range_search_dom',
  ),
  'user_id_c' => 
    array (
      'name' => 'user_id_c',
      'rname' => 'user_name',
      'id_name' => 'user_id_c',
      'vname' => 'LBL_LOGIN_USER_USER_ID',
      'group' => 'login_user',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'Login User ID assigned to record',
      'duplicate_merge' => 'disabled',
   ),
   'login_user' => 
    array (
      'name' => 'login_user',
      'link' => 'login_user_link',
      'vname' => 'LBL_LOGIN_USER',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'user_id_c',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
	'login_user_link' => 
    array (
      'name' => 'login_user_link',
      'type' => 'link',
      'relationship' => 'lt_login_tracker_login_user',
      'vname' => 'LBL_LOGIN_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'user_id_c',
      'table' => 'users',
    ),
),
  'relationships'=>array (
	'lt_login_tracker_login_user' => 
		array (
		  'lhs_module' => 'Users',
		  'lhs_table' => 'users',
		  'lhs_key' => 'id',
		  'rhs_module' => 'lt_login_tracker',
		  'rhs_table' => 'lt_login_tracker',
		  'rhs_key' => 'user_id_c',
		  'relationship_type' => 'one-to-many',
		),
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('lt_login_tracker','lt_login_tracker', array('basic','assignable'));