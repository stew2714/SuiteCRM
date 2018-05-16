<?php

function getAmendments()
{
    global $db;
    $agreementId = $db->quote($_REQUEST['record']);

    return <<<EOF
        SELECT aos_contracts.*, aos_contracts_cstm.* 
        FROM aos_contracts
        LEFT JOIN aos_contracts_cstm ON (aos_contracts.id = aos_contracts_cstm.id_c)
        WHERE aos_contracts.deleted = 0 AND aos_contracts_cstm.Oneapttus_parent_agreement_c = '$agreementId'

EOF;
}