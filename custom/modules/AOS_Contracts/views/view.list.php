<?php

require_once('include/MVC/View/views/view.list.php');
require_once('modules/Accounts/AccountsListViewSmarty.php');

class AOS_ContractsViewList extends ViewList
{
    public function preDisplay()
    {
        parent::preDisplay();
    }

    function Display(){
        global $sugar_config;
        $sugar_config['enable_line_editing_list'] = false;
        parent::Display();
    }
}
