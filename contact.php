<?php

require_once 'connect.php';

if(isset($_POST['sumbit'])) {

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql = "insert into contact(name,email,msg) values ('$name', '$email','$msg')";

$connect->query($sql);

if($connect == TRUE){

    header('Location:thank.php');
	
}

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title> contact Us</title>
	<link
	rel="stylesheet"
	href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  />
  <link
	rel="stylesheet"
	href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="stylesheet" href="park.css">
	<style>
		div {
      
      max-width: 850px;
      width: 100%;
      padding: 35px 40px;
      border-radius: 5px;
      box-shadow: 0 6px 11px rgba(0, 0, 0, 0.15);
      font-weight: 500;
   

      
    }

    form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 20px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
 
 }

    body {
color: aliceblue;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
  font-family: 'Poppins',sans-serif;
 
    }


    input[type=text] {
      width: 35%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #000000;
      outline: none;

    }
	
    input[type=text]:focus {
      background-color: #FFE4E1;
    }

    input[type=email] {
      width: 35%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #000000;
      outline: none;

    }

    input[type=email]:focus {
      background-color: #FFE4E1;
    }

	input[type=textarea] {
      width: 35%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #000000;
      outline: none;

    }
	input[type=textarea]:focus {
      background-color: #FFE4E1;
    }
    input[type=submit] {
      width: 80%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
      font-size: 120%;
      outline: none;
      background-color:darkseagreen;
      color: white;

    }

    input[type=submit]:focus {
      background-color: #FFE4E1;
      border-radius: 8px;
    }

    input[type=radio] {
      width: 5%;

      margin: 5px 0;


    }
    
    

 
.details{
  display: inline-block; width:47%;
  
}

label{
  font-size: 160%;
  font-family: 'Poppins',sans-serif;
}
.r{
font-size:100px;

}

	</style>
  </head>
  <body>
	<center>
		<div class="form-center" ><fieldset>
	  
		  <body>
          <img
             src="image/funlogo.png"
             alt=""
             class="logo"
             >
			<form  action=""  method="POST" >
			 
			  </br> </br> </br>
			  <span class="r"> Conatact us </span>
			  <span class="details"> <label>  Name  : </label> </span>
			  <input type="text" name="name" required placeholder=" Your Name">  

			  <span class="details"><label> Email :</label> </span>
			  <input type="email" name="email" required placeholder=" YourEmail Address"> 

			  <span class="details"><label>Message :</label></span>
			  <textarea name="msg" cols="60" row="10" minlength =" 5" maxlength="500" required placeholder="Message"></textarea>
    <
			  <input type="submit" value="submit" name="sumbit"><br><br>
		    
    
	  
			</form>
		  </fieldset>
	  
		</div>
	  </center>
	</body>
</html>