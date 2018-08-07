<?php
$rootPath = 'custom/include/mPDF';
require_once $rootPath . '/vendor/autoload.php';

function getNewMPdf()
{
//    return new Mpdf('en', 'A4', '', 'DejaVuSansCondensed');
    return new mPDF([
        'mode' => 'utf-8',
        'format' => [190, 236],
        'orientation' => 'L'
    ]);

}
