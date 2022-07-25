<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - official website</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Special giveaway by vvr."/>
    <meta name="keywords" content="free giveaway,campaign,holifestivalgiveaway,holi 2022,holi giveaway,holi special giveaway"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="../assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="../assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="../stylesheets/bb.css"/>
    
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="canonical" href="https://www.vvrgiveaways.ml/" />
<link rel="canonical" href="https://vvrgiveaways.ml/" />
<link rel='shortlink' href="www.vvrgiveaways.ml" />
<link rel="canonical" href="https://vvrgiveaways.ml" />
<link rel="canonical" href="https://www.vvrgiveaways.ml" />
    <script src="../javascripts/b1.js"></script>
  </head>
  <body onload="findUrl()">
    <div class="main" id="main">
      <div id="bdy">
    <h2>welcome to vvrgiveaways</h2>
    <form action="entry.php" method="post">
      <label for="name">Name</label>
      <input type="text" autocomplete="off" id="name" name="Name" placeholder="Enter Your Name" required/>
      <label for="number">Mobile</label>
      <input type="tel" autocomplete="off" id="number" name="Number" placeholder="Enter Your Paytm Number" required />
      <label for="telname">Telegram Name</label>
      <input type="text" autocomplete="off" id="telname" name="TelegramName" placeholder="Enter Your name as in telegram" required/>
     <!-- <label for="entrypin">Entrypin</label>
      <input type="text" id="entrypin" name="EntryPin" autocomplete="off" placeholder="Enter Entrypin here" required/>-->
      
      
      
      <small id="terms">By submitting you accept our <a href="terms&conditions/">terms and conditions</a></small>
      
      <input type="submit" id="subbtn" value="Submit"/>
    </form>
      <!-- https://t.me/share/url?url={url}&text={text  -->
      </div>
 
      
     <center><div id="line"></div></center>
      <div id="share">
        <h3 id="s">Share</h3>
        <a href="whatsapp://send?text=https%3A%2F%2Fleher.to/vvrgiveaways/cf/grcjJq"><img src="https://img.icons8.com/material-outlined/50/000000/whatsapp.png"/></a>
        <a href="https://xn--r1a.link/share/url?url=https%3A%2F%2Fleher.to/vvrgiveaways/cf/grcjJq"><img src="https://img.icons8.com/fluency-systems-filled/48/000000/telegram-app.png"/></a>
        <a href="mailto:vvrgiveaways@gmail.com?subject=vvrgiveaways&&body=claim giveaway at https://leher.to/vvrgiveaways/cf/grcjJq"><img src="https://img.icons8.com/ios-filled/50/000000/mail.png"/></a>
      </div>
      <div id="channellink">
        <a href="https://telegram.dog/vvrgiveaways">JOIN CHANNEL</a>
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
</p>
        </div>
      </footer>
      </div>
      <div class="Afterfill" id="afterfill">
       
      </div>
      <script src="../javascripts/c.js"></script>
  </body>
</html>