<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

//instantiate and use
$dompdf = new Dompdf();
$dompdf->loadHtml('menggunakan library dompdf untuk membuat report pdf dengan dompdf');

//Setup Paper Size And Orientation
$dompdf->setPaper('A3','Landscape');

$dompdf->render();

//Ouput
$dompdf->stream('hasil_report_pdf');
?>
