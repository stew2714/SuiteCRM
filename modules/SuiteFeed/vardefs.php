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

$dictionary['SuiteFeed'] = array(
    'table'         => 'suitefeed',
    'audited'       => false,
    'fields'        => array(
        'name'        => array(
            'name'             => 'name',
            'type'             => 'name',
            'dbType'           => 'varchar',
            'vname'            => 'LBL_NAME',
            'len'              => 255,
            'comment'          => 'Name of the feed',
            'unified_search'   => true,
            'full_text_search' => true,
            'audited'          => true,
            'merge_filter'     => 'selected',
            //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
            //property value is case insensitive.
        ),
        'description' => array(
            'name'             => 'description',
            'type'             => 'name',
            'dbType'           => 'text',
            'vname'            => 'LBL_NAME',
            'len'              => 255,
            'comment'          => 'Name of the feed',
            'unified_search'   => true,
            'full_text_search' => array('boost' => 1),
            'audited'          => true,
            'merge_filter'     => 'selected',
            //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
            //property value is case insensitive.
        ),

        'related_module' => array(
            'name'             => 'related_module',
            'type'             => 'varchar',
            'vname'            => 'LBL_RELATED_MODULE',
            'len'              => 100,
            'comment'          => 'related module',
            'unified_search'   => true,
            'full_text_search' => array('boost' => 1),
            'audited'          => false,
            'merge_filter'     => 'selected',
            //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
            //property value is case insensitive.
        ),
        'related_id'     => array(
            'name'           => 'related_id',
            'type'           => 'id',
            'vname'          => 'LBL_RElATED_ID',
            'len'            => 36,
            'comment'        => 'related module',
            'unified_search' => true,
            'audited'        => false,
            'merge_filter'   => 'selected',
            //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
            //property value is case insensitive.
        ),
        'link_url'       => array(
            'name'             => 'link_url',
            'type'             => 'varchar',
            'vname'            => 'LBL_LINK_URL',
            'len'              => 255,
            'comment'          => 'Name of the feed',
            'unified_search'   => true,
            'full_text_search' => array('boost' => 1),
            'audited'          => false,
            'merge_filter'     => 'selected',
            //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
            //property value is case insensitive.
        ),
        'link_type'      => array(
            'name'             => 'link_type',
            'type'             => 'varchar',
            'vname'            => 'LBL_LINK_TYPE',
            'len'              => 30,
            'comment'          => 'Name of the feed',
            'unified_search'   => true,
            'full_text_search' => array('boost' => 1),
            'audited'          => false,
            'merge_filter'     => 'selected',
            //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
            //property value is case insensitive.
        ),

        'public'      => array(
            'name'             => 'public',
            'type'             => 'bool',
            'vname'            => 'LBL_PUBLIC',
            'len'              => 30,
            'comment'          => '',
            'audited'          => false,
            'merge_filter'     => 'selected',
        ),

        'suitefeed_users' => array(
            'name'         => 'suitefeed_users',
            'type'         => 'link',
            'relationship' => 'suitefeed_users',
            'source'       => 'non-db',
            'module'       => 'Users',
            'bean_name'    => 'User',
            'vname'        => 'LBL_SUITEFEED_USERS_FROM_USERS_TITLE'
        ),
        'suitefeed_securitygroups' => array(
            'name'         => 'suitefeed_securitygroups',
            'type'         => 'link',
            'relationship' => 'suitefeed_securitygroups',
            'source'       => 'non-db',
            'module'       => 'SecurityGroups',
            'bean_name'    => 'SecurityGroup',
            'vname'        => 'LBL_SUITEFEED_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
        ),
    ),
    'relationships' => array(

    ),

    'indices' => array(
        array(
            'name'   => 'sgrfeed_date',
            'type'   => 'index',
            'fields' => array(
                'date_entered',
                'deleted',
            )
        ),
    ),

    'optimistic_lock' => true,
);

VardefManager::createVardef(
    'SuiteFeed',
    'SuiteFeed',
    array(
        'basic',
        'assignable'
    )
);
