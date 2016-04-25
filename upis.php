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

<form method="GET" action="upis1.php">
    Bar Kod:<br>
    <!--
    <input name="Id_Bar" onmouseover="this.focus();" type="text">
     -->
    <input type="text" name="Id_Bar">

    Kategorija:
    <input type="text" name="Kat_Id"><br>
    Ime:<br>
    <input type="text" name="Ime">
    Prezime:
    <input type="text" name="Prezime"><br>

    <br><input type="submit" value="Submit">

    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    -->


</form>


<form method="GET" action="test.php">

    DRUGA FORMA


    Kategorija:
    <input type="text" name="Kat_Id"><br>
    Ime:<br>
    <input type="text" name="Ime">
    Prezime:
    <input type="text" name="Prezime"><br>

    <br><input type="submit" value="Submit">

    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    -->


</form>
</p>



<a href="index.php">Početak</a>

</body>
</html>