<!DOCTYPE html>
<html>
<head>
<title>vvrgiveaways - Payment Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
<link rel="stylesheet" href="ed.css"/>
<link rel="icon" href="https://vvrgiveaways.cf/assets/giveaway.png"/>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    font-family:Poppins;
}
</style>
</head>
<body style="background-image:url(https://vvrgiveaways.cf/lifafa/assets/svg/7.svg);background-repeat:no-repeat;">
<center>
<div id="main">
<div id="ifr">
<?php
session_start();
error_reporting(0);

if(isset($_SESSION["uid"])){
if(isset($_SESSION["IP"])){
  unset($_SESSION["IP"]);
}

$urlid = $_SESSION["uid"];

$number = $_SESSION["NUMBER"];
$ace = $_SESSION["AC"];


      $conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");


      
      
      $sql = "select * from register where URLID = '$urlid'";
      $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)>0){
        $fetch = mysqli_fetch_assoc($result);
        $urli = $fetch["URLID"];

        
      }
    //echo $cname;

    $channellink = $fetch["CL"];

    $mid = $fetch["MID"];
    $am = $fetch["AM"];
    $mkey = $fetch["MKEY"];
    $guid = $fetch["GUID"];
    $ac = $fetch["AC"];
    $current = $fetch["CURRENT"];
    $totalusers = $fetch["TOTALUSERS"];
    $paymentcomment = $fetch["PAYMENTCOMMENT"];
    
    //header("location: https://job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$number&amount=$am&info=$paymentcomment");

   // echo "<iframe id='iframe' src=".//job2all.xyz/api/index.php?mid=$mid&mkey=$mkey&guid=$guid&mob=$number&amount=$am&info=$paymentcomment ."frameborder='0'/>";
   
   $url = "https://full2sms.in/api/v1/disburse/paytm?mid=$mid&mkey=$mkey&guid=$guid&amount=$am&mobile=$number&info=$paymentcomment";
   
   
   //$url = "https://full2sms.in/api/v1/disburse/paytm?mid=8617F856B28A873FFE58D4F7AE625NSOA8AUL&mkey=4B86C25AA7CE35A395A1561B45F5CBQO719QJAKP&guid=w7xBTwLv2hYWC5whWOGmlQPpCSnXoTjcnsiw86ol&amount=1&mobile=9346117785&info=VVRGIVEAWAYS";

//echo "<script>alert("gettype($number)");</script>";

$sql2 = "select * from lifafa where NUMBER = '$number'";

$res = mysqli_query($conn,$sql2);

if(mysqli_num_rows($res)==0){
$status = "paid";
        $sql3 = "insert into lifafa values(NULL,'$urlid','$number','$ace','$status','$am')";
        if(mysqli_query($conn,$sql3)){

        echo "<iframe style='width:400px;height:200px;opacity:0%;' frameborder='0' src=".$url.">


        </iframe>";
        
        $conne = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");


        if($totalusers>$current){

$current = $current+1;

$queryi = "update register set CURRENT='$current' where URLID='$urlid'";

mysqli_query($conne,$queryi);
                  
        echo "<br>";
        echo "&nbsp;"."<center>
<h1 style='color:mediumspringgreen;font-family:Poppins;font-size:1.6rem;'>LIFAFA CLAIMED SUCCESSFULLY 🥳!<br>".$current.' / '.$totalusers.' claimed'."</h1>
</center>";
echo "<script>var audio = new Audio('https://vvrgiveaways.cf/lifafa/assets/claimed.mp3'); 
audio.play();
</script>;";
        }else{
            echo "<br>";
        echo "&nbsp;"."<center>
<h1 style='color:red;font-family:Poppins;font-size:1.6rem;'>LIFAFA OVER<br>".$current." / ".$totalusers." claimed</h1>
</center>";
        }

header("refresh:3;url=https://telegram.dog/vvrgiveaways");
        }
}else{

    $fetch = mysqli_fetch_assoc($res);

    $num = $fetch["NUMBER"];

    if($num==$number){
        if($number=="9346117785"||$number=="8374618470"||$number=="9392476668"){

             echo "<iframe style='width:400px;height:200px;opacity:0%;' frameborder='0' src=".$url.">


        </iframe>";

$conne = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");

 if($totalusers>$current){

$current = $current+1;

$queryi = "update register set CURRENT='$current' where URLID='$urlid'";

mysqli_query($conne,$queryi);
                  
        echo "<br>";
        echo "&nbsp;"."<center>
<h1 style='color:mediumspringgreen;font-family:Poppins;font-size:1.6rem;'>LIFAFA CLAIMED SUCCESSFULLY 🥳!<br>".$current.' / '.$totalusers.' claimed'."</h1>
</center>";
echo "<script>var audio = new Audio('https://vvrgiveaways.cf/lifafa/assets/claimed.mp3'); 
audio.play();
</script>";
        }else{
            echo "<br>";
        echo "&nbsp;"."<center>
<h1 style='color:red;font-family:Poppins;font-size:1.6rem;'>LIFAFA OVER<br>".$current." / ".$totalusers." claimed</h1>
</center>";
        }

header("refresh:3;url=https://telegram.dog/vvrgiveaways");
       
        }else{
echo "<br><br><br><br><br><br><br><br><br>";
       echo "&nbsp;"."<center>
<h1 style='color:red;font-family:Poppins;font-size:1.6rem;'>YOU HAVE ALREADY CLAIMED!</h1>
</center>";

header("refresh:3;url=https://telegram.dog/vvrgiveaways");

        }
             
   }
         }

}




?>
</div>
<center>
</div>
</center>
</body>
</html>