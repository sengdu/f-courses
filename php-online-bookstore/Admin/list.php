<?php 
include("../confs/auth.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categories List</title>
</head>
<body>
	<div class="container">
	<ul class="menu">
  <li><a href="book-list.php">Manage Books</a></li>
  <li><a href="cat-list.php">Manage Categories</a></li>
  <li><a href="orders.php">Manage Orders</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	<ul>
		<?php  
		include("../confs/config.php");
		$sql = mysqli_query($conn,"SELECT * FROM categories");
		while($row = mysqli_fetch_assoc($sql)):
		?>
		
		<li>
           [ <a href="edit.php?id=<?php echo $row['id'] ?>" >edit</a> ]
           [ <a href="delete.php?id=<?php echo $row['id'] ?>" >delete</a> ]
           <?php echo $row['name'] ?>
        </li>
	
		<?php endwhile; ?>
	</ul>
	</div>
</body>
</html>