<?php
  
require('fpdf185/fpdf.php');


$pdf = new FPDF(); // New object created and constructor invoked
$pdf->AddPage(); // Add new pages. By default no pages available.

//Header//
$pdf->SetFont('Times', '', 10);// Set font format and font-size
$pdf->Cell(200, 10, 'Republic of the Philippines', 0, 0, 'C');// Framed rectangular area
 
$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 10);// Set font format and font-size
$pdf->Cell(200, -1, 'DEPARTMENT OF AGRICULTURE', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', 'B', 10);// Set font format and font-size
$pdf->Cell(200, 10, 'NATIONAL MEAT INSPECTION SERVICE', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', 'B', 10);// Set font format and font-size
$pdf->Cell(200, -1, 'No.4 Visayas Avenue, Brgy. Vasra, Quezon City', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 10);// Set font format and font-size
$pdf->Cell(200, 10, 'Tel. N o. 8-924-7980', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 10);// Set font format and font-size
$pdf->Cell(200, -1, 'www.nmis.gov.ph | nmis@nmis.gov.ph', 0, 0, 'C');// Framed rectangular area
//end of the header//

//A. To be filled-up by the Dispatcher //
$pdf->Ln(5);// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(60, 10, 'A. To be filled-up by the Dispatcher', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(29, 1, 'Control No.', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(42, 10, '1. Name of the Driver:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(40, -1, '2. Vehicle Plate No.:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(59, 10, '3. Name of Authorized Passenger/s:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(53, -1, '4. Duration of Dates of Travel:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(38, 10, '5. Fuel (Volume):  ', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(28, -1, '6. Purpose:', 0, 0, 'C');// Framed rectangular area
//end //

//tables//
$pdf->Ln(5);// Set it new line
$pdf->SetFont('Times','B', 9);
$pdf->Cell(190,5,'ITINERARY',1,0,'C',0);
$pdf->Ln();
$pdf->SetFont('Times','', 9);
$pdf->Cell(63,5,'Destination/s',1,0,'C',0);
$pdf->Cell(64,5,'ETD (Time/ Date)',1,0,'C',0);
$pdf->Cell(63,5,'ETA (Time/ Date)','LBR',1,'C',0);   
$pdf->Cell(63,5,'',1,0,'C',0);
$pdf->Cell(64,5,'',1,0,'C',0);
$pdf->Cell(63,5,'','LBR',1,'C',0);  
// end tables//

$pdf->Ln();
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(28, -1, 'Requested by:', 0, 0, 'C');// Framed rectangular area
$pdf->Cell(200, -1, 'Approved by:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln(5);// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(29, 10, 'DR. YVETTE', 0, 0, 'C');// Framed rectangular area

$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(237, 10, 'LAMBERTO B. DELA CRUZ, JR. MPM', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', 'I', 9);// Set font format and font-size
$pdf->Cell(34, -1, 'Supervising Admin', 0, 0, 'C');// Framed rectangular area

$pdf->SetFont('Times', 'I', 9);// Set font format and font-size
$pdf->Cell(226, -1, 'Chief Administrative and Management Div.', 0, 0, 'C');// Framed rectangular area





// $pdf->Ln();// Set it new line
// $pdf->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
// $pdf->Cell(50,5,'Words Here',1,0,'L',0);
// $pdf->Cell(50,5,'Words Here',1,0,'L',0);
// $pdf->Cell(40,5,'Words Here','LR',1,'C',0);  // cell with left and right borders
// $pdf->Cell(50,5,'[ x ] abc',1,0,'L',0);
// $pdf->Cell(50,5,'[ x ] checkbox1',1,0,'L',0);
// $pdf->Cell(40,5,'','LBR',1,'L',0);   // empty cell with left,bottom, and right borders
// $pdf->Cell(50,5,'[ x ] def',1,0,'L',0);
// $pdf->Cell(50,5,'[ x ] checkbox2',1,0,'L',0);

  
  
// Close document and sent to the browser
$pdf->Output();
  
?>