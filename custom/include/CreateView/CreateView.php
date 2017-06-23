<?php
/**
 * CreateView.php
 * @author SalesAgility <info@salesagility.com>
 * Date: 20/01/15
 */

require_once('include/EditView/EditView2.php');
require_once('custom/include/TemplateHandler/TemplateHandler.php');

class CreateView extends EditView {

    public $view = 'CreateView';

    /**
     * CreateView constructor
     * This is the CreateView constructor responsible for processing the new
     * Meta-Data framework
     *
     * @param $module String value of module this Edit view is for
     * @param $focus An empty sugarbean object of module
     * @param $id The record id to retrieve and populate data for
     * @param $metadataFile String value of file location to use in overriding default metadata file
     * @param tpl String value of file location to use in overriding default Smarty template
     * @param createFocus bool value to tell whether to create a new bean if we do not have one with an id, this is used from ConvertLead
     *
     */
    function setup($module, $focus = null, $metadataFile = null, $tpl = 'custom/include/CreateView/CreateView.tpl', $createFocus = true)
    {
        $this->th = $this->getTemplateHandler();
        $this->th->ss =& $this->ss;
        $this->tpl = $tpl;
        $this->module = $module;
        $this->focus = $focus;

        $unsetPanels = array();
        $file = get_custom_file_if_exists("modules/$this->module/metadata/createviewpanels.php");
        if(file_exists($file)) {
            require($file);
                foreach ($viewdefs['Leads'] as $panels => $enable) {
                    if($enable != "enable") {
                        $unsetPanels[] = $panels;
                    }
                }
        }



        //this logic checks if the focus has an id and if it does not then it will create a new instance of the focus bean
        //but in convert lead we do not want to create a new instance and do not want to populate id.
        if ($createFocus)
        {
            $this->createFocus();
        }

        if (empty($GLOBALS['sugar_config']['showDetailData']))
        {
            $this->showDetailData = false;
        }
        $this->metadataFile = $metadataFile;

        if (isset($GLOBALS['sugar_config']['disable_vcr']))
        {
            $this->showVCRControl = !$GLOBALS['sugar_config']['disable_vcr'];
        }

        if (!empty($this->metadataFile) && file_exists($this->metadataFile))
        {
            include($this->metadataFile);
        }
        else
        {
            //Flag an error... we couldn't create the best guess meta-data file
            if (!file_exists("modules/$this->module/metadata/createviewdefs.php"))
            {
                global $app_strings;

                $error = str_replace("[file]", "modules/$this->module/metadata/editviewdefs.php", $app_strings['ERR_CANNOT_CREATE_METADATA_FILE']);
                $GLOBALS['log']->fatal($error);
                echo $error;
                die();
            }

            require("modules/$this->module/metadata/createviewdefs.php");
        }
        if(!empty($unsetPanels)){
            foreach($unsetPanels as $panel){
                unset($viewdefs[$this->module][$this->view]['panels'][$panel]);
            }
        }
        $this->defs = $viewdefs[$this->module][$this->view];
        $this->defs['templateMeta']['form']['headerTpl'] = 'custom/include/CreateView/header.tpl';
        $this->defs['templateMeta']['form']['footerTpl'] = 'custom/include/CreateView/footer.tpl';
        $this->isDuplicate = isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true' && $this->focus->aclAccess('edit');
    }

    //override to allow function fields to display properly
    function process($checkFormName = false, $formName = '')
    {
        global $mod_strings, $sugar_config, $app_strings, $app_list_strings;

        //the retrieve already did this work;
        //$this->focus->fill_in_relationship_fields();
        //Bug#53261: If quickeditview is loaded after editview.tpl is created,
        //           the th->checkTemplate will return true. So, the following
        //           code prevent avoid rendering popup editview container.
        if(!empty($this->formName)) {
            $formName = $this->formName;
            $checkFormName = true;
        }

        if (!$this->th->checkTemplate($this->module, $this->view, $checkFormName, $formName))
        {
            $this->render();
        }

        $this->view = 'EditView';

        if (isset($_REQUEST['offset']))
        {
            $this->offset = $_REQUEST['offset'] - 1;
        }

        if ($this->showVCRControl)
        {
            $this->th->ss->assign('PAGINATION', SugarVCR::menu($this->module, $this->offset, $this->focus->is_AuditEnabled(), ($this->view == 'EditView')));
        }
        $this->th->ss->assign('moduleListing', $GLOBALS['app_list_strings']['CreateViewRelatedModule']);

        if (isset($_REQUEST['return_module'])) $this->returnModule = $_REQUEST['return_module'];
        if (isset($_REQUEST['return_action'])) $this->returnAction = $_REQUEST['return_action'];
        if (isset($_REQUEST['return_id'])) $this->returnId = $_REQUEST['return_id'];
        if (isset($_REQUEST['return_relationship'])) $this->returnRelationship = $_REQUEST['return_relationship'];
        if (isset($_REQUEST['return_name'])) $this->returnName = $this->getValueFromRequest($_REQUEST, 'return_name' ) ;

        // handle Create $module then Cancel
        if (empty($this->returnId))
        {
            $this->returnAction = 'index';
        }

        $is_owner = $this->focus->isOwner($GLOBALS['current_user']->id);

        $this->fieldDefs = array();
        if ($this->focus)
        {
            global $current_user;

            if (!empty($this->focus->assigned_user_id))
            {
                $this->focus->assigned_user_name = get_assigned_user_name($this->focus->assigned_user_id);
            }

            if (!empty($this->focus->job) && $this->focus->job_function == '')
            {
                $this->focus->job_function = $this->focus->job;
            }

            foreach ($this->focus->toArray() as $name => $value)
            {
                $valueFormatted = false;
                //if ($this->focus->field_defs[$name]['type']=='link')continue;

                $this->fieldDefs[$name] = (!empty($this->fieldDefs[$name]) && !empty($this->fieldDefs[$name]['value']))
                    ? array_merge($this->focus->field_defs[$name], $this->fieldDefs[$name])
                    : $this->focus->field_defs[$name];
                $this->fieldDefs[$name]['module'] = $this->focus->module_name;
                $this->fieldDefs[$name]['moduleCore'] = $this->focus->module_name;
                foreach (array("formula", "default", "comments", "help") as $toEscape)
                {
                    if (!empty($this->fieldDefs[$name][$toEscape]))
                    {
                        $this->fieldDefs[$name][$toEscape] = htmlentities($this->fieldDefs[$name][$toEscape], ENT_QUOTES, 'UTF-8');
                    }
                }

                if (isset($this->fieldDefs[$name]['options']) && isset($app_list_strings[$this->fieldDefs[$name]['options']]))
                {
                    if(isset($GLOBALS['sugar_config']['enable_autocomplete']) && $GLOBALS['sugar_config']['enable_autocomplete'] == true)
                    {
                        $this->fieldDefs[$name]['autocomplete'] = true;
                        $this->fieldDefs[$name]['autocomplete_options'] = $this->fieldDefs[$name]['options']; // we need the name for autocomplete
                    } else {
                        $this->fieldDefs[$name]['autocomplete'] = false;
                    }
                    // Bug 57472 - $this->fieldDefs[$name]['autocomplete_options' was set too late, it didn't retrieve the list's name, but the list itself (the developper comment show us that developper expected to retrieve list's name and not the options array)
                    $this->fieldDefs[$name]['options'] = $app_list_strings[$this->fieldDefs[$name]['options']];
                }

                if(isset($this->fieldDefs[$name]['options']) && is_array($this->fieldDefs[$name]['options']) && isset($this->fieldDefs[$name]['default_empty']) && !isset($this->fieldDefs[$name]['options'][$this->fieldDefs[$name]['default_empty']])) {
                    $this->fieldDefs[$name]['options'] = array_merge(array($this->fieldDefs[$name]['default_empty']=>$this->fieldDefs[$name]['default_empty']), $this->fieldDefs[$name]['options']);
                }

                if(isset($this->fieldDefs[$name]['function'])) {
                    $function = $this->fieldDefs[$name]['function'];
                    if(is_array($function) && isset($function['name'])){
                        $function = $this->fieldDefs[$name]['function']['name'];
                    }else{
                        $function = $this->fieldDefs[$name]['function'];
                    }

                    if(isset($this->fieldDefs[$name]['function']['include']) && file_exists($this->fieldDefs[$name]['function']['include']))
                    {
                        require_once($this->fieldDefs[$name]['function']['include']);
                    }

                    if(!empty($this->fieldDefs[$name]['function']['returns']) && $this->fieldDefs[$name]['function']['returns'] == 'html'){
                        if(!empty($this->fieldDefs[$name]['function']['include'])){
                            require_once($this->fieldDefs[$name]['function']['include']);
                        }
                        $value = call_user_func($function, $this->focus, $name, $value, $this->view);
                        $valueFormatted = true;
                    }else{
                        $this->fieldDefs[$name]['options'] = call_user_func($function, $this->focus, $name, $value, $this->view);
                    }
                }

                if(isset($this->fieldDefs[$name]['type']) && $this->fieldDefs[$name]['type'] == 'function' && isset($this->fieldDefs[$name]['function_name'])){
                    $value = $this->callFunction($this->fieldDefs[$name]);
                    $valueFormatted = true;
                }

                if(!$valueFormatted) {
                    // $this->focus->format_field($this->focus->field_defs[$name]);
                    $value = isset($this->focus->$name) ? $this->focus->$name : '';
                }

                if (empty($this->fieldDefs[$name]['value']))
                {
                    $this->fieldDefs[$name]['value'] = $value;
                }


                //This code is used for QuickCreates that go to Full Form view.  We want to overwrite the values from the bean
                //with values from the request if they are set and either the bean is brand new (such as a create from a subpanels) or the 'full form' button has been clicked
                if ((($this->populateBean && empty($this->focus->id)) || (isset($_REQUEST['full_form'])))
                    && (!isset($this->fieldDefs[$name]['function']['returns']) || $this->fieldDefs[$name]['function']['returns'] != 'html')
                    && isset($_REQUEST[$name]))
                {
                    $this->fieldDefs[$name]['value'] = $this->getValueFromRequest($_REQUEST, $name);
                }

                /*
                 * Populate any relate fields that are linked by a relationship to the calling module.
                 * Clicking the create button on a subpanel for example will populate three values in the $_REQUEST:
                 * 1. return_module => the name of the calling module
                 * 2. return_id => the id of the record in the calling module that the user was viewing and that should be associated with this new record
                 * 3. return_name => the display value of the return_id record - the value to show in any relate field in this EditView
                 * Only do if this fieldDef does not already have a value; if it does it will have been explicitly set, and that should overrule this less specific mechanism
                 */
                if (isset($this->returnModule) && isset($this->returnName)
                    && empty($this->focus->id) && empty($this->fieldDefs['name']['value']) )
                {
                    if (($this->focus->field_defs[$name]['type'] == 'relate')
                        && isset($this->focus->field_defs[$name][ 'module' ])
                        && $this->focus->field_defs[$name][ 'module' ] == $this->returnModule)
                    {
                        if (isset( $this->fieldDefs[$name]['id_name'])
                            && !empty($this->returnRelationship)
                            && isset($this->focus->field_defs[$this->fieldDefs[$name]['id_name']]['relationship'])
                            && ($this->returnRelationship == $this->focus->field_defs[$this->fieldDefs[$name]['id_name']]['relationship']))
                        {
                            $this->fieldDefs[$name]['value'] =  $this->returnName ;
                            // set the hidden id field for this relate field to the correct value i.e., return_id
                            $this->fieldDefs[$this->fieldDefs[$name]['id_name']]['value'] = $this->returnId ;
                        }
                    }
                }
            }
        }

        if (isset($this->focus->additional_meta_fields))
        {
            $this->fieldDefs = array_merge($this->fieldDefs, $this->focus->additional_meta_fields);
        }

        if($this->focus->module_dir == 'AOS_Contracts') {
            $relatedModules = $app_list_strings['CreateViewRelatedModule'];
            foreach($relatedModules as $product => $value) {
                if($product == '') continue;

                $prefix = $product . '_';
                $mod = BeanFactory::getBean($value);
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

                    $arr['name'] = $prefix . $arr['name'];


                    $this->fieldDefs[$prefix . $name] = $arr;
                    $this->fieldDefs[$prefix . $name]['moduleCore'] = $mod->module_name;
                }
            }
        }

        if ($this->isDuplicate)
        {
            foreach ($this->fieldDefs as $name=>$defs) {
                if (!empty($defs['auto_increment']))
                {
                    $this->fieldDefs[$name]['value'] = '';
                }
            }
        }

        $this->view = 'CreateView';
    }

    /**
     * Get template handler object
     * @return TemplateHandler
     */
    protected function getTemplateHandler()
    {
        return new CustomTemplateHandler();
    }

}