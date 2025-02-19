<html>
    <head>
        <title>sign up</title>
        <style>
  

    .div {
      
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

  </style>

<link rel="stylesheet" href="park.css">
    </head>
  <center>
  <div class="div" <fieldset>

    <body>
           <img
             src="image/funlogo.png"
             alt=""
             class="logo"
             >
      <form action="Psignup.php" method="post" name="singup" >
       
        </br> </br> </br>
        <h2> Join us and Enjoy FUN LAND! </br> Sign Up</h2>
        
        <span class="details"> <label>  username: </label> </span>
        <input type="text" name="user" required placeholder="username">  

        <span class="details"> <label> First Name: </label> </span>
        <input type="text" name="Fname" required placeholder="First Name">  

        <span class="details"><label>Last Name:</label></span>
        <input type="text" name="Lname" required placeholder="Last Name"> </br> </br>
        
      

        <span class="details"><label> Email :</label> </span>
        <input type="email" name="email" required placeholder="Email Address"> 

        <span class="details"><label> Phone Number:</label> </span>
        <input type="Number" name="Phone" required placeholder="Phone Number"><br><br>
      

        <span class="details"><label> Password</label> </span>
        <input type="password" name="password" minlength="8" required > 

        <span class="details"><label> Confirm Password </label></span>
        <input type="password" name="confirm_password" required><br><br>
     

      <label>Gender :</label>
        <input type="radio" name="ab" value="Male"><label>Male</label>
        <input type="radio" name="ab" value="female"><label>Female</label> <br><br>

       
       <input type="submit" value="Sign Up" name="submit"> 
       <br><br> 
      

      

        

      </form>
    </fieldset>

    </body>

  </div>
</center>
  
</html>

