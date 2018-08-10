<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 02/10/15
 * Time: 08:41
 */


require_once('login.php');
//this method does not have any parameters
$parameters = array(
    //Session id
    "session" => $session,

    //The name of the module from which to retrieve fields
    'module_name' => "Accounts",

    //List of specific fields
   // 'fields' => array('name'),
    'fields' => array(),
);

$json = json_encode($parameters);
$postArgs = array(
    'method' => 'get_module_fields',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);

curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);

// Make the REST call, returning the result
$response = curl_exec($curl);

// Convert the result from JSON format to a PHP array
$result = json_decode($response,true);



echo ($debug) ?  print_r($result) . "\n\n" : "";

