
<?php 

$conn = mysqli_connect("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_register");

$del = "delete from register";

if(mysqli_query($conn,$del)){
    mysqli_query($conn,"alter table register auto_increment=1");
    echo "deleted";
}else{
    echo "deletion failed!";
}
?>