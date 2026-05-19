<?php
$title = "Home Page";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="section">
    <h2>Welcome</h2>
    <p>This is my online resume. Use the menu to navigate.</p>
</div>

<?php require("includes/footer.php"); ?>

</body>
</html>
