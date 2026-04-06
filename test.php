<?php
$conn = new mysqli("localhost", "root", "", "food_wastage");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>
