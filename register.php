<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - account register</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Verified Loots for earning paytm cash instantly without investing even single rupee"/>
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

<script>
function otp(){
    var ot = document.getElementById("otp");
    var o = Math.floor(Math.random()*(999999-100000)+100000);
    ot.value=o;
}
</script>
  </head>
  <body style="background-image:url(https://vvrgiveaways.cf/assets/svg/5.svg);background-repeat:no-repeat;" onload="otp()">
    <div class="main" id="main">
    
      <div id="bdy">

      <?php 
    session_start();
    error_reporting(0);
if(isset($_SESSION["ESTATUS"])){
    echo $_SESSION["ESTATUS"];
    unset($_SESSION["ESTATUS"]);
}

if(isset($_SESSION["VSTATUS"])){
    echo $_SESSION["VSTATUS"];
    unset($_SESSION["VSTATUS"]);
}

if(isset($_SESSION["STAT"])){
    echo $_SESSION["STAT"];
    unset($_SESSION["STAT"]);
}
?>
<br>
<form id="form" action="verify.php" method="post">

<label for="NAME">Name</label>
<input type="text" maxlength="40" autocomplete="off" id="txt" name="NAME" placeholder="Enter Your Name" required/>
<label for="EMAIL">Email</label>
<input type="text" maxlength="37" autocomplete="off" id="txt" name="EMAIL" placeholder="Enter Email ID" required/>
<label for="MOBILE">Mobile</label>
<input type="number" maxlength="10" autocomplete="off" id="txt" name="NUMBER" placeholder="Enter Your Number" required/>
<label for="PASSWORD">Password</label>
<input type="text" maxlength="8" autocomplete="off" id="txt" name="PASSWORD" placeholder="Set Password" required/>
<small>By creating account you will be agreed to our <a href="t&c.php">t&c</a></small>
<?php echo "<br><input type='text' id='otp' readonly name='OTP' style='opacity:0%;'/>";?>
<input type="submit" id="subbtn" value="Register"/>
<small> already have an account ? <a id="subbtns" href="https://vvrgiveaways.cf/login.php">Login</a> Now</small>
</form>

    </div>
    </div>

  </body>
</html>