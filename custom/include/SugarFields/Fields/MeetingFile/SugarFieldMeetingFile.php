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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');
require_once('custom/include/SugarFields/Fields/MeetingFile/multiUploadFile.php');


class SugarFieldMeetingFile extends SugarFieldBase {
    private function fillInOptions(&$vardef,&$displayParams) {
        if ( isset($vardef['allowEapm']) && $vardef['allowEapm'] == true ) {
            if ( empty($vardef['docType']) ) {
                $vardef['docType'] = 'doc_type';
            }
            if ( empty($vardef['docId']) ) {
                $vardef['docId'] = 'doc_id';
            }
            if ( empty($vardef['docUrl']) ) {
                $vardef['docUrl'] = 'doc_url';
            }
        } else {
            $vardef['allowEapm'] = false;
        }

        // Override the default module
        if ( isset($vardef['linkModuleOverride']) ) {
            $vardef['linkModule'] = $vardef['linkModuleOverride'];
        } else {
            $vardef['linkModule'] = '{$module}';
        }

        // This is needed because these aren't always filled out in the edit/detailview defs
        if ( !isset($vardef['fileId']) ) {
            if ( isset($displayParams['id']) ) {
                $vardef['fileId'] = $displayParams['id'];
            } else {
                $vardef['fileId'] = 'id';
            }
        }
    }

    function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        $this->fillInOptions($vardef,$displayParams);
        return parent::getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
	function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        $this->fillInOptions($vardef,$displayParams);

        $keys = $this->getAccessKey($vardef,'FILE',$vardef['module']);
        $displayParams['accessKeySelect'] = $keys['accessKeySelect'];
        $displayParams['accessKeySelectLabel'] = $keys['accessKeySelectLabel'];
        $displayParams['accessKeySelectTitle'] = $keys['accessKeySelectTitle'];
        $displayParams['accessKeyClear'] = $keys['accessKeyClear'];
        $displayParams['accessKeyClearLabel'] = $keys['accessKeyClearLabel'];
        $displayParams['accessKeyClearTitle'] = $keys['accessKeyClearTitle'];
        
        return parent::getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
    function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
    	return $this->getSmartyView($parentFieldArray, $vardef, $displayParams, $tabindex, 'SearchView');
    }
    
    public function save(&$bean, $params, $field, $vardef, $prefix = ''){

        global $sugar_config;

        require_once('include/upload_file.php');

        foreach($_FILES[ $field  . '_file']['name'] as $key => $file){
            $upload_file = new MultiUploadFile($prefix . $field . '_file',$key );

            if (isset($_REQUEST['remove_file_' . $field]) && $params['remove_file_' . $field] == 1) {
                $upload_file->unlink_file($file);
            }

            if (isset($_FILES[$prefix . $field . '_file']) && $upload_file->confirm_upload())
            {
                if (empty($bean->id)) {
                    $bean->id = create_guid();
                    $bean->new_with_id = true;
                }
                if (!empty($sugar_config['upload_individual_file_size'])) {
                    $maxSize = $sugar_config['upload_individual_file_size'] * 1024;
                    if ($_FILES[ $field  . '_file']['size'][$key] > $maxSize) {
                        // File is too big, we skip
                        continue;
                    }
                }

                $id = create_guid();
                $upload_file->final_move($id);
                $noteBean = BeanFactory::getBean("Notes");
                $noteBean->id = $id;
                $noteBean->new_with_id = true;
                $noteBean->name = $file;
                $noteBean->filename = $file;
                $noteBean->meeting_link_c = $bean->id;
                $noteBean->file_mime_type = $upload_file->mime_type;
                $noteBean->parent_id = $bean->id;
                $noteBean->parent_type = $bean->module_dir;
                $noteBean->save();
                //@todo relate the note bean back to the meeting.

            }
        }
    }
}
