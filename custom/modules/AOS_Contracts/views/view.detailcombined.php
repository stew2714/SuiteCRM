<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

require_once('custom/include/MVC/views/view.detailcombined.php');

class AOS_ContractsViewDetailCombined extends ViewDetailCombined
{
    public function construct()
    {
        parent::construct();
    }

    public function display(){
        global $current_user, $sugar_config;
		$this->loadRelated();
        $securityGroups = BeanFactory::getBean("SecurityGroups");
        $groups = $securityGroups->getUserSecurityGroups($current_user->id);

        if (array_key_exists($sugar_config['CommOpsGroup'],$groups) || is_admin($current_user)) {
            $this->ss->assign('COMMS_OP', true);
        }

        if (array_key_exists($sugar_config['LegalGroup'],$groups) || is_admin($current_user)) {
            $this->ss->assign('LEGAL_TEAM', true);
        }

        if (array_key_exists($sugar_config['SalesGroup'],$groups) || is_admin($current_user)) {
            $this->ss->assign('SALES_TEAM', true);
        }

        if ($this->bean->apttus_status_c == "eff_act") {
            $this->ss->assign('ACTIVATED', true);
            $this->ss->assign('recordID', $this->bean->id);
        }
        //add custom fields to work with email compose setup.
        $contact  = BeanFactory::getBean("Contacts", $this->bean->contact_id);
        $html = '<input type="hidden" name="" id="hidden_Id" value="' . $this->bean->id . '">';
        $html .= '<input type="hidden" name="" id="hidden_module" value="' . $this->bean->module_name . '">';
        $html .= '<input type="hidden" name="" id="hidden_Name" value="' . $this->bean->name . '">';
        $html .= '<input type="hidden" name="" id="hidden_email" value="">';
        $html .= '<input type="hidden" name="" id="hidden_email_template" value="' . $GLOBALS['sugar_config']['AgreementsEmailTemplate'] . '">';

        $this->ss->assign('REQUIREDFIELDS', $html);


        $email_mod_strings = return_module_language($current_language,'Emails');
        $modStrings = "var mod_strings = new Object();\n";
        foreach($email_mod_strings as $k => $v) {
            $v = str_replace("'", "\'", $v);
            $modStrings .= "mod_strings.{$k} = '{$v}';\n";
        }
        $lang .= "\n\n{$modStrings}\n";

        //Grab the Inboundemail language pack
        $ieModStrings = "var ie_mod_strings = new Object();\n";
        $ie_mod_strings = return_module_language($current_language,'InboundEmail');
        foreach($ie_mod_strings as $k => $v) {
            $v = str_replace("'", "\'", $v);
            $ieModStrings .= "ie_mod_strings.{$k} = '{$v}';\n";
        }
        $lang .= "\n\n{$ieModStrings}\n";


        $this->ss->assign('mod_strings', 	$lang );
        parent::display();

    }
    public function loadRelated(){
    	global $app_list_strings;

    	foreach($GLOBALS['app_list_strings']['CreateViewRelatedModule'][ $this->bean->module_name ] as $prefix =>
		    $related){
    		if(isset($this->bean->{$related['relationship']}) && !empty($this->bean->{$related['relationship']})){
    			$related = BeanFactory::getBean($related['module'], $this->bean->{$related['relationship']});
		    }
    		foreach($related->field_defs as $name => $defs){
				    $this->bean->{$prefix . '_' . $name} = $related->{$name};
		    }

	    }
    }
}