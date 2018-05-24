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
    	global $app_list_strings;
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

        /* START Layout Rules */
        $bean = BeanFactory::getBean("LayoutRules");
        $metadata =  $bean->fetchLayout($this->bean, $metadataFile,'createviewdefs');
        $metadataFile = $metadata['file'];
        $_SESSION['groupLayout'] = $metadata['id'];
        /* END Layout Rules */

        $this->cv = $this->getCreateView();



	    $relatedModules = $app_list_strings['CreateViewRelatedModule'][ $this->bean->module_name ];
	    foreach($relatedModules as $product => $value) {
		    if($product == '') continue;

		    $prefix = $product . '_';
		    $mod = BeanFactory::getBean($value['module']);
		    foreach ($mod->field_defs as $name => $arr) {

			    if (isset($arr['options']) && isset($app_list_strings[$arr['options']])) {
				    if (isset($GLOBALS['sugar_config']['enable_autocomplete']) && $GLOBALS['sugar_config']['enable_autocomplete'] == true) {
					    $arr['autocomplete'] = true;
					    $arr['autocomplete_options'] = $arr['options']; // we need the name for autocomplete
				    } else {
					    $arr['autocomplete'] = false;
				    }
				    // Bug 57472 - $arr['autocomplete_options' was set too late, it didn't retrieve the list's name, but the list itself (the developper comment show us that developper expected to retrieve list's name and not the options array)
				    $arr['options'] = $app_list_strings[$arr['options']];
			    }

			    if (isset($arr['options']) && is_array($arr['options']) && isset($arr['default_empty']) && !isset($arr['options'][$arr['default_empty']])) {
				    $arr['options'] = array_merge(array($arr['default_empty'] => $arr['default_empty']), $arr['options']);
			    }

                if($arr['type'] == "relate" && !empty($arr['id_name'])){
                    $arr['id_name'] = $prefix . $arr['id_name'];
                }

			    $arr['name'] = $prefix . $arr['name'];

			    $this->bean->field_defs[$prefix . $name] = $arr;
			    $this->bean->field_defs[$prefix . $name]['moduleCore'] = $mod->module_name;
		    }



	    }



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

