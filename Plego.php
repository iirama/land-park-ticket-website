<?php
require_once 'connect.php';
$price = 210;
$movie_price =85;
$zonename = 'lego land';
if(isset($_POST['Send']))

{$date=$_POST['choise'];

$tikect = $_POST['quantity'];

$speical_Event = $_POST['chrad'];


if($speical_Event == "yes"){
$total_price = ($price * $tikect) + ($movie_price * $tikect);
}
if($speical_Event == "no"){
$total_price = $price * $tikect;
}

session_start();
$res = $_SESSION['username'];


$mysqli = "insert into register(reg_id,username_fk,date,ticket,price,zname ,Speical_Event ) values (' ','$res' ,'$date','$tikect','$total_price','$zonename' , '$speical_Event')";

$connect->query($mysqli);
header('location:Ticket.php');

}
?>
