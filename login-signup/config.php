<?php
$host = "localhost";
$username = "root";
$password = "123456"; // default for XAMPP
$dbname = "portal";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
