<?php 
include("../../confs/auth.php");
?>
<?php 
include("../../confs/config.php");
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$summary = $_POST['summary'];
$category_id = $_POST['category_id'];
$price = $_POST['price'];

$cover = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
if($cover){
	move_uploaded_file($tmp,"../images/$cover");
	$sql = "UPDATE books SET title='$title',author='$author',summary='$summary',cover='$cover',category_id='$category_id',price='$price'
	 WHERE id=$id";
    
}else{
	$sql = "UPDATE books SET title='$title',author='$author',summary='$summary',price='$price',category_id='$category_id' WHERE id=$id";
    
}
mysqli_query($conn,$sql);
header("location:list-book.php");