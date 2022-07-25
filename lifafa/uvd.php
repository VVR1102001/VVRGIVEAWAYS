<?php
session_start();
error_reporting(0);
$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];


 $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_uv");
 //$sql = "delete from uv where IP='$ip'";
 $sql = "delete from uv";
 if(mysqli_query($conn,$sql)){
     mysqli_query($conn,"alter table uv auto_increment=1");
     echo "deleted";
    header("location:https://telegram.dog/vvrgiveaways");
     
  

 }
?>