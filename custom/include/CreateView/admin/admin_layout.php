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
  header("Content-Type:text/plain");
  $module = "AOS_Contracts";
$team = $_REQUEST['security_group_layout'];

$modules = get_dropdown();
$modules[''] = $module;
$moduleTab = array();
foreach($modules as $moduleKey => $modTab){
    if($moduleKey != ""){
        $moduleKey = $moduleKey . "_";
    }
    $defs = get_view("editviewdefs", $modTab, $team);
    if($defs['tabdefs'] != null){
        foreach($defs['tabdefs'] as $key => $value){
                $moduleTab[strtoupper($moduleKey) . $key ] = $value;
        }
    }
    $tempModule = opp_update_fields($defs['layout'], $moduleKey);
    foreach($tempModule as $first_key =>  $panel){
        $tempModule[$moduleKey . $first_key] = $panel;
        if($moduleKey != ""){
            unset($tempModule[$first_key]);
        }
    }
    $finalDefs[$modTab] = $tempModule;
}

$finalArray = array();
foreach($finalDefs as $array){
    $finalArray = array_merge($array, $finalArray);
}



$viewdefs=
          array (
                'templateMeta' =>
                    array (
                        'maxColumns' => '2',
                        'widths' =>
                            array (
                                0 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'useTabs' => true,
                        'syncDetailEditViews' => false,
                        'tabDefs' => $moduleTab
                    ),
            );





$viewdefs['panels'] = $finalArray;
if(isset($team) && !empty($team) && $team != "default" ){
    $file = "custom/modules/{$module}/metadata/" . $team ."/createviewdefs.php";
    //cache
    $cache_file = "cache/modules/{$module}/metadata/" . $team ."/createviewdefs.php";
}else{
    if($team == "default"){
        $file = "custom/modules/{$module}/metadata/createviewdefs.php";
        $cache_file = "cache/modules/{$module}/metadata/createviewdefs.php";
    }
}

if(!empty($file)) {
    if(file_exists($cache_file)){
        unlink($cache_file);
    }
    $file_result = _writeToFile($file, 'CreateView', $module, $viewdefs, $variables);


    global $app_list_strings;
    $displayOptions = $app_list_strings['registration'];

$regFieldNames = get_fields($team);
    $html = "";
    $regFields = array();
    $bean = BeanFactory::getBean($module);
    $Oppbean = BeanFactory::getBean("Opportunities");
    $lead_fields = $bean->field_defs;
    $opp_fields = $Oppbean->field_defs;
    $html .= '<table border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4>' . translate('LBL_CREATE_FIELD_SETTINGS', 'Administration') . '</h4></th>
        </tr>
        <tr><td style="text-align:center">' . translate('LBL_CREATE_SETTINGS_FIELD_HEADER', 'Administration') . '</td><td style="text-align:center">' . translate('LBL_CREATE_SETTINGS_SETTINGS_HEADER', 'Administration') . '</td><td style="text-align:center">' . translate('LBL_CREATE_ANSWER', 'Administration') . '</td></tr>';

    if (isset($team) && !empty($team)) {
        $file = "custom/modules/{$module}/metadata/" . $team . "/createviewfields.php";
    } else {
        $file = "custom/modules/{$module}/metadata/createviewfields.php";
    }

    if (file_exists($file)) {
        include($file);
        $fields = $viewdefs['Leads'];
    }
    foreach ($regFieldNames as $name) {
        $regSelect = get_select_options_with_id($displayOptions, $fields[$name]);

        $label = null;
        if (!empty($lead_fields[$name]['vname'])) {
            $label = translate($lead_fields[$name]['vname'], 'Leads');
        } else {
            //now the opp fields start with.
            $dropdown = get_dropdown();
            foreach($dropdown as $key => $prefix){
                if (strpos($name, "opp_" . $key . "_") === 0) {
                    $count = strlen("opp_" . $key . "_");
                    $label = translate($opp_fields[substr($name, $count)]['vname'], 'Opportunities');
                }
            }
        }
        $regFields[$name] = array('name' => $name, 'label' => $label, 'registrationSelect' => $regSelect, 'profileSelect' => $profileSelect, 'enrollmentSelect' => $enrollmentSelect);
        $html .= '
    <tr>
                <td  scope="row" width="200">' . $label . ' </td>
                <td scope="row" width="100">
                    <select name="list_' . $name . '">
                        ' . $regSelect . '
                    </select>
                </td>';
	$temp = explode("_",$name);
	$temp = strlen($temp[1]);
        if( (is_array(		 $opp_fields[substr($name, $temp + 5)]) && 
		     (		 $opp_fields[substr($name, $temp + 5)]['type'] == "enum" ||
				 $opp_fields[substr($name, $temp + 5)]['type'] == "radioenum")) ){
            $displayAnswers = $app_list_strings[ $opp_fields[substr($name, $temp + 5)]['options'] ];
            $answerSelect = get_select_options_with_id(add_blank_option($displayAnswers), $fields[$name]);
        $html .= '<td>
                    <select name="list_answer_' . $name . '">
                        ' . $answerSelect . '
                    </select>
                    </td>
            </tr>';
            }else{
            $html .= '<td scope="row" width="200"></td>
                <td>
                    </td>
            </tr>';
        }
    }
    $html .= '</table>';
}else{
    //must be none;
    $file_result = "";
    $html = "";
}

if($team == "default"){
    echo json_encode(array("message" => $file_result, 'field_list' => "<br><br> <h2>Panel Settings for Wizard</h2> <br><br>" . getLayout($array, $team) ));
}else{
    $html = "<br><br> <h2>Panel Settings for Wizard</h2> <br><br>" . getLayout($array, $team);
    echo json_encode(array("message" => $file_result, 'field_list' => $html));
}





function getLayout($array, $team){

    if (isset($team) && !empty($team) && $team != "default") {
        $file = "custom/modules/Leads/metadata/" . $team . "/createviewpanels.php";
    } else {
        $file = "custom/modules/Leads/metadata/createviewpanels.php";
    }

    if (file_exists($file)) {
        include($file);
        $fields = $viewdefs['Leads'];
    }


    $html = "<table>";
    require_once('include/utils.php');
    foreach($array as $panelName => $panel){
        if(strpos($panelName, 'opp_') === false){
            $label = translate($panelName, 'Leads');
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

    if(!empty($team) && $team != "default"){
        $coreMetaPath = 'modules/' . $module . '/metadata/' . $team . '/' . $viewDef . '.php';
        if(file_exists('custom/' .$coreMetaPath )) {
            $metadataFile = 'custom/' . $coreMetaPath;
        }elseif(file_exists($coreMetaPath)){
            $metadataFile = $coreMetaPath;
        }else{
            $metadataFile = 'custom/modules/' . $module . '/metadata/' . $viewDef . '.php';
            if(file_exists('custom/' .$coreMetaPath )) {
                $metadataFile = 'custom/' . $coreMetaPath;
            }
        }
    }else{
        if(!empty($team)){
            $metadataFile = 'modules/' . $module .'/metadata/' . $viewDef . '.php';
        }
        if(file_exists('custom/' .$metadataFile ) && !empty($metadataFile)) {
            $metadataFile = 'custom/' . $metadataFile;
        }
    }
    $tabdefs = "";
    if(!empty($metadataFile)){
        require_once($metadataFile);
        if($viewDef == "editviewdefs"){
            $results = $viewdefs[$module]["EditView"]['panels'];
            if($viewdefs[$module]['EditView']['templateMeta']['useTabs'] == true){
                $tabdefs = $viewdefs[$module]['EditView']['templateMeta']['tabDefs'];
            }
        }else{
            $results = $viewdefs[$module]["CreateView"]['panels'];
            if($viewdefs[$module]['EditView']['templateMeta']['useTabs'] == true){
                $tabdefs = $viewdefs[$module]['CreateView']['templateMeta']['tabDefs'];
            }
        }
        //remove end
        unset($results['END']);
    }

    return array("layout" => $results, 'tabdefs' => $tabdefs);
}

require_once ('modules/ModuleBuilder/parsers/ModuleBuilderParser.php');

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

/**
 *
 * get layout for the create view defs, so it know what fields the user should be able to select.
 * @param $team
 * @return array
 */
function get_fields($team){
	
    $viewDef = 'createviewdefs';
    if(!empty($team) && $team != "default"){
        $coreMetaPath = 'modules/Leads/metadata/' . $team . '/' . $viewDef . '.php';
        if(file_exists('custom/' .$coreMetaPath )) {
            $metadataFile = 'custom/' . $coreMetaPath;
        }elseif(file_exists($coreMetaPath)){
            $metadataFile = $coreMetaPath;
        }else{
            $metadataFile = 'custom/modules/Leads/metadata/' . $viewDef . '.php';
            if(file_exists('custom/' .$coreMetaPath )) {
                $metadataFile = 'custom/' . $coreMetaPath;
            }
        }
    }else{
        $metadataFile = 'modules/Leads/metadata/' . $viewDef . '.php';
        if(file_exists('custom/' .$coreMetaPath )) {
            $metadataFile = 'custom/' . $metadataFile;
        }
    }
    if(!empty($metadataFile)){
        require_once($metadataFile);
//echo $metadataFile;
        $results = $viewdefs["Leads"]["CreateView"]['panels'];
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
//		print_r("4". $fields['1']);
                }else{
                     if(is_array($fields['1'])){
                        $regFieldNames[] = $fields['1']['name'];
//			print_r('5' . $fields['1']['name']);         
           }else{
                        $regFieldNames[] = $fields['1'];
//			print_r('6' . $fields['1']);
                    }
                }
            }
        }
    }
//print_r($regFieldNames);
    return $regFieldNames;
}

/**
 * gets the product type dropdown and will return it with or without the keys.
 * @param bool|false $keys
 * @return array
 */
function get_dropdown($keys = false){
    $dropdown = $GLOBALS['app_list_strings']['CreateViewRelatedModule'];
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
 * @deprecated
 * @param $name
 * @param $cfg
 * @return array
 */
function getRegFieldOptions($name,$cfg){
    if(!empty($cfg->config['create']['registration_fields'][$name])){
        return $cfg->config['create']['registration_fields'][$name];
    }
    return array('registration'=>'','profile'=>'','enrollment'=>'');
}

