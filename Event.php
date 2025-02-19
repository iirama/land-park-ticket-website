<?php
include_once("Psignin.php")

?>

<!doctype html>
<HTML>
    <head>
        <meta charset="utf-8">
        <title> Current events </title>
        <meta name="Description"content="A theme park with exciting attractions and fairy tales for a great day out. Buy discounted tickets online,Events,Ghostrun,VR Zone,Amusement ride">
        <link rel="stylesheet" href="park.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
   

        <style>
 
.navbar{

position: relative;
margin: 27px auto 0;
width: 300px;
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
left: 190px;
}




        </style>
    </head>
    <body>
        
    <img
             src="image/funlogo.png"
             alt=""
             class="logo"
             >

         <nav class="navbar">
              <a href="index.php">home</a>
              <a href="contact.php">contact</a>
              <a href="logout.php">logout</a>
              <div class="animation start-home"></div>
          </nav>

      <h1>FUN LAND </h1>
      <h2>Looking for exciting roller coasters, and enchanting attractions? Everyone will find what they are looking for in Fun Land Discover the largest and unique theme park </h2>

   <hr width="50%">
<center>
      <div class="Events">


         <h3>Our Events</h3>
 
         <div class="Events_box">
 
             <div class="Events_card">
 
                 <div class="Events_image">
                     <img src="image/ic-land.jpg">
                 </div>
                 
                 <div class="Events_text">
 
                     <div class="p_head">
                                       
                         <h2>ICE-LAND </h2>
                     </div>
 
                     <p>
                         Ice-land water park and has a wide range of high-speed slides which are suitable for all age groups. One can enjoy a variety of water slides, and games !
                     </p>

                     <a href="iceland.php" class="p_btn">Explore</a>
 
                 </div>
 
             </div>
             <div class="Events_card">

               <div class="Events_image">
                   <img src="image/jo-land.jpg">
               </div>
               
               <div class="Events_text">

                   <div class="p_head">                      
                       <h2>LEGO-LAND</h2>
                   </div>

                   <p>
                     There's a bit of everything at LEGO-LAND. It will keep younger adventurers amused !
                   </p>

                   
                   <a href="Lego.php" class="p_btn">Explore</a>

               </div>

           </div>
           <div class="Events_card">

            <div class="Events_image">
                <img src="image/ad-land.jpeg">
            </div>
            
            <div class="Events_text">

                <div class="p_head">                       
                    <h2>ADRENALINE-LAND</h2>
                </div>

                <p>
                  Whether you're a thrill-seeker, a wildlife-lover or prefer a more relaxed ride or slide, ADRENALINE-LAND has got it all !
                </p>

      
                <a href="Adrenaline.php" class="p_btn">Explore</a>

                 </div>

                   </div>
                        </div>
                     </div>
</center>
    </body>

</HTML>