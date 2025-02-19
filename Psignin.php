<?php


require_once 'connect.php';



if($_SERVER["REQUEST_METHOD"] == "POST") {

  $uname =$_POST['username'];
  $password =$_POST['password'];

  $_SESSION['username'] = $uname; 

  $sql="select*from user_table where username='".$uname."' and password = '".$password."'";
  $result = mysqli_query($connect , $sql);
  if(mysqli_num_rows($result)==1){
   
    session_start();
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];


     header("Location:Event.php"); 

  }else{
    echo "<h2>error in username or password</h2>";
  }
}
?>