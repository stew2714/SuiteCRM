<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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


require_once('custom/include/MVC/views/view.create.php');

class AOS_ContractsViewCreate extends ViewCreate
{
    var $type = 'create';

    public function __construct()
    {
        parent::ViewCreate();
    }

    public function display()
    {

        $this->populateRelatedFields();
        echo '<link rel="stylesheet" href="custom/modules/AOS_Contracts/css/modal.css">';
        echo '<script src="custom/modules/AOS_Contracts/js/EditView.js" />';

        global $current_user, $sugar_config;

        $lockScript = '<script type="text/javascript" src="custom/modules/AOS_Contracts/js/Validation.js"></script>';
        //define so nothing breaks

        //we get the security groups so we can get all groups the current user is linked to.
        $secGroups = BeanFactory::getBean("SecurityGroups");
        $groups = $secGroups->getUserSecurityGroups($current_user->id);

        $this->ss->assign('LOCK_FILES', $lockScript);
        $tmpArray = $this->beanToArray();
        $this->ss->assign('BEAN_DATA', "<script>var beanData = JSON.parse('" . json_encode($tmpArray) . "'); </script>");


        $this->loadRelated();
        parent::display();

    }

    public function populateRelatedFields()
    {
        global $timedate;
        if ($_REQUEST['parent_type'] == "Opportunities" && !empty($_REQUEST['parent_id']) && empty($this->bean->id)) {
            $spareBean = BeanFactory::getBean($_REQUEST['parent_type'], $_REQUEST['parent_id']);
            $this->bean->opportunity_id = $_REQUEST['parent_id'];
            $this->bean->opportunity = $_REQUEST['opportunity_name'];
            $this->bean->assigned_user_id = $spareBean->assigned_user_id;
            $this->bean->apttus_request_date_c = $timedate->asUser($timedate->getNow());
            if(!empty($this->bean->opportunity_id)){
                $sql = "SELECT a_o.accounts_opportunities_3accounts_ida FROM accounts_opportunities_3_c a_o WHERE a_o.accounts_opportunities_3opportunities_idb = '".$this->bean->opportunity_id."' AND a_o.deleted = '0'";
                $result = $this->bean->db->query($sql);
                $accountRow = mysqli_fetch_row($result);
                if(!empty($accountRow['0'])) {
                    $accountBean = BeanFactory::getBean("Accounts", $accountRow['0']);
                    $this->bean->contract_account = $accountBean->name;
                    $this->bean->contract_account_id = $accountBean->id;
                }
            }
        }
    }

    public function loadRelated()
    {
        global $app_list_strings;

        foreach ($GLOBALS['app_list_strings']['CreateViewRelatedModule'][$this->bean->module_name] as $prefix =>
                 $related) {
            if (isset($this->bean->{$related['relationship']}) && !empty($this->bean->{$related['relationship']})) {
                $related = BeanFactory::getBean($related['module'], $this->bean->{$related['relationship']});
            }
            foreach ($related->field_defs as $name => $defs) {
                $this->bean->{$prefix . '_' . $name} = $related->{$name};
            }
        }
    }


    function beanToArray()
    {
        global $timedate, $current_user;
        $tmpArray = $this->bean->toArray();
        $tmpArray['today_month'] = date('m');
        if ($this->bean->previous_close_date_c != "") {
            $tmpDate = $timedate->fromString($this->bean->previous_close_date_c);
            $month = $tmpDate->format("m");
            $tmpArray['previous_date_month'] = $month;
        }
        $user = $current_user->toArray();
        $tmpArray['current_user'] = $user;
        $secGroups = new SecurityGroup();
        $groups = $secGroups->getUserSecurityGroups($current_user->id);
        $i = 0;
        foreach ($groups as $key => $group) {
            $groups[$i] = $group['name'];
            unset($groups[$key]);
            $i++;
        }
        $tmpArray['current_user']['roles'] = $groups;
        return $tmpArray;
    }

    public function preDisplay()
    {
        if (isset($_REQUEST["return_id"]) && $_REQUEST["return_id"] !== '' && isset($_REQUEST["return_module"]) && $_REQUEST["return_module"] !== '') {
            $reqBeanId = $_REQUEST["return_id"];
            $reqBeanType = $_REQUEST["return_module"];
            $returnBean = BeanFactory::getBean($reqBeanType, $reqBeanId);
            if ($returnBean->id !== ('' || null)) {
                $this->bean->apttus_requestor_name_c = $returnBean->assigned_user_name;
                $this->bean->Oneapttus_requestor_c = $returnBean->assigned_user_id;
                $this->bean->probability_c = $returnBean->probability;
            }
        }

        if(isset($_REQUEST['isAmendment']) && $_REQUEST['isAmendment'] === "true") {
            $agreementNumber = $this->bean->agreements_number_c;
            $agreementNumber = str_pad($agreementNumber, 8, '0', STR_PAD_LEFT);
            $amendment = $this->bean->amendment_c;
            $amendment += 1;
            $this->bean->amendment_c = $amendment;
            $amendment = str_pad($amendment, 2, '0', STR_PAD_LEFT);
            $this->bean->agreements_number_and_amendment_c = $agreementNumber.".".$amendment;
            $sql = "SELECT aos_contracts.id, aos_contracts.name FROM aos_contracts LEFT JOIN aos_contracts_cstm ON aos_contracts_cstm.id_c = aos_contracts.id WHERE aos_contracts.deleted = '0' AND aos_contracts_cstm.agreements_number_c = '$agreementNumber' AND aos_contracts_cstm.amendment_c = '0'";
            $result = $this->bean->db->query($sql);
            $contractsRow = mysqli_fetch_row($result);
            $this->bean->apttus_parent_agreement_name_c = $contractsRow[1];
            $this->bean->Oneapttus_parent_agreement_c = $contractsRow[0];
            $this->bean->apttus_status_category_c = "req";
            $this->bean->apttus_status_c = "req_ia";
        }

        if($this->bean->apttus_status_c == "eff_act" && $_REQUEST['isAmendment'] != "true") {
            $redirectURL = "index.php?module=AOS_Contracts&action=DetailView&record=".$this->bean->id;
            echo "<script>
                alert('This agreement has been activated. You are not allowed to edit it further.');
                window.location.href='$redirectURL';
                </script>";
        }

        parent::preDisplay();

    }


}