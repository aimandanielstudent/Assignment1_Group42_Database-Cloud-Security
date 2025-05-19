<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>