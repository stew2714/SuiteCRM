<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 22/08/17
 * Time: 14:33
 */

require_once ("include/EditView/EditView2.php");
require_once ("include/Sugar_Smarty.php");
require_once ("include/EditView/SubpanelQuickCreate.php");

global $current_user;

if($_REQUEST['this_view'] == "EditView"){
    $view = "editviewdefs";
}else{
    $view = "quickcreatedefs";
}
$params = "";
if(isset($_REQUEST['post_data']) && !empty($_REQUEST['post_data'])){
    parse_str($_REQUEST['post_data'], $params);
}
$id = (isset($params['record']) && !empty($params['record'])) ? $params['record'] : "";

$array =
    array(
        "LayoutRules",
        "Users",
        "Employees",
        "AOR_Reports",
        "AOW_WorkFlow",
        "SharedSecurityRules",
        "AOR_MatrixReporting",
        "Schedulers",
        "AOR_Scheduled_Reports",
        "Documents",
        "Notes",
        "Meetings",
        "Calls"
    );
if($params['module'] == "" || in_array($params['module'], $array)){
    echo json_encode(array( "found" => false,  "layout" => "" ));
}
$metadataFile = "custom/modules/{$params['module']}/metadata/{$view}.php";
$bean = BeanFactory::getBean($params['module'], $id);
$layoutRules = BeanFactory::getBean("LayoutRules");
$bean = $layoutRules->populateFromRequest($bean, $params);
$bean->id = $id; //reload id into bean.
$metadataFileArray = $layoutRules->fetchLayout($bean, $metadataFile, $view);
$metadataFile = $metadataFileArray['file'];
$_SESSION['groupLayout'] = $metadataFileArray['id'];

if($_REQUEST['this_view'] == "EditView"){
    loadEditview($bean, $metadataFile);
}else{
    loadQuickCreateView($bean, "QuickCreate");
}


function loadEditview($bean, $metadataFile){

    $Editview =  new EditView();


    $Editview->ss = new Sugar_Smarty();
    $Editview->viewObject = (!empty($GLOBALS['current_view'])) ? $GLOBALS['current_view'] : new SugarView();
    $Editview->viewObject->module = "Opportunities";
    $Editview->viewObject->bean = $bean;
    $Editview->viewObject->action = "EditView";
    $Editview->setup($bean->module_name, $bean, $metadataFile, get_custom_file_if_exists('include/EditView/EditView.tpl'));
    $Editview->process("false", "EditView");

    echo json_encode(array( "found" => true, "div" => "pagecontent",  "layout" => $Editview->display( true )
                     ));
}

function loadQuickCreateView($bean, $view){
    ob_start();
    require_once('include/EditView/SubpanelQuickCreate.php');
    $sqc  = new SubpanelQuickCreate($bean->module_name, $view);
    $out1 = ob_get_contents();
    ob_end_clean();
    $module = strtolower($bean->module_name);
    echo json_encode(array( "found" => true, "div" => "subpanel_{$module}_newDiv",  "layout" => $out1 ));
}