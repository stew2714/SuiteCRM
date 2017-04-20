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


class SA_AssignmentsController extends SugarController
{
	function action_sendInvite() {
        global $app_list_strings, $app_strings, $mod_strings, $sugar_config;
        $id = $_POST['id'];
        $submission_type = $_POST['invite'];
        $bean = BeanFactory::getBean('SA_Assignments',$id);

        // Get the template
        $templateId = $sugar_config['invite_assignment'];
        $template = BeanFactory::getBean("EmailTemplates", $templateId);

        if ($submission_type == 'all') {
            $UserList = new User();
            $users = $UserList->get_full_list();
        } elseif ($submission_type == 'user-group') {
            $users = array();

            $group = $_POST['user-group'];

            $ssGroup = new SecurityGroup();
            $ssGroup->retrieve($group);

            if ($ssGroup->load_relationship("users")) {
                $listUsers = $ssGroup->users->getBeans();
                $users = array_merge($users, $listUsers);
            }
        } elseif ($submission_type == 'user') {
            $usersList = $_POST['user'];

            foreach ($usersList as $user) {
                $user = str_replace('^', '', $user);
                $theUser = new User();
                $theUser->retrieve($user);
                $users[$theUser->id] = $theUser;
            }
        }

        foreach ($users as $user) {
            $user->retrieve($user->id);

            if ($template === false || $user === false || $bean === false) {
                SA_AssignmentsController::parseAndSendBroadcastEmail($template, $user, $bean);
            } else {
                $GLOBALS['log']->fatal = "Error occurred: either Template or Bean is false or null on line 82 of SA_Assignments Controller";
            }
        }

        header('Location: index.php?module=SA_Assignments&record=' . $id . '&action=DetailView&result=success');
        exit();
    }

    public static function parseAndSendBroadcastEmail($template,$user,$bean) {
        global $sugar_config;
        //populate template
        $subject = $template->parse_template_bean(html_entity_decode($template->subject), 'Users', $user);
        $subject = $template->parse_template_bean(html_entity_decode($subject), 'SA_Assignments', $bean);

        $bodyHTML = $template->parse_template_bean(html_entity_decode($template->body_html), 'Users', $user);
        $bodyHTML = $template->parse_template_bean(html_entity_decode($bodyHTML), 'SA_Assignments', $bean);

        $bodyPlain = $template->parse_template_bean(html_entity_decode($template->subject), 'Users', $user);
        $bodyPlain = $template->parse_template_bean(html_entity_decode($subject), 'SA_Assignments', $bean);

        $bodyHTML = str_replace('$url',$sugar_config['site_url'],$bodyHTML);
        $bodyPlain = str_replace('$url',$sugar_config['site_url'],$bodyPlain);

        //Send email
        $success = SA_AssignmentsController::sendEmail($user->email1,$subject,$bodyHTML,$bodyPlain,$user);
        return $success;
    }

    function sendEmail($emailTo, $emailSubject, $emailBody, $altemailBody, SugarBean $relatedBean = null)
    {
        $emailTo = array($emailTo);
        require_once('modules/Emails/Email.php');
        require_once('include/SugarPHPMailer.php');

        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();
        $mail->setMailerForSystem();
        $mail->From = $defaults['email'];
        $mail->FromName = $defaults['name'];
        $mail->ClearAllRecipients();
        $mail->ClearReplyTos();
        $mail->Subject=from_html($emailSubject);
        $mail->Body=$emailBody;
        $mail->AltBody = $altemailBody;
//        $mail->handleAttachments($attachments);
        $mail->prepForOutbound();

        if(empty($emailTo)) return false;
        foreach($emailTo as $to){
            $mail->AddAddress($to);
        }
        if(!empty($emailCc)){
            foreach($emailCc as $email){
                $mail->AddCC($email);
            }
        }
        if(!empty($emailBcc)){
            foreach($emailBcc as $email){
                $mail->AddBCC($email);
            }
        }

        //now create email
        if (@$mail->Send()) {
            $emailObj->to_addrs= implode(',',$emailTo);
            $emailObj->cc_addrs= implode(',',$emailCc);
            $emailObj->bcc_addrs= implode(',',$emailBcc);
            $emailObj->type= 'out';
            $emailObj->deleted = '0';
            $emailObj->name = $mail->Subject;
            $emailObj->description = $mail->AltBody;
            $emailObj->description_html = $mail->Body;
            $emailObj->from_addr = $mail->From;
            if ( $relatedBean instanceOf SugarBean && !empty($relatedBean->id) ) {
                $emailObj->parent_type = $relatedBean->module_dir;
                $emailObj->parent_id = $relatedBean->id;
            }
            $emailObj->date_sent = TimeDate::getInstance()->nowDb();
            $emailObj->modified_user_id = '1';
            $emailObj->created_by = '1';
            $emailObj->status = 'sent';
            $emailObj->save();

            return true;
        }
        return false;
    }
}
?>