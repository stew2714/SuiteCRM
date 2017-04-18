<?php


require_once('modules/AOR_Reports/views/view.edit.php');

class customAOR_ReportsViewEdit extends AOR_ReportsViewEdit
{

    public function __construct()
    {
        parent::__construct();
    }

    function display()
    {
        parent::display();
        if(!empty($this->bean->id) ){
            $reportHTML = '<div id="preview">' . $this->bean->buildMultiGroupReport('0', true) . '</div>';
        }else{
            $reportHTML = '<div id="preview"></div>';
        }
        echo $reportHTML;
    }

}