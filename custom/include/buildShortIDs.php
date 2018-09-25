<?php
require_once('include/entryPoint.php');

global $db;

$sql = "SELECT o.id, o_c.short_id_c FROM opportunities o LEFT JOIN opportunities_cstm o_c ON (o_c.id_c = o.id) WHERE (o_c.short_id_c != '' AND o_c.short_id_c IS NOT NULL) AND (o_c.new_short_id_c = '' OR o_c.new_short_id_c IS NULL) AND o.deleted = '0' ORDER BY o_c.short_id_c ASC";
$results = $db->query($sql);
echo "<pre>".print_r($results, true)."</pre><br>";
$i = 0;
foreach($results as $row){
//    if($i == 50) die();
    $shortID_start = substr($row['short_id_c'], 0, 1);
    $shortID_end = substr($row['short_id_c'], 1);
    $newShortID = $shortID_start.str_pad($shortID_end, 7, 0, STR_PAD_LEFT);
    echo "<pre>Number ".$i. ": ".print_r($row, true)."New Number ".$i. ": ".$newShortID."</pre><br>";
    $updateSQL = "UPDATE opportunities_cstm SET new_short_id_c = '".$newShortID."' WHERE id_c = '".$row['id']."' ";
    $db->query($updateSQL);
    $i++;
}