<?php
require_once('include/entryPoint.php');
require_once('modules/AOS_Contracts/AOS_Contracts.php');

global $db;

$sql = "SELECT a.id, a_c.apttus_agreement_number_c, a_c.amendment_number_c FROM aos_contracts a LEFT JOIN aos_contracts_cstm a_c ON (a_c.id_c = a.id) WHERE a_c.apttus_agreement_number_c != '' AND a_c.agreements_number_and_amendment_c = '' AND a.deleted = '0' ORDER BY a_c.apttus_agreement_number_c ASC";
$results = $db->query($sql);
echo "<pre>".print_r($results, true)."</pre><br>";
$GLOBALS['log']->fatal(print_r($results, true));
//    $sugar_config['jobs']['timeout'] = 172800;
$i = 0;
foreach($results as $row){
    //        if($i == 50) return true;
    $newNumber = str_pad($row['apttus_agreement_number_c'], 8, '0', STR_PAD_LEFT);
    if(!empty($row['amendment_number_c'])) {
        $amendment = $row['amendment_number_c'];
    } else {
        $amendment = "0";
    }
    $agreements_number_and_amendment = $newNumber . "." . str_pad($amendment, 2, '0', STR_PAD_LEFT);
    echo "<pre>Number ".$i. ": ".print_r($row, true)."</pre><br>";
    $GLOBALS['log']->fatal("Number ".$i. ": ".print_r($row, true));
    $updateSQL = "UPDATE aos_contracts_cstm SET agreements_number_c = '".$newNumber."', agreements_number_c = '".$amendment."', agreements_number_and_amendment_c = '".$agreements_number_and_amendment."' 
            WHERE id_c = '".$row['id']."' ";
    $db->query($updateSQL);
    $i++;
}