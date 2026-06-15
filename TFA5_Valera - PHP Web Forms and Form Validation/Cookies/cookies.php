<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Personal Webpage</title>

    <style>
        label {
            min-width: 120px;
            display: inline-block;
        }
    </style>
</head>

<body>

<h3>Cookies Form</h3>

<?php
// Process form and set cookies
if (isset($_POST['submit']))
{
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $DoB   = $_POST['dateofbirth'];
    $add   = $_POST['address'];
    
    // Set cookies (no time = session-based cookies)
    setcookie("FIRST_NAME", $fname, time() + 10);
    setcookie("MIDDLE_NAME", $mname, time() + 20);
    setcookie("LAST_NAME", $lname, time() + 30);

    // No timer (session cookies)
    setcookie("DOB", $DoB);
    setcookie("ADDRESS", $add);
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <p>
        <label>First Name:</label>
        <input type="text" name="firstname" required>
    </p>

    <p>
        <label>Middle Name:</label>
        <input type="text" name="middlename" required>
    </p>

    <p>
        <label>Last Name:</label>
        <input type="text" name="lastname" required>
    </p>

    <p>
        <label>Date of Birth:</label>
        <input type="text" name="dateofbirth" required>
    </p>

    <p>
        <label>Address:</label>
        <input type="text" name="address" required>
    </p>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
// Display cookies if already set
if (isset($_COOKIE['FIRST_NAME']) || isset($_COOKIE['DOB']))
{
    echo "<h4>Stored Cookies:</h4>";

    if (isset($_COOKIE['FIRST_NAME']))
        echo "First Name: " . $_COOKIE['FIRST_NAME'] . "<br>";

    if (isset($_COOKIE['MIDDLE_NAME']))
        echo "Middle Name: " . $_COOKIE['MIDDLE_NAME'] . "<br>";

    if (isset($_COOKIE['LAST_NAME']))
        echo "Last Name: " . $_COOKIE['LAST_NAME'] . "<br>";

    if (isset($_COOKIE['DOB']))
        echo "Date of Birth: " . $_COOKIE['DOB'] . "<br>";

    if (isset($_COOKIE['ADDRESS']))
        echo "Address: " . $_COOKIE['ADDRESS'];
}
?>

</body>
</html>