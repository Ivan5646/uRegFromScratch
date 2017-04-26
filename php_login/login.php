<?php

session_start();

include 'dbconnect.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$encrypted_pass =  hash('sha256', $pass); 

$sql = "SELECT * FROM users WHERE userEmail='$email' AND userPAss='$encrypted_pass' ";
$result = $conn->query($sql);



if(!$row = $result->fetch_assoc()){ // if no result from db
  echo "Your username or password is incorrect";
}else{
  $_SESSION['id'] = $row['userId']; // create id var in SESSION and assign to userId to it from the db
  $_SESSION['name'] = $row['userName']; 
}

header("Location: ../index.php") // redirects to index.php

?>