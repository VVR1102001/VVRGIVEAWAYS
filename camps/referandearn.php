<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - campaign refer and earn</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Special giveaway by vvr."/>
    <meta name="keywords" content="free giveaway,campaign,holifestivalgiveaway,holi 2022,holi giveaway,holi special giveaway"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="../assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="../assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="../lifafa/lkg.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.ml/" />
<link rel="canonical" href="https://vvrgiveaways.ml/" />
<link rel='shortlink' href="www.vvrgiveaways.ml" />
<link rel="canonical" href="https://vvrgiveaways.ml" />
<link rel="canonical" href="https://www.vvrgiveaways.ml" />
    <script src="b1.js"></script>
  </head>
  <body onload="findUrl()" style="background-image:url(https://vvrgiveaways.cf/assets/svg/5.svg);background-repeat:no-repeat;">
    <div class="main" id="main">
      <div id="bdy">
    <h2>
     REFER AND EARN
    </h2>
 <div id="link">
   <?php
$rnum = $_POST["NUMBER"];
$link = $_POST["OFFERURL"];

$templink = $link;



$referid = uniqid();

//echo $link."&referby".$uniqid;
$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_campaigns");

$cnum = 9346117785;

$reflink = "https://vvrgiveaways.cf/camps/?referby=".$referid;

$cl = "SAMPLE";

$insert = "insert into rae values (NULL,'$referid','$reflink','$templink','$rnum','$cnum','$cl')";



if(mysqli_query($conn,$insert)){
    echo "<input type='url' autocomplete='off' id='txt' value='$reflink'/>";
}

//echo "<input type='url' autocomplete='off' id='txt' value='$reflink'/>";
 ?>
<!--<input type="url" autocomplete="off" id="txt" value="<?php echo $finallink.'&referby'.$uniqid;?>"/>-->
 </div>
 <script>
   function Copy(){
     var di = document.getElementById("txt");
     var diva = di.value;
     di.select();
     document.execCommand("copy");
     document.getElementById("subbtn").innerText="Copied";
   }
 </script>
 <button id="subbtn" onclick="Copy()">Copy Link</button>
      </body>
      </html>