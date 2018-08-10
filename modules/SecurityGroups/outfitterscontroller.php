<?php

    
if(empty($_REQUEST['method'])) {
    header('HTTP/1.1 400 Bad Request');
    $response = "method is required.";
    $json = getJSONobj();
    echo $json->encode($response);
}


//load license validation config
require_once('modules/'.$currentModule.'/license/SecuritySuiteOutfittersLicense.php');

if($_REQUEST['method'] == 'validate') {
    SecuritySuiteOutfittersLicense::validate();
} else if($_REQUEST['method'] == 'change') {
    SecuritySuiteOutfittersLicense::change();
}
