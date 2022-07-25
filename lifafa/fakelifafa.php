<?php
session_start();
error_reporting(0);

    $urlid = 0;
$user = 0;
if(isset($_SESSION["USERID"])){
    $urlid = $_SESSION["USERID"];
}else{
    unset($_SESSION["USERID"]);
    header("location:../login.php");
}

?>

<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - lifafa maker site</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Special giveaway by vvr."/>
    <meta name="keywords" content="vvrgiveaways,lifafa,lifafa maker,lifafa maker panel,fake lifafa,earningarea,vvrlifafa"/>
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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4290394972157554"
     crossorigin="anonymous"></script>
<style>
#mb::-webkit-scrollbar{
    width:0%;
}
#mb{
    background-image:url(https://vvrgiveaways.cf/lifafa/assets/svg/2.svg);
    background-repeat:no-repeat;
}
</style>
  </head>
  <body onload="findUrl()" id="mb">
    <div class="main" id="main">
      <div id="bdy">
    <h2>
     VVR LIFAFA MAKER PANEL
    </h2>
    <pre><small>Currently use job2all account or full2sms account for mid,mkey,subguid</small></pre>
    <form action="registerf.php" method="post">
      
      <label for="number">Channel Name</label>
      <input type="text" autocomplete="off" id="number" name="CN" placeholder="Enter Your Channel Name" required />
      
      <label for="cl">Channel Link</label>
      <input type="text" autocomplete="off" id="cl" name="CL" placeholder="Enter Your Channel Username without @" required />
      
      <label for="am">Amount per user</label>
      <input type="text" autocomplete="off" id="am" name="AM" placeholder="Per user amount" required />

      <label for="pu">Total Users</label>
      <input type="text" autocomplete="off" id="pu" name="PU" placeholder="Total Users Count" required />
      
      <label for="telname">Accesscode</label>
      <input type="text" autocomplete="off" id="telname" name="AC" placeholder="Enter Accesscode" required />

     <!-- <label for="fakerestrict">Temporaray ID</label>
      <input type="number" autocomplete="off" id="tempid" name="TEMPID" placeholder="Enter Temporary id from taken admin" required/>

      <label for="telname">MID</label>
      <input type="text" autocomplete="off" id="telname" name="MID" placeholder="Enter mid" required/>
      
      <label for="telname">MKEY</label>
      <input type="text" autocomplete="off" id="telname" name="MKEY" placeholder="Enter mkey" required/>
      
      <label for="telname">SUBGUID</label>
      <input type="text" autocomplete="off" id="telname" name="GUID" placeholder="Enter subguid" required/>
      
      <label for="PC">PAYMENT COMMENT</label>
      <input type="text" autocomplete="off" id="PC" name="PAYMENTCOMMENT" placeholder="Enter payment comment" required/>
      
      
      
     <label for="entrypin">Entrypin</label>
      <input type="text" id="entrypin" name="EntryPin" autocomplete="off" placeholder="Enter Entrypin here" required/>-->
      <br>
      <p>By creating you accept our <a href="t&c.php">terms and conditions</a></p>
      
      
      <!--<small id="terms">By submitting you accept our <a href="terms&conditions/">terms and conditions</a></small>-->
      
      <input type="submit" id="subbtn" value="create"/>
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
      <div id="channellink">
        <!--<small>* we charge 1rs for every one fake lifafa</small>-->
        <br>
        <small>
        * we charge 2rs for every lifafa.
        <br>
        * Must pay money for lifafa url. 
        </small>
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
      -->
      <script src="e.js"></script>
  </body>
</html>