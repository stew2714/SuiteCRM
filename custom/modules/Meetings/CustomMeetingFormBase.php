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

    /**
     * @inheritdoc
     */
    public function handleSave($prefix, $redirect = true, $useRequired = false)
    {
        $focus = parent::handleSave($prefix, false, $useRequired);

        if ($this->meetingHasBeenCancelledNow()) {
            $this->cancelAndNotify($focus);
        }
    }

    /**
     * @param Meeting $bean
     */
    public function cancelAndNotify($bean)
    {
        $this->focus = $bean;

        $this->notifyAttendants();

        SugarApplication::redirect('index.php?module=Meetings&record=' . $this->focus->id . '&action=DetailView');
    }

    /**
     * @return bool
     */
    private function meetingHasBeenCancelledNow()
    {
        // new record?
        if (!$this->focus->fetched_row) {
            return false;
        }

        // is not cancelled now
        if (substr($this->focus->name, 0, 9) !== 'CANCELLED') {
            return false;
        }

        // was cancelled before
        if (substr($this->focus->fetched_row['name'], 0, 9) === 'CANCELLED') {
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

        if ($this->focus->load_relationship('contacts')) {
            foreach ($this->focus->contacts->getBeans() as $contact) {
                $this->sendEmailToInvitee($contact->email1);
            }
        }

        if ($this->focus->load_relationship('leads')) {
            foreach ($this->focus->leads->getBeans() as $lead) {
                $this->sendEmailToInvitee($lead->email1);
            }
        }

        if ($this->focus->load_relationship('users')) {
            foreach ($this->focus->users->getBeans() as $user) {
                $this->sendEmailToInvitee($user->email1);
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

        if (!$this->emailTemplate) {
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
            $app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] . aop_parse_template(
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
