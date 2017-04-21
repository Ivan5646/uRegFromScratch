<?php

include 'dbconnect.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE userEmail='$email' AND userPAss='$pass' ";
$result = $conn->query($sql);

//header("Location: index.php") // redirects to index.php

if(!$row = $result->fetch_assoc()){ // if no result from db
  echo "Your username or password is incorrect";
}else{
  echo "You are logged in";
}
?>