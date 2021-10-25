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
		<h1>Categories</h1>
		<form action="add.php" method="post">
			Name <br>
			<input type="text" name="name"><br>
			Remark <br>
			<textarea name="remark"></textarea> <br>
			
			<input type="submit" value="Add Categories">
		</form>
	</div>
</body>
</html>