<!DOCTYPE html>
<html lang="en-IN">
  <head>
   <title>vvrgiveaways - <?php 
   session_start();
   $cname = "HomePage";
    
    $conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");



     


      //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
    /*  $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $urlid = $urlids['userid'];*/

      $urlid = 0;
if(isset($_SESSION["USERID"])){
    $urlid = $_SESSION["USERID"];
}

date_default_timezone_set("Asia/Kolkata");
    $sdate = date("d/m/Y");
    $stime = date("h:i:s a");
    $waste = 1;
    $li = "insert into LOGINSESSIONS values (NULL,'$urlid','$sdate','IN')";
    if(mysqli_query($conn,$li)){
        $waste = 0;
    }
      $sql = "select * from register where USERID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["userid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $cname = "Dashboard";
        
        if($cname==null||$cname==" "){
          $cname = "HomePage";
        }

        
      }
    echo $cname; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Verified Loots for earning paytm cash instantly without investing even single rupee"/>
    <meta name="keywords" content="free giveaway,free giveaways,free campaigns,Earn paytm cash for free"/>
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
  </head>
  <body style="background-image:url(https://vvrgiveaways.cf/assets/svg/5.svg);background-repeat:no-repeat;">
    <div class="main" id="main">
      <div id="bdy">
    <h2>
    WELCOME TO VVRGIVEAWAYS OFFICIAL WEBSITE
      </h2>

<?php 
   $user = "ACCOUNT <a href='https://vvrgiveaways.cf/register.php'>Register/Login</a>";
    
    $conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");
 //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
    /*  $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $urlid = $urlids['userid'];*/

      $urlid = 0;
if(isset($_SESSION["USERID"])){
    $urlid = $_SESSION["USERID"];
}

      $sql = "select * from register where USERID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["userid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $user = $fetch["NAME"];
        $lurl = "https://vvrgiveaways.cf/login.php";
        //$terminate = unset($_SESSION["USERID"]);
        $user = "WELCOME  <b>".$user."</b>&nbsp;&nbsp;";

        
        if($cname==null||$cname==" "){
         // $user = "NULL";
         $user = "ACCOUNT <a href='https://vvrgiveaways.cf/register.php'>Register/Login</a>";
        }

        
      }
    echo "<center><br><br>$user<br><br></center>"; 
     date_default_timezone_set("Asia/Kolkata");
    $sdate = date("d/m/Y");
    $stime = date("h:i:s a");

    $conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");

    $lr = "select * from LOGINSESSIONS where USERID='$urlid'";

    $res = mysqli_query($conn,$lr);

    if(mysqli_num_rows($res)>0){

        $fetch = mysqli_fetch_assoc($res);

        $lasttime = $fetch["LOGINDATE"];

    if($sdate>$lasttime){
       if(mysqli_query($conn,"delete from LOGINSESSIONS where USERID = '$urlid'")){
        unset($_SESSION["USERID"]);
        header("location:login.php");
        }
    }
    }
    ?>


      <ol id="index"><br><br>
      <li><a href="https://vvrgiveaways.cf/giveaways/createl.php">Create Lifafa Redirect Link</a></li>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href="https://vvrgiveaways.cf/giveaways/createc.php">Create Campaign Redirect Link</a></li>
      </ol>
      <br><br><br>
      <ol id="index2"><br><br>
      <li><a href="https://vvrgiveaways.cf/lifafa/reallifafa.php">Create Real Lifafa</a></li>
      <br>
      <li><a href="https://vvrgiveaways.cf/lifafa/fakelifafa.php">Create Fake Lifafa</a></li>
      </ol>

      <br><br><br>
      <ol id="index2"><br><br>
      <li><a href="https://vvrgiveaways.cf/lifafa/refer.php">Create Refer Lifafa Link</a></li>
      <br>
      <li><a href="#">Create Screenshot Lifafa or Campaign</a></li>
      </ol>



      <br><br><br>
      <ol id="index2"><br><br>
      <li><a href="https://vvrgiveaways.cf/camps/">Campaign Offers</a></li>
      <br>
      <li><a href="https://vvrgiveaways.cf/camps/refer.php">Get Campaign Refer Link</a></li>
      </ol>

      <br><br><br>
      <ol id="index2"><br><br>
      <li><a href="https://vvrgiveaways.cf/lifafa/accesscode.php">Change Accesscode</a></li>
      <br>
      <li><a href="https://telegram.dog/VardhanPbot">help</a></li>
      </ol>

      





     

<br><br><br><br><br>

<?php 

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
     echo "Your Current Live Location : <font style='color:blue;'>".$city."</font> | <font style='color:blue;'>".$state."</font> | <font style='color:blue;'>".$ctry."</font> - <font style='color:blue;'>".$postal."</font>"; 
        ?>
<br><br>        
</p>
</center>

 <?php



        if($_POST) {
            button1();
        }
        function button1() {
           unset($_SESSION["USERID"]);
           header("location:login.php");
        }
    ?>
    <center>
   <form method="post" id="optionall">
        <input type="submit" id="subbtn" name="button1"
                class="button" value="Logout"  style="width:85px;" />
    </form>
    </center>

   <?php
    if($_SESSION["USERID"]!=null&&$_SESSION["USERID"]!=" "){
     echo "<script>document.getElementById('optionall').style.display='block';</script>";
 }else{
     echo "<script>document.getElementById('optionall').style.display='none';</script>";
 }
   ?>
  </body>
</html>