<?php
$dictionary["SA_RelatedAgreements"]["fields"]["aos_contracts_sa_relatedagreements_1"] = array (
'name' => 'aos_contracts_sa_relatedagreements_1',
'type' => 'link',
'relationship' => 'aos_contracts_sa_relatedagreements_1',
'source' => 'non-db',
'module' => 'AOS_Contracts',
'bean_name' => 'AOS_Contracts',
'vname' => 'LBL_RELATED_AGREEMENTS_TITLE',
'id_name' => 'aos_contracts_sa_relatedagreements_1aos_contracts_ida',
);
$dictionary["SA_RelatedAgreements"]["fields"]["aos_contracts_sa_relatedagreements_1_name"] = array (
'name' => 'aos_contracts_sa_relatedagreements_1_name',
'type' => 'relate',
'source' => 'non-db',
'vname' => 'LBL_SA_VISITREPORTS_MEETINGS_1_FROM_MEETINGS_TITLE',
'save' => true,
'id_name' => 'aos_contracts_sa_relatedagreements_1aos_contracts_ida',
'link' => 'aos_contracts_sa_relatedagreements_1',
'table' => 'aos_contracts',
'module' => 'AOS_Contracts',
'rname' => 'name',
);
$dictionary["SA_RelatedAgreements"]["fields"]["aos_contracts_sa_relatedagreements_1aos_contracts_ida"] = array (
'name' => 'aos_contracts_sa_relatedagreements_1aos_contracts_ida',
'type' => 'link',
'relationship' => 'aos_contracts_sa_relatedagreements_1',
'source' => 'non-db',
'reportable' => false,
'side' => 'left',
'vname' => 'LBL_RELATED_AGREEMENTS_TITLE',
);