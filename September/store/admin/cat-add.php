<?php

include("confs/config.php");

$name = $_POST['name'];
$remark = $_POST['remark'];
// $conn = mysqli_connect('localhost','root','');
// mysqli_select_db($conn, 'store');
mysqli_query($conn," INSERT INTO categories(name,remark,created_date)
VALUES('$name','$remark',now())");

echo mysqli_error($conn);
// print_r($_POST);
header("location: cat-list.php");
