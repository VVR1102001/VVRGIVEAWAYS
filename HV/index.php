<!DOCTYPE html>
<html lang="en">
<head>
<title>vvrgiveaways.cf -  Human verification</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,minimal-ui"/>
<meta name="colorscheme" content="light"/>
<meta charset="UTF-8"/>
<meta name="description" content="Human verification before entering into the website."/>
<meta name="keywords" content="captcha, verification"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script lang="javascript" type="text/javascript" src="javascript.js"></script>
</head>
<body onload="Start()">
  <section class="ver" id="ver">
  <center>
  <h1><b>Human Verification</b></h1>
  <br>
  <p>click the button three times to verify as human only after verification you will be redirected to <b>TELEGRAM CHANNEL LINK</b></p>
  <br><br>
    <input type="button" id="b" onclick="First()" value="click me for verification"/>
    <input type="button" id="bt" onclick="Second()" value="click me for verification"/>
    <input type="button" id="btn" onclick="Third()" value="click me for verification"/>
    <br><br><br>
    <b><p id="display">wait..</p></b>
   </center>
 </section>
</body>
</html>

<?php
$conn = new mysqli("sql308.ezyro.com","ezyro_29154431","9640897011","ezyro_29154431_HumanVerification");
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Kolkata");
$date = date("d/m/Y");
$time = date("h:i:s a");
//$cloc = 'http://api.hostip.info/country.php?ip=' . $cip;

$cloc = "https://ipapi.co/".$ip."/country_name/";
$ctry = file_get_contents($cloc);
$sloc = "https://ipapi.co/".$ip."/region/";
$state = file_get_contents($sloc);
$ctloc = "https://ipapi.co/".$ip."/city/";
$city = file_get_contents($ctloc);

$sql = "insert into security values(NULL,'$ip','$ctry','$state','$time','$date')";
mysqli_query($conn,$sql);
?>