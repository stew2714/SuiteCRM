<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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


require_once('service/v4_1/registry.php');

class registry_quickcrm extends registry_v4_1 {


	/**
	 * registerFunction
     *
     * Registers all the functions on the service class
	 *
	 */
	protected function registerFunction()
	{
		$GLOBALS['log']->fatal('Begin: registry->registerFunction');
		parent::registerFunction();

        //Add get_relationships with "pagination" support
        $this->serviceClass->registerFunction(
            'Qget_relationships',
            array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'module_id'=>'xsd:string', 'link_field_name'=>'xsd:string', 'related_module_query'=>'xsd:string', 'related_fields'=>'tns:select_fields', 'related_module_link_name_to_fields_array'=>'tns:link_names_to_fields_array', 'deleted'=>'xsd:int', 'order_by'=>'xsd:string', 'offset'=>'xsd:int' , 'limit'=>'xsd:int'),
            array('return'=>'tns:get_entry_result_version2'));

	   $this->serviceClass->registerFunction(
		    'Qget_entry_list',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'query'=>'xsd:string', 'order_by'=>'xsd:string','offset'=>'xsd:int', 'select_fields'=>'tns:select_fields', 'link_name_to_fields_array'=>'tns:link_names_to_fields_array', 'max_results'=>'xsd:int', 'deleted'=>'xsd:int', 'favorites'=>'xsd:boolean'),
		    array('return'=>'tns:get_entry_list_result_version2'));
		    
		$this->serviceClass->registerFunction(
		    'get_chart',
		    array('session'=>'xsd:string', 'id'=>'xsd:string', 'chart_id'=>'xsd:string', 'width'=>'xsd:string', 'height'=>'xsd:string', 'language'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

		$this->serviceClass->registerFunction(
		    'get_report',
		    array('session'=>'xsd:string', 'id'=>'xsd:string', 'offset'=>'xsd:string', 'max_results'=>'xsd:string', 'language'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

		$this->serviceClass->registerFunction(
		    'get_Kreport',
		    array('session'=>'xsd:string', 'id'=>'xsd:string', 'offset'=>'xsd:string', 'max_results'=>'xsd:string', 'language'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));
			
		$this->serviceClass->registerFunction(
		    'set_drawing',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'field'=>'xsd:string',  'drawing'=>'xsd:string',  'deleted'=>'xsd:int'),
		    array('return'=>'tns:new_set_entry_result'));

		$this->serviceClass->registerFunction(
		    'get_drawing',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'field'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

		$this->serviceClass->registerFunction(
		    'set_image',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'field'=>'xsd:string',  'drawing'=>'xsd:string',  'deleted'=>'xsd:int', 'name'=>'xsd:string'),
		    array('return'=>'tns:new_set_entry_result'));

		$this->serviceClass->registerFunction(
		    'get_image',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'field'=>'xsd:string', 'name'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

		$this->serviceClass->registerFunction(
		    'set_photo',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'field'=>'xsd:string',  'drawing'=>'xsd:string',  'deleted'=>'xsd:int',  'name'=>'xsd:string'),
		    array('return'=>'tns:new_set_entry_result'));

		$this->serviceClass->registerFunction(
		    'get_photo',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'field'=>'xsd:string', 'name'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

		$this->serviceClass->registerFunction(
		    'get_file_contents',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string'),
		    array('return'=>'tns:new_return_note_attachment'));

		$this->serviceClass->registerFunction(
		    'AOSget_entry',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'id'=>'xsd:string', 'select_fields'=>'tns:select_fields','link_name_to_fields_array'=>'tns:link_names_to_fields_array','track_view'=>'xsd:boolean'),
		    array('return'=>'tns:get_entry_result_version2'));
			
		$this->serviceClass->registerFunction(
		    'AOSset_entry',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'name_value_list'=>'tns:name_value_list'),
		    array('return'=>'tns:new_set_entry_result'));
			
		$this->serviceClass->registerFunction(
		    'AOSOLset_entry',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'name_value_list'=>'tns:name_value_list'),
		    array('return'=>'tns:new_set_entry_result'));
			
		$this->serviceClass->registerFunction(
		    'generate_pdf',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'template_id'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

		$this->serviceClass->registerFunction(
		    'generate_pdf_letter',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'id'=>'xsd:string',  'template_id'=>'xsd:string'),
		    array('return'=>'tns:get_entry_result_version2'));

	   	$this->serviceClass->registerFunction(
		    'get_totals',
		    array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'query'=>'xsd:string', 'select_fields'=>'tns:select_fields', 'total_fields'=>'tns:name_value_list', 'group_by'=>'xsd:string'),
		    array('return'=>'tns:get_entry_list_result_version2'));
	   	$this->serviceClass->registerFunction(
		    'get_relationships_totals',
            array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'module_id'=>'xsd:string', 'link_field_name'=>'xsd:string', 'related_module_query'=>'xsd:string', 'related_fields'=>'tns:select_fields', 'total_fields'=>'tns:name_value_list', 'group_by'=>'xsd:string'),
		    array('return'=>'tns:get_entry_list_result_version2'));

	   	$this->serviceClass->registerFunction(
		    'getCurrentUserFavorites',
            array('session'=>'xsd:string', 'module_name'=>'xsd:string'),
		    array('return'=>'tns:get_entry_list_result_version2'));
	}

}