<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Color</title>

    <!-- IMPORTANT: link CSS here -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h3>My Favorite Colors</h3>

My Favorite Color 1:
<?php echo $_SESSION['color1'] ?? ''; ?>
<div class="color-box" style="background-color:<?php echo $_SESSION['color1'] ?? ''; ?>"></div>
<br>

My Favorite Color 2:
<?php echo $_SESSION['color2'] ?? ''; ?>
<div class="color-box" style="background-color:<?php echo $_SESSION['color2'] ?? ''; ?>"></div>
<br>

My Favorite Color 3:
<?php echo $_SESSION['color3'] ?? ''; ?>
<div class="color-box" style="background-color:<?php echo $_SESSION['color3'] ?? ''; ?>"></div>
<br>

My Favorite Color 4:
<?php echo $_SESSION['color4'] ?? ''; ?>
<div class="color-box" style="background-color:<?php echo $_SESSION['color4'] ?? ''; ?>"></div>
<br>

My Favorite Color 5:
<?php echo $_SESSION['color5'] ?? ''; ?>
<div class="color-box" style="background-color:<?php echo $_SESSION['color5'] ?? ''; ?>"></div>
<br>

</body>
</html>
