<?php
require("login.php");

$ModuleNameTable = 'contacts';// The get_module_fields returns 'table_name'

$query = "contacts.id in (SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 and ea.email_address = 'sean_h_flynn@live.co.uk')";

$ModuleName = 'Contacts'; // ModuleName that you already have

$get_entry_list_parameters = array(
    'session'		=> $session,
    'module_name'	=> $ModuleName, // ModuleName
    'query'		    => $query,
    'order_by'		=> '',
    'offset'		=> '0',
    'select_fields'	=>  array('id'),
    'max_results'	=> '6',
    'deleted'		=> false,
    'favourites'    => false,
);

$json = json_encode($get_entry_list_parameters);
$postArgs = array(
    'method' => 'get_entry_list',
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
