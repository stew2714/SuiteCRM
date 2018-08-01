<?php

class EchoIndividualUploadSize
{
    public function Output($event, $arguments)
    {
        if (!empty($_REQUEST['sugar_body_only'])) {
            return;
        }

        global $sugar_config;
        $maxSize = empty($sugar_config['upload_individual_file_size'])
            ? 0 : $sugar_config['upload_individual_file_size'];
        echo "<script>var individualUploadMaxSize = $maxSize;</script>";
    }
}