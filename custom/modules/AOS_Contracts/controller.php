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

class AOS_ContractsController extends SugarController
{
    public function action_CreateView()
    {
        $this->view = "create";
    }
    public function action_EditView()
    {
        $this->view = "create";
    }
    public function action_DetailView()
    {
        $this->view = "detailcombined";
    }

    public function action_DetailCombinedView()
    {
        $this->view = "detailcombined";
    }

    public function action_save(){
        global $app_list_strings;
        $related = $app_list_strings['CreateViewRelatedModule'][ $this->module ];

        if(empty($this->bean->agreements_number_and_amendment_c) && empty($this->record)) {
            $sql = "SELECT agreements_number_and_amendment_c, agreements_number_c, amendment_c 
                     FROM aos_contracts_cstm WHERE agreements_number_and_amendment_c IS NOT NULL ORDER BY agreements_number_c DESC";
            $result = $this->bean->db->query($sql);
            $numberRow = mysqli_fetch_row($result);
            if(empty($numberRow['0'])) {
                $this->bean->agreements_number_c = "500000";
                $this->bean->amendment_c = "0";
                $this->bean->agreements_number_and_amendment_c = "00500000.00";
            } else {
                $newNumber = $numberRow['1'] + 1;
                $this->bean->agreements_number_c = $newNumber;
                $newNumber = str_pad($newNumber, 8, '0', STR_PAD_LEFT);
                $this->bean->amendment_c = "0";
                $this->bean->agreements_number_and_amendment_c = $newNumber . ".00";
            }
            $this->bean->apttus_status_category_c = "req";
            $this->bean->apttus_status_c = "req_sr";
        } elseif(!empty($this->bean->Oneapttus_parent_agreement_c)) {
            $sql = "UPDATE aos_contracts_cstm SET aos_contracts_cstm.apttus_status_c = 'eff_ba' WHERE aos_contracts_cstm.id_c = '".$this->bean->Oneapttus_parent_agreement_c."'";
            $this->bean->db->query($sql);
            $sql = "UPDATE aos_contracts_cstm SET aos_contracts_cstm.is_latest_c = FALSE WHERE aos_contracts_cstm.agreements_number_c = '".$this->bean->agreements_number_c."'";
            $this->bean->db->query($sql);
            $this->bean->is_latest_c = true;
        }

        foreach($related as $key => $relationship){
            $bean = BeanFactory::getBean($relationship['module']);

            foreach($_REQUEST as $key2 => $field){
                if(substr($key2, 0, 3) == $key){
                    $tmp = substr($key2, 4);
                    $bean->{$tmp} = $_REQUEST[ $key2 ];
                }
            }
            $bean->save();
            $this->bean->{$relationship['relationship']} = $bean->id;
        }
        parent::action_save();

    }
      /********************/
     /* BUTTON FUNCTIONS */
    /********************/

      /**************/
     /* SALES USER */
    /**************/

    public function action_submitRequest()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->load_relationship('g1_group_queue_aos_contracts');
            $bean->g1_group_queue_aos_contracts->add($sugar_config['Legal']);
            $bean->assigned_user_id = '';
            $bean->user_id2 = $current_user->id;
            $bean->date_requested_c = $timedate->nowDb();
            $bean->apttus_status_category_c = "req";
            $bean->apttus_status_c = "req_sr";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

    public function action_cancelRequest()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->apttus_status_category_c = "req";
            $bean->apttus_status_c = "req_cr";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

      /**************/
     /* LEGAL USER */
    /**************/

    public function action_acceptRequestLegal()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->load_relationship('g1_group_queue_aos_contracts');
            $bean->g1_group_queue_aos_contracts->remove($sugar_config['Legal']);
            $bean->assigned_user_id = $current_user->id;
            $bean->apttus_status_category_c = "aut";
            $bean->apttus_status_c = "aut_ar";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

    public function action_returnToRequester()
    {
        global $current_user, $sugar_config, $timedate;

        if ($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->assigned_user_id = $bean->user_id2;
            $bean->date_requested_c = $timedate->nowDb();
            $bean->apttus_status_category_c = "req";
            $bean->apttus_status_c = "req_ai";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

    public function action_redLineReview()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->apttus_status_category_c = "aut";
            $bean->apttus_status_c = "aut_mrr";
            $bean->ts_mmodal_redline_review_c = $timedate->nowDb();
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

    public function action_sendForSignatures()
    {
        global $current_user, $sugar_config, $timedate;

        /** PLUGIN DEV REQUIRED - EMAIL TEMPLATE **/

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->apttus_status_category_c = "sig";
            $bean->apttus_status_c = "sig_fco";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

    public function action_sendForReview()
    {
        global $current_user, $sugar_config, $timedate;

        /** PLUGIN DEV REQUIRED - EMAIL TEMPLATE **/

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->apttus_status_category_c = "aut";
            $bean->apttus_status_c = "aut_opr";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

     /** Amend Button Function would be here **/

    public function action_sendToCommOps()
    {
        global $current_user, $current_date, $sugar_config;

        if ($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->load_relationship('g1_group_queue_aos_contracts');
            $bean->g1_group_queue_aos_contracts->add($sugar_config['CommOps']);
            $bean->assigned_user_id = $current_user->id;
            $bean->apttus_status_category_c = "sig";
            $bean->apttus_status_c = "sig_fco";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

      /*****************/
     /* COMM OPS USER */
    /*****************/

    public function action_acceptRequestCommOps()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->apttus_status_category_c = "sig";
            $bean->apttus_status_c = "sig_fco";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }


    public function action_sendLegal()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->load_relationship('g1_group_queue_aos_contracts');
            $bean->g1_group_queue_aos_contracts->add($sugar_config['Legal']);
            $bean->assigned_user_id = '';
            $bean->user_id2 = $current_user->id;
            $bean->apttus_status_category_c = "aut";
            $bean->apttus_status_c = "aut_ai";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

    public function action_activateRequest()
    {
        global $current_user, $sugar_config, $timedate;

        if($_REQUEST['record']) {
            $bean = BeanFactory::getBean("AOS_Contracts", $_REQUEST['record']);
            $bean->apttus_status_category_c = "eff";
            $bean->apttus_status_c = "eff_act";
            $bean->save();
            echo "success";
            die();
        } else {
            echo "fail";
            die();
        }
    }

}
?>