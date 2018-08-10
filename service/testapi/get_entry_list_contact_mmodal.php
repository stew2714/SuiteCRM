<?php
require("login.php");

$ModuleNameTable = '';// The get_module_fields returns 'table_name'
$testEmail = "OTPluginTester@hotmail.com";
//$testEmail = "simon@journeyman.cc";
$query = "(contacts.first_name LIKE '%".$testEmail."%' OR contacts.last_name LIKE '%".$testEmail."%') OR (contacts.id in (select eabr.bean_id from email_addr_bean_rel eabr INNER JOIN email_addresses ea on eabr.email_address_id = ea.id where eabr.bean_module = 'Contacts' and ea.email_address LIKE '%".$testEmail."%'))";
//$query = "(contacts.first_name LIKE '%s%' OR contacts.last_name LIKE '%s%') OR (contacts.id in (select eabr.bean_id from email_addr_bean_rel eabr INNER JOIN email_addresses ea on eabr.email_address_id = ea.id where eabr.bean_module = 'Contacts' and ea.email_address LIKE '%s%'))";


$ModuleName = 'Contacts'; // ModuleName that you already have

$get_entry_list_parameters = array(
    'session'		=> $session,
    'module_name'	=> 'Contacts', // ModuleName
    'query'		    => $query,
    'order_by'		=> 'date_entered DESC',
    'offset'		=> '0',
 'select_fields' => array(
          'id',
          'first_name',
		'last_name',
	'account_name'
     ),
	'link_name_to_fields_array' => 	
	array(
		array(
		'name' => 'accounts_contacts_1',
		'value' => array(
			'id', 'name'
			),
		),

	),
    'max_results'	=> 1000,
    'deleted'		=> 0,
	'favorites' => 0
);

/*
{"session":"2bd43aa7971d20a765f6fdcd0d38d9e8","module_name":"Meetings","query":"id+=+eb8b1850-f2c3-9543-b8e9-ce965ecb18a9","order_by":"date_entered+DESC","offset":0,"link_names_to_fields_array":[{"name":"users","value":["id","email1","phone_work"]},{"name":"contacts","value":["id","account_id","email1","phone_work"]},{"name":"leads","value":["id","email1","phone_work"]}],"max_results":"1000","deleted":false,"favorites":false}
*/


$json = json_encode($get_entry_list_parameters);
print($json);
$postArgs = array(
    'method' => 'get_entry_list',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);

//print_r($postArgs);
//exit(0);

curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);

// Make the REST call, returning the result
$response = curl_exec($curl);

// Convert the result from JSON format to a PHP array
$result = json_decode($response,true);

// Get the newly created record id
$recordId = $result['id'];


//   print_r($result, 1);

echo ($debug) ?  print_r($result) . "\n\n" : "";

