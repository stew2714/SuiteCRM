<?php
// Eloqua Record ID
$dictionary['Account']['fields']['eloqua_id'] = array(
    'name' => 'eloqua_id',
    'vname' => 'LBL_ELOQUA_ID',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
);

$dictionary['Account']['fields']['rating'] = array (
    'name' => 'rating',
    'vname' => 'LBL_ELOQUA_ACCOUNT_RATING',
    'type' => 'varchar',
    'len' => '255',
);

$dictionary['Account']['fields']['billing_address_country']['type']='enum';
$dictionary['Account']['fields']['billing_address_country']['options']='eloqua_country_list';
$dictionary['Account']['fields']['shipping_address_country']['type']='enum';
$dictionary['Account']['fields']['shipping_address_country']['options']='eloqua_country_list';
$dictionary['Account']['fields']['industry']['type']='enum';
$dictionary['Account']['fields']['industry']['options']='eloqua_industry_options';