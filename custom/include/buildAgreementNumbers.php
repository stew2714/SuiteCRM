<?php
require_once('include/entryPoint.php');
require_once('modules/AOS_Contracts/AOS_Contracts.php');

global $db;

$sql = "SELECT a.id FROM aos_contracts a LEFT JOIN aos_contracts_cstm a_c ON (a_c.id_c = a.id) WHERE a_c.apttus_agreement_number_c != '' AND a_c.agreements_number_and_amendment_c = '' AND a.deleted = '0' ORDER BY a_c.apttus_agreement_number_c ASC";
$results = $db->query($sql);
echo print_r($results, true)."<br>";
$GLOBALS['log']->fatal(print_r($results, true));
$i = 0;
foreach($results as $row){
    if($i == 100) die();
    $agreement = new AOS_Contracts();
    $agreement->retrieve($row['id']);
    $agreement->agreements_number_c = $agreement->apttus_agreement_number_c;
    $newNumber = str_pad($agreement->agreements_number_c, 8, '0', STR_PAD_LEFT);
    $agreement->amendment_c = "0";
    $agreement->agreements_number_and_amendment_c = $newNumber . ".00";
    echo "Number ".$i. ": ".print_r($agreement, true)."<br>";
    $GLOBALS['log']->fatal("Number ".$i. ": ".print_r($agreement, true));
    $agreement->save();
    $i++;
}