<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Creates the runtime database connection.
 ********************************************************************************/

require_once("include/javascript/javascript.php");
class customJavascript extends javascript {

	function __construct(){
		parent::__construct();
	}

    function addField($field,$required, $prefix='', $displayField='', $translate = false){
        if ($field == "id") return;
        if(isset($this->sugarbean->field_name_map[$field]['vname'])){
            $vname = $this->sugarbean->field_name_map[$field]['vname'];
            if ( $translate )
                $module = "";
                if($this->sugarbean->field_name_map[$field]['moduleCore']){
                    $module = $this->sugarbean->field_name_map[$field]['moduleCore'];
                }
                $vname = $this->buildStringToTranslateInSmarty($this->sugarbean->field_name_map[$field]['vname'],
                                                               $module );
            if(empty($required)){
                if(isset($this->sugarbean->field_name_map[$field]['required']) && $this->sugarbean->field_name_map[$field]['required']){
                    $required = 'true';
                }else{
                    $required = 'false';
                }
                if(isset($this->sugarbean->required_fields[$field]) && $this->sugarbean->required_fields[$field]){
                    $required = 'true';
                }
                if($field == 'id'){
                    $required = 'false';
                }

            }
            if(isset($this->sugarbean->field_name_map[$field]['validation'])){
                switch($this->sugarbean->field_name_map[$field]['validation']['type']){
                    case 'range':
                        $min = false;
                        $max = false;
                        if(isset($this->sugarbean->field_name_map[$field]['validation']['min'])){
                            $min = filter_var($this->sugarbean->field_name_map[$field]['validation']['min'], FILTER_VALIDATE_INT);
                        }
                        if(isset($this->sugarbean->field_name_map[$field]['validation']['max'])){
                            $max = filter_var($this->sugarbean->field_name_map[$field]['validation']['max'], FILTER_VALIDATE_INT);
                        }
                        if ($min !== false && $max !== false && $min > $max)
                        {
                            $max = $min;
                        }
                        if(!empty($displayField)){
                            $dispField = $displayField;
                        }
                        else{
                            $dispField = $field;
                        }
                        $this->addFieldRange($dispField,$this->sugarbean->field_name_map[$field]['type'],$vname,$required,$prefix, $min, $max );
                        break;
                    case 'isbefore':
                        $compareTo = $this->sugarbean->field_name_map[$field]['validation']['compareto'];
                        if(!empty($displayField)){
                            $dispField = $displayField;
                        }
                        else{
                            $dispField = $field;
                        }
                        if(!empty($this->sugarbean->field_name_map[$field]['validation']['blank']) && $this->sugarbean->field_name_map[$field]['validation']['blank'])
                            $this->addFieldDateBeforeAllowBlank($dispField,$this->sugarbean->field_name_map[$field]['type'],$vname,$required,$prefix, $compareTo );
                        else $this->addFieldDateBefore($dispField,$this->sugarbean->field_name_map[$field]['type'],$vname,$required,$prefix, $compareTo );
                        break;
                    // Bug #47961 Adding new type of validation: through callback function
                    case 'callback' :
                        $dispField = $displayField ? $displayField : $field;
                        $this->addFieldCallback($dispField, $this->sugarbean->field_name_map[$field]['type'], $vname, $required, $prefix, $this->sugarbean->field_name_map[$field]['validation']['callback']);
                        break;
                    default:
                        if(!empty($displayField)){
                            $dispField = $displayField;
                        }
                        else{
                            $dispField = $field;
                        }

                        $type = (!empty($this->sugarbean->field_name_map[$field]['custom_type']))?$this->sugarbean->field_name_map[$field]['custom_type']:$this->sugarbean->field_name_map[$field]['type'];

                        $this->addFieldGeneric($dispField,$type,$vname,$required,$prefix );
                        break;
                }
            }else{
                if(!empty($displayField)){
                    $dispField = $displayField;
                }
                else{
                    $dispField = $field;
                }
                $type = (!empty($this->sugarbean->field_name_map[$field]['custom_type']))?$this->sugarbean->field_name_map[$field]['custom_type']:$this->sugarbean->field_name_map[$field]['type'];
                if(!empty($this->sugarbean->field_name_map[$dispField]['isMultiSelect']))$dispField .='[]';
                $this->addFieldGeneric($dispField,$type,$vname,$required,$prefix );
            }
        }else{
            $GLOBALS['log']->debug('No VarDef Label For ' . $field . ' in module ' . $this->sugarbean->module_dir );
        }

    }

    function buildStringToTranslateInSmarty(
        $string,
        $module = null
    )
    {
        if(empty($module)){
            $module = $this->sugarbean->module_dir;
        }
        if ( is_array($string) ) {
            $returnstring = '';
            foreach ( $string as $astring )
                $returnstring .= $this->buildStringToTranslateInSmarty($astring);
            return $returnstring;
        }
        return "{/literal}{sugar_translate label='$string' module='{$module}' for_js=true}{literal}";
    }
}
?>
