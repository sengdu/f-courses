<?php

 print_r($_FILES);
 $name = $_FILES["photo"]["name"];
 $tmp = $_FILES["photo"]["tmp_name"];
 $type = $_FILES["photo"]["type"];
if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") { move_uploaded_file($tmp, "photo/$name");
}
header("location: index.php");

// $name = $_FILES['photo']['name'];#name
// $tmp = $_FILES['photo']['tmp_name'];#file location
// move_uploaded_file($tmp,$name);

// # location,name



// print_r($_FILES);
// $name = $_FILES["photo"]["name"];
// $tmp = $_FILES["photo"]["tmp_name"];
// $type = $_FILES["photo"]["type"];

// if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") { move_uploaded_file($tmp, "photo/$name");
// }
// header("location: index.php"); ?>