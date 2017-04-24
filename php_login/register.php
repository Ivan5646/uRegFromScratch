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
$sql = "SELECT * FROM users WHERE userEmail='$email'";
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