<?php
//$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");

$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");

$query = "delete from register";
if($conn->query($query)){
    mysqli_query($conn,"alter table register auto_increment=1");
    echo "deleted";
}else{
    echo "error";
}
?>


<?php
//$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");

$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");
$query = "delete from lifafa";
if($conn->query($query)){
    mysqli_query($conn,"alter table lifafa auto_increment=1");
    echo "deleted";
}else{
    echo "error";
}
?>