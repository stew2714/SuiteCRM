<?php

require_once('custom/include/CreateView/CreateView.php');
class ViewCreate extends SugarView{
    var $cv;
    var $type ='create';
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function
    var $showTitle = true;

    function ViewCreate(){
        parent::SugarView();
    }

    /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay()
    {
        /* BEGIN - SECURITY GROUPS */
        $metadataFile = null;
        $foundViewDefs = false;
        if(empty($_SESSION['groupLayout'])) {
            //get primary group id of current user and check to see if a layout exists for that group
            require_once('modules/SecurityGroups/SecurityGroup.php');
            $primary_group_id = SecurityGroup::getPrimaryGroupID();
            if(!empty($primary_group_id) && file_exists('custom/modules/' . $this->module . '/metadata/'.$primary_group_id.'/createviewdefs.php')){
                $_SESSION['groupLayout'] = $primary_group_id;
                $metadataFile = 'custom/modules/' . $this->module . '/metadata/'.$primary_group_id.'/createviewdefs.php';
            }
        } else {
            if(file_exists('custom/modules/' . $this->module . '/metadata/'.$_SESSION['groupLayout'].'/createviewdefs.php')){
                $metadataFile = 'custom/modules/' . $this->module . '/metadata/'.$_SESSION['groupLayout'].'/createviewdefs.php';
            }
        }

        if(isset($metadataFile)){
            $foundViewDefs = true;
        }
        else {
            $foundViewDefs = true;
            //inbound as default. !
            $metadataFile = 'custom/modules/' . $this->module . '/metadata/createviewdefs.php';
        }
        /* END - SECURITY GROUPS */
        $this->cv = $this->getCreateView();
        $this->cv->ss =& $this->ss;
        $this->cv->setup($this->module, $this->bean, $metadataFile, 'custom/include/CreateView/CreateView.tpl');
    }

    function display(){
        $this->cv->process();
        echo $this->cv->display($this->showTitle);
    }

    /**
     * Get EditView object
     * @return EditView
     */
    protected function getCreateView()
    {
        return new CreateView();
    }
}

