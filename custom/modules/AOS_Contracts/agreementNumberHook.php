<?php
 class agreementNumberHook {

     public function generateNumber($bean, $event, $arg) {
         if(empty($bean->agreements_number_with_amendment_c) && empty($bean->id)) {
             $sql = "SELECT aos_contracts_cstm.agreements_number_with_amendment_c, aos_contracts_cstm.agreements_number_c, aos_contracts_cstm.amendment_c 
                     FROM aos_contracts_cstm WHERE aos_contracts_cstm.agreements_number_with_amendment_c != NULL ORDER BY aos_contracts_cstm.agreements_number_with_amendment_c DESC";
             $result = $bean->db->query($sql);
             $numberRow = mysqli_fetch_row($result);
             if(empty($numberRow['agreements_number_with_amendment_c'])) {
                 $bean->agreements_number_c = "500000";
                 $bean->amendment_c = "1";
                 $bean->agreements_number_with_amendment_c = "00500000.01";
             } else {
                 $newNumber = $numberRow['agreements_number_c'] + 1;
                 $bean->agreements_number_c = $newNumber;
                 $newNumber = str_pad($newNumber, 8, '0', STR_PAD_LEFT);
                 $bean->amendment_c = "1";
                 $bean->agreements_number_with_amendment_c = $newNumber . ".01";
             }
         }
     }
 }