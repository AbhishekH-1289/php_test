<?php
include "db.php";
require "vendor/autoload.php"

$results=$conn->prepare("");

$pdf = new TCPDF();
$pdf -> addPage();
$pdf -> setFont('times','I',12);
$pdf -> setCell('0','0',"title",'1','C');

$html =  "<table><thead><td> Example 1<td><td> Example 2<td><td> Example 3<td> <thead></table>";

$html .= while()

$html .= <>

$pdf -> writeHtml($html,'true','false','true','false','true',1);



?>