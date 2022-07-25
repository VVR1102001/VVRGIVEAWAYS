<?php
session_start();
error_reporting(0);
$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];

if(isset($_SESSION["LIFID"])){
$lifid = $_SESSION["LIFID"];
//unset($lifid);
}

 $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_uv");
 $sql = "delete from uv where IP='$ip'";
 if(mysqli_query($conn,$sql)){
     mysqli_query($conn,"alter table uv auto_increment=1");

     $cconn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");
 $csql = "select * from register where URLID='$lifid'";
 $cres = mysqli_query($cconn,$csql);
 if(mysqli_num_rows($cres)>0){
     $fetch = mysqli_fetch_assoc($cres);
     $cl = $fetch["CL"];
     header("location:$cl");
 }
    // echo $lifid;
     //header("location:https://telegram.dog/vvrgiveaways");
     
  

 }
?>