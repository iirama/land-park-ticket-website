<?php 
require_once 'connect.php';
session_start();
if(isset($_POST['che'])){

if(!$_SESSION['username']){
header("location:signin.php");
exit;
}else{
  header("location:Event.php");
  die();
}
}



?>