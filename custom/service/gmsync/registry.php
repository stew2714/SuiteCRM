<?php
    require_once('custom/service/gmsync/gmsync.php');

    require_once('service/v4_1/registry.php');
    class registry_gmsync extends registry_v4_1
    {
        protected function registerFunction()
        {
            parent::registerFunction();
            $this->serviceClass->registerFunction('example_method', array('session'=>'xsd:string'), array('return'=>'xsd:string'));
            $this->serviceClass->registerFunction('gmsync_version', array(), array('return'=>'xsd:string'));
            $this->serviceClass->registerFunction('get_attendee_list_with_accept_status', array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'id'=>'xsd:string'), array('return'=>'xsd:string'));
            
            $this->serviceClass->registerFunction('gmsync_sudo_user', array('session'=>'xsd:string', 'user_name'=>'xsd:string', 'license_check'=>'xsd:int'), array('return'=>'tns:error_value'));
            
        }
    }
?>