<?php 
include("../confs/config.php");
include("../confs/auth.php");
$id = $_POST['id'];
$name = $_POST['name'];
$remark = $_POST['remark'];
mysqli_query($conn,"UPDATE categories SET name = '$name',remark='$remark',modified_date=NOW() WHERE id=$id");
header("location:list.php");