<?php
$conn = new mysqli("localhost", "root", "", "food_wastage");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
