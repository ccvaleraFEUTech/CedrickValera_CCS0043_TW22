<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>

    <style>
        body {
            font-family: serif;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            border: 1px solid black;
        }

        td {
            width: 30px;
            height: 30px;
            text-align: center;
            border: 1px solid black;
            font-weight: bold;
        }

        .yellow {
            background-color: yellow;
        }

        .green {
            background-color: lightgreen;
        }
    </style>
</head>

<body>

<h1>Multiplication Table</h1>

<table>
<?php
// LOOP VARIABLES

// Outer loop variable controls table rows
for ($row = 0; $row <= 10; $row++) {

    // Display opening table row using echo
    echo "<tr>";

    // Inner loop variable controls table columns
    for ($col = 0; $col <= 10; $col++) {

        // Variable to store multiplication result
        $product = $row * $col;

        //CONDITIONAL STATEMENTS

        // Determine background color based on even or odd sum
        if ( ($row + $col) % 2 == 0 ) {
            $colorClass = "yellow";
        } else {
            $colorClass = "green";
        }

        // Display table cell using echo
        echo "<td class=\"$colorClass\">$product</td>";
    }

    // Close table row using print
    print "</tr>";
}
?>
</table>

</body>
</html>
