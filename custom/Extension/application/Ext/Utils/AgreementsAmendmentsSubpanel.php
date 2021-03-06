<?php

function getAmendments()
{
    global $db;
    $agreement = BeanFactory::getBean('AOS_Contracts', $_REQUEST['record']);
    $agreementId = $_REQUEST['record'];
    $agreementNumber = $agreement->agreements_number_c;

    return <<<EOF
        SELECT aos_contracts.*, aos_contracts_cstm.* 
        FROM aos_contracts
        LEFT JOIN aos_contracts_cstm ON (aos_contracts.id = aos_contracts_cstm.id_c)
        WHERE aos_contracts.deleted = 0 AND aos_contracts_cstm.agreements_number_c = '$agreementNumber' AND aos_contracts.id != '$agreementId'

EOF;
}


function getAgreementsAccounts()
{
    // Agreements subpanel in Accounts - Return the original Agreement and the latest amendment only.
    global $db;
    $accountId = $db->quote($_REQUEST['record']);

    return <<<EOF
        SELECT aos_contracts.*, aos_contracts_cstm.* 
        FROM aos_contracts
        LEFT JOIN aos_contracts_cstm ON (aos_contracts.id = aos_contracts_cstm.id_c)
        WHERE aos_contracts.deleted = 0 AND aos_contracts.contract_account_id = '$accountId' AND (aos_contracts_cstm.amendment_c = '0' OR aos_contracts_cstm.is_latest_c = TRUE)

EOF;
}