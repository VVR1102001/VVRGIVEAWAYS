<?php
$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_ban");
$sql = "delete from ban";
if(mysqli_query($conn,$sql)){
    mysqli_query($conn,"alter table ban auto_increment=1");
    echo "deleted";
}
?>