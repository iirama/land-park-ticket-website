
<!Doctype html>
<html>
<head>
<title> Search Results</title>
<style>
body {font-family: sans-serif;
 background-color: lightyellow;}
</style>
</head>
<body>
<?php
include("config.php");
if(isset($_POST['submit']))
{
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$gender = $_POST['ab'];
	$email = $_POST['email'];
	$mobile = $_POST['Phone'];
	$password = $_POST['password'];
	$result = mysqli_query($mysqli,"insert into user values('$FirstName','$LastName','$Gender','$Email','$Phone','$password')");



$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo 'Strong password.';
}


if ($_POST["password"] === $_POST["confirm_password"]) {
   // success!
}
else {
   // failed :(
}

if($result)
	{
		echo "Registration Successfully";
	}
	else{
		echo "Those passwords didn’t match. Try again";
	}
}
?>