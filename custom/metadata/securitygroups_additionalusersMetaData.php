<?php
$dictionary['securitygroups_additionalusers'] = array (
    'table' => 'securitygroups_additionalusers', 
    'fields' => array (
        array('name' =>'id', 'type' =>'char', 'len'=>'36', 'required'=>true, 'default'=>'')
      , array('name' =>'user_id', 'type' =>'char', 'len'=>'36')
      , array('name' =>'record_id', 'type' =>'char', 'len'=>'36')
      , array('name' =>'module', 'type' =>'char', 'len'=>'36')
      , array('name' =>'date_modified','type' => 'datetime')
      , array('name' =>'modified_user_id', 'type' =>'char', 'len'=>'36')
      , array('name' =>'created_by', 'type' =>'char', 'len'=>'36')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'required'=>true, 'default'=>'0')
    ),
    'indices' => array (
       array('name' =>'securitygroups_additionaluserspk', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_securitygroups_additionalusers', 'type' =>'index', 'fields'=>array('user_id', 'record_id', 'module', 'deleted')),
    ),
);
