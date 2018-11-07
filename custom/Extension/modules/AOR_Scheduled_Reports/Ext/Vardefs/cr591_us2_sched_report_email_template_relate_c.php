<?php
$dictionary['AOR_Scheduled_Reports']['custom_fields'] = true;

$dictionary['AOR_Scheduled_Reports']['fields']['report_email_template_id_c'] = array(
    'name' => 'report_email_template_id_c',
    'len' => '36',
    'type' => 'id',
    'id' => 'EmailTemplatesreport_email_template_c',
    'module' => 'EmailTemplates',
    'vname' => 'LBL_REPORT_EMAIL_TEMPLATE_ID_C',
    'source' => 'custom_fields',
);

$dictionary['AOR_Scheduled_Reports']['fields']['report_email_template_c'] = array(
    'name' => 'report_email_template_c',
    'len' => '255',
    'type' => 'relate',
    'id' => 'EmailTemplatesreport_email_template_c',
    'module' => 'EmailTemplates',
    'studio' => 'visible',
    'id_name' => 'report_email_template_id_c',
    'vname' => 'LBL_REPORT_EMAIL_TEMPLATE_C',
    'source' => 'non-db',
    'required' => true,
);