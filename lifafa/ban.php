<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - access ban</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Special giveaway by vvr."/>
    <meta name="keywords" content="free giveaway,campaign,holifestivalgiveaway,holi 2022,holi giveaway,holi special giveaway"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="lkg.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.ml/" />
<link rel="canonical" href="https://vvrgiveaways.ml/" />
<link rel='shortlink' href="www.vvrgiveaways.ml" />
<link rel="canonical" href="https://vvrgiveaways.ml" />
<link rel="canonical" href="https://www.vvrgiveaways.ml" />
    <script src="b1.js"></script>
  </head>
  <body onload="findUrl()" style="background-image:url(https://vvrgiveaways.cf/lifafa/assets/svg/7.svg);background-repeat:no-repeat;">
    <div class="main" id="main">
      <div id="bdy">

    <h2>
   BAN USER
    </h2>
    <center>
    <pre>Ban any user</pre></center><br><br>
<center>
    <?php

session_start();
error_reporting(0);

    $urlid = 0;
$user = 0;
/*if(isset($_SESSION["USERID"])){
    $urlid = $_SESSION["USERID"];
}else{
    unset($_SESSION["USERID"]);
    header("location:../login.php");
}*/
$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_ban");

date_default_timezone_set("Asia/Kolkata");
$datetime = date("d/m/Y  h:i:s a");

//$sql = "insert into ban values(NULL,'NUMBER','EMAIL','$datetime','CHANNEL','Unban')";
      //$result = mysqli_query($conn,$sql);

      //$_SESSION["userid"] = $urlid;

      //if($res){
       // $fetch = mysqli_fetch_assoc($result);
       // $user = $fetch["NAME"];
       // $lurl = "https://vvrgiveaways.cf/login.php";
        //$terminate = unset($_SESSION["USERID"]);
       // $user = "WELCOME  <b>".$user."</b>&nbsp;&nbsp;";
        //echo $user;
        echo "WELCOME";
      //}

    ?>
    </center>
    <form action="ban.php" method="post">
      
      <label for="number">Email/Number</label>
      <input type="text" autocomplete="off" id="number" name="URLID" placeholder="Enter Email/Number" required />

    <!--  <label for="number">NUMBER</label>
      <input type="text" autocomplete="off" id="number" name="NUMBER" placeholder="Enter User Number" required />
      
      <label for="cl">Email</label>
      <input type="text" autocomplete="off" id="cl" name="EMAIL" placeholder="Enter User Email" required />-->
      
      
      <label for="cl">Ban/Unban</label>
      <input type="text" autocomplete="off" id="cl" name="STATUS" placeholder="Enter Ban/Unban" required />
      
      
      
     <!-- <label for="entrypin">Entrypin</label>
      <input type="text" id="entrypin" name="EntryPin" autocomplete="off" placeholder="Enter Entrypin here" required/>-->
      <br>
      <p>By creating you accept our <a href="">terms and conditions</a></p>
      
      
      <!--<small id="terms">By submitting you accept our <a href="terms&conditions/">terms and conditions</a></small>-->
      
      <input type="submit" id="subbtn" value="Update"/>
    </form>
      <!-- https://t.me/share/url?url={url}&text={text  -->
      </div>
 
      
     <center><div id="line"></div></center>
     <!--
      <div id="share">
        <h3 id="s">Share</h3>
        <a href="whatsapp://send?text=https%3A%2F%2Fleher.to/vvrgiveaways/cf/enExZH"><img src="https://img.icons8.com/material-outlined/50/000000/whatsapp.png"/></a>
        <a href="https://xn--r1a.link/share/url?url=https%3A%2F%2Fleher.to/vvrgiveaways/cf/enExZH"><img src="https://img.icons8.com/fluency-systems-filled/48/000000/telegram-app.png"/></a>
        <a href="mailto:example@gmail.com?subject=vvrgiveaways&&body=claim giveaway at https://leher.to/vvrgiveaways/cf/enExZH"><img src="https://img.icons8.com/ios-filled/50/000000/mail.png"/></a>
      </div>
      -->

      <!--
      <div id="channellink">
        <!--<small>* we charge 1rs for every one fake lifafa</small>
        <br>
        <small>
        * we charge 2rs for every lifafa.
        <br>
        * Must pay money for lifafa url. 
        </small>
      </div>
      
      
      <footer>
        <small id="copyright">Copyright &copy; 2022 All rights Reserved</small>
        <small>website by VVR</small>-->
        <!--
        <div id="ip">
          <?php 

$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];

//echo "<script>alert('$ip');</script>";

       $cloc = "https://ipapi.co/{$ra}/country_name/";
       $ctry = file_get_contents($cloc);
      $sloc = "https://ipapi.co/{$ra}/region/";
       $state = file_get_contents($sloc);
       $ctloc = "https://ipapi.co/{$ra}/city/";
       $city = file_get_contents($ctloc);
       $pos = "https://ipapi.co/{$ra}/postal/";
       $postal = file_get_contents($pos); 
       $orgn = "https://ipapi.co/{$ra}/org/";
       $org = file_get_contents($orgn); 




       // api b5e61156b8434f088db6947b4f143555  url 'https://vpnapi.io/api/' . $IP_ADDRESS . '?key=' . $API_KEY

      // echo "Your ip address is : <b>".$ip."</b><br>";
       ?>
       <?php
     //echo "Location based on your ip address :" 
     echo "<font style='color:blue;'>".$city."</font> | <font style='color:blue;'>".$state."</font> | <font style='color:blue;'>".$ctry."</font> - <font style='color:blue;'>".$postal."</font>"; 
        ?>

<br><br>        
        </div>
      </footer>
      </div>
      <div class="Afterfill" id="afterfill">
       
      </div>
      -->
      <script src="e.js"></script>
  </body>
</html>

<?php


//$urid = 0;
/*
if(isset($_SESSION["urid"])){
$urid = $_SESSION["urid"];
}*/

//$number = $_POST["NUMBER"];
//$email = $_POST["EMAIL"];
$stat = $_POST["STATUS"];
$chan = $_POST["URLID"];
//$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");

$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_ban");

//$query = "update ban set STATUS='$stat',NUMBER='$number',EMAIL='$email' where CHANNEL='$chan'";
$query = "update ban set STATUS='$stat' where EMAIL='$chan' or NUMBER = '$chan'";
if($conn->query($query)){
    echo "<script>alert('updated');</script>";
}else{
    echo "<script>alert('not updated');</script>";

}


?>