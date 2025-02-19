<?php 
include_once("Psignup.php");



?>
<html>
    <head>
        <title>sign ip</title>



 <style>
  

  .div {
    
    max-width: 700px;
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

  input[type=Number] {
    width: 35%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #000000;
    outline: none;

  }

  input[type=Number]:focus {
    background-color: #FFE4E1;

  }

  input[type=password] {
    width: 35%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #000000;
    outline: none;

  }

  input[type=password]:focus {
    background-color: #FFE4E1;

  }


  input[type=submit] {
    width: 60%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    font-size: 120%;
    outline: none;
    outline-color:darkseagreen;
    background-color:darkseagreen;
    color: white;

  }

  input[type=submit]:focus {
    background-color: #FFE4E1;
  }

  input[type=radio] {
    width: 5%;

    margin: 5px 0;


  }
  
  
.logo{
  

    top:  0;
    left: 0;
    color:#2c3e50;
    height: auto;
    position: absolute;
    height: 200px;
    width: 200px;

}

.details{
display: inline-block; width:37%;

}

label{

font-size: 130%;
font-family: 'Poppins',sans-serif;
}

</style>



    </head>
 
  

    <body>
    <center>
    <div class="div" <fieldset>
    <img
             src="image/funlogo.png"
             alt=""
             class="logo"
             >

      <form action="Psignin.php" method="post" name="signin" >
       
        </br> </br> </br>
        <h2> Welcome, Friend! </br> Sign in</h2>
        

        <span class="details"><label> Username :</label> </span>
        <input type="text" name="username" required placeholder="username" required> 
      

      <br><br>


        <span class="details"><label> Password</label> </span>
        <input type="password" name="password" placeholder="password" required > 
        <br> 
   
     <br>
  
        <input type="submit" value="Sign Up" name="submit"><br><br>
         <span>don't have account?</span><a href="signup.php"> <span > sign up</span> </a> 

      

        

      </form>
    </fieldset>
    </div>
</center>
    </body>


</html>
