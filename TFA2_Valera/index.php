<!DOCTYPE html>
<html>
<head>
    <title>TFA2 - Length Conversion Chart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>METRIC CONVERSIONS</h2>

    <?php
    echo "<p>1 centimetre = " . (1 * 10) . " millimetres</p>";
    echo "<p>1 metre = " . (1 * 100) . " centimetres</p>";
    echo "<p>1 kilometre = " . (1 * 1000) . " metres</p>";
    ?>
</div>

<div class="container">
    <h2>IMPERIAL CONVERSIONS</h2>

    <?php
    echo "<p>1 foot = " . (1 * 12) . " inches</p>";
    echo "<p>1 yard = " . (1 * 3) . " feet</p>";
    echo "<p>1 mile = " . (1 * 1760) . " yards</p>";
    ?>
</div>

<div class="container">
    <h2>METRIC TO IMPERIAL CONVERSIONS</h2>

    <?php
    echo "<p>1 millimetre = " . number_format(1 * 0.03937, 5) . " inches</p>";
    echo "<p>1 centimetre = " . number_format(1 * 0.39370, 5) . " inches</p>";
    echo "<p>1 metre = " . number_format(1 * 39.37008, 5) . " inches</p>";
    echo "<p>1 metre = " . number_format(1 * 3.28084, 5) . " feet</p>";
    echo "<p>1 kilometre = " . number_format(1 * 0.62137, 5) . " miles</p>";
    ?>
</div>

<div class="container">
    <h2>IMPERIAL TO METRIC CONVERSIONS</h2>

    <?php
    echo "<p>1 inch = " . (1 * 2.54) . " centimetres</p>";
    echo "<p>1 foot = " . (1 * 30.48) . " centimetres</p>";
    echo "<p>1 yard = " . (1 * 0.9144) . " metres</p>";
    echo "<p>1 mile = " . (1 * 1.609344) . " kilometres</p>";
    ?>
</div>

<div class="container">
    <h2>ALL POSSIBLE TWO-DIGIT DECIMAL COMBINATIONS</h2>

    <div class="output">
        <?php
        $count = 0;
        for ($i = 0; $i < 100; $i++) {
            echo str_pad($i, 2, '0', STR_PAD_LEFT);
            if ($i < 99) echo ", ";
            $count++;
            if ($count % 20 == 0) echo "<br>";
        }
        ?>
    </div>
</div>

</body>
</html>