<?php
session_start();
error_reporting(0);

$urid = 0;

if(isset($_SESSION["urid"])){
$urid = $_SESSION["urid"];
}
$paid = "status";
//$urid = $_POST["URLID"];
$ps = "DONE";
//$conn = new mysqli("sql210.ezyro.com","ezyro_31231586","9640897011","ezyro_31231586_lifafa");
$conn = new mysqli("sql208.epizy.com","epiz_31256379","96408971","epiz_31256379_lifafa");
$query = "update register set PAYMENTSTATUS='$ps' and STATUS = '$paid' where URL='$urid'";
if($conn->query($query)){
    header("location:status.php");
}else{
    //echo "<script>alert('not updated');</script>";
    header("location:status.php");

}


?>