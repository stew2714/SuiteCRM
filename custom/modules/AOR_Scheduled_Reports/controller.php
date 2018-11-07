<?php

require_once('include/MVC/Controller/SugarController.php');
require_once('modules/AOS_PDF_Templates/PDF_Lib/mpdf.php');
//require_once('custom/modules/AOR_Reports/customAOR_Report.php');
require_once('custom/modules/AOR_Reports/AdvancedReporter.php');

class AOR_Scheduled_ReportsController extends SugarController
{
    private $_advancedReport = null;

    /**
     * @return null
     */
    public function getAdvancedReport()
    {
        return $this->_advancedReport;
    }

    /**
     * @param null $advancedReported
     * @return AOR_Scheduled_ReportsController
     */
    public function setAdvancedReport($advancedReport)
    {
        $this->_advancedReport = $advancedReport;
        return $this;
    }


    public function __construct()
    {
        ini_set('memory_limit', '-1');
        ini_set("pcre.backtrack_limit", "1000000");
    }

    public function action_sendreport()
    {
        $reportId = $_REQUEST['record'];
        $this->run($reportId);
    }

    public function run($data)
    {
        global $timedate;

        $bean = BeanFactory::getBean('AOR_Scheduled_Reports', $data);
        $report = $bean->get_linked_beans('aor_report', 'AOR_Reports');
        if ($report) {
            $report = $report[0];
            /* @var $report AdvancedReporter */
            $report = new AdvancedReporter($report);
            $this->setAdvancedReport($report);
        } else {
            return false;
        }

        $emailTemplate = BeanFactory::getBean('EmailTemplates', $bean->report_email_template_id_c);
        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();

        $mail->setMailerForSystem();
        $mail->IsHTML(true);
        $mail->From = $defaults['email'];
        $mail->FromName = $defaults['name'];
        $mail->Subject = from_html($bean->name);


        $reportType = $bean->report_format_c;
        switch ($reportType) {
            case 'body':
                $html = $this->generateHtmlReport();
                $mail->Body = $html;
                break;
            case 'pdf':
                $pdf = $this->generatePDF();
                if ($pdf !== false) {
                    $mail->addAttachment($pdf['location'], $pdf['name']);
                }

                $mail->Body = $emailTemplate->body_html;
                break;
            case 'csv':
                $csv = $report->build_report_csv_to_file();
                if ($csv !== false) {
                    $mail->addAttachment($csv['location'], $csv['name']);
                }
                $mail->Body = $emailTemplate->body_html;
                break;
            default:
                break;
        }


        $mail->prepForOutbound();
        $success = true;
        $emails = $bean->get_email_recipients();
        foreach ($emails as $email_address) {
            $mail->ClearAddresses();
            $mail->AddAddress($email_address);
            $success = $mail->Send() && $success;
        }
        $bean->last_run = $timedate->getNow()->asDb(false);
        $bean->save();
        return true;
    }


    private function generatePDF(AdvancedReporter $report = null)
    {
        if ($report == null) {
            $report = $this->getAdvancedReport();
        }

        $rootPath = __DIR__ . '/../../../';
        $mpdfPath = realpath($rootPath . "/custom/modules/AOR_Reports/getNewMPdf.php");
        require_once($mpdfPath);

        $sugar_config = $report->getSugarConfig();
        $dateStr = (new \DateTime())->format('Y-m-d-H-i-s');
        $file_name = str_replace(" ", "_", $report->name) . "_" . $dateStr . ".pdf";


        $links = false;
        $extra = array();

        $fields = $report->getReportTableFieldArray();
        $tags = $report->getTags('pdf', count($fields));

        $reportTitleMarkup = '';
        $reportTitleMarkup .= $tags['table']['begin'];
        $reportTitleMarkup .= $this->getTableTitleMarkup($report);
        $reportTitleMarkup .= $tags['table']['end'];
        $reportTitleMarkup .= '<br/>';

        $tableTitleMarkup = '';
        $tableTitleMarkup .= $tags['table']['begin'];
        $tableTitleMarkup .= $report->getReportTableTitleMarkup($fields);
        $tableTitleMarkup .= $tags['table']['end'];

        $stylesheetPDF = <<<EOD
.table-pdf, .table-pdf td, 
.table-pdf th{
border: 1px solid black;
border-spacing: 0px;
}
.table-pdf .col-1,
.table-pdf{
width:50%;
}
.table-pdf .col-2{
width:50%;
}
EOD;

        try {
            $fp = fopen($sugar_config['upload_dir'] . $file_name, 'wb');
            fclose($fp);
            $report_sql = $report->getReportQuery('', $extra);

            $from = 0;
            $limit = 300;

            if (isset($sugar_config['pdfReportLineLimit']) && $sugar_config['pdfReportLineLimit'] != '') {
                $configRowLimit = $sugar_config['pdfReportLineLimit'];
                $rowLimitIsNotDisabled = strtolower($configRowLimit) !== 'disabled';
                if ($rowLimitIsNotDisabled) {
                    $maxNumberRows = intval($configRowLimit);
                } else {
                    $maxNumberRows = $report->getCountForReportRowNumbers($report_sql);
                }
            } else {
                $maxNumberRows = $report->getCountForReportRowNumbers($report_sql);
            }

            $mpdf = getNewMPdf();
            $mpdf->WriteHTML($stylesheetPDF, 1);
            $mpdf->WriteHTML($reportTitleMarkup, 2);
            $mpdf->WriteHTML($tableTitleMarkup, 2);

            $i = $from;
            while ($i <= $maxNumberRows) {
                $result = $report->getReportQueryResult($i, $limit, $report_sql);
                $formattedResultsArray = $report->ReportFormatFields($result);
                $printBody = '';
                $printBody .= $tags['table']['begin'];
                $printBody .= $tags['tbody']['begin'];
                $printBody .= $report->buildReportRows($formattedResultsArray, $links);
                $printBody .= $tags['tbody']['end'];
                $printBody .= $tags['table']['end'];
                $mpdf->WriteHTML($printBody, 2);
                $i = $i + $limit;
            }

            $mpdf->Output($file_name, 'D');

            if ($report) {
                return array('name' => $file_name, 'location' => $sugar_config['upload_dir'] . $file_name);
            } else {
                return false;
            }

        } catch (mPDF_exception $e) {
            echo $e;
        }

        die;
    }

    /**
     * @param $report
     * @return string
     */
    private function generateHtmlReport($report = null): string
    {
        if ($report == null) {
            $report = $this->getAdvancedReport();
        }

        $html = "<h1>{$report->name}</h1>" . $report->build_group_report_with_limit(0, 20, false);
        $html .= <<<EOF
        <style>
        h1{
            color: black;
        }
        .list
        {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;font-size: 12px;
            background: #fff;margin: 45px;width: 480px;border-collapse: collapse;text-align: left;
        }
        .list th
        {
            font-size: 14px;
            font-weight: normal;
            color: black;
            padding: 10px 8px;
            border-bottom: 2px solid black};
        }
        .list td
        {
            padding: 9px 8px 0px 8px;
        }
        </style>
EOF;
        return $html;
    }

    private function getTableTitleMarkup(AdvancedReporter $report): string
    {
        $tags = $report->getTags();

        $reportTitle = strtoupper($report->name);
        $reportTitleMarkup = '';
        $reportTitleMarkup .= $tags['tr']['begin'];
        $reportTitleMarkup .= $tags['td-1']['begin'] . '<strong>' . $reportTitle . '</strong>' . $tags['td-1']['end'];
        $reportTitleMarkup .= $tags['tr']['end'];
        return $reportTitleMarkup;
    }

}