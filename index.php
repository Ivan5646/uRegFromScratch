<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style></style>
</head>
<body>
<h2> Home Page</h2>

<form action="login.php" method="POST">
  <input type="email" name="email" placeholder="email" required>
  <input type="password" name="password" placeholder="password" required>
  <button>Login</button>
</form>

<br><br>

<form action="register.php" method="POST">
  <input type="text" name="uname" placeholder="user name" required>
  <input type="email" name="email" placeholder="email" required>
  <input type="password" name="password" placeholder="password" required>
  <button>Sign up</button>
</form>
</body>
</html>


