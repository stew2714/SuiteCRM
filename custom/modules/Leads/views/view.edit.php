<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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

require_once('modules/Leads/views/view.edit.php');
require_once('custom/include/AccountSync/eloquaRequest.php');

class CustomLeadsViewEdit extends LeadsViewEdit
{
 	public function display(){
 	    global $sugar_config;

        // Establish Eloqua Credentials
 	    $client = new EloquaRequest($sugar_config['eloqua_company'], $sugar_config['eloqua_username'], $sugar_config['eloqua_password'], 'https://secure.p03.eloqua.com/API/REST/1.0/');

 	    // Call all Options Lists Required
        $returned_lists = $client->get('/assets/optionLists?depth=complete');

        // Clean Up Returned Options
        $country_options = $this->cleanUpOptions('Country Codes', $returned_lists);
        $industry_options = $this->cleanUpOptions('Industry', $returned_lists);

        // Populate All Options Lists
        $this->populateOptions('eloqua_industry_options', $industry_options);
        $this->populateOptions('eloqua_country_list', $country_options);

 	    parent::display();
    }

    public function cleanUpOptions($search_term, $options_list)
    {
        // Container Array for the Clean Options List
        $clean_options_list = array();

        foreach ($options_list->elements as $option) {
            if ($option->name == $search_term) {
                foreach ($option->elements as $element) {
                    $clean_options_list[$element->value] = $element->displayName;
                }
            }
        }

        return $clean_options_list;
    }

    public function populateOptions($list_name, $options)
    {
        global $app_list_strings;

        foreach ($options as $key => $value) {
            $app_list_strings[$list_name][$key] = $value;
        }
    }
}