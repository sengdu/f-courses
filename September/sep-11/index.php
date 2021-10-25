<?php
session_start();
$login = isset($_SESSION['login']);
?>
<!doctype html>
<html>
<head>
  <title>Home Page</title>
  <style>
    body {
      background: #efefef;
      font-family: arial;
      color: #333;
}
    #wrap {
      width: 500px;
      padding: 20px;
      margin: 10px auto;
      border: 4px solid #ddd;
      background: #fff;
}
    h1 {
      margin: 0 0 20px 0;
      padding: 0 0 10px 0;
      border-bottom: 1px solid #ddd;
}
    input[type=text], input[type=password] {
      display: block;
      margin-bottom: 10px;
}
    .msg {
      width: 500px;
      background: #ffd;
      border: 2px solid #dda;
      text-align: center;
      margin: 10px auto;
      font-size: 13px;
      padding: 6px;
} </style>
</head>
<body>
<div id="wrap">
  <?php if($login) { ?>
    <h1>Welcome to My Website</h1>
    <p>You see this because you are an authenticated user. Congratulation!</p>
    <a href="logout.php">Logout</a>
  <?php } else { ?>
    <h1>You need to login</h1>
    <form action="login.php" method="post">
	  username 
      <input type="text" name="username" > 
      password 
      <input type="password" name="password">
      <input type="submit" value="Login">
    </form>
<?php } ?>
</div>
</body>
</html>