<!DOCTYPE html>
<html lang="en-IN">
<head>
<title>vvrgiveaways - account verification</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="description" content="Verified Loots for earning paytm cash instantly without investing even single rupee" />
<meta name="keywords" content="free campaigns,Earn paytm cash for free" />
<meta charset="UTF-8" />
<link rel="apple-touch-icon" href="assets/giveaway.png" type="image/icon" />
<link rel="icon" href="assets/logo.png" type="image/icon" />
<meta name="author" content="Vishnu Vardhan Reddy" />
<link rel="stylesheet" href="lifafa/lkg.css" />
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
<?php 
session_start();
error_reporting(0);

$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");

$name = $_POST["NAME"];
$email = $_POST["EMAIL"];
$mobile = $_POST["NUMBER"];
$password = $_POST["PASSWORD"];
$otp = $_POST["OTP"];

$userid = rand(100000,999999);

date_default_timezone_set("Asia/Kolkata");
$date = date("d/m/Y");
$time = date("h:i:s a");

$status="verified";

if($name!=null||$name!=" "&&$email!=null||$email!=" "&&$mobile!=" "||$mobile!=null&&$password!=null||$password!=" "){
$insert = "insert into register values(NULL,'$userid','$name','$email','$mobile','$password','$date','$time','$otp','$status')";
if(mysqli_query($conn,$insert)){
    $bconn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_ban");

date_default_timezone_set("Asia/Kolkata");
$bdatetime = date("d/m/Y  h:i:s a");

$bsql = "insert into ban values(NULL,'$userid','$mobile','$email','$bdatetime','CHANNEL','Unban')";
      mysqli_query($bconn,$bsql);

    $session["RSTATUS"] = "REGISTERED SUCCESSFULLY TRY LOGIN";
    header("location:login.php");
}else{
    $session["ESTATUS"] = "REGISTER FAILED";
    header("location:register.php");
}
}else{
    $session["VSTATUS"] = "NO NULL INPUTS";
    header("location:register.php");
}

?>

<!--<label for="NAME">VERIFICATION</label>
<input type="text" maxlength="6" autocomplete="off" id="txt" name="OTP" placeholder="Enter OTP" required />
<button id="subbtn" onclick="verify()">VERIFY</button>-->
</div>
</div>
</body>
</html>