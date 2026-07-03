<?php

session_start();

$registeredUser = "admin";
$registeredPassword = "12345";

$loginMessage = "";

if(isset($_SESSION['account_name']))
{
    header("Location: home.php");
}

if(isset($_POST['submit']))
{
    if($_POST['username'] == $registeredUser &&
       $_POST['password'] == $registeredPassword)
    {
        $_SESSION['account_name'] = $_POST['username'];

        header("Location: home.php");
    }
    else
    {
        $loginMessage = "Invalid Username or Password";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<?php
echo $loginMessage;
?>

<br><br>

<form method="POST">

    Username:<br>
    <input type="text" name="username">
    <br><br>

    Password:<br>
    <input type="password" name="password">
    <br><br>

    <input type="submit" name="submit" value="Login">

</form>

</body>
</html>
