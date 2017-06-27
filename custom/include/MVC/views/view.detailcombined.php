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

require_once('custom/include/DetailCombinedView/DetailCombined2.php');

/**
 * Default view class for handling DetailViews
 *
 * @package MVC
 * @category Views
 */
class ViewDetailCombined extends SugarView
{
    /**
     * @see SugarView::$type
     */
    public $type = 'detailcombined';

    /**
     * @var DetailCombined2 object
     */
    public $dv;

	function ViewDetailCombined(){
		$this->options['show_subpanels'] = true;
		parent::SugarView();
	}
    /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay()
    {
    	global $app_list_strings;
 	    $metadataFile = $this->getMetaDataFile();
 	    $this->dv = new DetailCombined2();
	    $relatedModules = $app_list_strings['CreateViewRelatedModule'][ $this->bean->module_name ];
	    foreach($relatedModules as $product => $value) {
		    if($product == '') continue;

		    $prefix = $product . '_';
		    $mod = BeanFactory::getBean($value['module']);
		    foreach ($mod->field_defs as $name => $arr) {

			    if (isset($arr['options']) && isset($app_list_strings[$arr['options']])) {
				    if (isset($GLOBALS['sugar_config']['enable_autocomplete']) && $GLOBALS['sugar_config']['enable_autocomplete'] == true) {
					    $arr['autocomplete'] = true;
					    $arr['autocomplete_options'] = $arr['options']; // we need the name for autocomplete
				    } else {
					    $arr['autocomplete'] = false;
				    }
				    // Bug 57472 - $arr['autocomplete_options' was set too late, it didn't retrieve the list's name, but the list itself (the developper comment show us that developper expected to retrieve list's name and not the options array)
				    $arr['options'] = $app_list_strings[$arr['options']];
			    }

			    if (isset($arr['options']) && is_array($arr['options']) && isset($arr['default_empty']) && !isset($arr['options'][$arr['default_empty']])) {
				    $arr['options'] = array_merge(array($arr['default_empty'] => $arr['default_empty']), $arr['options']);
			    }

			    $arr['name'] = $prefix . $arr['name'];


			    $this->bean->field_defs[$prefix . $name] = $arr;
			    $this->bean->field_defs[$prefix . $name]['moduleCore'] = $mod->module_name;
		    }
	    }
 	    $this->dv->ss =&  $this->ss;
 	    $this->dv->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('include/DetailCombinedView/DetailView.tpl'));
    }

    /**
     * @see SugarView::display()
     */
    public function display()
    {

        if(empty($this->bean->id)){
            sugar_die($GLOBALS['app_strings']['ERROR_NO_RECORD']);
        }
        $this->dv->process();
        echo $this->dv->display();
    }
}
