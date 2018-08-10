<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 02/10/15
 * Time: 09:38
 */

require_once("login.php");

$parameters = array(
    //session id
    'session' => $session,

    //The name of the module.
    'module_name' => 'Contacts',

    //The ID of the specified module bean.
    'module_id' => 'd68ba5e0-8357-d697-eb59-5b042596028d', // Custom Record

    //The relationship name of the linked field from which to relate records.
    'link_field_name' => 'meetings',

    //The list of record ids to relate
    'related_ids' => array(
        '5b59a3f4-2717-5140-b5e8-f3e9a15ccb6c', // new Meeting id
    ),
	'name_value_list' => array(
    ),
    //Whether or not to delete the relationship. 0:create, 1:delete
    'delete'=> 0,
);

$json = json_encode($parameters);
print_r($json);
$postArgs = array(
    'method' => 'set_relationship',
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
