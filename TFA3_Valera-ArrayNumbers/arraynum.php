<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Number</title>
    <link rel="stylesheet" href="arraynum.css">
</head>
<body>

<h2>Array Operations</h2>

<?php
$numbers = [10, 5, 8, 2, 6, 3, 7, 4, 9, 1];

$sum = 0;
$product = 1;
$difference = $numbers[0];
$quotient = $numbers[0];

foreach($numbers as $index => $num){
    $sum += $num;
    $product *= $num;

    if($index != 0){
        $difference -= $num;
        $quotient /= $num;
    }
}

echo "<div class='header'>";
echo "Array list: " . implode(", ", $numbers);
echo "</div>";

echo "<table>";

echo "<tr>
        <td>Addition</td>
        <td>$sum</td>
      </tr>";

echo "<tr>
        <td>Subtraction</td>
        <td>$difference</td>
      </tr>";

echo "<tr>
        <td>Multiplication</td>
        <td>$product</td>
      </tr>";

echo "<tr>
        <td>Division</td>
        <td>$quotient</td>
      </tr>";

echo "</table>";
?>

</body>
</html>