<?php
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

require_once('include/parsecsv.lib.php');
require_once("ModuleInstall/ModuleInstaller.php");

class convertCSV
{
    public function __construct($fileLocation)
    {
        $csv = new parseCSV();
        $csv->auto($fileLocation);
        $this->translateColumns($csv->data);
    }

    public function translateColumns($vardefs)
    {
        foreach ($vardefs as $vardef) {
            $return = $this->cleanColumn($vardef['column']);

            echo '<pre>';
            print_r($return);
            echo '</pre>';
        }
    }

    public function cleanColumn($columns)
    {
        $vardef = array();
        $columns = trim($columns);
        $columns = explode(" ", $columns);

        // Replace double underscores with single underscores (salesforce conversion)
        $columns[0] = preg_replace('/[_]+/', '_', $columns[0]);

        // Set the name for the new vardef
        $vardef['name'] = $columns[0];

        // Run the type through the parsing function
        $type = $this->cleanType($columns[1]);

        // Associate the Type
        if (isset($type[0]) && !empty($type[0])) {
            $vardef['type'] = $type[0];
        }

        // Associate the Length
        if (isset($type[1]) && !empty($type[1])) {
            $vardef['len'] = $type[1];
        }

        // Associate the Label Reference
        $vardef['vname'] = "LBL_" . strtoupper($vardef['name']);

        // Generate the Label for English
        $vardef['label_english'] = $this->makeLabel($vardef['name']);

        // Module Name
        $vardef['module'] = "sa_Fluency_One";

        $result = $this->buildVardef($vardef);

        return $vardef;
    }

    public function cleanType($type)
    {
        $type = str_replace(array('(', ')'), ' ', $type);
        $type_array = explode(" ", $type);

        for ($i = 0; $i < count($type_array); $i++) {
            if ($i == 0) {
                $type_array[0] = preg_replace('/[^a-zA-Z0-9\']/', '', $type_array[0]);
                $type_array[0] = $this->convertTypeName($type_array[0],$type_array[1]);
            }

            $type_array[$i] = preg_replace('/[^A-Za-z0-9\-]/', '', $type_array[$i]);
        }

        $type_array = array_filter($type_array);

        return $type_array;
    }

    public function convertTypeName($type,$length)
    {
        if ($type == "numeric") {
            $type = "int";
        } elseif ($type == "real") {
            $type = "float";
        } elseif ($type == "varchar" && $length >= 255) {
            $type = "text";
        } elseif ($type == "timestamp") {
            $type = "datetime";
        }

        return $type;
    }

    function makeLabel($name)
    {
        $label = ucwords(str_replace("_", " ", $name));
        return $label;
    }

    public function buildVardef($vardef)
    {
        $result = $this->install_custom_fields(array($vardef));

        return $result;
    }

    public function install_custom_fields($fields)
    {
        global $beanList, $beanFiles;
        include('include/modules.php');
        require_once('modules/DynamicFields/FieldCases.php');
        foreach ($fields as $field) {
            $installed = false;
            if (isset($beanList[$field['module']])) {
                $class = $beanList[$field['module']];
                if (!isset($field['ext4'])) $field['ext4'] = '';
                if (!isset($field['mass_update'])) $field['mass_update'] = 0;
                if (!isset($field['duplicate_merge'])) $field['duplicate_merge'] = 0;
                if (!isset($field['help'])) $field['help'] = '';

                //extra vardefs which are added, if its not set.
                if (!isset($field['display_default'])) $field['display_default'] = '';
                if (!isset($field['options'])) $field['options'] = '';
                if (!isset($field['merge_filter'])) $field['merge_filter'] = '';
                if (!isset($field['ext2'])) $field['ext2'] = '';
                if (!isset($field['ext3'])) $field['ext3'] = '';
                if (!isset($field['full_text_search'])) $field['full_text_search'] = '';
                if (!isset($field['trigger'])) $field['trigger'] = '';
                if (!isset($field['action'])) $field['action'] = '';
                if (!isset($field['visibility_grid'])) $field['visibility_grid'] = '';
                if (!isset($field['comments'])) $field['comments'] = '';
                if (!isset($field['duplicate_merge_dom_value'])) $field['duplicate_merge_dom_value'] = '';

                if (!isset($field['default_value'])) $field['default_value'] = '';
                if (!isset($field['default'])) $field['default'] = '';
                if (!isset($field['enable_range_search'])) $field['enable_range_search'] = '';
                if (!isset($field['len'])) $field['len'] = '255';

                if (!isset($field['source'])) $field['source'] = 'custom_fields';

                //Merge contents of the sugar field extension if we copied one over
                if (file_exists("custom/Extension/modules/{$field['module']}/Ext/Vardefs/sugarfield_{$field['name']}.php")) {
                    $dictionary = array();
                    include("custom/Extension/modules/{$field['module']}/Ext/Vardefs/sugarfield_{$field['name']}.php");
                    $obj = BeanFactory::getObjectName($field['module']);
                    if (!empty($dictionary[$obj]['fields'][$field['name']])) {
                        $field = array_merge($dictionary[$obj]['fields'][$field['name']], $field);
                    }
                }

                if (file_exists($beanFiles[$class])) {
                    require_once($beanFiles[$class]);
                    $mod = new $class();
                    $installed = true;
                    $fieldObject = get_widget($field['type']);
                    $fieldObject->populateFromRow($field);
                    //$mod->custom_fields->use_existing_labels =  true;
                    //$mod->custom_fields->addFieldObject($fieldObject);
                    $this->saveExtendedAttributes($fieldObject);
                }
            }
            if (!$installed) {
                $GLOBALS['log']->debug('Could not install custom field ' . $field['name'] . ' for module ' . $field['module'] . ': Module does not exist');
            } else {
//                echo "<code>" . print_r($field) . '</code>';
            }
        }
    }

    public function saveExtendedAttributes($field)
    {
        require_once('modules/ModuleBuilder/parsers/StandardField.php');
        require_once('modules/DynamicFields/FieldCases.php');
        global $beanList;

        $to_save = array();
        $base_field = get_widget($field->type);

        foreach ($field->vardef_map as $property => $fmd_col) {
            $to_save[$property] = is_string($field->$property) ? htmlspecialchars_decode($field->$property, ENT_QUOTES) : $field->$property;
        }

        $bean_name = $beanList[$field->module];

        // Fix for missing labels in studio.

        if (!isset($to_save['vname'])) {
            $to_save['vname'] = $to_save['label'];
            unset($to_save['label']);
        }

        $this->writeVardefExtension($bean_name, $field, $to_save);
    }

    public function writeVardefExtension($bean_name, $field, $def_override)
    {
        //Hack for the broken cases module
        $vBean = $bean_name == "aCase" ? "Case" : $bean_name;
        $file_loc = "custom/Extension/modules/{$field->module}/Ext/Vardefs/sugarfield_{$field->name}.php";
        $language_loc = "custom/Extension/modules/{$field->module}/Ext/Language/en_us.imported_custom_fields.php";
        $language_out = "";

        $out = "<?php\n // Vardefs from Fields_meta_data table - created: \n";
        //$out =  "<?php\n // Vardefs from Fields_meta_data table - created: " . date('Y-m-d H:i:s') . "\n";

        foreach ($def_override as $property => $val) {
            $out .= override_value_to_string_recursive(array($vBean, "fields", $field->name, $property), "dictionary", $val) . "\n";
        }

        $out .= override_value_to_string_recursive(array($vBean, "fields", $field->name, "source"), "dictionary", $field->source) . "\n";
        $out .= "\n ?>";

        if (!file_exists($language_loc)) {
            $language_out .= "<?php \n";
        }

        $language_out .= "\$mod_strings['$field->vname'] = '$field->label_english';\n";

        if (!file_exists("custom/Extension/modules/{$field->module}/Ext/Vardefs")) {
            mkdir_recursive("custom/Extension/modules/{$field->module}/Ext/Vardefs");
        }

        if (!file_exists("custom/Extension/modules/{$field->module}/Ext/Language")) {
            mkdir_recursive("custom/Extension/modules/{$field->module}/Ext/Language");
        }


        file_put_contents($language_loc, $language_out , FILE_APPEND | LOCK_EX);

        if ($fh = @sugar_fopen($file_loc, 'w')) {
            fputs($fh, $out);
            fclose($fh);

            return true;
        } else {
            return false;
        }
    }
}