<?php

class EchoIndividualUploadSize
{
    public function Output($event, $arguments)
    {
        if (isset($_REQUEST['sugar_body_only'])) {
            LoggerManager::getLogger()->fatal("UploadSize: sugar_body_only doesn't exist");
            return;
        }
        if (!empty($_REQUEST['to_pdf'])) {
            return;
        }

        if (isset($_REQUEST['module']) && $_REQUEST['module'] == "Meetings" || isset($_REQUEST['module']) && $_REQUEST['module'] == "Calendar") {
            LoggerManager::getLogger()->fatal("UploadSize: individualUploadMaxSize: " . $sugar_config['upload_individual_file_size']);
            global $sugar_config;
            $maxSize = empty($sugar_config['upload_individual_file_size'])
                ? 0 : $sugar_config['upload_individual_file_size'];
            echo "<script>var individualUploadMaxSize = $maxSize;</script>";
        }
    }
}