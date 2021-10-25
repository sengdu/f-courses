<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	 include("confs/config.php");
	 $id = $_GET['id']; #from ul id 
	 $result = mysqli_query( $conn , " SELECT * FROM categories WHERE  id=$id");
	 $row = mysqli_fetch_assoc($result);
	?>
	<h1>Edit Categories</h1>
	<form action="cat-update.php" method="post">
		
		<input type="hidden" name="id" value="<?php echo $row['id']?>"><br>

		Name <br>
		<input type="text" name="name" value="<?php echo $row['name']?> "><br>
		Remark <br>
		<textarea name="remark" ><?php echo $row ['remark']?></textarea> <br>

		<br>
		<input type="submit" value="Update Category">
	</form>

</body>
</html>