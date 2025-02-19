<?php

require_once 'connect.php';
session_start();
$zonename = 'ice land';
$price = 240;
$lesson_price =199;



if(isset($_POST['Send']))
{
$date=$_POST['choise'];//done

$tikect = $_POST['quantity'];

$speical_Event = $_POST['chrad'];



if($speical_Event == "yes"){
$total_price = ($price * $tikect) + ($lesson_price *$tikect);
}
if($speical_Event== "no"){
$total_price = $price * $tikect;
}

session_start();
$res = $_SESSION['username'];


$mysqli = "insert into register(reg_id,username_fk,date,ticket,price,zname , Speical_Event) values (' ','$res' ,'$date','$tikect','$total_price','$zonename','$speical_Event')";

$connect->query($mysqli);
header('location:Ticket.php');
}

?>