
<!DOCTYPE html>
<html>
  <head>
    <title>
      null values updater
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="description" content="Special giveaway by vvr."/>
    <meta name="keywords" content="free giveaway,campaign,holifestivalgiveaway,holi 2022,holi giveaway,holi special giveaway"/>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" href="../assets/giveaway.png" type="image/icon"/>
    <link rel="icon" href="../assets/logo.png" type="image/icon"/>
    <meta name="author" content="Vishnu Vardhan Reddy"/>
    <link rel="stylesheet" href="../stylesheets/bb.css"/>
    </head>
    <body>


<div class="Afterfill" id="afterfill">

<?php
session_start();
error_reporting(0);
/*
$name = $_POST["Name"];
$number = $_POST["Number"];
$tgname = $_POST["TelegramName"];
// $entrypin = $_POST["EntryPin"];
$entrypin = "Null";
date_default_timezone_set("Asia/Kolkata");
$date = date("d/m/Y");
$time = date("h:i:s a");
*/
//$conn = new mysqli("sql308.ezyro.com","ezyro_29154431","9640897011","ezyro_29154431_giveaways");
$SNO = $_POST["SNO"];
$nam = $_POST["NAME"];
$number = $_POST["NUMBER"];
$telename = $_POST["TELENAME"];


$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_giveaways");

$cq = "update giveaways set NAME='$nam',NUMBER='$number', TELEGRAMNAME='$telename' where SNO='$SNO'";
//$sql = "insert into giveaways values(NULL,'$name','$number','$tgname','$entrypin','$date','$time')";
$status = "notvalid";

if(mysqli_query($conn,$cq)){
  echo "<h3 id='sd1'>UPDATED<br>CHECK IN ENTRIES</h3>";
}
else{
  echo "<h3 id='sd2'>NOT UPDATED<br>CHECK IN CODE</h3>";
}
/*
//if($rows<0){
if(mysqli_query($conn,$sql)){
  $status = "valid";
  //header("location: https://www.vvrgiveaways.ml/?entry=$status&username=$tgname");
  header("location: https://www.vvrgiveaways.cf/?entry=$status&username=$tgname");
}
/*else{
  header("location: https://www.vvrgiveaways.ml/?alreadyclaimed=true");
}
}
else{
  //header("location: https://www.vvrgiveaways.ml/?exceeded=true");
  header("location: https://www.vvrgiveaways.cf/?exceeded=true");
}
*/
?>


</div>
</body>
</html>