<?php
$price = 210;
$movie_price =85;
if(isset($_POST['Send']))
{$date=$_POST['choise'];

$no_tickites = $_POST['quantity'];

$movie = $_POST['les'];
}

if($movie == "yes"){
$total_price = ($price * $no_tickites) + ($movie_price * $no_tickites);
}
if($movie == "no"){
$total_price = $price * $no_tickites;
}

?>
