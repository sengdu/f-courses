<?php 
include("../confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categories</title>
</head>
<body>
	<div class="container">
		<h1>Edit Categories</h1>
		<?php 
		    include("../confs/config.php");
			$id = $_GET['id'];
			$sql = mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
			$row = mysqli_fetch_assoc($sql);
		?>	
		<form action="update.php" method="post">
			Name <br>
			<input type="text" name="id" value="<?php echo $row['id']?>"> <br>
			<input type="text" name="name" value="<?php echo $row['name']?>"><br>
			Remark <br>
			<textarea name="remark" ><?php echo $row['remark']?></textarea> <br>
			
			<input type="submit" value="Update Categories">
		</form>
	</div>
</body>
</html>