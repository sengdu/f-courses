<?php 
include("../../confs/auth.php");
?>
<?php
include("../../confs/config.php");

$title = $_POST['title'];
$author = $_POST['author'];
$summary = $_POST['summary'];
$price= $_POST['price'];
$category_id = $_POST['category_id'];
$cover =$_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

if($cover){
	move_uploaded_file($tmp,"../images/$cover");
}
mysqli_query($conn,"INSERT INTO books (title,author,summary,price,category_id,cover,created_date,modified_date)VALUES ('$title','$author','$summary','$price','$category_id','$cover',NOW(),NOW())");

header("location:list-book.php");
?>