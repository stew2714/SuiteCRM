<?php
// created: 2017-07-18 08:18:04
$dictionary["SA_Legal_Timesheets"]["fields"]["aos_contracts_sa_legal_timesheets_1"] = array (
  'name' => 'aos_contracts_sa_legal_timesheets_1',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_legal_timesheets_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_AOS_CONTRACTS_SA_LEGAL_TIMESHEETS_1_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'aos_contracts_sa_legal_timesheets_1aos_contracts_ida',
);
$dictionary["SA_Legal_Timesheets"]["fields"]["aos_contracts_sa_legal_timesheets_1_name"] = array (
  'name' => 'aos_contracts_sa_legal_timesheets_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_CONTRACTS_SA_LEGAL_TIMESHEETS_1_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'aos_contracts_sa_legal_timesheets_1aos_contracts_ida',
  'link' => 'aos_contracts_sa_legal_timesheets_1',
  'table' => 'aos_contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);
$dictionary["SA_Legal_Timesheets"]["fields"]["aos_contracts_sa_legal_timesheets_1aos_contracts_ida"] = array (
  'name' => 'aos_contracts_sa_legal_timesheets_1aos_contracts_ida',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_legal_timesheets_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_CONTRACTS_SA_LEGAL_TIMESHEETS_1_FROM_SA_LEGAL_TIMESHEETS_TITLE',
);
