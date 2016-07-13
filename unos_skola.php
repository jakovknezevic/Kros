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

<form method="GET" action="unos_skola1.php">
    <!--
    Bar Kod:<br>

    <input name="Id_Bar" onmouseover="this.focus();" type="text">

    <input type="text" name="Id_Bar">
-->
    Naziv Škole:
    <input type="text" name="naziv"><br>

    <br><input type="submit" value="Submit">

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