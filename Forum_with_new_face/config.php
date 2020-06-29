<?php
$servername = "localhost";
$username = "u185312781_tech";
$password = "01723Sunny@";
$dbname = "u185312781_osa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>