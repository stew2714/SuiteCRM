<?php

$outfitters_config = array(
    'name' => 'SecurityGroups', //The matches the id value in your manifest file. This allow the library to lookup addon version from upgrade_history, so you can see what version of addon your customers are using
    'shortname' => 'securitysuite', //The short name of the Add-on. e.g. For the url https://www.sugaroutfitters.com/addons/sugaroutfitters the shortname would be sugaroutfitters
    // includes all public keys
    'public_key' => '8865f4bed3a24ab802b2b4942f57c9cf,ed757ceaef6ab1ada555d0da1c8cb74e,a547d21116e8d3d0cbfeba47eed2a095,11b547d323d6b68da1b2c9edb095da13,1ea78ba331e17ada24fd24ece0e52b33,3e8b714324456444e797a9264d6dbfa3',
    'plans' => array(
        '8865f4bed3a24ab802b2b4942f57c9cf' => 'enhanced',
        'ed757ceaef6ab1ada555d0da1c8cb74e' => 'enhanced',
        'a547d21116e8d3d0cbfeba47eed2a095' => 'professional',
        '11b547d323d6b68da1b2c9edb095da13' => 'professional',
        '1ea78ba331e17ada24fd24ece0e52b33' => 'enterprise',
        '3e8b714324456444e797a9264d6dbfa3' => 'enterprise',
    ),
    'api_url' => 'https://store.suitecrm.com/api/v2',
    'store_url' => 'https://store.suitecrm.com',
    'store_label' => 'The SuiteCRM Store',
    'validate_users' => false,
    'validation_frequency' => 'daily', //default: weekly options: hourly, daily, weekly
    'continue_url' => 'index.php?module=SecurityGroups&action=info', //[optional] Will show a button after license validation that will redirect to this page. Could be used to redirect to a configuration page such as index.php?module=MyCustomModule&action=config
);

