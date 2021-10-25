<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Categories list</h1>
	<ul>
	<?php

    include("confs/config.php");
     $result = mysqli_query($conn, "SELECT * FROM categories");

    ?>
	<?php
    while ($row = mysqli_fetch_assoc($result)):?>
	<li>
		<a href="cat-del.php?id=<?php 
		echo $row['id']?>">Delete</a>
		<a href="cat-edit.php?id=<?php 
		echo $row['id']?>">Edit</a>
		<?php echo $row ['name']?>
	</li>

	<?php endwhile?>
	</ul>
	<a href="cat-new.php">New Categories</a>
</body>
</html>