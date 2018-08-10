<?php
require("login.php");

$ModuleNameTable = '';// The get_module_fields returns 'table_name'

$query = "";

$ModuleName = 'Contacts'; // ModuleName that you already have

$ModuleID = "28800699-ec98-f063-2af9-5ae3699314f3";

$get_entry_list_parameters = array(
    'session'		=> $session,
    'module_name'	=> $ModuleName, // ModuleName
    'module_id'	    => $ModuleID,
    'link_field_name'	    => "accounts",
    'related_module_query'		    => $query,
    'related_fields'	=>  array('name'),
    'related_module_link_name_to_fields_array'	=> array(array('name' =>  'name', 'value' => array('id', 'name'))),
    'deleted'		=> false,
);

$json = json_encode($get_entry_list_parameters);
$postArgs = array(
    'method' => 'get_relationships',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);

curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);

// Make the REST call, returning the result
$response = curl_exec($curl);

// Convert the result from JSON format to a PHP array
$result = json_decode($response,true);

// Get the newly created record id
$recordId = $result['id'];


print_r($result);
//   print_r($result, 1);

echo ($debug) ?  print_r($result) . "\n\n" : "";
