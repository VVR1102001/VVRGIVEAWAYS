<!DOCTYPE html>
<html>
  <head>
    <title>vvrgiveaways - winner declaration website</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta charset="UTF-8"/>
    </head>
    <body>

<?php
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_giveaways");
$sql = "select * from giveaways";
$start = $_POST["START"];
$end = $_POST["END"];
$rand = rand($start,$end);
if($conn){
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
    $a = 1000;
    $c=0;
    ?>
    <div style='display:grid;place-items:center;justify-content:center;min-height:95vh;font-size:2rem;text-align:center;'>
       <!-- <p>SNO</p>
        <p>NAME</p>
        <p>NUMBER</p>
        <p>TELEGRAMNAME</p>
        <p>ENTRYPIN</p>
        <p>DATE</p>
        <p>TIME</p>-->
<?php
$select = "select NUMBER from giveaways where SNO=$rand";
$resu = mysqli_query($conn,$select);
  if(mysqli_num_rows($resu)>0){
    $fetch = mysqli_fetch_assoc($resu);
    echo "<center><h3 style='background-color:#C1FDB2;color:#26bf47;text-align:center;padding:1rem 1.5rem;'>LUCKY PAYTM NUMBER<br>".$fetch["NUMBER"]."</h3></center>";
  }else{
    echo "<center><h3 style='background-color:#F7ACAC;color:red;text-align:center;padding:1rem 1.5rem;'>BETTER CHECK CODE<br>TRY AGAIN LATER</h3></center>";
  }
?>
    </div>
    <br>
    <?php
   /* while($c<$a){
      $c+=1;
    $fetch = mysqli_fetch_assoc($res);
    echo "<br><div style='display:flex;align-items:center;justify-content: space-between;padding:1rem 1.5rem;margin-left:2px;'><p>".$fetch["SNO"]."</p><p>".$fetch["NAME"]."</p><p>".$fetch["NUMBER"]."</p><p>".$fetch["TELEGRAMNAME"]."</p><p>".$fetch["ENTRYPIN"]."</p><p>".$fetch["DATE"]."</p><p>".$fetch["TIME"]."</p></div>";
    }*/
  }
}
else{
  echo "<center><h3 style='background-color:#F7ACAC;color:red;'>Error in code!<br>Try again later.</h3></center>";
}
?>
</body>
</html>