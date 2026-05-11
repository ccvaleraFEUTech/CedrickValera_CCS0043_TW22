<!DOCTYPE html>
<!-- This tells the browser that this document uses HTML5 -->
<html lang="en">
<head>
    <!-- Character encoding -->
    <meta charset="UTF-8">

    <!-- Makes the page responsive on different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title shown on the browser tab -->
    <title>Sample PHP Practice</title>
</head>
<body>
    <div>
        <?php
        // This function accepts one number as a parameter
        // and returns the square of that number
        function square($number) {
            return $number * $number;
        }

        // This is an indexed array containing numbers
        $numbers = array(1, 2, 3, 4, 5);
        ?>

        <!-- Table title -->
        <h3>Number and its square</h3>

        <!-- Start of the table -->
        <table border="1">

            <!-- Table header section -->
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Square</th>
                </tr>
            </thead>

            <!-- Table body -->
            <tbody>
                <?php
                // Loop through each value in the $numbers array
                // $num represents the current element
                foreach ($numbers as $num):
                ?>
                <tr>
                    <!-- Display the number -->
                    <td><?= $num; ?></td>

                    <!-- Call the square() function and display the result -->
                    <td><?= square($num); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>