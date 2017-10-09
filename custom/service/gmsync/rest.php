<?php
if(!defined('sugarEntry'))define('sugarEntry', true);

    $webservice_path = 'service/core/SugarRestService.php';
    $webservice_class = 'SugarRestService';
    $webservice_impl_class = 'gmsync';
    $registry_path = 'custom/service/gmsync/registry.php';
    $registry_class = 'gmsync';
    $location = 'custom/service/gmsync/rest.php';
    // Side effect of webservice.php is cd to htdocs dir.
    require_once('../../../service/core/webservice.php');

    ?>