<?php

require_once("login.php");


$parameters = array(
    //session id
    "session" => $session,
    "module_name" => "Emails",
    "name_value_list" => array(
            array(
                'name' => 'name',
                'value' => "Tomorrow and tomorrow and tomorrow - Ashley", //Only if you want to update a customer/use
            ),
        array(
            'name' => 'date_sent',
            'value' => "2017-02-16 16:29:38", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'message_id',
            'value' => "000000001EAA81342FD31B429A0D2703D69EA1510700B8A6ED90234EAC4C93D98A65F3D2021600000000010C0000B8A6ED90234EAC4C93D98A65F3D2021600012AFC369F0000", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'status',
            'value' => "archived", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'description',
            'value' => "blah blah blah", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'from_addr',
            'value' => "sean_h_flynn@live.co.uk", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'to_addrs',
            'value' => "Simon Such and Such", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'cc_addrs',
            'value' => "Administrator", //Only if you want to update a customer/use
        ),
        array(
            'name' => 'assigned_user_id',
            'value' => "1", //Only if you want to update a customer/use
        ),

    ),
);

$json = json_encode($parameters);

$postArgs = array(
    'method' => 'set_entry',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);

curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);
$response = curl_exec($curl);
$result = json_decode($response,true);
$recordId = $result['id'];


print_r($result);


$parameters = array(
    //session id
    'session' => $session,

    //The name of the module.
    'module_name' => 'Contacts',

    //The ID of the specified module bean.
    'module_id' => 'd68ba5e0-8357-d697-eb59-5b042596028d', // Custom Record

    //The relationship name of the linked field from which to relate records.
    'link_field_name' => 'emails',

    //The list of record ids to relate
    'related_ids' => array(
        $recordId, // new email id
    ),
'name_value_list' => array(),
    //Whether or not to delete the relationship. 0:create, 1:delete
    'delete'=> 0,
);

$json = json_encode($parameters);
$postArgs = array(
    'method' => 'set_relationship',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);

print($json);

curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);

// Make the REST call, returning the result
$response = curl_exec($curl);

// Convert the result from JSON format to a PHP array
$result = json_decode($response,true);
print_r($result);



