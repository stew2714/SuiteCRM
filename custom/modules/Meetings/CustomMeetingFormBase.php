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

/*********************************************************************************
 * Description:  Base Form For Meetings
 * Portions created by SugarCRM are Copyright(C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once __DIR__ . '/../../../modules/Meetings/MeetingFormBase.php';
require_once __DIR__ . '/../../../include/SugarPHPMailer.php';
require_once __DIR__ . '/../../../modules/AOP_Case_Updates/util.php';

class CustomMeetingFormBase extends MeetingFormBase
{
    /**
     * @var Meeting
     */
    private $focus;

    /**
     * @var EmailTemplate
     */
    private $emailTemplate;

    /**
     * @var Administration
     */
    private $admin;


    private $inviteChange = false;
    /**
     * @inheritdoc
     */
    public function handleSave($prefix, $redirect = true, $useRequired = false)
    {
        //stop sending the invites as we know currently.
        $sendInvites = false;
        if($_REQUEST['send_invites'] == true){
            $_REQUEST['send_invites'] = false;
            $sendInvites = true;
            if(!empty($_REQUEST['record']) ){
                $tempBean = BeanFactory::getBean("Meetings", $_REQUEST['record']);
                if($tempBean != false && $tempBean->load_relationship("users")){
                    $tempObject = $tempBean->users->getBeans();
                    $tempObjectContact = [];
                    if( $tempBean->load_relationship("contacts") ){
                        $tempObjectContact = $tempBean->contacts->getBeans();
                    }
                    $tempObjectLeads = [];
                    if( $tempBean->load_relationship("contacts") ){
                        $tempObjectLeads = $tempBean->contacts->getBeans();
                    }
                    $list = array_filter(explode(",", $_REQUEST['user_invitees']));
                    foreach($list as $key => $value){
                        if(!is_object($tempObject[ $value ]) &&
                           !is_object($tempObjectContact[ $value ]) &&
                           !is_object($tempObjectLeads[ $value ]) ){
                            $this->inviteChange = true;
                            break;
                        }
                    }
                }
            }
            $this->totalInvites = explode(",", $_REQUEST["user_invitees"]);
        }
        $focus = parent::handleSave($prefix, false, $useRequired);

        if($sendInvites == true){
            $this->sendNotifications($focus);
        }

        if ($this->meetingHasBeenCancelledNow($focus)) {
            $this->cancelAndNotify($focus);
        }

        SugarApplication::redirect('index.php?module=Meetings&record=' . $focus->id . '&action=DetailView');
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    private function sendNotifications($bean)
    {
        //we want to send the invites to the same people as the core would.
        $notify_list = $bean->get_notification_recipients();
        $admin = new Administration();
        $admin->retrieveSettings();

        foreach ($notify_list as $notify_user) {
            $this->send_assignment_notifications($notify_user, $admin, $bean);
        }
    }

    private function addAttachments($notify_mail , $bean){
        $rel = "attachment_notes";



        if($bean->load_relationship($rel)) {
            $results = $bean->{$rel}->getBeans();
            if(count($results) > 0 ){
//                $notify_mail->addCustomHeader("Content-Type: text/calendar; charset=\"utf-8\"; method=REQUEST");
//                $notify_mail->addCustomHeader("Content-Transfer-Encoding: base64");
//                $notify_mail->addCustomHeader("Content-Transfer-Encoding: 8bit;");
                foreach($results as $relatedBean){
                    if(in_array($relatedBean->filename, $_FILES["file_create_file"]["name"]) ||
                        $this->inviteChange  == true)
                    {
                        $file = file_get_contents("upload/{$relatedBean->id}");
                        $notify_mail->addStringAttachment(
                            $file,
                            $relatedBean->filename,
                            'base64',
                            "{$relatedBean->file_mime_type}; charset=utf-8;"
                        );
                    }
//                    $notify_mail->addAttachment();
                }
            }
        }
        return $notify_mail;
    }
    public function send_assignment_notifications($notify_user, $admin, $bean){
        global $current_user;

        if (($this->object_name == 'Meeting' || $this->object_name == 'Call') || $notify_user->receive_notifications) {
            $sendToEmail = $notify_user->emailAddress->getPrimaryAddress($notify_user);
            $sendEmail = true;
            if (empty($sendToEmail)) {
                $GLOBALS['log']->warn("Notifications: no e-mail address set for user {$notify_user->user_name}, cancelling send");
                $sendEmail = false;
            }

            $notify_mail = $bean->create_notification_email($notify_user);
            $notify_mail = $this->addAttachments($notify_mail, $bean);
//            $notify_mail->ContentType = 'multipart/alternative';
            $notify_mail->setMailerForSystem();

            if (empty($admin->settings['notify_send_from_assigning_user'])) {
                $notify_mail->From = $admin->settings['notify_fromaddress'];
                $notify_mail->FromName = (empty($admin->settings['notify_fromname'])) ? "" : $admin->settings['notify_fromname'];
            } else {
                // Send notifications from the current user's e-mail (if set)
                $fromAddress = $current_user->emailAddress->getReplyToAddress($current_user);
                $fromAddress = !empty($fromAddress) ? $fromAddress : $admin->settings['notify_fromaddress'];
                $notify_mail->From = $fromAddress;
                //Use the users full name is available otherwise default to system name
                $from_name = !empty($admin->settings['notify_fromname']) ? $admin->settings['notify_fromname'] : "";
                $from_name = !empty($current_user->full_name) ? $current_user->full_name : $from_name;
                $notify_mail->FromName = $from_name;
            }

            $oe = new OutboundEmail();
            $oe = $oe->getUserMailerSettings($current_user);
            //only send if smtp server is defined
            if ($sendEmail) {
                $smtpVerified = false;

                //first check the user settings
                if (!empty($oe->mail_smtpserver)) {
                    $smtpVerified = true;
                }

                //if still not verified, check against the system settings
                if (!$smtpVerified) {
                    $oe = $oe->getSystemMailerSettings();
                    if (!empty($oe->mail_smtpserver)) {
                        $smtpVerified = true;
                    }
                }
                //if smtp was not verified against user or system, then do not send out email
                if (!$smtpVerified) {
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail, smtp server was not found ");
                    //break out
                    return;
                }

                if (!$notify_mail->send()) {
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail (method: {$notify_mail->Mailer}), (error: {$notify_mail->ErrorInfo})");
                } else {
                    $GLOBALS['log']->info("Notifications: e-mail successfully sent");
                }
            }
        }

        $path = SugarConfig::getInstance()->get('upload_dir','upload/') . $this->id;
        unlink($path);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * @param Meeting $bean
     */
    public function cancelAndNotify($bean)
    {
        $this->focus = $bean;

        $this->notifyAttendants();
    }

    /**
     * @param Meeting $focus
     * @return bool
     */
    private function meetingHasBeenCancelledNow($focus)
    {
        // new record?
        if (!$focus->fetched_row) {
            return false;
        }

        // is not cancelled now
        if (substr($focus->name, 0, 9) !== 'CANCELLED') {
            return false;
        }

        // was cancelled before
        if (substr($focus->fetched_row['name'], 0, 9) === 'CANCELLED') {
            return false;
        }

        return true;
    }

    /**
     *
     */
    private function notifyAttendants()
    {
        if (!$this->setUpMailer()) {
            return;
        }

        $this->notifyRelatedBeans('contacts');
        $this->notifyRelatedBeans('leads');
        $this->notifyRelatedBeans('users');
    }

    /**
     * @param string $relationship
     */
    private function notifyRelatedBeans($relationship)
    {
        if ($this->focus->load_relationship($relationship)) {
            foreach ($this->focus->$relationship->getBeans() as $relatedBean) {
                $this->sendEmailToInvitee($relatedBean->email1);
            }
        }
    }

    /**
     * @return bool
     */
    private function setUpMailer()
    {
        global $sugar_config, $log;

        if (!isset($sugar_config['MeetingCancelEmailTemplate'])) {
            $log->error('Email Template for notifying attendants of meeting cancellation not set in config.');
            return false;
        }

        $this->emailTemplate = new EmailTemplate();
        $this->emailTemplate->retrieve($sugar_config['MeetingCancelEmailTemplate']);

        if (empty($this->emailTemplate->id)) {
            $log->error('Email Template for notifying attendants of meeting cancellation not found in db.');
            return false;
        }

        $this->admin = new Administration();
        $this->admin->retrieveSettings();

        return true;
    }

    /**
     * @param $emailAddress
     * @return bool
     */
    private function sendEmailToInvitee($emailAddress)
    {
        if (!$emailAddress) {
            return false;
        }

        $mailer = new SugarPHPMailer();

        $mailer->prepForOutbound();
        $mailer->setMailerForSystem();

        $text = $this->populateTemplate($this->emailTemplate);
        $mailer->Subject = $text['subject'];
        $mailer->Body = $text['body'];
        $mailer->isHTML(true);
        $mailer->AltBody = $text['body_alt'];
        $mailer->From = $this->admin->settings['notify_fromaddress'];
        $mailer->FromName = $this->admin->settings['notify_fromname'];

        $mailer->addAddress($emailAddress);

        $organizer = new User();
        if(isset($this->assigned_user_id) && !empty($this->assigned_user_id)){
            $organizer->retrieve($this->assigned_user_id);
        }
        else{
            $organizer = $GLOBALS['current_user']; // Why this would happen no idea - this was the default originally
        }


        $path = SugarConfig::getInstance()->get('upload_dir','upload/') . $this->focus->id."-cancel";

        require_once("custom/modules/Meetings/vCal.php");
        $content = customvCal::get_ical_event($this->focus, $organizer);

        $mailer->Ical = $content;

        if(file_put_contents($path,$content)){
            //$mailer->addStringAttachment($content, 'meeting-cancel.ics', 'base64', 'text/calendar');
        }

        try {
            if ($mailer->send()) {
                return true;
            }
        } catch (phpmailerException $exception) {
            $GLOBALS['log']->fatal('Meeting Cancellation: sending email Failed:  ' . $exception->getMessage());
        }

        return false;
    }

    /**
     * @param EmailTemplate $template
     *
     * @return array
     */
    private function populateTemplate(EmailTemplate $template)
    {
        global $app_strings, $sugar_config;
        $beans = [
            'Meetings' => $this->focus->id,
        ];
        $ret = [];
        $ret['subject'] = from_html(aop_parse_template($template->subject, $beans));
        $ret['body'] = from_html(
            aop_parse_template(
                str_replace(
                    '$sugarurl',
                    $sugar_config['site_url'],
                    $template->body_html
                ),
                $beans
            )
        );
        $ret['body_alt'] = strip_tags(
            from_html(
                aop_parse_template(
                    str_replace(
                        '$sugarurl',
                        $sugar_config['site_url'],
                        $template->body
                    ),
                    $beans
                )
            )
        );

        return $ret;
    }
}
