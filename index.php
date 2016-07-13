<?php require('check.php'); ?>
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

<form action="logout.php">
    <input type="submit" value="Logout"><br><br>
</form>

<h1>Kros</h1>

<p>


<form action="upis.php">
    <input type="submit" value="Upis učenika"><br><br>
</form>

<form action="ocitavanje.php">
    <input type="submit" value="Očitavanje barkod skenerom"><br><br>
</form>

<form action="unos_kat.php">
    <input type="submit" value="Unos kategorija"><br><br>
</form>

<form action="unos_skola.php">
    <input type="submit" value="Unos Škole"><br><br>
</form>

<form action="unos_nastavnika.php">
    <input type="submit" value="Unos Nastavnika"><br><br>
</form>

<form action="unos_barkod.php">
    <input type="submit" value="Barkod generator"><br><br>
</form>

<!--
<form action="test.php">
    <input type="submit" value="Test"><br><br>
</form>

-->

    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    -->



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

</body>
</html>