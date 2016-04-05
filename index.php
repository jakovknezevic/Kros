<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--
    <link rel="stylesheet" type="text/css" href="forma.css">
    -->
    <title>Kros</title>
</head>

<body>
<h1>Kros</h1>

<p>

<form method="post" action="rezultat.php">
    Bar Kod:<br>
    <input name="Id_Bar" onmouseover="this.focus();" type="text">
    <!--
    <input type="number" name="Id_Bar" min="1" max="10">
    -->
    Kategorija:
    <input type="number" name="Kat_Id" min="1" max="10" " "><br>
    Ime:<br>
    <input type="text" name="Ime">
    Prezime:
    <input type="text" name="Prezime"><br>


    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    -->
    <input type="submit" value="Submit">

</form>
</p>

<?php
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
echo 'We don\'t have mysqli!!!';
} else {
echo 'Phew we have it!';
}
?>

</body>
</html>