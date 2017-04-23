<?php

session_start();

include 'dbconnect.php';

$name = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$encrypted_pass = hash('sha256', $pass);

$sql = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$name', '$email', '$encrypted_pass')";
$result = $conn->query($sql);

header("Location: ../index.php") // redirects to index.php
?>