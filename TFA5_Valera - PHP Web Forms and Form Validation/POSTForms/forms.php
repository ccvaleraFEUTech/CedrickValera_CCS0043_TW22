<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms (POST Information Webpage)</title>

    <style type="text/css">
    label {
        min-width: 10%;
        display: inline-block;
    }
    </style>
</head>

<body>

    POST Method

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <p>
            <label for="name">First Name:</label>
            <input type="text" name="firstname" required>
        </p>

        <p>
            <label for="name">Middle Name:</label>
            <input type="text" name="middlename" required>
        </p>

        <p>
            <label for="name">Last Name:</label>
            <input type="text" name="lastname" required>
        </p>

        <p>
            <label for="name">Date of Birth:</label>
            <input type="text" name="dateofbirth" required>
        </p>

        <p>
            <label for="name">Address:</label>
            <input type="text" name="address" required>
        </p>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if (isset($_POST['submit']))
        {
            $fname = $_POST['firstname'];
            $mname = $_POST['middlename'];
            $lname = $_POST['lastname'];
            $DoB   = $_POST['dateofbirth'];
            $add   = $_POST['address'];

            echo "Full Name: " . $fname . "<br>";
            echo "Middle name: " . $mname . "<br>";
            echo "Last name: " . $lname . "<br>";
            echo "Date of Birth: " . $DoB . "<br>";
            echo "Address: " . $add;
        }
    ?>

</body>

</html>