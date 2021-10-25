<?php 
include("../confs/auth.php");
?>
<?php
include("../confs/config.php");

$name = $_POST['name'];
$remark =$_POST['remark'];
$sql = "INSERT INTO categories(name,remark,modified_date)VALUES('$name','$remark',NOW())";
mysqli_query($conn,$sql);
header("location:index.php");
