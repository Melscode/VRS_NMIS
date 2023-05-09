<?php
  
require('fpdf185/fpdf.php');


// New object created and constructor invoked
$pdf = new FPDF();
  
// Add new pages. By default no pages available.
$pdf->AddPage();
  
// Set font format and font-size
$pdf->SetFont('Times', 'B', 20);
  
// Framed rectangular area
$pdf->Cell(176, 5, 'Welcome to GeeksforGeeks!', 0, 0, 'C');
 
$imagenurl = "../login form/images/NMIS_LOGO.png"; // in my case
// 1) left corner in coord x=1 and y=1
$pdf->Cell(0, 0, $pdf->Image($imagenurl, 1,1,20,10), 0, 0, 'C', false,'');

// 2) right corner in coord x=$pdf->GetX() - image width + 1 and y = $pdf->GetY() - image height + 1
$pdf->Cell(0, 0, $pdf->Image($imagenurl, $pdf->GetX()-20+1,$pdf->GetY()-10+1,20,10), 0, 0, 'C', false,'');
// Set it new line
$pdf->Ln();
  
// Set font format and font-size
$pdf->SetFont('Times', 'B', 12);
  
// Framed rectangular area
$pdf->Cell(176, 10, 'A Computer Science Portal for geek!', 0, 0, 'C');

// Set it new line
$pdf->Ln();

$pdf->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
$pdf->Cell(50,5,'Words Here',1,0,'L',0);
$pdf->Cell(50,5,'Words Here',1,0,'L',0);
$pdf->Cell(40,5,'Words Here','LR',1,'C',0);  // cell with left and right borders
$pdf->Cell(50,5,'[ x ] abc',1,0,'L',0);
$pdf->Cell(50,5,'[ x ] checkbox1',1,0,'L',0);
$pdf->Cell(40,5,'','LBR',1,'L',0);   // empty cell with left,bottom, and right borders
$pdf->Cell(50,5,'[ x ] def',1,0,'L',0);
$pdf->Cell(50,5,'[ x ] checkbox2',1,0,'L',0);

  
  
// Close document and sent to the browser
$pdf->Output();
  
?>