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

    function preDisplay(){
        global $sugar_config;
        if ($this->bean->apttus_status_c == "eff_act") {
            $sugar_config['enable_line_editing_detail'] = false;
        }
        parent::preDisplay();
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

        $this->ss->assign('recordID', $this->bean->id);
        if ($this->bean->apttus_status_c == "eff_act" && !is_admin($current_user)) {
            $this->ss->assign('ACTIVATED', true);
            $sql = "SELECT aos_contracts_cstm.amendment_c FROM aos_contracts_cstm LEFT JOIN aos_contracts ON aos_contracts.id = aos_contracts_cstm.id_c 
                    WHERE aos_contracts.deleted = '0' AND aos_contracts_cstm.Oneapttus_parent_agreement_c = '".$this->bean->Oneapttus_parent_agreement_c."' ORDER BY aos_contracts_cstm.amendment_c DESC";
            $result = $this->bean->db->query($sql);
            $row = mysqli_fetch_row($result);
            if($row[0] != $this->bean->amendment_c) {
                $this->ss->assign('OLD_AMENDMENT', true);
            } else {
                $this->ss->assign('OLD_AMENDMENT', false);
            }
        } else {
            $this->ss->assign('ACTIVATED', false);
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
        $this->populateContractTemplates();
        $this->displayPopupHtml();
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

    function populateContractTemplates(){
        global $app_list_strings;

        $sql = "SELECT id, name FROM aos_pdf_templates WHERE deleted = 0 AND type='AOS_Contracts' AND active = 1";

        $res = $this->bean->db->query($sql);
        $app_list_strings['template_ddown_c_list'] = array();
        while($row = $this->bean->db->fetchByAssoc($res)){
            $app_list_strings['template_ddown_c_list'][$row['id']] = $row['name'];
        }
    }

    function displayPopupHtml(){
        global $app_list_strings,$app_strings, $mod_strings;
        $templates = array_keys($app_list_strings['template_ddown_c_list']);
        if($templates){

            echo '	<div id="popupDiv_ara" style="display:none;position:fixed;top: 39%; left: 41%;opacity:1;z-index:9999;background:#FFFFFF;">
				<form id="popupForm" action="index.php?entryPoint=generatePdf" method="post">
 				<table style="border: #000 solid 2px;padding-left:40px;padding-right:40px;padding-top:10px;padding-bottom:10px;font-size:110%;" >
					<tr height="20">
						<td colspan="2">
						<b>'.$app_strings['LBL_SELECT_TEMPLATE'].':-</b>
						</td>
					</tr>';
            foreach($templates as $template){
                $template = str_replace('^','',$template);
                $js = "document.getElementById('popupDivBack_ara').style.display='none';document.getElementById('popupDiv_ara').style.display='none';var form=document.getElementById('popupForm');if(form!=null){form.templateID.value='".$template."';form.submit();}else{alert('Error!');}";
                echo '<tr height="20">
				<td width="17" valign="center"><a href="#" onclick="'.$js.'"><img src="themes/default/images/txt_image_inline.gif" width="16" height="16" /></a></td>
				<td><b><a href="#" onclick="'.$js.'">'.$app_list_strings['template_ddown_c_list'][$template].'</a></b></td></tr>';
            }
            echo '		<input type="hidden" name="templateID" value="" />
				<input type="hidden" name="task" value="pdf" />
				<input type="hidden" name="module" value="'.$_REQUEST['module'].'" />
				<input type="hidden" name="uid" value="'.$this->bean->id.'" />
				</form>
				<tr style="height:10px;"><tr><tr><td colspan="2"><button style=" display: block;margin-left: auto;margin-right: auto" onclick="document.getElementById(\'popupDivBack_ara\').style.display=\'none\';document.getElementById(\'popupDiv_ara\').style.display=\'none\';return false;">Cancel</button></td></tr>
				</table>
				</div>
				<div id="popupDivBack_ara" onclick="this.style.display=\'none\';document.getElementById(\'popupDiv_ara\').style.display=\'none\';" style="top:0px;left:0px;position:fixed;height:100%;width:100%;background:#000000;opacity:0.5;display:none;vertical-align:middle;text-align:center;z-index:9998;">
				</div>
				<script>
					function showPopup(task){
						var form=document.getElementById(\'popupForm\');
						var ppd=document.getElementById(\'popupDivBack_ara\');
						var ppd2=document.getElementById(\'popupDiv_ara\');
						if('.count($templates).' == 1){
							form.task.value=task;
							form.templateID.value=\''.$template.'\';
							form.submit();
						}else if(form!=null && ppd!=null && ppd2!=null){
							ppd.style.display=\'block\';
							ppd2.style.display=\'block\';
							form.task.value=task;
						}else{
							alert(\'Error!\');
						}
					}
				</script>';
        }
        else{
            echo '<script>
				function showPopup(task){
				alert(\''.$mod_strings['LBL_NO_TEMPLATE'].'\');
				}
			</script>';
        }
    }
}