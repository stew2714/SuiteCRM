<?php


require_once('modules/AOR_Reports/views/view.edit.php');
require_once('custom/modules/AOR_Reports/AdvancedReporter.php');

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
            $preview = new AdvancedReporter($this->bean);
            $reportHTML = '<div id="preview">' . $preview->buildMultiGroupReport('-2', true) . '</div>';
        }else{
            $reportHTML = '<div id="preview"></div>';
        }
        echo $reportHTML;
    }

}