<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Reports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>📊 All Reports</h1>
</header>

<?php
$result = $conn->query("SELECT * FROM reports");

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Food</th><th>Qty</th><th>Location</th><th>Message</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['food_type']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['location']."</td>";
    echo "<td>".$row['message']."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
