<?php
session_start();
$cart=0;
if(isset($_SESSION['cart'])){
	foreach($_SESSION['cart'] as $qty){
		$cart += $qty;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
     include("../../confs/config.php");
	
     if (isset($_GET['cats'])) {
         $cats_id = $_GET['cats'];
         $books= mysqli_query($conn, "SELECT * FROM books WHERE category_id=$cats_id");
     } else {
         $books= mysqli_query($conn, "SELECT * FROM books");
     }
     $categories = mysqli_query($conn, "SELECT * FROM categories");
    ?>
	<div class="container mt-4">

		<div class="col-12 row">

			<div class="col-3 border border-primary">
				<ul class="class">
					<li style="list-style:none;">
						<h3>Book Store</h3>
						<a href="view-cart.php">
							(<?php echo $cart ?>) books in your card
						</a>
					</li> <br><br>
					
					<a href="index.php">All Categories</a>
					<?php
                        while ($row =mysqli_fetch_assoc($categories)):
                    ?>
						<li style="list-style:none;">
						<a href="index.php?cats=<?php echo $row['id']?>">
						<?php echo $row['name'] ?>
					    </a>	
						</li>
						  
					<?php
                        endwhile;
                    ?>
					
				</ul>
			</div>

			<div class="col-8 row  border border-secondary">
				<ul class=" d-flex flex-row justify-content-between">
					<?php
                       while ($row = mysqli_fetch_assoc($books)):
                     ?>
					<li class="m-2">
						<img src="../../Admin/images/<?php echo $row['cover'] ?>" alt="" height="120"> <br>
						<b> Title: <?php echo $row['title'] ?></b> <br>
						<p> Price: $<?php echo $row['price'] ?></p> <br>
						<a href="card-to-add.php?id=<?php echo $row['id']?>">
							Add to cart
						</a>
					</li>
					<?php endwhile;?>
				</ul>
			</div>
		</div>

        <div class="footer col-lg bg-secondary text-white text-center mt-3">
           &copy; <?php echo date("Y.m.d") ?>. All right reserved.
       </div>
	</div>
</body>
</html>