<?php

/*** DOMAIN_CHECK ***/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');require_once 'modules/Home/Dashlets/iFrameDashlet/iFrameDashlet.php';include_once "modules/AnalyticReporting/controllers/libs.php";class WidgetDashlet extends iFrameDashlet {protected $_seedName = 'AnalyticReporting';public $selectedReport;function displayOptions() {$id = substr($this->url, strpos($this->url, "&record=") + 8);$this->selectedReport = (int)$id;$ZZZZZZZZZZZZZZZZZZZZr17 = new Sugar_Smarty();$ZZZZZZZZZZZZZZZZZZZZr17->assign('title',translate('LBL_TITLE','Charts'));$ZZZZZZZZZZZZZZZZZZZZr17->assign('save',$GLOBALS['app_strings']['LBL_SAVE_BUTTON_LABEL']);$ZZZZZZZZZZZZZZZZZZZZr17->assign('clear',$GLOBALS['app_strings']['LBL_CLEAR_BUTTON_LABEL']);$ZZZZZZZZZZZZZZZZZZZZr17->assign('id', $this->id);$ZZZZZZZZZZZZZZZZZZZZr17->assign('searchFields', $this->currentSearchFields);$ZZZZZZZZZZZZZZZZZZZZr17->assign('dashletTitle', $this->title);$ZZZZZZZZZZZZZZZZZZZZr17->assign('heightLBL', translate('LBL_DASHLET_OPT_HEIGHT', 'Home'));$ZZZZZZZZZZZZZZZZZZZZr17->assign('height', $this->height);$ZZZZZZZZZZZZZZZZZZZZr17->assign('selectedReport', $this->selectedReport);$ZZZZZZZZZZZZZZZZZZZZr17->assign('dashletType', 'predefined_chart');$ZZZZZZZZZZZZZZZZZZZZr17->assign('module', $_REQUEST['module']);$ZZZZZZZZZZZZZZZZZZZZr17->assign('showClearButton', $this->isConfigPanelClearShown);if($this->isAutoRefreshable()) {$ZZZZZZZZZZZZZZZZZZZZr17->assign('isRefreshable', true);$ZZZZZZZZZZZZZZZZZZZZr17->assign('autoRefresh', $GLOBALS['app_strings']['LBL_DASHLET_CONFIGURE_AUTOREFRESH']);$ZZZZZZZZZZZZZZZZZZZZr17->assign('autoRefreshOptions', $this->getAutoRefreshOptions());$ZZZZZZZZZZZZZZZZZZZZr17->assign('autoRefreshSelect', $this->autoRefresh);} $ZZZZZZZZZZZZZZZZZZZZZm12 = new ZZZZZZQ1616();$ZZZZS1818 = new ZZZZT1919();$ZZZZZZZZZZZZZZZZZZZZZn13 = $ZZZZZZZZZZZZZZZZZZZZZm12->ZZZZR1717(PlatformConnector::ZZZZZZe4());$ZZZZZZZZZZZZZZZZZZZZZn13 = $ZZZZS1818->ZZZZZP1515($ZZZZZZZZZZZZZZZZZZZZZn13, 0);$ZZZZZZZZZZZZZZZZZZZZr17->assign('reportNamesForTemplates', $ZZZZZZZZZZZZZZZZZZZZZn13);;return $ZZZZZZZZZZZZZZZZZZZZr17->fetch('modules/AnalyticReporting/Dashlets/WidgetDashlet/WidgetDashletConfigure.tpl');} function saveOptions($ZZZZZZZZZZZZZZZZZZZZZo14) {$ZZZJ99 = array();$ZZZZZZZZZZZZZZZZZZZZZm12 = new ZZZZZZQ1616();$ZZZZZZZZZZZZZZZZZZZZZn13 = $ZZZZZZZZZZZZZZZZZZZZZm12->ZZZZR1717(PlatformConnector::ZZZZZZe4());if($ZZZZZZZZZZZZZZZZZZZZZo14['dashletTitle'] == "Generic Dashlet" || $this->title == $ZZZZZZZZZZZZZZZZZZZZZo14['dashletTitle']){foreach ($ZZZZZZZZZZZZZZZZZZZZZn13 as $ZZZZZZZZZZZZZZZZZZZZZp15) {if($ZZZZZZZZZZZZZZZZZZZZZp15['id'] == $ZZZZZZZZZZZZZZZZZZZZZo14['selectedReport']){$ZZZZZZZZZZZZZZZZZZZZZo14['dashletTitle'] = $ZZZZZZZZZZZZZZZZZZZZZp15['title'];break;}}} if (isset($ZZZZZZZZZZZZZZZZZZZZZo14['height'])) {$ZZZJ99['height'] = (int)$ZZZZZZZZZZZZZZZZZZZZZo14['height'];} $ZZZJ99['title'] = $ZZZZZZZZZZZZZZZZZZZZZo14['dashletTitle'];$ZZZJ99['autoRefresh'] = empty($ZZZZZZZZZZZZZZZZZZZZZo14['autoRefresh']) ? '0' : $ZZZZZZZZZZZZZZZZZZZZZo14['autoRefresh'];$ZZZJ99['url'] = PlatformConnector::getUrl()."?module=AnalyticReporting&action=widget&record={$ZZZZZZZZZZZZZZZZZZZZZo14['selectedReport']}";return $ZZZJ99;} function display() {if(strpos($this->url, 'AnalyticReporting') === false){return '<div align="center"><h2>Select report from options</h2></div>';} return parent::display();} function displayScript(){}}