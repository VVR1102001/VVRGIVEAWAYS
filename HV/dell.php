<?php
$conn = new mysqli("sql308.ezyro.com","ezyro_29154431","9640897011","ezyro_29154431_HumanVerification");
$sql = "delete from security";
if($conn->query($sql)){
  mysqli_query($conn,"alter table security auto_increment=1");
  echo "Done!";
}
else{
  echo "Error!";
}
?>