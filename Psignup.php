<?php
require_once 'connect.php';




if(isset($_POST['submit']))
{
    $username = $_POST['user'];
	$FirstName = $_POST['Fname'];
	$LastName = $_POST['Lname'];
	$Gender = $_POST['ab'];
	$Email = $_POST['email'];
	$Phone = $_POST['Phone'];
	$password = $_POST['password'];
    
        $mysqli = "insert into user_table(username,FirstName,LastName,Gender,phone,email,password) values ('$username', '$FirstName','$LastName','$Gender','$Phone','$Email','$password')";

        $connect->query($mysqli);

	
	   header('Location:signin.php');


}

?>