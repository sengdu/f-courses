<?php 
include("../../confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Books</title>
</head>
<body>
	<div class="container">
		<?php 
		  include("../../confs/config.php");
		  $id = $_GET['id'];
		//   $sql= "SELECT books.*,categories.name FROM books LEFT JOIN categories ON books.category_id = categories.id ORDER BY books.created_date DESC ";
		  $sql = "SELECT * FROM books WHERE id=$id";
		  $data = mysqli_query($conn,$sql);
		  $row = mysqli_fetch_assoc($data);
		?>
		<form action="update-book.php" method="post" enctype="multipart/form-data">
		  <input type="text" name="id" value="<?php echo $row['id']?>"> <br>
		  title <br>
		  <input type="text" name="title" value="<?php echo $row['title']?>" > <br>
		  author <br>
		  <input type="text" name="author" value="<?php echo $row['author']?>"> <br>
		  summary <br>
		  <textarea name="summary"> <?php echo $row['summary'] ?></textarea> <br>
		  Price <br>
		  <input type="text" name="price"  value="<?php echo $row['price']?>"> <br>
		  Categories <br>
		  <select name="category_id">
			  <?php 
			   $category = "SELECT id,name FROM categories";
			   $cat = mysqli_query($conn,$category);
			   while ( $cate = mysqli_fetch_assoc($cat)):
			  ?>
			  <option value="<?php echo $cate['id'] ?>" 
			   <?php if($cate['id'] == $row['category_id']) echo "selected"  ?>>
			   <?php echo $cate['name'] ?>
			  </option>

			  <?php endwhile;?>
		  </select> <br>
		  cover <br>
		  <img src="../images/<?php echo $row['cover']?>" alt="" width="140"> <br>
		  <input type="file" name="photo"> <br> <br>
		  <input type="submit" value="To Update"> <br>

		</form>
	</div>
</body>
</html>