<?php
session_start();
error_reporting(0);
?>

<?php
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_uv");
$lifafaid = 0;
$ip = 0;
$cl = 0;
if(isset($_SESSION["LIFAFAID"])){
    $lifafaid = $_SESSION["LIFAFAID"];
}
if(isset($_SESSION["IP"])){
    $ip = $_SESSION["IP"];
    //$cl = $_SESSION["CL"];
}
if(isset($_SESSION["CL"])){
   // $ip = $_SESSION["IP"];
    $cl = $_SESSION["CL"];
}
$status = "unverified";
$tid = rand(1000,9999);
$insert = "insert into uv values (NULL,'$ip','$lifafaid','FN','UID','$status','$cl','$tid')";
if($ip!=null&&$ip!=" "){
    if(mysqli_query($conn,$insert)){
       $_SESSION["TID"]=$tid;
       $_SESSION["IPS"]=$ip;
       $_SESSION["CVL"]=$cl;
        //unset($_SESSION["IP"]);
       // header("location:https://t.me/vvrgiveawaysbot?start=$cl");
        header("location:https://vvrgiveaways.cf/lifafa/vvrgiveawaysbot.php");
        //echo "DONE INSERT";
    }
}
?>
