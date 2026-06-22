<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dog List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3>Dog Lists</h3>

<?php
$connection = new mysqli("localhost", "root", "", "dog_information_db");

if ($connection->connect_error) {
    die("Database connection failed.");
}

$query = "SELECT * FROM dogs";
$result = $connection->query($query);

if ($result && $result->num_rows > 0) {

    $count = 1;

    while ($row = $result->fetch_assoc()) {

        echo "<div class='dog-box'>";
        echo "<strong>Dog " . $count . "</strong><br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Breed: " . $row["breed"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Color: " . $row["color"] . "<br>";
        echo "Height: " . $row["height"] . "<br>";
        echo "Weight: " . $row["weight"] . "<br>";
        echo "</div><br>";

        $count++;
    }

} else {
    echo "<p class='success'>No records found.</p>";
}

$connection->close();
?>

</body>
</html>