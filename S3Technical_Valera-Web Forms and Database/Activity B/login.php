<?php

session_start();
include("dbconnect.php");

$notice = "";

if(isset($_SESSION['loggedUser']))
{
    header("Location: welcome.php");
    exit();
}

if(isset($_POST['btnLogin']))
{
    $userInput = mysqli_real_escape_string($connection, $_POST['username']);
    $passInput = mysqli_real_escape_string($connection, $_POST['password']);

    $checkAccount = "SELECT * FROM users
                     WHERE username='$userInput'
                     AND password='$passInput'";

    $resultData = mysqli_query($connection, $checkAccount);

    if(mysqli_num_rows($resultData) == 1)
    {
        $record = mysqli_fetch_assoc($resultData);

        $_SESSION['loggedUser'] = $record['username'];

        header("Location: welcome.php");
        exit();
    }
    else
    {
        $notice = "Incorrect username or password.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-box">

    <h2>Student Login</h2>

    <form method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="btnLogin">
            Login
        </button>

    </form>

    <p class="message">
        <?php echo htmlspecialchars($notice); ?>
    </p>

    <p class="footer">
        © Cedrick Valera
    </p>

</div>

</body>
</html>