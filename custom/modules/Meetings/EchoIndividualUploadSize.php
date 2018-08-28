<?php

class EchoIndividualUploadSize
{
    public $modulesToOutputScript = [
        'Meetings',
        'Calendar',
        'Home',
    ];

    public function Output($event, $arguments)
    {
        if ($this->isValidModule()) {
            global $sugar_config;
            $maxSize = empty($sugar_config['upload_individual_file_size'])
                ? 0 : $sugar_config['upload_individual_file_size'];
            echo "<script>var individualUploadMaxSize = $maxSize;</script>";
        }
    }

    /**
     * @return bool
     */
    protected function isValidModule()
    {
        if (!empty($_REQUEST['sugar_body_only'])) {
            return false;
        }
        if (!empty($_REQUEST['to_pdf'])) {
            return false;
        }
        if (!isset($_REQUEST['module'])) {
            return false;
        }

        return in_array($_REQUEST['module'], $this->modulesToOutputScript, true);
    }
}