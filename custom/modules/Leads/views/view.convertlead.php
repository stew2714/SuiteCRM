<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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

require_once("modules/Leads/views/view.convertlead.php");

class customViewConvertLead extends ViewConvertLead
{

    public function __construct(
        $bean = null,
        $view_object_map = array()
    ) {
        parent::__construct($bean, $view_object_map);
    }

    public function display()
    {
        if (!empty($_REQUEST['handle']) && $_REQUEST['handle'] == 'save')
        {
            return $this->handleSave();
        }

        global $beanList;

        // get the EditView defs to check if opportunity_name exists, for a check below for populating data
        $opportunityNameInLayout = false;
        $editviewFile = 'modules/Leads/metadata/editviewdefs.php';
        $this->medataDataFile = $editviewFile;
        if (file_exists("custom/{$editviewFile}"))
        {
            $this->medataDataFile = "custom/{$editviewFile}";
        }
        include($this->medataDataFile);
        foreach($viewdefs['Leads']['EditView']['panels'] as $panel_index => $section){
            foreach($section as $row_array){
                foreach($row_array as $cell){
                    if(isset($cell['name']) && $cell['name'] == 'opportunity_name'){
                        $opportunityNameInLayout = true;
                    }
                }
            }
        }

        $this->medataDataFile = $this->fileName;
        if (file_exists("custom/$this->fileName"))
        {
            $this->medataDataFile = "custom/$this->fileName";
        }
        $this->loadDefs();
        $this->getRecord();
        $this->checkForDuplicates($this->focus);
        $smarty = new Sugar_Smarty();
        $ev = new EditView();
        $ev->ss = $smarty;
        $ev->view = "ConvertLead";
        echo $this->getModuleTitle();

        require_once("include/QuickSearchDefaults.php");
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
        $qsd->setFormName("ConvertLead");

        $this->contact = new Contact();

        /*
         * Setup filter for Account/Contact popup picker
         */
        $filter = '';
        // Check if Lead has an account set
        if (!empty($this->focus->account_name))
        {
            $filter .= '&name_advanced=' . urlencode($this->focus->account_name);
        }
        // Check if Lead First name is available
        if (!empty($this->focus->first_name))
        {
            $filter .= '&first_name_advanced=' . urlencode($this->focus->first_name);
        }
        // Lead Last Name is always available
        $filter .= '&last_name_advanced=' . urlencode($this->focus->last_name);

        $smarty->assign('initialFilter', $filter);
        $smarty->assign('displayParams', array('initial_filter' => '{$initialFilter}'));

        $relatedFields = $this->contact->get_related_fields();
        $selectFields = array();
        foreach ($this->defs as $moduleName => $mDefs)
        {
            if (!empty($mDefs[$ev->view]['select']) && !empty($relatedFields[$mDefs[$ev->view]['select']]))
            {
                $selectFields[$moduleName] = $mDefs[$ev->view]['select'];
                continue;
            }
            foreach ($relatedFields as $fDef)
            {
                if (!empty($fDef['link']) && !empty($fDef['module']) && $fDef['module'] == $moduleName)
                {
                    $selectFields[$moduleName] = $fDef['name'];
                    break;
                }
            }
        }

        $smarty->assign('selectFields', $selectFields);

        $smarty->assign("contact_def", $this->contact->field_defs);
        $smarty->assign("form_name", "ConvertLead");
        $smarty->assign("form_id", "ConvertLead");
        $smarty->assign("module", "Leads");
        $smarty->assign("view", "convertlead");
        $smarty->assign("bean", $this->focus);
        $smarty->assign("record_id", $this->focus->id);
        global $mod_strings;
        $smarty->assign('MOD', $mod_strings);
        $smarty->display("modules/Leads/tpls/ConvertLeadHeader.tpl");

        echo "<div class='edit view' style='width:auto;'>";

        global $sugar_config, $app_list_strings, $app_strings;
        $smarty->assign('lead_conv_activity_opt', $sugar_config['lead_conv_activity_opt']);

        //Switch up list depending on copy or move
        if($sugar_config['lead_conv_activity_opt'] == 'move')
        {
            $smarty->assign('convertModuleListOptions', get_select_options_with_id(array('None'=>$app_strings['LBL_NONE'], 'Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));
        }
        else if($sugar_config['lead_conv_activity_opt'] == 'copy')
        {
            $smarty->assign('convertModuleListOptions', get_select_options_with_id(array('Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));
        }



        foreach($this->defs as $module => $vdef)
        {
            if(!isset($beanList[$module]))
            {
                continue;
            }


            $bean = $beanList[$module];
            $focus = new $bean();

            // skip if we aren't allowed to save this bean
            if (!$focus->ACLAccess('save'))
            {
                continue;
            }
            $focus->fill_in_additional_detail_fields();
            foreach($focus->field_defs as $field => $def)
            {
                if(isset($vdef[$ev->view]['copyData']) && $vdef[$ev->view]['copyData'])
                {
                    if ($module == "Accounts" && $field == 'name')
                    {
                        $focus->name = $this->focus->account_name;
                    }
                    else if ($module == "Opportunities" && $field == 'amount')
                    {
                        $focus->amount = unformat_number($this->focus->opportunity_amount);

                    }else if ($module == "Opportunities" && $field == 'date_closed'){
                        require_once ("modules/AOR_Reports/aor_utils.php");
                        global $timedate;
                        $calQu = calculateQuarters();
                        $quarter = $this->getThisQuarter($calQu);
                        $thisQuarter = $timedate->asUserDate($quarter);
                        $focus->date_closed = $thisQuarter;
                    }
                    else if ($module == "Opportunities" && $field == 'name') {
                        if ($opportunityNameInLayout && !empty($this->focus->opportunity_name)){
                            $focus->name = $this->focus->opportunity_name;
                        }
                    }
                    else if ($field == "id")
                    {
                        //If it is not a contact, don't copy the ID from the lead
                        if ($module == "Contacts") {
                            $focus->$field = $this->focus->$field;
                        }
                    } else if (is_a($focus, "Company") && $field == 'phone_office')
                    {
                        //Special case where company and person have the same field with a different name
                        $focus->phone_office = $this->focus->phone_work;
                    }
                    else if (strpos($field, "billing_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */
                    {
                        $tmp_field = str_replace("billing_", "primary_", $field);
                        $focus->field_defs[$field]["type"] = "text";
                        if (isset($this->focus->$tmp_field)) {
                            $focus->$field = $this->focus->$tmp_field;
                        }
                    }

                    else if (strpos($field, "shipping_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */
                    {
                        $tmp_field = str_replace("shipping_", "primary_", $field);
                        if (isset($this->focus->$tmp_field)) {
                            $focus->$field = $this->focus->$tmp_field;
                        }
                        $focus->field_defs[$field]["type"] = "text";
                    }
                    else if (isset($this->focus->$field))
                    {
                        $focus->$field = $this->focus->$field;
                    }
                }
            }

            //Copy over email data
            $ev->setup($module, $focus, $this->medataDataFile, "modules/Leads/tpls/ConvertLead.tpl", false);
            $ev->process();
            echo($ev->display(false));
            echo($this->getValidationJS($module, $focus, $vdef[$ev->view]));
        }
        echo "</div>";
        echo ($qsd->getQSScriptsJSONAlreadyDefined());
        // need to re-assign bean as it gets overridden by $ev->display

        $smarty->assign("bean", $this->focus);
        $smarty->display("modules/Leads/tpls/ConvertLeadFooter.tpl");
    }

    public function getThisQuarter($q){

        $dateTimePeriod = new DateTime();

        $thisMonth = $dateTimePeriod->setDate(
            $dateTimePeriod->format('Y'),
            $dateTimePeriod->format('m'),
            1
        );
        if ($thisMonth >= $q[1]['start'] && $thisMonth <= $q[1]['end']) {
            // quarter 1
            $dateTimePeriod = $dateTimePeriod->setDate(
                $q[1]['end']->format('Y'),
                $q[1]['end']->format('m'),
                $q[1]['end']->format('d')
            );
        } elseif ($thisMonth >= $q[2]['start'] && $thisMonth <= $q[2]['end']) {
            // quarter 2
            $dateTimePeriod = $dateTimePeriod->setDate(
                $q[2]['end']->format('Y'),
                $q[2]['end']->format('m'),
                $q[2]['end']->format('d')
            );
        } elseif ($thisMonth >= $q[3]['start'] && $thisMonth <= $q[3]['end']) {
            // quarter 3
            $dateTimePeriod = $dateTimePeriod->setDate(
                $q[3]['end']->format('Y'),
                $q[3]['end']->format('m'),
                $q[3]['end']->format('d')
            );
        } elseif ($thisMonth >= $q[4]['start'] && $thisMonth <= $q[4]['end']) {
            // quarter 4
            $dateTimePeriod = $dateTimePeriod->setDate(
                $q[4]['end']->format('Y'),
                $q[4]['end']->format('m'),
                $q[4]['end']->format('d')
            );
        }
        $dateTimePeriod->setTime(23, 59, 59);
        return $dateTimePeriod;
    }

    protected function handleSave()
    {
        require_once('modules/Campaigns/utils.php');
        require_once("include/formbase.php");
        $lead = false;
        if (!empty($_REQUEST['record']))
        {
            $lead = new Lead();
            $lead->retrieve($_REQUEST['record']);
        }

        global $beanList;
        $this->loadDefs();
        $beans = array();
        $selectedBeans = array();
        $selects = array();

        // Make sure the contact object is availible for relationships.
        $beans['Contacts'] = new Contact();

        // Contacts
        if (!empty($_REQUEST['selectedContact']))
        {
            $beans['Contacts']->retrieve($_REQUEST['selectedContact']);
            if (!empty($beans['Contacts']->id))
            {
                $beans['Contacts']->new_with_id = false;
                unset($_REQUEST["convert_create_Contacts"]);
                unset($_POST["convert_create_Contacts"]);
            }
        }
        elseif (!empty($_REQUEST["convert_create_Contacts"]) && $_REQUEST["convert_create_Contacts"] != "false" && !isset($_POST['ContinueContact']))
        {
            require_once('modules/Contacts/ContactFormBase.php');
            $contactForm = new ContactFormBase();
            $duplicateContacts = $contactForm->checkForDuplicates('Contacts');

            if (isset($duplicateContacts))
            {
                echo $contactForm->buildTableForm($duplicateContacts,  'Contacts');
                return;
            }
            $this->new_contact = true;
        } elseif (isset($_POST['ContinueContact'])) {
            $this->new_contact = true;
        }
        // Accounts
        if (!empty($_REQUEST['selectedAccount']))
        {
            $_REQUEST['account_id'] = $_REQUEST['selectedAccount'];
            unset($_REQUEST["convert_create_Accounts"]);
            unset($_POST["convert_create_Accounts"]);
        }
        elseif (!empty($_REQUEST["convert_create_Accounts"]) && $_REQUEST["convert_create_Accounts"] != "false" && empty($_POST['ContinueAccount']))
        {
            require_once('modules/Accounts/AccountFormBase.php');
            $accountForm = new AccountFormBase();
            $duplicateAccounts = $accountForm->checkForDuplicates('Accounts');
            if (isset($duplicateAccounts))
            {
                echo $accountForm->buildTableForm($duplicateAccounts);
                return;
            }
        }

        foreach ($this->defs as $module => $vdef)
        {
            //Create a new record if "create" was selected
            if (!empty($_REQUEST["convert_create_$module"]) && $_REQUEST["convert_create_$module"] != "false")
            {
                //Save the new record
                $bean = $beanList[$module];
                if (empty($beans[$module]))
                    $beans[$module] = new $bean();

                $this->populateNewBean($module, $beans[$module], $beans['Contacts'], $lead);
                // when creating a new contact, create the id for linking with other modules
                // and do not populate it with lead's old account_id
                if ($module == 'Contacts')
                {
                    $beans[$module]->id = create_guid();
                    $beans[$module]->new_with_id = true;
                    $beans[$module]->account_id = '';
                }
            }
            //If an existing bean was selected, relate it to the contact
            else if (!empty($vdef['ConvertLead']['select']))
            {
                //Save the new record
                $select = $vdef['ConvertLead']['select'];
                $fieldDef = $beans['Contacts']->field_defs[$select];
                if (!empty($fieldDef['id_name']) && !empty($_REQUEST[$fieldDef['id_name']]))
                {
                    $idName = $fieldDef['id_name'];
                    $beans['Contacts']->$idName = $_REQUEST[$idName];
                    $selects[$module] = $_REQUEST[$idName];
                    if (!empty($_REQUEST[$select]))
                    {
                        $beans['Contacts']->$select = $_REQUEST[$select];
                    }
                    // Bug 39268 - Add the existing beans to a list of beans we'll potentially add the lead's activities to
                    $bean = loadBean($module);
                    $bean->retrieve($_REQUEST[$idName]);
                    $selectedBeans[$module] = $bean;
                    // If we selected the Contact, just overwrite the $beans['Contacts']
                    if ($module == 'Contacts')
                    {
                        $beans[$module] = $bean;
                    }
                }
            }
        }

        $this->handleActivities($lead, $beans);
        // Bug 39268 - Add the lead's activities to the selected beans
        $this->handleActivities($lead, $selectedBeans);

        //link selected account to lead if it exists
        if (!empty($selectedBeans['Accounts']))
        {
            $lead->account_id = $selectedBeans['Accounts']->id;
        }

        // link account to contact, if we picked an existing contact and created a new account
        if (!empty($beans['Accounts']->id) && !empty($beans['Contacts']->account_id)
            && $beans['Accounts']->id != $beans['Contacts']->account_id)
        {
            $beans['Contacts']->account_id = $beans['Accounts']->id;
        }

        // Saving beans with priorities.
        // Contacts and Accounts should be saved before lead activities to create correct relations
        $saveBeanPriority = array('Contacts', 'Accounts');
        $tempBeans = array();

        foreach ($saveBeanPriority as $name)
        {
            if (isset($beans[$name]))
            {
                $tempBeans[$name] = $beans[$name];
            }
        }

        $beans = array_merge($tempBeans, $beans);
        unset($tempBeans);

        //Handle non-contacts relationships
        foreach ($beans as $bean)
        {
            if (!empty($lead))
            {
                if (empty($bean->assigned_user_id))
                {
                    $bean->assigned_user_id = $lead->assigned_user_id;
                }
                $leadsRel = $this->findRelationship($bean, $lead);
                if (!empty($leadsRel))
                {
                    $bean->load_relationship($leadsRel);
                    $relObject = $bean->$leadsRel->getRelationshipObject();
                    if ($relObject->relationship_type == "one-to-many" && $bean->$leadsRel->getSide() == REL_LHS)
                    {
                        $id_field = $relObject->rhs_key;
                        $lead->$id_field = $bean->id;
                    }
                    else
                    {
                        $bean->$leadsRel->add($lead->id);
                    }
                }
            }
            //Special case code for opportunities->Accounts
            if ($bean->object_name == "Opportunity" && empty($bean->account_id))
            {
                if (isset($beans['Accounts']))
                {
                    $bean->account_id = $beans['Accounts']->id;
                    $bean->account_name = $beans['Accounts']->name;
                }
                else if (!empty($selects['Accounts']))
                {
                    $bean->account_id = $selects['Accounts'];
                }
            }

            //create meetings-users relationship
            if ($bean->object_name == "Meeting")
            {
                $bean = $this->setMeetingsUsersRelationship($bean);
            }
            $this->copyAddressFields($bean, $beans['Contacts']);

            $bean->save();
            //if campaign id exists then there should be an entry in campaign_log table for the newly created contact: bug 44522
            if (isset($lead->campaign_id) && $lead->campaign_id != null && $bean->object_name == "Contact")
            {
                campaign_log_lead_or_contact_entry($lead->campaign_id, $lead, $beans['Contacts'], 'contact');
            }
        }

        // Relate Contact and Account using custom M2M relationship
        $relationship = $this->defs['Accounts']['ConvertLead']['relationship'];
        $beans['Contacts']->load_relationship($relationship);
        if(isset($beans['Accounts']->id) && !empty($beans['Accounts']->id)){
            $beans['Contacts']->$relationship->add($beans['Accounts']->id);
        }else if(isset($_REQUEST['account_id']) && !empty($_REQUEST['account_id'])){
            $beans['Contacts']->$relationship->add($_REQUEST['account_id']);
        }

        if (!empty($lead))
        {	//Mark the original Lead converted
            $lead->status = "Converted";
            $lead->converted = '1';
            $lead->in_workflow = true;
            $lead->save();
        }

        $this->displaySaveResults($beans);
    }
}
