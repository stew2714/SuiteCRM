<?php
// created: 2017-04-12 14:29:57
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizzes_sa_quizanswers_1"] = array (
  'name' => 'sa_quizzes_sa_quizanswers_1',
  'type' => 'link',
  'relationship' => 'sa_quizzes_sa_quizanswers_1',
  'source' => 'non-db',
  'module' => 'SA_Quizzes',
  'bean_name' => 'SA_Quizzes',
  'vname' => 'LBL_SA_QUIZZES_SA_QUIZANSWERS_1_FROM_SA_QUIZZES_TITLE',
  'id_name' => 'sa_quizzes_sa_quizanswers_1sa_quizzes_ida',
);
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizzes_sa_quizanswers_1_name"] = array (
  'name' => 'sa_quizzes_sa_quizanswers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_QUIZZES_SA_QUIZANSWERS_1_FROM_SA_QUIZZES_TITLE',
  'save' => true,
  'id_name' => 'sa_quizzes_sa_quizanswers_1sa_quizzes_ida',
  'link' => 'sa_quizzes_sa_quizanswers_1',
  'table' => 'sa_quizzes',
  'module' => 'SA_Quizzes',
  'rname' => 'name',
);
$dictionary["SA_QuizAnswers"]["fields"]["sa_quizzes_sa_quizanswers_1sa_quizzes_ida"] = array (
  'name' => 'sa_quizzes_sa_quizanswers_1sa_quizzes_ida',
  'type' => 'link',
  'relationship' => 'sa_quizzes_sa_quizanswers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_QUIZZES_SA_QUIZANSWERS_1_FROM_SA_QUIZANSWERS_TITLE',
);
