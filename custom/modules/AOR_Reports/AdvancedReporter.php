<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 13/04/17
 * Time: 09:54
 */

require_once("modules/AOR_Reports/AOR_Report.php");
require_once("custom/modules/AOR_Reports/dateHelper.php");
require_once('include/SugarFields/SugarFieldHandler.php');
require_once("include/TemplateHandler/TemplateHandler.php");
require_once("include/export_utils.php");
require_once("include/SugarObjects/VardefManager.php");

class AdvancedReporter extends AOR_Report
{


    public $bean;
    public $db;
    public $requestData;
    public $report_module;
    public $id;
    public $groupBy;
    private $_focus = null;
    private $_fieldList = array();
    private $_timedate = null;
    private $_currentuser = null;
    private $_beanFiles = null;
    private $_beanList = null;
    private $_app_strings = null;
    private $_current_language = null;
    private $_reportModuleBean = null;
    private $_app_list_strings = null;
    private $_sugar_config = null;
    private $_fieldArrayForReport = null;
    private $_conditionArrayForReport = null;
    private $_reportQuery = null;
    private $_reportTableFieldArray = null;
    private $_groupedByField = null;
    private $_userCurrency = null;
    private $_tags = null;

    public function getTags($class = null, $datacellCount = 1)
    {
        if ($this->_tags == null) {
            $tags = array(
                'table',
                'thead',
                'tbody',
                'tfoot',
                'tr',
                'th',
                'td',
            );

            $tagArray = array();

            foreach ($tags as $tag) {
                if ($tag == 'th' || $tag == 'td') {
                    for ($i = 1; $i <= $datacellCount; $i++) {
                        $tagBegin = '<' . $tag;
                        if ($class) {
                            $tagBegin .= ' class="' . $tag . '-' . $class . '-' . $i . '"';
                        }
                        $tagBegin .= '>';
                        $tagEnd = '</' . $tag . '>';
                        if ($i <= $datacellCount) {
                            $tagEnd . PHP_EOL;
                        }
                        $tagArray[$tag . '-' . $i] = array(
                            'begin' => $tagBegin,
                            'end' => $tagEnd,
                        );
                    }
                } else {
                    $tagBegin = '<' . $tag;
                    if ($class) {
                        $tagBegin .= ' class="' . $tag . '-' . $class . '"';
                    }
                    $tagBegin .= '>';
                    $tagBegin .= PHP_EOL;
                    $tagEnd = '</' . $tag . '>';
                    $tagEnd .= PHP_EOL;
                    $tagArray[$tag] = array(
                        'begin' => $tagBegin,
                        'end' => $tagEnd,
                    );
                }

            }
            $this->setTags($tagArray);
        }
        return $this->_tags;

    }

    public function setTags($tags)
    {
        $this->_tags = $tags;
        return $this;
    }

    public function array_copy($arr)
    {
        $newArray = array();
        foreach ($arr as $key => $value) {
            if (is_array($value)) $newArray[$key] = array_copy($value);
            else if (is_object($value)) $newArray[$key] = clone $value;
            else $newArray[$key] = $value;
        }
        return $newArray;
    }

    public function getUserCurrency()
    {
        if ($this->_userCurrency == null) {
            $currency = new Currency();
            $currentUser = $this->getCurrentuser();
            $currency->retrieve($currentUser->getPreference('currency'));
            $this->setUserCurrency($currency);
        }
        return $this->_userCurrency;
    }

    public function setUserCurrency($currency)
    {
        $this->_userCurrency = $currency;
        return $this;
    }


    public function getGroupedByField()
    {
        if ($this->_groupedByField == null) {
            if ($this->requestData != false) {
                $field = $this->getViewParams(true, false, 1);
                $this->setGroupedByField($field);
            } else {
                $sql = "SELECT id FROM aor_fields WHERE aor_report_id = '" . $this->bean->id . "' AND group_display = 1 AND deleted = 0 ORDER BY field_order ASC";
                $field_id = $this->db->getOne($sql);
                if (!empty($field_id)) {
                    $field = BeanFactory::getBean("AOR_Fields", $field_id);
                    $this->setGroupedByField($field);
                }
            }
        }

        return $this->_groupedByField;
    }

    public function setGroupedByField($field)
    {
        $this->_groupedByField = $field;
        return $this;
    }


    public function getReportTableFieldArray()
    {

        if ($this->_reportTableFieldArray == null) {
            $fieldNameArray = $this->getFieldNames();
            $fields = array();
            $i = 0;

            foreach ($fieldNameArray as $field) {
                $path = unserialize(base64_decode($field->module_path));
                $field_bean = $this->getReportModuleBean();
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
                $fields[$label]['label'] = $field->label;
                $fields[$label]['display'] = $field->display;
                $fields[$label]['function'] = $field->field_function;
                $fields[$label]['module'] = $field_module;
                $fields[$label]['alias'] = $field_alias;
                $fields[$label]['link'] = $field->link;
                $fields[$label]['total'] = $field->total;
                $fields[$label]['params'] = $field->format;
                ++$i;
            }
            $this->setReportTableFieldArray($fields);
        }
        return $this->_reportTableFieldArray;
    }

    public function setReportTableFieldArray($fieldArray)
    {
        $this->_reportTableFieldArray = $fieldArray;
        return $this;
    }

    /**
     * @return null
     */
    public function getFieldArrayForReport()
    {
        if ($this->_fieldArrayForReport == null) {
            $sql =
                "SELECT id FROM aor_fields WHERE aor_report_id = '" .
                $this->bean->id .
                "' AND deleted = 0 ORDER BY field_order ASC";
            $result = $this->db->query($sql);
            $rows = array();
            while ($row = $this->db->fetchByAssoc($result)) {
                $field = new AOR_Field();
                $field->retrieve($row['id']);
                $rows[] = $field;
            }
            $this->setFieldArrayForReport($rows);
        }
        return $this->_fieldArrayForReport;
    }


    public function setConditionArrayForReport($conditionArrayForReport)
    {
        $this->_conditionArrayForReport = $conditionArrayForReport;
        return $this;
    }

    /**
     * @return null
     */
    public function getConditionArrayForReport()
    {
        if ($this->_conditionArrayForReport == null) {
            $sql =
                "SELECT id FROM aor_conditions WHERE aor_report_id = '" .
                $this->id .
                "' AND deleted = 0 ORDER BY condition_order ASC";
            $result = $this->db->query($sql);
            $rows = array();
            while ($row = $this->db->fetchByAssoc($result)) {
                $condition = new AOR_Condition();
                $condition->retrieve($row['id']);
                $rows[] = $condition;
            }
            $this->setConditionArrayForReport($rows);
        }
        return $this->_conditionArrayForReport;
    }

    /**
     * @param null $fieldArrayForReport
     * @return AdvancedReporter
     */
    public function setFieldArrayForReport($fieldArrayForReport)
    {
        $this->_fieldArrayForReport = $fieldArrayForReport;
        return $this;
    }

    /**
     * @return null
     */
    public function getReportModuleBean()
    {
        if ($this->_reportModuleBean == null) {
            $beanList = $this->getBeanList();
            $this->setReportModuleBean(new $beanList[$this->report_module]());
        }
        return $this->_reportModuleBean;
    }

    /**
     * @param null $_reportModuleBean
     * @return AdvancedReporter
     */
    public function setReportModuleBean($_reportModuleBean)
    {
        $this->_reportModuleBean = $_reportModuleBean;
        return $this;
    }

    /**
     * @return null
     */
    public function getBeanList()
    {
        if ($this->_beanList == null) {
            global $beanList;
            $this->setBeanList($beanList);
        }
        return $this->_beanList;
    }

    /**
     * @param null $beanList
     * @return AdvancedReporter
     */
    public function setBeanList($beanList)
    {
        $this->_beanList = $beanList;
        return $this;
    }


    /**
     * @return null
     */
    public function getTimedate()
    {
        if ($this->_timedate == null) {
            global $timedate;
            $this->setTimedate($timedate);
        }

        return $this->_timedate;
    }

    /**
     * @param null $timedate
     * @return AdvancedReporter
     */
    public function setTimedate($timedate)
    {
        $this->_timedate = $timedate;
        return $this;
    }

    /**
     * @return null
     */
    public function getCurrentuser()
    {
        if ($this->_currentuser == null) {
            global $current_user;
            $this->setCurrentuser($current_user);
        }

        return $this->_currentuser;
    }

    /**
     * @param null $currentuser
     * @return AdvancedReporter
     */
    public function setCurrentuser($currentuser)
    {
        $this->_currentuser = $currentuser;
        return $this;
    }

    /**
     * @return null
     */
    public function getBeanFiles()
    {
        if ($this->_beanFiles == null) {
            global $beanFiles;
            $this->setBeanFiles($beanFiles);
        }
        return $this->_beanFiles;
    }

    /**
     * @param null $beanFiles
     * @return AdvancedReporter
     */
    public function setBeanFiles($beanFiles)
    {
        $this->_beanFiles = $beanFiles;
        return $this;
    }

    /**
     * @return null
     */
    public function getAppStrings()
    {
        if ($this->_app_strings == null) {
            global $app_strings;
            $this->setAppStrings($app_strings);
        }
        return $this->_app_strings;
    }

    /**
     * @param null $app_strings
     * @return AdvancedReporter
     */
    public function setAppStrings($app_strings)
    {
        $this->_app_strings = $app_strings;
        return $this;
    }

    /**
     * @return null
     */
    public function getAppListStrings()
    {
        if ($this->_app_list_strings == null) {
            global $app_list_strings;
            $this->setAppStrings($app_list_strings);
        }
        return $this->_app_list_strings;
    }

    /**
     * @param null $app_strings
     * @return AdvancedReporter
     */
    public function setAppListStrings($app_list_strings)
    {
        $this->_app_list_strings = $app_list_strings;
        return $this;
    }

    /**
     * @return null
     */
    public function getSugarConfig()
    {
        if ($this->_sugar_config == null) {
            global $sugar_config;
            $this->setSugarConfig($sugar_config);
        }
        return $this->_sugar_config;
    }

    /**
     * @param null $app_strings
     * @return AdvancedReporter
     */
    public function setSugarConfig($sugar_config)
    {
        $this->_sugar_config = $sugar_config;
        return $this;
    }

    /**
     * @return null
     */
    public function getCurrentLanguage()
    {
        if ($this->_current_language == null) {
            global $current_language;
            $this->setCurrentLanguage($current_language);
        }
        return $this->_current_language;
    }

    /**
     * @param null $current_language
     * @return AdvancedReporter
     */
    public function setCurrentLanguage($current_language)
    {
        $this->_current_language = $current_language;
        return $this;
    }


    function __construct($bean, $requestData = false)
    {
        global $db;
        $this->bean = $bean;
        $this->id = $bean->id; //this is to handle the pagination
        $this->db = $db;
        $this->requestData = $requestData;
        if ($requestData != false) {
            $this->report_module = $requestData['report_module'];
            $this->id = $requestData['record'];
            $this->groupBy = $requestData['fieldView']['0']['aor_fields_group_display'];
        } else {
            $this->report_module = $bean->report_module;
        }
        $this->field_defs = $bean->field_defs;
        $this->retrieve($bean->id);
        parent::__construct();

    }

    public function buildMultiGroupReport($offset = -1, $to = null, $links = true, $level = 2, $path = array())
    {
        global $beanList;

        $rows = $this->getGroupDisplayFieldByReportId($this->id, $level);

        if (count($rows) > 1) {
            $GLOBALS['log']->fatal('ambiguous group display for report ' . $this->id);
        } else {
            if (count($rows) == 1) {
                $rows[0]['module_path'] = unserialize(base64_decode($rows[0]['module_path']));
                if (!$rows[0]['module_path'][0]) {
                    $module = new $beanList[$this->report_module]();
                    $rows[0]['field_id_name'] =
                        $module->field_defs[$rows[0]['field']]['id_name'] ?
                            $module->field_defs[$rows[0]['field']]['id_name'] :
                            $module->field_defs[$rows[0]['field']]['name'];
                    $rows[0]['module_path'][0] = $module->table_name;
                } else {
                    $rows[0]['field_id_name'] = $rows[0]['field'];
                }
                $path[] = $rows[0];

                if ($level > 10) {
                    $msg = 'Too many nested groups';
                    $GLOBALS['log']->fatal($msg);

                    return null;
                }

                return $this->buildMultiGroupReport($offset, $to, $links, $level + 1, $path);
            } else {
                if (!$rows) {
                    if ($path) {
                        $html = '';
                        foreach ($path as $pth) {
                            $_fieldIdName = $this->db->quoteIdentifier($pth['field_id_name']);
                            $query =
                                "SELECT $_fieldIdName FROM " .
                                $this->db->quoteIdentifier($pth['module_path'][0]) .
                                " GROUP BY $_fieldIdName;";
                            $values = $this->dbSelect($query);

                            foreach ($values as $value) {
                                $moduleFieldByGroupValue = $this->getModuleFieldByGroupValue(
                                    $beanList,
                                    $value[$pth['field_id_name']]
                                );
                                $moduleFieldByGroupValue = $this->addDataIdValueToInnertext($moduleFieldByGroupValue);
                                $html .= $this->getMultiGroupFrameHTML(
                                    $moduleFieldByGroupValue,
                                    $this->build_group_report($offset, null, $links)
                                );
                            }
                        }

                        return $html;
                    } else {
                        return $this->build_group_report($offset, null, $links, array(), create_guid());
                    }
                } else {
                    throw new Exception('incorrect results');
                }
            }
        }
        throw new Exception('incorrect state');
    }

    private function getGroupDisplayFieldByReportId($reportId = null, $level = 1)
    {
        $rows = array();
        // set the default values

        if (is_null($reportId)) {
            $reportId = $this->id;
        }

        if (!$level) {
            $level = 1;
        }

        // escape values for query

        $_id = $this->db->quote($reportId);
        $_level = (int)$level;

        // get results array
        //gets the title.
        if ($this->requestData != false) {
            if ($level != "2") {
                $rows = $this->getViewParams(true, true, $level);
            }
        } else {
            $query =
                "SELECT id, field, module_path FROM aor_fields WHERE aor_report_id = '$_id' AND group_display = $_level AND deleted = 0;";
            $rows = $this->dbSelect($query);
        }

        return $rows;
    }

    private function dbSelect($query)
    {
        $results = $this->db->query($query);

        $rows = array();
        while ($row = $this->db->fetchByAssoc($results)) {
            $rows[] = $row;
        }

        return $rows;
    }

    private function getModuleFieldByGroupValue($beanList, $group_value)
    {
        $moduleFieldByGroupValues = array();

        //        $sql =
        //            "SELECT id FROM aor_fields WHERE aor_report_id = '" .
        //            $this->id .
        //            "' AND group_display = 1 AND deleted = 0 ORDER BY field_order ASC";
        //        $result = $this->db->limitQuery($sql, 0, 1);

        $rows = array($this->getViewParams(true, false, 1));

        foreach ($rows as $field) {

            if ((!isset($field->field_function) || $field->field_function != 'COUNT') || (isset($field->format) &&
                    $field->format != '')) {
                $moduleFieldByGroupValues[] = $group_value;
                continue;
            }

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

            $currency_id = isset($row[$field_alias . '_currency_id']) ? $row[$field_alias . '_currency_id'] : '';
            $moduleFieldByGroupValues[] = getModuleField(
                $this->report_module,
                $field->field,
                $field->field,
                'DetailView',
                $group_value,
                '',
                $currency_id
            );

        }

        $moduleFieldByGroupValue = implode(', ', $moduleFieldByGroupValues);

        return $moduleFieldByGroupValue;
    }

    private function addDataIdValueToInnertext($html)
    {
        preg_match('/\sdata-id-value\s*=\s*"([^"]*)"/', $html, $match);
        $html = preg_replace('/(>)([^<]*)(<\/\w+>$)/', '$1$2' . $match[1] . '$3', $html);

        return $html;
    }

    private function getMultiGroupFrameHTML($header, $body)
    {
        $html = '<div class="multi-group-list" style="border: 1px solid black; padding: 10px;">
                    <h3>' . $header . '</h3>
                    <div class="multi-group-list-inner">' . $body . '</div>
                </div>';

        return $html;
    }


    function build_report_query_select($query = array(), $group_value = '')
    {
        $beanList = $this->getBeanList();
        $timedate = $this->getTimedate();

        if ($beanList[$this->report_module]) {
            $module = $this->getReportModuleBean();

            $query['id_select'][$module->table_name] =
                $this->db->quoteIdentifier($module->table_name) . ".id AS '" . $module->table_name . "_id'";
            $query['id_select_group'][$module->table_name] = $this->db->quoteIdentifier($module->table_name) . ".id";

            if ($this->requestData != false) {
                $rows = $this->getViewParams();
            } else {
                $rows = $this->getFieldArrayForReport();
            }
            $rowsCopy = $this->array_copy($rows);

            $i = 0;
            foreach ($rowsCopy as $field) {

                $field->label = str_replace(' ', '_', $field->label) . $i;

                $path = unserialize(base64_decode($field->module_path));

                $field_module = $module;
                $table_alias = $field_module->table_name;
                $oldAlias = $table_alias;
                if (!empty($path[0]) && $path[0] != $module->module_dir) {
                    foreach ($path as $rel) {
                        $new_field_module = new $beanList[getRelatedModule($field_module->module_dir, $rel)];
                        $oldAlias = $table_alias;
                        $table_alias = $table_alias . ":" . $rel;
                        $query = $this->build_report_query_join(
                            $rel,
                            $table_alias,
                            $oldAlias,
                            $field_module,
                            'relationship',
                            $query,
                            $new_field_module
                        );
                        $field_module = $new_field_module;
                    }
                }
                $data = $field_module->field_defs[$field->field];

                if ($data['type'] == 'relate' && isset($data['id_name'])) {
                    $field->field = $data['id_name'];
                    $data_new = $field_module->field_defs[$field->field];
                    if (isset($data_new['source']) &&
                        $data_new['source'] == 'non-db' &&
                        $data_new['type'] != 'link' &&
                        isset($data['link'])
                    ) {
                        $data_new['type'] = 'link';
                        $data_new['relationship'] = $data['link'];
                    }
                    $data = $data_new;
                }

                if ($data['type'] == 'link' && $data['source'] == 'non-db') {
                    $new_field_module = new $beanList[getRelatedModule(
                        $field_module->module_dir,
                        $data['relationship']
                    )];
                    $table_alias = $data['relationship'];
                    $query = $this->build_report_query_join(
                        $data['relationship'],
                        $table_alias,
                        $oldAlias,
                        $field_module,
                        'relationship',
                        $query,
                        $new_field_module
                    );
                    $field_module = $new_field_module;
                    $field->field = 'id';
                }

                if ($data['type'] == 'currency' && isset($field_module->field_defs['currency_id'])) {
                    if ((isset($field_module->field_defs['currency_id']['source']) &&
                        $field_module->field_defs['currency_id']['source'] == 'custom_fields')
                    ) {
                        $query['select'][$table_alias . '_currency_id'] =
                            $this->db->quoteIdentifier($table_alias . '_cstm') .
                            ".currency_id AS '" .
                            $table_alias .
                            "_currency_id'";
                        $query['second_group_by'][] =
                            $this->db->quoteIdentifier($table_alias . '_cstm') . ".currency_id";
                    } else {
                        $query['select'][$table_alias . '_currency_id'] =
                            $this->db->quoteIdentifier($table_alias) .
                            ".currency_id AS '" .
                            $table_alias .
                            "_currency_id'";
                        $query['second_group_by'][] = $this->db->quoteIdentifier($table_alias) . ".currency_id";
                    }
                }

                if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                    $select_field = $this->db->quoteIdentifier($table_alias . '_cstm') . '.' . $field->field;
                    $query = $this->build_report_query_join(
                        $table_alias . '_cstm',
                        $table_alias . '_cstm',
                        $table_alias,
                        $field_module,
                        'custom',
                        $query
                    );
                } else {
                    $select_field = $this->db->quoteIdentifier($table_alias) . '.' . $field->field;
                }

                if ($field->format && in_array($data['type'], array('date', 'datetime', 'datetimecombo'))) {
                    if (in_array($data['type'], array('datetime', 'datetimecombo'))) {
                        $select_field = $this->db->convert($select_field, 'add_tz_offset');
                    }
                    $select_field = $this->db->convert(
                        $select_field,
                        'date_format',
                        array($timedate->getCalFormat($field->format))
                    );
                }

                if ($field->link && isset($query['id_select'][$table_alias])) {
                    $query['select'][] = $query['id_select'][$table_alias];
                    $query['second_group_by'][] = $query['id_select_group'][$table_alias];
                    unset($query['id_select'][$table_alias]);
                }

                if ($field->group_by == 1) {
                    $query['group_by'][] = $select_field;
                } elseif ($field->field_function != null) {
                    $select_field = $field->field_function . '(' . $select_field . ')';
                } else {
                    $query['second_group_by'][] = $select_field;
                }

                if ($field->sort_by != '') {
                    $query['sort_by'][] = $select_field . " " . $field->sort_by;
                }


                if ($this->bean->is_AuditEnabled() && (!empty($this->requestData['snapshot_date']) ||
                        !empty($this->bean->snapshot_date))) {
                    if (empty($this->requestData['snapshot_date'])) {
                        $date = $timedate->fromUser($this->bean->snapshot_date)->asDb();
                    } else {
                        $date = $timedate->fromUser($this->requestData['snapshot_date'])->asDb();
                    }

                    $query['select'][] = "
                                    (
                                    CASE
                                    WHEN EXISTS (
                                    (SELECT after_value_string
                                    FROM opportunities_audit
                                    WHERE parent_id = " . $table_alias . ".id AND 
                                          date_created < '" . $date . "' AND 
                                          field_name = '" . $field->field . "'
                                    ORDER BY date_created DESC
                                    limit 1)
                                    )
                                    THEN (SELECT after_value_string
                                    FROM opportunities_audit
                                    WHERE parent_id = " . $table_alias . ".id AND 
                                          date_created < '" . $date . "'AND 
                                          field_name = '" . $field->field . "'
                                    ORDER BY date_created DESC
                                    limit 1)
                                            WHEN EXISTS (
                                (SELECT before_value_string
                                FROM opportunities_audit
                                WHERE parent_id = " . $table_alias . ".id AND
                                      date_created > '" . $date . "' AND 
                                      field_name = '" . $field->field . "'
                                ORDER BY date_created ASC
                                limit 1)
                            )
                            THEN (SELECT before_value_string
                                FROM opportunities_audit
                                WHERE parent_id = " . $table_alias . ".id AND 
                                      date_created > '" . $date . "' AND 
                                      field_name = '" . $field->field . "'
                                ORDER BY date_created ASC
                                limit 1)
                                   else " . $select_field . " END
                    )  as '" . $field->label . "'";
                } else {
                    $query['select'][] = $select_field . " AS '" . $field->label . "'";
                }


                if ($field->group_display == 1 && $group_value) {
                    $query['where'][] = $select_field . " = '" . $group_value . "' AND ";
                }

                ++$i;
            }

            //if a snap shot asked for we do not want to display anything after that time.
            if ($this->bean->is_AuditEnabled() && (!empty($this->requestData['snapshot_date']) ||
                    !empty($this->bean->snapshot_date))) {
                $query['where'][] = $table_alias . ".date_entered < '" . $date . "' AND ";
            }

        }

        unset ($rowsCopy);
        return $query;
    }

    function build_report_query_select_advanced($query = array(), $group_value = '')
    {
        global $beanList, $timedate;

        if ($beanList[$this->report_module]) {
            $module = new $beanList[$this->report_module]();

            $query['id_select'][$module->table_name] =
                $this->db->quoteIdentifier($module->table_name) . ".id AS '" . $module->table_name . "_id'";
            $query['id_select_group'][$module->table_name] = $this->db->quoteIdentifier($module->table_name) . ".id";

            if ($this->requestData != false) {
                $rows = $this->getViewParams();
            } else {
                $sql =
                    "SELECT id FROM aor_fields WHERE aor_report_id = '" .
                    $this->bean->id .
                    "' AND deleted = 0 ORDER BY field_order ASC";
                $result = $this->db->query($sql);
                $rows = array();
                while ($row = $this->db->fetchByAssoc($result)) {
                    $field = new AOR_Field();
                    $field->retrieve($row['id']);
                    $rows[] = $field;
                }
            }

            $i = 0;
            foreach ($rows as $field) {

                $field->label = str_replace(' ', '_', $field->label) . $i;

                $path = unserialize(base64_decode($field->module_path));

                $field_module = $module;
                $table_alias = $field_module->table_name;
                $oldAlias = $table_alias;
                if (!empty($path[0]) && $path[0] != $module->module_dir) {
                    foreach ($path as $rel) {
                        $new_field_module = new $beanList[getRelatedModule($field_module->module_dir, $rel)];
                        $oldAlias = $table_alias;
                        $table_alias = $table_alias . ":" . $rel;
                        $query = $this->build_report_query_join(
                            $rel,
                            $table_alias,
                            $oldAlias,
                            $field_module,
                            'relationship',
                            $query,
                            $new_field_module
                        );
                        $field_module = $new_field_module;
                    }
                }
                $data = $field_module->field_defs[$field->field];

                if ($data['type'] == 'relate' && isset($data['id_name'])) {
                    $field->field = $data['id_name'];
                    $data_new = $field_module->field_defs[$field->field];
                    if (isset($data_new['source']) &&
                        $data_new['source'] == 'non-db' &&
                        $data_new['type'] != 'link' &&
                        isset($data['link'])
                    ) {
                        $data_new['type'] = 'link';
                        $data_new['relationship'] = $data['link'];
                    }
                    $data = $data_new;
                }

                if ($data['type'] == 'link' && $data['source'] == 'non-db') {
                    $new_field_module = new $beanList[getRelatedModule(
                        $field_module->module_dir,
                        $data['relationship']
                    )];
                    $table_alias = $data['relationship'];
                    $query = $this->build_report_query_join(
                        $data['relationship'],
                        $table_alias,
                        $oldAlias,
                        $field_module,
                        'relationship',
                        $query,
                        $new_field_module
                    );
                    $field_module = $new_field_module;
                    $field->field = 'id';
                }

                if ($data['type'] == 'currency' && isset($field_module->field_defs['currency_id'])) {
                    if ((isset($field_module->field_defs['currency_id']['source']) &&
                        $field_module->field_defs['currency_id']['source'] == 'custom_fields')
                    ) {
                        $query['select'][$table_alias . '_currency_id'] =
                            $this->db->quoteIdentifier($table_alias . '_cstm') .
                            ".currency_id AS '" .
                            $table_alias .
                            "_currency_id'";
                        $query['second_group_by'][] =
                            $this->db->quoteIdentifier($table_alias . '_cstm') . ".currency_id";
                    } else {
                        $query['select'][$table_alias . '_currency_id'] =
                            $this->db->quoteIdentifier($table_alias) .
                            ".currency_id AS '" .
                            $table_alias .
                            "_currency_id'";
                        $query['second_group_by'][] = $this->db->quoteIdentifier($table_alias) . ".currency_id";
                    }
                }

                if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                    $select_field = $this->db->quoteIdentifier($table_alias . '_cstm') . '.' . $field->field;
                    $query = $this->build_report_query_join(
                        $table_alias . '_cstm',
                        $table_alias . '_cstm',
                        $table_alias,
                        $field_module,
                        'custom',
                        $query
                    );
                } else {
                    $select_field = $this->db->quoteIdentifier($table_alias) . '.' . $field->field;
                }

                if ($field->format && in_array($data['type'], array('date', 'datetime', 'datetimecombo'))) {
                    if (in_array($data['type'], array('datetime', 'datetimecombo'))) {
                        $select_field = $this->db->convert($select_field, 'add_tz_offset');
                    }
                    $select_field = $this->db->convert(
                        $select_field,
                        'date_format',
                        array($timedate->getCalFormat($field->format))
                    );
                }

                if ($field->link && isset($query['id_select'][$table_alias])) {
                    $query['select'][] = $query['id_select'][$table_alias];
                    $query['second_group_by'][] = $query['id_select_group'][$table_alias];
                    unset($query['id_select'][$table_alias]);
                }

                if ($field->group_by == 1) {
                    if ($data['type'] == "datetime") {
                        $format = preg_replace("/[a-zA-Z]/", '%$0', $field->format);
                        $query['group_by'][] = "DATE_FORMAT(" . $select_field . ", '" . $format . "')";
                    } else {
                        $query['group_by'][] = $select_field;
                    }
                } elseif ($field->field_function != null) {
                    $select_field = $field->field_function . '(' . $select_field . ')';
                } else {
                    $query['second_group_by'][] = $select_field;
                }

                if ($field->sort_by != '') {
                    $query['sort_by'][] = $select_field . " " . $field->sort_by;
                }


                if ($this->bean->is_AuditEnabled() && (!empty($this->requestData['snapshot_date']) ||
                        !empty($this->bean->snapshot_date))) {
                    if (empty($this->requestData['snapshot_date'])) {
                        $date = $timedate->fromUser($this->bean->snapshot_date)->asDb();
                    } else {
                        $date = $timedate->fromUser($this->requestData['snapshot_date'])->asDb();
                    }

                    $query['select'][] = "
                                    (
                                    CASE
                                    WHEN EXISTS (
                                    (SELECT after_value_string
                                    FROM opportunities_audit
                                    WHERE parent_id = " . $table_alias . ".id AND 
                                          date_created < '" . $date . "' AND 
                                          field_name = '" . $field->field . "'
                                    ORDER BY date_created DESC
                                    limit 1)
                                    )
                                    THEN (SELECT after_value_string
                                    FROM opportunities_audit
                                    WHERE parent_id = " . $table_alias . ".id AND 
                                          date_created < '" . $date . "'AND 
                                          field_name = '" . $field->field . "'
                                    ORDER BY date_created DESC
                                    limit 1)
                                            WHEN EXISTS (
                                (SELECT before_value_string
                                FROM opportunities_audit
                                WHERE parent_id = " . $table_alias . ".id AND
                                      date_created > '" . $date . "' AND 
                                      field_name = '" . $field->field . "'
                                ORDER BY date_created ASC
                                limit 1)
                            )
                            THEN (SELECT before_value_string
                                FROM opportunities_audit
                                WHERE parent_id = " . $table_alias . ".id AND 
                                      date_created > '" . $date . "' AND 
                                      field_name = '" . $field->field . "'
                                ORDER BY date_created ASC
                                limit 1)
                                   else " . $select_field . " END
                    )  as '" . $field->label . "'";
                } else {
                    $query['select'][] = $select_field . " AS '" . $field->label . "'";
                }


                /***** check type *****/

                switch ($data['type']) {
                    case "enum":
                    case "dynamicenum":
                    case "multienum":
                        $start_case = "IFNULL ({$select_field}, '') AS  '{$field->label}',";
                        $start_case .= " CASE {$select_field} WHEN 'NULL' THEN ''";
                        $middle_case = '';
                        foreach ($GLOBALS['app_list_strings'][$data['options']] as $key => $option) {
                            $middle_case .= " WHEN '{$key}' THEN '{$option}' ";
                        }
                        $end_case = " ELSE {$select_field} END as '{$field->label}'";
                        $final = $start_case . $middle_case . $end_case;
                        $query['select'][] = $final;
                        break;
                    case "datetime":
                    case "date":
                    case "datetimecombo":
                        if ($field->format) {
                            $start_case = "CASE WHEN date_format({$select_field}, '" . preg_replace("/[a-zA-Z]/", '%$0', $field->format) . "') = 00000000 THEN '' ";
                            $middle_case = "WHEN isnull({$select_field}) THEN '' ";
                            $end_case = "ELSE date_format({$select_field}, '" . preg_replace("/[a-zA-Z]/", '%$0', $field->format) . "') END AS  '{$field->label}' ";
                            $final = $start_case . $middle_case . $end_case;
                            $query['select'][] = $final;
                        }
                        break;

                    default:
                        //$query['select'][] = $select_field ." AS '".$field->label."'";
                        $query['select'][] = "IFNULL({$select_field},'')  AS '{$field->label}'";
                        break;
                }
                /***** END CHECK type *****/


                if ($field->group_display == 1 && $group_value) {
                    $query['where'][] = $select_field . " = '" . $group_value . "' AND ";
                }

                ++$i;
            }

            //if a snap shot asked for we do not want to display anything after that time.
            if ($this->bean->is_AuditEnabled() && (!empty($this->requestData['snapshot_date']) ||
                    !empty($this->bean->snapshot_date))) {
                $query['where'][] = $table_alias . ".date_entered < '" . $date . "' AND ";
            }

        }

        return $query;
    }

    function build_report_html($from = -1, $limit = null, $links = true, $group_value = '', $tableIdentifier = '', $extra = array())
    {
        $sugar_config = $this->getSugarConfig();
        $beanList = $this->getBeanList();
        $tableBegin = '<table>' . PHP_EOL;
        $tableEnd = '</table>' . PHP_EOL;
        $tbodyBegin = '<tbody>' . PHP_EOL;
        $tbodyEnd = '</tbody>' . PHP_EOL;

        if ($limit !== null) {
            $max_rows = $limit;
        } else if ($sugar_config['list_max_entries_per_page'] != '') {
            $max_rows = $sugar_config['list_max_entries_per_page'];
        } else {
            $max_rows = 20;
        }

        $report_sql = $this->getReportQuery($group_value, $extra);

        if ($from >= 0) {
            $result = $this->db->limitQuery($report_sql, $from, $max_rows);
        } elseif ($from == "-2") {
            $result = $this->db->limitQuery($report_sql, 0, "10");
        } else {
            $result = $this->db->query($report_sql);
        }

        $total_rows = $this->getCountForReportRowNumbers($report_sql);
        $html = '';

        if ($from < 0) {
            $moduleFieldByGroupValue = $this->getModuleFieldByGroupValue($beanList, $group_value);
            $html .= "<H3>" . $moduleFieldByGroupValue . "</H3>";
        }

        $html .= "<table class='list aor_reports' id='report_table_" . $tableIdentifier . "' width='100%' cellspacing='0' cellpadding='0' border='0' repeat_header='1'>";

        if ($from >= 0) {
            $html .= $this->getMarkupForPagination($from, $group_value, $tableIdentifier, $total_rows, $max_rows);
        }

        $fields = $this->getReportTableFieldArray();
        $html .= $this->getReportTableTitleMarkup($fields);

        $formattedResultsArray = $this->ReportFormatFields($result);
        $html .= $tbodyBegin;
        $html .= $this->buildReportRows($formattedResultsArray, $links);
        $html .= $tbodyEnd;
        $html .= $this->getTotalHTML($fields, $formattedResultsArray['totals']);

        $html .= $tableEnd;

        $html .= $this->getFooterScript();

        return $html;
    }

    public function build_report_query($group_value = '', $extra = array())
    {
        $module = $this->getReportModuleBean();

        $query = '';
        $query_array = array();

        //Check if the user has access to the target module
        if (!(ACLController::checkAccess($this->report_module, 'list', true))) {
            return false;
        }

        $query_array = $this->build_report_query_select($query_array, $group_value);
        if (isset($extra['where']) && $extra['where']) {
            $query_array['where'][] = implode(' AND ', $extra['where']) . ' AND ';
        }
        $query_array = $this->build_report_query_where($query_array);

        foreach ($query_array['select'] as $select) {
            $query .= ($query == '' ? 'SELECT ' : ', ') . $select;
        }

        if (empty($query_array['group_by'])) {
            foreach ($query_array['id_select'] as $select) {
                $query .= ', ' . $select;
            }
        }

        $query .= ' FROM ' . $this->db->quoteIdentifier($module->table_name) . ' ';

        if (isset($query_array['join'])) {
            foreach ($query_array['join'] as $join) {
                $query .= $join;
            }
        }
        if (isset($query_array['where'])) {
            $query_where = '';
            foreach ($query_array['where'] as $where) {
                $query_where .= ($query_where == '' ? 'WHERE ' : ' ') . $where;
            }

            $query_where = $this->queryWhereRepair($query_where);

            $query .= ' ' . $query_where;
        }

        if (isset($query_array['group_by'])) {
            $query_group_by = '';
            foreach ($query_array['group_by'] as $group_by) {
                $query_group_by .= ($query_group_by == '' ? 'GROUP BY ' : ', ') . $group_by;
            }
            if (isset($query_array['second_group_by']) && $query_group_by != '') {
                foreach ($query_array['second_group_by'] as $group_by) {
                    $query_group_by .= ', ' . $group_by;
                }
            }
            $query .= ' ' . $query_group_by;
        }

        if (isset($query_array['sort_by'])) {
            $query_sort_by = '';
            foreach ($query_array['sort_by'] as $sort_by) {
                $query_sort_by .= ($query_sort_by == '' ? 'ORDER BY ' : ', ') . $sort_by;
            }
            $query .= ' ' . $query_sort_by;
        }

        return $query;

    }

//    public function build_report_query($offset = -1, $links = true, $from = null, $limit = null, $group_value = '', $tableIdentifier = '', $extra = array())
//    {
//
//
//        $_group_value = $this->db->quote($group_value);
//
//        $report_sql = $this->build_report_query($_group_value, $extra);
//        return $report_sql;
//    }

    public function execute_report_query_with_limit($report_sql, $from = null, $limit = null)
    {
        if ($from !== null) {
            $report_sql .= ' LIMIT ' . $from;
        }
        if ($from !== null && $limit !== null) {
            $report_sql .= ', ' . $limit;
        }
        return $this->db->query($report_sql);
    }


    function ReportFormatFields($result, $stripTags = false)
    {

        $field_bean = $this->getReportModuleBean();
        $fields = $this->getReportTableFieldArray();
        $totals = array();
        $data_returned = array();
        $bean_id = $field_bean->table_name."_id";
        while ($row = $this->db->fetchByAssoc($result)) {
            $rowArr = array();

            foreach ($fields as $name => $attribute) {
                $fieldArr = array();
                foreach ($attribute as $k => $v) {
                    $fieldArr[$k] = $v;
                }
                if ($attribute['display']) {
                    $currency_id = null;
                    if (isset($row[$attribute['alias'] . '_currency_id'])) {
                        $currency_id = $row[$attribute['alias'] . '_currency_id'];
                    }
                    $fieldArr['currency_id'] = $currency_id;

                    $vardef = $field_bean->getFieldDefinition($attribute['field']);
                    $relateName = null;
                    if ($vardef['type'] == 'relate') {
                        $relateName = $this->getRelationshipName($row, $name, $attribute);
                    }
                    $fieldArr['relate_name'] = $relateName;

                    $this->checkIfCacheExists($attribute['module'], $attribute['field'], 'DetailView', '');

//                    if (isset($_REQUEST["action"]) && $_REQUEST["action"] == 'DownloadPDF') {
//                        $formattedValue = $this->getFieldInFormattedValue($attribute['module'], $attribute['field'], $attribute['field'], 'DetailView', $row[$name], $currency_id, array(), '');
//                    } else {
                    $formattedValue = $this->generateFieldMarkupUsingTemplateEngine($attribute['module'], $attribute['field'], $attribute['field'], 'DetailView', $row[$name], $currency_id, array(), '', $attribute['link'], $row[$bean_id]);
//                    }
                    if ($stripTags == true) {
                        $formattedValue = urldecode(trim(strip_tags($formattedValue)));
                    }

                    $fieldArr['formattedvalue'] = $formattedValue;

                    if ($attribute['total']) {
                        $totals[$name][] = $row[$name];
                    }
                }
                $rowArr[$name] = $fieldArr;
            }
            array_push($data_returned, $rowArr);
        }
        $data_returned['totals'] = $totals;
        return $data_returned;
    }


    function buildReportRows($fieldsArray, $links = true)
    {
        unset($fieldsArray['totals']);
        $sugar_config = $this->getSugarConfig();
        $row_class = 'oddListRowS1';

        $html = '';
        foreach ($fieldsArray as $name => $row) {
            $html .= "<tr class='" . $row_class . "' height='20'>";
            $j = 1;
            foreach ($row as $field => $attribute) {
                if ($attribute['display']) {
                    $html .= "<td class='col-" . $j . "' valign='top' align='left'>";
                    if ($attribute['link'] && $links) {
                        $html .= "<a href='" .
                            $sugar_config['site_url'] .
                            "/index.php?module=" .
                            $attribute['module'] .
                            "&action=DetailView&record=" .
                            $row[$attribute['alias'] . '_id'] .
                            "'>";
                    }
                    if ($attribute['function'] == 'COUNT' || !empty($attribute['params'])) {
                        $html .= $row[$name];
                    } else {
                        $html .= $attribute["formattedvalue"];
                    }

                    if ($attribute['link'] && $links) {
                        $html .= "</a>";
                    }
                    $html .= "</td>";
                    $j++;
                }
            }

            $html .= "</tr>";
            $row_class = $row_class == 'oddListRowS1' ? 'evenListRowS1' : 'oddListRowS1';

        }
        return $html;
    }


    function build_report_html_with_limit($links = true, $from = null, $limit = null, $group_value = '', $extra = array())
    {
        $sugar_config = $this->getSugarConfig();

        $_group_value = $this->db->quote($group_value);

        $report_sql = $this->build_report_query($_group_value, $extra);

        $fields = $this->getReportTableFieldArray();

        $result = $this->execute_report_query_with_limit($report_sql, $from, $limit);

        $row_class = 'oddListRowS1';

        $j = 0;
        $html = '';
        $totals = array();
        while ($row = $this->db->fetchByAssoc($result)) {
            $GLOBALS['log']->fatal('Row Number ' . $j . ' START');
            $html .= "<tr class='" . $row_class . "' height='20'>";

            foreach ($fields as $name => $attribute) {
                if ($attribute['display']) {
                    $html .= "<td class='' valign='top' align='left'>";
                    if ($attribute['link'] && $links) {
                        $html .= "<a href='" .
                            $sugar_config['site_url'] .
                            "/index.php?module=" .
                            $attribute['module'] .
                            "&action=DetailView&record=" .
                            $row[$attribute['alias'] . '_id'] .
                            "'>";
                    }

                    $currency_id = '';
                    if (isset($row[$attribute['alias'] . '_currency_id'])) {
                        $currency_id = $row[$attribute['alias'] . '_currency_id'];
                    }


                    if ($attribute['function'] == 'COUNT' || !empty($attribute['params'])) {
                        $html .= $row[$name];
                    } else {
                        $this->checkIfCacheExists($attribute['module'], $attribute['field'], 'DetailView', '');

//                        if (isset($_REQUEST["action"]) && $_REQUEST["action"] == 'DownloadPDF') {
//                            $html = $this->getFieldInFormattedValue($attribute['module'], $attribute['field'], $attribute['field'], 'DetailView', $row[$name], $currency_id, array(), '');
//                        } else {
                        $html = $this->generateFieldMarkupUsingTemplateEngine($attribute['module'], $attribute['field'], $attribute['field'], 'DetailView', $row[$name], $currency_id, array(), '');
//                        }
                    }

                    if ($attribute['total']) {
                        $totals[$name][] = $row[$name];
                    }
                    if ($attribute['link'] && $links) {
                        $html .= "</a>";
                    }
                    $html .= "</td>";
                }
            }
            $html .= "</tr>";

            $row_class = $row_class == 'oddListRowS1' ? 'evenListRowS1' : 'oddListRowS1';
            $j++;
        }
        $html .= "</tbody>";

        $html .= $this->getTotalHTML($fields, $totals);

        $html .= "</table>";

        $html .= "    <script type=\"text/javascript\">
                            groupedReportToggler = {

                                toggleList: function(elem) {
                                    $(elem).closest('table.list').find('thead, tbody').each(function(i, e){
                                        if(i>1) {
                                            $(e).toggle();
                                        }
                                    });
                                    if($(elem).find('img').first().attr('src') == 'themes/SuiteR/images/basic_search.gif') {
                                        $(elem).find('img').first().attr('src', 'themes/SuiteR/images/advanced_search.gif');
                                    }
                                    else {
                                        $(elem).find('img').first().attr('src', 'themes/SuiteR/images/basic_search.gif');
                                    }
                                }

                            };
                        </script>";

        return $html;
    }


    public function getFieldInFormattedValue($module, $fieldName, $aow_field, $view, $value, $currency_id, $params, $alt_type)
    {
//        $file = create_cache_directory('modules/AOW_WorkFlow/') . $module . $view . $alt_type . $fieldName . '.tpl';
        $timedate = $this->getTimedate();
        $current_user = $this->getCurrentuser();
//        $beanFiles = $this->getBeanFiles();
//        $beanList = $this->getBeanList();
//        $app_strings = $this->getAppStrings();
        $current_language = $this->getCurrentLanguage();

        $mod_strings = return_module_language($current_language, $module);
        $focus = $this->getFocus($module);


        $fieldList = $this->getFieldList($fieldName, $mod_strings, $module);

        // fill in function return values
        if (!in_array($fieldName, array('email1', 'email2'))) {
            if (!empty($fieldList[$fieldName]['function']['returns']) && $fieldList[$fieldName]['function']['returns'] == 'html') {
                $function = $fieldList[$fieldName]['function']['name'];
                // include various functions required in the various vardefs
                if (isset($fieldList[$fieldName]['function']['include']) && is_file($fieldList[$fieldName]['function']['include']))
                    require_once($fieldList[$fieldName]['function']['include']);
                $_REQUEST[$fieldName] = $value;
                $value = $function($focus, $fieldName, $value, $view);

                $value = str_ireplace($fieldName, $aow_field, $value);
                return $value;
            }
        }


        if (isset($fieldList[$fieldName]['type']) && $fieldList[$fieldName]['type'] == 'link') {
            $fieldList[$fieldName]['id_name'] = $fieldList[$fieldName]['name'] . '_id';

            if ((!isset($fieldList[$fieldName]['module']) || $fieldList[$fieldName]['module'] == '') && $focus->load_relationship($fieldList[$fieldName]['name'])) {
                $relName = $fieldList[$fieldName]['name'];
                $fieldList[$fieldName]['module'] = $focus->$relName->getRelatedModuleName();
                return $fieldList[$fieldName]['module'];
            }
        }


        if (isset($fieldList[$fieldName]['name']) && ($fieldList[$fieldName]['name'] == 'date_entered' || $fieldList[$fieldName]['name'] == 'date_modified')) {
            $fieldList[$fieldName]['name'] = 'aow_temp_date';
            $fieldList['aow_temp_date'] = $fieldList[$fieldName];
            $fieldName = 'aow_temp_date';
            return $fieldList['aow_temp_date'];
        }


        $quicksearch_js = '';
        if (isset($fieldList[$fieldName]['id_name']) && $fieldList[$fieldName]['id_name'] != '' && $fieldList[$fieldName]['id_name'] != $fieldList[$fieldName]['name']) {
            $rel_value = $value;

//            $template_handler = new TemplateHandler();
//            $quicksearch_js = $template_handler->createQuickSearchCode($fieldList, $fieldList, $view);
//            $quicksearch_js = str_replace($fieldName, $aow_field . '_display', $quicksearch_js);
//            $quicksearch_js = str_replace($fieldList[$fieldName]['id_name'], $aow_field, $quicksearch_js);

//            echo $quicksearch_js;

//            if (isset($fieldList[$fieldName]['module']) && $fieldList[$fieldName]['module'] == 'Users') {
//                $rel_value = get_assigned_user_name($value);
//            } else if (isset($fieldList[$fieldName]['module'])) {
//                require_once($beanFiles[$beanList[$fieldList[$fieldName]['module']]]);
//                $rel_focus = new $beanList[$fieldList[$fieldName]['module']];
//                $rel_focus->retrieve($value);
//                if (isset($fieldList[$fieldName]['rname']) && $fieldList[$fieldName]['rname'] != '') {
//                    $relDisplayField = $fieldList[$fieldName]['rname'];
//                } else {
//                    $relDisplayField = 'name';
//                }
//                $rel_value = $rel_focus->$relDisplayField;
//            }

            $fieldList[$fieldList[$fieldName]['id_name']]['value'] = $value;
            $fieldList[$fieldName]['value'] = $rel_value;
            $fieldList[$fieldName]['id_name'] = $aow_field;
            $fieldList[$fieldList[$fieldName]['id_name']]['name'] = $aow_field;
            $fieldList[$fieldName]['name'] = $aow_field . '_display';

            return $value;
        }

        if (isset($fieldList[$fieldName]['type']) && $view == 'DetailView' && ($fieldList[$fieldName]['type'] == 'datetimecombo' || $fieldList[$fieldName]['type'] == 'datetime' || $fieldList[$fieldName]['type'] == 'date')) {
            $value = $focus->convertField($value, $fieldList[$fieldName]);
            if (!empty($params['date_format']) && isset($params['date_format'])) {
                $convert_format = "Y-m-d H:i:s";
                if ($fieldList[$fieldName]['type'] == 'date') $convert_format = "Y-m-d";
                $fieldList[$fieldName]['value'] = $timedate->to_display($value, $convert_format, $params['date_format']);
            } else {
                $fieldList[$fieldName]['value'] = $timedate->to_display_date_time($value, true, true);
            }
            $fieldList[$fieldName]['name'] = $aow_field;
        }

        if (isset($fieldList[$fieldName]['type']) && ($fieldList[$fieldName]['type'] == 'datetimecombo' || $fieldList[$fieldName]['type'] == 'datetime' || $fieldList[$fieldName]['type'] == 'date')) {
            $value = $focus->convertField($value, $fieldList[$fieldName]);
            $fieldList[$fieldName]['value'] = $timedate->to_display_date($value);
            $fieldList[$fieldName]['name'] = $aow_field;
        }

        if (isset($fieldList[$fieldName]['type']) && $fieldList[$fieldName]['type'] == 'currency' && $view != 'EditView') {

            if ($currency_id != '' && !stripos($fieldName, '_USD')) {
                $userCurrencyId = $current_user->getPreference('currency');
                if ($currency_id != $userCurrencyId) {
                    $currency = new Currency();
                    $currency->retrieve($currency_id);
                    $value = $currency->convertToDollar($value);
                    $currency->retrieve($userCurrencyId);
                    $value = $currency->convertFromDollar($value);
                }
            }
            $parentfieldlist[strtoupper($fieldName)] = $value;
            return $value;
        }

        $fieldList[$fieldName]['value'] = $value;
        $fieldList[$fieldName]['name'] = $aow_field;

        return $value;
    }


    public function generateFieldMarkupUsingTemplateEngine($module, $fieldName, $aow_field, $view, $value, $currency_id, $params, $alt_type, $link, $bean_id)
    {
        $file = create_cache_directory('modules/AOW_WorkFlow/') . $module . $view . $alt_type . $fieldName . '.tpl';
        $timedate = $this->getTimedate();
        $current_user = $this->getCurrentuser();
        $beanFiles = $this->getBeanFiles();
        $beanList = $this->getBeanList();
        $app_strings = $this->getAppStrings();
        $current_language = $this->getCurrentLanguage();

        $mod_strings = return_module_language($current_language, $module);
        $focus = $this->getFocus($module);


        $fieldList = $this->getFieldList($fieldName, $mod_strings, $module);

        // fill in function return values
        if (!in_array($fieldName, array('email1', 'email2'))) {
            if (!empty($fieldList[$fieldName]['function']['returns']) && $fieldList[$fieldName]['function']['returns'] == 'html') {
                $function = $fieldList[$fieldName]['function']['name'];
                // include various functions required in the various vardefs
                if (isset($fieldList[$fieldName]['function']['include']) && is_file($fieldList[$fieldName]['function']['include']))
                    require_once($fieldList[$fieldName]['function']['include']);
                $_REQUEST[$fieldName] = $value;
                $value = $function($focus, $fieldName, $value, $view);

                $value = str_ireplace($fieldName, $aow_field, $value);
            }
        }


        if (isset($fieldList[$fieldName]['type']) && $fieldList[$fieldName]['type'] == 'link') {
            $fieldList[$fieldName]['id_name'] = $fieldList[$fieldName]['name'] . '_id';

            if ((!isset($fieldList[$fieldName]['module']) || $fieldList[$fieldName]['module'] == '') && $focus->load_relationship($fieldList[$fieldName]['name'])) {
                $relName = $fieldList[$fieldName]['name'];
                $fieldList[$fieldName]['module'] = $focus->$relName->getRelatedModuleName();
            }
        }


        if (isset($fieldList[$fieldName]['name']) && ($fieldList[$fieldName]['name'] == 'date_entered' || $fieldList[$fieldName]['name'] == 'date_modified')) {
            $fieldList[$fieldName]['name'] = 'aow_temp_date';
            $fieldList['aow_temp_date'] = $fieldList[$fieldName];
            $fieldName = 'aow_temp_date';
        }


        $quicksearch_js = '';
        if (isset($fieldList[$fieldName]['id_name']) && $fieldList[$fieldName]['id_name'] != '' && $fieldList[$fieldName]['id_name'] != $fieldList[$fieldName]['name']) {
            $rel_value = $value;


            $template_handler = new TemplateHandler();
            $quicksearch_js = $template_handler->createQuickSearchCode($fieldList, $fieldList, $view);
            $quicksearch_js = str_replace($fieldName, $aow_field . '_display', $quicksearch_js);
            $quicksearch_js = str_replace($fieldList[$fieldName]['id_name'], $aow_field, $quicksearch_js);

            echo $quicksearch_js;

            if (isset($fieldList[$fieldName]['module']) && $fieldList[$fieldName]['module'] == 'Users') {
                $rel_value = get_assigned_user_name($value);
            } else if (isset($fieldList[$fieldName]['module'])) {
                require_once($beanFiles[$beanList[$fieldList[$fieldName]['module']]]);
                $rel_focus = new $beanList[$fieldList[$fieldName]['module']];
                $rel_focus->retrieve($value);
                if (isset($fieldList[$fieldName]['rname']) && $fieldList[$fieldName]['rname'] != '') {
                    $relDisplayField = $fieldList[$fieldName]['rname'];
                } else {
                    $relDisplayField = 'name';
                }
                $rel_value = $rel_focus->$relDisplayField;
            }

            $fieldList[$fieldList[$fieldName]['id_name']]['value'] = $value;
            $fieldList[$fieldName]['value'] = $rel_value;
            $fieldList[$fieldName]['id_name'] = $aow_field;
            $fieldList[$fieldList[$fieldName]['id_name']]['name'] = $aow_field;
            $fieldList[$fieldName]['name'] = $aow_field . '_display';

        } else if (isset($fieldList[$fieldName]['type']) && $view == 'DetailView' && ($fieldList[$fieldName]['type'] == 'datetimecombo' || $fieldList[$fieldName]['type'] == 'datetime' || $fieldList[$fieldName]['type'] == 'date')) {
            $value = $focus->convertField($value, $fieldList[$fieldName]);
            if (!empty($params['date_format']) && isset($params['date_format'])) {
                $convert_format = "Y-m-d H:i:s";
                if ($fieldList[$fieldName]['type'] == 'date') $convert_format = "Y-m-d";
                $fieldList[$fieldName]['value'] = $timedate->to_display($value, $convert_format, $params['date_format']);
            } else {
                $fieldList[$fieldName]['value'] = $timedate->to_display_date_time($value, true, true);
            }
            $fieldList[$fieldName]['name'] = $aow_field;
        } else if (isset($fieldList[$fieldName]['type']) && ($fieldList[$fieldName]['type'] == 'datetimecombo' || $fieldList[$fieldName]['type'] == 'datetime' || $fieldList[$fieldName]['type'] == 'date')) {
            $value = $focus->convertField($value, $fieldList[$fieldName]);
            $fieldList[$fieldName]['value'] = $timedate->to_display_date($value);
            $fieldList[$fieldName]['name'] = $aow_field;
        } else {
            $fieldList[$fieldName]['value'] = $value;
            $fieldList[$fieldName]['name'] = $aow_field;

        }


        $ss = new Sugar_Smarty();
        $ss = $this->setDateFormats($ss);

        if (isset($fieldList[$fieldName]['type']) && $fieldList[$fieldName]['type'] == 'currency' && $view != 'EditView') {
            static $sfh;

            if (!isset($sfh)) {

                $sfh = new SugarFieldHandler();
            }

            if ($currency_id != '' && !stripos($fieldName, '_USD')) {
                $userCurrencyId = $current_user->getPreference('currency');
                if ($currency_id != $userCurrencyId) {
                    $currency = new Currency();
                    $currency->retrieve($currency_id);
                    $value = $currency->convertToDollar($value);
                    $currency->retrieve($userCurrencyId);
                    $value = $currency->convertFromDollar($value);
                }
            }
            $parentfieldlist[strtoupper($fieldName)] = $value;
            $markup = $sfh->displaySmarty($parentfieldlist, $fieldList[$fieldName], 'ListView', array());
        } else {
            $ss->assign("QS_JS", $quicksearch_js);
            $ss->assign("fields", $fieldList);
            $ss->assign("form_name", $view);
            $ss->assign("bean", $focus);

            // add in any additional strings
            $ss->assign("MOD", $mod_strings);
            $ss->assign("APP", $app_strings);

            $markup = $ss->fetch($file);
        }
        if($link == "1"){
            $linkURL = "index.php?module=".$module."&action=DetailView&record=".$bean_id;
            $markup = '<a href="'.$linkURL.'" >'.$markup.'</a>';
        }
        return $markup;
    }


    /**
     * @param $module
     * @param $fieldName
     * @param $view
     * @param $alt_type
     * @param $file
     * @return void
     */
    public function createCache($module, $fieldName, $view, $alt_type, $file)
    {
        $beanFiles = $this->getBeanFiles();
        $beanList = $this->getBeanList();
        $moduleName = $beanList[$module];
        $moduleClassLocation = $beanFiles[$moduleName];


        $focus = new $moduleName;
        $vardef = $focus->getFieldDefinition($fieldName);

        // Bug: check for AOR value SecurityGroups value missing
        $fieldIsSecurityGroup = (stristr($fieldName, 'securitygroups') != false && empty($vardef));
        if ($fieldIsSecurityGroup) {
            $module = 'SecurityGroups';
            $moduleName = $beanList[$module];
            $moduleClassLocation = $beanFiles[$moduleName];
            $focus = new $moduleName;
        }

        require_once($moduleClassLocation);

        // if this is the id relation field, then don't have a pop-up selector.
        if ($vardef['type'] == 'relate' && $vardef['id_name'] == $vardef['name']) {
            $vardef['type'] = 'varchar';
        }

        if (isset($vardef['precision'])) {
            unset($vardef['precision']);
        }

        //TODO Fix datetimecomebo
        //temp work around
        if ($vardef['type'] == 'datetimecombo') {
            $vardef['type'] = 'datetime';
        }

        // trim down textbox display
        if ($vardef['type'] == 'text') {
            $vardef['rows'] = 2;
            $vardef['cols'] = 32;
        }

        // create the dropdowns for the parent type fields
        if ($vardef['type'] == 'parent_type') {
            $vardef['type'] = 'enum';
        }

        if ($vardef['type'] == 'link') {
            $vardef['type'] = 'relate';
            $vardef['rname'] = 'name';
            $vardef['id_name'] = $vardef['name'] . '_id';
            if ((!isset($vardef['module']) || $vardef['module'] == '') && $focus->load_relationship($vardef['name'])) {
                $relName = $vardef['name'];
                $vardef['module'] = $focus->$relName->getRelatedModuleName();
            }

        }

        //check for $alt_type
        if ($alt_type != '') {
            $vardef['type'] = $alt_type;
        }

        // remove the special text entry field function 'getEmailAddressWidget'
        if (isset($vardef['function'])
            && ($vardef['function'] == 'getEmailAddressWidget'
                || $vardef['function']['name'] == 'getEmailAddressWidget')) {
            unset($vardef['function']);
        }


        if (isset($vardef['name']) && ($vardef['name'] == 'date_entered' || $vardef['name'] == 'date_modified')) {
            $vardef['name'] = 'aow_temp_date';
        }

        // load SugarFieldHandler to render the field tpl file
        static $sfh;

        if (!isset($sfh)) {
            $sfh = new SugarFieldHandler();
        }

        $contents = $sfh->displaySmarty('fields', $vardef, $view, array());

        // Remove all the copyright comments
        $contents = preg_replace('/\{\*[^\}]*?\*\}/', '', $contents);

        if ($view == 'EditView' && ($vardef['type'] == 'relate' || $vardef['type'] == 'parent')) {
            $contents = str_replace('"' . $vardef['id_name'] . '"', '{/literal}"{$fields.' . $vardef['name'] . '.id_name}"{literal}', $contents);
            $contents = str_replace('"' . $vardef['name'] . '"', '{/literal}"{$fields.' . $vardef['name'] . '.name}"{literal}', $contents);
        }

        // hack to disable one of the js calls in this control
        if (isset($vardef['function']) && ($vardef['function'] == 'getCurrencyDropDown' || $vardef['function']['name'] == 'getCurrencyDropDown'))
            $contents .= "{literal}<script>function CurrencyConvertAll() { return; }</script>{/literal}";

        // Save it to the cache file
        if ($fh = @sugar_fopen($file, 'w')) {
            fputs($fh, $contents);
            fclose($fh);
        }

        return $focus;
    }


    function customGetModuleFieldMarkup($module, $fieldName, $aow_field, $view = 'EditView', $value = '', $alt_type = '', $currency_id = '', $params = array())
    {


        if (isset($_REQUEST["action"]) && $_REQUEST["action"] == 'DownloadPDF') {
            $markup = $this->getFieldInFormattedValue($module, $fieldName, $aow_field, $view, $value, $currency_id, $params, $alt_type);
        } else {
            $markup = $this->generateFieldMarkupUsingTemplateEngine($module, $fieldName, $aow_field, $view, $value, $currency_id, $params, $alt_type);
        }

        return $markup;
    }


    function getViewParams($group = false, $array = false, $level = false)
    {
        $rows = array();
        if (isset($this->requestData['fieldView']) && !empty($this->requestData['fieldView'])) {
            foreach ($this->requestData['fieldView'] as $row) {
                if (isset($row['aor_fields_deleted']) &&
                    $row['aor_fields_deleted'] == 0 &&
                    $row['aor_fields_deleted'] != null &&
                    ($level == $row['aor_fields_group_display'] ||
                        $level == false ||
                        ($row['aor_fields_group_display'] == null && $this->groupBy == $row['aor_fields_field_order']))) {
                    $field = new AOR_Field();
                    foreach ($row as $key => $item) {
                        $newKey = substr($key, 11);
                        if ($newKey == "module_path") {
                            $field->$newKey = base64_encode(serialize(explode(":", $item)));
                        } else {
                            $field->$newKey = $item;
                        }
                    }
                    //set the group option.
                    if ($group == true) {
                        if ($field->group_display == $level ||
                            ($field->group_display == null && $level == 1 && $this->groupBy == $field->field_order)) {
                            if ($array == true) {
                                return array($field->toArray());
                            } else {
                                return $field;
                            }
                        } else {
                            return null;
                        }
                    } else {
                        $rows[$row['aor_fields_field_order']] = $field;
                    }
                }
            }

            if ($this->requestData['fieldView'][0]['aor_fields_group_display'] != "-1" && count($rows) != 0) {
                $rows[$this->requestData['fieldView'][0]['aor_fields_group_display']]->group_display = '1';
            }
            ksort($rows);
        }
        return $rows;
    }

    function getConditionParams()
    {
        $rows = array();
        if (isset($this->requestData['conditionView']) && !empty($this->requestData['conditionView'])) {
            foreach ($this->requestData['conditionView'] as $row) {
                if ($row['aor_conditions_deleted'] == 0 && $row['aor_conditions_deleted'] != null) {
                    $field = new AOR_Condition();
                    foreach ($row as $key => $item) {
                        $newKey = substr($key, 15);
                        if ($newKey == "module_path") {
                            $field->$newKey = base64_encode(serialize(explode(":", $item)));
                        } else {
                            $field->$newKey = $item;
                        }
                    }
                    $rows[$row['aor_conditions_order']] = $field;
                }
            }
            ksort($rows);
        }
        return $rows;
    }

    function build_group_report($from = -1, $limit = null, $links = true, $extra = array())
    {
        global $beanList, $timedate;

        $html = '';
        $query = '';
        $query_array = array();
        $module = new $beanList[$this->report_module]();
        $field = false;
        //get the group field.
        if ($this->requestData != false) {
            $field = $this->getViewParams(true, false, 1);
        } else {
            $sql = "SELECT id FROM aor_fields WHERE aor_report_id = '" . $this->bean->id . "' AND group_display = 1 AND deleted = 0 ORDER BY field_order ASC";
            $field_id = $this->db->getOne($sql);
            if (!empty($field_id)) {
                $field = BeanFactory::getBean("AOR_Fields", $field_id);
            }
        }

        if (!$field) {
            $query_array['select'][] = $module->table_name . ".id AS '" . $module->table_name . "_id'";
        }
//        $field = $this->getGroupedByField();
//        if ($field != false) {
//            $groupQueryResult = $this->getGroupReportQueryResult($extra);
//        }

        if ($field != false) {

            $field_label = str_replace(' ', '_', $field->label);

            $path = unserialize(base64_decode($field->module_path));

            $field_module = $module;
            $table_alias = $field_module->table_name;
            if (!empty($path[0]) && $path[0] != $module->module_dir) {
                foreach ($path as $rel) {
                    $new_field_module = new $beanList[getRelatedModule($field_module->module_dir, $rel)];
                    $oldAlias = $table_alias;
                    $table_alias = $table_alias . ":" . $rel;

                    $query_array = $this->build_report_query_join(
                        $rel,
                        $table_alias,
                        $oldAlias,
                        $field_module,
                        'relationship',
                        $query_array,
                        $new_field_module
                    );
                    $field_module = $new_field_module;
                }
            }

            $data = $field_module->field_defs[$field->field];

            if ($data['type'] == 'relate' && isset($data['id_name'])) {
                $field->field = $data['id_name'];
            }

            if ($data['type'] == 'currency' && !stripos(
                    $field->field,
                    '_USD'
                ) && isset($field_module->field_defs['currency_id'])
            ) {
                if ((isset($field_module->field_defs['currency_id']['source']) &&
                    $field_module->field_defs['currency_id']['source'] == 'custom_fields')
                ) {
                    $query['select'][$table_alias . '_currency_id'] =
                        $table_alias . '_cstm' . ".currency_id AS '" . $table_alias . "_currency_id'";
                } else {
                    $query_array['select'][$table_alias . '_currency_id'] =
                        $table_alias . ".currency_id AS '" . $table_alias . "_currency_id'";
                }
            }

            if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                $select_field = $this->db->quoteIdentifier($table_alias . '_cstm') . '.' . $field->field;
                // PHP Deprecation - declare array
                if(empty($query)) {
                    $query = array();
                }
                // Fix for #1251 - added a missing parameter to the function call
                $query_array = $this->build_report_query_join(
                    $table_alias . '_cstm',
                    $table_alias . '_cstm',
                    $table_alias,
                    $field_module,
                    'custom',
                    $query
                );
            } else {
                $select_field = $this->db->quoteIdentifier($table_alias) . '.' . $field->field;
            }

            if ($field->sort_by != '') {
                $query_array['sort_by'][] = $field_label . ' ' . $field->sort_by;
            }

            if ($field->format && in_array($data['type'], array('date', 'datetime', 'datetimecombo'))) {
                if (in_array($data['type'], array('datetime', 'datetimecombo'))) {
                    $select_field = $this->db->convert($select_field, 'add_tz_offset');
                }
                $select_field = $this->db->convert(
                    $select_field,
                    'date_format',
                    array($timedate->getCalFormat($field->format))
                );
            }

            if ($field->field_function != null) {
                $select_field = $field->field_function . '(' . $select_field . ')';
            }

            if ($field->group_by == 1) {
                $query_array['group_by'][] = $select_field;
            }

            $query_array['select'][] = $select_field . " AS '" . $field_label . "'";
            if (isset($extra['select']) && $extra['select']) {
                foreach ($extra['select'] as $selectField => $selectAlias) {
                    if ($selectAlias) {
                        $query_array['select'][] = $selectField . " AS " . $selectAlias;
                    } else {
                        $query_array['select'][] = $selectField;
                    }
                }
            }
            $query_array['where'][] = $select_field . " IS NOT NULL AND ";
            if (isset($extra['where']) && $extra['where']) {
                $query_array['where'][] = implode(' AND ', $extra['where']) . ' AND ';
            }

            $query_array = $this->build_report_query_where($query_array);

            foreach ($query_array['select'] as $select) {
                $query .= ($query == '' ? 'SELECT ' : ', ') . $select;
            }

            $query .= ' FROM ' . $module->table_name . ' ';

            if (isset($query_array['join'])) {
                foreach ($query_array['join'] as $join) {
                    $query .= $join;
                }
            }
            if (isset($query_array['where'])) {
                $query_where = '';
                foreach ($query_array['where'] as $where) {
                    $query_where .= ($query_where == '' ? 'WHERE ' : ' ') . $where;
                }

                $query_where = $this->queryWhereRepair($query_where);

                $query .= ' ' . $query_where;
            }

            if (isset($query_array['group_by'])) {
                $query_group_by = '';
                foreach ($query_array['group_by'] as $group_by) {
                    $query_group_by .= ($query_group_by == '' ? 'GROUP BY ' : ', ') . $group_by;
                }
                $query .= ' ' . $query_group_by;
            }

            if (isset($query_array['sort_by'])) {
                $query_sort_by = '';
                foreach ($query_array['sort_by'] as $sort_by) {
                    $query_sort_by .= ($query_sort_by == '' ? 'ORDER BY ' : ', ') . $sort_by;
                }
                $query .= ' ' . $query_sort_by;
            }
            $result = $this->db->query($query);
            $checkListed = array();
            while ($row = $this->db->fetchByAssoc($result)) {
                if ($html != '') {
                    $html .= '<br />';
                }
                if (!isset($checkListed[$row[$field_label]])) {
                    $checkListed[$row[$field_label]] = $row[$field_label];
                    $html .= $this->build_report_html($from, null, $links, $row[$field_label], create_guid(), $extra);
                }

            }
        }

        if ($html == '') {
            $html = $this->build_report_html($from, null, $links, '', create_guid(), $extra);
        }

        return $html;

    }

    public function build_group_report_with_limit($from = null, $limit = null, $links = true, $extra = array())
    {
        $html = '';
        $field = $this->getGroupedByField();
        if ($field != false) {
            $groupQueryResult = $this->getGroupReportQueryResult($extra);
        }

        if ($field != false) {
            $field_label = str_replace(' ', '_', $field->label);
            $checkListed = array();
            while ($row = $this->db->fetchByAssoc($groupQueryResult)) {
                if ($html != '') {
                    $html .= '<br />';
                }
                if (!isset($checkListed[$row[$field_label]])) {
                    $checkListed[$row[$field_label]] = $row[$field_label];
                    $report_sql = $this->getReportQuery('', $extra);
                    $result = $this->getReportQueryResult($from, $limit, $report_sql);
                    $formateedResultsArray = $this->ReportFormatFields($result);
                    $html .= $this->buildReportRows($formateedResultsArray, $links);
                    $html .= $this->getReportFooter($formateedResultsArray['totals']);
                }
            }
        }

        if ($html == '') {
            $report_sql = $this->getReportQuery('', $extra);
            $result = $this->getReportQueryResult($from, $limit, $report_sql);
            $formateedResultsArray = $this->ReportFormatFields($result);
            $html .= $this->buildReportRows($formateedResultsArray, $links);
            $html .= $this->getReportFooter($formateedResultsArray['totals']);
            return $html;
        }

        return $html;

    }

    function build_report_query_where($query = array())
    {
        $sugar_config = $this->getSugarConfig();
        $beanList = $this->getBeanList();
        $app_list_strings = $this->getAppListStrings();

        $aor_sql_operator_list['Equal_To'] = '=';
        $aor_sql_operator_list['Not_Equal_To'] = '!=';
        $aor_sql_operator_list['Greater_Than'] = '>';
        $aor_sql_operator_list['Less_Than'] = '<';
        $aor_sql_operator_list['Greater_Than_or_Equal_To'] = '>=';
        $aor_sql_operator_list['Less_Than_or_Equal_To'] = '<=';
        $aor_sql_operator_list['Contains'] = 'LIKE';
        $aor_sql_operator_list['Not_Contains'] = 'NOT LIKE';
        $aor_sql_operator_list['Starts_With'] = 'LIKE';
        $aor_sql_operator_list['Ends_With'] = 'LIKE';

        $closure = false;
        if (!empty($query['where'])) {
            $query['where'][] = '(';
            $closure = true;
        }

        if ($beanList[$this->report_module]) {
            $module = new $beanList[$this->report_module]();

            if ($this->requestData != false) {
                $rows = $this->getConditionParams();
            } else {
                $rows = $this->getConditionArrayForReport();
            }

            $tiltLogicOp = true;

            foreach ($rows as $condition) {

                $path = unserialize(base64_decode($condition->module_path));

                $condition_module = $module;
                $table_alias = $condition_module->table_name;
                $oldAlias = $table_alias;
                if (!empty($path[0]) && $path[0] != $module->module_dir) {
                    foreach ($path as $rel) {
                        if (empty($rel)) {
                            continue;
                        }
                        // Bug: Prevents relationships from loading.
                        $new_condition_module = new $beanList[getRelatedModule($condition_module->module_dir, $rel)];
                        //Check if the user has access to the related module
                        if (!(ACLController::checkAccess($new_condition_module->module_name, 'list', true))) {
                            return false;
                        }
                        $oldAlias = $table_alias;
                        $table_alias = $table_alias . ":" . $rel;
                        $query = $this->build_report_query_join($rel, $table_alias, $oldAlias, $condition_module,
                            'relationship', $query, $new_condition_module);
                        $condition_module = $new_condition_module;
                    }
                }
                if (isset($aor_sql_operator_list[$condition->operator])) {
                    $where_set = false;

                    $data = $condition_module->field_defs[$condition->field];

                    if ($data['type'] == 'relate' && isset($data['id_name'])) {
                        $condition->field = $data['id_name'];
                        $data_new = $condition_module->field_defs[$condition->field];
                        if (!empty($data_new['source']) && $data_new['source'] == 'non-db' && $data_new['type'] != 'link' && isset($data['link'])) {
                            $data_new['type'] = 'link';
                            $data_new['relationship'] = $data['link'];
                        }
                        $data = $data_new;
                    }

                    if ($data['type'] == 'link' && $data['source'] == 'non-db') {
                        $new_field_module = new $beanList[getRelatedModule($condition_module->module_dir,
                            $data['relationship'])];
                        $table_alias = $data['relationship'];
                        $query = $this->build_report_query_join($data['relationship'], $table_alias, $oldAlias,
                            $condition_module, 'relationship', $query, $new_field_module);
                        $condition_module = $new_field_module;

                        // Debugging: security groups conditions - It's a hack to just get the query working
                        if ($condition_module->module_dir = 'SecurityGroups' && count($path) > 1) {
                            $table_alias = $oldAlias . ':' . $rel;
                        }
                        $condition->field = 'id';
                    }
                    if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                        $field = $this->db->quoteIdentifier($table_alias . '_cstm') . '.' . $condition->field;
                        $query = $this->build_report_query_join($table_alias . '_cstm', $table_alias . '_cstm',
                            $table_alias, $condition_module, 'custom', $query);
                    } else {
                        $field = $this->db->quoteIdentifier($table_alias) . '.' . $condition->field;
                    }

                    if (!empty($this->user_parameters[$condition->id]) && $condition->parameter) {
                        $condParam = $this->user_parameters[$condition->id];
                        $condition->value = $condParam['value'];
                        $condition->operator = $condParam['operator'];
                        $condition->value_type = $condParam['type'];
                    }

                    switch ($condition->value_type) {
                        case 'Field':
                            $data = $condition_module->field_defs[$condition->value];

                            if ($data['type'] == 'relate' && isset($data['id_name'])) {
                                $condition->value = $data['id_name'];
                                $data_new = $condition_module->field_defs[$condition->value];
                                if ($data_new['source'] == 'non-db' && $data_new['type'] != 'link' && isset($data['link'])) {
                                    $data_new['type'] = 'link';
                                    $data_new['relationship'] = $data['link'];
                                }
                                $data = $data_new;
                            }

                            if ($data['type'] == 'link' && $data['source'] == 'non-db') {
                                $new_field_module = new $beanList[getRelatedModule($condition_module->module_dir,
                                    $data['relationship'])];
                                $table_alias = $data['relationship'];
                                $query = $this->build_report_query_join($data['relationship'], $table_alias, $oldAlias,
                                    $condition_module, 'relationship', $query, $new_field_module);
                                $condition_module = $new_field_module;
                                $condition->field = 'id';
                            }
                            if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                                $value = $condition_module->table_name . '_cstm.' . $condition->value;
                                $query = $this->build_report_query_join($condition_module->table_name . '_cstm',
                                    $table_alias . '_cstm', $table_alias, $condition_module, 'custom', $query);
                            } else {
                                $value = ($table_alias ? $this->db->quoteIdentifier($table_alias) : $condition_module->table_name) . '.' . $condition->value;
                            }
                            break;

                        case 'Date':
                            $params = unserialize(base64_decode($condition->value));

                            // Fix for issue #1272 - AOR_Report module cannot update Date type parameter.
                            if ($params == false) {
                                $params = $condition->value;
                            }

                            if ($params[0] == 'now') {
                                if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
                                    $value = 'GetDate()';
                                } else {
                                    $value = 'NOW()';
                                }
                            } else {
                                if ($params[0] == 'today') {
                                    if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
                                        //$field =
                                        $value = 'CAST(GETDATE() AS DATE)';
                                    } else {
                                        $field = 'DATE(' . $field . ')';
                                        $value = 'Curdate()';
                                    }
                                } else {
                                    $data = $condition_module->field_defs[$params[0]];
                                    if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
                                        $value = $condition_module->table_name . '_cstm.' . $params[0];
                                        $query = $this->build_report_query_join($condition_module->table_name . '_cstm',
                                            $table_alias . '_cstm', $table_alias, $condition_module, 'custom', $query);
                                    } else {
                                        $value = $condition_module->table_name . '.' . $params[0];
                                    }
                                }
                            }

                            if ($params[1] != 'now') {
                                switch ($params[3]) {
                                    case 'business_hours';
                                        //business hours not implemented for query, default to hours
                                        $params[3] = 'hours';
                                    default:
                                        if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
                                            $value = "DATEADD(" . $params[3] . ",  " . $app_list_strings['aor_date_operator'][$params[1]] . " $params[2], $value)";
                                        } else {
                                            $value = "DATE_ADD($value, INTERVAL " . $app_list_strings['aor_date_operator'][$params[1]] . " $params[2] " . $params[3] . ")";
                                        }
                                        break;
                                }
                            }
                            break;

                        case 'Multi':
                            $sep = ' AND ';
                            if ($condition->operator == 'Equal_To') {
                                $sep = ' OR ';
                            }
                            $multi_values = unencodeMultienum($condition->value);
                            if (!empty($multi_values)) {
                                $value = '(';
                                foreach ($multi_values as $multi_value) {
                                    if ($value != '(') {
                                        $value .= $sep;
                                    }
                                    $value .= $field . ' ' . $aor_sql_operator_list[$condition->operator] . " '" . $multi_value . "'";
                                }
                                $value .= ')';
                            }
                            $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND ')) . $value;
                            $where_set = true;
                            break;
                        case "Period":
                            if (array_key_exists($condition->value, $app_list_strings['date_time_period_list'])) {
                                $params = $condition->value;
                            } else {
                                $params = base64_decode($condition->value);
                            }

                            $value = '"' . DateHelper::getPeriodDate($params, $condition->condition_period_length)
                                    ->format('Y-m-d H:i:s') . '"';
                            break;
                        case "CurrentUserID":
                            global $current_user;
                            if (!empty($this->view_as)) {
                                $value = '"' . $this->view_as . '"';
                            } else {
                                $value = '"' . $current_user->id . '"';
                            }
                            break;
                        case 'Value':
                        default:
                            $value = "'" . $this->db->quote($condition->value) . "'";
                            break;
                    }

                    //handle like conditions
                    Switch ($condition->operator) {
                        case 'Contains':
                        case 'Not_Contains':
                            $value = "CONCAT('%', " . $value . " ,'%')";
                            break;
                        case 'Starts_With':
                            $value = "CONCAT(" . $value . " ,'%')";
                            break;
                        case 'Ends_With':
                            $value = "CONCAT('%', " . $value . ")";
                            break;
                    }

                    if ($condition->value_type == 'Value' && !$condition->value && $condition->operator == 'Equal_To') {
                        $value = "{$value} OR {$field} IS NULL";
                    }

                    if (!$where_set) {
                        if ($condition->value_type == "Period") {
                            if (array_key_exists($condition->value, $app_list_strings['date_time_period_list'])) {
                                $params = $condition->value;
                            } else {
                                $params = base64_decode($condition->value);
                            }
                            $date = DateHelper::getPeriodEndDate($params, $condition->condition_period_length)->format('Y-m-d H:i:s');
                            $value = '"' . DateHelper::getPeriodDate($params, $condition->condition_period_length)->format('Y-m-d H:i:s') . '"';

                            $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND '));
                            $tiltLogicOp = false;

                            switch ($aor_sql_operator_list[$condition->operator]) {
                                case "=":
                                    $query['where'][] = $field . ' BETWEEN ' . $value . ' AND ' . '"' . $date . '"';
                                    break;
                                case "!=":
                                    $query['where'][] = $field . ' NOT BETWEEN ' . $value . ' AND ' . '"' . $date . '"';
                                    break;
                                case ">":
                                case "<":
                                case ">=":
                                case "<=":
                                    $query['where'][] = $field . ' ' . $aor_sql_operator_list[$condition->operator] . ' ' . $value;
                                    break;
                            }
                        } else {
                            if (!$where_set) {
                                $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND ')) . $field . ' ' . $aor_sql_operator_list[$condition->operator] . ' ' . $value;
                            }
                        }
                    }
                    $tiltLogicOp = false;
                } else {
                    if ($condition->parenthesis) {
                        if ($condition->parenthesis == 'START') {
                            $query['where'][] = ($tiltLogicOp ? '' : ($condition->logic_op ? $condition->logic_op . ' ' : 'AND ')) . '(';
                            $tiltLogicOp = true;
                        } else {
                            $query['where'][] = ')';
                            $tiltLogicOp = false;
                        }
                    } else {
                        $GLOBALS['log']->debug('illegal condition');
                    }
                }

            }

            if (isset($query['where']) && $query['where']) {
                array_unshift($query['where'], '(');
                $query['where'][] = ') AND ';
            }
            $query['where'][] = $module->table_name . ".deleted = 0 " . $this->build_report_access_query($module,
                    $module->table_name);

        }

        if ($closure) {
            $query['where'][] = ')';
        }

        return $query;
    }

    private function queryWhereRepair($query_where)
    {

        // remove empty parenthesis and fix query syntax

        $safe = 0;
        $query_where_clean = '';
        while ($query_where_clean != $query_where) {
            $query_where_clean = $query_where;
            $query_where = preg_replace('/\b(AND|OR)\s*\(\s*\)|[^\w+\s*]\(\s*\)/i', '', $query_where_clean);
            $safe++;
            if ($safe > 100) {
                $GLOBALS['log']->fatal('Invalid report query conditions');
                break;
            }
        }

        return $query_where;
    }

    function build_report_csv()
    {

        ini_set('zlib.output_compression', 'Off');

        ob_start();

        $csv = $this->csvContent();
        ob_clean();
        header("Pragma: cache");
        header("Content-type: text/comma-separated-values; charset=" . $GLOBALS['locale']->getExportCharset());
        header("Content-Disposition: attachment; filename=\"{$this->name}.csv\"");
        header("Content-transfer-encoding: binary");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . TimeDate::httpTime());
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Content-Length: " . mb_strlen($csv, '8bit'));

        print $csv;

    }

    public function csvContent() : string
    {
        global $beanList;
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
                $csv .= $this->encloseForCSV($field->label);
                $csv .= $delimiter;
            }
            ++$i;
        }


        $sql = $this->build_export_report_query();
        $result = $this->db->query($sql);

        while ($row = $this->db->fetchByAssoc($result)) {
            $csv .= "\r\n";
            foreach ($fields as $name => $att) {
                $vardef = $field_bean->getFieldDefinition($att['field']);
                $currency_id = isset($row[$att['alias'] . '_currency_id']) ? $row[$att['alias'] . '_currency_id'] : '';
                if ($att['display']) {
                    $row[$name] = html_entity_decode_utf8($row[$name]);
                    if ($vardef['type'] == 'relate') {
                        $row[$name] = $this->getRelationshipName($row, $name, $att);
                    }
                    $csv .= $this->encloseForCSV($row[$name]);
                    $csv .= $delimiter;
                }
            }
        }

        $csv = $GLOBALS['locale']->translateCharset($csv, 'UTF-8', $GLOBALS['locale']->getExportCharset());
        if (!empty($sugar_config['export_excel_compatible'])) {
            $csv = chr(255) . chr(254) . mb_convert_encoding($csv, 'UTF-16LE', 'UTF-8');
        }
        return $csv;
    }

    function build_export_report_query($group_value = '', $extra = array())
    {
        global $beanList;

        $module = new $beanList[$this->report_module]();

        $query = '';
        $query_array = array();

        //Check if the user has access to the target module
        if (!(ACLController::checkAccess($this->report_module, 'list', true))) {
            return false;
        }

        $query_array = $this->build_report_query_select_advanced($query_array, $group_value);
        if (isset($extra['where']) && $extra['where']) {
            $query_array['where'][] = implode(' AND ', $extra['where']) . ' AND ';
        }
        $query_array = $this->build_report_query_where($query_array);

        foreach ($query_array['select'] as $select) {
            $query .= ($query == '' ? 'SELECT ' : ', ') . $select;
        }

        if (empty($query_array['group_by'])) {
            foreach ($query_array['id_select'] as $select) {
                $query .= ', ' . $select;
            }
        }

        $query .= ' FROM ' . $this->db->quoteIdentifier($module->table_name) . ' ';

        if (isset($query_array['join'])) {
            foreach ($query_array['join'] as $join) {
                $query .= $join;
            }
        }
        if (isset($query_array['where'])) {
            $query_where = '';
            foreach ($query_array['where'] as $where) {
                $query_where .= ($query_where == '' ? 'WHERE ' : ' ') . $where;
            }

            $query_where = $this->queryWhereRepair($query_where);

            $query .= ' ' . $query_where;
        }

        if (isset($query_array['group_by'])) {
            $query_group_by = '';
            foreach ($query_array['group_by'] as $group_by) {
                $query_group_by .= ($query_group_by == '' ? 'GROUP BY ' : ', ') . $group_by;
            }
            if (isset($query_array['second_group_by']) && $query_group_by != '') {
                foreach ($query_array['second_group_by'] as $group_by) {
                    $query_group_by .= ', ' . $group_by;
                }
            }
            $query .= ' ' . $query_group_by;
        }

        if (isset($query_array['sort_by'])) {
            $query_sort_by = '';
            foreach ($query_array['sort_by'] as $sort_by) {
                $query_sort_by .= ($query_sort_by == '' ? 'ORDER BY ' : ', ') . $sort_by;
            }
            $query .= ' ' . $query_sort_by;
        }

        return $query;

    }

    private function encloseForCSV($field)
    {
        if ($this->bean->text_delimit_disabled_c == 1) {
            return $field;
        } elseif (!empty($this->bean->text_delimiter_c)) {
            return trim(html_entity_decode($this->bean->text_delimiter_c)) . $field . trim(html_entity_decode($this->bean->text_delimiter_c));
        } else {
            return '"' . $field . '"';
        }
    }

    /**
     * @param $timedate
     * @param $ss
     * @param $current_user
     */
    public function setDateFormats($ss)
    {
        global $timedate, $current_user;

        $time_format = $timedate->get_user_time_format();
        $date_format = $timedate->get_cal_date_format();
        $ss->assign('USER_DATEFORMAT', $timedate->get_user_date_format());
        $ss->assign('TIME_FORMAT', $time_format);
        $time_separator = ":";
        $match = array();
        if (preg_match('/\d+([^\d])\d+([^\d]*)/s', $time_format, $match)) {
            $time_separator = $match[1];
        }
        $t23 = strpos($time_format, '23') !== false ? '%H' : '%I';
        if (!isset($match[2]) || $match[2] == '') {
            $ss->assign('CALENDAR_FORMAT', $date_format . ' ' . $t23 . $time_separator . "%M");
        } else {
            $pm = $match[2] == "pm" ? "%P" : "%p";
            $ss->assign('CALENDAR_FORMAT', $date_format . ' ' . $t23 . $time_separator . "%M" . $pm);
        }

        $ss->assign('CALENDAR_FDOW', $current_user->get_first_day_of_week());

        return $ss;
    }

    /**
     * @param $module
     * @param $focus
     * @return mixed
     */
    public function getFocus($module)
    {
        global $beanList;
        $moduleName = $beanList[$module];
        if ($this->_focus == null || !is_a($this->_focus, $moduleName)) {
            global $beanFiles;
            global $beanList;

            $moduleName = $beanList[$module];
            $moduleClassLocation = $beanFiles[$moduleName];

            require_once($moduleClassLocation);
            $focus = new $moduleName;
            $this->_focus = $focus;
        }
        return $this->_focus;
    }


    public function getFieldList($fieldName, $mod_strings, $module)
    {
        $varDefLoaded = false;
        foreach ($this->_fieldList as $item) {
            if ($item['module'] == $module) {
                $varDefLoaded = true;
            }
        }
        if (!$varDefLoaded) {
            global $app_list_strings;
            $focus = $this->getFocus($module);
            $vardefFields = $focus->getFieldDefinitions();
            $fieldList = array();
            if (isset($vardefFields[$fieldName]['type']) && $vardefFields[$fieldName]['type'] == 'parent_type') {
                $focus->field_defs[$fieldName]['options'] = $focus->field_defs[$vardefFields[$fieldName]['group']]['options'];
            }
            foreach ($vardefFields as $name => $properties) {
                $fieldList[$name] = $properties;
                // fill in enums
                if (isset($fieldList[$name]['options']) && is_string($fieldList[$name]['options']) && isset($app_list_strings[$fieldList[$name]['options']]))
                    $fieldList[$name]['options'] = $app_list_strings[$fieldList[$name]['options']];
                // Bug 32626: fall back on checking the mod_strings if not in the app_list_strings
                elseif (isset($fieldList[$name]['options']) && is_string($fieldList[$name]['options']) && isset($mod_strings[$fieldList[$name]['options']]))
                    $fieldList[$name]['options'] = $mod_strings[$fieldList[$name]['options']];
                // Bug 22730: make sure all enums have the ability to select blank as the default value.
                if (!isset($fieldList[$name]['options']['']))
                    $fieldList[$name]['options'][''] = '';
            }
            array_push($this->_fieldList, array('module' => $module, 'fieldlist' => $fieldList));
        }
        return $this->_fieldList[0]['fieldlist'];
    }

    /**
     * @param array $rows
     * @return array
     */
    public function getFieldNames($rows = array()): array
    {
        if ($this->requestData != false) {
            $rows = $this->getViewParams();
        } else {
            $rows = $this->getFieldArrayForReport();
        }
        return $rows;
    }


    public function getReportTableFieldTitleRowMarkup($fields): string
    {
        $tags = $this->getTags();
        $html = '';
        foreach ($fields as $field) {
            if ($field['display']) {
                $html .= $tags['th-1']['begin'];
                $html .= "<div style='white-space: normal;' width='100%' align='left'>";
                $html .= $field['label'];
                $html .= "</div>" . PHP_EOL;
                $html .= $tags['th-1']['end'];
            }
        }
        return $html;
    }


    public function getReportTableTitleMarkup($fields): string
    {
        $tags = $this->getTags();
        $html = '';
        $html .= $tags['thead']['begin'];
        $html .= $tags['tr']['begin'];
        $html .= $this->getReportTableFieldTitleRowMarkup($fields);
        $html .= $tags['tr']['end'];
        $html .= $tags['thead']['end'];
        return $html;
    }

    public function getCountForReportRowNumbers($report_sql)
    {
        $total_rows = 0;
        $count_sql = explode('ORDER BY', $report_sql);
        $count_query = 'SELECT count(*) c FROM (' . $count_sql[0];
        $count_query .= ') as n';
        $result = $this->db->query($count_query);
        $assoc = $this->db->fetchByAssoc($result);
        if (!empty($assoc['c'])) {
            $total_rows = $assoc['c'];
        }
        return $total_rows;
    }

    /**
     * @param $extra
     * @param $field
     * @param $query_array
     * @return array
     */
    public function buildGroupQuery($extra, $field, $query_array): array
    {
        $timedate = $this->getTimedate();
        $beanList = $this->getBeanList();
        $module = $this->getReportModuleBean();
        $query = '';
        $field_label = str_replace(' ', '_', $field->label);

        $path = unserialize(base64_decode($field->module_path));

        $field_module = $module;
        $table_alias = $field_module->table_name;
        if (!empty($path[0]) && $path[0] != $module->module_dir) {
            foreach ($path as $rel) {
                $new_field_module = new $beanList[getRelatedModule($field_module->module_dir, $rel)];
                $oldAlias = $table_alias;
                $table_alias = $table_alias . ":" . $rel;

                $query_array = $this->build_report_query_join(
                    $rel,
                    $table_alias,
                    $oldAlias,
                    $field_module,
                    'relationship',
                    $query_array,
                    $new_field_module
                );
                $field_module = $new_field_module;
            }
        }

        $data = $field_module->field_defs[$field->field];

        if ($data['type'] == 'relate' && isset($data['id_name'])) {
            $field->field = $data['id_name'];
        }

        if ($data['type'] == 'currency' && !stripos(
                $field->field,
                '_USD'
            ) && isset($field_module->field_defs['currency_id'])
        ) {
            if ((isset($field_module->field_defs['currency_id']['source']) &&
                $field_module->field_defs['currency_id']['source'] == 'custom_fields')
            ) {
                $query['select'][$table_alias . '_currency_id'] =
                    $table_alias . '_cstm' . ".currency_id AS '" . $table_alias . "_currency_id'";
            } else {
                $query_array['select'][$table_alias . '_currency_id'] =
                    $table_alias . ".currency_id AS '" . $table_alias . "_currency_id'";
            }
        }

        if ((isset($data['source']) && $data['source'] == 'custom_fields')) {
            $select_field = $this->db->quoteIdentifier($table_alias . '_cstm') . '.' . $field->field;
            // Fix for #1251 - added a missing parameter to the function call
            $query_array = $this->build_report_query_join(
                $table_alias . '_cstm',
                $table_alias . '_cstm',
                $table_alias,
                $field_module,
                'custom',
                $query
            );
        } else {
            $select_field = $this->db->quoteIdentifier($table_alias) . '.' . $field->field;
        }

        if ($field->sort_by != '') {
            $query_array['sort_by'][] = $field_label . ' ' . $field->sort_by;
        }

        if ($field->format && in_array($data['type'], array('date', 'datetime', 'datetimecombo'))) {
            if (in_array($data['type'], array('datetime', 'datetimecombo'))) {
                $select_field = $this->db->convert($select_field, 'add_tz_offset');
            }
            $select_field = $this->db->convert(
                $select_field,
                'date_format',
                array($timedate->getCalFormat($field->format))
            );
        }

        if ($field->field_function != null) {
            $select_field = $field->field_function . '(' . $select_field . ')';
        }

        if ($field->group_by == 1) {
            $query_array['group_by'][] = $select_field;
        }

        $query_array['select'][] = $select_field . " AS '" . $field_label . "'";
        if (isset($extra['select']) && $extra['select']) {
            foreach ($extra['select'] as $selectField => $selectAlias) {
                if ($selectAlias) {
                    $query_array['select'][] = $selectField . " AS " . $selectAlias;
                } else {
                    $query_array['select'][] = $selectField;
                }
            }
        }
        $query_array['where'][] = $select_field . " IS NOT NULL AND ";
        if (isset($extra['where']) && $extra['where']) {
            $query_array['where'][] = implode(' AND ', $extra['where']) . ' AND ';
        }

        $query_array = $this->build_report_query_where($query_array);

        foreach ($query_array['select'] as $select) {
            $query .= ($query == '' ? 'SELECT ' : ', ') . $select;
        }

        $query .= ' FROM ' . $module->table_name . ' ';

        if (isset($query_array['join'])) {
            foreach ($query_array['join'] as $join) {
                $query .= $join;
            }
        }
        if (isset($query_array['where'])) {
            $query_where = '';
            foreach ($query_array['where'] as $where) {
                $query_where .= ($query_where == '' ? 'WHERE ' : ' ') . $where;
            }

            $query_where = $this->queryWhereRepair($query_where);

            $query .= ' ' . $query_where;
        }

        if (isset($query_array['group_by'])) {
            $query_group_by = '';
            foreach ($query_array['group_by'] as $group_by) {
                $query_group_by .= ($query_group_by == '' ? 'GROUP BY ' : ', ') . $group_by;
            }
            $query .= ' ' . $query_group_by;
        }

        if (isset($query_array['sort_by'])) {
            $query_sort_by = '';
            foreach ($query_array['sort_by'] as $sort_by) {
                $query_sort_by .= ($query_sort_by == '' ? 'ORDER BY ' : ', ') . $sort_by;
            }
            $query .= ' ' . $query_sort_by;
        }

        $result = $this->db->query($query);
        return $result;
    }


    public function getRelationshipName($row, $name, $attribute)
    {
        $field_bean = $this->getReportModuleBean();
        $vardef = $field_bean->getFieldDefinition($attribute['field']);
        $extraSelect = '';
        if (in_array($vardef["module"], ['Users', 'Contacts', 'Leads', 'Prospects'])) {
            $extraSelect = ", rel.first_name, rel.last_name ";
        }
        if (isset($vardef['table'])) {
            $table = $vardef['table'];
        } else {
            if(!isset($GLOBALS['dictionary'][$vardef['module']])){
                VardefManager::loadVardef($vardef['module'], $GLOBALS['beanList'][$vardef['module']], false);
            }
            $table = $GLOBALS['dictionary'][$vardef['module']]['table'];
        }
        $relateSQL = "SELECT rel.{$vardef['rname']} {$extraSelect}  FROM " . $table . " rel WHERE rel.id = '" . $row[$name] . "' AND rel.deleted = '0'";
        $relateResult = $field_bean->db->query($relateSQL);
        $relateRow = mysqli_fetch_row($relateResult);
        $relateName = $extraSelect ? implode(" ", array_filter([ $relateRow[1],$relateRow['2'] ])) : $relateRow[0];
        return $relateName;
    }

    /**
     * @param $module
     * @param $fieldName
     * @param $view
     * @param $alt_type
     * @return string
     */
    public function checkIfCacheExists($module, $fieldName, $view, $alt_type): string
    {
        $file = create_cache_directory('modules/AOW_WorkFlow/') . $module . $view . $alt_type . $fieldName . '.tpl';

        $shouldCreateCache = !is_file($file) || inDeveloperMode() || !empty($_SESSION['developerMode']);

        if ($shouldCreateCache) {

            $focus = $this->createCache($module, $fieldName, $view, $alt_type, $file);
            $this->_focus = $focus;
        }
        return $shouldCreateCache;
    }


    public function getReportQueryResult($from, $limit, $report_sql): mysqli_result
    {
        $result = $this->execute_report_query_with_limit($report_sql, $from, $limit);
        return $result;
    }

    /**
     * @param $totals
     * @return string
     */
    public function getReportFooter($totals): string
    {
        $html = '';
        $fields = $this->getReportTableFieldArray();
        $html .= $this->getTotalHTML($fields, $totals);
        return $html;
    }

    /**
     * @param $extra
     * @return array
     */
    public function getGroupReportQueryResult($extra): array
    {
        $query_array = array();
        $module = $this->getReportModuleBean();
        $field = $this->getGroupedByField();
        if (!$field) {
            $query_array['select'][] = $module->table_name . ".id AS '" . $module->table_name . "_id'";
        }
        if ($field != false) {
            $result = $this->buildGroupQuery($extra, $field, $query_array);
        }
        return $result;
    }

    /**
     * @return string
     */
    public function getFooterScript(): string
    {
        $html = "    <script type=\"text/javascript\">
                            groupedReportToggler = {

                                toggleList: function(elem) {
                                    $(elem).closest('table.list').find('thead, tbody').each(function(i, e){
                                        if(i>1) {
                                            $(e).toggle();
                                        }
                                    });
                                    if($(elem).find('img').first().attr('src') == 'themes/SuiteR/images/basic_search.gif') {
                                        $(elem).find('img').first().attr('src', 'themes/SuiteR/images/advanced_search.gif');
                                    }
                                    else {
                                        $(elem).find('img').first().attr('src', 'themes/SuiteR/images/basic_search.gif');
                                    }
                                }

                            };
                        </script>";
        return $html;
    }


    function getTotalHTML($fields, $totals)
    {
        $app_list_strings = $this->getAppListStrings();
        $currency = $this->getUserCurrency();

        $html = '';
        $html .= "<tr>";
        foreach ($fields as $label => $field) {
            if (!$field['display']) {
                continue;
            }
            if ($field['total']) {
                $totalLabel = $field['label'] . " " . $app_list_strings['aor_total_options'][$field['total']];
                $html .= "<th>{$totalLabel}</th>";
            } else {
                $html .= "<th></th>";
            }
        }
        $html .= "</tr>";
        $html .= "<tr>";
        foreach ($fields as $label => $field) {
            if (!$field['display']) {
                continue;
            }
            if ($field['total'] && isset($totals[$label])) {
                $type = $field['total'];
                $total = $this->calculateTotal($type, $totals[$label]);
                // Customise display based on the field type
                $moduleBean = BeanFactory::newBean($field['module']);
                $fieldDefinition = $moduleBean->field_defs[$field['field']];
                $fieldDefinitionType = $fieldDefinition['type'];
                switch ($fieldDefinitionType) {
                    case "currency":
                        // Customise based on type of function
                        switch ($type) {
                            case 'SUM':
                            case 'AVG':
                                if ($currency->id == -99) {
                                    $total = $currency->symbol . format_number($total, null, null);
                                } else {
                                    $total = $currency->symbol . format_number($total, null, null,
                                            array('convert' => true));
                                }
                                break;
                            case 'COUNT':
                            default:
                                break;
                        }
                        break;
                    default:
                        break;
                }
                $html .= "<td>" . $total . "</td>";
            } else {
                $html .= "<td></td>";
            }
        }
        $html .= "</tr>";

        return $html;
    }

    /**
     * @param $group_value
     * @param $extra
     * @return string
     */
    public function getReportQuery($group_value, $extra): string
    {
        $_group_value = $this->db->quote($group_value);
        $report_sql = $this->build_report_query($_group_value, $extra);
        return $report_sql;
    }

    /**
     * @param $from
     * @param $group_value
     * @param $tableIdentifier
     * @param $total_rows
     * @param $max_rows
     * @return string
     */
    public function getMarkupForPagination($from, $group_value, $tableIdentifier, $total_rows, $max_rows): string
    {
        $html = '';
        $beanList = $this->getBeanList();

        $start = 0;
        $end = 0;
        $previous_from = 0;
        $next_from = 0;
        $last_from = 0;

        if ($total_rows > 0) {
            $start = $from + 1;
            $end = (($from + $max_rows) < $total_rows) ? $from + $max_rows : $total_rows;
            $previous_from = ($from - $max_rows) < 0 ? 0 : $from - $max_rows;
            $next_from = $from + $max_rows;
            if (is_int($total_rows / $max_rows)) {
                $last_from = $max_rows * ($total_rows / $max_rows - 1);
            } else {
                $last_from = $max_rows * floor($total_rows / $max_rows);
            }

        }

        $html .= "<thead><tr class='pagination'>";

        $moduleFieldByGroupValue = $this->getModuleFieldByGroupValue($beanList, $group_value);

        $html .= "<td colspan='18'>
                       <table class='paginationTable' border='0' cellpadding='0' cellspacing='0' width='100%'>
                        <td style='text-align:left' ><H3><a href=\"javascript:void(0)\" class=\"collapseLink\" onclick=\"groupedReportToggler.toggleList(this);\"><img border=\"0\" id=\"detailpanel_1_img_hide\" src=\"themes/SuiteR/images/basic_search.gif\"></a>$moduleFieldByGroupValue</H3></td>
                        <td class='paginationChangeButtons' align='right' nowrap='nowrap' width='1%'>";


        if ($from == 0 || $from == "-2") {
            $html .= "<button type='button' id='listViewStartButton_top' name='listViewStartButton' title='Start' class='button' disabled='disabled'>
                    <img src='" . SugarThemeRegistry::current()->getImageURL('start_off.gif') . "' alt='Start' align='absmiddle' border='0'>
                </button>
                <button type='button' id='listViewPrevButton_top' name='listViewPrevButton' class='button' title='Previous' disabled='disabled'>
                    <img src='" . SugarThemeRegistry::current()->getImageURL('previous_off.gif') . "' alt='Previous' align='absmiddle' border='0'>
                </button>";
        } else {
            $html .= "<button type='button' id='listViewStartButton_top' name='listViewStartButton' title='Start' class='button' onclick='changeReportPage(\"" .
                $this->id .
                "\",0,\"" .
                $group_value .
                "\",\"" .
                $tableIdentifier .
                "\")'>
                    <img src='" .
                SugarThemeRegistry::current()->getImageURL('start.gif') .
                "' alt='Start' align='absmiddle' border='0'>
                </button>
                <button type='button' id='listViewPrevButton_top' name='listViewPrevButton' class='button' title='Previous' onclick='changeReportPage(\"" .
                $this->id .
                "\"," .
                $previous_from .
                ",\"" .
                $group_value .
                "\",\"" .
                $tableIdentifier .
                "\")'>
                    <img src='" .
                SugarThemeRegistry::current()->getImageURL('previous.gif') .
                "' alt='Previous' align='absmiddle' border='0'>
                </button>";
        }


        $html .= " <span class='pageNumbers'>(" . $start . " - " . $end . " of " . $total_rows . ")</span>";
        if ($next_from < $total_rows) {
            $html .= "<button type='button' id='listViewNextButton_top' name='listViewNextButton' title='Next' class='button' onclick='changeReportPage(\"" .
                $this->id .
                "\"," .
                $next_from .
                ",\"" .
                $group_value .
                "\",\"" .
                $tableIdentifier .
                "\")'>
                        <img src='" .
                SugarThemeRegistry::current()->getImageURL('next.gif') .
                "' alt='Next' align='absmiddle' border='0'>
                    </button>
                     <button type='button' id='listViewEndButton_top' name='listViewEndButton' title='End' class='button' onclick='changeReportPage(\"" .
                $this->id .
                "\"," .
                $last_from .
                ",\"" .
                $group_value .
                "\",\"" .
                $tableIdentifier .
                "\")'>
                        <img src='" .
                SugarThemeRegistry::current()->getImageURL('end.gif') .
                "' alt='End' align='absmiddle' border='0'>
                    </button>";
        } else {
            $html .= "<button type='button' id='listViewNextButton_top' name='listViewNextButton' title='Next' class='button'  disabled='disabled'>
                        <img src='" . SugarThemeRegistry::current()->getImageURL('next_off.gif') . "' alt='Next' align='absmiddle' border='0'>
                    </button>
                     <button type='button' id='listViewEndButton_top$dashletPaginationButtons' name='listViewEndButton' title='End' class='button'  disabled='disabled'>
                        <img src='" . SugarThemeRegistry::current()->getImageURL('end_off.gif') . "' alt='End' align='absmiddle' border='0'>
                    </button>";

        }
        $html .= "</td>
                       </table>
                      </td>";
        $html .= "</tr>
                  </thead>";

        return $html;
    }


    public function build_report_csv_to_file()
    {
//        ini_set('zlib.output_compression', 'Off');
        $sugar_config = $this->getSugarConfig();

        try {
            $dateStr = (new \DateTime())->format('Y-m-d-H-i-s');
            $file_name = str_replace(" ", "_", $this->name) . "_" . $dateStr . ".csv";

            $csv = $this->csvContent();
            $fp = fopen($sugar_config['upload_dir'] . $file_name, 'wb');
            fwrite($fp, $csv);
            fclose($fp);

            return array('name' => $file_name, 'location' => $sugar_config['upload_dir'] . $file_name);

        } catch
        (Exception $e) {
            return false;
        }
    }


    private function customEncloseForCSV($field)
    {
        return '"' . $field . '"';
    }


    /**
     * @return array
     */
    public function getFullUserList(): array
    {

        /* @var $user User */
        $user = BeanFactory::getBean("Users");
        $ret_array = $user->create_new_list_query('last_name', '', 'id', array(), 0, '', true);
        $selectSql = <<<EOD
SELECT 
users.`id`, 
LTRIM(RTRIM(CONCAT(IFNULL(users.first_name,''),' ',IFNULL(users.last_name,'')))) as full_name, 
LTRIM(RTRIM(CONCAT(IFNULL(users.first_name,''),' ',IFNULL(users.last_name,'')))) as name
EOD;

        $ret_array['select'] = $selectSql;

        $qry = $ret_array['select'] . $ret_array['from'] . $ret_array['where'] . $ret_array['order_by'];

        $ar = new AdvancedReporter($this->bean);
        $result = $ar->execute_report_query_with_limit($qry, null, null);
        $rowArray = array();
        while ($row = $this->db->fetchByAssoc($result)) {
            array_push($rowArray, $row);
        }
        return $rowArray;
    }


}
