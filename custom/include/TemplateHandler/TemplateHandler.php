<?php
require_once('include/TemplateHandler/TemplateHandler.php');
require_once('custom/include/javascript/javascript.php');

class CustomTemplateHandler extends TemplateHandler {

    /**
     * Builds a template
     * This is a private function that should be called only from checkTemplate method
     *
     * @param module string module name
     * @param view string view need (eg DetailView, EditView, etc)
     * @param tpl string generic tpl to use
     * @param ajaxSave boolean parameter indicating whether or not this is coming from an Ajax call
     * @param metaDataDefs metadata definition as Array
     **/
    function buildTemplate($module, $view, $tpl, $ajaxSave, $metaDataDefs) {
        global $theme;
        $this->loadSmarty();

        /* BEGIN - SECURITY GROUPS */
        $groupLayout = "";
        if(isset($_SESSION['groupLayout']) && !empty($_SESSION['groupLayout'])) {
            $groupLayout = $_SESSION['groupLayout']."/"; //add group id after file name for cached versions
        }
        /**
        $cacheDir = create_cache_directory($this->templateDir. $module . '/');
         */

        $cacheDir = create_cache_directory($this->themeDir.$theme.'/' . $this->templateDir. $module . '/' .
                                                                      $groupLayout);
        /* END - SECURITY GROUPS */
        $file = $cacheDir . $view . '.tpl';
        $string = '{* Create Date: ' . date('Y-m-d H:i:s') . "*}\n";
        $this->ss->left_delimiter = '{{';
        $this->ss->right_delimiter = '}}';
        $this->ss->assign('module', $module);
        $this->ss->assign('built_in_buttons', array('CANCEL', 'DELETE', 'DUPLICATE', 'EDIT', 'FIND_DUPLICATES', 'SAVE', 'CONNECTOR'));
        $contents = $this->ss->fetch($tpl);
        //Insert validation and quicksearch stuff here
        if($view == 'EditView' || $view == 'CreateView' || strpos($view,'QuickCreate') || $ajaxSave || $view == "ConvertLead") {

            global $dictionary, $beanList, $app_strings, $mod_strings;
            $mod = $beanList[$module];

            if($mod == 'aCase') {
                $mod = 'Case';
            }

            $defs = $dictionary[$mod]['fields'];
            $defs2 = array();
            //Retrieve all panel field definitions with displayParams Array field set
            $panelFields = array();

            foreach($metaDataDefs['panels'] as $panel) {
                foreach($panel as $row) {
                    foreach($row as $entry) {
                        if(empty($entry)) {
                            continue;
                        }

                        if(is_array($entry) &&
                            isset($entry['name']) &&
                            isset($entry['displayParams']) &&
                            isset($entry['displayParams']['required']) &&
                            $entry['displayParams']['required']) {
                            $panelFields[$entry['name']] = $entry;
                        }

                        if(is_array($entry)) {
                            $defs2[$entry['name']] = $entry;
                        } else {
                            $defs2[$entry] = array('name' => $entry);
                        }
                    } //foreach
                } //foreach
            } //foreach

            foreach($panelFields as $field=>$value) {
                $nameList = array();
                if(!is_array($value['displayParams']['required'])) {
                    $nameList[] = $field;
                } else {
                    foreach($value['displayParams']['required'] as $groupedField) {
                        $nameList[] = $groupedField;
                    }
                }

                foreach($nameList as $x) {
                    if(isset($defs[$x]) &&
                        isset($defs[$x]['type']) &&
                        !isset($defs[$x]['required'])) {
                        $defs[$x]['required'] = true;
                    }
                }
            } //foreach

            //Create a base class with field_name_map property
            $sugarbean = new stdClass;
            $defs = $this->buildFieldMap($module, $defs);
            $sugarbean->field_name_map = $defs;
            $sugarbean->module_dir = $module;

            $javascript = new customJavascript();
            $view = $view == 'QuickCreate' ? "QuickCreate_{$module}" : $view;
            $javascript->setFormName($view);

            $javascript->setSugarBean($sugarbean);

            if ($view != "ConvertLead") {
                $javascript->addAllFields('', null, true);
            }

            $validatedFields = array();
            $javascript->addToValidateBinaryDependency('assigned_user_name', 'alpha', $javascript->buildStringToTranslateInSmarty('ERR_SQS_NO_MATCH_FIELD').': '.$javascript->buildStringToTranslateInSmarty('LBL_ASSIGNED_TO'), 'false', '', 'assigned_user_id');
            $validatedFields[] = 'assigned_user_name';
            //Add remaining validation dependency for related fields
            //1) a relate type as defined in vardefs
            //2) set in metadata layout
            //3) not have validateDepedency set to false in metadata
            //4) have id_name in vardef entry
            //5) not already been added to Array
            foreach($sugarbean->field_name_map as $name=>$def) {

                if($def['type']=='relate' &&
                    isset($defs2[$name]) &&
                    (!isset($defs2[$name]['validateDependency']) || $defs2[$name]['validateDependency'] === true) &&
                    isset($def['id_name']) &&
                    !in_array($name, $validatedFields)) {

                    if(isset($mod_strings[$def['vname']])
                        || isset($app_strings[$def['vname']])
                        || translate($def['vname'],$sugarbean->module_dir) != $def['vname']) {
                        $vname = $def['vname'];
                    }
                    else{
                        $vname = "undefined";
                    }
                    $javascript->addToValidateBinaryDependency($name, 'alpha', $javascript->buildStringToTranslateInSmarty('ERR_SQS_NO_MATCH_FIELD').': '.$javascript->buildStringToTranslateInSmarty($vname), (!empty($def['required']) ? 'true' : 'false'), '', $def['id_name']);
                    $validatedFields[] = $name;
                }
            } //foreach

            $contents .= "{literal}\n";
            $contents .= $javascript->getScript();
            $contents .= $this->createQuickSearchCode($defs, $defs2, $view, $module);
            $contents .= "{/literal}\n";
        }else if(preg_match('/^SearchForm_.+/', $view)){
            global $dictionary, $beanList, $app_strings, $mod_strings;
            $mod = $beanList[$module];

            if($mod == 'aCase') {
                $mod = 'Case';
            }

            $defs = $dictionary[$mod]['fields'];
            $contents .= '{literal}';
            $contents .= $this->createQuickSearchCode($defs, array(), $view);
            $contents .= '{/literal}';
        }//if

        //Remove all the copyright comments
        $contents = preg_replace('/\{\*[^\}]*?\*\}/', '', $contents);

        if($fh = @sugar_fopen($file, 'w')) {
            fputs($fh, $contents);
            fclose($fh);
        }


        $this->ss->left_delimiter = '{';
        $this->ss->right_delimiter = '}';
    }

    public function buildFieldMap($module, $defs)
    {
        global $app_list_strings;
        $relatedModules = $app_list_strings['CreateViewRelatedModule'][$module];
        foreach ($relatedModules as $product => $value) {
            if ($product == '') {
                continue;
            }

            $prefix = $product . '_';
            $mod = BeanFactory::getBean($value['module']);
            foreach ($mod->field_defs as $name => $arr) {

                if (isset($arr['options']) && isset($app_list_strings[$arr['options']])) {
                    if (isset($GLOBALS['sugar_config']['enable_autocomplete']) &&
                        $GLOBALS['sugar_config']['enable_autocomplete'] == true
                    ) {
                        $arr['autocomplete'] = true;
                        $arr['autocomplete_options'] = $arr['options']; // we need the name for autocomplete
                    } else {
                        $arr['autocomplete'] = false;
                    }
                    // Bug 57472 - $arr['autocomplete_options' was set too late, it didn't retrieve the list's name, but the list itself (the developper comment show us that developper expected to retrieve list's name and not the options array)
                    $arr['options'] = $app_list_strings[$arr['options']];
                }

                if (isset($arr['options']) &&
                    is_array($arr['options']) &&
                    isset($arr['default_empty']) &&
                    !isset($arr['options'][$arr['default_empty']])
                ) {
                    $arr['options'] =
                        array_merge(array($arr['default_empty'] => $arr['default_empty']), $arr['options']);
                }

                $arr['name'] = $prefix . $arr['name'];

                if ($this->fieldDefs[$prefix . $name] != null) {
                    $arr = array_merge($defs[$prefix . $name], $arr);
                }
                $defs[$prefix . $name] = $arr;
                $defs[$prefix . $name]['moduleCore'] = $mod->module_name;
            }
        }
        return $defs;
    }
}
?>
