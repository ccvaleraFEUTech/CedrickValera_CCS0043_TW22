<?php

session_start();
include("dbconnect.php");

if(isset($_SESSION['loggedUser']))
{
    header("Location: welcome.php");
    exit();
}

$responseMessage = "";

if(isset($_POST['btnRegister']))
{
    $givenName = mysqli_real_escape_string($connection, $_POST['firstname']);
    $secondName = mysqli_real_escape_string($connection, $_POST['middlename']);
    $familyName = mysqli_real_escape_string($connection, $_POST['lastname']);

    $accountName = mysqli_real_escape_string($connection, $_POST['username']);

    $mainPassword = $_POST['password'];
    $verifyPassword = $_POST['confirmpassword'];

    $birthInfo = mysqli_real_escape_string($connection, $_POST['birthday']);
    $emailInfo = mysqli_real_escape_string($connection, $_POST['email']);
    $phoneInfo = mysqli_real_escape_string($connection, $_POST['contact']);

    if($mainPassword == $verifyPassword)
    {
        $mainPasswordEscaped = mysqli_real_escape_string($connection, $mainPassword);

        $sqlInsert = "INSERT INTO users
        (firstname, middlename, lastname, username, password, birthday, email, contact_number)
        VALUES
        ('$givenName',
        '$secondName',
        '$familyName',
        '$accountName',
        '$mainPasswordEscaped',
        '$birthInfo',
        '$emailInfo',
        '$phoneInfo')";

        if(mysqli_query($connection, $sqlInsert))
        {
            $responseMessage = "Registration completed successfully.";
        }
        else
        {
            $responseMessage = "Unable to save record.";
        }
    }
    else
    {
        $responseMessage = "password and confirm password are not the same";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>My Personal Information</h2>

    <form method="POST">

        <label>First Name</label>
        <input type="text" name="firstname" required>

        <label>Middle Name</label>
        <input type="text" name="middlename" required>

        <label>Last Name</label>
        <input type="text" name="lastname" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" required>

        <label>Birthday</label>
        <input type="text" name="birthday" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact" required>

        <button type="submit" name="btnRegister">
            Submit
        </button>

    </form>

    <!-- AI Generated: Asked to Claude. Displays the result message from the registration attempt -->
    <p><?php echo htmlspecialchars($responseMessage); ?></p>

    <p>© Cedrick Valera</p>

</div>

</body>
</html>