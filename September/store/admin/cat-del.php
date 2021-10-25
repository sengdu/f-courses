<?php

include("confs/config.php");
$id=$_GET['id'];

// $conn  = mysqli_connect('localhost','root','');
// mysqli_select_db($conn, 'store');
mysqli_query($conn , "DELETE FROM categories WHERE id = $id");
header("location: cat-list.php");