<?php

session_start();
include("dbconnect.php");

if(!isset($_SESSION['loggedUser']))
{
    header("Location: login.php");
    exit();
}

$accountUsername = mysqli_real_escape_string($connection, $_SESSION['loggedUser']);

$getUser = mysqli_query(
    $connection,
    "SELECT * FROM users WHERE username='$accountUsername'"
);

$userData = mysqli_fetch_assoc($getUser);

$statusMessage = "";

if(isset($_POST['btnReset']))
{
    $oldPassword = $_POST['oldpass'];
    $newPassword = $_POST['newpass'];
    $confirmNewPassword = $_POST['confirmpass'];

    if($oldPassword != $userData['password'])
    {
        $statusMessage =
        "Current password is not the same with the old password";
    }
    else
    {
        if($newPassword == $confirmNewPassword)
        {
            $newPasswordEscaped = mysqli_real_escape_string($connection, $newPassword);

            mysqli_query(
                $connection,
                "UPDATE users
                SET password='$newPasswordEscaped'
                WHERE username='$accountUsername'"
            );

            $statusMessage =
            "Password updated successfully.";

            $userData['password'] = $newPassword;
        }
        else
        {
            $statusMessage =
            "New password and Re-Enter new password should be the same.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="box">

    <div class="top-area">
        <h1>User Information Form</h1>

        <a href="logout.php">Log-out</a>
    </div>

    <p>
        Welcome
        <?php
        echo htmlspecialchars(
            $userData['firstname'] . " "
            . $userData['middlename'] . " "
            . $userData['lastname']
        );
        ?>
    </p>

    <p>
        <strong>Birthday:</strong>
        <?php echo htmlspecialchars($userData['birthday']); ?>
    </p>

    <h3>Contact Details</h3>

    <p>
        <strong>Email:</strong>
        <?php echo htmlspecialchars($userData['email']); ?>
    </p>

    <p>
        <strong>Contact:</strong>
        <?php echo htmlspecialchars($userData['contact_number']); ?>
    </p>

    <hr>

    <h3>RESET PASSWORD</h3>

    <form method="POST">

        <label>Enter Current Password:</label>
        <input type="password" name="oldpass" required>

        <label>Enter New Password:</label>
        <input type="password" name="newpass" required>

        <label>Re-Enter New Password:</label>
        <input type="password" name="confirmpass" required>

        <button type="submit" name="btnReset">
            Reset Password
        </button>

    </form>

    <p class="message">
        <?php echo htmlspecialchars($statusMessage); ?>
    </p>

</div>

</body>
</html>