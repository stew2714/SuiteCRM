<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 22/08/17
 * Time: 14:33
 */

require_once ("include/EditView/EditView2.php");
require_once ("include/Sugar_Smarty.php");
$params = "";
if(isset($_REQUEST['post_data']) && !empty($_REQUEST['post_data'])){
    parse_str($_REQUEST['post_data'], $params);
}
$id = (isset($params['record']) && !empty($params['record'])) ? $params['record'] : "";

if($params['module'] == "" || $params['module'] == "LayoutRules"){
    echo json_encode(array( "found" => false,  "layout" => "" ));
}



$Editview =  new EditView();
$metadataFile = "custom/modules/Opportunities/metadata/editviewdefs.php";
$bean = BeanFactory::getBean($params['module'], $id);
$bean = populateFromRow($bean, $params);
$bean->id = $id; //reload id into bean.

$layoutRules = BeanFactory::getBean("LayoutRules");
$metadataFileArray = $layoutRules->fetchLayout($bean, $metadataFile, "editviewdefs");
//if($metadataFile != $metadataFileArray['file']){
    $metadataFile = $metadataFileArray['file'];
    $Editview->ss = new Sugar_Smarty();
    $Editview->viewObject = (!empty($GLOBALS['current_view'])) ? $GLOBALS['current_view'] : new SugarView();
    $Editview->viewObject->module = "Opportunities";
    $Editview->viewObject->bean = $bean;
    $Editview->viewObject->action = "EditView";
    $Editview->setup($bean->module_name, $bean, $metadataFile, get_custom_file_if_exists('include/EditView/EditView.tpl'));
    $Editview->process("false", "EditView");

    echo json_encode(array( "found" => true,  "layout" => $Editview->display( true ) ));
//}else{
//    echo json_encode(array( "found" => false,  "layout" => "" ));
//}




function populateFromRow($bean, $row)
{
    $null_value = '';
    foreach ($bean->field_defs as $field => $field_value) {
        if (($field == 'user_preferences' && $bean->module_dir == 'Users') || ($field == 'internal' && $bean->module_dir == 'Cases')) {
            continue;
        }
        if (isset($row[$field])) {
            $bean->$field = $row[$field];
            $owner = $field . '_owner';
            if (!empty($row[$owner])) {
                $bean->$owner = $row[$owner];
            }
        }
    }
    return $bean;
}
