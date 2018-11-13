<?php

//prevent , if not submit
if(!isset($_POST['name'])) dir();

$request = array('name'=>$_POST['name'], 'email'=>$_POST['email']);

//inlude template

ob_start();
require_once('pdf-template/welcome.php');
$template = ob_get_clean();

//inlcude dompdf library
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;

//using pdf dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($template);

//set papger size 
$dompdf->setPaper('A4', 'landscape');

//Render the html to pdf
$dompdf->render();

//ouput to browser
$dompdf->stream('message-'.time());

//write pdf to directory
//file_put_contents('pdfs/message-'.time().'.pdf', $dompdf->output());

