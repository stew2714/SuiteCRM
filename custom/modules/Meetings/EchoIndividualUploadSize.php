<?php

class EchoIndividualUploadSize
{
    public function Output($event, $arguments)
    {
        if (!empty($_REQUEST['sugar_body_only'])) {
            return;
        }
        if (!empty($_REQUEST['to_pdf'])) {
            return;
        }

        if (isset($_REQUEST['module']) && $_REQUEST['module'] == "Meetings" || $_REQUEST['module'] == "Calendar") {
            global $sugar_config;
            $maxSize = empty($sugar_config['upload_individual_file_size'])
                ? 0 : $sugar_config['upload_individual_file_size'];
            echo "<script>var individualUploadMaxSize = $maxSize;</script>";
        }
    }
}