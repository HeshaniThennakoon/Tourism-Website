<?php
$host = "localhost";
$user = "root";
$password = ""; // leave it empty
$database = "book_db";

$conn = new mysqli($host, $user, $password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
