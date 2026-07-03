<?php

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$databaseName = "student_registration";

$connection = mysqli_connect(
    $serverName,
    $userName,
    $userPassword,
    $databaseName
);

if(!$connection)
{
    die("Database Connection Failed");
}

?>