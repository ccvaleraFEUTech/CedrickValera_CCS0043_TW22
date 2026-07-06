<?php

session_start();

$registeredUser = "admin";
$registeredPassword = "12345";

$loginMessage = "";

if(isset($_SESSION['account_name']))
{
    header("Location: home.php");
    exit();
}

if(isset($_POST['submit']))
{
    if($_POST['username'] == $registeredUser &&
       $_POST['password'] == $registeredPassword)
    {
        if(isset($_POST['rememberUser']))
        {
            
            setcookie("savedUser", $_POST['username'], time() + 3600);
            setcookie("savedPass", $_POST['password'], time() + 3600);
        }

        $_SESSION['account_name'] = $_POST['username'];

        header("Location: home.php");
        exit();
    }
    else
    {
        $loginMessage = "Invalid Username or Password";
    }
}

?>
    <!--Code Modified above, added cookie handling -->


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<?php
echo htmlspecialchars($loginMessage);
?>

<br><br>

<form method="POST">

    Username:<br>
    <input type="text" name="username"
    value="<?php if(isset($_COOKIE['savedUser'])) echo htmlspecialchars($_COOKIE['savedUser']); ?>">
    <br><br>

    Password:<br>
    <input type="password" name="password"
    value="<?php if(isset($_COOKIE['savedPass'])) echo htmlspecialchars($_COOKIE['savedPass']); ?>">
    <br><br>

    <input type="checkbox" name="rememberUser"
    <?php if(isset($_COOKIE['savedUser'])) echo "checked"; ?>>
    Remember Account

    <br><br>

    <input type="submit" name="submit" value="Login">

</form>

</body>
</html>