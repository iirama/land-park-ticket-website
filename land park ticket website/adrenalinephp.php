<?php

$price = 240;
$tour_price =100;

if(isset($_POST['Send']))
{$date=$_POST['choise'];

$no_tickites = $_POST['quantity'];

$tour = $_POST['les'];
}

if($tour == "yes"){
$total_price = ($price * $no_tickites) + ($tour_price * $no_tickites);
}
if($tour == "no"){
$total_price = $price * $no_tickites;
}

?>