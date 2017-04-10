<?php
// created: 2017-04-04 10:13:21
$dictionary["SA_Courses"]["fields"]["sa_curriculum_sa_courses_1"] = array (
  'name' => 'sa_curriculum_sa_courses_1',
  'type' => 'link',
  'relationship' => 'sa_curriculum_sa_courses_1',
  'source' => 'non-db',
  'module' => 'SA_Curriculum',
  'bean_name' => 'SA_Curriculum',
  'vname' => 'LBL_SA_CURRICULUM_SA_COURSES_1_FROM_SA_CURRICULUM_TITLE',
  'id_name' => 'sa_curriculum_sa_courses_1sa_curriculum_ida',
);
$dictionary["SA_Courses"]["fields"]["sa_curriculum_sa_courses_1_name"] = array (
  'name' => 'sa_curriculum_sa_courses_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_CURRICULUM_SA_COURSES_1_FROM_SA_CURRICULUM_TITLE',
  'save' => true,
  'id_name' => 'sa_curriculum_sa_courses_1sa_curriculum_ida',
  'link' => 'sa_curriculum_sa_courses_1',
  'table' => 'sa_curriculum',
  'module' => 'SA_Curriculum',
  'rname' => 'name',
);
$dictionary["SA_Courses"]["fields"]["sa_curriculum_sa_courses_1sa_curriculum_ida"] = array (
  'name' => 'sa_curriculum_sa_courses_1sa_curriculum_ida',
  'type' => 'link',
  'relationship' => 'sa_curriculum_sa_courses_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_CURRICULUM_SA_COURSES_1_FROM_SA_COURSES_TITLE',
);
