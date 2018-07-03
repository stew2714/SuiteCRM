<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once 'CustomMeetingFormBase.php';

class CustomMeetingsController extends SugarController
{

    public function action_fetchData(){

        if ($_REQUEST['id']) {
            $bean = BeanFactory::getBean("Meetings", $_REQUEST['id']);
            $rel = "attachment_notes";
            if ($bean->load_relationship($rel)) {
                $results = $bean->{$rel}->getBeans();
                $result = [];
                foreach ($results as $beanResult) {
                    //                    $result[ ] = $beanResult->toArray();
                    $result[] = array(
                        "id"   => $beanResult->id,
                        "name" => $beanResult->name,
                        "url"  => "index.php?module=Notes&action=DetailView&record={$beanResult->id}"
                    );
                }
                echo json_encode(array("message" => "success", "results" => $result));
                die();
            }
        }
        echo json_encode(array("message" => "fail", "results" => array()));
        die();
    }

    public function action_removeAttachment(){
        if ($_REQUEST['id']) {
            $bean = BeanFactory::getBean("Notes", $_REQUEST['id']);
            $bean->deleted = 1;
            $array = array("message" => "success", "id" => $bean->id);
            $bean->save();
                echo json_encode($array);
                die();
        }
        echo json_encode(array("message" => "fail"));
        die();
    }
    /**
     *
     */
    public function action_cancelAndNotify()
    {
        $formBase = new CustomMeetingFormBase();

        $this->bean->name = 'CANCELLED ' . $this->bean->name;
        $this->bean->status = 'Not Held';
        $this->bean->save();

        $formBase->cancelAndNotify($this->bean);

        SugarApplication::redirect('index.php?module=Meetings&record=' . $this->bean->id . '&action=DetailView');
    }
    /**
     *
     */
    public function action_cancelAndNotifyCalendar()
    {
        $formBase = new CustomMeetingFormBase();
        $meetingBean = new Meeting();
        $meetingBean->retrieve($_REQUEST['record_id']);

        $meetingBean->name = 'CANCELLED ' . $meetingBean->name;
        $meetingBean->status = 'Not Held';
        $meetingBean->save();

        $formBase->cancelAndNotify($meetingBean);

        echo 'true';
    }
}

