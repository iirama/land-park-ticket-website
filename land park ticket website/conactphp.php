<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "funland0012@gmail.com";
$subject = "This is the subject line";
 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $msg;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:cotactus01.html");
?>