<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>successfully</title>
    <link rel="stylesheet" href="park.css">

    <style>
          .navbar{
position: relative;
margin: 27px auto 0;
width: 200px;
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
background:#d54d7b;;
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
    </style>
</head>
<body>

            <nav class="navbar">
              <a href="index.php">home</a>
              <a href="contact.php">contact</a>
              <div class="animation start-home"></div>
            </nav> 

            <img
             src="image/funlogo.png"
             alt=""
             class="logo"
             >
            <h1>Thank You</h1><br>
            <h2 > Your request has been successfully completed </h2>

           
</body>
</html>