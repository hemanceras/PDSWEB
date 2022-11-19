<?php
require('../fpdf/fpdf.php');
require('config.php');

date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../img/unad.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,40,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,40,utf8_decode('REPORTE PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,40,'codigo');
$pdf->Cell(25,40,'nombre');
$pdf->Cell(25,40,'marca');
$pdf->Cell(25,40,'precio');
$pdf->Cell(25,40,'cantidad');

$pdf->Ln(10);

$pdf->SetFont('Arial','',8);


$query_select = 'SELECT * FROM tabla34';
$result = mysqli_query($conn,$query_select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,40, $reg['codigo'], 0);

$pdf->Cell(25,40, utf8_decode($reg['nombre']), 0);

$pdf->Cell(25,40, utf8_decode($reg['marca']), 0);

$pdf->Cell(25,40, utf8_decode($reg['precio']), 0);

$pdf->Cell(25,40, utf8_decode($reg['cantidad']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
mysqli_close($conn);
?>
