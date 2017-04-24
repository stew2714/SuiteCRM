<?php
// created: 2017-04-18 10:59:47
$dictionary["SA_QuizSubmissions"]["fields"]["sa_quizzes_sa_quizsubmissions_1"] = array (
  'name' => 'sa_quizzes_sa_quizsubmissions_1',
  'type' => 'link',
  'relationship' => 'sa_quizzes_sa_quizsubmissions_1',
  'source' => 'non-db',
  'module' => 'SA_Quizzes',
  'bean_name' => 'SA_Quizzes',
  'vname' => 'LBL_SA_QUIZZES_SA_QUIZSUBMISSIONS_1_FROM_SA_QUIZZES_TITLE',
  'id_name' => 'sa_quizzes_sa_quizsubmissions_1sa_quizzes_ida',
);
$dictionary["SA_QuizSubmissions"]["fields"]["sa_quizzes_sa_quizsubmissions_1_name"] = array (
  'name' => 'sa_quizzes_sa_quizsubmissions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_QUIZZES_SA_QUIZSUBMISSIONS_1_FROM_SA_QUIZZES_TITLE',
  'save' => true,
  'id_name' => 'sa_quizzes_sa_quizsubmissions_1sa_quizzes_ida',
  'link' => 'sa_quizzes_sa_quizsubmissions_1',
  'table' => 'sa_quizzes',
  'module' => 'SA_Quizzes',
  'rname' => 'name',
);
$dictionary["SA_QuizSubmissions"]["fields"]["sa_quizzes_sa_quizsubmissions_1sa_quizzes_ida"] = array (
  'name' => 'sa_quizzes_sa_quizsubmissions_1sa_quizzes_ida',
  'type' => 'link',
  'relationship' => 'sa_quizzes_sa_quizsubmissions_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_QUIZZES_SA_QUIZSUBMISSIONS_1_FROM_SA_QUIZSUBMISSIONS_TITLE',
);
