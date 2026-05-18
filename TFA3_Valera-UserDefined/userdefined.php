<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
    <link rel="stylesheet" href="userdefined.css">
</head>
<body>

<?php

function calculate($a, $b, $c){
    $sum = $a + $b + $c;
    $difference = $a - $b - $c;
    $product = $a * $b * $c;
    $quotient = $a / $b / $c;

    return [
        "sum"=>$sum,
        "difference"=>$difference,
        "product"=>$product,
        "quotient"=>$quotient
    ];
}

$a = 25;
$b = 13;
$c = 6;

$result = calculate($a, $b, $c);

echo "<table>";

echo "<tr>
        <th colspan='2'>My Parameter values: $a, $b, $c</th>
      </tr>";

echo "<tr>
        <td>Addition</td>
        <td>{$result['sum']}</td>
      </tr>";

echo "<tr>
        <td>Subtraction</td>
        <td>{$result['difference']}</td>
      </tr>";

echo "<tr>
        <td>Multiplication</td>
        <td>{$result['product']}</td>
      </tr>";

echo "<tr>
        <td>Division</td>
        <td>{$result['quotient']}</td>
      </tr>";

echo "</table>";

?>

</body>
</html>