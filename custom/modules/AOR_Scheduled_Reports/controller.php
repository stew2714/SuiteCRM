<?php

require_once('include/MVC/Controller/SugarController.php');
require_once('modules/AOS_PDF_Templates/PDF_Lib/mpdf.php');
require_once('custom/modules/AOR_Reports/customAOR_Report.php');

class AOR_Scheduled_ReportsController extends SugarController {

    public function __construct(){}

    public function action_sendreport() {
	    $reportId = '9a901a98-1666-ba87-8d7e-5b33a1ca47d5';
        $this->run($reportId);
    }

    public function run($data)
    {
        global $timedate;

        $bean = BeanFactory::getBean('AOR_Scheduled_Reports', $data);
        $report = $bean->get_linked_beans('aor_report', 'AOR_Reports');
        if ($report) {
            $report = $report[0];
            $report = new customAOR_Report($report);
        } else {
            return false;
        }

        $emailTemplate = BeanFactory::getBean('EmailTemplates',$bean->report_email_template_id_c);
        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();

        $mail->setMailerForSystem();
        $mail->IsHTML(true);
        $mail->From = $defaults['email'];
        $mail->FromName = $defaults['name'];
        $mail->Subject = from_html($bean->name);


        $reportType = $bean->report_format_c;
        switch($reportType){
            case 'body':
                $html = $this->generateHtmlReport($report);
                $mail->Body = $html;
                break;
            case 'pdf':
                $pdf = $this->generatePDF($report);
                if($pdf !== false){
                    $mail->addAttachment($pdf['location'],$pdf['name']);
                }

                $mail->Body = $emailTemplate->body_html;
                break;
            case 'csv':
                $csv = $report->build_report_csv_to_file();
                if($csv !== false){
                    $mail->addAttachment($csv['location'],$csv['name']);
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




    private function generatePDF($report)
    {
        global $sugar_config;
        $dateStr = (new \DateTime())->format('Y-m-d-H-i-s');
        $file_name = str_replace(" ", "_", $report->name) ."_".$dateStr. ".pdf";
        error_reporting(0);
        require_once('modules/AOS_PDF_Templates/PDF_Lib/mpdf.php');

        $d_image = explode('?', SugarThemeRegistry::current()->getImageURL('company_logo.png'));
        $graphs = $_POST["graphsForPDF"];
        $graphHtml = "<div class='reportGraphs' style='width:100%; text-align:center;'>";

        $chartsPerRow = $report->graphs_per_row;
        $countOfCharts = count($graphs);
        if ($countOfCharts > 0) {
            $width = ((int)100 / $chartsPerRow);

            $modulusRemainder = $countOfCharts % $chartsPerRow;

            if ($modulusRemainder > 0) {
                $modulusWidth = ((int)100 / $modulusRemainder);
                $itemsWithModulus = $countOfCharts - $modulusRemainder;
            }


            for ($x = 0; $x < $countOfCharts; $x++) {
                if (is_null($itemsWithModulus) || $x < $itemsWithModulus) {
                    $graphHtml .= "<img src='.$graphs[$x].' style='width:$width%;' />";
                } else {
                    $graphHtml .= "<img src='.$graphs[$x].' style='width:$modulusWidth%;' />";
                }
            }

            /*            foreach($graphs as $g)
                        {
                            $graphHtml.="<img src='.$g.' style='width:$width%;' />";
                        }*/
            $graphHtml .= "</div>";
        }

        $head = '<table style="width: 100%; font-family: Arial; text-align: center;" border="0" cellpadding="2" cellspacing="2">
                <tbody style="text-align: left;">
                <tr style="text-align: left;">
                <td style="text-align: left;">
                <p><img src="' . $d_image[0] . '" style="float: left;"/>&nbsp;</p>
                </td>
                <tr style="text-align: left;">
                <td style="text-align: left;"></td>
                </tr>
                 <tr style="text-align: left;">
                <td style="text-align: left;">
                </td>
                <tr style="text-align: left;">
                <td style="text-align: left;"></td>
                </tr>
                <tr style="text-align: left;">
                <td style="text-align: left;">
                <b>' . strtoupper($report->name) . '</b>
                </td>
                </tr>
                </tbody>
                </table><br />' . $graphHtml;

        $report->user_parameters = requestToUserParameters();

        $printable = $report->build_group_report(-1, false);
        $stylesheet = file_get_contents(SugarThemeRegistry::current()->getCSSURL('style.css', false));
        ob_clean();
        try {
            $fp = fopen($sugar_config['upload_dir'] . $file_name, 'wb');
            fclose($fp);
            $pdf = new mPDF('en', 'A4', '', 'DejaVuSansCondensed');
            $pdf->setAutoFont();
            $pdf->WriteHTML($stylesheet, 1);
            $pdf->WriteHTML($head, 2);
            $pdf->WriteHTML($printable, 3);
            $pdf->Output($sugar_config['upload_dir'] . $file_name, 'F');

            if($pdf){
                return array('name'=>$file_name,'location'=>$sugar_config['upload_dir'] . $file_name);
            }else{
                return false;
            }


        } catch (mPDF_exception $e) {
            echo $e;
        }
    }

    /**
     * @param $report
     * @return string
     */
    private function generateHtmlReport($report): string
    {
        $html = "<h1>{$report->name}</h1>" . $report->build_group_report();
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


}