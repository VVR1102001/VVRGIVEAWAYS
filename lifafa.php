<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - <?php 
    $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_camp");

      //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
      $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $urlid = $urlids['id'];

      /*if($urlid==null||$urlid==" "){

          echo "your lifafa name appears here";
      }else{*/
      $sql = "select * from camp where URLID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["urlid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $cname = $fetch["CN"];
        
        if($cname==null||$cname==" "){
          $cname = "your lifafa name appears here";
        }

        
      }
    echo $cname; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Lifafas for earning paytm cash instantly without investing single rupee"/>
    <meta name="keywords" content="free campaigns,Earn paytm cash for free"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="lifafa/lkg.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.cf/" />
<link rel="canonical" href="https://vvrgiveaways.cf/" />
<link rel='shortlink' href="www.vvrgiveaways.cf" />
<link rel="canonical" href="https://vvrgiveaways.cf" />
<link rel="canonical" href="https://www.vvrgiveaways.cf" />
    <script src="b1.js"></script>
  </head>
  <body onload="findUrl()">
    <div class="main" id="main">
      <div id="bdy">
    <h2>
      <?php
      session_start();
      error_reporting(0);
      $cname = "SAMPLE LIFAFA NAME";
      $rurl = "1";
      $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_camp");

      //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
      $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $urlid = $urlids['id'];

      if($urlid==null||$urlid==" "){

          echo "ACCESS DENIED";

          echo "<br><br><small><b>YOU HAVE NOT CREATED LIFAFA YET.</b></small><br><br>TO CREATE CLICK <a href='/giveaways/createl.php'>create lifafa</a>";
      }else{
      
      $sql = "select * from camp where URLID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["urlid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $cname = $fetch["CN"];
        $rurl = $fetch["RURL"];


        
      }
    echo $cname;

    header("refresh:5;url=$rurl");


    $paid = $fetch["STATUS"];
?>   
     <!--
      <div id="share">
        <h3 id="s">Share</h3>
        <a href="whatsapp://send?text=https%3A%2F%2Fleher.to/vvrgiveaways/cf/enExZH"><img src="https://img.icons8.com/material-outlined/50/000000/whatsapp.png"/></a>
        <a href="https://xn--r1a.link/share/url?url=https%3A%2F%2Fleher.to/vvrgiveaways/cf/enExZH"><img src="https://img.icons8.com/fluency-systems-filled/48/000000/telegram-app.png"/></a>
        <a href="mailto:example@gmail.com?subject=vvrgiveaways&&body=claim giveaway at https://leher.to/vvrgiveaways/cf/enExZH"><img src="https://img.icons8.com/ios-filled/50/000000/mail.png"/></a>
      </div>
      -->
      <div id="channellink">
      <p id="dis">WAIT YOU WILL BE REDIRECTED TO PARTNER WEBSITE</p>
      <br><br>
      <?php
        echo "<br><br><small><b>YOU HAVE NOT CREATED LIFAFA LINK YET.</b></small><br><br>TO CREATE CLICK <a href='giveaways/createl.php'>Lifafa Link</a>";

          echo "<br><br><small><b>JOIN CHANNEL FOR MORE UPDATES</b></small><br><br><a href='https://telegram.dog/vvrgiveaways'>Join Channel</a>";
      }
/*
      if(isset($_SESSION["ACSTATUS"])){
          echo "<script>alert(".$_SESSION["ACSTATUS"].");</script>";
          //unset($_SESSION["ACSTATUS"]);
      }*/
        ?>
      </div>
      <footer>
        <small id="copyright">Copyright &copy; 2022 All rights Reserved</small>
        <small>website by VVR</small>
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
      
      <script src="javascripts/e.js"></script>-->
  </body>
</html>