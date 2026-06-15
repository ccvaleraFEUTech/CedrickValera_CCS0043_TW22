<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms (GET Information Webpage)</title>

<style>
        body {
            font-family: Arial;
        }

        label {
            display: inline-block;
            width: 140px;
        }

        .result {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h3>GET Method</h3>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        <p>
            <label>First Name:</label>
            <input type="text" name="firstname" required>
        </p>

        <p>
            <label>Middle Name:</label>
            <input type="text" name="middlename" required>
        </p>

        <p>
            <label>Last Name:</label>
            <input type="text" name="lastname" required>
        </p>

        <p>
            <label>Date of Birth:</label>
            <input type="text" name="dateofbirth" required>
        </p>

        <p>
            <label>Address:</label>
            <input type="text" name="address" required>
        </p>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
        if (isset($_GET['submit']))
        {
            $first  = $_GET['firstname'];
            $middle = $_GET['middlename'];
            $last   = $_GET['lastname'];
            $dob    = $_GET['dateofbirth'];
            $addr   = $_GET['address'];

            echo "<div class='result'>";
            echo "<h4>Submitted Data:</h4>";
            echo "Full Name: " . $first . " " . $middle . " " . $last . "<br>";
            echo "Date of Birth: " . $dob . "<br>";
            echo "Address: " . $addr;
            echo "</div>";
        }
    ?>

</body>
</html>
