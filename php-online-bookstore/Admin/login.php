<?php 
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

if($name == "sengdu" and $password =="123"){
	$_SESSION['auth'] = true;
	header("location:list.php");
}else{
	header("location:admin-index.php");
}
?>