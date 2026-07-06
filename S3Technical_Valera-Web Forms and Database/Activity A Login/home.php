<?php

session_start();

if(!isset($_SESSION['account_name']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Home Page</h2>

<?php
echo "Welcome " . htmlspecialchars($_SESSION['account_name']);
?>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html> 