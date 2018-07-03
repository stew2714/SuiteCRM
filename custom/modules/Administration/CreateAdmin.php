<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


global $current_user, $sugar_config;
global $mod_strings;
global $app_list_strings;
global $app_strings;
global $theme;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

require_once('modules/Configurator/Configurator.php');


echo getClassicModuleTitle(
    "Administration",
    array(
        "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
        $mod_strings['LBL_CREATE_ADMIN'],
    ),
    false
);

$sugar_smarty	= new Sugar_Smarty();
$errors			= array();



if(isset($_REQUEST['do']) && $_REQUEST['do'] == 'save') {

    foreach($_REQUEST as $key => $possible_fields){
        if(strpos($key, "list_") !== false){
            $field[substr($key, '5')]["Required"] = $possible_fields;
        }
        if(strpos($key, "list_answer_") !== false){
            $field[substr($key, '12')]["Answer"] = $possible_fields;
        }
        if(strpos($key, "panel_") !== false){
            $panel[substr($key, '6')] = ($possible_fields) ? $possible_fields : "enable";
        }
    }
    $team = $_REQUEST['security_group_layout'];
    if(!empty($team)) {
        $file = "custom/modules/Leads/metadata/" . $team . "/createviewfields.php";
        $file_result = _writeToFile($file, 'FieldsView', "Leads", $field, $variables);
    }


    if(!empty($team)) {
        if($team == "default"){
            $file = "custom/modules/Leads/metadata/createviewpanels.php";
            $cacheFile = "cache/modules/Leads/CreateView.tpl";
        }else{
            $file = "custom/modules/Leads/metadata/" . $team . "/createviewpanels.php";
            $cacheFile = "cache/modules/Leads/metadata/" . $team . "/createviewpanels.php";
        }
        $file_result = _writeToFile($file, 'FieldsView', "Leads", $panel, $variables);
        unlink($cacheFile);

    }

    if(empty($errors)){
        header('Location: index.php?module=Administration&action=index');
        exit();
    }

}

$emailTemplateList = get_bean_select_array(true,'SecurityGroup','name');
$emailTemplateList['default'] = "Default";


$bean = BeanFactory::getBean("Layouts");
$list = $bean->get_full_list("", "layouts.flow_module = 'AOS_Contracts'");
foreach($list as $record){
    $emailTemplateList[ $record->id ] = $record->name;
}
$regEmailTemplateDropdown = get_select_options_with_id($emailTemplateList, "");
$sugar_smarty->assign('SECURITYGROUP_LAYOUT', $regEmailTemplateDropdown);

$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign("JAVASCRIPT",get_set_focus_js());
//$sugar_smarty->assign('config', $cfg->config['create']);
$sugar_smarty->assign('error', $errors);


$buttons =  <<<EOQ
    <input title="{$app_strings['LBL_SAVE_BUTTON_TITLE']}"
                       accessKey="{$app_strings['LBL_SAVE_BUTTON_KEY']}"
                       class="button primary"
                       type="submit"
                       name="save"
                       onclick="return check_form('ConfigureSettings');"
                       value="  {$app_strings['LBL_SAVE_BUTTON_LABEL']}  " >
                &nbsp;<input title="{$mod_strings['LBL_CANCEL_BUTTON_TITLE']}"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  {$app_strings['LBL_CANCEL_BUTTON_LABEL']}  " >
EOQ;

$sugar_smarty->assign("BUTTONS",$buttons);

$sugar_smarty->display('custom/modules/Administration/CreateAdmin.tpl');

$javascript = new javascript();
$javascript->setFormName('ConfigureSettings');
echo $javascript->getScript();

function getRegFieldOptions($name,$cfg){
    if(!empty($cfg->config['create']['registration_fields'][$name])){
        return $cfg->config['create']['registration_fields'][$name];
    }
    return array('registration'=>'','profile'=>'','enrollment'=>'');
}


require_once ('modules/ModuleBuilder/parsers/ModuleBuilderParser.php');

/**
 *
 * _writeToFile - IJD86
 *
 * This function has been taken from else where SuiteCRM, to write to a file.
 *
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



//javascript to update fields depending on the layout which is selected.

?>
<script language="Javascript" type="text/javascript">


    function update_fields(object){
        //console.log(object);

        $.ajax({
            url: "index.php?entryPoint=layout",
            data: $("#ConfigureSettings").serialize()
        }).done(function(msg) {

            var result = $.parseJSON(msg);

            $("#field_list").html(result.field_list);
            $("#create_result").html(result.message);
            //location.reload(true);
        });
    }
    $( document ).ready(function() {
        // Handler for .ready() called.
        update_fields("");
    });


</script>



