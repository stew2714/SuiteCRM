<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 */

$dictionary['SA_QuizSubmissions'] = array(
    'table' => 'sa_quizsubmissions',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'total_questions' =>
            array(
                'required' => true,
                'name' => 'total_questions',
                'vname' => 'LBL_TOTAL_QUESTIONS',
                'type' => 'int',
                'len' => 100,
                'isnull' => 'false',
                'unified_search' => true,
                'comments' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'reportable' => true,
                'disable_num_format' => true,
            ),
        'correct_answers' =>
            array(
                'required' => true,
                'name' => 'correct_answers',
                'vname' => 'LBL_CORRECT_ANSWERS',
                'type' => 'int',
                'len' => 100,
                'isnull' => 'false',
                'unified_search' => true,
                'comments' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'reportable' => true,
                'disable_num_format' => true,
            ),
        'score' =>
            array(
                'required' => true,
                'name' => 'score',
                'vname' => 'LBL_QUIZ_SUBMISSION_SCORE',
                'type' => 'int',
                'len' => 3,
                'isnull' => 'false',
                'unified_search' => true,
                'comments' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'reportable' => true,
                'disable_num_format' => true,
            ),
        'pass' =>
            array (
                'required' => true,
                'name' => 'pass',
                'vname' => 'LBL_PASS_FAIL',
                'type' => 'enum',
                'massupdate' => '0',
                'default' => '',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'inline_edit' => true,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'pass_fail_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'quiz_start_time' => array(
            'name' => 'quiz_start_time',
            'vname' => 'LBL_QUIZ_START_TIME',
            'type' => 'datetimecombo',
            'dbType' => 'datetime',
            'comment' => 'Start time of the quiz',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'quiz_end_time' => array(
            'name' => 'quiz_end_time',
            'vname' => 'LBL_QUIZ_END_TIME',
            'type' => 'datetimecombo',
            'dbType' => 'datetime',
            'comment' => 'End time of the quiz',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'quiz_duration' =>
            array(
                'required' => true,
                'name' => 'quiz_duration',
                'vname' => 'LBL_QUIZ_DURATION',
                'type' => 'int',
                'len' => 100,
                'isnull' => 'false',
                'unified_search' => true,
                'comments' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'reportable' => true,
                'disable_num_format' => true,
            ),
        'status' =>
            array (
                'required' => true,
                'name' => 'status',
                'vname' => 'LBL_QUIZ_STATUS',
                'type' => 'enum',
                'massupdate' => '0',
                'default' => '',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'inline_edit' => true,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'quiz_status_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('SA_QuizSubmissions', 'SA_QuizSubmissions', array('basic','assignable','security_groups'));