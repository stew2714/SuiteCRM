<?php

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

//need this empty class to trick SugarFieldHandler->displaySmarty into running the function
class SugarFieldCustomreadonly extends SugarFieldBase {

    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        return $this->getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }

}

