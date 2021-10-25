<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin login </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container d-flex justify-content-center mt-4">
	<form action="login.php" method="post"  class="text-center">
		Name <br> 
		<input type="text" name="name"> <br><br>
		Password <br>
		<input type="password" name="password"> <br><br>
		<input type="submit" value="login"> <br><br>
	</form>
	</div>
</body>
</html>