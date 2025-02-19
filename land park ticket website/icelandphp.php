<?php

$price = 240;
$lesson_price =199;

if(isset($_POST['Send']))
{$date=$_POST['choise'];

$no_tickites = $_POST['quantity'];

$lesson = $_POST['les'];
}

if($lesson == "yes"){
$total_price = ($price * $no_tickites) + ($lesson_price * $no_tickites);
}
if($lesson == "no"){
$total_price = $price * $no_tickites;
}

?>