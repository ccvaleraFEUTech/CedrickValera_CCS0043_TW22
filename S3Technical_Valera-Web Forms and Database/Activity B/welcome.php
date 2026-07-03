<?php

session_start();

if(!isset($_SESSION['loggedUser']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome Page</h2>

<p>
    Welcome <?php echo $_SESSION['loggedUser']; ?>
</p>

<a href="logout.php">Logout</a>

</body>
</html>