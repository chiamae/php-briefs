<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatbox";

// Create connection link srv + usrnm + mot dpass + dbnm
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}