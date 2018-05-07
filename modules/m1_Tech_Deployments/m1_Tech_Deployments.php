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


class m1_Tech_Deployments extends Basic
{
    public $new_schema = true;
    public $module_dir = 'm1_Tech_Deployments';
    public $object_name = 'm1_Tech_Deployments';
    public $table_name = 'm1_tech_deployments';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $securitygroup;
    public $securitygroup_display;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $additionalusers;
    public $virtualization_tools;
    public $recognition_type;
    public $emr_fd;
    public $connector_version;
    public $amcc_cloud_version;
    public $emr_hosted_by;
    public $account_endpoint_name;
    public $flex;
    public $auto_update;
    public $other_devices;
    public $capd;
    public $web_proxy;
    public $if_yes_pass_through_info;
    public $fd_client_primary;
    public $fd_client_secondary;
    public $fd_other_deploy;
    public $fd_client_primary_dd;
    public $fd_client_secondary_dd;
    public $fd_other_client_dd;
    public $cds_base_endpoint;
    public $fd_author_oid;
    public $other_config_needs;
    public $foot_pedals;
    public $hand_controls;
    public $keyboard_mode_required;
    public $primary_mic;
    public $secondary_mic;
    public $other_mic;
    public $primary_mic_desc;
    public $server_names;
    public $server_ip_addresses;
    public $remote_conn_method;
    public $login_information;
    public $sso_configuration;
    public $match_emr;
    public $match_windows;
    public $secondary_mic_description;
    public $other_mic_description;
    public $os_version;
    public $primary_emr_description;
    public $secondary_emr_description;
    public $other_emr_description;
    public $primary_emr;
    public $secondary_emr;
    public $other_emr;
    public $curr_fd_version;
    public $previous_fd_version;
    public $sso_type;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
}