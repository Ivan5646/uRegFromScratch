<?php
  session_start(); // accessing the variable which are put inside $_SESSION['id']
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php if( !isset($_SESSION['id']) ){ ?>
      <li class="signUp"><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
    <?php }else{  ?>
      <li class="white"><?php echo $_SESSION['name']; ?></li>
    <?php  } ?>
      <?php
        if( !isset($_SESSION['id']) ){
         echo "<li class='loginLi'><a href='#'><span class='glyphicon glyphicon-log-in'></span>Login</a></li>";
        }else {
         echo "<li><a href='php_login/logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>";
        }
      ?>
    </ul>
  </div>
</nav>

<?php
  if(isset($_SESSION['id'])){ // if logged in, show user id. Remove it.
    echo $_SESSION['id'];
  }else{
    echo "You are not logged in";
  }
?>

<div class="forms" id="fomrsDiv">
  <div class="tabsGroup">
    <p id="tabBtn1" class="btnTabs">Sign up</p><p id="tabBtn2" class="btnTabs">Sign in</p>
  </div>
  <form class="loginForm" action="php_login/login.php" method="POST">
    <div class="inputWrapper">
      <input type="email" name="email" placeholder="email" required>
      <input type="password" name="password" placeholder="password" required>
    </div>
    <button>Login</button>
  </form>
  <form class="registerForm" action="php_login/register.php" method="POST">
  <div class="inputWrapper">
    <input type="text" name="uname" placeholder="user name" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required title="3 characters minimum" pattern=".{3,}">
  </div>  
    <button>Sign up</button>
  </form>
</div>

<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>


