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

<form method="GET" action="unos_kat1.php">
    Broj Kategorije:
    <input type="text" name="Id_Kat"><br><br>

    Naziv kategorije:
    <input type="text" name="Naziv">

    <br><br><input type="submit" value="Submit">

    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    -->


</form>
</p>

<p>
<form action="index.php">
    <input type="submit" value="Početak"><br><br>
</form>

</p>

</body>
</html>