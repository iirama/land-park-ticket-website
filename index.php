<?php  

session_start();


if(!empty($_SESSION['username']))
{
  $page = "logout";
  $name = "logout";

}else
{
  $page = "signin";
  $name = "login";
 }


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Funland</title>

    <link rel="stylesheet" href="park.css">
  </head>

    <body>

      <div>
        <link href="park.css" rel="stylesheet" />
  
        <div class="container">
          <div class="part1">
            <img
              src="picOFindex/image316-3gra-600w.png"
              alt="IMAGE316"
              class="yelowRoller"
            />
            
            <span class="text1">
              <span>
                <p>TO BE READY TOWARDS WORLD FULL OF SURPRISES
                <br />
               
                <br />
                AND ADVENTURES !</p>
              </span>
            </span>
            <nav>
              <a href="index.php">home</a>
              <a href="#about us">about</a>
              <a href="#map">map</a>
              <a href="contact.php">contact</a>
              <a href= <?php echo"$page.php"; ?> > <?php echo"$name";  ?> </a>

           
             
              <div class="animation start-home"></div>
          </nav>

         
          <span class="siteName"><b>Welcome to Funland</b></span>>
            <!--buy  <a href="signin.php"> <button class="buy"  > buy ticket</button>   tt-->
           
            <form action="session.php" method="post">
            <input type="submit" name="che" value="Buy Ticket" id="buy">
            </form>
            <img
             src="picOFindex/funlogo.png"
             alt=""
             class="logo"
             >
             
       
              <h3 class="advFunText">-ACTIVITIES WITH FUN!</h3>
           
            <img
              src="picOFindex/rectangle4742-7dlj-700h.png"
              alt="Rectangle4742"
              class="img1"
            />
            <img 
            src="picOFindex/universal-super-silly-fun-land-gate-802x535.jpg" 
            alt="universal-super-silly-fun-land-gate"
            class="funlandpic"
            >
            <img
              src="picOFindex/rectangle6744-pjbg-600w.png"
              alt="Rectangle6744"
              class="img2"
            />
            <img
              src="picOFindex/rectangle5745-hq8-600w.png"
              alt="Rectangle5745"
              class="img3"
            />
            <img
              src="picOFindex/rectangle91260-ju4f-900h.png"
              alt="Rectangle91260"
              class="endimg"
            />
            <span class="picMap" id="map"><span>- M A P</span></span>
            <span class="LocTex">
              <address>jeddah-prince suiltan street - jed4565</address>
            </span>
            <span class="phoneTex"><address>12-456-5657</address></span>
            <span class="contactTex" id="con"><span>CONTACTS</span></span>
            <span class="hoursTex"><span>HOURS</span></span>
            <span class="last"> <span> &#169; Funland, All Rights Reserved </span></span>
            <div class="iconlocationpin">
              <img
                src="picOFindex/vector1292-vt.svg"
                alt="Vector1292"
                class="locvector1"
              />
              <img
                src="picOFindex/vector1293-tojk.svg"
                alt="Vector1293"
                class="locvector2"
              />
            </div>
            <div class="frameiconphone">
              <img
                src="picOFindex/vector1284-z7tm.svg"
                alt="Vector1284"
                class="phonevector"
              />
            </div>
            <div class="frameiconyoutube">
              <a href="https://www.youtube.com/channel/UClvx7RyZWcjjMNzcCHJMU1g"><img
                src="picOFindex/vector1287-k0bj.svg"
                alt="Vector1287"
                class="youtubevector2"
              /> </a> 
            </div>
            <div class="frameicontwitter">
             <a href="https://twitter.com/kauweb"> <img
                src="picOFindex/vector1271-am1e.svg"
                alt="Vector1271"
                class="twittervector"
              /> </a>
            </div>
            <div class="frameiconfacebook">
             <a href="https://www.facebook.com/KingAbdulazizUniversity"><img
                src="picOFindex/vector1281-p81.svg"
                alt="Vector1281"
                class="facebookvector"
              /> </a> 
            </div>
            <span class="hourseInfo"id=hours >
              <span>
                <span>Sat  -  4pm-2am</span>
                <br />
                <span>Sun  - 5pm-12am</span>
                <br />
                <span>Mon  - closed</span>
                <br />
                <span>Tue  - 5pm-12am</span>
                <br />
                <span>Wed  - 5pm-12am</span>
                <br />
                <span>Thu  - 4pm-2am</span>
                <br />
                <span>Fri  - 4pm-2am</span>
                <br />
                
              </span>
            </span>
            <img
              src="picOFindex/mapimg.jpg"
              alt="mapimg"
              class="map"
            />
            <div class="part2">
             
              <img
                src="picOFindex/IMG_7035.PNG"
                alt="imRoll1333"
                class="ciclerpic"
              />
              <span class="aboutus" id="about us">-ABOUT US</span>
              <div class="aboutInfo">
                <span>
                  <h2>
                    Do you want to experience real fun? And go on an adventure full of enthusiasm?
                  <br/>
                  <span>here in Funland we have many a ctivities and events to do, we have the longest spinning  wheel,
                  <br />
                   and roller coaster ever and the biggest speed gliding tower.
                   <br>
                   And more and more games and various activities suitable for all ages , visit us soon and have fun!
                    </h2>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>