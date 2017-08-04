<?php
/*********************************************************************************
 * Import Script for fields from a single CSV.
 *
 *
 * Importing from a CSV this script will not handle the following fields in the CSV.
 * Anything that is added as custom work (bottom of the script) will be taken
 * above the items below.
 *
 * name
 * vname
 * comments
 * help
 * module
 * type
 * len
 * required
 * default_value
 * audited
 * massupdate
 * duplicate_merge
 * reportable
 * importable
 * source
 * label
 *
 * OneFile - default is false, it will import all fields into one file rather
 * than separate ones. it will however check the studio file to see if this
 * field has settings to be included.
 *
 * module - if this is set and not set in the csv it will import all
 * fields into this module, if it is set for the field then it will
 * ignore this value
 *
 * exempt - array of fields which will not be changed by the
 * importer even if given in the CSV.
 *
 *
 *
 * Todo
 *
 * 1 - Add support for changing labels using import script.
 ********************************************************************************/

require_once('include/parsecsv.lib.php');
require_once("ModuleInstall/ModuleInstaller.php");

class convertCSV
{
    private $version = "V0.1";
    var $oneFile = false;
    var $module = "";
    var $source = "custom_fields";
    var $exempt = array("id", "name", "id_c");
    var $csv = "";

    /**
     *
     * convertCSV constructor.
     * @param $fileLocation
     */
    public function __construct($fileLocation)
    {
        $this->fileLocation = $fileLocation;
        $this->csv = new parseCSV();
        $this->csv->auto($this->fileLocation);
    }

    /**
     * Kick off the import of fields.
     *
     */
    public function import()
    {
        foreach ($this->csv->data as $vardef) {
            $this->cleanColumn($vardef);
        }
    }

    /**
     * Clean Columns and try and place the settings into the array, call custom function for developers.
     *
     * @param $vardefs
     * @return array|bool|string
     */
    public function cleanColumn($vardefs)
    {

        $vardef = $this->customClean($vardefs);
        if($vardef == false){
            return '';
        }
        //lets do a clean.
        if (isset($vardefs['name']) && !empty($vardefs['name'])) {
            $vardef['name'] = $vardefs['name'];
        }
        //now we have vardef name
        if(substr($vardef['name'], -2) !== "_c" && $this->source == "custom_fields"){
            $vardef['name'] .= "_c";
        }

        if (isset($vardefs['vname']) && !empty($vardefs['vname'])) {
            $vardef['vname'] = $vardefs['vname'];
        } else {
            // Guess the label.
            $vardef['vname'] = "LBL_" . strtoupper($vardef['name']);
        }
        if (isset($vardefs['comments']) && !empty($vardefs['comments'])) {
            $vardef['comments'] = $vardefs['comments'];
        }
        if (isset($vardefs['help']) && !empty($vardefs['help'])) {
            $vardef['help'] = $vardefs['help'];
        }
        if (isset($vardefs['module']) && !empty($vardefs['module'])) {
            $vardef['module'] = $this->decodeModule($vardefs['module']);
        } elseif (!empty($this->module)) {
            $vardef['module'] = $this->module;
        }
        if (isset($vardefs['type']) && !empty($vardefs['type'])) {
            $vardef['type'] = $vardefs['type'];
        }
        if (isset($vardefs['len']) && !empty($vardefs['len'])) {
            $vardef['len'] = $vardefs['len'];
        }
        if (isset($vardefs['required']) && !empty($vardefs['required'])) {
            $vardef['required'] = $vardefs['required'];
        }
        if (isset($vardefs['default_value']) && !empty($vardefs['default_value'])) {
            $vardef['default_value'] = $vardefs['default_value'];
        }
        if (isset($vardefs['audited']) && !empty($vardefs['audited'])) {
            $vardef['audited'] = $vardefs['audited'];
        }
        if (isset($vardefs['massupdate']) && !empty($vardefs['massupdate'])) {
            $vardef['massupdate'] = $vardefs['massupdate'];
        }
        if (isset($vardefs['duplicate_merge']) && !empty($vardefs['duplicate_merge'])) {
            $vardef['duplicate_merge'] = $vardefs['duplicate_merge'];
        }
        if (isset($vardefs['reportable']) && !empty($vardefs['reportable'])) {
            $vardef['reportable'] = $vardefs['reportable'];
        }
        if (isset($vardefs['importable']) && !empty($vardefs['importable'])) {
            $vardef['importable'] = $vardefs['importable'];
        }
        if (isset($vardefs['source']) && !empty($vardefs['source']) ) {
            $vardef['source'] = $vardefs['source'];
        }
        if (isset($vardefs['options']) && !empty($vardefs['options']) ) {
            $vardef['options'] = $vardefs['options'];
        }

        if (isset($vardefs['label']) && !empty($vardefs['label'])) {
            $vardef['label_english'] = $vardefs['label'];
        } else {
            // Generate best guess label from field.
            $vardef['label_english'] = $this->makeLabel($vardef['name']);
        }

        if (!empty($vardef['module']) && !in_array($vardef['name'], $this->exempt)) {
            $result = $this->install_custom_fields(array($vardef));
            return $vardef;
        }
        return "";
    }


    /**
     *
     * Take a best guess at creating the label.
     * @param $name
     * @return string
     */
    function makeLabel($name)
    {
        $label = ucwords(str_replace("_", " ", $name));
        $label = rtrim($label, 'C');
        return trim($label);
    }

    /**
     *
     * Fill in the missing gaps of the vardef entries.
     *
     * @param $fields
     */
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

                if (($field['type'] == "datetime")) {
                    $field['type'] = 'datetimecombo';
                    $field['dbType'] = 'datetime';
                }

                if (!isset($field['duplicate_merge_dom_value'])) $field['duplicate_merge_dom_value'] = '';

                if (!isset($field['default_value'])) $field['default_value'] = '';
                if (!isset($field['default'])) $field['default'] = '';
                if (!isset($field['enable_range_search'])) $field['enable_range_search'] = '';
                if (!isset($field['len'])) $field['len'] = '255';

                if (!isset($field['source'])) $field['source'] = $this->source;

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
                    //$fieldObject = array_filter($fieldObject, function($v){return array_filter($v) == array();});;
                    $fieldObject = (object)array_filter((array)$fieldObject);
                    $this->saveExtendedAttributes($fieldObject);
                }
            }
            if (!$installed) {
                echo "<b>Failed</b> : " . $field['name'] . "<br>";
                $GLOBALS['log']->debug('Could not install custom field ' . $field['name'] . ' for module ' . $field['module'] . ': Module does not exist');
            } else {
                echo "Installed Field : <b>" . $field['name'] . "</b> into Module : <b>" . $field['module'] . "</b><br>";
            }
        }
    }

    /**
     *
     * filter the vardefs and make sure that the module in question is ready to accept new custom fields.
     *
     * @param $field
     */
    public function saveExtendedAttributes($field)
    {
        require_once('modules/ModuleBuilder/parsers/StandardField.php');
        require_once('modules/DynamicFields/FieldCases.php');
        global $beanList;

        $to_save = array();
        $base_field = get_widget($field->type);
        if (isset($field->dbType)) {
            $field->vardef_map['dbType'] = "dbType";
        }
        foreach ($field->vardef_map as $property => $fmd_col) {
            if (!empty($field->$property)) {
                $to_save[$property] = is_string($field->$property) ? htmlspecialchars_decode($field->$property, ENT_QUOTES) : $field->$property;
            }
        }
        $bean_name = $beanList[$field->module];

        // Fix for missing labels in studio.

        if (!isset($to_save['vname'])) {
            $to_save['vname'] = $to_save['label'];
            unset($to_save['label']);
        }
        $file = "custom/Extension/modules/{$field->module}/Ext/Vardefs/enableCustomFields.php";
        if ($GLOBALS["dictionary"][$bean_name]['custom_fields'] == false && $this->source == "custom_fields" && !file_exists($file)) {
            $itemVarDef = "<?php\n // Vardefs from Fields_meta_data table - created: \n";
            $itemVarDef .= ' $dictionary["' . $bean_name . '"]["custom_fields"] = true;';
            file_put_contents($file, $itemVarDef, FILE_APPEND | LOCK_EX);
        }

        $this->writeVardefExtension($bean_name, $field, $to_save);
    }

    /**
     *
     * Write the vardefExtension out the the files.
     *
     * @param $bean_name
     * @param $field
     * @param $def_override
     * @return bool
     */
    public function writeVardefExtension($bean_name, $field, $def_override)
    {
        //Hack for the broken cases module
        $vBean = $bean_name == "aCase" ? "Case" : $bean_name;
        if ($this->oneFile == true) {
            $file_loc = "custom/Extension/modules/{$field->module}/Ext/Vardefs/customFields.php";

        } else {
            $file_loc = "custom/Extension/modules/{$field->module}/Ext/Vardefs/sugarfield_{$field->name}.php";
        }

        $out = "<?php\n // Vardefs Creator {$this->version}: \n";
        //$out =  "<?php\n // Vardefs from Fields_meta_data table - created: " . date('Y-m-d H:i:s') . "\n";

        if (file_exists($file_loc)) {
            include($file_loc);
            foreach ($dictionary[$vBean]['fields'] as $property => $defs) {
                $out .= "\n\n // Vardef Created : {$property} \n\n";
                foreach ($defs as $key => $item) {
                    $out .= override_value_to_string_recursive(array($vBean, "fields", $defs['name'], $key), "dictionary", $item) . "\n";
                }
            }
        }
        $languageLocation = "custom/Extension/modules/{$field->module}/Ext/Language/en_us.imported_custom_fields.php";
        include($languageLocation);


        foreach ($def_override as $property => $val) {
            $out .= override_value_to_string_recursive(array($vBean, "fields", $field->name, $property), "dictionary", $val) . "\n";
        }

        $out .= override_value_to_string_recursive(array($vBean, "fields", $field->name, "source"), "dictionary", $field->source) . "\n";
        $out .= "\n ?>";

        if (!isset($mod_strings[$field->vname])) {
            $language_out = "";

            if (!file_exists($languageLocation)) {
                $language_out .= "<?php \n";
            }

            $language_out .= "\$mod_strings['$field->vname'] = '$field->label_english';\n";
            file_put_contents($languageLocation, $language_out, FILE_APPEND | LOCK_EX);
        }else{
            //@todo 1
            //requires loading the mod_strings and changing the label.
        }

        if (!file_exists("custom/Extension/modules/{$field->module}/Ext/Vardefs")) {
            mkdir_recursive("custom/Extension/modules/{$field->module}/Ext/Vardefs");
        }

        if (!file_exists("custom/Extension/modules/{$field->module}/Ext/Language")) {
            mkdir_recursive("custom/Extension/modules/{$field->module}/Ext/Language");
        }


        if ($fh = @sugar_fopen($file_loc, 'w')) {
            fputs($fh, $out);
            fclose($fh);

            return true;
        } else {
            return false;
        }
    }


    /*****
     *
     * Custom Code added below for MModal field Import.
     *
     *
     * @param $vardefs
     * @return array|bool
     */



    public function customClean($vardefs){
        if (isset($vardefs['do no create']) && $vardefs['do no create'] == "X") {
            return false;
        }
        $vardef = array();
        $columns = trim($vardefs['column']);
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
        return $vardef;
    }

    public function cleanType($type)
    {
        $type = str_replace(array('(', ')'), ' ', $type);
        $type = str_replace(',', '', $type);

        $type_array = explode(" ", $type);

        for ($i = 0; $i < count($type_array); $i++) {
            if ($i == 0) {
                $type_array[0] = $this->convertTypeName($type_array[0], $type_array[1]);
            }

            $type_array[$i] = preg_replace('/[^A-Za-z0-9\-]/', '', $type_array[$i]);
        }

        $type_array = array_filter($type_array);

        return $type_array;
    }



    public function convertTypeName($type, $length)
    {
        if ($type == "numeric") {
            $type = "int";
        } elseif ($type == "real") {
            $type = "float";
        } elseif ($type == "varchar" && $length >= 255) {
            $type = "text";
        } elseif ($type == "timestamp") {
            $type = "datetime";
        } elseif ($type == "date") {
            $type = "datetime";
        }

        return $type;
    }



    public function decodeModule($module)
    {

        switch ($module) {

            case "a":
                $module = "AOS_Contracts";
                break;
            case "p":
                $module = "SA_Products";
                break;
            case "s":
                $module = "SA_Services";
                break;
        }
        return $module;
    }
}