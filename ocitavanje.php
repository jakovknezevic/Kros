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

<form method="GET" action="ocitavanje1.php">
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

<p>
    <form action="index.php">
        <input type="submit" value="Početak"><br><br>
    </form>

</p>


<!--
<a href="index.php">Početak</a>
-->

</body>
</html>