<!DOCTYPE html>
<html lang="en-IN">
  <head>
   <title>vvrgiveaways - <?php 
   session_start();
   $cname = "Campaign";
    
    $conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");



     


      //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
    $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $referid = $urlids['referby'];

      $urlid = 0;
if(isset($_SESSION["USERID"])){
    $urlid = $_SESSION["USERID"];
}
if(isset($_SESSION["REFERID"])){
    $referid = $_SESSION["REFERID"];
}

/*
date_default_timezone_set("Asia/Kolkata");
    $sdate = date("d/m/Y");
    $stime = date("h:i:s a");
    $waste = 1;
    $li = "insert into LOGINSESSIONS values (NULL,'$urlid','$sdate','IN')";
    if(mysqli_query($conn,$li)){
        $waste = 0;
    }*/
      $sql = "select * from register where USERID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["userid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $cname = "Campaigns";
        
        if($cname==null||$cname==" "){
          $cname = "Campaign";
        }

        
      }
    echo $cname; ?></title>
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




    <!--
    <div id="optional">
<center>
<form action="register.php" method="post">
<h3><label for="offers">Select Campaign Offer</label></h3><br>
<select id="offers" name="offers" onclick="document.getElementById('txto').value=document.getElementById('offers').value;">
<option>offers</option>
<option value="https://cashpower.in/Affliate/c?o=97&a=9951">Stockal CPR</option>
<option value="https://cashpower.in/Affliate/c?o=484619&a=9951">RummyTime New</option>
<option value="https://cashpower.in/Affliate/c?o=46553&a=9951">Gamerji CPR</option>
</select><br>
<input type="txt" autocomplete="off" id="txto" name="OFFERURL" readonly style="opacity:0%;"/>
<h3><label for="txt">Enter Your Paytm Number</label></h3>
<input type="number" autocomplete="off" id="txt" name="OFFERNUMBER" placeholder="Enter Your Paytm Number" required/>
<input type="submit" value="Start" id="subbtn"/>
</form>
</div>
-->
<!--

<form method="post">
<h3><label for="txt">Enter Your Paytm Number</label></h3><br>
<input type="number" autocomplete="off" id="txt" name="CNUMBER" placeholder="Enter Your Paytm Number" required/>
<input type="submit" value="claim" id="subbtn" name="claim" />
</form>-->



     </center>

<br><br><br>
<?php 
/*
$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];

//echo "<script>alert('$ip');</script>";

       $cloc = "https://ipapi.co/{$ip}/country_name/";
       $ctry = file_get_contents($cloc);
      $sloc = "https://ipapi.co/{$ip}/region/";
       $state = file_get_contents($sloc);
       $ctloc = "https://ipapi.co/{$ip}/city/";
       $city = file_get_contents($ctloc);
       $pos = "https://ipapi.co/{$ip}/postal/";
       $postal = file_get_contents($pos); 
       $orgn = "https://ipapi.co/{$ip}/org/";
       $org = file_get_contents($orgn); 




       // api b5e61156b8434f088db6947b4f143555  url 'https://vpnapi.io/api/' . $IP_ADDRESS . '?key=' . $API_KEY

      // echo "Your ip address is : <b>".$ip."</b><br>";
       ?>
       <?php
     //echo "Your Current Live Location : <font style='color:blue;'>".$city."</font> | <font style='color:blue;'>".$state."</font> | <font style='color:blue;'>".$ctry."</font> - <font style='color:blue;'>".$postal."</font>"; 
     */
        ?>        
</p>
</center>

 <?php

//d
if($_POST) {
            claim();
        }
        function claim() {

            $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $referid = $urlids['referby'];

$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_campaigns");

$eee = "select * from rae where REFERID='$referid'";


           $cnum = $_POST["CNUMBER"];
if(mysqli_query($conn,$eee)){
           
$fetchh = mysqli_fetch_assoc(mysqli_query($conn,$eee));

$rnum = $fetchh["RNUM"];
$templink = $fetchh["TEMPLINK"];
$camplink = 0;
           if(mysqli_query($conn,"update rae set CNUM='$cnum' where REFERID = '$referid'")){
               $camplink = $templink."&aff_click_id=$cnum&sub_aff_id=$rnum";

               if(mysqli_query($conn,"update rae set CAMPLINK='$camplink' where REFERID = '$referid'")){
                   header("location:$camplink");

                  // echo $camplink;
               }
           }
}
        }


        if($referid!=null&&$referid!=" "){


            echo "<script>document.getElementById('fort').style.background-color='red';</script>";
}else{
    header("location:camps.php");
}



    ?>



    
    <div id="fort">
   <form method="post">
   <!--
        <input type="submit" id="subbtn" name="button1"
                class="button" value="Logout"  style="width:85px;" />-->

                <h3><label for="txt">Enter Your Paytm Number</label></h3><br>
<input type="number" autocomplete="off" id="txt" name="CNUMBER" placeholder="Enter Your Paytm Number" required/>
<input type="submit" value="claim" id="subbtn" name="claim" />
    </form>
    </div>

  </body>
</html>