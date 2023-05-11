<?php
  
require('fpdf185/fpdf.php');

$conn = new mysqli('localhost', 'root', '', 'nmisvr_db');

if($conn->connect_error){
    die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
  }
  $select = "SELECT * FROM request_tbl ORDER BY id";
  $result = $conn->query($select);

  while($row = $result->fetch_object()){
    $id = $row->id;
    $transaction_id = $row->transaction_id;
    $requestor_name = $row->requestor_name;
    $requestor_govmail= $row->requestor_govmail;
    $requestor_position = $row->requestor_position;
    $requestor_division = $row->requestor_division;
    $requestor_contact_number = $row->requestor_contact_number;
    $region= $row->region;
    $passenger = $row->passenger;
    $number_of_passenger = $row->number_of_passenger;
    $name_of_passenger = $row->name_of_passenger;
    $office= $row->office;
    $raduis = $row->raduis;
    $pickup_point = $row->pickup_point;
    $destination = $row->destination;
    $start_date= $row->start_date;
    $end_date = $row->end_date;
    $start_time = $row->start_time;
    $end_time = $row->end_time;
    $purpose = $row->purpose;
    $remarks = $row->remarks;
    $travel_order= $row->travel_order;
    $asigned_driver = $row->asigned_driver;
    $vehicle_plate_number = $row->vehicle_plate_number;
    $start_odometer = $row->start_odometer;
    $end_odometer= $row->end_odometer;


   




$pdf = new FPDF('P','mm','A4'); // New object created and constructor invoked
$pdf->AddPage(); // Add new pages. By default no pages available.

$pdf->Image('../login form/images/logos1.png', 35, 7, 35);

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
// end of the header//

//A. To be filled-up by the Dispatcher //
$pdf->Ln(2);// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(60, 10, 'A. To be filled-up by the Dispatcher', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(29, 1, 'Control No.', 0, 0, 'C');// Framed rectangular area
$pdf->Cell(10, 1, $transaction_id, 0, 0, 'C');
$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(42, 10,'1. Name of the Driver: ', 0, 0, 'C');
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(15, 10, $asigned_driver, 0, 0, 'C');  // Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(40, -1, '2. Vehicle Plate No.:', 0, 0, 'C');
$pdf->Cell(40, -1, '', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(59, 10, '3. Name of Authorized Passenger/s:', 0, 0, 'C');// Framed rectangular area
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(45, 10, $name_of_passenger, 0, 0, 'C');
$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(53, -1, '4. Duration of Dates of Travel:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(38, 10, '4. Fuel (Volume):  ', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(28, -1, '6. Purpose:', 0, 0, 'C');// Framed rectangular area
//end //
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(28, -1, $purpose, 0, 0, 'C');// Framed rectangular area

//tables//
$pdf->Ln(2);// Set it new line
$pdf->SetFont('Times','B', 9);
$pdf->Cell(190,4,'ITINERARY',1,0,'C',0);
$pdf->Ln();
$pdf->SetFont('Times','', 9);
$pdf->Cell(63,4,'Destination/s',1,0,'C',0);

$pdf->Cell(64,4,'ETD (Time/ Date)',1,0,'C',0);
$pdf->Cell(63,4,'ETA (Time/ Date)','LBR',1,'C',0);   
$pdf->Cell(63,4,$destination,1,0,'C',0);
$pdf->Cell(64,4,$start_date ,1,0,'C',0);
$pdf->Cell(63,4,$end_date,'LBR',1,'C',0);  
// end tables//

$pdf->Ln();
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(28, -1, 'Requested by:', 0, 0, 'C');// Framed rectangular area
$pdf->Cell(190, -1, 'Approved by:', 0, 0, 'C');// Framed rectangular area

$pdf->Ln(3);// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(43, 10, 'DR. YVETTE SOLLER', 0, 0, 'C');// Framed rectangular area

$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(200, 10, 'LAMBERTO B. DELA CRUZ, JR. MPM', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times', 'I', 9);// Set font format and font-size
$pdf->Cell(44, -1, 'Supervising Admin Officer', 0, 0, 'C');// Framed rectangular area

$pdf->SetFont('Times', 'I', 9);// Set font format and font-size
$pdf->Cell(197, -1, 'Chief Administrative and Management Div.', 0, 0, 'C');// Framed rectangular area

$pdf->Ln(3);// Set it new line
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(53, 5, 'B. To be filled-up by the Driver', 0, 0, 'C');// Framed rectangular area

$pdf->Ln();// Set it new line
$pdf->SetFont('Times','B', 9);
$pdf->Cell(16,23,'DATE',1,0,'C',0);
$pdf->Cell(75,11,'DEPARTURE',1,0,'C',0);
$pdf->Cell(75,11,'ARRIVAL',1,0,'C',0);
$pdf->Cell(24,11,'DISTANCE',1,0,'C',0);

// $pdf->Ln();
// $pdf->Cell(167,0,' ','',0,'L',0);   // empty cell with left,top, and right borders
// $pdf->Cell(24,0,'TRAVELLED',0,'L',0);

$pdf->Ln();// Set it new line
$pdf->Cell(16,10,' ','',0,'L',0);   // empty cell with left,top, and right borders
$pdf->Cell(15,12,'TIME',1,0,'C',0);
$pdf->Cell(38,12,'PLACE',1,0,'C',0);
$pdf->Cell(22,12,'ODOMETER',1,0,'C',0);
$pdf->Cell(15,12,'TIME',1,0,'C',0);
$pdf->Cell(38,12,'PLACE',1,0,'C',0);
$pdf->Cell(22,12,'ODOMETER',1,0,'C',0);
$pdf->Cell(24,12,'',1,0,'C',0);

//1
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//2
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//3
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//4
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//5
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//6
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//7
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);


//8
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//9
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//10
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//11
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//12
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

//13
$pdf->Ln();
$pdf->Cell(16,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(15,4,'',1,0,'C',0);
$pdf->Cell(38,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);


$pdf->Ln(7);// Set it new line
$pdf->SetFont('Times','B', 9);
$pdf->Cell(91,4,'GASOLINE USED',1,0,'L',0);
$pdf->SetFont('Times','', 9);
$pdf->Cell(99,4,'OTHER VEHICLE EXPENSES',1,0,'C',0);

$pdf->Ln();
$pdf->SetFont('Times','', 9);
$pdf->Cell(69,4,'Balance in Tank',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'Items',1,0,'C',0);
$pdf->Cell(22,4,'Receipt Nos.',1,0,'C',0);
$pdf->Cell(24,4,'Amount',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Issued from Stock',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Purchased Outside',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Gasoline Used',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Balance in Tank',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Gear oil put in',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Motor oil put in',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln();
$pdf->Cell(69,4,'Brake fluid put in',1,0,'L',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(53,4,'',1,0,'C',0);
$pdf->Cell(22,4,'',1,0,'C',0);
$pdf->Cell(24,4,'',1,0,'C',0);

$pdf->Ln(8);
$pdf->SetFont('Times', '', 9);// Set font format and font-size
$pdf->Cell(28, -1, 'Certified Correct:', 0, 0, 'C');// Framed rectangular area
$pdf->Cell(196, -1, 'I/We hereby certify that I/We used this vehicle on official business:', 0, 0, 'C');// Framed rectangular area
$pdf->Ln(5);
$pdf->Cell(70, -1, 'Printed Name', 0, 0, 'C');// Framed rectangular area
$pdf->Cell(40, -1, 'Signature', 0, 0, 'C');// Framed rectangular area

$pdf->Ln(3);// Set it new line
$pdf->Cell(6,4,' 1','',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Cell(60,4,'',1,0,'L',0);
$pdf->Cell(45,4,'',1,0,'L',0);
$pdf->SetFont('Times', 'B', 9);// Set font format and font-size
$pdf->Cell(70,4,$asigned_driver,'',1,'C',0);

$pdf->Cell(6,4,' 2','',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Cell(60,4,'',1,0,'L',0);
$pdf->Cell(45,4,'',1,0,'L',0);
$pdf->Cell(16,10,' ','',0,'L',0);   // empty cell with left,top, and right borders
$pdf->Cell(40,4,'','B',1,'L',0);   // empty cell with left,bottom, and right borders

$pdf->Cell(6,4,'3','',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Cell(60,4,'',1,0,'L',0);
$pdf->Cell(45,4,'',1,0,'L',0);
$pdf->Cell(70,4,'Date Signed','',1,'C',0);

$pdf->Cell(6,4,'4','',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Cell(60,4,'',1,0,'L',0);
$pdf->Cell(45,4,'',1,0,'L',0);

$pdf->SetFont('Times','B', 9);
$pdf->Cell(70,4,'To be accomplished in Three (3) copies to be','',1,'C',0);
$pdf->Cell(147,4,'distributed as follows:','',1,'R',0);
$pdf->Cell(70,4,'Original Copy SAO, 2nd copy guard exit gate and 3rd driver','',1,'L',0);

$pdf->Image('../login form/images/footerlogo1.png', 6, 271, 200);
  }
$pdf->Output();
  
?>