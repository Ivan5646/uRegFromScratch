Warning: mysql_num_rows() expects parameter 1 to be resource, boolean given inC:\OpenServer\domains\uRegMine\php_login\register.php on line 24

Warning: Cannot modify header information - headers already sent by (output started at C:\OpenServer\domains\uRegMine\php_login\register.php:24) in C:\OpenServer\domains\uRegMine\php_login\register.php on line 30

solved by siingle quotation marks around $email
$sql = "SELECT * FROM users WHERE userEmail='$email'";

//register.php
<?php

error_reporting(E_ERROR); // remove

session_start();

include 'dbconnect.php';

$name = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['password'];

// $encrypted_pass = hash('sha256', $pass);
// $sql = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$name', '$email', '$encrypted_pass')";
// $result = $conn->query($sql);
// header("Location: ../index.php") // redirects to index.php


$encrypted_pass =  hash('sha256', $pass); 

// check if user already exists
$sql = "SELECT * FROM users (userName, userEmail) WHERE userEmail=$email";
$result = $conn->query($sql);
if(mysql_num_rows($result)>=1){
  echo"name already exists";
}else{
  //$encrypted_pass = hash('sha256', $pass);
  $sql = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$name', '$email', '$encrypted_pass')";
  $result = $conn->query($sql);
  header("Location: ../index.php"); // redirects to index.php
}


?>


// worked
<?php

//error_reporting(E_ERROR); // remove

session_start();

include 'dbconnect.php';

$name = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['password'];

// $encrypted_pass = hash('sha256', $pass);
// $sql = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$name', '$email', '$encrypted_pass')";
// $result = $conn->query($sql);
// header("Location: ../index.php") // redirects to index.php


$encrypted_pass =  hash('sha256', $pass); 

// check if user already exists
$sql = "SELECT * FROM users WHERE userEmail='asya@ya.ru'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)==TRUE){
  echo"name already exists";
}else{
  //$encrypted_pass = hash('sha256', $pass);
  $sql = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$name', '$email', '$encrypted_pass')";
  $result = $conn->query($sql);
  header("Location: ../index.php"); // redirects to index.php
}


?>