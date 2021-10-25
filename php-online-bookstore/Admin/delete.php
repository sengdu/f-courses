
<?php 
include("../confs/auth.php");
?>
<?php 

include("../confs/config.php");
$id = $_GET['id'];
$sql= mysqli_query($conn,"DELETE FROM categrores FROM id=$id");
header("location:list.php");