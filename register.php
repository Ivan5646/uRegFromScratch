<?php

session_start();

include 'dbconnect.php';

$name = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (userName, userEmail, userPass) VALUES ('$name', '$email', '$pass')";
$result = $conn->query($sql);

header("Location: index.php") // redirects to index.php
?>