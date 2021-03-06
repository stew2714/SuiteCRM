<?php

// Created by VarDefBuilder: 2017-07-24 13:03:40
// Contact: brant.gardner@mmodal.com
// Note: Hand modified after build, do NOT regenerate

// Modified 2017-11-01 to patch relate fields

// Modified 2017-12-13 to enlarge recordtypeid_c per Dan Herrera

// Modified 2018-02-19 to remove all references to 'ext2' per email from SalesAgility

// Field: sf_id_c
$dictionary['Account']['fields']['sf_id_c']['name'] = 'sf_id_c';
$dictionary['Account']['fields']['sf_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['sf_id_c']['len'] = '18';
$dictionary['Account']['fields']['sf_id_c']['size'] = '20';
$dictionary['Account']['fields']['sf_id_c']['required'] = false;
$dictionary['Account']['fields']['sf_id_c']['comments'] = 'Auto-created entry for field sf_id_c';
$dictionary['Account']['fields']['sf_id_c']['vname'] = 'SF ID';
$dictionary['Account']['fields']['sf_id_c']['source'] = 'custom_fields';

// Field: recordtypeid_c
$dictionary['Account']['fields']['recordtypeid_c']['name'] = 'recordtypeid_c';
$dictionary['Account']['fields']['recordtypeid_c']['type'] = 'enum';
$dictionary['Account']['fields']['recordtypeid_c']['len'] = '35';
$dictionary['Account']['fields']['recordtypeid_c']['size'] = '20';
$dictionary['Account']['fields']['recordtypeid_c']['required'] = false;
$dictionary['Account']['fields']['recordtypeid_c']['comments'] = 'Auto-created entry for field recordtypeid_c';
$dictionary['Account']['fields']['recordtypeid_c']['vname'] = 'Record Type';
$dictionary['Account']['fields']['recordtypeid_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['recordtypeid_c']['options'] = 'acct_rectype_list';

// Field: lastactivitydate_c
$dictionary['Account']['fields']['lastactivitydate_c']['name'] = 'lastactivitydate_c';
$dictionary['Account']['fields']['lastactivitydate_c']['type'] = 'timestamp';
$dictionary['Account']['fields']['lastactivitydate_c']['len'] = '';
$dictionary['Account']['fields']['lastactivitydate_c']['size'] = '20';
$dictionary['Account']['fields']['lastactivitydate_c']['required'] = false;
$dictionary['Account']['fields']['lastactivitydate_c']['comments'] = 'Auto-created entry for field lastactivitydate_c';
$dictionary['Account']['fields']['lastactivitydate_c']['vname'] = 'Lastactivitydate';
$dictionary['Account']['fields']['lastactivitydate_c']['source'] = 'custom_fields';

// Field: slx_account_id_c
$dictionary['Account']['fields']['slx_account_id_c']['name'] = 'slx_account_id_c';
$dictionary['Account']['fields']['slx_account_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['slx_account_id_c']['len'] = '20';
$dictionary['Account']['fields']['slx_account_id_c']['size'] = '20';
$dictionary['Account']['fields']['slx_account_id_c']['required'] = false;
$dictionary['Account']['fields']['slx_account_id_c']['comments'] = 'Auto-created entry for field slx_account_id_c';
$dictionary['Account']['fields']['slx_account_id_c']['vname'] = 'SLX Account ID';
$dictionary['Account']['fields']['slx_account_id_c']['source'] = 'custom_fields';

// Field: ha_id_c
$dictionary['Account']['fields']['ha_id_c']['name'] = 'ha_id_c';
$dictionary['Account']['fields']['ha_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['ha_id_c']['len'] = '40';
$dictionary['Account']['fields']['ha_id_c']['size'] = '20';
$dictionary['Account']['fields']['ha_id_c']['required'] = false;
$dictionary['Account']['fields']['ha_id_c']['comments'] = 'Auto-created entry for field ha_id_c';
$dictionary['Account']['fields']['ha_id_c']['vname'] = 'HA ID';
$dictionary['Account']['fields']['ha_id_c']['source'] = 'custom_fields';

// Field: sales_region_c
$dictionary['Account']['fields']['sales_region_c']['name'] = 'sales_region_c';
$dictionary['Account']['fields']['sales_region_c']['type'] = 'varchar';
$dictionary['Account']['fields']['sales_region_c']['len'] = '255';
$dictionary['Account']['fields']['sales_region_c']['size'] = '20';
$dictionary['Account']['fields']['sales_region_c']['required'] = false;
$dictionary['Account']['fields']['sales_region_c']['comments'] = 'Auto-created entry for field sales_region_c';
$dictionary['Account']['fields']['sales_region_c']['vname'] = 'Sales Region';
$dictionary['Account']['fields']['sales_region_c']['source'] = 'custom_fields';

// Field: sales_territory_c
$dictionary['Account']['fields']['sales_territory_c']['name'] = 'sales_territory_c';
$dictionary['Account']['fields']['sales_territory_c']['type'] = 'varchar';
$dictionary['Account']['fields']['sales_territory_c']['len'] = '255';
$dictionary['Account']['fields']['sales_territory_c']['size'] = '20';
$dictionary['Account']['fields']['sales_territory_c']['required'] = false;
$dictionary['Account']['fields']['sales_territory_c']['comments'] = 'Auto-created entry for field sales_territory_c';
$dictionary['Account']['fields']['sales_territory_c']['vname'] = 'Sales Territory';
$dictionary['Account']['fields']['sales_territory_c']['source'] = 'custom_fields';

// Field: account_management_region_c
$dictionary['Account']['fields']['account_management_region_c']['name'] = 'account_management_region_c';
$dictionary['Account']['fields']['account_management_region_c']['type'] = 'varchar';
$dictionary['Account']['fields']['account_management_region_c']['len'] = '255';
$dictionary['Account']['fields']['account_management_region_c']['size'] = '20';
$dictionary['Account']['fields']['account_management_region_c']['required'] = false;
$dictionary['Account']['fields']['account_management_region_c']['comments'] = 'Auto-created entry for field account_management_region_c';
$dictionary['Account']['fields']['account_management_region_c']['vname'] = 'Account Management Region';
$dictionary['Account']['fields']['account_management_region_c']['source'] = 'custom_fields';

// Field: mq_classification_c
$dictionary['Account']['fields']['mq_classification_c']['name'] = 'mq_classification_c';
$dictionary['Account']['fields']['mq_classification_c']['type'] = 'varchar';
$dictionary['Account']['fields']['mq_classification_c']['len'] = '255';
$dictionary['Account']['fields']['mq_classification_c']['size'] = '20';
$dictionary['Account']['fields']['mq_classification_c']['required'] = false;
$dictionary['Account']['fields']['mq_classification_c']['comments'] = 'Auto-created entry for field mq_classification_c';
$dictionary['Account']['fields']['mq_classification_c']['vname'] = 'M*M Classification';
$dictionary['Account']['fields']['mq_classification_c']['source'] = 'custom_fields';

// Field: staffed_beds_c
$dictionary['Account']['fields']['staffed_beds_c']['name'] = 'staffed_beds_c';
$dictionary['Account']['fields']['staffed_beds_c']['type'] = 'float';
$dictionary['Account']['fields']['staffed_beds_c']['len'] = '19';
$dictionary['Account']['fields']['staffed_beds_c']['size'] = '20';
$dictionary['Account']['fields']['staffed_beds_c']['required'] = false;
$dictionary['Account']['fields']['staffed_beds_c']['comments'] = 'Auto-created entry for field staffed_beds_c';
$dictionary['Account']['fields']['staffed_beds_c']['vname'] = 'Staffed Beds';
$dictionary['Account']['fields']['staffed_beds_c']['source'] = 'custom_fields';

// Field: beds_c
$dictionary['Account']['fields']['beds_c']['name'] = 'beds_c';
$dictionary['Account']['fields']['beds_c']['type'] = 'float';
$dictionary['Account']['fields']['beds_c']['len'] = '19';
$dictionary['Account']['fields']['beds_c']['size'] = '20';
$dictionary['Account']['fields']['beds_c']['required'] = false;
$dictionary['Account']['fields']['beds_c']['comments'] = 'Auto-created entry for field beds_c';
$dictionary['Account']['fields']['beds_c']['vname'] = 'Beds';
$dictionary['Account']['fields']['beds_c']['source'] = 'custom_fields';

// Field: mq_tos_revenue_c
$dictionary['Account']['fields']['mq_tos_revenue_c']['name'] = 'mq_tos_revenue_c';
$dictionary['Account']['fields']['mq_tos_revenue_c']['type'] = 'float';
$dictionary['Account']['fields']['mq_tos_revenue_c']['len'] = '19';
$dictionary['Account']['fields']['mq_tos_revenue_c']['size'] = '20';
$dictionary['Account']['fields']['mq_tos_revenue_c']['required'] = false;
$dictionary['Account']['fields']['mq_tos_revenue_c']['comments'] = 'Auto-created entry for field mq_tos_revenue_c';
$dictionary['Account']['fields']['mq_tos_revenue_c']['vname'] = 'M*M TOS Revenue';
$dictionary['Account']['fields']['mq_tos_revenue_c']['source'] = 'custom_fields';

// Field: tos_opportunity_size_c
$dictionary['Account']['fields']['tos_opportunity_size_c']['name'] = 'tos_opportunity_size_c';
$dictionary['Account']['fields']['tos_opportunity_size_c']['type'] = 'float';
$dictionary['Account']['fields']['tos_opportunity_size_c']['len'] = '19';
$dictionary['Account']['fields']['tos_opportunity_size_c']['size'] = '20';
$dictionary['Account']['fields']['tos_opportunity_size_c']['required'] = false;
$dictionary['Account']['fields']['tos_opportunity_size_c']['comments'] = 'Auto-created entry for field tos_opportunity_size_c';
$dictionary['Account']['fields']['tos_opportunity_size_c']['vname'] = 'TOS Opportunity Size';
$dictionary['Account']['fields']['tos_opportunity_size_c']['source'] = 'custom_fields';

// Field: ucid_c
$dictionary['Account']['fields']['ucid_c']['name'] = 'ucid_c';
$dictionary['Account']['fields']['ucid_c']['type'] = 'varchar';
$dictionary['Account']['fields']['ucid_c']['len'] = '255';
$dictionary['Account']['fields']['ucid_c']['size'] = '20';
$dictionary['Account']['fields']['ucid_c']['required'] = false;
$dictionary['Account']['fields']['ucid_c']['comments'] = 'Auto-created entry for field ucid_c';
$dictionary['Account']['fields']['ucid_c']['vname'] = 'UCID';
$dictionary['Account']['fields']['ucid_c']['source'] = 'custom_fields';

// Field: billians_id_c
$dictionary['Account']['fields']['billians_id_c']['name'] = 'billians_id_c';
$dictionary['Account']['fields']['billians_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['billians_id_c']['len'] = '10';
$dictionary['Account']['fields']['billians_id_c']['size'] = '20';
$dictionary['Account']['fields']['billians_id_c']['required'] = false;
$dictionary['Account']['fields']['billians_id_c']['comments'] = 'Auto-created entry for field billians_id_c';
$dictionary['Account']['fields']['billians_id_c']['vname'] = 'Billians ID';
$dictionary['Account']['fields']['billians_id_c']['source'] = 'custom_fields';

// Field: medicare_id_c
$dictionary['Account']['fields']['medicare_id_c']['name'] = 'medicare_id_c';
$dictionary['Account']['fields']['medicare_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['medicare_id_c']['len'] = '20';
$dictionary['Account']['fields']['medicare_id_c']['size'] = '20';
$dictionary['Account']['fields']['medicare_id_c']['required'] = false;
$dictionary['Account']['fields']['medicare_id_c']['comments'] = 'Auto-created entry for field medicare_id_c';
$dictionary['Account']['fields']['medicare_id_c']['vname'] = 'Medicare ID';
$dictionary['Account']['fields']['medicare_id_c']['source'] = 'custom_fields';

// Field: primary_gpo_c
$dictionary['Account']['fields']['primary_gpo_c']['name'] = 'primary_gpo_c';
$dictionary['Account']['fields']['primary_gpo_c']['type'] = 'varchar';
$dictionary['Account']['fields']['primary_gpo_c']['len'] = '18';
$dictionary['Account']['fields']['primary_gpo_c']['size'] = '20';
$dictionary['Account']['fields']['primary_gpo_c']['required'] = false;
$dictionary['Account']['fields']['primary_gpo_c']['comments'] = 'Auto-created entry for field primary_gpo_c';
$dictionary['Account']['fields']['primary_gpo_c']['vname'] = 'Primary GPO Old';
$dictionary['Account']['fields']['primary_gpo_c']['source'] = 'custom_fields';

// Part 1 - related field for gpo_affiliation

$dictionary['Account']['fields']['Accgpo_affiliation_c']['name']='Accgpo_affiliation_c';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['len']='36';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['type']='id';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['inline_edit']=1;
$dictionary['Account']['fields']['Accgpo_affiliation_c']['importable']='true';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['reportable']=true;
$dictionary['Account']['fields']['Accgpo_affiliation_c']['id']='AccountAccgpo_affiliation_c';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['module']='Account';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['vname']='LBL_ACCGPO_AFFILIATION_C';
$dictionary['Account']['fields']['Accgpo_affiliation_c']['source']='custom_fields';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['Accgpo_affiliation_c']['custom_module']='Accounts';

// Part 2 - related field for gpo_affiliation

$dictionary['Account']['fields']['gpo_affiliation_name_c']['name']='gpo_affiliation_name_c';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['len']='255';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['type']='relate';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['inline_edit']=1;
$dictionary['Account']['fields']['gpo_affiliation_name_c']['importable']='true';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['reportable']=true;
//$dictionary['Account']['fields']['gpo_affiliation_name_c']['ext2']='Accounts';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['id']='Accountgpo_affiliation_name_c';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['module']='Accounts';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['studio']='visible';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['id_name']='Accgpo_affiliation_c';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['vname']='GPO';
$dictionary['Account']['fields']['gpo_affiliation_name_c']['source']='non-db';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['gpo_affiliation_name_c']['custom_module']='Accounts';

// End of relate for gpo_affilation

// Field: imaging_exam_volume_c
$dictionary['Account']['fields']['imaging_exam_volume_c']['name'] = 'imaging_exam_volume_c';
$dictionary['Account']['fields']['imaging_exam_volume_c']['type'] = 'float';
$dictionary['Account']['fields']['imaging_exam_volume_c']['len'] = '19';
$dictionary['Account']['fields']['imaging_exam_volume_c']['size'] = '20';
$dictionary['Account']['fields']['imaging_exam_volume_c']['required'] = false;
$dictionary['Account']['fields']['imaging_exam_volume_c']['comments'] = 'Auto-created entry for field imaging_exam_volume_c';
$dictionary['Account']['fields']['imaging_exam_volume_c']['vname'] = 'Imaging Exam Volume';
$dictionary['Account']['fields']['imaging_exam_volume_c']['source'] = 'custom_fields';

// Field: ehr_percent_c
$dictionary['Account']['fields']['ehr_percent_c']['name'] = 'ehr_percent_c';
$dictionary['Account']['fields']['ehr_percent_c']['type'] = 'enum';
$dictionary['Account']['fields']['ehr_percent_c']['len'] = '255';
$dictionary['Account']['fields']['ehr_percent_c']['size'] = '20';
$dictionary['Account']['fields']['ehr_percent_c']['required'] = false;
$dictionary['Account']['fields']['ehr_percent_c']['comments'] = 'Auto-created entry for field ehr_percent_c';
$dictionary['Account']['fields']['ehr_percent_c']['vname'] = 'EHR Percent';
$dictionary['Account']['fields']['ehr_percent_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['ehr_percent_c']['options'] = 'acct_ehr_percent_list';

// Field: ehr_install_date_c
$dictionary['Account']['fields']['ehr_install_date_c']['name'] = 'ehr_install_date_c';
$dictionary['Account']['fields']['ehr_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['ehr_install_date_c']['len'] = '';
$dictionary['Account']['fields']['ehr_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['ehr_install_date_c']['required'] = false;
$dictionary['Account']['fields']['ehr_install_date_c']['comments'] = 'Auto-created entry for field ehr_install_date_c';
$dictionary['Account']['fields']['ehr_install_date_c']['vname'] = 'EHR Install Date';
$dictionary['Account']['fields']['ehr_install_date_c']['source'] = 'custom_fields';

// Field: mtso_1_c
$dictionary['Account']['fields']['mtso_1_c']['name'] = 'mtso_1_c';
$dictionary['Account']['fields']['mtso_1_c']['type'] = 'varchar';
$dictionary['Account']['fields']['mtso_1_c']['len'] = '36';
$dictionary['Account']['fields']['mtso_1_c']['size'] = '20';
$dictionary['Account']['fields']['mtso_1_c']['required'] = false;
$dictionary['Account']['fields']['mtso_1_c']['comments'] = 'Auto-created entry for field mtso_1_c';
$dictionary['Account']['fields']['mtso_1_c']['vname'] = 'MTSO 1 Old';
$dictionary['Account']['fields']['mtso_1_c']['source'] = 'custom_fields';

// Part 1 - related field for mtso_1

$dictionary['Account']['fields']['Accmtso_1_c']['name']='Accmtso_1_c';
$dictionary['Account']['fields']['Accmtso_1_c']['len']='36';
$dictionary['Account']['fields']['Accmtso_1_c']['type']='id';
$dictionary['Account']['fields']['Accmtso_1_c']['inline_edit']=1;
$dictionary['Account']['fields']['Accmtso_1_c']['importable']='true';
$dictionary['Account']['fields']['Accmtso_1_c']['reportable']=true;
$dictionary['Account']['fields']['Accmtso_1_c']['id']='AccountAccmtso_1_c';
$dictionary['Account']['fields']['Accmtso_1_c']['module']='Account';
$dictionary['Account']['fields']['Accmtso_1_c']['vname']='LBL_ACCMTSO_1_C';
$dictionary['Account']['fields']['Accmtso_1_c']['source']='custom_fields';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['Accmtso_1_c']['custom_module']='Accounts';

// Part 2 - related field for mtso_1

$dictionary['Account']['fields']['mtso_1_name_c']['name']='mtso_1_name_c';
$dictionary['Account']['fields']['mtso_1_name_c']['len']='255';
$dictionary['Account']['fields']['mtso_1_name_c']['type']='relate';
$dictionary['Account']['fields']['mtso_1_name_c']['inline_edit']=1;
$dictionary['Account']['fields']['mtso_1_name_c']['importable']='true';
$dictionary['Account']['fields']['mtso_1_name_c']['reportable']=true;
//$dictionary['Account']['fields']['mtso_1_name_c']['ext2']='Accounts';
$dictionary['Account']['fields']['mtso_1_name_c']['id']='Accountmtso_1_name_c';
$dictionary['Account']['fields']['mtso_1_name_c']['module']='Accounts';
$dictionary['Account']['fields']['mtso_1_name_c']['studio']='visible';
$dictionary['Account']['fields']['mtso_1_name_c']['id_name']='Accmtso_1_c';
$dictionary['Account']['fields']['mtso_1_name_c']['vname']='MTSO 1';
$dictionary['Account']['fields']['mtso_1_name_c']['source']='non-db';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['mtso_1_name_c']['custom_module']='Accounts';

// End of relate for mtso_1


// Field: mtso_1_percent_c
$dictionary['Account']['fields']['mtso_1_percent_c']['name'] = 'mtso_1_percent_c';
$dictionary['Account']['fields']['mtso_1_percent_c']['type'] = 'float';
$dictionary['Account']['fields']['mtso_1_percent_c']['len'] = '19';
$dictionary['Account']['fields']['mtso_1_percent_c']['size'] = '20';
$dictionary['Account']['fields']['mtso_1_percent_c']['required'] = false;
$dictionary['Account']['fields']['mtso_1_percent_c']['comments'] = 'Auto-created entry for field mtso_1_percent_c';
$dictionary['Account']['fields']['mtso_1_percent_c']['vname'] = 'MTSO 1 Percent';
$dictionary['Account']['fields']['mtso_1_percent_c']['source'] = 'custom_fields';

// Field: mtso_2_c
$dictionary['Account']['fields']['mtso_2_c']['name'] = 'mtso_2_c';
$dictionary['Account']['fields']['mtso_2_c']['type'] = 'varchar';
$dictionary['Account']['fields']['mtso_2_c']['len'] = '36';
$dictionary['Account']['fields']['mtso_2_c']['size'] = '20';
$dictionary['Account']['fields']['mtso_2_c']['required'] = false;
$dictionary['Account']['fields']['mtso_2_c']['comments'] = 'Auto-created entry for field mtso_2_c';
$dictionary['Account']['fields']['mtso_2_c']['vname'] = 'MTSO 2 Old';
$dictionary['Account']['fields']['mtso_2_c']['source'] = 'custom_fields';


// Part 1 - related field for mtso_2

$dictionary['Account']['fields']['Accmtso_2_c']['name']='Accmtso_2_c';
$dictionary['Account']['fields']['Accmtso_2_c']['len']='36';
$dictionary['Account']['fields']['Accmtso_2_c']['type']='id';
$dictionary['Account']['fields']['Accmtso_2_c']['inline_edit']=1;
$dictionary['Account']['fields']['Accmtso_2_c']['importable']='true';
$dictionary['Account']['fields']['Accmtso_2_c']['reportable']=true;
$dictionary['Account']['fields']['Accmtso_2_c']['id']='AccountAccmtso_2_c';
$dictionary['Account']['fields']['Accmtso_2_c']['module']='Account';
$dictionary['Account']['fields']['Accmtso_2_c']['vname']='LBL_ACCMTSO_2_C';
$dictionary['Account']['fields']['Accmtso_2_c']['source']='custom_fields';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['Accmtso_2_c']['custom_module']='Accounts';

// Part 2 - related field for mtso_2

$dictionary['Account']['fields']['mtso_2_name_c']['name']='mtso_2_name_c';
$dictionary['Account']['fields']['mtso_2_name_c']['len']='255';
$dictionary['Account']['fields']['mtso_2_name_c']['type']='relate';
$dictionary['Account']['fields']['mtso_2_name_c']['inline_edit']=1;
$dictionary['Account']['fields']['mtso_2_name_c']['importable']='true';
$dictionary['Account']['fields']['mtso_2_name_c']['reportable']=true;
//$dictionary['Account']['fields']['mtso_2_name_c']['ext2']='Accounts';
$dictionary['Account']['fields']['mtso_2_name_c']['id']='Accountmtso_2_name_c';
$dictionary['Account']['fields']['mtso_2_name_c']['module']='Accounts';
$dictionary['Account']['fields']['mtso_2_name_c']['studio']='visible';
$dictionary['Account']['fields']['mtso_2_name_c']['id_name']='Accmtso_2_c';
$dictionary['Account']['fields']['mtso_2_name_c']['vname']='MTSO 2';
$dictionary['Account']['fields']['mtso_2_name_c']['source']='non-db';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['mtso_2_name_c']['custom_module']='Accounts';

// End of relate for mtso_2


// Field: mtso_2_percent_c
$dictionary['Account']['fields']['mtso_2_percent_c']['name'] = 'mtso_2_percent_c';
$dictionary['Account']['fields']['mtso_2_percent_c']['type'] = 'float';
$dictionary['Account']['fields']['mtso_2_percent_c']['len'] = '19';
$dictionary['Account']['fields']['mtso_2_percent_c']['size'] = '20';
$dictionary['Account']['fields']['mtso_2_percent_c']['required'] = false;
$dictionary['Account']['fields']['mtso_2_percent_c']['comments'] = 'Auto-created entry for field mtso_2_percent_c';
$dictionary['Account']['fields']['mtso_2_percent_c']['vname'] = 'MTSO 2 Percent';
$dictionary['Account']['fields']['mtso_2_percent_c']['source'] = 'custom_fields';

// Field: mtso_3_c
$dictionary['Account']['fields']['mtso_3_c']['name'] = 'mtso_3_c';
$dictionary['Account']['fields']['mtso_3_c']['type'] = 'varchar';
$dictionary['Account']['fields']['mtso_3_c']['len'] = '36';
$dictionary['Account']['fields']['mtso_3_c']['size'] = '20';
$dictionary['Account']['fields']['mtso_3_c']['required'] = false;
$dictionary['Account']['fields']['mtso_3_c']['comments'] = 'Auto-created entry for field mtso_3_c';
$dictionary['Account']['fields']['mtso_3_c']['vname'] = 'MTSO 3 Old';
$dictionary['Account']['fields']['mtso_3_c']['source'] = 'custom_fields';

// Part 1 - related field for mtso_3

$dictionary['Account']['fields']['Accmtso_3_c']['name']='Accmtso_3_c';
$dictionary['Account']['fields']['Accmtso_3_c']['len']='36';
$dictionary['Account']['fields']['Accmtso_3_c']['type']='id';
$dictionary['Account']['fields']['Accmtso_3_c']['inline_edit']=1;
$dictionary['Account']['fields']['Accmtso_3_c']['importable']='true';
$dictionary['Account']['fields']['Accmtso_3_c']['reportable']=true;
$dictionary['Account']['fields']['Accmtso_3_c']['id']='AccountAccmtso_3_c';
$dictionary['Account']['fields']['Accmtso_3_c']['module']='Account';
$dictionary['Account']['fields']['Accmtso_3_c']['vname']='LBL_ACCMTSO_3_C';
$dictionary['Account']['fields']['Accmtso_3_c']['source']='custom_fields';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['Accmtso_3_c']['custom_module']='Accounts';

// Part 2 - related field for mtso_3

$dictionary['Account']['fields']['mtso_3_name_c']['name']='mtso_3_name_c';
$dictionary['Account']['fields']['mtso_3_name_c']['len']='255';
$dictionary['Account']['fields']['mtso_3_name_c']['type']='relate';
$dictionary['Account']['fields']['mtso_3_name_c']['inline_edit']=1;
$dictionary['Account']['fields']['mtso_3_name_c']['importable']='true';
$dictionary['Account']['fields']['mtso_3_name_c']['reportable']=true;
//$dictionary['Account']['fields']['mtso_3_name_c']['ext2']='Accounts';
$dictionary['Account']['fields']['mtso_3_name_c']['id']='Accountmtso_3_name_c';
$dictionary['Account']['fields']['mtso_3_name_c']['module']='Accounts';
$dictionary['Account']['fields']['mtso_3_name_c']['studio']='visible';
$dictionary['Account']['fields']['mtso_3_name_c']['id_name']='Accmtso_3_c';
$dictionary['Account']['fields']['mtso_3_name_c']['vname']='MTSO 3';
$dictionary['Account']['fields']['mtso_3_name_c']['source']='non-db';

// 2017-11-01 BCG
//$dictionary['Account']['fields']['mtso_3_name_c']['custom_module']='Accounts';

// End of relate for mtso_3


// Field: mtso_3_percent_c
$dictionary['Account']['fields']['mtso_3_percent_c']['name'] = 'mtso_3_percent_c';
$dictionary['Account']['fields']['mtso_3_percent_c']['type'] = 'float';
$dictionary['Account']['fields']['mtso_3_percent_c']['len'] = '19';
$dictionary['Account']['fields']['mtso_3_percent_c']['size'] = '20';
$dictionary['Account']['fields']['mtso_3_percent_c']['required'] = false;
$dictionary['Account']['fields']['mtso_3_percent_c']['comments'] = 'Auto-created entry for field mtso_3_percent_c';
$dictionary['Account']['fields']['mtso_3_percent_c']['vname'] = 'MTSO 3 Percent';
$dictionary['Account']['fields']['mtso_3_percent_c']['source'] = 'custom_fields';

// Field: tos_contract_expiration_date_c
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['name'] = 'tos_contract_expiration_date_c';
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['type'] = 'date';
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['len'] = '';
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['size'] = '20';
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['required'] = false;
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['comments'] = 'Auto-created entry for field tos_contract_expiration_date_c';
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['vname'] = 'TOS Contract Expiration Date';
$dictionary['Account']['fields']['tos_contract_expiration_date_c']['source'] = 'custom_fields';

// Field: tos_budget_start_date_c
$dictionary['Account']['fields']['tos_budget_start_date_c']['name'] = 'tos_budget_start_date_c';
$dictionary['Account']['fields']['tos_budget_start_date_c']['type'] = 'date';
$dictionary['Account']['fields']['tos_budget_start_date_c']['len'] = '';
$dictionary['Account']['fields']['tos_budget_start_date_c']['size'] = '20';
$dictionary['Account']['fields']['tos_budget_start_date_c']['required'] = false;
$dictionary['Account']['fields']['tos_budget_start_date_c']['comments'] = 'Auto-created entry for field tos_budget_start_date_c';
$dictionary['Account']['fields']['tos_budget_start_date_c']['vname'] = 'TOS Budget Start Date';
$dictionary['Account']['fields']['tos_budget_start_date_c']['source'] = 'custom_fields';

// Field: transcription_volumemonth_c
$dictionary['Account']['fields']['transcription_volumemonth_c']['name'] = 'transcription_volumemonth_c';
$dictionary['Account']['fields']['transcription_volumemonth_c']['type'] = 'float';
$dictionary['Account']['fields']['transcription_volumemonth_c']['len'] = '19';
$dictionary['Account']['fields']['transcription_volumemonth_c']['size'] = '20';
$dictionary['Account']['fields']['transcription_volumemonth_c']['required'] = false;
$dictionary['Account']['fields']['transcription_volumemonth_c']['comments'] = 'Auto-created entry for field transcription_volumemonth_c';
$dictionary['Account']['fields']['transcription_volumemonth_c']['vname'] = 'Transcription Volume/Month';
$dictionary['Account']['fields']['transcription_volumemonth_c']['source'] = 'custom_fields';

// Field: transcription_uom_c
$dictionary['Account']['fields']['transcription_uom_c']['name'] = 'transcription_uom_c';
$dictionary['Account']['fields']['transcription_uom_c']['type'] = 'enum';
$dictionary['Account']['fields']['transcription_uom_c']['len'] = '255';
$dictionary['Account']['fields']['transcription_uom_c']['size'] = '20';
$dictionary['Account']['fields']['transcription_uom_c']['required'] = false;
$dictionary['Account']['fields']['transcription_uom_c']['comments'] = 'Auto-created entry for field transcription_uom_c';
$dictionary['Account']['fields']['transcription_uom_c']['vname'] = 'Transcription UOM';
$dictionary['Account']['fields']['transcription_uom_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['transcription_uom_c']['options'] = 'acct_tos_uom_list';

// Field: number_of_dictators_c
$dictionary['Account']['fields']['number_of_dictators_c']['name'] = 'number_of_dictators_c';
$dictionary['Account']['fields']['number_of_dictators_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_dictators_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_dictators_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_dictators_c']['required'] = false;
$dictionary['Account']['fields']['number_of_dictators_c']['comments'] = 'Auto-created entry for field number_of_dictators_c';
$dictionary['Account']['fields']['number_of_dictators_c']['vname'] = 'Number Of Dictators';
$dictionary['Account']['fields']['number_of_dictators_c']['source'] = 'custom_fields';

// Field: number_of_mts_c
$dictionary['Account']['fields']['number_of_mts_c']['name'] = 'number_of_mts_c';
$dictionary['Account']['fields']['number_of_mts_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_mts_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_mts_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_mts_c']['required'] = false;
$dictionary['Account']['fields']['number_of_mts_c']['comments'] = 'Auto-created entry for field number_of_mts_c';
$dictionary['Account']['fields']['number_of_mts_c']['vname'] = 'Number Of MTs';
$dictionary['Account']['fields']['number_of_mts_c']['source'] = 'custom_fields';

// Field: related_facilitities_c
$dictionary['Account']['fields']['related_facilitities_c']['name'] = 'related_facilitities_c';
$dictionary['Account']['fields']['related_facilitities_c']['type'] = 'varchar';
$dictionary['Account']['fields']['related_facilitities_c']['len'] = '255';
$dictionary['Account']['fields']['related_facilitities_c']['size'] = '20';
$dictionary['Account']['fields']['related_facilitities_c']['required'] = false;
$dictionary['Account']['fields']['related_facilitities_c']['comments'] = 'Auto-created entry for field related_facilitities_c';
$dictionary['Account']['fields']['related_facilitities_c']['vname'] = 'Related Facilities';
$dictionary['Account']['fields']['related_facilitities_c']['source'] = 'custom_fields';

// Field: operating_expense_c
$dictionary['Account']['fields']['operating_expense_c']['name'] = 'operating_expense_c';
$dictionary['Account']['fields']['operating_expense_c']['type'] = 'float';
$dictionary['Account']['fields']['operating_expense_c']['len'] = '19';
$dictionary['Account']['fields']['operating_expense_c']['size'] = '20';
$dictionary['Account']['fields']['operating_expense_c']['required'] = false;
$dictionary['Account']['fields']['operating_expense_c']['comments'] = 'Auto-created entry for field operating_expense_c';
$dictionary['Account']['fields']['operating_expense_c']['vname'] = 'Operating Expense';
$dictionary['Account']['fields']['operating_expense_c']['source'] = 'custom_fields';

// Field: annual_admissions_c
$dictionary['Account']['fields']['annual_admissions_c']['name'] = 'annual_admissions_c';
$dictionary['Account']['fields']['annual_admissions_c']['type'] = 'float';
$dictionary['Account']['fields']['annual_admissions_c']['len'] = '19';
$dictionary['Account']['fields']['annual_admissions_c']['size'] = '20';
$dictionary['Account']['fields']['annual_admissions_c']['required'] = false;
$dictionary['Account']['fields']['annual_admissions_c']['comments'] = 'Auto-created entry for field annual_admissions_c';
$dictionary['Account']['fields']['annual_admissions_c']['vname'] = 'Annual Admissions';
$dictionary['Account']['fields']['annual_admissions_c']['source'] = 'custom_fields';

// Field: annual_adj_patient_days_c
$dictionary['Account']['fields']['annual_adj_patient_days_c']['name'] = 'annual_adj_patient_days_c';
$dictionary['Account']['fields']['annual_adj_patient_days_c']['type'] = 'float';
$dictionary['Account']['fields']['annual_adj_patient_days_c']['len'] = '19';
$dictionary['Account']['fields']['annual_adj_patient_days_c']['size'] = '20';
$dictionary['Account']['fields']['annual_adj_patient_days_c']['required'] = false;
$dictionary['Account']['fields']['annual_adj_patient_days_c']['comments'] = 'Auto-created entry for field annual_adj_patient_days_c';
$dictionary['Account']['fields']['annual_adj_patient_days_c']['vname'] = 'Annual Adj Patient Days';
$dictionary['Account']['fields']['annual_adj_patient_days_c']['source'] = 'custom_fields';

// Field: annual_outpatient_visits_c
$dictionary['Account']['fields']['annual_outpatient_visits_c']['name'] = 'annual_outpatient_visits_c';
$dictionary['Account']['fields']['annual_outpatient_visits_c']['type'] = 'float';
$dictionary['Account']['fields']['annual_outpatient_visits_c']['len'] = '19';
$dictionary['Account']['fields']['annual_outpatient_visits_c']['size'] = '20';
$dictionary['Account']['fields']['annual_outpatient_visits_c']['required'] = false;
$dictionary['Account']['fields']['annual_outpatient_visits_c']['comments'] = 'Auto-created entry for field annual_outpatient_visits_c';
$dictionary['Account']['fields']['annual_outpatient_visits_c']['vname'] = 'Annual Outpatient Visits';
$dictionary['Account']['fields']['annual_outpatient_visits_c']['source'] = 'custom_fields';

// Field: account_type_c
$dictionary['Account']['fields']['account_type_c']['name'] = 'account_type_c';
$dictionary['Account']['fields']['account_type_c']['type'] = 'varchar';
$dictionary['Account']['fields']['account_type_c']['len'] = '255';
$dictionary['Account']['fields']['account_type_c']['size'] = '20';
$dictionary['Account']['fields']['account_type_c']['required'] = false;
$dictionary['Account']['fields']['account_type_c']['comments'] = 'Auto-created entry for field account_type_c';
$dictionary['Account']['fields']['account_type_c']['vname'] = 'Account Type';
$dictionary['Account']['fields']['account_type_c']['source'] = 'custom_fields';

// Field: voice_capture_system_c
$dictionary['Account']['fields']['voice_capture_system_c']['name'] = 'voice_capture_system_c';
$dictionary['Account']['fields']['voice_capture_system_c']['type'] = 'enum';
$dictionary['Account']['fields']['voice_capture_system_c']['len'] = '255';
$dictionary['Account']['fields']['voice_capture_system_c']['size'] = '20';
$dictionary['Account']['fields']['voice_capture_system_c']['required'] = false;
$dictionary['Account']['fields']['voice_capture_system_c']['comments'] = 'Auto-created entry for field voice_capture_system_c';
$dictionary['Account']['fields']['voice_capture_system_c']['vname'] = 'Voice Capture System';
$dictionary['Account']['fields']['voice_capture_system_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['voice_capture_system_c']['options'] = 'acct_voice_cap_sys_list';

// Field: voice_capture_install_date_c
$dictionary['Account']['fields']['voice_capture_install_date_c']['name'] = 'voice_capture_install_date_c';
$dictionary['Account']['fields']['voice_capture_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['voice_capture_install_date_c']['len'] = '';
$dictionary['Account']['fields']['voice_capture_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['voice_capture_install_date_c']['required'] = false;
$dictionary['Account']['fields']['voice_capture_install_date_c']['comments'] = 'Auto-created entry for field voice_capture_install_date_c';
$dictionary['Account']['fields']['voice_capture_install_date_c']['vname'] = 'Voice Capture Install Date';
$dictionary['Account']['fields']['voice_capture_install_date_c']['source'] = 'custom_fields';

// Field: transcription_system_c
$dictionary['Account']['fields']['transcription_system_c']['name'] = 'transcription_system_c';
$dictionary['Account']['fields']['transcription_system_c']['type'] = 'enum';
$dictionary['Account']['fields']['transcription_system_c']['len'] = '255';
$dictionary['Account']['fields']['transcription_system_c']['size'] = '20';
$dictionary['Account']['fields']['transcription_system_c']['required'] = false;
$dictionary['Account']['fields']['transcription_system_c']['comments'] = 'Auto-created entry for field transcription_system_c';
$dictionary['Account']['fields']['transcription_system_c']['vname'] = 'Transcription System';
$dictionary['Account']['fields']['transcription_system_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['transcription_system_c']['options'] = 'acct_trans_sys_list';

// Field: transcription_install_date_c
$dictionary['Account']['fields']['transcription_install_date_c']['name'] = 'transcription_install_date_c';
$dictionary['Account']['fields']['transcription_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['transcription_install_date_c']['len'] = '';
$dictionary['Account']['fields']['transcription_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['transcription_install_date_c']['required'] = false;
$dictionary['Account']['fields']['transcription_install_date_c']['comments'] = 'Auto-created entry for field transcription_install_date_c';
$dictionary['Account']['fields']['transcription_install_date_c']['vname'] = 'Transcription Install Date';
$dictionary['Account']['fields']['transcription_install_date_c']['source'] = 'custom_fields';

// Field: him_speech_rec_system_c
$dictionary['Account']['fields']['him_speech_rec_system_c']['name'] = 'him_speech_rec_system_c';
$dictionary['Account']['fields']['him_speech_rec_system_c']['type'] = 'enum';
$dictionary['Account']['fields']['him_speech_rec_system_c']['len'] = '255';
$dictionary['Account']['fields']['him_speech_rec_system_c']['size'] = '20';
$dictionary['Account']['fields']['him_speech_rec_system_c']['required'] = false;
$dictionary['Account']['fields']['him_speech_rec_system_c']['comments'] = 'Auto-created entry for field him_speech_rec_system_c';
$dictionary['Account']['fields']['him_speech_rec_system_c']['vname'] = 'Him Speech Rec System';
$dictionary['Account']['fields']['him_speech_rec_system_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['him_speech_rec_system_c']['options'] = 'acct_speech_rec_sys_list';

// Field: him_speech_rec_install_date_c
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['name'] = 'him_speech_rec_install_date_c';
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['len'] = '';
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['required'] = false;
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['comments'] = 'Auto-created entry for field him_speech_rec_install_date_c';
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['vname'] = 'HIM Speech Rec Install Date';
$dictionary['Account']['fields']['him_speech_rec_install_date_c']['source'] = 'custom_fields';

// Field: rad_speech_rec_system_c
$dictionary['Account']['fields']['rad_speech_rec_system_c']['name'] = 'rad_speech_rec_system_c';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['type'] = 'enum';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['len'] = '255';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['size'] = '20';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['required'] = false;
$dictionary['Account']['fields']['rad_speech_rec_system_c']['comments'] = 'Auto-created entry for field rad_speech_rec_system_c';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['vname'] = 'Rad Speech Rec System';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['rad_speech_rec_system_c']['options'] = 'acct_rad_speech_rec_list';

// Field: rad_speech_rec_install_date_c
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['name'] = 'rad_speech_rec_install_date_c';
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['len'] = '';
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['required'] = false;
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['comments'] = 'Auto-created entry for field rad_speech_rec_install_date_c';
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['vname'] = 'Rad Speech Rec Install Date';
$dictionary['Account']['fields']['rad_speech_rec_install_date_c']['source'] = 'custom_fields';

// Field: ris_c
$dictionary['Account']['fields']['ris_c']['name'] = 'ris_c';
$dictionary['Account']['fields']['ris_c']['type'] = 'enum';
$dictionary['Account']['fields']['ris_c']['len'] = '255';
$dictionary['Account']['fields']['ris_c']['size'] = '20';
$dictionary['Account']['fields']['ris_c']['required'] = false;
$dictionary['Account']['fields']['ris_c']['comments'] = 'Auto-created entry for field ris_c';
$dictionary['Account']['fields']['ris_c']['vname'] = 'RIS';
$dictionary['Account']['fields']['ris_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['ris_c']['options'] = 'acct_ris_list';

// Field: ris_install_date_c
$dictionary['Account']['fields']['ris_install_date_c']['name'] = 'ris_install_date_c';
$dictionary['Account']['fields']['ris_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['ris_install_date_c']['len'] = '';
$dictionary['Account']['fields']['ris_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['ris_install_date_c']['required'] = false;
$dictionary['Account']['fields']['ris_install_date_c']['comments'] = 'Auto-created entry for field ris_install_date_c';
$dictionary['Account']['fields']['ris_install_date_c']['vname'] = 'RIS Install Date';
$dictionary['Account']['fields']['ris_install_date_c']['source'] = 'custom_fields';

// Field: coding_system_c
$dictionary['Account']['fields']['coding_system_c']['name'] = 'coding_system_c';
$dictionary['Account']['fields']['coding_system_c']['type'] = 'enum';
$dictionary['Account']['fields']['coding_system_c']['len'] = '255';
$dictionary['Account']['fields']['coding_system_c']['size'] = '20';
$dictionary['Account']['fields']['coding_system_c']['required'] = false;
$dictionary['Account']['fields']['coding_system_c']['comments'] = 'Auto-created entry for field coding_system_c';
$dictionary['Account']['fields']['coding_system_c']['vname'] = 'Coding System';
$dictionary['Account']['fields']['coding_system_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['coding_system_c']['options'] = 'acct_coding_sys_list';

// Field: coding_system_install_date_c
$dictionary['Account']['fields']['coding_system_install_date_c']['name'] = 'coding_system_install_date_c';
$dictionary['Account']['fields']['coding_system_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['coding_system_install_date_c']['len'] = '';
$dictionary['Account']['fields']['coding_system_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['coding_system_install_date_c']['required'] = false;
$dictionary['Account']['fields']['coding_system_install_date_c']['comments'] = 'Auto-created entry for field coding_system_install_date_c';
$dictionary['Account']['fields']['coding_system_install_date_c']['vname'] = 'Coding System Install Date';
$dictionary['Account']['fields']['coding_system_install_date_c']['source'] = 'custom_fields';

// Field: mobile_devices_c
$dictionary['Account']['fields']['mobile_devices_c']['name'] = 'mobile_devices_c';
$dictionary['Account']['fields']['mobile_devices_c']['type'] = 'varchar';
$dictionary['Account']['fields']['mobile_devices_c']['len'] = '40';
$dictionary['Account']['fields']['mobile_devices_c']['size'] = '20';
$dictionary['Account']['fields']['mobile_devices_c']['required'] = false;
$dictionary['Account']['fields']['mobile_devices_c']['comments'] = 'Auto-created entry for field mobile_devices_c';
$dictionary['Account']['fields']['mobile_devices_c']['vname'] = 'Mobile Devices';
$dictionary['Account']['fields']['mobile_devices_c']['source'] = 'custom_fields';

// Field: mobile_devices_install_date_c
$dictionary['Account']['fields']['mobile_devices_install_date_c']['name'] = 'mobile_devices_install_date_c';
$dictionary['Account']['fields']['mobile_devices_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['mobile_devices_install_date_c']['len'] = '';
$dictionary['Account']['fields']['mobile_devices_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['mobile_devices_install_date_c']['required'] = false;
$dictionary['Account']['fields']['mobile_devices_install_date_c']['comments'] = 'Auto-created entry for field mobile_devices_install_date_c';
$dictionary['Account']['fields']['mobile_devices_install_date_c']['vname'] = 'Mobile Devices Install Date';
$dictionary['Account']['fields']['mobile_devices_install_date_c']['source'] = 'custom_fields';

// Field: other_system_c
$dictionary['Account']['fields']['other_system_c']['name'] = 'other_system_c';
$dictionary['Account']['fields']['other_system_c']['type'] = 'varchar';
$dictionary['Account']['fields']['other_system_c']['len'] = '40';
$dictionary['Account']['fields']['other_system_c']['size'] = '20';
$dictionary['Account']['fields']['other_system_c']['required'] = false;
$dictionary['Account']['fields']['other_system_c']['comments'] = 'Auto-created entry for field other_system_c';
$dictionary['Account']['fields']['other_system_c']['vname'] = 'Other System';
$dictionary['Account']['fields']['other_system_c']['source'] = 'custom_fields';

// Field: other_system_install_date_c
$dictionary['Account']['fields']['other_system_install_date_c']['name'] = 'other_system_install_date_c';
$dictionary['Account']['fields']['other_system_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['other_system_install_date_c']['len'] = '';
$dictionary['Account']['fields']['other_system_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['other_system_install_date_c']['required'] = false;
$dictionary['Account']['fields']['other_system_install_date_c']['comments'] = 'Auto-created entry for field other_system_install_date_c';
$dictionary['Account']['fields']['other_system_install_date_c']['vname'] = 'Other System Install Date';
$dictionary['Account']['fields']['other_system_install_date_c']['source'] = 'custom_fields';

// Field: top_10_prospecting_c
$dictionary['Account']['fields']['top_10_prospecting_c']['name'] = 'top_10_prospecting_c';
$dictionary['Account']['fields']['top_10_prospecting_c']['type'] = 'bool';
$dictionary['Account']['fields']['top_10_prospecting_c']['size'] = '20';
$dictionary['Account']['fields']['top_10_prospecting_c']['required'] = false;
$dictionary['Account']['fields']['top_10_prospecting_c']['comments'] = 'Auto-created entry for field top_10_prospecting_c';
$dictionary['Account']['fields']['top_10_prospecting_c']['vname'] = 'Top 10 Prospecting';
$dictionary['Account']['fields']['top_10_prospecting_c']['source'] = 'custom_fields';

// Field: top_10_prospecting_status_c
$dictionary['Account']['fields']['top_10_prospecting_status_c']['name'] = 'top_10_prospecting_status_c';
$dictionary['Account']['fields']['top_10_prospecting_status_c']['type'] = 'varchar';
$dictionary['Account']['fields']['top_10_prospecting_status_c']['len'] = '255';
$dictionary['Account']['fields']['top_10_prospecting_status_c']['size'] = '20';
$dictionary['Account']['fields']['top_10_prospecting_status_c']['required'] = false;
$dictionary['Account']['fields']['top_10_prospecting_status_c']['comments'] = 'Auto-created entry for field top_10_prospecting_status_c';
$dictionary['Account']['fields']['top_10_prospecting_status_c']['vname'] = 'Top 10 Prospecting Status';
$dictionary['Account']['fields']['top_10_prospecting_status_c']['source'] = 'custom_fields';

// Field: top_10_prospecting_start_date_c
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['name'] = 'top_10_prospecting_start_date_c';
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['type'] = 'date';
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['len'] = '';
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['size'] = '20';
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['required'] = false;
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['comments'] = 'Auto-created entry for field top_10_prospecting_start_date_c';
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['vname'] = 'Top 10 Prospecting Start Date';
$dictionary['Account']['fields']['top_10_prospecting_start_date_c']['source'] = 'custom_fields';

// Field: top_10_prospecting_reason_c
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['name'] = 'top_10_prospecting_reason_c';
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['type'] = 'varchar';
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['len'] = '100';
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['size'] = '20';
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['required'] = false;
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['comments'] = 'Auto-created entry for field top_10_prospecting_reason_c';
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['vname'] = 'Top 10 Prospecting Reason';
$dictionary['Account']['fields']['top_10_prospecting_reason_c']['source'] = 'custom_fields';

// Field: mq_segmentation_c
$dictionary['Account']['fields']['mq_segmentation_c']['name'] = 'mq_segmentation_c';
$dictionary['Account']['fields']['mq_segmentation_c']['type'] = 'enum';
$dictionary['Account']['fields']['mq_segmentation_c']['len'] = '255';
$dictionary['Account']['fields']['mq_segmentation_c']['size'] = '20';
$dictionary['Account']['fields']['mq_segmentation_c']['required'] = false;
$dictionary['Account']['fields']['mq_segmentation_c']['comments'] = 'Auto-created entry for field mq_segmentation_c';
$dictionary['Account']['fields']['mq_segmentation_c']['vname'] = 'M*M Segmentation';
$dictionary['Account']['fields']['mq_segmentation_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['mq_segmentation_c']['options'] = 'acct_mm_segment_list';

// Field: annual_healthcare_visits_c
$dictionary['Account']['fields']['annual_healthcare_visits_c']['name'] = 'annual_healthcare_visits_c';
$dictionary['Account']['fields']['annual_healthcare_visits_c']['type'] = 'float';
$dictionary['Account']['fields']['annual_healthcare_visits_c']['len'] = '19';
$dictionary['Account']['fields']['annual_healthcare_visits_c']['size'] = '20';
$dictionary['Account']['fields']['annual_healthcare_visits_c']['required'] = false;
$dictionary['Account']['fields']['annual_healthcare_visits_c']['comments'] = 'Auto-created entry for field annual_healthcare_visits_c';
$dictionary['Account']['fields']['annual_healthcare_visits_c']['vname'] = 'Annual Healthcare Visits';
$dictionary['Account']['fields']['annual_healthcare_visits_c']['source'] = 'custom_fields';

// Field: profit_non_profit_c
$dictionary['Account']['fields']['profit_non_profit_c']['name'] = 'profit_non_profit_c';
$dictionary['Account']['fields']['profit_non_profit_c']['type'] = 'enum';
$dictionary['Account']['fields']['profit_non_profit_c']['len'] = '255';
$dictionary['Account']['fields']['profit_non_profit_c']['size'] = '20';
$dictionary['Account']['fields']['profit_non_profit_c']['required'] = false;
$dictionary['Account']['fields']['profit_non_profit_c']['comments'] = 'Auto-created entry for field profit_non_profit_c';
$dictionary['Account']['fields']['profit_non_profit_c']['vname'] = 'Profit Non Profit';
$dictionary['Account']['fields']['profit_non_profit_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['profit_non_profit_c']['options'] = 'acct_profit_list';

// Field: kam_c
$dictionary['Account']['fields']['kam_c']['name'] = 'kam_c';
$dictionary['Account']['fields']['kam_c']['type'] = 'bool';
$dictionary['Account']['fields']['kam_c']['size'] = '20';
$dictionary['Account']['fields']['kam_c']['required'] = false;
$dictionary['Account']['fields']['kam_c']['comments'] = 'Auto-created entry for field kam_c';
$dictionary['Account']['fields']['kam_c']['vname'] = 'KAM';
$dictionary['Account']['fields']['kam_c']['source'] = 'custom_fields';

// Field: levers_dials_date_c
$dictionary['Account']['fields']['levers_dials_date_c']['name'] = 'levers_dials_date_c';
$dictionary['Account']['fields']['levers_dials_date_c']['type'] = 'date';
$dictionary['Account']['fields']['levers_dials_date_c']['len'] = '';
$dictionary['Account']['fields']['levers_dials_date_c']['size'] = '20';
$dictionary['Account']['fields']['levers_dials_date_c']['required'] = false;
$dictionary['Account']['fields']['levers_dials_date_c']['comments'] = 'Auto-created entry for field levers_dials_date_c';
$dictionary['Account']['fields']['levers_dials_date_c']['vname'] = 'Levers Dials Date';
$dictionary['Account']['fields']['levers_dials_date_c']['source'] = 'custom_fields';

// Field: pacs_c
$dictionary['Account']['fields']['pacs_c']['name'] = 'pacs_c';
$dictionary['Account']['fields']['pacs_c']['type'] = 'enum';
$dictionary['Account']['fields']['pacs_c']['len'] = '255';
$dictionary['Account']['fields']['pacs_c']['size'] = '20';
$dictionary['Account']['fields']['pacs_c']['required'] = false;
$dictionary['Account']['fields']['pacs_c']['comments'] = 'Auto-created entry for field pacs_c';
$dictionary['Account']['fields']['pacs_c']['vname'] = 'PACS';
$dictionary['Account']['fields']['pacs_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['pacs_c']['options'] = 'acct_pacs_list';

// Field: pacs_install_date_c
$dictionary['Account']['fields']['pacs_install_date_c']['name'] = 'pacs_install_date_c';
$dictionary['Account']['fields']['pacs_install_date_c']['type'] = 'date';
$dictionary['Account']['fields']['pacs_install_date_c']['len'] = '';
$dictionary['Account']['fields']['pacs_install_date_c']['size'] = '20';
$dictionary['Account']['fields']['pacs_install_date_c']['required'] = false;
$dictionary['Account']['fields']['pacs_install_date_c']['comments'] = 'Auto-created entry for field pacs_install_date_c';
$dictionary['Account']['fields']['pacs_install_date_c']['vname'] = 'PACS Install Date';
$dictionary['Account']['fields']['pacs_install_date_c']['source'] = 'custom_fields';

// Field: escription_campaign_c
$dictionary['Account']['fields']['escription_campaign_c']['name'] = 'escription_campaign_c';
$dictionary['Account']['fields']['escription_campaign_c']['type'] = 'bool';
$dictionary['Account']['fields']['escription_campaign_c']['size'] = '20';
$dictionary['Account']['fields']['escription_campaign_c']['required'] = false;
$dictionary['Account']['fields']['escription_campaign_c']['comments'] = 'Auto-created entry for field escription_campaign_c';
$dictionary['Account']['fields']['escription_campaign_c']['vname'] = 'Escription Campaign';
$dictionary['Account']['fields']['escription_campaign_c']['source'] = 'custom_fields';

// Field: technology_savings_campaign_c
$dictionary['Account']['fields']['technology_savings_campaign_c']['name'] = 'technology_savings_campaign_c';
$dictionary['Account']['fields']['technology_savings_campaign_c']['type'] = 'bool';
$dictionary['Account']['fields']['technology_savings_campaign_c']['size'] = '20';
$dictionary['Account']['fields']['technology_savings_campaign_c']['required'] = false;
$dictionary['Account']['fields']['technology_savings_campaign_c']['comments'] = 'Auto-created entry for field technology_savings_campaign_c';
$dictionary['Account']['fields']['technology_savings_campaign_c']['vname'] = 'Technology Savings Campaign';
$dictionary['Account']['fields']['technology_savings_campaign_c']['source'] = 'custom_fields';

// Field: radiology_top_10_c
$dictionary['Account']['fields']['radiology_top_10_c']['name'] = 'radiology_top_10_c';
$dictionary['Account']['fields']['radiology_top_10_c']['type'] = 'bool';
$dictionary['Account']['fields']['radiology_top_10_c']['size'] = '20';
$dictionary['Account']['fields']['radiology_top_10_c']['required'] = false;
$dictionary['Account']['fields']['radiology_top_10_c']['comments'] = 'Auto-created entry for field radiology_top_10_c';
$dictionary['Account']['fields']['radiology_top_10_c']['vname'] = 'Radiology Top 10';
$dictionary['Account']['fields']['radiology_top_10_c']['source'] = 'custom_fields';

// Field: radiology_top_10_reason_c
$dictionary['Account']['fields']['radiology_top_10_reason_c']['name'] = 'radiology_top_10_reason_c';
$dictionary['Account']['fields']['radiology_top_10_reason_c']['type'] = 'varchar';
$dictionary['Account']['fields']['radiology_top_10_reason_c']['len'] = '100';
$dictionary['Account']['fields']['radiology_top_10_reason_c']['size'] = '20';
$dictionary['Account']['fields']['radiology_top_10_reason_c']['required'] = false;
$dictionary['Account']['fields']['radiology_top_10_reason_c']['comments'] = 'Auto-created entry for field radiology_top_10_reason_c';
$dictionary['Account']['fields']['radiology_top_10_reason_c']['vname'] = 'Radiology Top 10 Reason';
$dictionary['Account']['fields']['radiology_top_10_reason_c']['source'] = 'custom_fields';

// Field: radiology_top_10_start_date_c
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['name'] = 'radiology_top_10_start_date_c';
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['type'] = 'date';
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['len'] = '';
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['size'] = '20';
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['required'] = false;
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['comments'] = 'Auto-created entry for field radiology_top_10_start_date_c';
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['vname'] = 'Radiology Top 10 Start Date';
$dictionary['Account']['fields']['radiology_top_10_start_date_c']['source'] = 'custom_fields';

// Field: radiology_top_10_status_c
$dictionary['Account']['fields']['radiology_top_10_status_c']['name'] = 'radiology_top_10_status_c';
$dictionary['Account']['fields']['radiology_top_10_status_c']['type'] = 'varchar';
$dictionary['Account']['fields']['radiology_top_10_status_c']['len'] = '255';
$dictionary['Account']['fields']['radiology_top_10_status_c']['size'] = '20';
$dictionary['Account']['fields']['radiology_top_10_status_c']['required'] = false;
$dictionary['Account']['fields']['radiology_top_10_status_c']['comments'] = 'Auto-created entry for field radiology_top_10_status_c';
$dictionary['Account']['fields']['radiology_top_10_status_c']['vname'] = 'Radiology Top 10 Status';
$dictionary['Account']['fields']['radiology_top_10_status_c']['source'] = 'custom_fields';

// Field: specialty_c
$dictionary['Account']['fields']['specialty_c']['name'] = 'specialty_c';
$dictionary['Account']['fields']['specialty_c']['type'] = 'varchar';
$dictionary['Account']['fields']['specialty_c']['len'] = '30';
$dictionary['Account']['fields']['specialty_c']['size'] = '20';
$dictionary['Account']['fields']['specialty_c']['required'] = false;
$dictionary['Account']['fields']['specialty_c']['comments'] = 'Auto-created entry for field specialty_c';
$dictionary['Account']['fields']['specialty_c']['vname'] = 'Specialty';
$dictionary['Account']['fields']['specialty_c']['source'] = 'custom_fields';

// Field: of_procedures_day_c
$dictionary['Account']['fields']['of_procedures_day_c']['name'] = 'of_procedures_day_c';
$dictionary['Account']['fields']['of_procedures_day_c']['type'] = 'float';
$dictionary['Account']['fields']['of_procedures_day_c']['len'] = '19';
$dictionary['Account']['fields']['of_procedures_day_c']['size'] = '20';
$dictionary['Account']['fields']['of_procedures_day_c']['required'] = false;
$dictionary['Account']['fields']['of_procedures_day_c']['comments'] = 'Auto-created entry for field of_procedures_day_c';
$dictionary['Account']['fields']['of_procedures_day_c']['vname'] = 'Of Procedures Day';
$dictionary['Account']['fields']['of_procedures_day_c']['source'] = 'custom_fields';

// Field: practice_management_system_c
$dictionary['Account']['fields']['practice_management_system_c']['name'] = 'practice_management_system_c';
$dictionary['Account']['fields']['practice_management_system_c']['type'] = 'varchar';
$dictionary['Account']['fields']['practice_management_system_c']['len'] = '40';
$dictionary['Account']['fields']['practice_management_system_c']['size'] = '20';
$dictionary['Account']['fields']['practice_management_system_c']['required'] = false;
$dictionary['Account']['fields']['practice_management_system_c']['comments'] = 'Auto-created entry for field practice_management_system_c';
$dictionary['Account']['fields']['practice_management_system_c']['vname'] = 'Practice Management System';
$dictionary['Account']['fields']['practice_management_system_c']['source'] = 'custom_fields';

// Field: sk_a_id_c
$dictionary['Account']['fields']['sk_a_id_c']['name'] = 'sk_a_id_c';
$dictionary['Account']['fields']['sk_a_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['sk_a_id_c']['len'] = '30';
$dictionary['Account']['fields']['sk_a_id_c']['size'] = '20';
$dictionary['Account']['fields']['sk_a_id_c']['required'] = false;
$dictionary['Account']['fields']['sk_a_id_c']['comments'] = 'Auto-created entry for field sk_a_id_c';
$dictionary['Account']['fields']['sk_a_id_c']['vname'] = 'SK&A ID';
$dictionary['Account']['fields']['sk_a_id_c']['source'] = 'custom_fields';

// Field: sage_id_c
$dictionary['Account']['fields']['sage_id_c']['name'] = 'sage_id_c';
$dictionary['Account']['fields']['sage_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['sage_id_c']['len'] = '30';
$dictionary['Account']['fields']['sage_id_c']['size'] = '20';
$dictionary['Account']['fields']['sage_id_c']['required'] = false;
$dictionary['Account']['fields']['sage_id_c']['comments'] = 'Auto-created entry for field sage_id_c';
$dictionary['Account']['fields']['sage_id_c']['vname'] = 'Sage ID';
$dictionary['Account']['fields']['sage_id_c']['source'] = 'custom_fields';

// Field: account_disposition_c
$dictionary['Account']['fields']['account_disposition_c']['name'] = 'account_disposition_c';
$dictionary['Account']['fields']['account_disposition_c']['type'] = 'varchar';
$dictionary['Account']['fields']['account_disposition_c']['len'] = '255';
$dictionary['Account']['fields']['account_disposition_c']['size'] = '20';
$dictionary['Account']['fields']['account_disposition_c']['required'] = false;
$dictionary['Account']['fields']['account_disposition_c']['comments'] = 'Auto-created entry for field account_disposition_c';
$dictionary['Account']['fields']['account_disposition_c']['vname'] = 'Account Disposition';
$dictionary['Account']['fields']['account_disposition_c']['source'] = 'custom_fields';

// Field: webmedx_targets_c
$dictionary['Account']['fields']['webmedx_targets_c']['name'] = 'webmedx_targets_c';
$dictionary['Account']['fields']['webmedx_targets_c']['type'] = 'bool';
$dictionary['Account']['fields']['webmedx_targets_c']['size'] = '20';
$dictionary['Account']['fields']['webmedx_targets_c']['required'] = false;
$dictionary['Account']['fields']['webmedx_targets_c']['comments'] = 'Auto-created entry for field webmedx_targets_c';
$dictionary['Account']['fields']['webmedx_targets_c']['vname'] = 'Webmedx Targets';
$dictionary['Account']['fields']['webmedx_targets_c']['source'] = 'custom_fields';

// Field: number_of_locations_c
$dictionary['Account']['fields']['number_of_locations_c']['name'] = 'number_of_locations_c';
$dictionary['Account']['fields']['number_of_locations_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_locations_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_locations_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_locations_c']['required'] = false;
$dictionary['Account']['fields']['number_of_locations_c']['comments'] = 'Auto-created entry for field number_of_locations_c';
$dictionary['Account']['fields']['number_of_locations_c']['vname'] = 'Number Of Locations';
$dictionary['Account']['fields']['number_of_locations_c']['source'] = 'custom_fields';

// Field: idn_mailings_campaign_c
$dictionary['Account']['fields']['idn_mailings_campaign_c']['name'] = 'idn_mailings_campaign_c';
$dictionary['Account']['fields']['idn_mailings_campaign_c']['type'] = 'bool';
$dictionary['Account']['fields']['idn_mailings_campaign_c']['size'] = '20';
$dictionary['Account']['fields']['idn_mailings_campaign_c']['required'] = false;
$dictionary['Account']['fields']['idn_mailings_campaign_c']['comments'] = 'Auto-created entry for field idn_mailings_campaign_c';
$dictionary['Account']['fields']['idn_mailings_campaign_c']['vname'] = 'IDN Mailings Campaign';
$dictionary['Account']['fields']['idn_mailings_campaign_c']['source'] = 'custom_fields';

// Field: isr_prospecting_c
$dictionary['Account']['fields']['isr_prospecting_c']['name'] = 'isr_prospecting_c';
$dictionary['Account']['fields']['isr_prospecting_c']['type'] = 'bool';
$dictionary['Account']['fields']['isr_prospecting_c']['size'] = '20';
$dictionary['Account']['fields']['isr_prospecting_c']['required'] = false;
$dictionary['Account']['fields']['isr_prospecting_c']['comments'] = 'Auto-created entry for field isr_prospecting_c';
$dictionary['Account']['fields']['isr_prospecting_c']['vname'] = 'ISR Prospecting';
$dictionary['Account']['fields']['isr_prospecting_c']['source'] = 'custom_fields';

// Field: tos_target_c
$dictionary['Account']['fields']['tos_target_c']['name'] = 'tos_target_c';
$dictionary['Account']['fields']['tos_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['tos_target_c']['size'] = '20';
$dictionary['Account']['fields']['tos_target_c']['required'] = false;
$dictionary['Account']['fields']['tos_target_c']['comments'] = 'Auto-created entry for field tos_target_c';
$dictionary['Account']['fields']['tos_target_c']['vname'] = 'TOS Target';
$dictionary['Account']['fields']['tos_target_c']['source'] = 'custom_fields';

// Field: coding_service_target_c
$dictionary['Account']['fields']['coding_service_target_c']['name'] = 'coding_service_target_c';
$dictionary['Account']['fields']['coding_service_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['coding_service_target_c']['size'] = '20';
$dictionary['Account']['fields']['coding_service_target_c']['required'] = false;
$dictionary['Account']['fields']['coding_service_target_c']['comments'] = 'Auto-created entry for field coding_service_target_c';
$dictionary['Account']['fields']['coding_service_target_c']['vname'] = 'Coding Service Target';
$dictionary['Account']['fields']['coding_service_target_c']['source'] = 'custom_fields';

// Field: dep_target_c
$dictionary['Account']['fields']['dep_target_c']['name'] = 'dep_target_c';
$dictionary['Account']['fields']['dep_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['dep_target_c']['size'] = '20';
$dictionary['Account']['fields']['dep_target_c']['required'] = false;
$dictionary['Account']['fields']['dep_target_c']['comments'] = 'Auto-created entry for field dep_target_c';
$dictionary['Account']['fields']['dep_target_c']['vname'] = 'DEP Target';
$dictionary['Account']['fields']['dep_target_c']['source'] = 'custom_fields';

// Field: cac_target_c
$dictionary['Account']['fields']['cac_target_c']['name'] = 'cac_target_c';
$dictionary['Account']['fields']['cac_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['cac_target_c']['size'] = '20';
$dictionary['Account']['fields']['cac_target_c']['required'] = false;
$dictionary['Account']['fields']['cac_target_c']['comments'] = 'Auto-created entry for field cac_target_c';
$dictionary['Account']['fields']['cac_target_c']['vname'] = 'CAC Target';
$dictionary['Account']['fields']['cac_target_c']['source'] = 'custom_fields';

// Field: dqd_target_c
$dictionary['Account']['fields']['dqd_target_c']['name'] = 'dqd_target_c';
$dictionary['Account']['fields']['dqd_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['dqd_target_c']['size'] = '20';
$dictionary['Account']['fields']['dqd_target_c']['required'] = false;
$dictionary['Account']['fields']['dqd_target_c']['comments'] = 'Auto-created entry for field dqd_target_c';
$dictionary['Account']['fields']['dqd_target_c']['vname'] = 'DQD Target';
$dictionary['Account']['fields']['dqd_target_c']['source'] = 'custom_fields';

// Field: content_server_target_c
$dictionary['Account']['fields']['content_server_target_c']['name'] = 'content_server_target_c';
$dictionary['Account']['fields']['content_server_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['content_server_target_c']['size'] = '20';
$dictionary['Account']['fields']['content_server_target_c']['required'] = false;
$dictionary['Account']['fields']['content_server_target_c']['comments'] = 'Auto-created entry for field content_server_target_c';
$dictionary['Account']['fields']['content_server_target_c']['vname'] = 'Content Server Target';
$dictionary['Account']['fields']['content_server_target_c']['source'] = 'custom_fields';

// Field: sqr_target_c
$dictionary['Account']['fields']['sqr_target_c']['name'] = 'sqr_target_c';
$dictionary['Account']['fields']['sqr_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['sqr_target_c']['size'] = '20';
$dictionary['Account']['fields']['sqr_target_c']['required'] = false;
$dictionary['Account']['fields']['sqr_target_c']['comments'] = 'Auto-created entry for field sqr_target_c';
$dictionary['Account']['fields']['sqr_target_c']['vname'] = 'SQR Target';
$dictionary['Account']['fields']['sqr_target_c']['source'] = 'custom_fields';

// Field: notifi_target_c
$dictionary['Account']['fields']['notifi_target_c']['name'] = 'notifi_target_c';
$dictionary['Account']['fields']['notifi_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['notifi_target_c']['size'] = '20';
$dictionary['Account']['fields']['notifi_target_c']['required'] = false;
$dictionary['Account']['fields']['notifi_target_c']['comments'] = 'Auto-created entry for field notifi_target_c';
$dictionary['Account']['fields']['notifi_target_c']['vname'] = 'Notifi Target';
$dictionary['Account']['fields']['notifi_target_c']['source'] = 'custom_fields';

// Field: zvision_target_c
$dictionary['Account']['fields']['zvision_target_c']['name'] = 'zvision_target_c';
$dictionary['Account']['fields']['zvision_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['zvision_target_c']['size'] = '20';
$dictionary['Account']['fields']['zvision_target_c']['required'] = false;
$dictionary['Account']['fields']['zvision_target_c']['comments'] = 'Auto-created entry for field zvision_target_c';
$dictionary['Account']['fields']['zvision_target_c']['vname'] = 'Zvision Target';
$dictionary['Account']['fields']['zvision_target_c']['source'] = 'custom_fields';

// Field: tos_customer_c
$dictionary['Account']['fields']['tos_customer_c']['name'] = 'tos_customer_c';
$dictionary['Account']['fields']['tos_customer_c']['type'] = 'bool';
$dictionary['Account']['fields']['tos_customer_c']['size'] = '20';
$dictionary['Account']['fields']['tos_customer_c']['required'] = false;
$dictionary['Account']['fields']['tos_customer_c']['comments'] = 'Auto-created entry for field tos_customer_c';
$dictionary['Account']['fields']['tos_customer_c']['vname'] = 'TOS Customer';
$dictionary['Account']['fields']['tos_customer_c']['source'] = 'custom_fields';

// Field: latitude_c
$dictionary['Account']['fields']['latitude_c']['name'] = 'latitude_c';
$dictionary['Account']['fields']['latitude_c']['type'] = 'float';
$dictionary['Account']['fields']['latitude_c']['len'] = '19';
$dictionary['Account']['fields']['latitude_c']['size'] = '20';
$dictionary['Account']['fields']['latitude_c']['required'] = false;
$dictionary['Account']['fields']['latitude_c']['comments'] = 'Auto-created entry for field latitude_c';
$dictionary['Account']['fields']['latitude_c']['vname'] = 'Latitude';
$dictionary['Account']['fields']['latitude_c']['source'] = 'custom_fields';

// Field: longitude_c
$dictionary['Account']['fields']['longitude_c']['name'] = 'longitude_c';
$dictionary['Account']['fields']['longitude_c']['type'] = 'float';
$dictionary['Account']['fields']['longitude_c']['len'] = '19';
$dictionary['Account']['fields']['longitude_c']['size'] = '20';
$dictionary['Account']['fields']['longitude_c']['required'] = false;
$dictionary['Account']['fields']['longitude_c']['comments'] = 'Auto-created entry for field longitude_c';
$dictionary['Account']['fields']['longitude_c']['vname'] = 'Longitude';
$dictionary['Account']['fields']['longitude_c']['source'] = 'custom_fields';

// Field: geostatus_c
$dictionary['Account']['fields']['geostatus_c']['name'] = 'geostatus_c';
$dictionary['Account']['fields']['geostatus_c']['type'] = 'varchar';
$dictionary['Account']['fields']['geostatus_c']['len'] = '255';
$dictionary['Account']['fields']['geostatus_c']['size'] = '20';
$dictionary['Account']['fields']['geostatus_c']['required'] = false;
$dictionary['Account']['fields']['geostatus_c']['comments'] = 'Auto-created entry for field geostatus_c';
$dictionary['Account']['fields']['geostatus_c']['vname'] = 'Geostatus';
$dictionary['Account']['fields']['geostatus_c']['source'] = 'custom_fields';

// Field: site_size_c
$dictionary['Account']['fields']['site_size_c']['name'] = 'site_size_c';
$dictionary['Account']['fields']['site_size_c']['type'] = 'float';
$dictionary['Account']['fields']['site_size_c']['len'] = '19';
$dictionary['Account']['fields']['site_size_c']['size'] = '20';
$dictionary['Account']['fields']['site_size_c']['required'] = false;
$dictionary['Account']['fields']['site_size_c']['comments'] = 'Auto-created entry for field site_size_c';
$dictionary['Account']['fields']['site_size_c']['vname'] = 'Site Size';
$dictionary['Account']['fields']['site_size_c']['source'] = 'custom_fields';

// Field: isr_rad_prospecting_c
$dictionary['Account']['fields']['isr_rad_prospecting_c']['name'] = 'isr_rad_prospecting_c';
$dictionary['Account']['fields']['isr_rad_prospecting_c']['type'] = 'bool';
$dictionary['Account']['fields']['isr_rad_prospecting_c']['size'] = '20';
$dictionary['Account']['fields']['isr_rad_prospecting_c']['required'] = false;
$dictionary['Account']['fields']['isr_rad_prospecting_c']['comments'] = 'Auto-created entry for field isr_rad_prospecting_c';
$dictionary['Account']['fields']['isr_rad_prospecting_c']['vname'] = 'ISR Rad Prospecting';
$dictionary['Account']['fields']['isr_rad_prospecting_c']['source'] = 'custom_fields';

// Field: fed_department_c
$dictionary['Account']['fields']['fed_department_c']['name'] = 'fed_department_c';
$dictionary['Account']['fields']['fed_department_c']['type'] = 'enum';
$dictionary['Account']['fields']['fed_department_c']['len'] = '255';
$dictionary['Account']['fields']['fed_department_c']['size'] = '20';
$dictionary['Account']['fields']['fed_department_c']['required'] = false;
$dictionary['Account']['fields']['fed_department_c']['comments'] = 'Auto-created entry for field fed_department_c';
$dictionary['Account']['fields']['fed_department_c']['vname'] = 'Fed Department';
$dictionary['Account']['fields']['fed_department_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['fed_department_c']['options'] = 'acct_fed_dpmt_list';

// Field: fed_agency_c
$dictionary['Account']['fields']['fed_agency_c']['name'] = 'fed_agency_c';
$dictionary['Account']['fields']['fed_agency_c']['type'] = 'enum';
$dictionary['Account']['fields']['fed_agency_c']['len'] = '255';
$dictionary['Account']['fields']['fed_agency_c']['size'] = '20';
$dictionary['Account']['fields']['fed_agency_c']['required'] = false;
$dictionary['Account']['fields']['fed_agency_c']['comments'] = 'Auto-created entry for field fed_agency_c';
$dictionary['Account']['fields']['fed_agency_c']['vname'] = 'Fed Agency';
$dictionary['Account']['fields']['fed_agency_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['fed_agency_c']['options'] = 'acct_fed_agency_list';

// Field: ehr_c
$dictionary['Account']['fields']['ehr_c']['name'] = 'ehr_c';
$dictionary['Account']['fields']['ehr_c']['type'] = 'varchar';
$dictionary['Account']['fields']['ehr_c']['len'] = '100';
$dictionary['Account']['fields']['ehr_c']['size'] = '20';
$dictionary['Account']['fields']['ehr_c']['required'] = false;
$dictionary['Account']['fields']['ehr_c']['comments'] = 'Auto-created entry for field ehr_c';
$dictionary['Account']['fields']['ehr_c']['vname'] = 'EHR';
$dictionary['Account']['fields']['ehr_c']['source'] = 'custom_fields';

// Field: years_in_business_c
$dictionary['Account']['fields']['years_in_business_c']['name'] = 'years_in_business_c';
$dictionary['Account']['fields']['years_in_business_c']['type'] = 'varchar';
$dictionary['Account']['fields']['years_in_business_c']['len'] = '30';
$dictionary['Account']['fields']['years_in_business_c']['size'] = '20';
$dictionary['Account']['fields']['years_in_business_c']['required'] = false;
$dictionary['Account']['fields']['years_in_business_c']['comments'] = 'Auto-created entry for field years_in_business_c';
$dictionary['Account']['fields']['years_in_business_c']['vname'] = 'Years In Business';
$dictionary['Account']['fields']['years_in_business_c']['source'] = 'custom_fields';

// Field: geographic_region_served_c
$dictionary['Account']['fields']['geographic_region_served_c']['name'] = 'geographic_region_served_c';
$dictionary['Account']['fields']['geographic_region_served_c']['type'] = 'varchar';
$dictionary['Account']['fields']['geographic_region_served_c']['len'] = '100';
$dictionary['Account']['fields']['geographic_region_served_c']['size'] = '20';
$dictionary['Account']['fields']['geographic_region_served_c']['required'] = false;
$dictionary['Account']['fields']['geographic_region_served_c']['comments'] = 'Auto-created entry for field geographic_region_served_c';
$dictionary['Account']['fields']['geographic_region_served_c']['vname'] = 'Geographic Region Served';
$dictionary['Account']['fields']['geographic_region_served_c']['source'] = 'custom_fields';

// Field: idn_affiliated_c
$dictionary['Account']['fields']['idn_affiliated_c']['name'] = 'idn_affiliated_c';
$dictionary['Account']['fields']['idn_affiliated_c']['type'] = 'bool';
$dictionary['Account']['fields']['idn_affiliated_c']['size'] = '20';
$dictionary['Account']['fields']['idn_affiliated_c']['required'] = false;
$dictionary['Account']['fields']['idn_affiliated_c']['comments'] = 'Auto-created entry for field idn_affiliated_c';
$dictionary['Account']['fields']['idn_affiliated_c']['vname'] = 'IDN Affiliated';
$dictionary['Account']['fields']['idn_affiliated_c']['source'] = 'custom_fields';

// Field: deactivated_c
$dictionary['Account']['fields']['deactivated_c']['name'] = 'deactivated_c';
$dictionary['Account']['fields']['deactivated_c']['type'] = 'bool';
$dictionary['Account']['fields']['deactivated_c']['size'] = '20';
$dictionary['Account']['fields']['deactivated_c']['required'] = false;
$dictionary['Account']['fields']['deactivated_c']['comments'] = 'Auto-created entry for field deactivated_c';
$dictionary['Account']['fields']['deactivated_c']['vname'] = 'Deactivated';
$dictionary['Account']['fields']['deactivated_c']['source'] = 'custom_fields';

// Field: entity_type_c
$dictionary['Account']['fields']['entity_type_c']['name'] = 'entity_type_c';
$dictionary['Account']['fields']['entity_type_c']['type'] = 'varchar';
$dictionary['Account']['fields']['entity_type_c']['len'] = '255';
$dictionary['Account']['fields']['entity_type_c']['size'] = '20';
$dictionary['Account']['fields']['entity_type_c']['required'] = false;
$dictionary['Account']['fields']['entity_type_c']['comments'] = 'Auto-created entry for field entity_type_c';
$dictionary['Account']['fields']['entity_type_c']['vname'] = 'Entity Type';
$dictionary['Account']['fields']['entity_type_c']['source'] = 'custom_fields';

// Field: dh_id_c
$dictionary['Account']['fields']['dh_id_c']['name'] = 'dh_id_c';
$dictionary['Account']['fields']['dh_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['dh_id_c']['len'] = '40';
$dictionary['Account']['fields']['dh_id_c']['size'] = '20';
$dictionary['Account']['fields']['dh_id_c']['required'] = false;
$dictionary['Account']['fields']['dh_id_c']['comments'] = 'Auto-created entry for field dh_id_c';
$dictionary['Account']['fields']['dh_id_c']['vname'] = 'DH Id';
$dictionary['Account']['fields']['dh_id_c']['source'] = 'custom_fields';

// Field: current_cdi_vendor_c
$dictionary['Account']['fields']['current_cdi_vendor_c']['name'] = 'current_cdi_vendor_c';
$dictionary['Account']['fields']['current_cdi_vendor_c']['type'] = 'enum';
$dictionary['Account']['fields']['current_cdi_vendor_c']['len'] = '255';
$dictionary['Account']['fields']['current_cdi_vendor_c']['size'] = '20';
$dictionary['Account']['fields']['current_cdi_vendor_c']['required'] = false;
$dictionary['Account']['fields']['current_cdi_vendor_c']['comments'] = 'Auto-created entry for field current_cdi_vendor_c';
$dictionary['Account']['fields']['current_cdi_vendor_c']['vname'] = 'Current CDI Vendor';
$dictionary['Account']['fields']['current_cdi_vendor_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['current_cdi_vendor_c']['options'] = 'acct_cdi_vendor_list';

// Field: cdi_buyer_c
$dictionary['Account']['fields']['cdi_buyer_c']['name'] = 'cdi_buyer_c';
$dictionary['Account']['fields']['cdi_buyer_c']['type'] = 'varchar';
$dictionary['Account']['fields']['cdi_buyer_c']['len'] = '50';
$dictionary['Account']['fields']['cdi_buyer_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_buyer_c']['required'] = false;
$dictionary['Account']['fields']['cdi_buyer_c']['comments'] = 'Auto-created entry for field cdi_buyer_c';
$dictionary['Account']['fields']['cdi_buyer_c']['vname'] = 'CDI Buyer';
$dictionary['Account']['fields']['cdi_buyer_c']['source'] = 'custom_fields';

// Field: cdi_buyer_title_c
$dictionary['Account']['fields']['cdi_buyer_title_c']['name'] = 'cdi_buyer_title_c';
$dictionary['Account']['fields']['cdi_buyer_title_c']['type'] = 'varchar';
$dictionary['Account']['fields']['cdi_buyer_title_c']['len'] = '50';
$dictionary['Account']['fields']['cdi_buyer_title_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_buyer_title_c']['required'] = false;
$dictionary['Account']['fields']['cdi_buyer_title_c']['comments'] = 'Auto-created entry for field cdi_buyer_title_c';
$dictionary['Account']['fields']['cdi_buyer_title_c']['vname'] = 'CDI Buyer Title';
$dictionary['Account']['fields']['cdi_buyer_title_c']['source'] = 'custom_fields';

// Field: cdi_status_c
$dictionary['Account']['fields']['cdi_status_c']['name'] = 'cdi_status_c';
$dictionary['Account']['fields']['cdi_status_c']['type'] = 'enum';
$dictionary['Account']['fields']['cdi_status_c']['len'] = '255';
$dictionary['Account']['fields']['cdi_status_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_status_c']['required'] = false;
$dictionary['Account']['fields']['cdi_status_c']['comments'] = 'Auto-created entry for field cdi_status_c';
$dictionary['Account']['fields']['cdi_status_c']['vname'] = 'CDI Status';
$dictionary['Account']['fields']['cdi_status_c']['source'] = 'custom_fields';
$dictionary['Account']['fields']['cdi_status_c']['options'] = 'acct_cdi_status_list';

// Field: cdi_comments_c
$dictionary['Account']['fields']['cdi_comments_c']['name'] = 'cdi_comments_c';
$dictionary['Account']['fields']['cdi_comments_c']['type'] = 'varchar';
$dictionary['Account']['fields']['cdi_comments_c']['len'] = '255';
$dictionary['Account']['fields']['cdi_comments_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_comments_c']['required'] = false;
$dictionary['Account']['fields']['cdi_comments_c']['comments'] = 'Auto-created entry for field cdi_comments_c';
$dictionary['Account']['fields']['cdi_comments_c']['vname'] = 'CDI Comments';
$dictionary['Account']['fields']['cdi_comments_c']['source'] = 'custom_fields';

// Field: cdi_comment_date_c
$dictionary['Account']['fields']['cdi_comment_date_c']['name'] = 'cdi_comment_date_c';
$dictionary['Account']['fields']['cdi_comment_date_c']['type'] = 'date';
$dictionary['Account']['fields']['cdi_comment_date_c']['len'] = '';
$dictionary['Account']['fields']['cdi_comment_date_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_comment_date_c']['required'] = false;
$dictionary['Account']['fields']['cdi_comment_date_c']['comments'] = 'Auto-created entry for field cdi_comment_date_c';
$dictionary['Account']['fields']['cdi_comment_date_c']['vname'] = 'CDI Comment Date';
$dictionary['Account']['fields']['cdi_comment_date_c']['source'] = 'custom_fields';

// Field: cdi_target_c
$dictionary['Account']['fields']['cdi_target_c']['name'] = 'cdi_target_c';
$dictionary['Account']['fields']['cdi_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['cdi_target_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_target_c']['required'] = false;
$dictionary['Account']['fields']['cdi_target_c']['comments'] = 'Auto-created entry for field cdi_target_c';
$dictionary['Account']['fields']['cdi_target_c']['vname'] = 'CDI Target';
$dictionary['Account']['fields']['cdi_target_c']['source'] = 'custom_fields';

// Field: tos_rad_opp_size_c
$dictionary['Account']['fields']['tos_rad_opp_size_c']['name'] = 'tos_rad_opp_size_c';
$dictionary['Account']['fields']['tos_rad_opp_size_c']['type'] = 'float';
$dictionary['Account']['fields']['tos_rad_opp_size_c']['len'] = '19';
$dictionary['Account']['fields']['tos_rad_opp_size_c']['size'] = '20';
$dictionary['Account']['fields']['tos_rad_opp_size_c']['required'] = false;
$dictionary['Account']['fields']['tos_rad_opp_size_c']['comments'] = 'Auto-created entry for field tos_rad_opp_size_c';
$dictionary['Account']['fields']['tos_rad_opp_size_c']['vname'] = 'TOS Rad Opp Size';
$dictionary['Account']['fields']['tos_rad_opp_size_c']['source'] = 'custom_fields';

// Field: fd_id_c
$dictionary['Account']['fields']['fd_id_c']['name'] = 'fd_id_c';
$dictionary['Account']['fields']['fd_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['fd_id_c']['len'] = '6';
$dictionary['Account']['fields']['fd_id_c']['size'] = '20';
$dictionary['Account']['fields']['fd_id_c']['required'] = false;
$dictionary['Account']['fields']['fd_id_c']['comments'] = 'Auto-created entry for field fd_id_c';
$dictionary['Account']['fields']['fd_id_c']['vname'] = 'FD ID';
$dictionary['Account']['fields']['fd_id_c']['source'] = 'custom_fields';

// Field: parent_owner_c
$dictionary['Account']['fields']['parent_owner_c']['name'] = 'parent_owner_c';
$dictionary['Account']['fields']['parent_owner_c']['type'] = 'varchar';
$dictionary['Account']['fields']['parent_owner_c']['len'] = '1300';
$dictionary['Account']['fields']['parent_owner_c']['size'] = '20';
$dictionary['Account']['fields']['parent_owner_c']['required'] = false;
$dictionary['Account']['fields']['parent_owner_c']['comments'] = 'Auto-created entry for field parent_owner_c';
$dictionary['Account']['fields']['parent_owner_c']['vname'] = 'Parent Owner';
$dictionary['Account']['fields']['parent_owner_c']['source'] = 'custom_fields';

// Field: cdi_tos_check_c
$dictionary['Account']['fields']['cdi_tos_check_c']['name'] = 'cdi_tos_check_c';
$dictionary['Account']['fields']['cdi_tos_check_c']['type'] = 'bool';
$dictionary['Account']['fields']['cdi_tos_check_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_tos_check_c']['required'] = false;
$dictionary['Account']['fields']['cdi_tos_check_c']['comments'] = 'Auto-created entry for field cdi_tos_check_c';
$dictionary['Account']['fields']['cdi_tos_check_c']['vname'] = 'CDI TOS Check';
$dictionary['Account']['fields']['cdi_tos_check_c']['source'] = 'custom_fields';

// Field: parent_account_name_v2_c
$dictionary['Account']['fields']['parent_account_name_v2_c']['name'] = 'parent_account_name_v2_c';
$dictionary['Account']['fields']['parent_account_name_v2_c']['type'] = 'varchar';
$dictionary['Account']['fields']['parent_account_name_v2_c']['len'] = '1300';
$dictionary['Account']['fields']['parent_account_name_v2_c']['size'] = '20';
$dictionary['Account']['fields']['parent_account_name_v2_c']['required'] = false;
$dictionary['Account']['fields']['parent_account_name_v2_c']['comments'] = 'Auto-created entry for field parent_account_name_v2_c';
$dictionary['Account']['fields']['parent_account_name_v2_c']['vname'] = 'Parent Account Name V2';
$dictionary['Account']['fields']['parent_account_name_v2_c']['source'] = 'custom_fields';

// Field: cdi_target_w_fd_c
$dictionary['Account']['fields']['cdi_target_w_fd_c']['name'] = 'cdi_target_w_fd_c';
$dictionary['Account']['fields']['cdi_target_w_fd_c']['type'] = 'bool';
$dictionary['Account']['fields']['cdi_target_w_fd_c']['size'] = '20';
$dictionary['Account']['fields']['cdi_target_w_fd_c']['required'] = false;
$dictionary['Account']['fields']['cdi_target_w_fd_c']['comments'] = 'Auto-created entry for field cdi_target_w_fd_c';
$dictionary['Account']['fields']['cdi_target_w_fd_c']['vname'] = 'CDI Target W Fd';
$dictionary['Account']['fields']['cdi_target_w_fd_c']['source'] = 'custom_fields';

// Field: imaging_owner_c
$dictionary['Account']['fields']['imaging_owner_c']['name'] = 'imaging_owner_c';
$dictionary['Account']['fields']['imaging_owner_c']['type'] = 'varchar';
$dictionary['Account']['fields']['imaging_owner_c']['len'] = '40';
$dictionary['Account']['fields']['imaging_owner_c']['size'] = '20';
$dictionary['Account']['fields']['imaging_owner_c']['required'] = false;
$dictionary['Account']['fields']['imaging_owner_c']['comments'] = 'Auto-created entry for field imaging_owner_c';
$dictionary['Account']['fields']['imaging_owner_c']['vname'] = 'Imaging Owner Old';
$dictionary['Account']['fields']['imaging_owner_c']['source'] = 'custom_fields';

// Part 1 - related field for imaging_owner

$dictionary['Account']['fields']['Usrimaging_owner_c']['name']='Usrimaging_owner_c';
$dictionary['Account']['fields']['Usrimaging_owner_c']['len']='40';
$dictionary['Account']['fields']['Usrimaging_owner_c']['type']='id';
$dictionary['Account']['fields']['Usrimaging_owner_c']['inline_edit']=1;
$dictionary['Account']['fields']['Usrimaging_owner_c']['importable']='true';
$dictionary['Account']['fields']['Usrimaging_owner_c']['reportable']=true;
$dictionary['Account']['fields']['Usrimaging_owner_c']['id']='AccountUsrimaging_owner_c';
$dictionary['Account']['fields']['Usrimaging_owner_c']['module']='Account';
$dictionary['Account']['fields']['Usrimaging_owner_c']['vname']='LBL_ACCIMAGING_OWNER_C';
$dictionary['Account']['fields']['Usrimaging_owner_c']['source']='custom_fields';

// 2017-11-01 BCG (removed 2018-01-24 BCG)
//$dictionary['Account']['fields']['Usrimaging_owner_c']['custom_module']='Account';

// Part 2 - related field for imaging_owner

$dictionary['Account']['fields']['imaging_owner_name_c']['name']='imaging_owner_name_c';
$dictionary['Account']['fields']['imaging_owner_name_c']['len']='255';
$dictionary['Account']['fields']['imaging_owner_name_c']['type']='relate';
$dictionary['Account']['fields']['imaging_owner_name_c']['inline_edit']=1;
$dictionary['Account']['fields']['imaging_owner_name_c']['importable']='true';
$dictionary['Account']['fields']['imaging_owner_name_c']['reportable']=true;
//$dictionary['Account']['fields']['imaging_owner_name_c']['ext2']='Users';
$dictionary['Account']['fields']['imaging_owner_name_c']['id']='Accountimaging_owner_name_c';
$dictionary['Account']['fields']['imaging_owner_name_c']['module']='Users';
$dictionary['Account']['fields']['imaging_owner_name_c']['studio']='visible';
$dictionary['Account']['fields']['imaging_owner_name_c']['id_name']='Usrimaging_owner_c';
$dictionary['Account']['fields']['imaging_owner_name_c']['vname']='Imaging Owner';
$dictionary['Account']['fields']['imaging_owner_name_c']['source']='non-db';

// 2017-11-01 BCG (removed 2018-01-24 BCG)
//$dictionary['Account']['fields']['imaging_owner_name_c']['custom_module']='Accounts';

// End of relate for imaging_owner


// Field: it_region_c
$dictionary['Account']['fields']['it_region_c']['name'] = 'it_region_c';
$dictionary['Account']['fields']['it_region_c']['type'] = 'varchar';
$dictionary['Account']['fields']['it_region_c']['len'] = '100';
$dictionary['Account']['fields']['it_region_c']['size'] = '20';
$dictionary['Account']['fields']['it_region_c']['required'] = false;
$dictionary['Account']['fields']['it_region_c']['comments'] = 'Auto-created entry for field it_region_c';
$dictionary['Account']['fields']['it_region_c']['vname'] = 'IT Region';
$dictionary['Account']['fields']['it_region_c']['source'] = 'custom_fields';

// Field: pa_rad_c
$dictionary['Account']['fields']['pa_rad_c']['name'] = 'pa_rad_c';
$dictionary['Account']['fields']['pa_rad_c']['type'] = 'varchar';
$dictionary['Account']['fields']['pa_rad_c']['len'] = '20';
$dictionary['Account']['fields']['pa_rad_c']['size'] = '20';
$dictionary['Account']['fields']['pa_rad_c']['required'] = false;
$dictionary['Account']['fields']['pa_rad_c']['comments'] = 'Auto-created entry for field pa_rad_c';
$dictionary['Account']['fields']['pa_rad_c']['vname'] = 'PA Rad';
$dictionary['Account']['fields']['pa_rad_c']['source'] = 'custom_fields';

// Field: rad_rep_c
$dictionary['Account']['fields']['rad_rep_c']['name'] = 'rad_rep_c';
$dictionary['Account']['fields']['rad_rep_c']['type'] = 'varchar';
$dictionary['Account']['fields']['rad_rep_c']['len'] = '1300';
$dictionary['Account']['fields']['rad_rep_c']['size'] = '20';
$dictionary['Account']['fields']['rad_rep_c']['required'] = false;
$dictionary['Account']['fields']['rad_rep_c']['comments'] = 'Auto-created entry for field rad_rep_c';
$dictionary['Account']['fields']['rad_rep_c']['vname'] = 'Rad Rep';
$dictionary['Account']['fields']['rad_rep_c']['source'] = 'custom_fields';

// Field: number_of_providers_c
$dictionary['Account']['fields']['number_of_providers_c']['name'] = 'number_of_providers_c';
$dictionary['Account']['fields']['number_of_providers_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_providers_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_providers_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_providers_c']['required'] = false;
$dictionary['Account']['fields']['number_of_providers_c']['comments'] = 'Auto-created entry for field number_of_providers_c';
$dictionary['Account']['fields']['number_of_providers_c']['vname'] = 'Number Of Providers';
$dictionary['Account']['fields']['number_of_providers_c']['source'] = 'custom_fields';

// Field: ig_id_c
$dictionary['Account']['fields']['ig_id_c']['name'] = 'ig_id_c';
$dictionary['Account']['fields']['ig_id_c']['type'] = 'text';
$dictionary['Account']['fields']['ig_id_c']['len'] = '';
$dictionary['Account']['fields']['ig_id_c']['size'] = '20';
$dictionary['Account']['fields']['ig_id_c']['required'] = false;
$dictionary['Account']['fields']['ig_id_c']['comments'] = 'Auto-created entry for field ig_id_c';
$dictionary['Account']['fields']['ig_id_c']['vname'] = 'IGN';
$dictionary['Account']['fields']['ig_id_c']['source'] = 'custom_fields';

// Field: rad_campaign_c
$dictionary['Account']['fields']['rad_campaign_c']['name'] = 'rad_campaign_c';
$dictionary['Account']['fields']['rad_campaign_c']['type'] = 'bool';
$dictionary['Account']['fields']['rad_campaign_c']['size'] = '20';
$dictionary['Account']['fields']['rad_campaign_c']['required'] = false;
$dictionary['Account']['fields']['rad_campaign_c']['comments'] = 'Auto-created entry for field rad_campaign_c';
$dictionary['Account']['fields']['rad_campaign_c']['vname'] = 'Rad Campaign';
$dictionary['Account']['fields']['rad_campaign_c']['source'] = 'custom_fields';

// Field: business_type_c
$dictionary['Account']['fields']['business_type_c']['name'] = 'business_type_c';
$dictionary['Account']['fields']['business_type_c']['type'] = 'varchar';
$dictionary['Account']['fields']['business_type_c']['len'] = '100';
$dictionary['Account']['fields']['business_type_c']['size'] = '20';
$dictionary['Account']['fields']['business_type_c']['required'] = false;
$dictionary['Account']['fields']['business_type_c']['comments'] = 'Auto-created entry for field business_type_c';
$dictionary['Account']['fields']['business_type_c']['vname'] = 'Business Type';
$dictionary['Account']['fields']['business_type_c']['source'] = 'custom_fields';

// Field: account_number_c
$dictionary['Account']['fields']['account_number_c']['name'] = 'account_number_c';
$dictionary['Account']['fields']['account_number_c']['type'] = 'varchar';
$dictionary['Account']['fields']['account_number_c']['len'] = '100';
$dictionary['Account']['fields']['account_number_c']['size'] = '20';
$dictionary['Account']['fields']['account_number_c']['required'] = false;
$dictionary['Account']['fields']['account_number_c']['comments'] = 'Auto-created entry for field account_number_c';
$dictionary['Account']['fields']['account_number_c']['vname'] = 'Account Number';
$dictionary['Account']['fields']['account_number_c']['source'] = 'custom_fields';

// Field: pitt_id_c
$dictionary['Account']['fields']['pitt_id_c']['name'] = 'pitt_id_c';
$dictionary['Account']['fields']['pitt_id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['pitt_id_c']['len'] = '20';
$dictionary['Account']['fields']['pitt_id_c']['size'] = '20';
$dictionary['Account']['fields']['pitt_id_c']['required'] = false;
$dictionary['Account']['fields']['pitt_id_c']['comments'] = 'Auto-created entry for field pitt_id_c';
$dictionary['Account']['fields']['pitt_id_c']['vname'] = 'Pitt ID';
$dictionary['Account']['fields']['pitt_id_c']['source'] = 'custom_fields';

// Field: zba_sss_c
$dictionary['Account']['fields']['zba_sss_c']['name'] = 'zba_sss_c';
$dictionary['Account']['fields']['zba_sss_c']['type'] = 'varchar';
$dictionary['Account']['fields']['zba_sss_c']['len'] = '10';
$dictionary['Account']['fields']['zba_sss_c']['size'] = '20';
$dictionary['Account']['fields']['zba_sss_c']['required'] = false;
$dictionary['Account']['fields']['zba_sss_c']['comments'] = 'Auto-created entry for field zba_sss_c';
$dictionary['Account']['fields']['zba_sss_c']['vname'] = 'ZBA SSS';
$dictionary['Account']['fields']['zba_sss_c']['source'] = 'custom_fields';

// Field: new_region_c
$dictionary['Account']['fields']['new_region_c']['name'] = 'new_region_c';
$dictionary['Account']['fields']['new_region_c']['type'] = 'varchar';
$dictionary['Account']['fields']['new_region_c']['len'] = '30';
$dictionary['Account']['fields']['new_region_c']['size'] = '20';
$dictionary['Account']['fields']['new_region_c']['required'] = false;
$dictionary['Account']['fields']['new_region_c']['comments'] = 'Auto-created entry for field new_region_c';
$dictionary['Account']['fields']['new_region_c']['vname'] = 'Region';
$dictionary['Account']['fields']['new_region_c']['source'] = 'custom_fields';

// Field: state_split_c
$dictionary['Account']['fields']['state_split_c']['name'] = 'state_split_c';
$dictionary['Account']['fields']['state_split_c']['type'] = 'varchar';
$dictionary['Account']['fields']['state_split_c']['len'] = '10';
$dictionary['Account']['fields']['state_split_c']['size'] = '20';
$dictionary['Account']['fields']['state_split_c']['required'] = false;
$dictionary['Account']['fields']['state_split_c']['comments'] = 'Auto-created entry for field state_split_c';
$dictionary['Account']['fields']['state_split_c']['vname'] = 'State Split';
$dictionary['Account']['fields']['state_split_c']['source'] = 'custom_fields';

// Field: is_third_party_indicator_c
$dictionary['Account']['fields']['is_third_party_indicator_c']['name'] = 'is_third_party_indicator_c';
$dictionary['Account']['fields']['is_third_party_indicator_c']['type'] = 'bool';
$dictionary['Account']['fields']['is_third_party_indicator_c']['size'] = '20';
$dictionary['Account']['fields']['is_third_party_indicator_c']['required'] = false;
$dictionary['Account']['fields']['is_third_party_indicator_c']['comments'] = 'Auto-created entry for field is_third_party_indicator_c';
$dictionary['Account']['fields']['is_third_party_indicator_c']['vname'] = 'Is Third Party Indicator';
$dictionary['Account']['fields']['is_third_party_indicator_c']['source'] = 'custom_fields';

// Field: nih_rating_c
$dictionary['Account']['fields']['nih_rating_c']['name'] = 'nih_rating_c';
$dictionary['Account']['fields']['nih_rating_c']['type'] = 'varchar';
$dictionary['Account']['fields']['nih_rating_c']['len'] = '255';
$dictionary['Account']['fields']['nih_rating_c']['size'] = '20';
$dictionary['Account']['fields']['nih_rating_c']['required'] = false;
$dictionary['Account']['fields']['nih_rating_c']['comments'] = 'Auto-created entry for field nih_rating_c';
$dictionary['Account']['fields']['nih_rating_c']['vname'] = 'NIH Rating';
$dictionary['Account']['fields']['nih_rating_c']['source'] = 'custom_fields';

// Field: id_c
$dictionary['Account']['fields']['id_c']['name'] = 'id_c';
$dictionary['Account']['fields']['id_c']['type'] = 'varchar';
$dictionary['Account']['fields']['id_c']['len'] = '1300';
$dictionary['Account']['fields']['id_c']['size'] = '20';
$dictionary['Account']['fields']['id_c']['required'] = false;
$dictionary['Account']['fields']['id_c']['comments'] = 'Auto-created entry for field id_c';
$dictionary['Account']['fields']['id_c']['vname'] = 'Id';
$dictionary['Account']['fields']['id_c']['source'] = 'custom_fields';

// Field: crm_c
$dictionary['Account']['fields']['crm_c']['name'] = 'crm_c';
$dictionary['Account']['fields']['crm_c']['type'] = 'varchar';
$dictionary['Account']['fields']['crm_c']['len'] = '30';
$dictionary['Account']['fields']['crm_c']['size'] = '20';
$dictionary['Account']['fields']['crm_c']['required'] = false;
$dictionary['Account']['fields']['crm_c']['comments'] = 'Auto-created entry for field crm_c';
$dictionary['Account']['fields']['crm_c']['vname'] = 'CRM';
$dictionary['Account']['fields']['crm_c']['source'] = 'custom_fields';

// Field: corporate_owner_name_c
$dictionary['Account']['fields']['corporate_owner_name_c']['name'] = 'corporate_owner_name_c';
$dictionary['Account']['fields']['corporate_owner_name_c']['type'] = 'varchar';
$dictionary['Account']['fields']['corporate_owner_name_c']['len'] = '100';
$dictionary['Account']['fields']['corporate_owner_name_c']['size'] = '20';
$dictionary['Account']['fields']['corporate_owner_name_c']['required'] = false;
$dictionary['Account']['fields']['corporate_owner_name_c']['comments'] = 'Auto-created entry for field corporate_owner_name_c';
$dictionary['Account']['fields']['corporate_owner_name_c']['vname'] = 'Corporate Owner Name';
$dictionary['Account']['fields']['corporate_owner_name_c']['source'] = 'custom_fields';

// Field: total_beds_c
$dictionary['Account']['fields']['total_beds_c']['name'] = 'total_beds_c';
$dictionary['Account']['fields']['total_beds_c']['type'] = 'float';
$dictionary['Account']['fields']['total_beds_c']['len'] = '19';
$dictionary['Account']['fields']['total_beds_c']['size'] = '20';
$dictionary['Account']['fields']['total_beds_c']['required'] = false;
$dictionary['Account']['fields']['total_beds_c']['comments'] = 'Auto-created entry for field total_beds_c';
$dictionary['Account']['fields']['total_beds_c']['vname'] = 'Total Beds';
$dictionary['Account']['fields']['total_beds_c']['source'] = 'custom_fields';

// Field: income_statement_operating_expense_c
$dictionary['Account']['fields']['income_statement_operating_expense_c']['name'] = 'income_statement_operating_expense_c';
$dictionary['Account']['fields']['income_statement_operating_expense_c']['type'] = 'float';
$dictionary['Account']['fields']['income_statement_operating_expense_c']['len'] = '19';
$dictionary['Account']['fields']['income_statement_operating_expense_c']['size'] = '20';
$dictionary['Account']['fields']['income_statement_operating_expense_c']['required'] = false;
$dictionary['Account']['fields']['income_statement_operating_expense_c']['comments'] = 'Auto-created entry for field income_statement_operating_expense_c';
$dictionary['Account']['fields']['income_statement_operating_expense_c']['vname'] = 'Income Statement Operating Expense';
$dictionary['Account']['fields']['income_statement_operating_expense_c']['source'] = 'custom_fields';

// Field: ip_days_c
$dictionary['Account']['fields']['ip_days_c']['name'] = 'ip_days_c';
$dictionary['Account']['fields']['ip_days_c']['type'] = 'float';
$dictionary['Account']['fields']['ip_days_c']['len'] = '19';
$dictionary['Account']['fields']['ip_days_c']['size'] = '20';
$dictionary['Account']['fields']['ip_days_c']['required'] = false;
$dictionary['Account']['fields']['ip_days_c']['comments'] = 'Auto-created entry for field ip_days_c';
$dictionary['Account']['fields']['ip_days_c']['vname'] = 'IP Days';
$dictionary['Account']['fields']['ip_days_c']['source'] = 'custom_fields';

// Field: op_visits_c
$dictionary['Account']['fields']['op_visits_c']['name'] = 'op_visits_c';
$dictionary['Account']['fields']['op_visits_c']['type'] = 'float';
$dictionary['Account']['fields']['op_visits_c']['len'] = '19';
$dictionary['Account']['fields']['op_visits_c']['size'] = '20';
$dictionary['Account']['fields']['op_visits_c']['required'] = false;
$dictionary['Account']['fields']['op_visits_c']['comments'] = 'Auto-created entry for field op_visits_c';
$dictionary['Account']['fields']['op_visits_c']['vname'] = 'OP Visits';
$dictionary['Account']['fields']['op_visits_c']['source'] = 'custom_fields';

// Field: parent_classification_c
$dictionary['Account']['fields']['parent_classification_c']['name'] = 'parent_classification_c';
$dictionary['Account']['fields']['parent_classification_c']['type'] = 'varchar';
$dictionary['Account']['fields']['parent_classification_c']['len'] = '1300';
$dictionary['Account']['fields']['parent_classification_c']['size'] = '20';
$dictionary['Account']['fields']['parent_classification_c']['required'] = false;
$dictionary['Account']['fields']['parent_classification_c']['comments'] = 'Auto-created entry for field parent_classification_c';
$dictionary['Account']['fields']['parent_classification_c']['vname'] = 'Parent Classification';
$dictionary['Account']['fields']['parent_classification_c']['source'] = 'custom_fields';

// Field: fluency_direct_c
$dictionary['Account']['fields']['fluency_direct_c']['name'] = 'fluency_direct_c';
$dictionary['Account']['fields']['fluency_direct_c']['type'] = 'bool';
$dictionary['Account']['fields']['fluency_direct_c']['size'] = '20';
$dictionary['Account']['fields']['fluency_direct_c']['required'] = false;
$dictionary['Account']['fields']['fluency_direct_c']['comments'] = 'Auto-created entry for field fluency_direct_c';
$dictionary['Account']['fields']['fluency_direct_c']['vname'] = 'Fluency Direct';
$dictionary['Account']['fields']['fluency_direct_c']['source'] = 'custom_fields';

// Field: est_2013_tos_rev_c
$dictionary['Account']['fields']['est_2013_tos_rev_c']['name'] = 'est_2013_tos_rev_c';
$dictionary['Account']['fields']['est_2013_tos_rev_c']['type'] = 'float';
$dictionary['Account']['fields']['est_2013_tos_rev_c']['len'] = '19';
$dictionary['Account']['fields']['est_2013_tos_rev_c']['size'] = '20';
$dictionary['Account']['fields']['est_2013_tos_rev_c']['required'] = false;
$dictionary['Account']['fields']['est_2013_tos_rev_c']['comments'] = 'Auto-created entry for field est_2013_tos_rev_c';
$dictionary['Account']['fields']['est_2013_tos_rev_c']['vname'] = 'Est 2013 TOS Rev';
$dictionary['Account']['fields']['est_2013_tos_rev_c']['source'] = 'custom_fields';

// Field: revenue_c
$dictionary['Account']['fields']['revenue_c']['name'] = 'revenue_c';
$dictionary['Account']['fields']['revenue_c']['type'] = 'float';
$dictionary['Account']['fields']['revenue_c']['len'] = '19';
$dictionary['Account']['fields']['revenue_c']['size'] = '20';
$dictionary['Account']['fields']['revenue_c']['required'] = false;
$dictionary['Account']['fields']['revenue_c']['comments'] = 'Auto-created entry for field revenue_c';
$dictionary['Account']['fields']['revenue_c']['vname'] = 'Revenue';
$dictionary['Account']['fields']['revenue_c']['source'] = 'custom_fields';

// Field: number_of_facilities_c
$dictionary['Account']['fields']['number_of_facilities_c']['name'] = 'number_of_facilities_c';
$dictionary['Account']['fields']['number_of_facilities_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_facilities_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_facilities_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_facilities_c']['required'] = false;
$dictionary['Account']['fields']['number_of_facilities_c']['comments'] = 'Auto-created entry for field number_of_facilities_c';
$dictionary['Account']['fields']['number_of_facilities_c']['vname'] = 'Number Of Facilities';
$dictionary['Account']['fields']['number_of_facilities_c']['source'] = 'custom_fields';

// Field: number_of_hospitals_c
$dictionary['Account']['fields']['number_of_hospitals_c']['name'] = 'number_of_hospitals_c';
$dictionary['Account']['fields']['number_of_hospitals_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_hospitals_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_hospitals_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_hospitals_c']['required'] = false;
$dictionary['Account']['fields']['number_of_hospitals_c']['comments'] = 'Auto-created entry for field number_of_hospitals_c';
$dictionary['Account']['fields']['number_of_hospitals_c']['vname'] = 'Number Of Hospitals';
$dictionary['Account']['fields']['number_of_hospitals_c']['source'] = 'custom_fields';

// Field: number_of_sub_acute_loc_c
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['name'] = 'number_of_sub_acute_loc_c';
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['required'] = false;
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['comments'] = 'Auto-created entry for field number_of_sub_acute_loc_c';
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['vname'] = 'Number Of Sub Acute Loc';
$dictionary['Account']['fields']['number_of_sub_acute_loc_c']['source'] = 'custom_fields';

// Field: number_of_ambulatory_loc_c
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['name'] = 'number_of_ambulatory_loc_c';
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['required'] = false;
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['comments'] = 'Auto-created entry for field number_of_ambulatory_loc_c';
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['vname'] = 'Number Of Ambulatory Loc';
$dictionary['Account']['fields']['number_of_ambulatory_loc_c']['source'] = 'custom_fields';

// Field: number_of_home_health_fac_c
$dictionary['Account']['fields']['number_of_home_health_fac_c']['name'] = 'number_of_home_health_fac_c';
$dictionary['Account']['fields']['number_of_home_health_fac_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_home_health_fac_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_home_health_fac_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_home_health_fac_c']['required'] = false;
$dictionary['Account']['fields']['number_of_home_health_fac_c']['comments'] = 'Auto-created entry for field number_of_home_health_fac_c';
$dictionary['Account']['fields']['number_of_home_health_fac_c']['vname'] = 'Number Of Home Health Fac';
$dictionary['Account']['fields']['number_of_home_health_fac_c']['source'] = 'custom_fields';

// Field: lmsilt_active_c
$dictionary['Account']['fields']['lmsilt_active_c']['name'] = 'lmsilt_active_c';
$dictionary['Account']['fields']['lmsilt_active_c']['type'] = 'varchar';
$dictionary['Account']['fields']['lmsilt_active_c']['len'] = '255';
$dictionary['Account']['fields']['lmsilt_active_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_active_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_active_c']['comments'] = 'Auto-created entry for field lmsilt_active_c';
$dictionary['Account']['fields']['lmsilt_active_c']['vname'] = 'Lmsilt Active';
$dictionary['Account']['fields']['lmsilt_active_c']['source'] = 'custom_fields';

// Field: lmsilt_customerpriority_c
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['name'] = 'lmsilt_customerpriority_c';
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['type'] = 'varchar';
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['len'] = '255';
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['comments'] = 'Auto-created entry for field lmsilt_customerpriority_c';
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['vname'] = 'Lmsilt Customerpriority';
$dictionary['Account']['fields']['lmsilt_customerpriority_c']['source'] = 'custom_fields';

// Field: lmsilt_numberoflocations_c
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['name'] = 'lmsilt_numberoflocations_c';
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['type'] = 'float';
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['len'] = '19';
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['comments'] = 'Auto-created entry for field lmsilt_numberoflocations_c';
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['vname'] = 'Lmsilt Numberoflocations';
$dictionary['Account']['fields']['lmsilt_numberoflocations_c']['source'] = 'custom_fields';

// Field: lmsilt_slaexpirationdate_c
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['name'] = 'lmsilt_slaexpirationdate_c';
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['type'] = 'timestamp';
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['len'] = '';
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['comments'] = 'Auto-created entry for field lmsilt_slaexpirationdate_c';
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['vname'] = 'Lmsilt Slaexpirationdate';
$dictionary['Account']['fields']['lmsilt_slaexpirationdate_c']['source'] = 'custom_fields';

// Field: lmsilt_slaserialnumber_c
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['name'] = 'lmsilt_slaserialnumber_c';
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['type'] = 'varchar';
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['len'] = '10';
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['comments'] = 'Auto-created entry for field lmsilt_slaserialnumber_c';
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['vname'] = 'Lmsilt Slaserialnumber';
$dictionary['Account']['fields']['lmsilt_slaserialnumber_c']['source'] = 'custom_fields';

// Field: lmsilt_sla_c
$dictionary['Account']['fields']['lmsilt_sla_c']['name'] = 'lmsilt_sla_c';
$dictionary['Account']['fields']['lmsilt_sla_c']['type'] = 'varchar';
$dictionary['Account']['fields']['lmsilt_sla_c']['len'] = '255';
$dictionary['Account']['fields']['lmsilt_sla_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_sla_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_sla_c']['comments'] = 'Auto-created entry for field lmsilt_sla_c';
$dictionary['Account']['fields']['lmsilt_sla_c']['vname'] = 'Lmsilt Sla';
$dictionary['Account']['fields']['lmsilt_sla_c']['source'] = 'custom_fields';

// Field: lmsilt_upsellopportunity_c
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['name'] = 'lmsilt_upsellopportunity_c';
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['type'] = 'varchar';
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['len'] = '255';
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['size'] = '20';
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['required'] = false;
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['comments'] = 'Auto-created entry for field lmsilt_upsellopportunity_c';
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['vname'] = 'Lmsilt Upsellopportunity';
$dictionary['Account']['fields']['lmsilt_upsellopportunity_c']['source'] = 'custom_fields';

// Field: renewal_expiration_date_c
$dictionary['Account']['fields']['renewal_expiration_date_c']['name'] = 'renewal_expiration_date_c';
$dictionary['Account']['fields']['renewal_expiration_date_c']['type'] = 'date';
$dictionary['Account']['fields']['renewal_expiration_date_c']['len'] = '';
$dictionary['Account']['fields']['renewal_expiration_date_c']['size'] = '20';
$dictionary['Account']['fields']['renewal_expiration_date_c']['required'] = false;
$dictionary['Account']['fields']['renewal_expiration_date_c']['comments'] = 'Auto-created entry for field renewal_expiration_date_c';
$dictionary['Account']['fields']['renewal_expiration_date_c']['vname'] = 'Renewal Expiration Date';
$dictionary['Account']['fields']['renewal_expiration_date_c']['source'] = 'custom_fields';

// Field: identified_pricedown_target_c
$dictionary['Account']['fields']['identified_pricedown_target_c']['name'] = 'identified_pricedown_target_c';
$dictionary['Account']['fields']['identified_pricedown_target_c']['type'] = 'bool';
$dictionary['Account']['fields']['identified_pricedown_target_c']['size'] = '20';
$dictionary['Account']['fields']['identified_pricedown_target_c']['required'] = false;
$dictionary['Account']['fields']['identified_pricedown_target_c']['comments'] = 'Auto-created entry for field identified_pricedown_target_c';
$dictionary['Account']['fields']['identified_pricedown_target_c']['vname'] = 'Identified Pricedown Target';
$dictionary['Account']['fields']['identified_pricedown_target_c']['source'] = 'custom_fields';

// Field: evergreen_c
$dictionary['Account']['fields']['evergreen_c']['name'] = 'evergreen_c';
$dictionary['Account']['fields']['evergreen_c']['type'] = 'bool';
$dictionary['Account']['fields']['evergreen_c']['size'] = '20';
$dictionary['Account']['fields']['evergreen_c']['required'] = false;
$dictionary['Account']['fields']['evergreen_c']['comments'] = 'Auto-created entry for field evergreen_c';
$dictionary['Account']['fields']['evergreen_c']['vname'] = 'Evergreen';
$dictionary['Account']['fields']['evergreen_c']['source'] = 'custom_fields';

// Field: er_visits_c
$dictionary['Account']['fields']['er_visits_c']['name'] = 'er_visits_c';
$dictionary['Account']['fields']['er_visits_c']['type'] = 'float';
$dictionary['Account']['fields']['er_visits_c']['len'] = '19';
$dictionary['Account']['fields']['er_visits_c']['size'] = '20';
$dictionary['Account']['fields']['er_visits_c']['required'] = false;
$dictionary['Account']['fields']['er_visits_c']['comments'] = 'Auto-created entry for field er_visits_c';
$dictionary['Account']['fields']['er_visits_c']['vname'] = 'ER Visits';
$dictionary['Account']['fields']['er_visits_c']['source'] = 'custom_fields';

// Field: number_of_physicians_c
$dictionary['Account']['fields']['number_of_physicians_c']['name'] = 'number_of_physicians_c';
$dictionary['Account']['fields']['number_of_physicians_c']['type'] = 'float';
$dictionary['Account']['fields']['number_of_physicians_c']['len'] = '19';
$dictionary['Account']['fields']['number_of_physicians_c']['size'] = '20';
$dictionary['Account']['fields']['number_of_physicians_c']['required'] = false;
$dictionary['Account']['fields']['number_of_physicians_c']['comments'] = 'Auto-created entry for field number_of_physicians_c';
$dictionary['Account']['fields']['number_of_physicians_c']['vname'] = 'Number Of Physicians';
$dictionary['Account']['fields']['number_of_physicians_c']['source'] = 'custom_fields';

// Field: coding_fit_c
$dictionary['Account']['fields']['coding_fit_c']['name'] = 'coding_fit_c';
$dictionary['Account']['fields']['coding_fit_c']['type'] = 'varchar';
$dictionary['Account']['fields']['coding_fit_c']['len'] = '255';
$dictionary['Account']['fields']['coding_fit_c']['size'] = '20';
$dictionary['Account']['fields']['coding_fit_c']['required'] = false;
$dictionary['Account']['fields']['coding_fit_c']['comments'] = 'Auto-created entry for field coding_fit_c';
$dictionary['Account']['fields']['coding_fit_c']['vname'] = 'Coding Fit';
$dictionary['Account']['fields']['coding_fit_c']['source'] = 'custom_fields';

// Field: ownership (manually added 2017-09-12)
$dictionary['Account']['fields']['ownership']['name'] = 'ownership';
$dictionary['Account']['fields']['ownership']['vname'] = 'LBL_OWNERSHIP';
$dictionary['Account']['fields']['ownership']['type'] = 'enum';
$dictionary['Account']['fields']['ownership']['len'] = '40';
$dictionary['Account']['fields']['ownership']['options'] = 'emr_1_modules_list';

// Field: births_c (manually added 2017-11-01)
$dictionary['Account']['fields']['births_c']['name'] = 'births_c';
$dictionary['Account']['fields']['births_c']['type'] = 'float';
$dictionary['Account']['fields']['births_c']['len'] = '18';
$dictionary['Account']['fields']['births_c']['size'] = '20';
$dictionary['Account']['fields']['births_c']['required'] = false;
$dictionary['Account']['fields']['births_c']['comments'] = 'Field births_c';
$dictionary['Account']['fields']['births_c']['vname'] = 'Births';
$dictionary['Account']['fields']['births_c']['source'] = 'custom_fields';

// Field: emram_stage_validated_c (manually added 2017-11-01)
$dictionary['Account']['fields']['emram_stage_validated_c']['name'] = 'emram_stage_validated_c';
$dictionary['Account']['fields']['emram_stage_validated_c']['type'] = 'float';
$dictionary['Account']['fields']['emram_stage_validated_c']['len'] = '18';
$dictionary['Account']['fields']['emram_stage_validated_c']['size'] = '5';
$dictionary['Account']['fields']['emram_stage_validated_c']['required'] = false;
$dictionary['Account']['fields']['emram_stage_validated_c']['comments'] = 'Field emram_stage_validated_c';
$dictionary['Account']['fields']['emram_stage_validated_c']['vname'] = 'EMRAM Stage (Validated)';
$dictionary['Account']['fields']['emram_stage_validated_c']['source'] = 'custom_fields';

// Field: fiscal_end_date_month_c (manually added 2017-11-01)
$dictionary['Account']['fields']['fiscal_end_date_month_c']['name'] = 'fiscal_end_date_month_c';
$dictionary['Account']['fields']['fiscal_end_date_month_c']['type'] = 'varchar';
$dictionary['Account']['fields']['fiscal_end_date_month_c']['len'] = '20';
$dictionary['Account']['fields']['fiscal_end_date_month_c']['size'] = '20';
$dictionary['Account']['fields']['fiscal_end_date_month_c']['required'] = false;
$dictionary['Account']['fields']['fiscal_end_date_month_c']['comments'] = 'Field fiscal_end_date_month_c';
$dictionary['Account']['fields']['fiscal_end_date_month_c']['vname'] = 'Fiscal End Date Month';
$dictionary['Account']['fields']['fiscal_end_date_month_c']['source'] = 'custom_fields';

// Field: of_hospitals_in_health_system_c (manually added 2017-11-01)
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['name'] = 'of_hospitals_in_health_system_c';
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['type'] = 'float';
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['len'] = '18';
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['size'] = '7';
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['required'] = false;
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['comments'] = 'Field of_hospitals_in_health_system_c';
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['vname'] = '# of Hospitals in Health System';
$dictionary['Account']['fields']['of_hospitals_in_health_system_c']['source'] = 'custom_fields';

// Field: organization_primary_service_c (manually added 2017-11-01)
$dictionary['Account']['fields']['organization_primary_service_c']['name'] = 'organization_primary_service_c';
$dictionary['Account']['fields']['organization_primary_service_c']['type'] = 'varchar';
$dictionary['Account']['fields']['organization_primary_service_c']['len'] = '100';
$dictionary['Account']['fields']['organization_primary_service_c']['size'] = '20';
$dictionary['Account']['fields']['organization_primary_service_c']['required'] = false;
$dictionary['Account']['fields']['organization_primary_service_c']['comments'] = 'Field organization_primary_service_c';
$dictionary['Account']['fields']['organization_primary_service_c']['vname'] = 'Organization Primary Service';
$dictionary['Account']['fields']['organization_primary_service_c']['source'] = 'custom_fields';

// Field: operating_rooms_c (manually added 2017-11-01)
$dictionary['Account']['fields']['operating_rooms_c']['name'] = 'operating_rooms_c';
$dictionary['Account']['fields']['operating_rooms_c']['type'] = 'float';
$dictionary['Account']['fields']['operating_rooms_c']['len'] = '18';
$dictionary['Account']['fields']['operating_rooms_c']['size'] = '20';
$dictionary['Account']['fields']['operating_rooms_c']['required'] = false;
$dictionary['Account']['fields']['operating_rooms_c']['comments'] = 'Field operating_rooms_c';
$dictionary['Account']['fields']['operating_rooms_c']['vname'] = 'Operating Rooms';
$dictionary['Account']['fields']['operating_rooms_c']['source'] = 'custom_fields';

// Field: cardiology_studies_c (manually added 2017-11-01)
$dictionary['Account']['fields']['cardiology_studies_c']['name'] = 'cardiology_studies_c';
$dictionary['Account']['fields']['cardiology_studies_c']['type'] = 'float';
$dictionary['Account']['fields']['cardiology_studies_c']['len'] = '18';
$dictionary['Account']['fields']['cardiology_studies_c']['size'] = '20';
$dictionary['Account']['fields']['cardiology_studies_c']['required'] = false;
$dictionary['Account']['fields']['cardiology_studies_c']['comments'] = 'Field cardiology_studies_c';
$dictionary['Account']['fields']['cardiology_studies_c']['vname'] = 'Cardiology Studies';
$dictionary['Account']['fields']['cardiology_studies_c']['source'] = 'custom_fields';

// Field: radiology_studies_c (manually added 2017-11-01)
$dictionary['Account']['fields']['radiology_studies_c']['name'] = 'radiology_studies_c';
$dictionary['Account']['fields']['radiology_studies_c']['type'] = 'float';
$dictionary['Account']['fields']['radiology_studies_c']['len'] = '18';
$dictionary['Account']['fields']['radiology_studies_c']['size'] = '20';
$dictionary['Account']['fields']['radiology_studies_c']['required'] = false;
$dictionary['Account']['fields']['radiology_studies_c']['comments'] = 'Field radiology_studies_c';
$dictionary['Account']['fields']['radiology_studies_c']['vname'] = 'Radiology Studies';
$dictionary['Account']['fields']['radiology_studies_c']['source'] = 'custom_fields';

// Field: total_employees_c (manually added 2017-11-01)
$dictionary['Account']['fields']['total_employees_c']['name'] = 'total_employees_c';
$dictionary['Account']['fields']['total_employees_c']['type'] = 'float';
$dictionary['Account']['fields']['total_employees_c']['len'] = '18';
$dictionary['Account']['fields']['total_employees_c']['size'] = '20';
$dictionary['Account']['fields']['total_employees_c']['required'] = false;
$dictionary['Account']['fields']['total_employees_c']['comments'] = 'Field total_employees_c';
$dictionary['Account']['fields']['total_employees_c']['vname'] = 'Total Employees';
$dictionary['Account']['fields']['total_employees_c']['source'] = 'custom_fields';

// Field: net_patient_revenues_c (manually added 2017-11-01)
$dictionary['Account']['fields']['net_patient_revenues_c']['name'] = 'net_patient_revenues_c';
$dictionary['Account']['fields']['net_patient_revenues_c']['type'] = 'float';
$dictionary['Account']['fields']['net_patient_revenues_c']['len'] = '18';
$dictionary['Account']['fields']['net_patient_revenues_c']['size'] = '20';
$dictionary['Account']['fields']['net_patient_revenues_c']['required'] = false;
$dictionary['Account']['fields']['net_patient_revenues_c']['comments'] = 'Field net_patient_revenues_c';
$dictionary['Account']['fields']['net_patient_revenues_c']['vname'] = 'Net Patient Revenues';
$dictionary['Account']['fields']['net_patient_revenues_c']['source'] = 'custom_fields';

// Field: total_inpatient_revenues_c (manually added 2017-11-01)
$dictionary['Account']['fields']['total_inpatient_revenues_c']['name'] = 'total_inpatient_revenues_c';
$dictionary['Account']['fields']['total_inpatient_revenues_c']['type'] = 'float';
$dictionary['Account']['fields']['total_inpatient_revenues_c']['len'] = '18';
$dictionary['Account']['fields']['total_inpatient_revenues_c']['size'] = '20';
$dictionary['Account']['fields']['total_inpatient_revenues_c']['required'] = false;
$dictionary['Account']['fields']['total_inpatient_revenues_c']['comments'] = 'Field total_inpatient_revenues_c';
$dictionary['Account']['fields']['total_inpatient_revenues_c']['vname'] = 'Total Inpatient Revenues';
$dictionary['Account']['fields']['total_inpatient_revenues_c']['source'] = 'custom_fields';

?>
