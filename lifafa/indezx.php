<!DOCTYPE html>
<html lang="en-IN">
  <head>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4290394972157554"
     crossorigin="anonymous"></script>

     

    <title>vvrgiveaways - <?php 
    //$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");
    $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");
    $pst = 0;

    

      //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
      $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $urlid = $urlids['id'];
      $urltheme = $urlids['bg'];

      /*if($urlid==null||$urlid==" "){

          echo "your lifafa name appears here";
      }else{*/

      $pq = "select STATUS from register where URLID='$urlid'";
    $pres = mysqli_query($conn,$pq);
    if(mysqli_num_rows($pres)>0){
        $pfetch = mysqli_fetch_assoc($pres);
        $pst = $pfetch["STATUS"]; 
    }

    if($pst=="paid"){

      $sql = "select * from register where URLID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["urlid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $cname = $fetch["CN"];
        
        if($cname==null||$cname==" "){
          $cname = "your lifafa name appears here";
        }

        
      }
    }else{
        $_SESSION["PAID"]=$pst;
        header("location:fees.php");
    }
    echo $cname; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimal-ui,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Make Lifafa with our Brand New Lifafa Panel|Create Campaigns for refer and earn task|No investment needed"/>
    <meta name="keywords" content="free giveaway,campaign,holifestivalgiveaway,holi 2022,holi giveaway,holi special giveaway"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="lkg.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.cf/" />
<link rel="canonical" href="https://vvrgiveaways.cf/" />
<link rel='shortlink' href="www.vvrgiveaways.cf" />
<link rel="canonical" href="https://vvrgiveaways.cf" />
<link rel="canonical" href="https://www.vvrgiveaways.cf" />
    <script src="b1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body onload="findUrl()" id="mb" style="background-image:url(https://vvrgiveaways.cf/lifafa/assets/svg/7.svg);background-repeat:no-repeat;" >

    <div class="main" id="main">
      <div id="bdy">
    <h2>
      <?php
      session_start();
      error_reporting(0);
      $cname = "SAMPLE CHANNEL NAME";
      $ocn = "OCN";
      $clink = "https://telegram.dog/vvrgiveaways";
      //$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");
      $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");

      //$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
      $ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $urlid = $urlids['id'];

      if($urlid==null||$urlid==" "){

          echo "ACCESS DENIED";

          echo "<br><br><small><b>YOU HAVE NOT CREATED LIFAFA YET.</b></small><br><br>TO CREATE CLICK <a href='https://vvrgiveaways.cf'>create account to create lifafa</a>";
      }else{
      
      $sql = "select * from register where URLID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      $_SESSION["urlid"] = $urlid;

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $cname = $fetch["CN"];
        $ocn = $fetch["OCN"];
        $clink = $fetch["CL"];

        
      }
    echo $cname;
    $totalusers = $fetch["TOTALUSERS"];
    $peruser = $fetch["AM"];
    $current = $fetch["CURRENT"];
    
    $paid = $fetch["STATUS"];

    

    /*if($paid=="not paid"){
        header("location: fees.php");
    }*/
$pus = $peruser;
    $curren = 0;
    $totaluser = 100;
      
?>
    </h2>
    <center>
    <form id="form" action="payment.php" method="post">

      <label for="number">Paytm Number</label>
      <input type="tel" autocomplete="off" id="number" name="NUMBER" placeholder="&#9742; Enter Your Paytm Number" required />
      <label for="telname">Accesscode</label>
      <input type="text" autocomplete="off" id="telname" name="ACCESSCODE" placeholder="&#128274; Enter Accesscode" required/>
     <!-- <label for="entrypin">Entrypin</label>
      <input type="text" id="entrypin" name="EntryPin" autocomplete="off" placeholder="Enter Entrypin here" required/>-->
      <br>
      <input type="text" readonly id="telname" placeholder="<?php echo 'Per User : '.$pus;?> &#8377;"/>

     <!-- <input type="submit" id="subbtn" value="continue with telegram bot" onclick="window.location.href='https://telegram.dog/vvrgiveawaysbot?start'"/>-->
      
      <!--<small id="terms">By submitting you accept our <a href="terms&conditions/">terms and conditions</a></small>-->

     
      
     <!--<center> <input type="submit" id="subbtn" name="claim" value="claim"/></center>-->
    </form>
   
    <br>
    <center>
<div id="userverification">
  <center><button id="subbtn" name="claim" onclick="Claim()">claim</button></center>
    <script>
    function Claim(){
       document.getElementById("form").submit();
    }
    </script>
    </center>
<?php
$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];

?>
<br><br>
<span id="userdetails">
<?php 
/*
if(isset($_SESSION["FN"])){
    $f = $_SESSION["FN"];
    
$fconn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_uv");

$usql = "select UID from uv where IP='$ip' ";
$ures = mysqli_query($fconn,$usql);
if(mysqli_num_rows($ures)>0){
    $ufetch = mysqli_fetch_assoc($ures);
    $uid = $ufetch["UID"];
    $fsql = "select * from uv where LIFID='$urlid' and IP = '$ip' and UID ='$uid'";
    $fres = mysqli_query($fconn,$fsql);

    $ffetch = mysqli_fetch_assoc($fres);

    $fna = $ffetch["FIRSTNAME"];

    if($fna!=null&&$fna!=" "&&$fna!="FN"){

    //echo "<b>".$f." </b>✅";
    echo "<b>".$fna." </b>✅";
    //unset($_SESSION["FN"]);
    //echo $ip;
    echo "<script>document.getElementById('subbtn').style.display='block';</script>";
}else{
   echo "<script>document.getElementById('subbtn').style.display='none';</script>";
    echo "<b>VERIFICATION NEEDED</b><br><small id='c'>
     <script>
//function Load(){
let k = 0;
let l = 0;
let tr = [1,0];
var si = setInterval(function(){
document.getElementById('c').innerHTML = 'wait'+' '+tr[l++]+' '+'seconds';
if(l == 2){
  clearInterval(si);
}
},1000);
//document.getElementById('c').innerHTML = tr[k];
//setTimeout(Load,2000);
//}
     </script>
   </small>";
    $_SESSION['IP']=$ip;
    $_SESSION["LIFAFAID"]=$urlid;
    $_SESSION["CL"]=$ocn;
    //echo $_SESSION["CL"];
    header("refresh:2;url=https://vvrgiveaways.cf/lifafa/verifybot.php");
}
}else{
    echo "<script>document.getElementById('subbtn').style.display='none';</script>";
    echo "<b>VERIFICATION NEEDED</b><br><small id='c'>
     <script>
//function Load(){
let k = 0;
let l = 0;
let tr = [1,0];
var si = setInterval(function(){
document.getElementById('c').innerHTML = 'wait'+' '+tr[l++]+' '+'seconds';
if(l == 2){
  clearInterval(si);
}
},1000);
//document.getElementById('c').innerHTML = tr[k];
//setTimeout(Load,2000);
//}
     </script>
   </small>";
    $_SESSION['IP']=$ip;
    $_SESSION["LIFAFAID"]=$urlid;
    $_SESSION["CL"]=$ocn;
    //echo $_SESSION["CL"];
    header("refresh:2;url=https://vvrgiveaways.cf/lifafa/verifybot.php");
}
*/
?>
</span>


</div>
</center>
 
    <?php
/*$quer = "select * from lifafa where URLID = '$urlid'";

    $curr = 0;
    
    if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $curr = $fetch["CURRENT"];

        
      }
      $totalusers = $fetch["TOTALUSERS"];*/

    echo "<br><center><h3 id='h3t'>Already Claimed"." ".$current." / ".$totalusers." </h3></center>";

    if($current==$totalusers){
        echo "<br>";
        echo "<script>document.getElementById('form').style.display='none';</script>";
        echo "<script>document.getElementById('h3t').style.display='none';</script>";
        echo "&nbsp;"."<center>
<h1 style='color:red;font-family:Poppins;font-size:1.6rem;'>LIFAFA OVER<br>".$current." / ".$totalusers." claimed.</h1>
</center>";

header("refresh:1;url=$cl");
    }
      
    ?>
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
      <div id="channellink">




      <?php
        //echo "<a href='$clink'>Join Channel</a>";
/*
        echo "<script async src='https://telegram.org/js/telegram-widget.js?19' data-telegram-login='vvrtestbot' data-size='medium' data-onauth=onTelegramAuth(user)' data-request-access='write'></script>
<script type='text/javascript'>
  function onTelegramAuth(user) {
    alert('Logged in as ' + user.first_name + ' ' + user.last_name + ' (' + user.id + (user.username ? ', @' + user.username : '') + ')');
  }
</script>";*/
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
   
        <div id="ip">
          <?php 

$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];

//echo "<script>alert('$ip');</script>";
/*
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



*/
       // api b5e61156b8434f088db6947b4f143555  url 'https://vpnapi.io/api/' . $IP_ADDRESS . '?key=' . $API_KEY

     // echo "Your ip address is : <b>".$ip."</b><br>";

     


       ?>
       <?php
     //echo "Location based on your ip address :" 
    // echo "<font style='color:blue;'>".$city."</font> | <font style='color:blue;'>".$state."</font> | <font style='color:blue;'>".$ctry."</font> - <font style='color:blue;'>".$postal."</font>"; 
        ?>

<br><br>        
        </div>
      </footer>
      </div>
      <div class="Afterfill" id="afterfill">
       
      </div>
     
      <script src="e.js"></script>
  </body>
</html>