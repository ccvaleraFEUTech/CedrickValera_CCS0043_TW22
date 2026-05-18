<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions Activity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$friends = [
    "Deign Sumalpong",
    "Marc Villuaneva",
    "Katherine Barz",
    "Christian Nellas",
    "Xander Canlas"
];
?>

<table>
    <tr>
        <th class="title" colspan="6">List of Names</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Check Position of 'a'</th>
        <th>Reverse Name</th>
    </tr>

    <?php
    for ($i = 0; $i < count($friends); $i++) {

        $name = strtolower($friends[$i]);

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>" . strlen($name) . "</td>";
        echo "<td>" . ucfirst($name) . "</td>";

        $replaced = str_replace(["a","e","i","o","u"], "@", $name);
        echo "<td>$replaced</td>";

        $pos = strpos($name, "a");
        echo "<td>" . ($pos === false ? "Not found" : $pos) . "</td>";

        echo "<td>" . strrev($name) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>