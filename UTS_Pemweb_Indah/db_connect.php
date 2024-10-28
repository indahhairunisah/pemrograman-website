<?php
// Database connection settings
$host = 'localhost';
$user = 'root';
$password = ''; // XAMPP default is an empty password
$database = 'portofolio'; // Make sure this matches the name of your created database

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
