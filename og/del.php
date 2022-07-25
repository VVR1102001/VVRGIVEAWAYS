<?php
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_giveaways");
$sql = "delete from giveaways";
if(mysqli_query($conn,$sql)){
  mysqli_query($conn,"alter table giveaways auto_increment=1");
  echo "deleted!";
}else{
  echo "issue in code!";
}
?>