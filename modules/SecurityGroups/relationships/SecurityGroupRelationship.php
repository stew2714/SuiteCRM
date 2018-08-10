<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/ModuleBuilder/parsers/relationships/ManyToManyRelationship.php' ;

class SecurityGroupRelationship extends ManyToManyRelationship
{
	/**
	 * Original from AbstractRelationshipo
	 */
    function getRelationshipMetaData ($relationshipType, $checkExisting = true)
    {
    	$GLOBALS['log']->debug("In SecurityGroupRelationship->getRelationshipMetaData");
    	
    	$ret_prop = parent::getRelationshipMetaData($relationshipType,$checkExisting);
    	
    	//get rid of the crap we don't want
    	unset($ret_prop['table']);
    	unset($ret_prop['fields']);
    	unset($ret_prop['indices']);

		//swap some stuff around to hook up Security Groups properly
		$relationshipName = $this->definition [ 'relationship_name' ] ;
		$lhs_module 	= $ret_prop['relationships'][$relationshipName]['rhs_module'];
		$lhs_table 		= $ret_prop['relationships'][$relationshipName]['rhs_table'];
		$lhs_key 		= $ret_prop['relationships'][$relationshipName]['rhs_key'];
		$ret_prop['relationships'][$relationshipName]['rhs_module'] 	= $ret_prop['relationships'][$relationshipName]['lhs_module'];
		$ret_prop['relationships'][$relationshipName]['rhs_table'] 		= $ret_prop['relationships'][$relationshipName]['lhs_table'];
		$ret_prop['relationships'][$relationshipName]['rhs_key'] 		= $ret_prop['relationships'][$relationshipName]['lhs_key'];
		$ret_prop['relationships'][$relationshipName]['lhs_module'] 	= $lhs_module;
		$ret_prop['relationships'][$relationshipName]['lhs_table'] 		= $lhs_table;
		$ret_prop['relationships'][$relationshipName]['lhs_key'] 		= $lhs_key;
		$ret_prop['relationships'][$relationshipName]['join_table'] 	= 'securitygroups_records'; 
		$ret_prop['relationships'][$relationshipName]['join_key_lhs'] 	= 'securitygroup_id'; 
		$ret_prop['relationships'][$relationshipName]['join_key_rhs'] 	= 'record_id'; 
		$ret_prop['relationships'][$relationshipName]['join_key_rhs'] 	= 'record_id'; 
		$ret_prop['relationships'][$relationshipName]['relationship_role_column'] = 'module'; 
		$ret_prop['relationships'][$relationshipName]['relationship_role_column_value'] = $ret_prop['relationships'][$relationshipName]['rhs_module']; 
        
    	return $ret_prop;
    }

	/**
	 * We want to unset the top button quick create
	 */
    protected function getSubpanelDefinition ($relationshipName , $sourceModule , $subpanelName, $titleKeyName = '', $source = "")
    {
    	$GLOBALS['log']->debug("In SecurityGroupRelationship->getRelationshipMetaData");
    	
    	$sub_def = parent::getSubpanelDefinition($relationshipName , $sourceModule , $subpanelName, $titleKeyName, $source);
    	
    	//get rid of the crap we don't want
    	$sub_def[0]['top_buttons'] = array(
		    //array('widget_class' => "SubPanelTopButtonQuickCreate"), //we don't want this
		    array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect')
		);
    	return $sub_def;
    
    }
    
}