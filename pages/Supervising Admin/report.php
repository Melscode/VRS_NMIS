<?php
require('fpdf185/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(40,10,'A. To be filled-up by the Dispatcher');
$pdf->Ln();
$pdf->Cell(41,11,'1. Name ofthe Driver :');
$pdf->Ln();
$pdf->Cell(40,10,'2. Vehicle Plate No. :');
$pdf->Ln();
$pdf->Cell(40,10,'3. Name of Authorized Passengers. :');
$pdf->Ln();
$pdf->Cell(40,10,'4. Duration of Dates of Travel:');
$pdf->Ln();
$pdf->Cell(40,10,'5. Fuel:');
$pdf->Ln();
$pdf->Cell(40,10,'6. Purpose :');
$pdf->Output();
?>
