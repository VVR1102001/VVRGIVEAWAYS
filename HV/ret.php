<?php
$conn = new mysqli("sql308.ezyro.com","ezyro_29154431","9640897011","ezyro_29154431_HumanVerification");
$sql = "select * from security";
if($conn){
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
    $a = 1000;
    $c=0;
    echo "SNO"."&nbsp;&nbsp;&nbsp;"."IPADDRESS"."&nbsp;&nbsp;&nbsp;" ."VERSION"."&nbsp;&nbsp;&nbsp;"  ."ASN"."&nbsp;&nbsp;&nbsp;"  ."COUNTRY"."&nbsp;&nbsp;&nbsp"."STATE"."&nbsp;&nbsp;&nbsp;" ."CITY"."&nbsp;&nbsp;&nbsp;" ."POSTALCODE"."&nbsp;&nbsp;&nbsp;"
     ."ORG/ISP"."&nbsp;&nbsp;&nbsp;"  ."TIME"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."DATE"."&nbsp;&nbsp;&nbsp;" ."LANGUAGES"."&nbsp;&nbsp;&nbsp;" ."CURRENCY"."&nbsp;&nbsp;&nbsp;" ."CURRENCYNAME"."&nbsp;&nbsp;&nbsp;<br>";
    while($c<$a){
      $c+=1;
    $fetch = mysqli_fetch_assoc($res);
    echo "<br>".$fetch["SNO"]."&nbsp;&nbsp;&nbsp;&nbsp;".$fetch["IPADDRESS"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["VERSION"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["ASN"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["COUNTRY"]."&nbsp;&nbsp;&nbsp;".$fetch["STATE"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["CITY"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["POSTALCODE"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["ORGNAME"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["TIME"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["DATE"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["LANGUAGES"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["CURRENCY"]."&nbsp;&nbsp;&nbsp;"
    .$fetch["CURRENCYNAME"];
    }
  }
}
else{
  echo "Error!";
}
?>