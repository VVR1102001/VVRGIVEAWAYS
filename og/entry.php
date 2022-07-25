<?php
session_start();
error_reporting(0);
$name = $_POST["Name"];
$number = $_POST["Number"];
$tgname = $_POST["TelegramName"];
// $entrypin = $_POST["EntryPin"];
$entrypin = "Null";
date_default_timezone_set("Asia/Kolkata");
$date = date("d/m/Y");
$time = date("h:i:s a");
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_giveaways");
$cq = "select * from giveaways where NUMBER = $number ";
$sql = "insert into giveaways values(NULL,'$name','$number','$tgname','$entrypin','$date','$time')";
$status = "notvalid";

$q1 = mysqli_query($conn,$cq);
$rows = mysql_num_rows($q1);


//if($rows<0){
if(mysqli_query($conn,$sql)){
  $status = "valid";
  //header("location: https://www.vvrgiveaways.ml/?entry=$status&username=$tgname");
  header("location: https://www.vvrgiveaways.cf/ol/?entry=$status&username=$tgname");
}
/*else{
  header("location: https://www.vvrgiveaways.ml/?alreadyclaimed=true");
}
}*/
else{
  //header("location: https://www.vvrgiveaways.ml/?exceeded=true");
  header("location: https://www.vvrgiveaways.cf/ol/?exceeded=true");
}
?>


