<?php
$rootPath = __DIR__.'/../../../';
require_once $rootPath . '/vendor/autoload.php';

function getNewMPdf()
{
//    return new Mpdf('en', 'A4', '', 'DejaVuSansCondensed');
    return new \Mpdf\Mpdf([
        'mode' => 'utf-8',
        'format' => [190, 236],
        'orientation' => 'L'
    ]);

}
