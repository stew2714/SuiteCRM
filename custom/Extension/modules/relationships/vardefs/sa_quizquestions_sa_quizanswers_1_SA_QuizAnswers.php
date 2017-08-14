<?php
// created: 2017-04-18 10:11:54
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizquestions_sa_quizanswers_1"] = array (
  'name' => 'sa_quizquestions_sa_quizanswers_1',
  'type' => 'link',
  'relationship' => 'sa_quizquestions_sa_quizanswers_1',
  'source' => 'non-db',
  'module' => 'SA_QuizQuestions',
  'bean_name' => 'SA_QuizQuestions',
  'vname' => 'LBL_SA_QUIZQUESTIONS_SA_QUIZANSWERS_1_FROM_SA_QUIZQUESTIONS_TITLE',
  'id_name' => 'sa_quizquestions_sa_quizanswers_1sa_quizquestions_ida',
);
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizquestions_sa_quizanswers_1_name"] = array (
  'name' => 'sa_quizquestions_sa_quizanswers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_QUIZQUESTIONS_SA_QUIZANSWERS_1_FROM_SA_QUIZQUESTIONS_TITLE',
  'save' => true,
  'id_name' => 'sa_quizquestions_sa_quizanswers_1sa_quizquestions_ida',
  'link' => 'sa_quizquestions_sa_quizanswers_1',
  'table' => 'sa_quizquestions',
  'module' => 'SA_QuizQuestions',
  'rname' => 'name',
);
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizquestions_sa_quizanswers_1sa_quizquestions_ida"] = array (
  'name' => 'sa_quizquestions_sa_quizanswers_1sa_quizquestions_ida',
  'type' => 'link',
  'relationship' => 'sa_quizquestions_sa_quizanswers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_QUIZQUESTIONS_SA_QUIZANSWERS_1_FROM_SA_QUIZANSWERS_TITLE',
);
