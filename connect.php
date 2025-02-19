<?php
//$connect = new PDO ('mysql:host=localhost;dbname=themepark','root','');

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "themepark";  
  
$connect = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

?>