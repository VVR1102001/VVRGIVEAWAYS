<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <title>vvrgiveaways - account login</title>
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
  </head>
  <body style="background-image:url(https://vvrgiveaways.cf/assets/svg/5.svg);background-repeat:no-repeat;" onload="otp()">
    <div class="main" id="main">
      <div id="bdy">
      <?php 
      session_start();
if(isset($_SESSION["RSTATUS"])){
    echo $_SESSION["RSTATUS"];
    unset($_SESSION["RSTATUS"]);
}
?>
    <?php 

error_reporting(0);

$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");

if(isset($_POST["LEMAIL"])){

$lemail = $_POST["LEMAIL"];
$lpass = $_POST["LPASSWORD"];

if($lemail!=null||$lemail!=" "&&$lpass!=null||$lepass!=" "){
$se = "select * from register where EMAIL='$lemail'or MOBILE='$lemail' and PASSWORD='$lpass'";

$res = mysqli_query($conn,$se);

if(mysqli_num_rows($res)==0){
    $_SESSION["STAT"]="NO DETAILS FOUND REGSITER FIRST";
    header("location:register.php");
}else{
    $bconn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_ban");
$bsql = "select * from ban where EMAIL='$lemail' or NUMBER = '$lemail'";
$bres = mysqli_query($bconn,$bsql);
//$bstatus = 0;
    $bfetch = mysqli_fetch_assoc($bres);
    $bemail = $bfetch["EMAIL"];
    $bstatus = $bfetch["STATUS"];
    if($bstatus=="Ban"){
        header("location:banned.php");
    }else{

   $fetch = mysqli_fetch_assoc($res);
   $userid = $fetch["USERID"];
   $_SESSION["USERID"] = $userid;
  header("location:https://vvrgiveaways.cf/dashboard.php");
    }

}
}else{
    header("location:login.php");
}
}else{
    echo " ";
}
?>
<br>
<form id="form" action="login.php" method="post">
<label for="EMAIL">Email or Mobile</label>
<input type="text" maxlength="37" autocomplete="off" id="txt" name="LEMAIL" placeholder="Enter Email or Mobile" required/>
<label for="PASSWORD">Password</label>
<input type="text" maxlength="8" autocomplete="off" id="txt" name="LPASSWORD" placeholder="Enter Password" required/>
<input type="submit" id="subbtn" value="Login"/>

<small> No account ? <a id="subbtns" href="https://vvrgiveaways.cf/register.php">Register</a> Now</small>
</form>



    </div>
    </div>

  </body>
</html>