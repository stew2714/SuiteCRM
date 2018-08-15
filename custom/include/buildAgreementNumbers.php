<?php
require_once('include/entryPoint.php');

global $db;

$sql = "SELECT a.id, a_c.apttus_ff_agreement_number_c FROM aos_contracts a LEFT JOIN aos_contracts_cstm a_c ON (a_c.id_c = a.id) WHERE (a_c.apttus_ff_agreement_number_c != '' AND a_c.apttus_ff_agreement_number_c IS NOT NULL) AND (a_c.agreements_number_and_amendment_c = '' OR a_c.agreements_number_and_amendment_c IS NULL) AND a.deleted = '0' ORDER BY a_c.apttus_ff_agreement_number_c ASC";
$results = $db->query($sql);
echo "<pre>".print_r($results, true)."</pre><br>";
$GLOBALS['log']->fatal(print_r($results, true));
$i = 0;
foreach($results as $row){
    if($i == 50) die();
    $oldNumber = $row['apttus_ff_agreement_number_c'];
    $splitOldNumber = explode('.', $oldNumber);
    $newNumber = $row['apttus_ff_agreement_number_c'][0];
    $amendment = $splitOldNumber[1];
    $agreements_number_and_amendment = $newNumber . "." . str_pad($amendment, 2, '0', STR_PAD_LEFT);
    echo "<pre>Number ".$i. ": ".print_r($row, true)."</pre><br>";
    $GLOBALS['log']->fatal("Number ".$i. ": ".print_r($row, true));
    $updateSQL = "UPDATE aos_contracts_cstm SET agreements_number_c = '".$newNumber."', amendment_c = '".$amendment."', agreements_number_and_amendment_c = '".$agreements_number_and_amendment."' 
            WHERE id_c = '".$row['id']."' ";
    $db->query($updateSQL);
    $i++;
}