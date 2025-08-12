<?php
$host = "localhost"; // host
$user = "root";      // DB user
$password = "";      // DB password
$database = "book_db"; // DB name

$conn = new mysqli($host, $user, $password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
