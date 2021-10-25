<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>File upload</h1>
	<?php

	$A = scandir("hello");
	
	for ($i=2; $i < count($A); $i++) { 
		$AA = $A[$i];
		echo "<img src='hello/$AA' width='200'>";
	}

	?>

	<form action="ok.php" method="post" enctype="multipart/form-data">
		<input type="file" name="photo">
		<input type="submit" value="Upload">
	</form>
</body>
</html>