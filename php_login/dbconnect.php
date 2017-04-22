<?php

$conn = mysqli_connect("localhost", "root", "", "uregmine");

if(!$conn){
  die("Connection failed: " . mysql_connect_error());
}
?>