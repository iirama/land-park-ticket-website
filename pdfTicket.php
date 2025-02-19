<?php
require('fpdf184/fpdf.php');
require_once 'connect.php';
$pdf = new FPDF();
session_start();
$res = $_SESSION['username'];

require_once 'connect.php';


$res = $_SESSION['username'];


$sql= "SELECT * FROM register where username_fk='$res' ORDER BY reg_id DESC LIMIT 1 ";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result); 
 // echo " order number: #" . $row2["phone"]. "<br> - zone name: " . $row["zname"]. "<br>";
 $sql= "SELECT * FROM user_table where username='$res' ";
 $result2 = mysqli_query($connect, $sql);
 
 $row2 = mysqli_fetch_assoc($result2);

$ON = $row["reg_id"];
$email= $row2["email"];
$phone = $row2["phone"];
$name1 =  $row2["FirstName"];
$name2 =  $row2["LastName"];
$date = date("d-m-Y");
$zonename = $row["zname"];
$time =$row["date"];
$numTic = $row["ticket"];
$SE = $row["Speical_Event"];
$price = $row["price"];


$pdf->AddPage();
$pdf->SetFont('Arial' , '' , 12);




$pdf->cell(55, 5,"Order number", 0 , 0  );
$pdf->cell(52, 5,": #$ON", 0 , 1 );
$pdf->cell(55, 5,"Customer name", 0 , 0 );
$pdf->cell(58, 5,": $name1 $name2" , 0 , 1  );




$pdf->cell(55, 5,"Email", 0 , 0 );
$pdf->cell(58, 5,": $email ", 0 , 1  );
$pdf->cell(55, 5,"Date", 0 , 0  );
$pdf->cell(52, 5,": $date", 0 , 1 );
//------------------------------

$pdf->cell(55, 5,"Phone", 0 , 0 );
$pdf->cell(58, 5,": $phone", 0 , 1  );
$pdf->Line(10 , 40 ,200 ,40);
$pdf->Ln(10);
//-----------------------------------------------
$pdf->cell(55, 5,"Zone name ", 0 , 0 );
$pdf->cell(58, 5,": $zonename", 0 , 1  );

$pdf->cell(55, 5,"Number Of ticket ", 0 , 0 );
$pdf->cell(58, 5,": $numTic", 0 , 1  );

$pdf->cell(55, 5,"Specal event ", 0 , 0 );
$pdf->cell(58, 5,": $SE", 0 , 1  );

$pdf->cell(55, 5,"Time ", 0 , 0 );
$pdf->cell(58, 5,": $time", 0 , 1  );
//-----------------------------------------------------

$pdf->Line(10,70,200,70);
$pdf->Ln(10);
$pdf->cell(55, 5,"Total price ", 0 , 0 );
$pdf->cell(58, 5,": $price", 0 , 1  );


$pdf->Ln(10);

$pdf->cell(10, 5,"Signuater : ", 0 , 0 );

$pdf->cell(55, 5,"funland park", 0 , 1 , "C" );
$pdf->Line(35,95,60,95);






$pdf->Output();

?>