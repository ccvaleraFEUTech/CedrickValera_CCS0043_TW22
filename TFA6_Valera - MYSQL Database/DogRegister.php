<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dog Information</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h3>Dog Information</h3>

<?php
if (isset($_GET['success'])) {
    echo "<p class='success'>Data saved successfully!</p>";
}
?>

<form method="post">
    Name: <input type="text" name="name"><br>
    Breed: <input type="text" name="breed"><br>
    Age: <input type="number" name="age"><br>
    Address: <input type="text" name="address"><br>
    Color: <input type="text" name="color"><br>
    Height (cm): <input type="number" step="0.1" name="height"><br>
    Weight (kg): <input type="number" step="0.1" name="weight"><br>


    <input type="submit" name="save" value="Save">
</form>

<?php
if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $conn = new mysqli("localhost", "root", "", "dog_information_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        header("Location: DogRegister.php?success=1");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>