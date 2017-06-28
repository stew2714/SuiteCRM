<?php
// Eloqua Record ID
$dictionary['Account']['fields']['eloqua_id_c'] = array(
    'name' => 'eloqua_id_c',
    'vname' => 'LBL_ELOQUA_ID',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Account']['fields']['rating_c'] = array (
    'name' => 'rating_c',
    'vname' => 'LBL_ELOQUA_ACCOUNT_RATING',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Account']['fields']['owner_sales_person'] = array(
    'name' => 'owner_sales_person',
    'vname' => 'LBL_OWNER_SALES_PERSON',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Account']['fields']['ownership'] = array(
    'name' => 'ownership',
    'vname' => 'LBL_OWNERSHIP',
    'type' => 'varchar',
    'len'  => '40',
);

$dictionary['Account']['fields']['billing_address_country']['type']='enum';
$dictionary['Account']['fields']['billing_address_country']['options']='eloqua_country_list';
$dictionary['Account']['fields']['shipping_address_country']['type']='enum';
$dictionary['Account']['fields']['shipping_address_country']['options']='eloqua_country_list';
$dictionary['Account']['fields']['industry']['type']='enum';
$dictionary['Account']['fields']['industry']['options']='eloqua_industry_options';