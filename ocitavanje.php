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

<form method="post" action="ocitavanje1.php">
    Bar Kod:<br>
    <input type="text" onmouseover="this.focus();" name="Bar">
    <!--
    <input type="number" name="Id_Bar" min="1" max="10">
    -->


    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    -->


</form>
</p>

<?php
/*
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
echo 'We don\'t have mysqli!!!';
} else {
echo 'Phew we have it!';
}
*/
?>

<a href="index.php">Početak</a>

</body>
</html>