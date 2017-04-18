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

require_once 'include/MVC/Controller/SugarController.php';

class SA_QuizQuestionsController extends SugarController
{
    public function action_getQuestions() {
        $id = $_REQUEST['id'];

        $bean = BeanFactory::getBean('SA_Quizzes',$id);
        $randomise_flag = $bean->randomise_questions;
        $bean->load_relationship('sa_quizzes_sa_quizquestions_1');
        $relatedBean = $bean->sa_quizzes_sa_quizquestions_1->getBeans();
        $questions_container = array();

        foreach ($relatedBean as $question) {
            $current_question = array(
                'id' => $question->id,
                'name' => html_entity_decode($question->name),
                'question_number' => $question->question_number,
                'answer_a' => html_entity_decode($question->possible_answer_a),
                'answer_b' => html_entity_decode($question->possible_answer_b),
                'answer_c' => html_entity_decode($question->possible_answer_c),
                'answer_d' => html_entity_decode($question->possible_answer_d),
                'correct_answer' => $question->correct_answer,
            );
            
            array_push($questions_container,$current_question);
        }

        // If Randomise Questions is set, shuffle the questions.
        if ($randomise_flag == 1) {
            shuffle($questions_container);
        }

        echo json_encode($questions_container);
        die();
    }

    public function action_quizSubmit() {
        global $current_user;
        parse_str($_POST['form'],$answer);
        $id = $_REQUEST['id'];

        $quiz = BeanFactory::getBean('SA_Quizzes',$id);
        $pass_score = $quiz->pass_score;

        $submission = BeanFactory::getBean('SA_QuizSubmissions');
        $submission->assigned_user_id = $current_user->id;
        $submission->name = $current_user->user_name;
        $submission->sa_quizzes_sa_quizsubmissions_1sa_quizzes_ida = $id;
        $submission->save();

        $number_of_answers = count($answer);
        $number_correct = 0;

        foreach ($answer as $key => $value) {
            foreach ($_POST['questions'] as $question ) {
                if ($question['id'] === $key) {
                    $correct_answer = strtolower($question['correct_answer']);
                }
            }

            if ($correct_answer == $value) {
                $correct_status = '1';
                $number_correct++;
            } else {
                $correct_status = '0';
            }

            $bean = BeanFactory::getBean('SA_QuizAnswers');
            $bean->question_answer = $value;
            $bean->correct_answer = $correct_answer;
            $bean->name = $current_user->user_name;
            $bean->assigned_user_id = $current_user->id;
            $bean->correct_status = $correct_status;
            $bean->sa_quizquestions_sa_quizanswers_1sa_quizquestions_ida = $key;
            $bean->sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida = $submission->id;
            $bean->sa_quizzes_sa_quizanswers_2sa_quizzes_ida = $id;
            $bean->save();

            $results[] = $bean->id;
        }

        $submission_score = 100 / $number_of_answers * $number_correct;
        $submission->score = $submission_score;
        $submission->total_questions = $number_of_answers;
        $submission->correct_answers = $number_correct;

        if ($submission_score >= $pass_score) {
            $submission_pass = 'yes';
        } else {
            $submission_pass = 'no';
        }

        $submission->pass = $submission_pass;
        $submission->status = 'complete';
        $submission->save();

        echo json_encode($results);
        die();
    }
}
?>