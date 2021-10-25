<?php 
include("../../confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Books list</title>
</head>
<body>
	<div class="container">
	<ul class="menu">
	<li><a href="book-list.php">Manage Books</a></li>
	<li><a href="cat-list.php">Manage Categories</a></li>
	<li><a href="orders.php">Manage Orders</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
		<ul class="list-group">
				<?php
                include("../../confs/config.php");
                $sql= "SELECT books.*,categories.name FROM books LEFT JOIN categories ON books.category_id = categories.id ORDER BY books.created_date DESC";
                $data = mysqli_query($conn, $sql);
                while ($row =mysqli_fetch_assoc($data)):
                ?>
				<li class="list-group-item">
						<img src="../images/<?php echo $row['cover']?>" alt="" width="140" align="right">
						<input type="hidden" name="id" value="<?php echo $row['id']?>">
						<b><?php echo $row['title']?></b>
						<i><?php echo $row['author']?></i>
						<small><?php echo $row['summary']?></small>
						<span><?php echo $row['price']?></span>
						<div><?php echo $row['category_id']?></div>
						Categories type:
						[<b><?php if ($row['category_id']): ?>
							 <?php echo $row['name']?>
							<?php endif;?>
						</b>]
				        <a href="edit-book.php?id=<?php echo $row['id']?>">edit</a>
				        <a href="delete-book.php?id=<?php echo $row['id']?>">delete</a>

				</li>
				<?php endwhile;?>		
		</ul>
		<a href="new-book.php">Add book</a>
	</div>
</body>
</html>