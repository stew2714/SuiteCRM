<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class AOS_ContractsViewEdit extends ViewEdit {
    function __construct(){
        parent::__construct();
    }

    function display(){
        echo '<script src="custom/modules/AOS_Contracts/js/EditView.js" />';
        parent::display();
    }
}
?>
