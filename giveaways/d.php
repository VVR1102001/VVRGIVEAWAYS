<?php
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_camp");

$del = "delete from camp";

if(mysqli_query($conn,$del)){
    if(mysqli_query($conn,"alter table camp auto_increment=1")){
        echo "deleted";
    }
}
?>