<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Color</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h3>Enter Your Favorite Colors (HEX Format)</h3>
<p>Example: #FF0000 for RED</p>

<form method="post" action="colors.php">

<table border="1">

    <tr>
        <th colspan="2">Enter Colors</th>
    </tr>

    <tr>
        <td>Favorite Color 1:</td>
        <td><input type="text" name="color1" placeholder="#FF0000" required></td>
    </tr>

    <tr>
        <td>Favorite Color 2:</td>
        <td><input type="text" name="color2" placeholder="#00FF00" required></td>
    </tr>

    <tr>
        <td>Favorite Color 3:</td>
        <td><input type="text" name="color3" placeholder="#0000FF" required></td>
    </tr>

    <tr>
        <td>Favorite Color 4:</td>
        <td><input type="text" name="color4" placeholder="#FFFF00" required></td>
    </tr>

    <tr>
        <td>Favorite Color 5:</td>
        <td><input type="text" name="color5" placeholder="#800080" required></td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="Submit Colors">
        </td>
    </tr>

</table>

</form>

</body>
</html>
