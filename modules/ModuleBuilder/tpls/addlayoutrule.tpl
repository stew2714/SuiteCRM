{*
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2008 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
*}

<form name='addlayoutrule_form' id='addlayoutrule_form_id' onsubmit='return false;'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='saveRuleLayout'>
<input type='hidden' name='new_dropdown' value=''>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='view_module' value='{$view_module}' />
<input type='hidden' name='refreshTree' value='1'>


<div class='wizard' width='100%' >
	<div align='left' id='export'>{$actions}</div>
	<div>{$mod_strings.LBL_LAYOUT_RULE_STATEMENT}</div>
	<div id="Buttons">

	<table align="center" cellspacing="7" width="90%">
	<tr>
	<td>{$mod_strings.LBL_LAYOUTRULES}</td>
	<td>
		<input type="text" name="layout_name" id="layout_name">
	</td>
	<td>{$mod_strings.LBL_COPY_FROM}</td>
	<td>
		{html_options name="copy_layout" id="copy_layout_field" output=$translated_copy_layouts values=$copy_layouts}
	</td>
	</tr>
	</table>
	</div>
</div>

<input type='button' class='button' name='saverelbtn' value='{$mod_strings.LBL_BTN_SAVE}' onclick='check_form("addlayoutrule_form"); ModuleBuilder.submitForm("addlayoutrule_form");'>


</form>




<script>
addForm('addlayoutrule_form');
ModuleBuilder.helpSetup('studioWizard','addLayoutHelp');
</script>