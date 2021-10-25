<?php

print_r($_FILES);
$name= $_FILES["photo"]["name"];
$t=$_FILES["photo"]["tmp_name"];
$type = $_FILES["photo"]["type"];
if( $type == "image/png" || $type == "image/jpeg" || $type == "image/gif"){
	move_uploaded_file($t,"hello/$name"); 
}

header("location: index.php");