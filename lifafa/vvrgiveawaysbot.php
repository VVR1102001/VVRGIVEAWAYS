
<?php
session_start();
error_reporting(0);

$ur = "http://".$_SERVER["HTTP_HOST"];
      $url = $ur.$_SERVER["REQUEST_URI"];
     // echo $url;
      $url_query= parse_url($url); 
      parse_str($url_query['query'], $urlids);  
      $fn = $urlids['fn'];
      $uid = $urlids['uid'];
      $cl = $urlids['cl'];
      //$tokenid = $urlids['tokenid'];

      $ip = 0;
      $tid = 0;
      $cvl = 0;
//if(isset($_SESSION["TID"])){
    $tid = $_SESSION["TID"];
    $cvl = $_SESSION["CVL"];
//}else{

$ipb = "0";
foreach(array('HTTP_X_FORWARDED_FOR') as $key){
    $ipb =  $_SERVER[$key];
}

$ip = strstr($ipb,',',true);

$ra = $_SERVER['REMOTE_ADDR'];

      if($fn!=null&&$fn!=" "){

          //echo $ip;
         $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_uv");
          $ret = mysqli_query($conn,"select * from uv where IP='$ip'");

          if(mysqli_num_rows($ret)>0){
               $conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_uv");
               $status = "verified";
         if( mysqli_query($conn,"update uv set FIRSTNAME = '$fn',UID = '$uid',STATUS='$status' where IP = '$ip' and TID='$tid'")){
              $_SESSION["FN"] = $fn;
          $_SESSION["UID"] = $uid;

         // echo $fn;
        // echo $tid;
         $sql = "select * from uv where IP = '$ip' and CL='$cl' and TID = '$tid'";
         $res = mysqli_query($conn,$sql);
         $fetch = mysqli_fetch_assoc($res);
         $lid = $fetch["LIFID"]; 
         //echo $lid;
         $_SESSION["LTID"]=$tid;
        header("location:https://vvrgiveaways.cf/lifafa/?id=$lid");
         }else{
             //echo "UPDATE F";
            // echo $ip;
              header("location:https://t.me/vvrgiveawaysbot?start=$cvl");
         }
          }else{
              header("location:https://vvrgiveaways.cf/lifafa/access.php");
          }
      }else{
         header("location:https://t.me/vvrgiveawaysbot?start=$cvl");
          //echo "FN F";
          //echo $ip;
         //echo $tid;
      }

//}
?>