#!/bin/bash

SUITECRM_PATH=/var/www/html/SuiteCRM

cd $SUITECRM_PATH

chown -R apache.apache .
chmod -R 755  include examples install jssource log4php XTemplate metadata mobile ModuleInstall public service soap document_templates
chmod -R 775 cache custom modules themes data upload config_override.php

