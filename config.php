<?php
$host = "sql100.infinityfree.com"; // host
$user = "if0_39947351";      // DB user
$password = "SZ3qy1jvrzvw2a";      // DB password
$database = "if0_39947351_tours"; // DB name

$conn = new mysqli($host, $user, $password, $database, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
