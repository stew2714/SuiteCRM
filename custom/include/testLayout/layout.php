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

$Editview =  new EditView();
$metadataFile = "custom/modules/Opportunities/metadata/1b9cebd1-f749-07f1-86eb-599d9472472b/editviewdefs.php";
$bean = BeanFactory::getBean("Opportunities", $id);
$bean->loadFromRow($params);
$Editview->ss = new Sugar_Smarty();
$Editview->viewObject = (!empty($GLOBALS['current_view'])) ? $GLOBALS['current_view'] : new SugarView();
$Editview->viewObject->module = "Opportunities";
$Editview->viewObject->bean = $bean;
$Editview->viewObject->action = "EditView";
$Editview->setup($bean->module_name, $bean, $metadataFile, get_custom_file_if_exists('include/EditView/EditView.tpl'));
$Editview->process("false", "EditView");
echo json_encode(array( $Editview->display( true ) ));