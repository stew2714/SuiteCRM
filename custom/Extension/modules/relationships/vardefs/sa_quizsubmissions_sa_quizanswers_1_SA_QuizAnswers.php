<?php
// created: 2017-04-18 11:12:05
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizsubmissions_sa_quizanswers_1"] = array (
  'name' => 'sa_quizsubmissions_sa_quizanswers_1',
  'type' => 'link',
  'relationship' => 'sa_quizsubmissions_sa_quizanswers_1',
  'source' => 'non-db',
  'module' => 'SA_QuizSubmissions',
  'bean_name' => 'SA_QuizSubmissions',
  'vname' => 'LBL_SA_QUIZSUBMISSIONS_SA_QUIZANSWERS_1_FROM_SA_QUIZSUBMISSIONS_TITLE',
  'id_name' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida',
);
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizsubmissions_sa_quizanswers_1_name"] = array (
  'name' => 'sa_quizsubmissions_sa_quizanswers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_QUIZSUBMISSIONS_SA_QUIZANSWERS_1_FROM_SA_QUIZSUBMISSIONS_TITLE',
  'save' => true,
  'id_name' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida',
  'link' => 'sa_quizsubmissions_sa_quizanswers_1',
  'table' => 'sa_quizsubmissions',
  'module' => 'SA_QuizSubmissions',
  'rname' => 'name',
);
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida"] = array (
  'name' => 'sa_quizsubmissions_sa_quizanswers_1sa_quizsubmissions_ida',
  'type' => 'link',
  'relationship' => 'sa_quizsubmissions_sa_quizanswers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_QUIZSUBMISSIONS_SA_QUIZANSWERS_1_FROM_SA_QUIZANSWERS_TITLE',
);
