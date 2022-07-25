<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - URL Redirect Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Special giveaway by vvr."/>
    <meta name="keywords" content="free giveaway,campaign,holifestivalgiveaway,holi 2022,holi giveaway,holi special giveaway"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="https://vvrgiveaways.cf/lifafa/lkg.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.cf/" />
<link rel="canonical" href="https://vvrgiveaways.cf/" />
<link rel='shortlink' href="www.vvrgiveaways.cf" />
<link rel="canonical" href="https://vvrgiveaways.cf" />
<link rel="canonical" href="https://www.vvrgiveaways.cf" />
<script src="b1.js"></script>
  </head>
  <body>
      <?php
$rurl = $_POST["URL"];
$cn = $_POST["CN"];
$cl = "https://telegram.dog/".$cn;
date_default_timezone_set("Asia/Kolkata");
$date= date("d-m-Y");
$time = date("h:i:s a");
$status = "active";
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_camp");


//$sql = "select * from LIFAFA where URLID = '$urlid'";



$urlid = rand(1000000,9999999);
//$url = "https://www.vvrlifafa.cf/lifafa/lifafa.php?id=";
$url="https://vvrgiveaways.cf/lifafa.php?id=";
$newurl = $url.$urlid;


$insert = "insert into camp values(NULL,'$urlid','$newurl','$cn','$rurl','$time','$date','$status')";

//echo $newurl;

if(mysqli_query($conn,$insert)){
    echo "<br><br><h3 id='display'>".$newurl."</h3>";
    echo "<br><small><pre>copy link by long pressing on above link</pre></small>";
  /*  echo "<center>
<input readonly type='url' id='urli' style='outline:none;padding-left:3px;'/>
<button id='copybtn'>copy</button>";
    echo "<script>var copybtn = document.getElementById('copybtn');

copybtn.onclick= function (){
    var inp = document.getElementById('urli');
    inp.value=".$newurl.";
    copybtn.innerText='Copied';
    inp.select();
    document.execCommand('copy');
}</script>";*/
}else{

    echo "something went wrong";
}
?>
<!--

<center>
<input readonly type="text" id="urli" style="outline:none;padding-left:3px;" value="dfsf"/>
<button id="copybtn">copy</button>
<script>
//var url = new URL(window.location.href);
/*
var url = new URL("https://vvr.com/lifafa/lifafa.php?id=155464646");
var inp = document.getElementById("urli");
inp.value=document.getElementById("display").value;
var urlparams = new URLSearchParams(url.search);
var un = urlparams.get("id");

if(un==" "||un==null){
    window.location.href="https://vvrlifafa.ml/lifafa/error.php";
}else{
    var test="success";

}*/
var copybtn = document.getElementById('copybtn');

copybtn.onclick= function (){
    var inp = document.getElementById('urli');
    copybtn.innerText='Copied';
    inp.select();
    document.execCommand('copy');
}
</script>
</center>
-->
<?php
/*
$url = "https://vvr.com/lifafa/lifafa.php?id=155464646";
$ur = "http://".$_SERVER["HTTP_HOST"];
//$url = $ur.$_SERVER["REQUEST_URI"];
//echo $url;
$url_query= parse_url($url); 
parse_str($url_query['query'], $urlid);  
//echo $urlid['id'];
*/
?>


<?php
/*
YOUR URL
    </h2>
    <div id="fo">
      
      <label for="fu">Your Fake lifafa URL</label>
      <input readonly type="url" autocomplete="off" id="fu" name="FU" value="" />
      
      
      <input type="submit" id="subbtn" value="copy"/>
</div>
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
      --
      <div id="channellink">
        <small>we charge 1rs for every fake lifafa making
because we also send a fake mail to the user that has recieved money.
</small>
      </div>
      -->
      
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
      -->
      <script src="a.js"></script>
  </body>
</html>*/
?>
