<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 02/10/15
 * Time: 08:48
 */
header("Content-Type:text/plain");
//$everything = true;
if( !isset($_REQUEST['debug']) ){
    $debug = true;
}
$debug = true;

/**/

// specify the REST web service to interact with
//$baseUrl = 'http://172.19.0.8/html/SuiteCRM-7.8.18/'; /////
//$baseUrl = 'https://outlookcrm.staging.suitecrm.com/';
//$baseUrl = 'https://crmqa.mmodal.com/SuiteCRM/';
$baseUrl = 'http://'.$_SERVER['SERVER_ADDR'].'/mmodal/';
$url = $baseUrl.'service/v4_1/rest.php';
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_COOKIE, 'XDEBUG_SESSION=1'); //xdebug breaker.
//login -----------------------------------------------------

$password =  md5('welcome'); // Admin user
//$password =  md5('Welcome1'); // Regular user

$parameters = array(
    //user authentication
    "user_auth" => array(
        "user_name" => 'ian.davie',
//	"user_name" => 'allis',
        "password" => $password,

    ),

    //application name
    "application_name" => "My Application",

    //name value list for 'language' and 'notifyonsave'
    "name_value_list" => array(
        array(
            'name' => 'language',
            'value' => 'en_us',
        ),

        array(
            'name' => 'notifyonsave',
            'value' => true
        ),
    ),
);



$json = json_encode($parameters);
$postArgs = array(
    'method' => 'login',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);
$response = curl_exec($curl);
$result = json_decode($response);
if ( !is_object($result) ) {
    die("Error handling result.\n");
}
if ( !isset($result->id) ) {
    die("Error: {$result->name} - {$result->description}\n.");
}

$session = $result->id;


echo ($debug) ?  "Session ID : " . $session . "\n\n" : "";
//echo ($everything) ?  "Everything : " . print_r($result) . "\n\n" : "";


