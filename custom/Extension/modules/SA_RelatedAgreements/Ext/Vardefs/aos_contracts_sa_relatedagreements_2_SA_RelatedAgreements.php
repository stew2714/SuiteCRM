<?php
// created: 2017-07-04 09:46:32
$dictionary["SA_RelatedAgreements"]["fields"]["aos_contracts_sa_relatedagreements_2"] = array (
  'name' => 'aos_contracts_sa_relatedagreements_2',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_relatedagreements_2',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'aos_contracts_sa_relatedagreements_2aos_contracts_ida',
);
$dictionary["SA_RelatedAgreements"]["fields"]["aos_contracts_sa_relatedagreements_2_name"] = array (
  'name' => 'aos_contracts_sa_relatedagreements_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'aos_contracts_sa_relatedagreements_2aos_contracts_ida',
  'link' => 'aos_contracts_sa_relatedagreements_2',
  'table' => 'aos_contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);
$dictionary["SA_RelatedAgreements"]["fields"]["aos_contracts_sa_relatedagreements_2aos_contracts_ida"] = array (
  'name' => 'aos_contracts_sa_relatedagreements_2aos_contracts_ida',
  'type' => 'link',
  'relationship' => 'aos_contracts_sa_relatedagreements_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_CONTRACTS_SA_RELATEDAGREEMENTS_2_FROM_SA_RELATEDAGREEMENTS_TITLE',
);
