<!DOCTYPE html>
<html lang="en-IN">
  <head>
   <title>vvrgiveaways - Campaign Register</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Verified Loots for earning paytm cash instantly without investing even single rupee"/>
    <meta name="keywords" content="free giveaway,free giveaways,free campaigns,Earn paytm cash for free"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="../assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="../assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="../lifafa/lkg.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.cf/" />
<link rel="canonical" href="https://vvrgiveaways.cf/" />
<link rel='shortlink' href="www.vvrgiveaways.cf" />
<link rel="canonical" href="https://vvrgiveaways.cf" />
<link rel="canonical" href="https://www.vvrgiveaways.cf" />
  </head>
  <body style="background-image:url(https://vvrgiveaways.cf/assets/svg/5.svg);background-repeat:no-repeat;">
    <div class="main" id="main">
      <div id="bdy">
    <h2>
    WELCOME TO VVRGIVEAWAYS OFFICIAL WEBSITE
      </h2>
<center>

<?php 
error_reporting(0);
session_start();
if(isset($_POST["OFFERNUMBER"])){
    $number = $_POST["OFFERNUMBER"];
    $url = $_POST["OFFERURL"];

    //echo $url;

   $finalurl = $url."&aff_click_id=$number&sub_aff_id=9346117785";

    header("location:$finalurl");
}

$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_campaigns");


?>

     </center>

<br><br><br><br><br>


       
<br><br>        
</p>
</center>
  </body>
</html>




