<?php

session_start();

if(isset($_SESSION['username']))
{
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>My Personal Information</h2>

<form method="POST">

    First Name:<br>
    <input type="text" name="fname"><br><br>

    Middle Name:<br>
    <input type="text" name="mname"><br><br>

    Last Name:<br>
    <input type="text" name="lname"><br><br>

    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    Confirm Password:<br>
    <input type="password" name="confirm"><br><br>

    Birthday:<br>
    <input type="text" name="birthday"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    Contact Number:<br>
    <input type="text" name="contact"><br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<hr>

<?php

if(isset($_POST['submit']))
{
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm'];

    if($newPassword == $confirmPassword)
    {
        echo "<h3>Submitted Information</h3>";

        echo "Name: "
        . $_POST['fname'] . " "
        . $_POST['mname'] . " "
        . $_POST['lname'];

        echo "<br><br>";

        echo "User Account: " . $_POST['username'];

        echo "<br><br>";

        echo "Password: " . $newPassword;

        echo "<br><br>";

        echo "Date of Birth: " . $_POST['birthday'];

        echo "<br><br>";

        echo "Email Address: " . $_POST['email'];

        echo "<br><br>";

        echo "Mobile Number: " . $_POST['contact'];
    }
    else
    {
        echo "Registration Failed! Password entries do not match.";
    }
}

?>

</body>
</html>