<?php
// created: 2017-04-04 10:15:36
$dictionary["SA_Assignments"]["fields"]["sa_courses_sa_assignments_1"] = array (
  'name' => 'sa_courses_sa_assignments_1',
  'type' => 'link',
  'relationship' => 'sa_courses_sa_assignments_1',
  'source' => 'non-db',
  'module' => 'SA_Courses',
  'bean_name' => 'SA_Courses',
  'vname' => 'LBL_SA_COURSES_SA_ASSIGNMENTS_1_FROM_SA_COURSES_TITLE',
  'id_name' => 'sa_courses_sa_assignments_1sa_courses_ida',
);
$dictionary["SA_Assignments"]["fields"]["sa_courses_sa_assignments_1_name"] = array (
  'name' => 'sa_courses_sa_assignments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_COURSES_SA_ASSIGNMENTS_1_FROM_SA_COURSES_TITLE',
  'save' => true,
  'id_name' => 'sa_courses_sa_assignments_1sa_courses_ida',
  'link' => 'sa_courses_sa_assignments_1',
  'table' => 'sa_courses',
  'module' => 'SA_Courses',
  'rname' => 'name',
);
$dictionary["SA_Assignments"]["fields"]["sa_courses_sa_assignments_1sa_courses_ida"] = array (
  'name' => 'sa_courses_sa_assignments_1sa_courses_ida',
  'type' => 'link',
  'relationship' => 'sa_courses_sa_assignments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_COURSES_SA_ASSIGNMENTS_1_FROM_SA_ASSIGNMENTS_TITLE',
);
