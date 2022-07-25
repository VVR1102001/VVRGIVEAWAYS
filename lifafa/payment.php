<!DOCTYPE html>
<html>
<head>
<title>PAYMENT PAGE</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
<link rel="stylesheet" href="lkg.css"/>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    font-family:Poppins;
}
</style>
</head>
<body style="background-image:url(https://vvrgiveaways.cf/lifafa/assets/svg/2.svg);background-repeat:no-repeat;">
<center>
<div id="main">
<div id="ifr">
<?php
error_reporting(0);
session_start();
$number = $_POST["NUMBER"];
$acesscode = $_POST["ACCESSCODE"];

$urlid = 0;



if(isset($_SESSION["urlid"])){
    $urlid = $_SESSION["urlid"];


      //$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");
      $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");
      
      $sql = "select * from register where URLID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $urli = $fetch["URLID"];

        
      }
    //echo $cname;
    $mid = $fetch["MID"];
    $am = $fetch["AM"];
    $mkey = $fetch["MKEY"];
    $guid = $fetch["GUID"];
    $ac = $fetch["AC"];
    $paymentcomment = $fetch["PAYMENTCOMMENT"];


if($number!=" "||$number!=null&&$acesscode!=" "||$acesscode!=null){
    if($ac==$acesscode){
   // header("location: https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$number&amount=$am&info=$paymentcomment");
    $_SESSION["uid"] = $urlid;
    $_SESSION["NUMBER"] = $number;
    $_SESSION["AC"] = $acesscode;
    
    //echo $number;
    header("location: transaction.php");
    /*echo $mid;
    echo $mkey;
    echo $guid;
    echo $am;
    echo $acesscode;
    echo $urlid;
    echo $paymentcomment;*/
    }else{
        //echo "<div style='background-color:#fbbcbc;'><h3 style='color:#ff8585;'>INVALID ACCESSCODE!</h3></div>";
        echo "<br>";
        echo "<script>var audio = new Audio('https://vvrgiveaways.cf/lifafa/assets/ia.mp3'); 
audio.play();
</script>";

echo "&nbsp;"."<center>
<h1 style='color:red;font-family:Poppins;font-size:1.6rem;'>WRONG ACCESSCODE!<br></h1>
</center>";
header("refresh:0.5;url=https://vvrgiveaways.cf/lifafa/lifafa.php?id=$urlid");
/*
$_SESSION["ACSTATUS"]="Invalid Accesscode";
header("location:transaction.php");*/
    }
}else{
   // echo "<div style='background-color:#fbbcbc;'><h3 style='color:#ff8585;'>PAYMENT FAILED!</h3></div>";
    echo "<br>";
        echo "&nbsp;"."<center>
<h1 style='color:#ff8585;background-color:#fbbcbc;font-family:Poppins;font-size:1.6rem;'>PAYMENT FAILED!</h1>
</center>";
}
}
/*
}
else{
    header("location : https://studentio.ezyro.com/e.html");
}*/
?>

</div>
<center>
</div>
</center>
</body>
</html>


