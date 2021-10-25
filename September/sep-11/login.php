<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password= 123){
	$_SESSION['login'] = true;
}
header('location: index.php');
?>