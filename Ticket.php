
<?php  
include_once("Plego.php");
include_once("Piceland.php");
include_once("Padrenline.php");

require_once 'connect.php';


$res = $_SESSION['username'];


$sql= "SELECT * FROM register where username_fk='$res' ORDER BY reg_id DESC LIMIT 1 ";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result); 
 // echo " order number: #" . $row2["phone"]. "<br> - zone name: " . $row["zname"]. "<br>";
 $sql= "SELECT * FROM user_table where username='$res' ";
 $result2 = mysqli_query($connect, $sql);
 
 $row2 = mysqli_fetch_assoc($result2); 

?>
<!DOCTYPE html>
<html>
<head>
 
<style>
      .div {

        max-width: 850px;
        width: 100%;
        padding: 35px 40px;
        border-radius: 5px;
        box-shadow: 0 6px 11px rgba(0, 0, 0, 0.15);
        font-weight: 500;
        position: center;

      }

      img {
        border-radius: 60%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 53.33%;
        padding: -5px;
      }

      body {
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
      }

      

      h1 {

        color: white;
        text-align: center;
        padding: -10px;
        background-color: ;
        letter-spacing: 10px;
        font-size: 10vw;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        text-shadow: 0px -6px 0 #212121,
          0px -6px 0 #212121,
          0px 6px 0 #212121,
          0px 6px 0 #212121,
          -6px 0px 0 #212121,
          6px 0px 0 #212121,
          -6px 0px 0 #212121,
          6px 0px 0 #212121,
          -6px -6px 0 #212121,
          6px -6px 0 #212121,
          -6px 6px 0 #212121,
          6px 6px 0 #212121,
          -6px 18px 0 #212121,
          0px 18px 0 #212121,
          6px 18px 0 #212121,
          0 19px 1px rgba(0, 0, 0, .1),
          0 0 6px rgba(0, 0, 0, .1),
          0 6px 3px rgba(0, 0, 0, .3),
          0 12px 6px rgba(0, 0, 0, .2),
          0 18px 18px rgba(0, 0, 0, .25),
          0 24px 24px rgba(0, 0, 0, .2),
          0 36px 36px rgba(0, 0, 0, .15);
      }

      h2 {
        color: white;
        text-align: center;

        outset {
          outline-style: outset;
        }

        text-transform: capitalize;
        text-shadow: 0 1px 0 hsl(40, 5%, 50%),
        0 0px 0 hsl(40, 5%, 55%),
        0 1px 0 hsl(40, 5%, 50%),
        0 2px 0 hsl(40, 5%, 46%),
        0 3px 0 hsl(40, 5%, 44%),
        0 4px 0 hsl(40, 5%, 42%),
        0 5px 0 hsl(40, 5%, 41%),
        0 6px 0 hsl(40, 5%, 40%),

        0 0 4px rgba(0, 0, 0, .05),
        0 0px 2px rgba(0, 0, 0, .2),
        0 2px 4px rgba(0, 0, 0, .2),
        0 4px 9px rgba(0, 0, 0, .2),
        0 9px 9px rgba(0, 0, 0, .2),
        0 19px 19px rgba(0, 0, 0, .3);
        font-family: "Trebuchet MS",
        Helvetica,
        sans-serif;
        font-size: 2.475em;

      }

      h3 {
        color: white;
        text-align: center;
        text-transform: capitalize;
        text-shadow: 0 1px 0 hsl(40, 5%, 50%),
          0 0px 0 hsl(40, 5%, 55%),
          0 1px 0 hsl(40, 5%, 50%),
          0 2px 0 hsl(40, 5%, 46%),
          0 3px 0 hsl(40, 5%, 44%),
          0 4px 0 hsl(40, 5%, 42%),
          0 5px 0 hsl(40, 5%, 41%),
          0 6px 0 hsl(40, 5%, 40%),

          0 0 4px rgba(0, 0, 0, .05),
          0 0px 2px rgba(0, 0, 0, .2),
          0 2px 4px rgba(0, 0, 0, .2),
          0 4px 9px rgba(0, 0, 0, .2),
          0 9px 9px rgba(0, 0, 0, .2),
          0 19px 19px rgba(0, 0, 0, .3);
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 5vw;
      }

      h4 {
        color: white;
        text-align: left;
        text-transform: capitalize;
        text-indent: 50px;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 1.375em;

      }

      h5 {
        color: white;
        text-align: center;
        text-transform: capitalize;
        text-shadow: 0 1px 0 hsl(40, 5%, 50%),
          0 0px 0 hsl(40, 5%, 55%),
          0 1px 0 hsl(40, 5%, 50%),
          0 2px 0 hsl(40, 5%, 46%),
          0 3px 0 hsl(40, 5%, 44%),
          0 4px 0 hsl(40, 5%, 42%),
          0 5px 0 hsl(40, 5%, 41%),
          0 6px 0 hsl(40, 5%, 40%),

          0 0 4px rgba(0, 0, 0, .05),
          0 0px 2px rgba(0, 0, 0, .2),
          0 2px 4px rgba(0, 0, 0, .2),
          0 4px 9px rgba(0, 0, 0, .2),
          0 9px 9px rgba(0, 0, 0, .2),
          0 19px 19px rgba(0, 0, 0, .3);
        text-indent: 50px;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 1.375em;
        box-shadow: 10px 10px;
      }

      h6 {
        color: white;
        text-align: center;
        text-transform: capitalize;
        text-indent: 50px;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 1.575em;
        
      }

      p {
        color: white;

        text-align: center;

        text-transform: capitalize;
        text-indent: 50px;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 1.675em;
      }
.navbar{
position: relative;
margin: 27px auto 0;
width: 470px;
height: 50px;
background: linear-gradient(100deg, #50a0d6, #904faa);
border-radius: 8px;
font-size: 0;
box-shadow: 0 2px 3px 0 rbga(0,0,0,.1);

}
.navbar a {

font-size: 15px;
text-transform: uppercase;
color: white;
text-decoration: none;
line-height: 50px;
position: relative;
z-index: 1;
display: inline-block;
text-align: center;
}
.navbar.animation{

position:absolute;
height: 5px;
top: 0;
z-index: 0;
background:#d54d7b; 
border-radius: 8px;
transition: all .4s ease 0s;
}
.navbar .start-home ,a:nth-child(1):hover~.animation {
width: 100px;
left: 0;
}
a:nth-child(1){
width: 100px;
}

.navbar.start-about ,a:nth-child(2):hover~.animation {
width: 90px;
left: 100px;
}
a:nth-child(2){
width: 90px;
}
a:nth-child(3){

width: 100px;

}
.navbar .start-map ,a:nth-child(3):hover~.animation {
width: 110px;
left: 200px;
}

a:nth-child(4){

width: 170px;

}
.navbar .start-hours ,a:nth-child(4):hover~.animation {
width: 160px;
left: 300px;
}

button{
        background-color:darkseagreen;
        border: none;
        color: white;
        padding: 16px 32px;
        cursor: pointer;
        padding: 14px 40px;
        width: 30%;
        font-size: 1.275em;

        border-radius: 8px;
      }

      .size{

        font-size:55px;
      }
    </style>


<link rel="stylesheet" href="park.css">
</head>
<center>
<body>
            <img
             src="image/funlogo.png"
             alt=""
             class="logo"
             >


<nav class="navbar">
              <a href="index.php">home</a>
              <a href="Event.php">Event</a>
              <a href="contact.php">contact</a>
              <a href="logout.php">logout</a>
              <div class="animation start-home"></div>
  </nav>

<h1>FUN LAND</h1>

<br>

<h3> <?php echo "$res";  ?> <br>
you're good to go<br>
Keep your tickets handy</h3>


<div class="div">

<h3 class="size">Customer information </h3>

  
  <p><?php echo " Customer Name : " . $row2["FirstName"] ." ". $row2["LastName"];?> </p>

  <p><?php echo " Email : " . $row2["email"];?> </p>

  <p><?php echo " Phone Number : " . $row2["phone"];?> </p>


 
</div>


<br>
<div  class="div">
  <h3 class="size">Ticket information </h3>

  <p><?php echo " order number: #" . $row["reg_id"];?> </p>
  <p><?php echo " Land name: " . $row["zname"];?> </p>
  <p><?php echo " Time : " . $row["date"];?> </p>
  <p><?php echo "Number of Tickets  : " . $row["ticket"];?> </p>
  <p><?php echo " specal event: " . $row["Speical_Event"];?> </p>

  <hr>
  <p><?php echo "Total price  : " . $row["price"];?> </p>
 </br>

    <a href="pdfTicket.php"><button  >Print your ticekt </button></a>
  <p>Refund policy: refunds up to 7 days</p>
  
    
</div>
<br>

</body>
</center>
</html>