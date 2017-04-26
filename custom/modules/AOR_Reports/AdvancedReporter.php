<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 13/04/17
 * Time: 09:54
 */

require_once("modules/AOR_Reports/AOR_Report.php");
require_once("custom/modules/AOR_Reports/dateHelper.php");

class AdvancedReporter extends AOR_Report
{


    var $bean;
    var $db;
    var $requestData;
    var $report_module;
    var $id;

    function __construct($bean, $requestData = false)
    {
        global $db;
        $this->bean = $bean;
        $this->id = $bean->id; //this is to handle the pagination
        $this->db = $db;
        $this->requestData = $requestData;
        if($requestData != false){
            $this->report_module = $requestData['report_module'];
            $this->id = $requestData['record'];
        }else{
            $this->report_module = $bean->report_module;
        }

    }

    public function buildMultiGroupReport($offset = -1, $links = true, $level = 2, $path = array())
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

                return $this->buildMultiGroupReport($offset, $links, $level + 1, $path);
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
                                    $this->build_group_report($offset, $links)
                                );
                            }
                        }

                        return $html;
                    } else {
                        return $this->build_group_report($offset, $links, array(), create_guid());
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
        if ($this->requestData != false) {
            $rows = $this->getViewParams(true, true, $level);
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

        $rows = array($this->getViewParams(true));

        foreach ($rows as $field) {

            if ($field->field_function != 'COUNT' || $field->format != '') {
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
        global $beanList, $timedate;

        if ($beanList[$this->report_module]) {
            $module = new $beanList[$this->report_module]();

            $query['id_select'][$module->table_name] =
                $this->db->quoteIdentifier($module->table_name) . ".id AS '" . $module->table_name . "_id'";
            $query['id_select_group'][$module->table_name] = $this->db->quoteIdentifier($module->table_name) . ".id";

            if($this->requestData != false){
                $rows = $this->getViewParams();
            }else {
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
                    $query['group_by'][] = $select_field;
                } elseif ($field->field_function != null) {
                    $select_field = $field->field_function . '(' . $select_field . ')';
                } else {
                    $query['second_group_by'][] = $select_field;
                }

                if ($field->sort_by != '') {
                    $query['sort_by'][] = $select_field . " " . $field->sort_by;
                }

                $query['select'][] = $select_field . " AS '" . $field->label . "'";

                if ($field->group_display == 1 && $group_value) {
                    $query['where'][] = $select_field . " = '" . $group_value . "' AND ";
                }

                ++$i;
            }
        }

        return $query;
    }

    function build_report_html($offset = -1, $links = true, $group_value = '', $tableIdentifier = '', $extra = array())
    {

        global $beanList, $sugar_config;

        $_group_value = $this->db->quote($group_value);

        $report_sql = $this->build_report_query($_group_value, $extra);

        // Fix for issue 1232 - items listed in a single report, should adhere to the same standard as ListView items.
        if ($sugar_config['list_max_entries_per_page'] != '') {
            $max_rows = $sugar_config['list_max_entries_per_page'];
        } else {
            $max_rows = 20;
        }

        $total_rows = 0;
        $count_sql = explode('ORDER BY', $report_sql);
        $count_query = 'SELECT count(*) c FROM (' . $count_sql[0] . ') as n';

        // We have a count query.  Run it and get the results.
        $result = $this->db->query($count_query);
        $assoc = $this->db->fetchByAssoc($result);
        if (!empty($assoc['c'])) {
            $total_rows = $assoc['c'];
        }

        $html =
            "<table class='list aor_reports' id='report_table_" .
            $tableIdentifier .
            "' width='100%' cellspacing='0' cellpadding='0' border='0' repeat_header='1'>";

        if ($offset >= 0) {
            $start = 0;
            $end = 0;
            $previous_offset = 0;
            $next_offset = 0;
            $last_offset = 0;

            if ($total_rows > 0) {
                $start = $offset + 1;
                $end = (($offset + $max_rows) < $total_rows) ? $offset + $max_rows : $total_rows;
                $previous_offset = ($offset - $max_rows) < 0 ? 0 : $offset - $max_rows;
                $next_offset = $offset + $max_rows;
                if (is_int($total_rows / $max_rows)) {
                    $last_offset = $max_rows * ($total_rows / $max_rows - 1);
                } else {
                    $last_offset = $max_rows * floor($total_rows / $max_rows);
                }

            }

            $html .= "<thead><tr class='pagination'>";

            $moduleFieldByGroupValue = $this->getModuleFieldByGroupValue($beanList, $group_value);

            $html .= "<td colspan='18'>
                       <table class='paginationTable' border='0' cellpadding='0' cellspacing='0' width='100%'>
                        <td style='text-align:left' ><H3><a href=\"javascript:void(0)\" class=\"collapseLink\" onclick=\"groupedReportToggler.toggleList(this);\"><img border=\"0\" id=\"detailpanel_1_img_hide\" src=\"themes/SuiteR/images/basic_search.gif\"></a>$moduleFieldByGroupValue</H3></td>
                        <td class='paginationChangeButtons' align='right' nowrap='nowrap' width='1%'>";

            if ($offset == 0 || $offset == "-2") {
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
                         $previous_offset .
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
            if ($next_offset < $total_rows) {
                $html .= "<button type='button' id='listViewNextButton_top' name='listViewNextButton' title='Next' class='button' onclick='changeReportPage(\"" .
                         $this->id .
                         "\"," .
                         $next_offset .
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
                         $last_offset .
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

            $html .= "</tr></thead>";
        } else {

            $moduleFieldByGroupValue = $this->getModuleFieldByGroupValue($beanList, $group_value);

            $html = "<H3>$moduleFieldByGroupValue</H3>" . $html;
        }

        if($this->requestData != false){
            $rows = $this->getViewParams();
        }else{
            $sql = "SELECT id FROM aor_fields WHERE aor_report_id = '" . $this->bean->id . "' AND deleted = 0 ORDER BY field_order ASC";
            $result = $this->db->query($sql);
            while ($row = $this->db->fetchByAssoc($result)) {
                $field = new AOR_Field();
                $field->retrieve($row['id']);
                $rows[] = $field;
            }
        }

        $html .= "<thead>";
        $html .= "<tr>";

        $fields = array();
        $i = 0;
        foreach ($rows as $field) {

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
            $fields[$label]['label'] = $field->label;
            $fields[$label]['display'] = $field->display;
            $fields[$label]['function'] = $field->field_function;
            $fields[$label]['module'] = $field_module;
            $fields[$label]['alias'] = $field_alias;
            $fields[$label]['link'] = $field->link;
            $fields[$label]['total'] = $field->total;

            $fields[$label]['params'] = $field->format;

            if ($fields[$label]['display']) {
                $html .= "<th scope='col'>";
                $html .= "<div style='white-space: normal;' width='100%' align='left'>";
                $html .= $field->label;
                $html .= "</div></th>";
            }
            ++$i;
        }

        $html .= "</tr>";
        $html .= "</thead>";
        $html .= "<tbody>";

        if ($offset >= 0) {
            $result = $this->db->limitQuery($report_sql, $offset, $max_rows);
        } elseif($offset == "-2") {
            $result = $this->db->limitQuery($report_sql, 0, "10");
        }else{
            $result = $this->db->query($report_sql);
        }

        $row_class = 'oddListRowS1';

        $totals = array();
        while ($row = $this->db->fetchByAssoc($result)) {
            $html .= "<tr class='" . $row_class . "' height='20'>";

            foreach ($fields as $name => $att) {
                if ($att['display']) {
                    $html .= "<td class='' valign='top' align='left'>";
                    if ($att['link'] && $links) {
                        $html .= "<a href='" .
                                 $sugar_config['site_url'] .
                                 "/index.php?module=" .
                                 $att['module'] .
                                 "&action=DetailView&record=" .
                                 $row[$att['alias'] . '_id'] .
                                 "'>";
                    }

                    $currency_id =
                        isset($row[$att['alias'] . '_currency_id']) ? $row[$att['alias'] . '_currency_id'] : '';

                    if ($att['function'] == 'COUNT' || !empty($att['params'])) {
                        $html .= $row[$name];
                    } else {
                        $html .= getModuleField(
                            $att['module'],
                            $att['field'],
                            $att['field'],
                            'DetailView',
                            $row[$name],
                            '',
                            $currency_id
                        );
                    }

                    if ($att['total']) {
                        $totals[$name][] = $row[$name];
                    }
                    if ($att['link'] && $links) {
                        $html .= "</a>";
                    }
                    $html .= "</td>";
                }
            }
            $html .= "</tr>";

            $row_class = $row_class == 'oddListRowS1' ? 'evenListRowS1' : 'oddListRowS1';
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

    function getViewParams($group = false, $array = false, $level = false)
    {
        $rows = array();
        foreach ($this->requestData['fieldView'] as $row) {
            if ($row['aor_fields_deleted'] == 0 && $row['aor_fields_deleted'] != null) {
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
                if($group == true){
                    if($field->group_display == $level){
                        if($array == true){
                            return array(  $field->toArray() );
                        }else{
                            return  $field;
                        }
                    }else{
                        return null;
                    }
                }else{
                    $rows[$row['aor_fields_field_order']] = $field;
                }
            }
        }


        if($this->requestData['fieldView'][0]['aor_fields_group_display'] != "-1" && count($rows) != 0){
            $rows[ $this->requestData['fieldView'][0]['aor_fields_group_display'] ]->group_display = '1';
        }
        ksort($rows);

        return $rows;
    }
    function getConditionParams()
    {
        $rows = array();
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

        return $rows;
    }

    function build_group_report($offset = -1, $links = true, $extra = array())
    {
        global $beanList, $timedate;

        $html = '';
        $query = '';
        $query_array = array();
        $module = new $beanList[$this->report_module]();
        $field = false;
        if($this->requestData != false){
            $field = $this->getViewParams(true);
        }else{
            $sql = "SELECT id FROM aor_fields WHERE aor_report_id = '" . $this->bean->id . "' AND group_display = 1 AND deleted = 0 ORDER BY field_order ASC";
            $field_id = $this->db->getOne($sql);
            if(!empty($field_id)){
                $field = BeanFactory::getBean("AOR_Field", $field_id);
            }
        }

        if (!$field) {
            $query_array['select'][] = $module->table_name . ".id AS '" . $module->table_name . "_id'";
        }

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

            while ($row = $this->db->fetchByAssoc($result)) {
                if ($html != '') {
                    $html .= '<br />';
                }

                $html .= $this->build_report_html($offset, $links, $row[$field_label], create_guid(), $extra);

            }
        }

        if ($html == '') {
            $html = $this->build_report_html($offset, $links, '', create_guid(), $extra);
        }

        return $html;

    }

    function build_report_query_where($query = array())
    {
        global $beanList, $app_list_strings, $sugar_config;

        $aor_sql_operator_list['Equal_To'] = '=';
        $aor_sql_operator_list['Not_Equal_To'] = '!=';
        $aor_sql_operator_list['Greater_Than'] = '>';
        $aor_sql_operator_list['Less_Than'] = '<';
        $aor_sql_operator_list['Greater_Than_or_Equal_To'] = '>=';
        $aor_sql_operator_list['Less_Than_or_Equal_To'] = '<=';
        $aor_sql_operator_list['Contains'] = 'LIKE';
        $aor_sql_operator_list['Starts_With'] = 'LIKE';
        $aor_sql_operator_list['Ends_With'] = 'LIKE';

        $closure = false;
        if (!empty($query['where'])) {
            $query['where'][] = '(';
            $closure = true;
        }

        if ($beanList[$this->report_module]) {
            $module = new $beanList[$this->report_module]();

            if($this->requestData != false){
                $rows = $this->getConditionParams();
            }else {
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
            }

            $tiltLogicOp = true;

            foreach($rows as $condition){

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

                            $value = '"' . DateHelper::getPeriodDate($params,$this->requestData['period_duration_value'])->format('Y-m-d H:i:s') . '"';
                            break;
                        case "CurrentUserID":
                            global $current_user;
                            $value = '"' . $current_user->id . '"';
                            break;
                        case 'Value':
                        default:
                            $value = "'" . $this->db->quote($condition->value) . "'";
                            break;
                    }

                    //handle like conditions
                    Switch ($condition->operator) {
                        case 'Contains':
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
                            $date = DateHelper::getPeriodEndDate($params)->format('Y-m-d H:i:s');
                            $value = '"' . DateHelper::getPeriodDate($params,$this->requestData['period_duration_value'])->format('Y-m-d H:i:s') . '"';

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
        global $beanList;
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
                $csv .= $this->encloseForCSV($field->label);
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
                        $csv .= $this->encloseForCSV($row[$name]);
                    } else {
                        $csv .= $this->encloseForCSV(trim(strip_tags(getModuleField($att['module'], $att['field'],
                                                                                    $att['field'], 'DetailView', $row[$name], '', $currency_id))));
                    }
                    $csv .= $delimiter;
                }
            }
        }

        $csv = $GLOBALS['locale']->translateCharset($csv, 'UTF-8', $GLOBALS['locale']->getExportCharset());

        ob_clean();
        header("Pragma: cache");
        header("Content-type: text/comma-separated-values; charset=" . $GLOBALS['locale']->getExportCharset());
        header("Content-Disposition: attachment; filename=\"{$this->name}.csv\"");
        header("Content-transfer-encoding: binary");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . TimeDate::httpTime());
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Content-Length: " . mb_strlen($csv, '8bit'));
        if (!empty($sugar_config['export_excel_compatible'])) {
            $csv = chr(255) . chr(254) . mb_convert_encoding($csv, 'UTF-16LE', 'UTF-8');
        }
        print $csv;

        sugar_cleanup(true);
    }

    private function encloseForCSV($field)
    {
        return '"' . $field . '"';
    }
}