<?php

$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Your database username
$password = "Jimmuelpogi2!"; // Your database password
$dbname = "freelipino"; // The name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
