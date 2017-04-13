<?php
// created: 2017-04-13 09:17:31
$dictionary["SA_Quizzes"]["fields"]["sa_assignments_sa_quizzes_1"] = array (
  'name' => 'sa_assignments_sa_quizzes_1',
  'type' => 'link',
  'relationship' => 'sa_assignments_sa_quizzes_1',
  'source' => 'non-db',
  'module' => 'SA_Assignments',
  'bean_name' => 'SA_Assignments',
  'vname' => 'LBL_SA_ASSIGNMENTS_SA_QUIZZES_1_FROM_SA_ASSIGNMENTS_TITLE',
  'id_name' => 'sa_assignments_sa_quizzes_1sa_assignments_ida',
);
$dictionary["SA_Quizzes"]["fields"]["sa_assignments_sa_quizzes_1_name"] = array (
  'name' => 'sa_assignments_sa_quizzes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_ASSIGNMENTS_SA_QUIZZES_1_FROM_SA_ASSIGNMENTS_TITLE',
  'save' => true,
  'id_name' => 'sa_assignments_sa_quizzes_1sa_assignments_ida',
  'link' => 'sa_assignments_sa_quizzes_1',
  'table' => 'sa_assignments',
  'module' => 'SA_Assignments',
  'rname' => 'name',
);
$dictionary["SA_Quizzes"]["fields"]["sa_assignments_sa_quizzes_1sa_assignments_ida"] = array (
  'name' => 'sa_assignments_sa_quizzes_1sa_assignments_ida',
  'type' => 'link',
  'relationship' => 'sa_assignments_sa_quizzes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_ASSIGNMENTS_SA_QUIZZES_1_FROM_SA_QUIZZES_TITLE',
);
