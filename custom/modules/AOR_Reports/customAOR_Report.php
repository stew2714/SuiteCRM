<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 13/04/17
 * Time: 09:54
 */

require_once("modules/AOR_Reports/AOR_Report.php");
require_once("custom/modules/AOR_Reports/dateHelper.php");

class customAOR_Report extends AOR_Report
{
    public function __construct(AOR_Report $report)
    {
        global $db;
        $this->db = $db;
        $this->field_defs = $report->field_defs;
        $this->retrieve($report->id);
        parent::__construct();
    }

    public function build_report_csv_to_file()
    {

        try{

            global $beanList;
            global $sugar_config;
            $dateStr = (new \DateTime())->format('Y-m-d-H-i-s');
            $file_name = str_replace(" ", "_", $this->name) ."_".$dateStr. ".csv";

            ini_set('zlib.output_compression', 'Off');

            ob_start();
            require_once('include/export_utils.php');

            $delimiter = getDelimiter();
            $csv = '';
            //text/comma-separated-values

            $sql = "SELECT id FROM aor_fields WHERE aor_report_id = '" . $this->id . "' AND deleted = 0 ORDER BY field_order ASC";
            $result = $this->db->query($sql);

            $fields = array();
            $i = 0;
            while ($row = $this->db->fetchByAssoc($result)) {

                $field = new AOR_Field();
                $field->retrieve($row['id']);

                $path = unserialize(base64_decode($field->module_path));
                $field_bean = new $beanList[$this->report_module]();
                $field_module = $this->report_module;
                $field_alias = $field_bean->table_name;

                if ($path[0] != $this->report_module) {
                    foreach ($path as $rel) {
                        if (empty($rel)) {
                            continue;
                        }
                        $field_module = getRelatedModule($field_module, $rel);
                        $field_alias = $field_alias . ':' . $rel;
                    }
                }
                $label = str_replace(' ', '_', $field->label) . $i;
                $fields[$label]['field'] = $field->field;
                $fields[$label]['display'] = $field->display;
                $fields[$label]['function'] = $field->field_function;
                $fields[$label]['module'] = $field_module;
                $fields[$label]['alias'] = $field_alias;
                $fields[$label]['params'] = $field->format;

                if ($field->display) {
                    $csv .= $this->customEncloseForCSV($field->label);
                    $csv .= $delimiter;
                }
                ++$i;
            }

            $sql = $this->build_report_query();
            $result = $this->db->query($sql);

            while ($row = $this->db->fetchByAssoc($result)) {
                $csv .= "\r\n";
                foreach ($fields as $name => $att) {
                    $currency_id = isset($row[$att['alias'] . '_currency_id']) ? $row[$att['alias'] . '_currency_id'] : '';
                    if ($att['display']) {
                        if ($att['function'] != '' || $att['params'] != '') {
                            $csv .= $this->customEncloseForCSV($row[$name]);
                        } else {
                            $csv .= $this->customEncloseForCSV(trim(strip_tags(getModuleField($att['module'], $att['field'],
                                $att['field'], 'DetailView', $row[$name], '', $currency_id))));
                        }
                        $csv .= $delimiter;
                    }
                }
            }

            $csv = $GLOBALS['locale']->translateCharset($csv, 'UTF-8', $GLOBALS['locale']->getExportCharset());
            if (!empty($sugar_config['export_excel_compatible'])) {
                $csv = chr(255) . chr(254) . mb_convert_encoding($csv, 'UTF-16LE', 'UTF-8');
            }


            $fp = fopen($sugar_config['upload_dir'] . $file_name, 'wb');
            fwrite($fp, $csv);
            fclose($fp);

            return array('name'=>$file_name,'location'=>$sugar_config['upload_dir'] . $file_name);

        }catch (Exception $e){
            return false;
        }
    }


    private function customEncloseForCSV($field)
    {
        return '"' . $field . '"';
    }


}