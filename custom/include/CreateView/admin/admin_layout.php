<?php
/**
 *
 * File creates the createview metadata and creates the users view for the field list, when then is saved by the admin section.
 *
 * this will pull all the requred views into one to be saved into a file. adding the prefixes as it goes.
 *
 *
 *
 * Created by PhpStorm.
 * User: ian
 * Date: 25/06/15
 * Time: 14:51
 */
//  header("Content-Type:text/plain");
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
require_once ('modules/ModuleBuilder/parsers/ModuleBuilderParser.php');


$module = "AOS_Contracts";
if($_REQUEST['security_group_layout']){
    $team = $_REQUEST['security_group_layout'];
}else{
    echo json_encode(array(""));
    die();
}

$buildViews = new buildViews($module, $team);
$result1 = $buildViews->buildCombinedDetailView($team, 'EditView', 'create');
$result2 = $buildViews->buildCombinedDetailView($team, 'DetailView', 'detailCombined');

if($result1 == "Done" && $result2 == "Done"){
    echo json_encode(array("message" => $result1, 'field_list' => "" ));
}else{
    echo json_encode(array("message" => "Failed", 'field_list' => "" ));

}

class buildViews{

	var $module = "";
	var $team = "";


	public function __construct($module, $team) {
	    $this->module = $module;
	    $this->team = $team;
	}

	public function fetchModules(){
		$modules = $GLOBALS['app_list_strings']['CreateViewRelatedModule'][$this->module];
		$modules[''] = array('module' => $this->module, 'relationship' => '');
		return $modules;
	}

	public function getLayoutDefs($modules, $team = "default",  $view){
		$moduleTab = array();
		foreach($modules as $moduleKey => $modTab){
			if($moduleKey != ""){
				$moduleKey = $moduleKey . "_";
			}
			$defs = $this->get_view($view, $modTab['module'], $team);
			if($defs['tabdefs'] != null){
				foreach($defs['tabdefs'] as $key => $value){
					$moduleTab[strtoupper($moduleKey) . $key ] = $value;
				}
			}
			$tempModule = $this->opp_update_fields($defs['layout'], $moduleKey);
			foreach($tempModule as $first_key =>  $panel){
				$tempModule[$moduleKey . $first_key] = $panel;
				if($moduleKey != ""){
					unset($tempModule[$first_key]);
				}
			}
			$finalDefs[$modTab['module']] = $tempModule;
		}
		$finalArray = array();
		foreach($finalDefs as $array){
			$finalArray = array_merge($array, $finalArray);
		}
		return $finalArray;
	}

	public function fetchDefs($view, $module){
	    if(!is_array($module)){
	       $module = array("module" => $module );
        }
        foreach($module as $key => $single) {
	        if($key == ""){
	            $key = 0;
            }
            $metadata = strtolower($view) . "defs.php";
            $file = get_custom_file_if_exists("modules/{$single['module']}/metadata/{$metadata}");
            if (file_exists($file)) {
                include($file);

                $returnData[ $key ] = $viewdefs[$single['module']][$view]['templateMeta'];
            }
        }
        //$returningData['tabDefs'] = array_merge($returningData['tabDefs'], $view['tabDefs']);
        $returningData = $returnData[ 0 ];
	    unset($returnData['0']);
	    foreach($returnData as $parent => $view){
	        foreach($view['tabDefs'] as $key =>  $defs){
                $returningData['tabDefs'][ strtoupper($parent) . "_" .$key ] = $defs;
            }
        }

        return $returningData;
    }
	public function buildCombinedDetailView($team, $view = "EditView", $newView){
		$modules = $this->fetchModules();
        $finalArray = $this->getLayoutDefs($modules, $team, $view);
        $viewdefs['templateMeta'] = $this->fetchDefs($view, $modules);
        if(!isset($viewdefs['templateMeta']['form']['buttons']) ){
            $viewdefs['templateMeta']['form']['buttons']['SAVE'] = array('customCode'=>'<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" ' .
                                                                                               '                    accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" ' .
                                                                                               '                    class="button" ' .
                                                                                               '					 onclick="var _form = document.getElementById(\'CreateView\'); _form.action.value=\'Save\'; if(check_form(\'CreateView\'))SUGAR.ajaxUI.submitForm(_form);return false;"; ' .
                                                                                               '                    type="submit" ' .
                                                                                               '                    name="button" ' .
                                                                                               '                    id="SAVE"     ' .
                                                                                               '                    value="{$APP.LBL_SAVE_BUTTON_LABEL}">');
            $viewdefs['templateMeta']['form']['buttons']['CANCEL'] = 'CANCEL';
        }
        $viewdefs['panels'] = $finalArray;

        $file = $this->fetchFile($team, $newView);

        $file_result = $this->_writeToFile($file,
                                           ucfirst($newView) . "View",
                                           $this->module,
                                           $viewdefs,
                                           $variables);

        return $file_result;
	}
    public function fetchFile($team, $newView){
	    $newView = strtolower($newView);
        if(isset($team) && !empty($team) && $team != "default" ){
            $file = "custom/modules/{$this->module}/metadata/" . $team ."/{$newView}viewdefs.php";
            //cache
            $cache_file = "cache/modules/{$this->module}/metadata/" . $team ."/{$newView}viewdefs.php";
            $cache_file2 = "cache/themes/SuiteP/modules/{$this->module}/" . $team ."/{$newView}viewdefs.php";
        }else{
            if($team == "default"){
                $file = "custom/modules/{$this->module}/metadata/{$newView}viewdefs.php";
                $cache_file = "cache/modules/{$this->module}/metadata/{$newView}viewdefs.php";
                $cache_file2 = "cache/themes/SuiteP/modules/{$this->module}/{$newView}viewdefs.php";
            }
        }

        if(!empty($file)) {
            if (file_exists($cache_file)) {
                unlink($cache_file);
            }
            if (file_exists($cache_file2)) {
                unlink($cache_file2);
            }
        }

        return $file;
    }
	/**
	 * gets the product type dropdown and will return it with or without the keys.
	 * @param bool|false $keys
	 * @return array
	 */
	function get_dropdown($module){
		$dropdown = $GLOBALS['app_list_strings']['CreateViewRelatedModule'][$module];
		return $dropdown;
	}

	/**
	 *
	 * adds the prefix to the opp fields and returns them in the same format.
	 *
	 * @param $results
	 * @return array
	 */
	function opp_update_fields($results, $moduleKey = ""){
		$opp = array();
		$i = 0;
		foreach($results as $key =>  $panel){
			$opp[ $key] = array();
			foreach($panel as $key2 => $fields){
				$opp[$key][$key2] = array();
				if(!empty($fields[0]) ){
					if(is_array($fields['0'])){
						$opp[$key][$key2]['0'] = $fields['0'];
						$opp[$key][$key2]['0']['name'] = $moduleKey . $fields['0']['name'];
					}else{
						if(isset($fields['name'])){
							$opp[$key][$key2]['name'] = $moduleKey . $fields['name'];
						}else{
							$opp[$key][$key2]['0'] = $moduleKey . $fields['0'];
						}
					}
				}

				if(!empty($fields['1']) ){
					if(is_array($fields['1'])){
						$opp[$key][$key2]['1'] = $moduleKey .$fields['1']['name'];
					}else{
						if(is_array($fields['1'])){
							$opp[$key][$key2]['1']['name'] = $moduleKey .$fields['1']['name'];
						}else{
							$opp[$key][$key2]['1'] = $moduleKey . $fields['1'];
						}
					}
				}
			}
			$i++;
		}
		return $opp;

	}

	/**
	 *
	 * get layout for the create view defs, so it know what fields the user should be able to select.
	 * @param $team
	 * @return array
	 */
	function get_fields($team, $module){

		$viewDef = 'createviewdefs';
		if(!empty($team) && $team != "default"){
			$coreMetaPath = 'modules/\' . $module . \'/metadata/' . $team . '/' . $viewDef . '.php';
			if(file_exists('custom/' .$coreMetaPath )) {
				$metadataFile = 'custom/' . $coreMetaPath;
			}elseif(file_exists($coreMetaPath)){
				$metadataFile = $coreMetaPath;
			}else{
				$metadataFile = 'custom/modules/\' . $module . \'/metadata/' . $viewDef . '.php';
				if(file_exists('custom/' .$coreMetaPath )) {
					$metadataFile = 'custom/' . $coreMetaPath;
				}
			}
		}else{
			$metadataFile = 'modules/' . $module . '/metadata/' . $viewDef . '.php';
			if(file_exists('custom/' .$coreMetaPath )) {
				$metadataFile = 'custom/' . $metadataFile;
			}
		}
		if(!empty($metadataFile)){
			require_once($metadataFile);
			//echo $metadataFile;
			$results = $viewdefs[$module]["CreateView"]['panels'];
			//print_r($results);
			//remove end
			unset($results['END']);
		}
		$regFieldNames = array();
		//print_r($results);
		foreach($results as $panel){
			foreach($panel as $fields){

				if(!empty($fields['0']) ){
					if(is_array($fields['0'])){
						$regFieldNames[] = $fields['0']['name'];
					}else{
						if(is_array($fields['0'])){
							$regFieldNames[] = $fields['0']['name'];
						}else{
							$regFieldNames[] = $fields['0'];
						}
					}
				}
				if(!empty($fields['1']) ){
					if(is_array($fields['1'])){
						$regFieldNames[] = $fields['1']['name'];
					}else{
						if(is_array($fields['1'])){
							$regFieldNames[] = $fields['1']['name'];
						}else{
							$regFieldNames[] = $fields['1'];
						}
					}
				}
			}
		}
		return $regFieldNames;
	}




	function getLayout($array, $team){

		if (isset($team) && !empty($team) && $team != "default") {
			$file = "custom/modules/{$module}/metadata/" . $team . "/createviewpanels.php";
		} else {
			$file = "custom/modules/{$module}/metadata/createviewpanels.php";
		}

		if (file_exists($file)) {
			include($file);
			$fields = $viewdefs[$module];
		}


		$html = "<table>";
		require_once('include/utils.php');
		foreach($array as $panelName => $panel){
			if(strpos($panelName, 'opp_') === false){
				$label = translate($panelName, $module);
			}else{
				$str = strtoupper( substr($panelName, 4) );
				$label = translate($str, 'Opportunities');
			}
			$regSelect = get_select_options(array("" => "", "enable" => "Enable", "disable" => "Disable"), ($fields[ $panelName ] == "enable") ? "enable" : "disable");
			$html .= "<tr><td>{$label}</td><td><select name='panel_{$panelName}'>{$regSelect}</select></td></tr>";
		}
		$html .= "</table>";


		return $html;
	}

	/**
	 *
	 * Gets the current view for a given module and team.
	 * @param $viewDef
	 * @param $module
	 * @param $team
	 * @return mixed
	 */
	function get_view($viewDef, $module, $team){
        $def = strtolower($viewDef) . "defs.php";

        $bean = BeanFactory::getBean("Layouts");
        $bean->retrieve($team);
        if(!empty($bean->id)){
            $beanCheck = BeanFactory::getBean("Layouts");
            $beanCheck->retrieve_by_string_fields(array('name' => $bean->name, 'flow_module' => $module));
            if(!empty($beanCheck->id)){
                $team = $beanCheck->id;
            }
        }

		if(!empty($team) && $team != "default"){
			$coreMetaPath = 'modules/' . $module . '/metadata/' . $team . '/' . $def ;
			if(file_exists('custom/' .$coreMetaPath )) {
				$metadataFile = 'custom/' . $coreMetaPath;
			}elseif(file_exists($coreMetaPath)){
				$metadataFile = $coreMetaPath;
			}else{
				$metadataFile = 'custom/modules/' . $module . '/metadata/' . $def;
				if(file_exists('custom/' .$coreMetaPath )) {
					$metadataFile = 'custom/' . $coreMetaPath;
				}
			}
		}else{
			if(!empty($team)){
				$metadataFile = 'modules/' . $module .'/metadata/' . $def;
			}
			if(file_exists('custom/' .$metadataFile ) && !empty($metadataFile)) {
				$metadataFile = 'custom/' . $metadataFile;
			}
		}
		$tabdefs = "";
		if(!empty($metadataFile)){
			require_once($metadataFile);
				$results = $viewdefs[$module][ $viewDef ]['panels'];
				if($viewdefs[$module][ $viewDef ]['templateMeta']['useTabs'] == true){
					$tabdefs = $viewdefs[$module]['EditView']['templateMeta']['tabDefs'];
				}
			//remove end
			unset($results['END']);
		}

		return array("layout" => $results, 'tabdefs' => $tabdefs);
	}


	/**
	 *
	 * write out to a file for metadata data.
	 * @param $file
	 * @param $view
	 * @param $moduleName
	 * @param $defs
	 * @param $variables
	 * @return string
	 */
	function _writeToFile ($file,$view,$moduleName,$defs,$variables)
	{
		if(file_exists($file))
			unlink($file);

		mkdir_recursive ( dirname ( $file ) ) ;
		$GLOBALS['log']->debug("ModuleBuilderParser->_writeFile(): file=".$file);
		$useVariables = (count($variables)>0);
		if( $fh = @sugar_fopen( $file, 'w' ) )
		{
			$out = "<?php\n";
			if ($useVariables)
			{
				// write out the $<variable>=<modulename> lines
				foreach($variables as $key=>$value)
				{
					$out .= "\$$key = '".$value."';\n";
				}
			}

			// write out the defs array itself
			switch (strtolower($view))
			{
				case 'editview':
				case 'detailview':
				case 'quickcreate':
				case 'createview':
				case 'detailcombinedview':
					$defs = array($view => $defs);
					break;
				default:
					break;
			}
			$viewVariable = "viewdefs";
			$out .= "\$$viewVariable = ";
			$out .= ($useVariables) ? "array (\n\$module_name =>\n".var_export_helper($defs) : var_export_helper( array($moduleName => $defs) );

			// tidy up the parenthesis
			if ($useVariables)
			{
				$out .= "\n)";
			}
			$out .= ";\n?>\n";

			//           $GLOBALS['log']->debug("parser.modifylayout.php->_writeFile(): out=".print_r($out,true));
			fputs( $fh, $out);
			fclose( $fh );
			return "Done";
		}
		else
		{
			$GLOBALS['log']->fatal("ModuleBuilderParser->_writeFile() Could not write new viewdef file ".$file);
			return "Failed";
		}
	}




}