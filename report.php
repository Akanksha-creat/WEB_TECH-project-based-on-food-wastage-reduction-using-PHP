<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>📝 Report Food Wastage</h1>
</header>

<form method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="text" name="food_type" placeholder="Food Type" required>
    <input type="text" name="quantity" placeholder="Quantity" required>
    <input type="text" name="location" placeholder="Location" required>
    <textarea name="message" placeholder="Additional Info"></textarea>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $food = $_POST['food_type'];
    $qty = $_POST['quantity'];
    $loc = $_POST['location'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO reports(name, food_type, quantity, location, message)
            VALUES('$name','$food','$qty','$loc','$msg')";

    if ($conn->query($sql)) {
        echo "<script>alert('✅ Report Submitted Successfully!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</body>
</html>
