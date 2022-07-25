<?php
$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_campaigns");

$del = "delete from rae";
if(mysqli_query($conn,$del)){
    mysqli_query($conn,"alter table rae autoincrement=1");
    echo "deleted";
}
?>