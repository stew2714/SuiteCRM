<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 22/08/17
 * Time: 14:33
 */

require_once ("include/EditView/EditView2.php");
require_once ("include/Sugar_Smarty.php");


$Editview =  new EditView();
$metadataFile = "custom/modules/Opportunities/metadata/editviewdefs.php";
$bean = BeanFactory::getBean("Opportunities");
$Editview->ss = new Sugar_Smarty();
$Editview->viewObject = (!empty($GLOBALS['current_view'])) ? $GLOBALS['current_view'] : new SugarView();
$Editview->viewObject->module = "Opportunities";
$Editview->viewObject->bean = BeanFactory::getBean("Opportunities");
$Editview->viewObject->action = "EditView";
$Editview->setup($bean->module_name, $bean, $metadataFile, get_custom_file_if_exists('include/EditView/EditView.tpl'));

echo json_encode(array( $Editview->display( true ) ));