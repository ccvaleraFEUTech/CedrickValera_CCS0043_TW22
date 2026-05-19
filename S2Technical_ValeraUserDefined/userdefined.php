<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="userdefined.css">
</head>
<body>

<?php

// USER-DEFINED FUNCTIONS

// Cube: V = s^3
function volumeCube($s){
    return pow($s, 3);
}

// Rectangular Prism: V = l*w*h
function volumePrism($l, $w, $h){
    return $l * $w * $h;
}

// Cylinder: V = πr^2h
function volumeCylinder($r, $h){
    return pi() * pow($r, 2) * $h;
}

// Cone: V = 1/3 πr^2h
function volumeCone($r, $h){
    return (1/3) * pi() * pow($r, 2) * $h;
}

// Sphere: V = 4/3 πr^3
function volumeSphere($r){
    return (4/3) * pi() * pow($r, 3);
}


// SAMPLE VALUES
$s = 5;
$l = 4; $w = 3; $h = 6;
$r = 3;


// TABLE OUTPUT

echo "<table>";

echo "<tr>
        <th colspan='3'>Volume of Shapes</th>
      </tr>";

echo "<tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
      </tr>";

// Cube
echo "<tr>
        <td>s = $s</td>
        <td>V=s<sup>3</sup></td>
        <td>".volumeCube($s)."</td>
      </tr>";

// Rectangular Prism
echo "<tr>
        <td>l=$l, w=$w, h=$h</td>
        <td>V=l×w×h</td>
        <td>".volumePrism($l, $w, $h)."</td>
      </tr>";

// Cylinder
echo "<tr>
        <td>r=$r, h=$h</td>
        <td>V=πr<sup>2</sup>h</td>
        <td>".number_format(volumeCylinder($r, $h), 2)."</td>
      </tr>";

// Cone
echo "<tr>
        <td>r=$r, h=$h</td>
        <td>V=(1/3)πr<sup>2</sup>h</td>
        <td>".number_format(volumeCone($r, $h), 2)."</td>
      </tr>";

// Sphere
echo "<tr>
        <td>r=$r</td>
        <td>V=(4/3)πr<sup>3</sup></td>
        <td>".number_format(volumeSphere($r), 2)."</td>
      </tr>";

echo "</table>";

?>

</body>
</html>