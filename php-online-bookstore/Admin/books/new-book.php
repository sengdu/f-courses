<?php 
include("../../confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Books</title>
</head>
<body>
	<div class="container">
		<form action="add-book.php" method="post" enctype="multipart/form-data">
		   Title <br>
		   <input type="text" name="title" > <br>
		   Author <br>
		   <input type="text" name="author" > <br>
		   Summary <br>
		   <textarea name="summary"></textarea> <br>
		   Price <br>
		   <input type="text" name="price" >  <br>
		   <select name="category_id" >
			   <option value="0">--choose--</option>
			   <?php
			   include("../../confs/config.php");
			   $result = mysqli_query($conn, "SELECT id, name FROM categories"); 
			   while($row = mysqli_fetch_assoc($result)):
			    ?>
				<option value="<?php echo $row['id'] ?>">
				   <?php echo $row['name']?>
				</option>
				<?php endwhile; ?>
		   </select><br>
		   Cover <br>
		   <input type="file" name="photo"> <br>
		   <input type="submit" value="Add books">
	    </form>
	</div>
</body>
</html>